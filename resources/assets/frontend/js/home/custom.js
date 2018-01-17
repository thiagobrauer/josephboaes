
$(document).ready(function(){

    $( ".welcome-screen" ).click(function() {
        $('.page').fadeIn(500);
        $( ".welcome-screen" ).fadeOut(500);
    });

    $('ul.navbar-nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

    var slide = $('.slide');
    slide.slick({
        centerMode: true,   
        variableWidth: true,
        infinite: false,
        prevArrow: '<img class="arrow left" src=../../frontend/img/arrow-left.png }}>',
        nextArrow: '<img class="arrow right" src=../../frontend/img/arrow-right.png }}>',
    });

    slide.on('afterChange', function(event, slick, currentSlide, nextSlide){
        if(slide.slick('slickCurrentSlide') == 0){
            $('.arrow.left.slick-arrow').css('opacity','0');
        }else{
            $('.arrow.left.slick-arrow').css('opacity','.6');
        }
        
        if(slide.slick('slickCurrentSlide') == ($('.slick-slide').length - 1)){
            $('.arrow.right.slick-arrow').css('opacity','0');
        }else{
            $('.arrow.right.slick-arrow').css('opacity','.6');
        }
    });

    slide.on('init', function(event, slick, direction){
        console.log('init');
        
        $('.arrow.left.slick-arrow').css('opacity','0');
    });
      
    $('body').on('mousewheel', function(event) {
        if(event.deltaY > 0){
            slide.slick('slickPrev');
        }else{
            slide.slick('slickNext');
        }
        event.preventDefault();
    });
    
});