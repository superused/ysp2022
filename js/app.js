if (location.href.indexOf('#') < 0) {
  AOS.init({
    duration: 800,
    easing: 'slide',
    once: true
  });
} else {
  AOS.init({
    disable: true,
  });
}
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
    const slider = $('.slider');
    if (slider[0]) {
      slider.slick({
        autoplay: true, //自動スライド
        speed: 600,
        autoplaySpeed: 3000, //スライドさせる間隔
        dots: true, //ドットインジケーターを表示
        lazyLoad: "progressive", //画像の遅延読み込み
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
    const voiceSlider = $('.voice-slider')
    if (voiceSlider[0]) {
      voiceSlider.slick({
        slidesToShow: 2,
        dots: false, //ドットインジケーターを表示
        arrows: true, //スライドの左右の矢印ボタンを非表示
        adaptiveHeight: true,
        infinite: true,
        prevArrow: '<span class="slick-arrow prev text-black">＜</span>',
        nextArrow: '<span class="slick-arrow next text-black">＞</span>',
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
    this.facebookPluginView();

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


    this.siteMenuClone();
    this.siteCarousel();
    this.siteStellar();
    // this.initTopView();
    this.senryuView();
    this.photoView();
    this.contestVote();
    this.imageFull();
    this.footerBanner();
    // this.projectBuruburu();
    this.moveRecaptcha();
    this.senryu100Data();
    this.photo100Data();
    this.slideShow();
    this.liveTimeSchedule();
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
        AOS.init({
          disable: true,
        });
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
    siteCarousel: function () {
      const owl = $('.owl-carousel');
      if (owl.length > 0) {
        let responsive = {
          768: {items:2},
          992: {items:3},
          1200:{items:4},
        };
        if (owl.hasClass('short')) {
          responsive[768] = {items:1.5};
          responsive[992] = {items:1.5};
          responsive[1200] = {items:2};
        }
        owl.owlCarousel({
          center: true,
          items: 1.5,
          itemsScaleUp : false,
          loop: true,
          margin: 0,
          nav: false,
          dots: false,
          responsive: responsive,
        });
        $('.custom-btn.prev').click(function() {
          owl.trigger('prev.owl.carousel');
        });
        $('.custom-btn.next').click(function() {
          owl.trigger('next.owl.carousel');
        });
        setTimeout(function() {
          const adjustHeight = function() {
            let minHeight;
            const imgs = $('.owl-item img');
            imgs.each(function() {
              const height = $(this).height();
              if (!minHeight || minHeight > height) minHeight = height;
            });
            imgs.each(function() {
              const $this = $(this),
                width = $this.width(),
                height = $this.height();
              $this.width(width * minHeight / height).height(minHeight);
            });
          };
          adjustHeight();

          let resizeCnt = 0;
          $(window).resize(function() {
            resizeCnt++;
            const width = $('.owl-item:first').width();
            let cnt = 0;
            const fn = function(rcnt) {
              setTimeout(function() {
                cnt++;
                if (cnt < 100 && rcnt == resizeCnt) {
                  const owlWidth = $('.owl-item:first').width();
                  if (width == owlWidth) {
                    fn(rcnt);
                  } else {
                    $('.owl-item img').each(function() {
                      const $this = $(this),
                        iw = $this.width(),
                        ih = $this.height();
                      $this.width(owlWidth).height(ih * owlWidth / iw);
                    });
                    adjustHeight();
                  }
                }
              }, 100);
            };
            fn(resizeCnt);
          });
        });
      }
    },
    siteStellar: function() {
      $(window).stellar({
        responsive: true,
        parallaxBackgrounds: true,
        parallaxElements: true,
        horizontalScrolling: false,
        hideDistantElements: false,
        scrollProperty: 'scroll'
      });
    },
    contestView: function() {
      const fixedMenu = $('#fixed-menu');
      if (!$('#modal')[0] || !$('#fixed-menu-move')[0]) return false;
      const clone = fixedMenu.clone();
      fixedMenu.remove();
      $('#fixed-menu-move').html(clone);
      return true;
    },
    // 川柳のモーダル表示
    senryuView: function() {
      if (!$('.kakejiku_button')[0]) return false;
      this.contestView();

      // 詳細ボタンを押した際に表示項目を切り替える
      $('.kakejiku .detail').click(function() {
        const content = $(this).parents('[data-type=content-block]');
        const voteButton = content.find('button.vote');
        const modal = $('#modal');
        const selectors = [
          '.kakejiku_inner',
          '.kakejiku_episode',
          '.kakejiku_name',
        ];
        for (const i in selectors) {
          const selector = selectors[i];
          modal.find(selector).html(content.find(selector).html());
        }
        const modalVoteButton = modal.find('button.vote');
        modalVoteButton.attr('data-vote', voteButton.data('vote'));
        if (voteButton.prop('disabled')) {
          modalVoteButton.prop('disabled', true).html(voteButton.text() == '投票' ? '投票' : '投票済');
        } else {
          modalVoteButton.prop('disabled', false).html('投票');
        }
        modal.find('#index').val($('.kakejiku button.detail').index(content.find('button.detail')));
      });
    },

    // フォトコンテストのモーダル表示
    photoView: function() {
      if (!$('.photo_button')[0]) return false;
      this.contestView();
      const modal = $('#modal'),
        fixBox = modal.find('[data-type=fixbox]'),
        rankMin = 11,
        rankMax = 70,
        getImg = function(rank, thumbnailFlg) {
          if (typeof(thumbnailFlg) == 'undefined') thumbnailFlg = false;
          return $('[data-ranking=' + rank + ']').closest('[data-type=content-block]').find(thumbnailFlg ? '.photo_thumbnail' : '.photo_image').attr('src');
        },
        addLink = function(rank, prevFlg) {
          if (typeof(prevFlg) == 'undefined') prevFlg= false;
          fixBox.each(function() {
            $(this).find('[data-action=' + (prevFlg ? 'prev' : 'next') + ']')
              .addClass('show')
              .attr('data-ranking-target', rank)
              .find('img')
              .attr('src', getImg(rank, true));
          });
        },
        setPrevNext = function(ranking) {
          fixBox.each(function() {
            $(this).find('[data-action]').each(function() {
              $(this).removeClass('show').removeAttr('data-ranking-target').find('img').attr('src', '');
            });
          });
          if (ranking && ranking >= rankMin && ranking <= rankMax) {
            if (ranking != rankMin) addLink(ranking - 1, true);
            if (ranking != rankMax) addLink(ranking + 1);
          }
        },
        modalView = function(content) {
          const selectors = [
            '.photo_title',
            '.photo_name',
            '.photo_image',
            '.photo_episode',
            '.ranking',
          ];
          for (const i in selectors) {
            const selector = selectors[i];
            const elem = modal.find(selector);
            const contentElem = content.find(selector);
            if (elem[0] && contentElem[0]) {
              if (selector == '.ranking') {
                const ranking = contentElem.attr('data-ranking');
                if (ranking) elem.html(ranking);
              } else if (selector == '.photo_image') {
                const src = contentElem.attr('src');
                if (src) {
                  elem.attr('src', src);
                } else {
                  elem.attr('src', contentElem.html());
                }
              } else {
                elem.html(contentElem.html());
              }
            }
          }
        };

      // 詳細ボタンを押した際に表示項目を切り替える
      $(document).on('click', '[data-type=content-block] [data-toggle=modal]', function() {
        const $this = $(this),
          content = $this.parents('[data-type=content-block]'),
          voteButton = content.find('button.vote');
        modalView(content);

        const photo100 = $this.closest('.photo-100-data'),
          rankingBox = content.find('[data-ranking]');
        if (photo100[0] && rankingBox[0]) {
          const ranking = parseInt(rankingBox.attr('data-ranking'));
          setPrevNext(ranking);
        }
        const modalVoteButton = modal.find('button.vote');
        if (modalVoteButton[0]) {
          modalVoteButton.attr('data-vote', voteButton.attr('data-vote'));
          if (voteButton.prop('disabled')) {
            modalVoteButton.prop('disabled', true).html('投票済');
          } else {
            modalVoteButton.prop('disabled', false).html('投票');
          }
        }
      });

      $(document).on('click', '[data-ranking-target]', function() {
        const $this = $(this),
          ranking = parseInt($this.attr('data-ranking-target')),
          content = $('[data-ranking=' + ranking + ']').closest('[data-type=content-block]');
        if (content[0]) {
          modalView(content);
          setPrevNext(ranking);
          $('#modal').scrollTop(0);
        }
        return false;
      });
    },

    // コンテストの投票
    contestVote: function() {
      const tohyo = $('#tohyo');
      if (tohyo[0] && $('button.vote')[0]) {
        let flg = false;
        $('button.vote').each(function() {
          const qid = $(this).attr('data-vote');
          const poll = tohyo.find('div.wp-polls#polls-' + qid);
          if (!poll[0] || !poll.find('input[type=button][name=vote]')[0]) {
            if (tohyo[0]) {
              $(this).prop('disabled', true).text('投票済');
            } else {
              $(this).prop('disabled', true).text('投票');
            }
          } else {
            flg = true;
          }
        });
        if (flg) {
          $('button.vote').on('click', function(e) {
            const qid = $(this).attr('data-vote'),
              poll = tohyo.find('div.wp-polls#polls-' + qid),
              radio = poll.find('input[type=radio]').first();
            if (radio[0]) {
              radio.prop('checked', true);
              poll.find('input[type=button][name=vote]').click();
              $('button.vote[data-vote=' + qid + ']').each(function() {
                const $this = $(this);
                $this.prop('disabled', true).text('投票済');
                const contentBlock = $this.closest('[data-type=content-block]');
                if (contentBlock[0]) {
                  const voteNumElem = contentBlock.find('.vote_num'),
                    voteNum = parseInt(voteNumElem.html());
                  /**
                   * 投票した瞬間加算しなくする
                   */
                  // voteNumElem.html(voteNum + 1);
                }
              });
            }
            return false;
          });
        }
      }
    },

    imageFull: function() {
      const sn = $('.site-navbar');
      const tif = $('.top-image.full .top-full-image');
      if (!tif[0]) return;
      const resize = function() {
        const w = $(window);
        if (w.outerWidth() < 768) {
          tif.outerWidth(w.outerWidth());
          tif.height(w.height() - sn.height());
        } else {
          tif.css({width: '', height: ''});
        }
      };
      $(window).on('resize', resize);
      resize();
    },

    footerBanner: function() {
      const btn = $('.footer-banner .close-btn');
      if (btn[0]) {
        btn.on('click', function() {
          $('.footer-banner').hide();
        });
      }
    },

    projectBuruburu: function() {
      const buruburu = function(url, delay) {
        let elem;
        if (url.endsWith(('#project'))) {
          elem = $('#project');
        } else if (url.endsWith('#live')) {
          elem = $('#live');
        } else if (url.endsWith('#contest')) {
          elem = $('#contest');
        } else if (url.endsWith('#contents-list')) {
          elem = $('#contents-list');
        } else if (url.endsWith('#senryu')) {
          elem = $('#senryu');
        } else if (url.endsWith('#photo')) {
          elem = $('#photo');
        } else if (url.endsWith('#movie')) {
          elem = $('#movie');
        }
        if (elem && elem[0]) {
          const navHeight = $('.site-navbar').height();
          const scrollTop = elem.offset().top;
          elem.removeAttr('data-aos data-aos-delay').removeClass('aos-unit aos-animate');

          // ワープしてブルブルさせる
          setTimeout(function() {
            const element = elem;
            const ws = parseInt($(window).scrollTop());
            const pt = parseInt(element.offset().top);
            $('body').css('overflow', 'hidden');
            $(window).scrollTop(pt - navHeight);
            element.addClass('buruburu');
            setTimeout(function() {
              element.removeClass('buruburu');
              $('body').css('overflow', '');
            }, 700);
          }, delay);
        }
      };
      $(document).on('click', '[href$=#project], [href$=#live], [href$=#contest], [href$=#contents-list], [href$=#senryu], [href$=#photo], [href$=#movie]', function() {
        buruburu($(this).attr('href'), 0);
      });
      $(document).ready(function() {
        setTimeout(function() {
          buruburu(location.href, 0);
        }, 300);
      });
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
    senryu100Data: function() {
      const data = $('.senryu-100-data');
      const jsonElem = $('.json-data');
      if (data[0] && jsonElem[0]) {
        let ranking = 0;
        let count = 0;
        const maxCount = 100;
        const parentElem = data.parent();
        const datas = JSON.parse(jsonElem.html());
        const fn = function() {
          for (const i in datas) {
            if (count >= maxCount) break;
            if (ranking != 0 && i != ranking + 1) continue;
            const clone = data.first().clone().removeClass('d-none');
            clone.find('.ranking').html(i);
            clone.find('.senryu').html(datas[i][0]);
            clone.find('.senryu-name').html(datas[i][2] + ' (' + datas[i][1] + ')');
            parentElem.append(clone);
            ranking = parseInt(i);
            count++;
          }
          count = 0;
          if (ranking >= 100) $('#add-ranking').remove();
        };
        $(document).on('click', '#add-ranking', fn);
        fn();
      }
    },
    photo100Data: function() {
      const data = $('.photo-100-data');
      const jsonElem = $('.json-data');
      if (data[0] && jsonElem[0]) {
        let ranking = 0;
        let count = 0;
        const maxCount = 70;
        const parentElem = data.parent();
        const datas = JSON.parse(jsonElem.html());
        const fn = function() {
          for (const i in datas) {
            if (count >= maxCount) break;
            if (ranking != 0 && i != ranking + 1) continue;
            const clone = data.first().clone().removeClass('d-none');
            clone.find('.ranking').attr('data-ranking', i);
            clone.find('.photo_image').html(datas[i][0]);
            let arr = datas[i][0].split('.');
            let ext = '-150x150.' + arr.pop();
            clone.find('.photo_thumbnail').attr('src', arr.join('.') + ext);
            clone.find('.photo_title').html(datas[i][1]);
            clone.find('.photo_name').html(datas[i][2]);
            clone.find('.photo_episode').html(datas[i][3]);
            parentElem.append(clone);
            ranking = parseInt(i);
            count++;
          }
          count = 0;
        };
        fn();
      }
    },
    slideShow: function() {
      const target = $('.slide-show');
      if (target[0]) {
        const images = target.find('.slide-image');
        let index = Math.floor(Math.random() * images.length);
        images.eq(index).show();
        let interval = setInterval(function() {
          const nowImg = images.eq(index);
          index = index == images.length - 1 ? 0 : index + 1;
          const nextImg = images.eq(index);
          nowImg.css('z-index', 0);
          nextImg.css('z-index', 1);
          nextImg.show('fade', {}, 2000, function() {
            nowImg.css('display', '');
          });
        }, 8000);
      }
    },
    liveTimeSchedule: function() {
      let date = '20210807';
      const todayNum = this.getToday8num();
      if (todayNum == '20210808') {
        date = '20210808';
      } else if (todayNum == '20210809') {
        date = '20210809';
      }

      const fn = function() {
        if ($(this)[0]) date = $(this).attr('data-date');
        $('[data-date]').each(function() {
          var $this = $(this);
          if ($this.attr('data-date') == date) {
            if ($this.prop('tagName') == 'BUTTON') {
              $this.addClass('active');
            } else {
              $this.show();
            }
          } else {
            if ($this.prop('tagName') == 'BUTTON') {
              $this.removeClass('active');
            } else if ($this.parents('.live-detail-timetable')[0]) {
              $this.show();
            } else {
              $this.hide();
            }
          }
        });
      };
      $(document).on('click', 'button[data-date]', fn);
      fn();
    },
    getToday8num: function() {
      const today = new Date();
      return parseInt(today.getFullYear() + ('0' + (today.getMonth() + 1)).slice(-2) + ('0' + today.getDate()).slice(-2));
    }
  };
  const base = new siteBase();
});
