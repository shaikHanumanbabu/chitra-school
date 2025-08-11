$(function () {
  'use strict'; // Start of use strict

  $(document).on("click", ".menuToggler", function (e) {
    e.preventDefault();
    $(".sidebarMenu").toggleClass("active");
    $(this).toggleClass("active");
  });
  $(".sidebarMenuOverlay, .SMACloser").on("click", function () {
    $(".sidebarMenu").removeClass("active");
    $(".menuToggler").removeClass("active");
  });
  $(".SMABody ul li.menu-item-has-children > a").on("click", function (e) {
    e.preventDefault();
    $(this).parent("li.menu-item-has-children").toggleClass("active");
    $(this).siblings("ul.sub-menu").slideToggle();
  });

  /*--------------------------
   Popup Image
  ---------------------------- */

  $('.popup_img').lightcase({
    transition: 'elastic',
    showSequenceInfo: false,
    slideshow: true,
    swipe: true,
    showTitle: false,
    controls: true
  });

  $('.open-popup-link').magnificPopup({
    type: 'inline',
    midClick: true,
    mainClass: 'mfp-fade'
  });

  $('.popup_video').magnificPopup({
    type: 'iframe',
  });

  /*------------------------------------------------------------------
         Fancybox
      ------------------------------------------------------------------*/
  var fancy = $(".fancybox");
  if (fancy.length) {
    fancy.fancybox({
      arrows: true,
      animationEffect: "zoom-in-out",
      transitionEffect: "zoom-in-out",
    });
  }

  /*--------------------------
  scrollUp
  ---------------------------- */
  $.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
  });


  /*--------------------------
   Brand Sec
  ---------------------------- */
  $('.brand-active').owlCarousel({
    loop: true,
    margin: 30,
    items: 5,
    autoplay: true,
    autoplaySpeed: 2000,
    nav: false,
    dots: false,
    navText: ['<i class="fal fa-long-arrow-left"></i>', '<i class="fal fa-long-arrow-right"></i>'],
    responsive: {
      0: {
        items: 1,
        margin: 0,
        nav: false
      },
      600: {
        items: 3,
      },
      980: {
        items: 4,
      },
      1200: {
        items: 5,
      },
    }
  })

  $('.tmsToggle').on('click', function (e) {
    e.preventDefault();
    $(this).parent().toggleClass('active');
  });

  if ($(".odometer").length) {
    var odo = $(".odometer");
    odo.each(function () {
      $(this).appear(function () {
        var countNumber = $(this).attr("data-count");
        $(this).html(countNumber);
      });
    });
  }
  //Fact Counter + Text Count
  if ($(".count-box").length) {
    $(".count-box").appear(
      function () {
        var $t = $(this),
          n = $t.find(".count-text").attr("data-stop"),
          r = parseInt($t.find(".count-text").attr("data-speed"), 10);

        if (!$t.hasClass("counted")) {
          $t.addClass("counted");
          $({
            countNum: $t.find(".count-text").text()
          }).animate(
            {
              countNum: n
            },
            {
              duration: r,
              easing: "linear",
              step: function () {
                $t.find(".count-text").text(Math.floor(this.countNum));
              },
              complete: function () {
                $t.find(".count-text").text(this.countNum);
              }
            }
          );
        }
      },
      {
        accY: 0
      }
    );
  }

  // Popular Causes Progress Bar
  if ($(".count-bar").length) {
    $(".count-bar").appear(
      function () {
        var el = $(this);
        var percent = el.data("percent");
        $(el).css("width", percent).addClass("counted");
      },
      {
        accY: -50
      }
    );
  }


  // /*==========  testimonial  ==========*/
  var swiper = new Swiper(".testimonial-slider", {
    slidesPerView: 2,
    loop: true,
    speed: 1000,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      992: {
        slidesPerView: 1
      },
      1200: {
        slidesPerView: 2
      },
    }
  });


  /*------------------------------------------------------------------
       WOW Animation
   ------------------------------------------------------------------*/
  if ($('.wow').length) {
    var wow = new WOW(
      {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true       // act on asynchronously loaded content (default is true)
      }
    );
    wow.init();
  }

  /*------------------------------------------------------------------
      Year
  ------------------------------------------------------------------*/
  $(function () {
    var theYear = new Date().getFullYear();
    $('#year').html(theYear);
  });

  $(".searchBtn a").on("click", function (e) {
    e.preventDefault();
    $(".searchBtn").toggleClass("active");
  });



});

/*------------------------------------------------------------------
 Loader 
------------------------------------------------------------------*/
jQuery(window).on("load scroll", function () {
  'use strict'; // Start of use strict
  // Loader 
  $('#dvLoading').fadeOut('slow', function () {
    $(this).remove();
  });


});
