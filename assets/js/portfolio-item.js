(function () {
  function initSlider(root) {
    var slides = Array.prototype.slice.call(root.querySelectorAll(".miracle-portfolio-slider__slide"));
    var dots = Array.prototype.slice.call(root.querySelectorAll("[data-portfolio-dot]"));
    var prev = root.querySelector("[data-portfolio-prev]");
    var next = root.querySelector("[data-portfolio-next]");
    if (!slides.length) return;

    var index = 0;

    function sync() {
      slides.forEach(function (el, i) {
        el.classList.toggle("is-active", i === index);
      });
      dots.forEach(function (el, i) {
        el.classList.toggle("is-active", i === index);
      });
    }

    function go(delta) {
      index = (index + delta + slides.length) % slides.length;
      sync();
    }

    if (prev) prev.addEventListener("click", function () { go(-1); });
    if (next) next.addEventListener("click", function () { go(1); });

    dots.forEach(function (dot, i) {
      dot.addEventListener("click", function () {
        index = i;
        sync();
      });
    });

    sync();
  }

  function initPortfolioSliders(scope) {
    var root = scope || document;
    Array.prototype.forEach.call(root.querySelectorAll("[data-portfolio-slider]"), initSlider);
  }

  document.addEventListener("DOMContentLoaded", function () {
    initPortfolioSliders(document);
  });

  window.initPortfolioSliders = initPortfolioSliders;
})();
