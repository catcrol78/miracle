/**
 * Локальный просмотр portfolio-item-local.html (данные в #portfolio-items-embedded).
 * Доверяйте только своему JSON; body_html вставляется как HTML.
 */
(function () {
  function esc(s) {
    return String(s)
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/"/g, "&quot;");
  }

  function telHref(phone) {
    return "tel:" + String(phone).replace(/[^0-9+]/g, "");
  }

  function buildFacts(item) {
    var parts = [];
    if (item.address) parts.push("<p><strong>Адрес:</strong> " + esc(item.address) + "</p>");
    if (item.phone) {
      parts.push(
        "<p><strong>Телефон:</strong> <a href=\"" +
          esc(telHref(item.phone)) +
          "\">" +
          esc(item.phone) +
          "</a></p>"
      );
    }
    if (item.work_hours) parts.push("<p><strong>Режим:</strong> " + esc(item.work_hours) + "</p>");
    if (item.site) {
      parts.push(
        "<p><strong>Сайт:</strong> <a href=\"" +
          esc(item.site) +
          "\" target=\"_blank\" rel=\"noopener noreferrer\">" +
          esc(item.site) +
          "</a></p>"
      );
    }
    return parts.join("");
  }

  function buildGallery(item) {
    var images = Array.isArray(item.images) ? item.images : [];
    var valid = images.filter(function (im) {
      return im && im.src;
    });
    if (!valid.length) return "";

    var layout = item.gallery_layout === "slider" ? "slider" : "grid";
    if (layout === "grid") {
      var cells = valid
        .map(function (im) {
          return (
            "<figure class=\"miracle-portfolio-grid__cell\"><img src=\"" +
            esc(im.src) +
            "\" alt=\"" +
            esc(im.alt || "") +
            "\" loading=\"lazy\"></figure>"
          );
        })
        .join("");
      return '<div class="miracle-portfolio-grid">' + cells + "</div>";
    }

    var slides = valid
      .map(function (im, idx) {
        return (
          '<figure class="miracle-portfolio-slider__slide' +
          (idx === 0 ? " is-active" : "") +
          '"><img src="' +
          esc(im.src) +
          '" alt="' +
          esc(im.alt || "") +
          '" loading="' +
          (idx === 0 ? "eager" : "lazy") +
          '"></figure>'
        );
      })
      .join("");

    var dots = valid
      .map(function (_im, idx) {
        return (
          '<button type="button" role="tab" class="miracle-portfolio-slider__dot' +
          (idx === 0 ? " is-active" : "") +
          '" data-portfolio-dot="' +
          idx +
          '" aria-label="Фото ' +
          (idx + 1) +
          '"></button>'
        );
      })
      .join("");

    return (
      '<div class="miracle-portfolio-slider" data-portfolio-slider>' +
      '<div class="miracle-portfolio-slider__viewport">' +
      slides +
      "</div>" +
      '<div class="miracle-portfolio-slider__nav" aria-hidden="true">' +
      '<button type="button" class="miracle-portfolio-slider__btn" data-portfolio-prev aria-label="Предыдущее фото">‹</button>' +
      '<button type="button" class="miracle-portfolio-slider__btn" data-portfolio-next aria-label="Следующее фото">›</button>' +
      "</div>" +
      '<div class="miracle-portfolio-slider__dots" role="tablist">' +
      dots +
      "</div></div>"
    );
  }

  function renderNotFound(root, id) {
    document.title = "Проект не найден | Miracle";
    root.innerHTML =
      "<h1 class=\"miracle-portfolio-detail__title\">Проект не найден</h1>" +
      "<p>Нет записи с номером " +
      esc(String(id)) +
      ".</p>" +
      '<p><a href="tovary.html">← Вернуться к списку работ</a></p>';
  }

  function renderItem(root, item) {
    document.title = item.title + " | Наши работы Miracle";
    var desc = item.meta_description || item.title;
    var meta = document.querySelector('meta[name="description"]');
    if (meta) meta.setAttribute("content", desc);

    var bodyHtml = item.body_html ? '<div class="miracle-portfolio-detail__body">' + item.body_html + "</div>" : "";

    root.innerHTML =
      '<nav class="miracle-portfolio-detail__back" aria-label="Назад к каталогу">' +
      '<a href="tovary.html">← Наши работы</a></nav>' +
      '<p class="miracle-portfolio-detail__city">' +
      esc(item.city || "") +
      "</p>" +
      '<h1 class="miracle-portfolio-detail__title">' +
      esc(item.title || "") +
      "</h1>" +
      '<div class="miracle-portfolio-detail__facts">' +
      buildFacts(item) +
      "</div>" +
      bodyHtml +
      buildGallery(item);

    if (window.initPortfolioSliders) {
      window.initPortfolioSliders(root);
    }
  }

  document.addEventListener("DOMContentLoaded", function () {
    var elJson = document.getElementById("portfolio-items-embedded");
    var root = document.getElementById("portfolio-item-root");
    if (!elJson || !root) return;

    var data;
    try {
      data = JSON.parse(elJson.textContent);
    } catch (e) {
      root.innerHTML = "<p>Ошибка чтения данных портфолио.</p>";
      return;
    }

    var params = new URLSearchParams(window.location.search);
    var id = parseInt(params.get("id") || "1", 10);
    var item = null;
    for (var i = 0; i < data.length; i++) {
      if (data[i].id === id) {
        item = data[i];
        break;
      }
    }

    if (!item) {
      renderNotFound(root, id);
      return;
    }
    renderItem(root, item);
  });
})();
