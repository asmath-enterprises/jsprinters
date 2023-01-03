(function ($) {
  "use strict";
  jQuery(".mean-menu").meanmenu({ meanScreenWidth: "991" });
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 150) {
      $(".navbar-area").addClass("sticky-nav");
    } else {
      $(".navbar-area").removeClass("sticky-nav");
    }
  });
  $(".banner-into-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: { 0: { items: 2 }, 1000: { items: 3 } },
  });
  $(".service-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
      "<i class='fa-solid fa-chevron-left'></i>",
      "<i class='fa-solid fa-chevron-right'></i>",
    ],
    responsive: { 0: { items: 1 }, 768: { items: 2 }, 1000: { items: 3 } },
  });
  $("#tabs-item li a").on("click", function (e) {
    $("#tabs-item li, #prices-content .active")
      .removeClass("active")
      .removeClass("fadeInUp");
    $(this).parent().addClass("active");
    var activeTab = $(this).attr("href");
    $(activeTab).addClass("active fadeInUp");
    e.preventDefault();
  });
  $(".testimonial-slider").owlCarousel({
    loop: true,
    items: 1,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
      "<i class='fa-solid fa-chevron-left'></i>",
      "<i class='fa-solid fa-chevron-right'></i>",
    ],
  });
  $(".home-slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: { 0: { nav: false }, 767: { nav: false } },
    navText: [
      "<i class='fa-solid fa-chevron-left'></i>",
      "<i class='fa-solid fa-chevron-right'></i>",
    ],
  });
  $(".product-images-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: { 0: { items: 2 }, 1000: { items: 5 } },
  });
  $(".testimonial-slider-two").owlCarousel({
    loop: true,
    items: 1,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
      "<i class='fa-solid fa-chevron-left'></i>",
      "<i class='fa-solid fa-chevron-right'></i>",
    ],
  });
  $(".tab ul.tabs").addClass("active").find("> li:eq(0)").addClass("current");
  $(".tab ul.tabs li a").on("click", function (g) {
    var tab = $(this).closest(".tab"),
      index = $(this).closest("li").index();
    tab.find("ul.tabs > li").removeClass("current");
    $(this).closest("li").addClass("current");
    tab
      .find(".tab_content")
      .find("div.tabs_item")
      .not("div.tabs_item:eq(" + index + ")")
      .slideUp();
    tab
      .find(".tab_content")
      .find("div.tabs_item:eq(" + index + ")")
      .slideDown();
    g.preventDefault();
  });
  $(".service-dtls-slider").owlCarousel({
    loop: true,
    margin: 30,
    items: 1,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
      "<i class='fa-solid fa-chevron-left'></i>",
      "<i class='fa-solid fa-chevron-right'></i>",
    ],
  });
  $(".accordion")
    .find(".accordion-title")
    .on("click", function () {
      $(this).toggleClass("active");
      $(this).next().slideToggle("fast");
      $(".accordion-content").not($(this).next()).slideUp("fast");
      $(".accordion-title").not($(this)).removeClass("active");
    });
  function makeTimer() {
    var endTime = new Date("july  30, 2022 17:00:00 PDT");
    var endTime = Date.parse(endTime) / 1000;
    var now = new Date();
    var now = Date.parse(now) / 1000;
    var timeLeft = endTime - now;
    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - days * 86400) / 3600);
    var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
    var seconds = Math.floor(
      timeLeft - days * 86400 - hours * 3600 - minutes * 60
    );
    if (hours < "10") {
      hours = "0" + hours;
    }
    if (minutes < "10") {
      minutes = "0" + minutes;
    }
    if (seconds < "10") {
      seconds = "0" + seconds;
    }
    $("#days").html(days + "<span>Days</span>");
    $("#hours").html(hours + "<span>Hours</span>");
    $("#minutes").html(minutes + "<span>Minutes</span>");
    $("#seconds").html(seconds + "<span>Seconds</span>");
  }
  setInterval(function () {
    makeTimer();
  }, 300);
  $("select").niceSelect();
  $(".input-counter").each(function () {
    var spinner = jQuery(this),
      input = spinner.find('input[type="text"]'),
      btnUp = spinner.find(".plus-btn"),
      btnDown = spinner.find(".minus-btn"),
      min = input.attr("min"),
      max = input.attr("max");
    btnUp.on("click", function () {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });
    btnDown.on("click", function () {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });
  });

  $("body").append(
    '<div id="toTop" class="top-btn"><i class="fa-solid fa-arrow-up"></i></div>'
  );
  $(window).on("scroll", function () {
    if ($(this).scrollTop() != 0) {
      $("#toTop").fadeIn();
    } else {
      $("#toTop").fadeOut();
    }
  });
  $("#toTop").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
  jQuery(window).on("load", function () {
    jQuery(".preloader").fadeOut(500);
  });
  // $("body").append(
  //   "<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>"
  // );
})(jQuery);

// function setTheme(themeName) {
//   localStorage.setItem("js_theme", themeName);
//   document.documentElement.className = themeName;
// }

// function toggleTheme() {
//   if (localStorage.getItem("js_theme") === "theme-dark") {
//     setTheme("theme-light");
//   } else {
//     setTheme("theme-dark");
//   }
// }
// (function () {
//   if (localStorage.getItem("js_theme") === "theme-dark") {
//     setTheme("theme-dark");
//     document.getElementById("slider").checked = true;
//   } else {
//     setTheme("theme-light");
//     document.getElementById("slider").checked = false;
//   }
// })();
