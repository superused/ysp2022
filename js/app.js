$(function() {
  "use strict";
  const videos = (() => {
    const slides = []
    $('.slider li').each((idx, elm) => {
      const video = $(elm).find('video')[0]
      if (video) slides[idx] = video
    })
    return slides
  })()

  const siteBase = function() {
    const siteWrap = $('.site-wrap');
    siteWrap.addClass('inview');

    const slider = $('.slider');
    if (slider[0]) {
      slider.slick({
        autoplay: true, //自動スライド
        speed: 600,
        autoplaySpeed: 3000, //スライドさせる間隔
        dots: true, //ドットインジケーターを表示
        lazyLoad: 'progressive', //画像の遅延読み込み
        arrows: true, //スライドの左右の矢印ボタンを非表示
        adaptiveHeight: true,
        infinite: true,
        prevArrow: '<span class="slick-arrow prev">＜</span>',
        nextArrow: '<span class="slick-arrow next">＞</span>',
      });
      slider.on('beforeChange', (slick, currentSlide, idx) => {
        if (videos[idx]) videos[idx].pause()
      })
      slider.on('afterChange', (slick, currentSlide, idx) => {
        if (videos[idx]) videos[idx].play()
      })
    }
    const voiceSlider = $('.voice-slider');
    if (voiceSlider[0]) {
      voiceSlider.slick({
        slidesToShow: 2,
        dots: false, //ドットインジケーターを表示
        arrows: true, //スライドの左右の矢印ボタンを非表示
        adaptiveHeight: true,
        infinite: true,
        prevArrow: '<span class="slick-arrow prev text-black"><</span>',
        nextArrow: '<span class="slick-arrow next text-black">></span>',
        responsive:[{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          }
        }],
      });
      const vsp = voiceSlider.find('p');
      const vsResize = () => {
        vsp.css('height', '');
        setTimeout(() => vsp.height(vsp.toArray().reduce((p, c) => Math.max(p, $(c).height()), 0)));
      };
      $(window).resize(vsResize);
      vsResize();
    }
    const smallSlider = $('.small-slider');
    if (smallSlider[0]) {
      smallSlider.slick({
        slidesToShow: 1,
        lazyLoad: 'progressive', //画像の遅延読み込み
        arrows: true, //スライドの左右の矢印ボタンを非表示
        adaptiveHeight: true,
        infinite: true,
        centerMode: true,
        prevArrow: '<span class="slick-arrow circle prev"><</span>',
        nextArrow: '<span class="slick-arrow circle next">></span>',
        centerPadding: '30%',
        responsive:[{
          breakpoint: 992,
          settings: {
            centerPadding: '15%',
          }
        }],
      });
    }

    const siteMenuFirst = $('.site-navbar .site-navigation ul.top-lower-menu li.site-menu:first');
    const siteMenuNotFirst = $('.site-navbar .site-navigation ul.top-lower-menu li.site-menu:not(:first-child)');
    // YSPとはマウスオン時にサブメニューを表示させる
    siteMenuFirst.on('mouseenter', e => {
      // ズームイン表示のスタート位置の%表示
      const target = $(e.target).closest('.site-menu');
      target.addClass('bg-lightgray');
      const ratio = parseInt((target.offset().left + (target.outerWidth() / 2)) / $(window).width() * 100 + 1)
      $('.menu-detail').css('transform-origin', ratio + '% top').addClass('animate')
    });

    // 範囲外にサブメニューを表示させる
    $(document).on('mouseover', e => {
      const menuDetail = $('.menu-detail')
      if (menuDetail.css('display') !== 'none' && !$(e.target).closest('.site-navbar')[0]) {
        menuDetail.removeClass('animate')
        siteMenuFirst.closest('.site-menu').removeClass('bg-lightgray');
      }
    });
    siteMenuNotFirst.on('mouseover', e => {
      const menuDetail = $('.menu-detail')
      menuDetail.removeClass('animate')
      siteMenuFirst.closest('.site-menu').removeClass('bg-lightgray');
    });

    if (typeof loading_text != 'undefined') {
      new ProgressBar.Line(loading_text, {
        easing: 'linear',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
        // duration: 1000,//時間指定(1000＝1秒)
        strokeWidth: 3,//進捗ゲージの太さ
        color: '#00c8f9',//進捗ゲージのカラー
        trailWidth: 3,//ゲージベースの線の太さ
        trailColor: '#f5f5f5',//ゲージベースの線のカラー
        text: {//テキストの形状を直接指定
          style: {
            margin: '0.5rem',
            color: '#000',
            'font-weight': 'bold',
          },
        },
        step: (state, bar) => {
          bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
        }
      }).animate(1, () => {//バーを描画する割合を指定します 1.0 なら100%まで描画します
        $("#loading").fadeOut();
      });
    }

    $('.page_top').click(e => {
      $('html, body').animate({scrollTop: 0}, 500);
      e.preventDefault();
      return false;
    });

    // facebook plugin
    // this.facebookPluginView();

    $('.support .tabs a').click(e => {
      const target = $(e.target);
      const type = target.data('type');
      let reverse;

      if (type == 'once') reverse = 'monthly';
      else if (type == 'monthly') reverse = 'once';

      if (reverse) {
        const support = target.closest('.support');
        support.find('[data-view=' + reverse + ']').hide();
        support.find('[data-view=' + type + ']').css('display', '');
        support.find('[data-type=' + reverse + ']').removeClass('active');
        support.find('[data-type=' + type + ']').addClass('active').css('display', '');
      }
      e.preventDefault();
      return false;
    });

    const supportOther = $('input[name=support_other]');
    if (supportOther[0]) {
      supportOther.attr({
        inputmode: 'numeric',
        pattern: '^[1-9][0-9]*$',
      })
      supportOther.each((idx, target) => {
        const tgt = $(target)
        tgt.on('input', () => {
          const reg = /[^0-9]/g;
          let val = tgt.val()
          if (reg.test(val)) {
            tgt.val(val.replace(reg,''));
            val = tgt.val()
          }
          if (val.length >= 2) {
            tgt.val(val.replace(/^0*/, ''))
            if (tgt.val().length == 0) tgt.val(0)
          }
        });
      });
    }

    $('.fadeup').on('inview', function() {
      const t = $(this);
      if (!t.hasClass('inview')) t.addClass('inview');
    });

    this.siteMenuClone();
    this.moveRecaptcha();
  };
  siteBase.prototype = {
    facebookPluginView: () => {
      const facebookPlugin = $('#facebook-plugin');
      if (!facebookPlugin[0]) return false;

      let timer = false;
      let firstWidth = facebookPlugin.parent().width();
      let maxWidth = 500;

      const fbiframe_timeout = (firstFlg) => {
        const width = facebookPlugin.parent().width();
        if (firstFlg || ((firstWidth < maxWidth || width < maxWidth) && width != firstWidth)) {
          fbiframe_reload();
          firstWidth = width;
        }
      };

      const fbiframe_reload = () => {
        const url = new URL(facebookPlugin.attr('data-src'));
        let width = Math.trunc(facebookPlugin.parent().width());
        if (width > maxWidth) width = maxWidth;
        url.searchParams.set('width', width);
        facebookPlugin.attr({
          src: url.toString(),
          'data-src': url.toString(),
          width: width,
        });
      };

      $(window).resize(function() {
        if (timer !== false) {
          clearTimeout(timer);
        }
        timer = setTimeout(fbiframe_timeout, 500);
      });

      fbiframe_timeout(true);
    },
    siteMenuClone: function() {
      const footerMenu = $('.footer-menu').clone();
      $('.site-mobile-menu-body').append(footerMenu);

      $('.js-clone-nav').each(function() {
        const $this = $(this);
        $this.clone().attr('class', 'site-nav-wrap').prependTo('.site-mobile-menu-body');
      });
      setTimeout(function() {
        let counter = 0;
        $('.site-mobile-menu .has-children').each(function(){
          const $this = $(this);
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

      $('body').on('click', '.site-mobile-menu .inpage-link', function() {
        if ($('body').hasClass('offcanvas-menu')) {
          $('body').removeClass('offcanvas-menu');
        }
      });

      $('body').on('click', 'li.has-children a', function() {
        const $this = $(this);
        $this.closest('li').find('.arrow-collapse').click();
      });

      $(window).resize(function() {
        const $this = $(this),
          w = $this.width();
        if (w > 768 && $('body').hasClass('offcanvas-menu')) {
          $('body').removeClass('offcanvas-menu');
        }
      })

      $('body').on('click', '.js-menu-toggle', function(e) {
        const $this = $(this);
        e.preventDefault();

        if ($('body').hasClass('offcanvas-menu')) {
          $('body').removeClass('offcanvas-menu');
          $this.removeClass('active');
        } else {
          $('body').addClass('offcanvas-menu');
          $this.addClass('active');
        }
      });

      // click outisde offcanvas
      $(document).on('mouseup', 'html', function(e) {
        const container = $(".site-mobile-menu");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
          if ( $('body').hasClass('offcanvas-menu') ) {
            $('body').removeClass('offcanvas-menu');
          }
        }
      });

      $(document).on('click', 'a[href*=#]:not([href=#])', function() {
        const adjust = -$('.site-navbar').height();
        const speed = 1000;
        const href = $(this).attr("href");
        const target = $(href == "#" || href == "" ? 'html' : ('#' + href.split('#').pop()));
        console.log(position)
        if (target[0]) {
          const position = target.offset().top + adjust;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        }
        return true;
      });
    },
    footerBanner: function() {
      const btn = $('.footer-banner .close-btn');
      if (btn[0]) {
        btn.on('click', function() {
          $('.footer-banner').hide();
        });
      }
    },
    adjustRecaptcha: function() {
      const recaptcha = $('.grecaptcha-badge'),
        fixedMenu = $('.fixed-menu'),
        fixedLast = $('.fixed-button-content').last();
      if (recaptcha[0]) {
        recaptcha.css('visibility', 'visible');
        if (fixedMenu.css('display') !== 'none') {
          recaptcha.css('bottom', ((fixedLast.height() + 30) + 'px'));
        } else {
          recaptcha.css('bottom', '14px');
        }
      }
    },
    moveRecaptcha: function() {
      if ($('.contact-form')[0] && $('.sidebar')[0]) {
        const self = this;
        $(window).resize(self.adjustRecaptcha);
        setTimeout(self.adjustRecaptcha, 700);
      }
    },
  };
  const base = new siteBase();
});
