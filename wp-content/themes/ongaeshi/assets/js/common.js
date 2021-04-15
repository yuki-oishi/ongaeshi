(function(){
  var ua = navigator.userAgent;

  var sp = ua.indexOf('iPhone') > -1 ||
    (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1);

  var tab = !sp && (
    ua.indexOf('iPad') > -1 ||
    (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
    ua.indexOf('Android') > -1
  );

  new ViewportExtra(tab ? 1024 : 375);
})();

jQuery(function($) {
  $('.tab-index a').click(function(e){
    $('.tab-index .active').removeClass('active');
    $(this).parent().addClass('active');
    $('.tab-contents').each(function(){
      $(this).removeClass('active');
    });
    $(this.hash).addClass('active');
    e.preventDefault();
  });  
});

jQuery(function ($) {
  //useragent系
  // $(function () {
  //   var ua = navigator.userAgent;
  //   if (
  //     ua.indexOf("iPhone") > 0 ||
  //     (ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0)
  //   ) {
  //     $("head").prepend(
  //       '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">'
  //     );
  //   } else if (ua.indexOf("iPad") > 0 || ua.indexOf("Android") > 0) {
  //     // タブレット用コード
  //     $("head").prepend('<meta name="viewport" content="width=1440">');
  //   } else {
  //     // PC用コード
  //     $("head").prepend(
  //       '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">'
  //     );
  //   }
  // });

  //レスポンシブ時に画像の切り替えを行う
  $(function () {
    var $elem = $(".js-imageChange");
    var sp = "_sp.";
    var pc = "_pc.";
    var replaceWidth = 769;

    function imageSwitch() {
      var windowWidth = parseInt($(window).width());
      $elem.each(function () {
        var $this = $(this);
        if (windowWidth >= replaceWidth) {
          if ($this.attr("src")) {
            $this.attr("src", $this.attr("src").replace(sp, pc));
          } else if ($this.attr("data-src")) {
            $this.attr("data-src", $this.attr("data-src").replace(sp, pc));
          }
        } else {
          if ($this.attr("src")) {
            $this.attr("src", $this.attr("src").replace(pc, sp));
          } else if ($this.attr("data-src")) {
            $this.attr("data-src", $this.attr("data-src").replace(pc, sp));
          }
        }
      });
    }
    imageSwitch();
    var resizeTimer;
    $(window).on("resize", function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        imageSwitch();
      }, 200);
    });
  });

  //pagetop
  $(function () {
    var topBtn = $(".l-footer__pagetop");
    topBtn.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        topBtn.fadeIn();
      } else {
        topBtn.fadeOut();
      }
    });
    topBtn.click(function () {
      $("body,  html").animate(
        {
          scrollTop: 0,
        },
        500
      );
      return false;
    });
  });

  //ドロワーの開閉処理
  $(function () {
    $(".p-header__toggle").click(function () {
      $(this).toggleClass("active");

      if ($(this).hasClass("active")) {
        $(".p-header-nav_sp").addClass("open");
        $(".p-nav-overlay").addClass("open");
        $("html").addClass("open");
        $("body").addClass("open");
      } else {
        $(".p-header-nav_sp").removeClass("open");
        $(".p-nav-overlay").removeClass("open");
        $("html").removeClass("open");
        $("body").removeClass("open");
      }
    });
  });

  $(window).resize(function () {
    if ($(window).width() > 768) {
      $(".p-header-nav_sp").removeClass("open");
      $(".p-nav-overlay").removeClass("open");
      $("html").removeClass("open");
      $("body").removeClass("open");
      $(".p-header__toggle").removeClass("active");
    }
  });

  // スムーススクロール
  $(function () {
    $('a[href^="#"]').click(function () {
      var speed = 1300;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      $("html, body").animate({ scrollTop: position }, speed, "swing");
      return false;
    });
  });

  $(function () {
    var voiceSwiper = new Swiper(".swiper-container", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 10,

      autoplay: {
        delay: 5000,
      },

      breakpoints: {
        600: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });

  // テキスト省略
  $(".abbr").each(function () {
    var txt = $(this).text();
    if (txt.length > 100) {
      txt = txt.substr(0, 80);
      $(this).text(txt + "･･･");
    }
  });

  $(".abbr-s-ttl").each(function () {
    var txt = $(this).text();
    if (txt.length > 20) {
      txt = txt.substr(0, 20);
      $(this).text(txt + "･･･");
    }
  });

  $(".abbr-s").each(function () {
    var txt = $(this).text();
    if (txt.length > 30) {
      txt = txt.substr(0, 30);
      $(this).text(txt + "･･･");
    }
  });

  $(function () {
    var $this = $(this);
    var $acMenu = $(".accordion-menu");
    var $toggleMenu = $(".menu-second_sp");

    $toggleMenu.hide();
    $acMenu.on("click", function () {
      $(this).find($toggleMenu).slideToggle(300);
      $(this).toggleClass("active");
    });
  });

  $(function () {
    $(".accordion-menu").click(function () {
      $(this).toggleClass("active");

      if ($(this).hasClass("active")) {
        $(".menu-second_sp").addClass("active");
      } else {
        $(".menu-second_sp").removeClass("active");
      }
    });
  });

  jQuery(function () {
    var headerHight = 70; //ヘッダの高さ
    if (window.matchMedia("(max-width: 767px)").matches) {
      jQuery('a[href^="#"]').click(function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - headerHight; //ヘッダの高さ分位置をずらす
        jQuery("html, body").animate({ scrollTop: position }, 550, "swing");
        return false;
      });
    }
  });

  // ara-mitumori
  jQuery(function () {
    if($('#mitumori-li').length){
      jQuery("#mitumori-li").vTicker({
        speed: 1000,
        pause: 2000,
        showItems: 3,
      });
    }
  });

	// 垂直ティッカー
  jQuery(document).ready(function ($) {
    //768px以上の場合
    if (window.matchMedia("(min-width: 768px)").matches) {
      $(function () {
        if($('#mitumori-li').length){
          $("#mitumori-li").vTicker({
            speed: 1000,
            pause: 2000,
            showItems: 3,
          });
        }
      });
      //768px以下の場合
    } else {
      $(function () {
        if($('#mitumori-li').length){
          $("#mitumori-li").vTicker({
            speed: 1000,
            pause: 2000,
            showItems: 5,
          });
        }
      });
    }
  });
});

// 住所自動入力
jQuery("#zip").keyup(function () {
  AjaxZip3.zip2addr(this, "", "adress-01-01", "adress-01-02");
});

jQuery("#zip2").keyup(function () {
  AjaxZip3.zip2addr(this, "", "adress-02-01", "adress-02-02");
});

jQuery(function ($) {
  $("img[usemap]").rwdImageMaps();
});

var lastChildCount = 1;
var mul = document.getElementById('mitsumori-list');
if (mul != null) {
    var count = mul.childElementCount;
    var mitsumori = function () {
        var lastChild = document.querySelector('.mitsumori__li:nth-child(' + count-- +')');
        // console.log('count: ' + count);
        lastChild.classList.add('on');
        var last = setTimeout(() => {
            lastChild.classList.remove('on');
        }, 12000);
        var id = setTimeout(mitsumori, 4000);
        if (count <= 0) {
            clearTimeout(id);
        }
        if(count < 3) {
            clearTimeout(last);
        }
    }
    mitsumori();
}
// (function () {
//   var observer = lozad(".lozad", {
//     rootMargin: "200px 0px",
//     threshold: 0.1,
//     load: function load(el) {
//       el.src = el.dataset.src;
//     }
//   });
//   observer.observe();
// })();

jQuery(function($) {
  var $win = $(window),
      // $main = $('main'),
      $nav = $('.p-header'),
      navHeight = $nav.outerHeight(),
      navPos = $nav.offset().top,
      fixedClass = 'is-fixed';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > navPos ) {
      $nav.addClass(fixedClass);
      // $main.css('margin-top', navHeight);
    } else {
      $nav.removeClass(fixedClass);
      // $main.css('margin-top', '0');
    }
  });
});