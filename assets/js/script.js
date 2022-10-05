
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  /*
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");

  });
  */
  //ハンバーガーメニュー
  $('.js-hamburger').click(function() {
    if ($(".js-hamburger").hasClass('is-active')) {
      $(".js-hamburger").removeClass('is-active');
      $(".js-drawer-menu").removeClass('is-active');
    } else {
      $(".js-hamburger").addClass("is-active");
      $(".js-drawer-menu").addClass("is-active");
    }
  });


  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  //ヘッダー透過解除
  var _window = $(window),
    _header = $('.header__inner'),
    heroBottom;
 
  _window.on('scroll',function(){
    heroBottom = $('.p-main-view').height();
    if(_window.scrollTop() > heroBottom){
        _header.addClass('transform');   
    }
    else{
        _header.removeClass('transform');   
    }
  });

  _window.on('scroll',function(){
    heroBottom = $('.under-view').height();
    if(_window.scrollTop() > heroBottom){
        _header.addClass('transform');   
    }
    else{
        _header.removeClass('transform');   
    }
  });

  _window.trigger('scroll');



  //slider
  var swiper = new Swiper(".js-swiper-work", {
    loop: true,//ループ
    autoplay: {
      delay: 2000,
    },
    
    pagination: {
      el: ".swiper-pagination",
    },
  });
  

  // //cardのhover時
  // $(".gb__hover-color1").hover(function() {
  //   if ($(".gb__hover-color1").hasClass('is-active')) {
  //     $(".gb__hover-color1").removeClass('is-active');
  //     $(".text__hover-color1").removeClass("is-active");
  //   } else {
  //     $(".gb__hover-color1").addClass("is-active");
  //     $(".text__hover-color1").addClass("is-active");
  //   }
  // });

  // $(".gb__hover-color2").hover(function() {
  //   if ($(".gb__hover-color2").hasClass('is-active')) {
  //     $(".gb__hover-color2").removeClass('is-active');
  //     $(".text__hover-color2").removeClass("is-active");
  //   } else {
  //     $(".gb__hover-color2").addClass("is-active");
  //     $(".text__hover-color2").addClass("is-active");
  //   }
  // });

  // $(".gb__hover-color3").hover(function() {
  //   if ($(".gb__hover-color3").hasClass('is-active')) {
  //     $(".gb__hover-color3").removeClass('is-active');
  //     $(".text__hover-color3").removeClass("is-active");
  //   } else {
  //     $(".gb__hover-color3").addClass("is-active");
  //     $(".text__hover-color3").addClass("is-active");
  //   }
  // });
  //カードカラーチェンジ
  $(".c-card__item").hover(function () {
    $(this).toggleClass("gb__hover-color");
    $(this).find(".c-card__body").toggleClass("is-active");
    // $(this).find(".c-card__text").toggleClass("text__hover-color");
  });

 //work詳細
 var swiper = new Swiper(".js-swiper-thumb", {
  loop: true,
  spaceBetween: 15,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    767: {
      slidesPerView: 8,
      spaceBetween: 10
    }
  }
  });
var swiper2 = new Swiper(".js-swiper-work-under", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
//  //サムネイル
//   var sliderThumbnail = new Swiper('.slider-thumbnail', {
//     slidesPerView: 4,
//     loop: true,
//     freeMode: true,
//     watchSlidesVisibility: true,
//     watchSlidesProgress: true,
//   });

//   //スライダー
//   var slider = new Swiper('.slider', {
//     loop: true,
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
//     thumbs: {
//       swiper: sliderThumbnail
//     }
//   });
});
