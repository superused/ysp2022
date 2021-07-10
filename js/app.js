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
      $this.clone().attr('class', 'site-nav-wrap').prependTo('.site-mobile-menu-body');
    });
    setTimeout(function() {
      var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        }).css({
          display: 'none',
        });

        $this.find('> ul').attr({
          'class' : 'collapse show',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });
    }, 1000);

    $('body').on('click', 'li.has-children a', function() {
      var $this = $(this);
      $this.closest('li').find('.arrow-collapse').click();
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
    if ( $('.owl-carousel').length > 0 ) {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        center: true,
        items: 1.5,
        itemsScaleUp : false,
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        responsive:{
          768:{
            items:2
          },
          992:{
            items:3
          },
          1200:{
            items:4
          }
        }
      });
      $('.custom-btn.prev').click(function() {
        owl.trigger('prev.owl.carousel');
      });
      $('.custom-btn.next').click(function() {
        owl.trigger('next.owl.carousel');
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
    // TOP画面の場合
    if ($('.site-blocks-cover.overlay.top')[0]) {
      // ロゴの表示位置
      $('.site-blocks-cover.overlay.top .container .row').css('margin-top', ($(window).height() * 0.35 ) + 'px');

      const portrait = [
        'peacedesigner_kameoka_sp1.jpg',
        'moyou_top.png',
        'moyou_bottom.png',
      ];
      const landscape = [
        'peacedesigner_kameoka_pc1.jpg',
        'moyou_pc_top.png',
        'moyou_pc_bottom.png',
      ];
      const topAnimeElem = [
        $('.site-blocks-cover.overlay.top'),
        $('.site-blocks-cover.overlay.top2'),
        $('.site-blocks-cover.overlay.top3'),
      ];
      let topAnime = [];
      let isPortrait = true;
      const resize = function() {
        const w =  $(window);
        let changed = false;
        if (w.width() < w.height()) {
          if (!topAnime.length || !isPortrait) changed = true;
          isPortrait = true;
        } else {
          if (!topAnime.length || isPortrait) changed = true;
          isPortrait = false;
        }
        if (changed) {
          topAnime = isPortrait ? portrait : landscape;
          for (const i in topAnime) {
            let bi = topAnimeElem[i].css('background-image');
            let split = bi.split('"');
            split[1] = split[1].split('/').slice(0, -1).concat(topAnime[i]).join('/');
            topAnimeElem[i].css('background-image', split.join('"'));
          }
        }
      };
      $(window).on('resize', resize);
      resize();

      var speed = 500; // 1動作の時間(ms) （少ないほうが速い）
      var delay = speed * 5; // アニメーション開始までの待ち時間(ms)
      var allViewTime = speed * 6; // アニメーション全表示の時間(ms)

      var setHeight = function() {
        const target = $(this);
        target.closest('.logo_bg').css('height', target.height());
      };
      var animation = function() {
        for (const i in topAnimeElem) {
          topAnimeElem[i].addClass('show');
        }
        // アニメーション開始
        setTimeout(function() {
          $('.top2').fadeIn(speed);
          $('#logo_1').show("blind", {direction: 'horizontal'}, speed, setHeight);
          setTimeout(function() {
            $('.top3').fadeIn(speed);
            $('#logo_3').show("blind", {direction: 'horizontal'}, speed, setHeight);
          }, speed);
          $('#logo_2').fadeIn(speed * 2, setHeight);

          setTimeout(function() {
            $('.top2').fadeOut(speed);
            $('#logo_1').hide("blind", {direction: 'right'}, speed);
            setTimeout(function() {
              $('.top3').fadeOut(speed);
              $('#logo_3').hide("blind", {direction: 'right'}, speed);
            }, speed);
            $('#logo_2').fadeOut(speed * 2);
          }, allViewTime + speed * 2);
        }, delay);
      };

      // TOP画像の高さを再指定
      var actualImage = new Image();
      actualImage.src = $('.top2').css('background-image').replace(/"/g,"").replace(/url\(|\)$/ig, "");
      actualImage.onload = function() {
        var topImage = $('.site-blocks-cover.overlay.top');
        topImage.height(topImage.width() * this.height / this.width);
        animation();
      }
    } else {
      // TOP以外のページの画像の表示でヘッダーのバーの高さに画像のpaddingをあわせる
      var topTarget = $('.site-mobile-menu').next();
      var height = $('.site-navbar').height();
      topTarget.css('padding-top', height + 'px').show();
    }
  };
  initTopView();

  // 川柳のモーダル表示
  var senryuView = function() {
    // 詳細ボタンを押した際に表示項目を切り替える
    $('.kakejiku .detail').click(function() {
      var content = $(this).parents('[data-type=content-block]');
      var modal = $('#modal');
      var selectors = [
        '.kakejiku_inner',
        '.kakejiku_episode',
        '.kakejiku_name',
      ];
      for (var i in selectors) {
        var selector = selectors[i];
        modal.find(selector).html(content.find(selector).html());
      }
      modal.find(selector).html(content.find(selector).html());
      modal.find('#index').val($('.kakejiku button.detail').index(content.find('button.detail')));
    });
  };
  senryuView();

  // フォトコンテストのモーダル表示
  var photoView = function() {
    // 詳細ボタンを押した際に表示項目を切り替える
    $('.photo_button .detail[data-toggle=modal]').click(function() {
      var content = $(this).parents('[data-type=content-block]');
      var modal = $('#modal');
      var selectors = [
        '.photo_title',
        '.photo_name',
        '.photo_image',
        '.photo_region',
        '.photo_comment',
        '.photo_episode',
      ];
      for (var i in selectors) {
        var selector = selectors[i];
        if (selector != '.photo_image') {
          modal.find(selector).html(content.find(selector).html());
        } else {
          modal.find(selector).attr('src', content.find(selector).attr('src'));
        }
      }
    });
  };
  photoView();

  // コンテストの投票
  var contestVote = function() {
    const tohyo = $('#tohyo');
    if (tohyo[0] && $('button.vote')[0]) {
      if (!tohyo.find('input[type=radio]')[0]) {
        $('button.vote').each(function() {
          $(this).prop('disabled', true).text('投票済');
        });
      } else {
        $(document).on('click', 'button.vote', function(e) {
          const thisObj = $(this),
            index = thisObj.closest('#modal')[0] ? parseInt($('#index').val()) : thisObj.closest('[data-type=content-block').index('[data-type=content-block]'),
            radios = tohyo.find('input[type=radio]');
          if (radios[0]) {
            radios.eq(index).prop('checked', true);
            tohyo.find('input[type=button][name=vote]').click();
            $('button.vote').each(function() {
              $(this).prop('disabled', true).text('投票済');
            });
            const voteNumElem = $('[data-type=content-block]').eq(index).find('.vote_num span'),
              voteNum = parseInt(voteNumElem.html());
            voteNumElem.html(voteNum + 1);
          }
          return false;
        });
      }
    }
  }
  contestVote();

  var imageFull = function() {
    var sn = $('.site-navbar');
    var tif = $('.top-image.full .top-full-image');
    if (!tif[0]) return;
    var resize = function() {
      var w = $(window);
      if (w.outerWidth() < 768) {
        tif.outerWidth(w.outerWidth());
        tif.height(w.height() - sn.height());
      } else {
        tif.css({width: '', height: ''});
      }
    };
    $(window).on('resize', resize);
    resize();
  };
  imageFull();

  var footerBanner = function() {
    var btn = $('.footer-banner .close-btn');
    if (btn[0]) {
      btn.on('click', function() {
        $('.footer-banner').hide();
      });
    }
  };
  footerBanner();
});
