AOS.init({
  duration: 800,
  easing: 'slide',
  once: true
});
$(function() {

  "use strict";
  var siteMenuClone = function() {

    $('.js-clone-nav').each(function() {
      var $this = $(this);
      $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
    });
    setTimeout(function() {
      var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

    $('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();
    });

    $(window).resize(function() {
      var $this = $(this),
        w = $this.width();

      if ( w > 768 ) {
        if ( $('body').hasClass('offcanvas-menu') ) {
          $('body').removeClass('offcanvas-menu');
        }
      }
    })

    $('body').on('click', '.js-menu-toggle', function(e) {
      var $this = $(this);
      e.preventDefault();

      if ( $('body').hasClass('offcanvas-menu') ) {
        $('body').removeClass('offcanvas-menu');
        $this.removeClass('active');
      } else {
        $('body').addClass('offcanvas-menu');
        $this.addClass('active');
      }
    });

    // click outisde offcanvas
    $(document).on('mouseup', 'html', function(e) {
      var container = $(".site-mobile-menu");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ( $('body').hasClass('offcanvas-menu') ) {
          $('body').removeClass('offcanvas-menu');
        }
      }
    });
  };
  siteMenuClone();

  var siteMagnificPopup = function() {
    $('.image-popup').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
       gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });
  };
  siteMagnificPopup();


  var siteCarousel = function () {
    if ( $('.nonloop-block-13').length > 0 ) {
      $('.nonloop-block-13').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        stagePadding: 0,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: true,
        navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
        responsive:{
          600:{
            margin: 20,
            stagePadding: 0,
            items: 1
          },
          1000:{
            margin: 20,
            stagePadding: 0,
            items: 2
          },
          1200:{
            margin: 20,
            stagePadding: 0,
            items: 3
          }
        }
      });
    }

    if ( $('.slide-one-item').length > 0 ) {
      $('.slide-one-item').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        stagePadding: 0,
        margin: 0,
        autoplay: true,
        pauseOnHover: false,
        nav: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">']
      });
    }


    if ( $('.nonloop-block-4').length > 0 ) {
      $('.nonloop-block-4').owlCarousel({
        center: true,
        items:1,
        loop:false,
        margin:10,
        nav: true,
        navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
        responsive:{
          600:{
            items:1
          }
        }
      });
    }

    if ( $('.nonloop-block-2').length > 0 ) {
      $('.nonloop-block-2').owlCarousel({
        center: true,
        items:1.5,
        itemsScaleUp : false,
        loop:true,
        margin:0,
        nav: false,
        responsive:{
          768:{
            items:3
          },
          1180:{
            items:4
          }
        }
      });
    }

  };
  siteCarousel();

  var siteStellar = function() {
    $(window).stellar({
      responsive: true,
      parallaxBackgrounds: true,
      parallaxElements: true,
      horizontalScrolling: false,
      hideDistantElements: false,
      scrollProperty: 'scroll'
    });
  };
  siteStellar();

  // TOPのアニメーション表示
  var initTopView = function() {
    if ($('.site-blocks-cover.overlay.top')[0]) {
      // ロゴ真ん中表示の高さを初期設定（アニメーション時に位置ずれを防ぐため）
      $('.logo_bg').each(function() {
        var this_obj = $(this);
        this_obj.css('height', this_obj.find('img').height());
      });

      // TOP画像の高さを再指定
      var actualImage = new Image();
      actualImage.src = $('.top2').css('background-image').replace(/"/g,"").replace(/url\(|\)$/ig, "");
        actualImage.onload = function() {
          var topImage = $('.site-blocks-cover.overlay.top');
          topImage.height(topImage.width() * this.height / this.width);
        }

        var speed = 500; // 1動作の時間(ms) （少ないほうが速い）
        var delay = speed * 3; // アニメーション開始までの待ち時間(ms)
        var allViewTime = speed * 5; // アニメーション全表示の時間(ms)

        // アニメーション開始
        setTimeout(function() {
          // 背景表示処理
          $('.top2').show("fade", {}, speed, function() {
            $('.top3').show('fade', {}, speed, function() {
              setTimeout(function() {
                $('.top2').hide('fade', {}, speed, function() {
                  $('.top3').hide('fade', {}, speed);
                });
              }, speed * 3);
            });
          });

          // 真ん中消去処理
          $('#logo_1').show("blind", {direction: 'horizontal'}, speed, function() {
            $('#logo_3').show("blind", {direction: 'horizontal'}, speed);
          });
          $('#logo_2').show("fade", {}, speed * 2);

          setTimeout(function() {
            // 背景消去処理
            $('#logo_1').hide("blind", {direction: 'right'}, speed, function() {
              $('#logo_3').hide("blind", {direction: 'right'}, speed);
            });
            // 真ん中消去処理
            $('#logo_2').hide("fade", {}, speed * 2);
          }, allViewTime);
        }, delay);
    }
    // TOP以外のページの画像の表示でヘッダーのバーの高さに画像のpaddingをあわせる
    if ($('.site-section.top-image')[0]) {
      var height = $('.site-navbar').height();
      $('.site-section.top-image').css('padding-top', height + 'px').show();
    }
  };
  initTopView();

  // 川柳のモーダル表示
  var senryuView = function() {
    // 詳細ボタンを押した際に表示項目を切り替える
    $('.kakejiku_button .detail[data-toggle=modal]').click(function() {
      var kakejiku = $(this).parents('.kakejiku');
      var inner = kakejiku.find('.kakejiku_inner').html();
      var episode = kakejiku.find('.kakejiku_episode').html();
      var name = kakejiku.find('.kakejiku_name').html();
      var modal = $('#modal');
      modal.find('.kakejiku_inner').html(inner);
      modal.find('.kakejiku_episode').html(episode);
      modal.find('.kakejiku_name').html(name);
    });
  };
  senryuView();
});
