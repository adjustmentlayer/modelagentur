$(document).ready(function(){

    $('.slider1').slick({
        adaptiveHeight:true
    });

    $('.slider2').slick({
        adaptiveHeight:true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
              breakpoint: 960,
              settings: {
                slidesToShow: 2,
                arrows: false,
                centerMode: true,
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1,
                slidesToScroll:1
              }
            }
          ]
    });

    $('.slider3-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        draggable:false,
        asNavFor: '.slider3-nav'
      });
      $('.slider3-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider3-for',
        centerMode:false,
        dots: true,
        focusOnSelect: true
      });
});