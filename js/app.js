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
    this.projectBuruburu();
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
    },
    siteCarousel: function () {
      if ($('.owl-carousel').length > 0) {
        const owl = $('.owl-carousel');
        let responsive = {
          768: {items:2},
          992: {items:3},
          1200:{items:4},
        };
        if ($('.sidebar').length > 0) {
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
        // ロゴの表示位置
        $('.site-blocks-cover.overlay.top .container .row').css('margin-top', ($(window).height() * 0.35 ) + 'px');

        const portrait = [
          [
            'top_mobile1.jpg',
            'top_mobile2.jpg',
            'top_mobile3.jpg',
          ],
          'moyou_top.png',
          'moyou_bottom.png',
        ];
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
              let topAnimeImg = topAnime[i];
              if (Array.isArray(topAnimeImg)) {
                topAnimeImg = topAnimeImg[Math.floor(Math.random() * topAnimeImg.length)];
              }
              let bi = topAnimeElem[i].css('background-image');
              let split = bi.split('"');
              split[1] = split[1].split('/').slice(0, -1).concat(topAnimeImg).join('/');
              topAnimeElem[i].css('background-image', split.join('"'));
            }
          }
        };
        $(window).on('resize', resize);
        resize();

        const speed = 500; // 1動作の時間(ms) （少ないほうが速い）
        const delay = speed * 5; // アニメーション開始までの待ち時間(ms)
        const allViewTime = speed * 6; // アニメーション全表示の時間(ms)

        const setHeight = function() {
          const target = $(this);
          target.closest('.logo_bg').css('height', target.height());
        };
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

            setTimeout(function() {
              $('.top2').hide('fade', {}, speed);
              $('#logo_1').hide("blind", {direction: 'right'}, speed);
              setTimeout(function() {
                $('.top3').hide('fade', {}, speed);
                $('#logo_3').hide("blind", {direction: 'right'}, speed);
              }, speed);
              $('#logo_2').hide("fade", {}, speed * 2);
            }, allViewTime + speed * 2);
          }, delay);
        };

        // TOP画像の高さを再指定
        let actualImage = new Image();
        actualImage.src = $('.top2').css('background-image').replace(/"/g,"").replace(/url\(|\)$/ig, "");
          actualImage.onload = function() {
            const topImage = $('.site-blocks-cover.overlay.top');
            topImage.height(topImage.width() * this.height / this.width);
            animation();
          }
      } else {
        // TOP以外のページの画像の表示でヘッダーのバーの高さに画像のpaddingをあわせる
        const topTarget = $('.site-mobile-menu').next();
        const height = $('.site-navbar').height();
        topTarget.css('padding-top', height + 'px').show();
      }
    },
    // 川柳のモーダル表示
    senryuView: function() {
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

      // 詳細ボタンを押した際に表示項目を切り替える
      $('[data-type=content-block] [data-toggle=modal]').click(function() {
        const content = $(this).parents('[data-type=content-block]');
        const voteButton = content.find('button.vote');
        const modal = $('#modal');
        const selectors = [
          '.photo_title',
          '.photo_name',
          '.photo_image',
          '.photo_region',
          '.photo_comment',
          '.photo_episode',
        ];
        for (const i in selectors) {
          const selector = selectors[i];
          if (selector != '.photo_image') {
            modal.find(selector).html(content.find(selector).html());
          } else {
            modal.find(selector).attr('src', content.find(selector).attr('src'));
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
      $(document).on('click', '[href$=#project], [href$=#live], [href$=#contest], [href$=#contents-list]', function() {
        buruburu($(this).attr('href'), 0);
      });
      $(document).ready(function() {
        buruburu(location.href, 0);
      }, 100);
    },
  };
  const base = new siteBase();

});
