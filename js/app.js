AOS.init({
  duration: 800,
  easing: 'slide',
  once: true
});
$(function() {
  "use strict";

  const siteBase = function() {
    this.siteMenuClone();
    this.siteCarousel();
    this.siteStellar();
    this.initTopView();
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
    siteMenuClone: function() {
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

      $(document).on('click', 'a[href^=#]', function() {
        AOS.init({
          disable: true,
        });
        const adjust = - $('.site-navbar').height();
        const speed = 1000; // スクロールの速度（ミリ秒）
        const href = $(this).attr("href"); // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
        const target = $(href == "#" || href == "" ? 'html' : href); // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
        const position = target.offset().top + adjust; // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
        $('body,html').animate({scrollTop:position}, speed, 'swing'); // スムーススクロール linear（等速） or swing（変速）
        return false;
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
    // TOPのアニメーション表示
    initTopView: function() {
      // TOP画面の場合
      if ($('.site-blocks-cover.overlay.top')[0]) {

        const portrait = [
          [
            'top_mobile1_s.jpg',
            'top_mobile2_s.jpg',
            'top_mobile3_s.jpg',
          ],
          'moyou_top.png',
          'moyou_bottom.png',
        ];
        const square = [
          [
            'top_pc1.jpg',
            'top_pc2.jpg',
            'top_pc3.jpg',
          ],
          'moyou_tb_top.png',
          'moyou_tb_bottom.png',
        ]
        const landscape = [
          [
            'top_pc1.jpg',
            'top_pc2.jpg',
            'top_pc3.jpg',
          ],
          'moyou_pc_top.png',
          'moyou_pc_bottom.png',
        ];
        const topAnimeElem = [
          $('.site-blocks-cover.overlay.bg'),
          $('.site-blocks-cover.overlay.top2'),
          $('.site-blocks-cover.overlay.top3'),
        ];
        let topAnime = [];
        let imgType = 1;
        let interval = null;

        const setHeight = function() {
          const target = $(this);
          target.closest('.logo_bg').css('height', target.height());
        };

        const resize = function() {
          const w =  $(window),
            wd = w.width(),
            hg = w.height(),
            rate = hg / wd,
            topImage = $('.site-blocks-cover.overlay.top');

          $('.logo_bg img').each(setHeight);

          let minRate = 1;
          let changed = false;

          if (0.67 <= rate && rate <= 1.33) {
            if (!topAnime.length || imgType != 2) changed = true;
            imgType = 2;
            // TOP画像の高さを再指定
            topImage.height(minRate > rate ? (wd * minRate) : hg);
          } else if (wd < hg) {
            if (!topAnime.length || imgType != 1) changed = true;
            imgType = 1;
            minRate = 3840 / 2560;
            // TOP画像の高さを再指定
            topImage.height(minRate > rate ? hg : (wd * minRate));
          } else {
            if (!topAnime.length || imgType != 3) changed = true;
            imgType = 3;
            minRate = 2560 / 3840;
            // TOP画像の高さを再指定
            topImage.height(minRate > rate ? (wd * minRate) : hg);
          }

          // ロゴの表示位置
          topImage.find('.container .row').css('margin-top', (hg * 0.35) + 'px');

          if (changed) {
            if (imgType == 1) {
              topAnime = portrait;
            } else if (imgType == 2) {
              topAnime = square;
            } else {
              topAnime = landscape;
            }
            let index;
            for (const i in topAnime) {
              let topAnimeImg = topAnime[i];
              if (Array.isArray(topAnimeImg)) {
                index = Math.floor(Math.random() * topAnimeImg.length);
                topAnimeImg = topAnimeImg[index];
              }
              const split = topAnimeElem[i].css('background-image').split('"');
              split[1] = split[1].split('/').slice(0, -1).concat(topAnimeImg).join('/');
              topAnimeElem[i].css('background-image', split.join('"'));
            }

            if (interval) {
              clearInterval(interval);
              interval = null;
            }
            // フェード切り替え
            interval = setInterval(function() {
              index = index == topAnime[0].length - 1 ? 0 : index + 1;
              const nextImg = topAnime[0][index],
                target = $('.site-blocks-cover.overlay.bg').last(),
                split = target.css('background-image').split('"'),
                clone = target.css('opacity', 1).clone();
              target.after(clone);
              split[1] = split[1].split('/').slice(0, -1).concat(nextImg).join('/');
              clone.css('background-image', split.join('"')).hide();
              clone.show('fade', {}, 2000, function() {
                $('.site-blocks-cover.overlay.bg').first().remove();
              });
            }, 8000);
          }
        };
        $(window).on('resize', resize);
        resize();

        const speed = 500; // 1動作の時間(ms) （少ないほうが速い）
        const delay = speed * 5; // アニメーション開始までの待ち時間(ms)
        const allViewTime = speed * 6; // アニメーション全表示の時間(ms)
        const animation = function() {
          for (const i in topAnimeElem) {
            topAnimeElem[i].addClass('show');
          }
          // アニメーション開始
          setTimeout(function() {
            $('.top2').show("fade", {}, speed);
            $('#logo_1').show("blind", {direction: 'horizontal'}, speed, setHeight);
            setTimeout(function() {
              $('.top3').show('fade', {}, speed);
              $('#logo_3').show("blind", {direction: 'horizontal'}, speed, setHeight);
            }, speed);
            $('#logo_2').show("fade", {}, speed * 2, setHeight);

            // 消す処理
            // setTimeout(function() {
            //   $('.top2').hide('fade', {}, speed);
            //   $('#logo_1').hide("blind", {direction: 'right'}, speed);
            //   setTimeout(function() {
            //     $('.top3').hide('fade', {}, speed);
            //     $('#logo_3').hide("blind", {direction: 'right'}, speed);
            //   }, speed);
            //   $('#logo_2').hide("fade", {}, speed * 2);
            // }, allViewTime + speed * 2);
          }, delay);
        };
        animation();
      } else {
        // TOP以外のページの画像の表示でヘッダーのバーの高さに画像のpaddingをあわせる
        const topTarget = $('.site-mobile-menu').next();
        const height = $('.site-navbar').height();
        topTarget.css('padding-top', height + 'px').show();

        // LIVE詳細ページで動画をスマホ版では固定表示、PC版では固定解除
        const adjustLiveDetail = $('#adjust-live-detail');
        if (adjustLiveDetail[0]) {
          const adjust = function() {
            adjustLiveDetail.css('padding-top', ($('.site-section.live-detail').outerHeight()) + 'px');
          };
          $(window).resize(adjust);
          adjust();
        }

        const otherLive = $('.other-live');
        if (otherLive[0]) {
          const adjustLive = function() {
            if ($(window).outerWidth() >= 768) {
              otherLive.css('height', $('.site-section.live-detail').outerHeight() + 'px');
            } else {
              otherLive.css('height', '');
            }
          }
          $(window).resize(adjustLive);
          adjustLive();
        }
      }
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
          modalVoteButton.prop('disabled', true).html('投票済');
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

      // 詳細ボタンを押した際に表示項目を切り替える
      $(document).on('click', '[data-type=content-block] [data-toggle=modal]', function() {
        const content = $(this).parents('[data-type=content-block]'),
          voteButton = content.find('button.vote'),
          modal = $('#modal'),
          selectors = [
            '.photo_title',
            '.photo_name',
            '.photo_image',
            '.photo_episode',
          ];
        for (const i in selectors) {
          const selector = selectors[i];
          if (selector != '.photo_image') {
            modal.find(selector).html(content.find(selector).html());
          } else {
            const src = content.find(selector).attr('src');
            if (src) {
              modal.find(selector).attr('src', src);
            } else {
              modal.find(selector).attr('src', content.find(selector).html());
            }
          }
        }
        const modalVoteButton = modal.find('button.vote');
        modalVoteButton.attr('data-vote', voteButton.attr('data-vote'));
        if (voteButton.prop('disabled')) {
          modalVoteButton.prop('disabled', true).html('投票済');
        } else {
          modalVoteButton.prop('disabled', false).html('投票');
        }
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
            $(this).prop('disabled', true).text('投票済');
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
                  voteNumElem.html(voteNum + 1);
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
        const maxCount = 10;
        const parentElem = data.parent();
        const datas = JSON.parse(jsonElem.html());
        const fn = function() {
          for (const i in datas) {
            if (count >= maxCount) break;
            if (ranking != 0 && i != ranking + 1) continue;
            const clone = data.first().clone().removeClass('d-none');
            clone.find('.ranking').html(i);
            clone.find('.senryu').html(datas[i][0]);
            clone.find('.senryu-name').html(datas[i][1] + ' (' + datas[i][2] + ')');
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
            clone.find('.ranking').html(i);
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
