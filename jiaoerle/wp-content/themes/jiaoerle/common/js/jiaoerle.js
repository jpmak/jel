  //检测移动设备
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

  } else {
      $('body a').attr('target', '_blank');
  }
  var swiper = new Swiper('.swiper', {
      pagination: '.swiper-pagination',
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      paginationClickable: true,
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: 4000,
      autoplayDisableOnInteraction: false,
      lazyLoading: true, // 滚动加载
      loop: true
  });
  //main
  $(window).scroll(function() {
      // 获得div的高度

      if ($(window).scrollTop() > 0) {
          // 滚动到指定位置
          $(".loaded").addClass("is-scroll");
      } else {
          $(".loaded").removeClass("is-scroll");
      }
  });

  //navbar-toggle      
  $('.navbar-nav li').click(function() {
      $('.navbar-collapse').removeClass("in");
      $('.navbar-toggle').addClass("collapsed").attr("aria-expanded", "false");
  });
  $('.navbar-nav li:eq(0)').click(function() {
      $("html,body").animate({ scrollTop: $("#home").offset().top }, 500);
  });
  $('.navbar-nav li:eq(1)').click(function() {
      $("html,body").animate({ scrollTop: $("#about").offset().top }, 500);
  });
  $('.navbar-nav li:eq(2)').click(function() {
      $("html,body").animate({ scrollTop: $("#brief_1").offset().top }, 500);
  });
  $('.navbar-nav li:eq(3)').click(function() {
      $("html,body").animate({ scrollTop: $("#pricing").offset().top }, 500);
  });
  $('.navbar-nav li:eq(4)').click(function() {
      $("html,body").animate({ scrollTop: $("#contact").offset().top }, 500);
  });
  $(function() {
      var home_top = $("#home").offset().top - 100;
      var about_top = $("#about").offset().top - 100;
      var bri_top = $("#brief_1").offset().top - 100;
      var pri_top = $("#pricing").offset().top - 100;
      var con_top = $("#contact").offset().top - 250;
      //alert(tops);
      $(window).scroll(function() {
          var scroH = $(this).scrollTop();
          if (scroH >= con_top) {
              set_cur(".con");
          } else if (scroH >= pri_top) {
              set_cur(".pri");
          } else if (scroH >= bri_top) {
              set_cur(".bri");
          } else if (scroH >= about_top) {
              set_cur(".about");
          } else if (scroH >= home_top) {
              set_cur(".home");
          }
      });

  });

  function set_cur(n) {
      if ($(".nav li").hasClass("active")) {
          $(".nav li").removeClass("active");
      }
      $(".nav li" + n).addClass("active");
  };
  //scrollReveal
  (function($) {
      'use strict';
      window.scrollReveal = new scrollReveal({ reset: true, move: '50px' });
  })();


