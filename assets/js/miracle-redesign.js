(function () {
  function initMenu() {
    var toggle = document.querySelector("[data-miracle-menu-toggle]");
    var nav = document.querySelector("[data-miracle-nav]");
    if (!toggle || !nav) return;

    toggle.addEventListener("click", function () {
      var open = nav.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
  }

  function initHeroSlider() {
    var root = document.querySelector("[data-miracle-slider]");
    if (!root) return;

    var slides = Array.prototype.slice.call(root.querySelectorAll(".miracle-slide"));
    var dots = Array.prototype.slice.call(root.querySelectorAll("[data-miracle-dot]"));
    if (!slides.length) return;

    var index = 0;
    var timer = null;
    var delay = 6000;
    var swipeStartX = null;
    var swipeStartY = null;
    var swipeThreshold = 40;

    function sync() {
      slides.forEach(function (slide, idx) {
        slide.classList.toggle("is-active", idx === index);
      });
      dots.forEach(function (dot, idx) {
        dot.classList.toggle("is-active", idx === index);
      });
    }

    function go(step) {
      index = (index + step + slides.length) % slides.length;
      sync();
    }

    function play() {
      stop();
      timer = window.setInterval(function () {
        go(1);
      }, delay);
    }

    function stop() {
      if (timer) {
        window.clearInterval(timer);
        timer = null;
      }
    }

    dots.forEach(function (dot, idx) {
      dot.addEventListener("click", function () {
        index = idx;
        sync();
        play();
      });
    });

    root.addEventListener("click", function (event) {
      if (event.target.closest("[data-miracle-dot]")) return;
      var sliderRect = root.getBoundingClientRect();
      var x = event.clientX - sliderRect.left;
      if (x < sliderRect.width * 0.33) {
        go(-1);
        play();
      } else if (x > sliderRect.width * 0.67) {
        go(1);
        play();
      }
    });

    root.addEventListener("mouseenter", stop);
    root.addEventListener("mouseleave", play);
    root.addEventListener("focusin", stop);
    root.addEventListener("focusout", play);

    root.addEventListener("touchstart", function (event) {
      if (!event.touches || !event.touches.length) return;
      swipeStartX = event.touches[0].clientX;
      swipeStartY = event.touches[0].clientY;
      stop();
    }, { passive: true });

    root.addEventListener("touchend", function (event) {
      if (swipeStartX === null || !event.changedTouches || !event.changedTouches.length) {
        play();
        return;
      }
      var endX = event.changedTouches[0].clientX;
      var endY = event.changedTouches[0].clientY;
      var deltaX = endX - swipeStartX;
      var deltaY = endY - swipeStartY;
      if (Math.abs(deltaX) > swipeThreshold && Math.abs(deltaX) > Math.abs(deltaY)) {
        if (deltaX > 0) {
          go(-1);
        } else {
          go(1);
        }
      }
      swipeStartX = null;
      swipeStartY = null;
      play();
    }, { passive: true });

    sync();
    play();
  }

  function markActiveLink() {
    var nav = document.querySelector("[data-miracle-nav]");
    if (!nav) return;
    var path = window.location.pathname.split("/").pop() || "index.html";
    var links = Array.prototype.slice.call(nav.querySelectorAll("a"));
    links.forEach(function (link) {
      var href = link.getAttribute("href");
      if (href === path) {
        link.setAttribute("aria-current", "page");
      } else {
        link.removeAttribute("aria-current");
      }
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    initMenu();
    initHeroSlider();
    markActiveLink();
  });
})();
