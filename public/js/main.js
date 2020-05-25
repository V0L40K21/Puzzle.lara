$(function() {
    

    $('.location-toggle').on('click', function(){
        $('.location').toggle();
    });
    $('.lang-toggle').on('click', function(){
        $('.lang').toggle();
    });

    $('.contact-btn').on('click', function() {
        $(this).next('#about_form').toggle();
    });
    
    $('ul.tabs__caption').on('click', 'li:not(.reviews__tabs-active)', function() {
        $(this)
          .addClass('reviews__tabs-active').siblings().removeClass('reviews__tabs-active')
          .closest('div.reviews__tabs').find('div.reviews__content').removeClass('reviews__tabs-active').eq($(this).index()).addClass('reviews__tabs-active');
      });


      // $('.swiper-wrapper').slick({
      //   vertical: true,
      //   swipe: true,
      //   verticalSwiping: true,
      //   slidesToShow: 3,
      //   slidesToScroll: 3,
      //   pauseOnFocus: true,
      //   infinite: true,
      //   arrows: false,
      //   autoplaySpeed: 0,
      //   speed: 20000,
      //   autoplay: true,
      // });

      // $('.swiper-slide').on('mouseleave', function(){
      //   $('.swiper-wrapper').slick({
      //     slickPlay: true
      //   });


});