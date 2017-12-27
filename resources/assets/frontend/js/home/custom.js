
$(document).ready(function(){

    $('.slide').slick({
        centerMode: true,
        // centerPadding: '200px',
        variableWidth: true,
        infinite: false,
        prevArrow: '<img class="arrow left" src=../../frontend/img/arrow-left.png }}>',
        nextArrow: '<img class="arrow right" src=../../frontend/img/arrow-right.png }}>',
    });

    $('ul.navbar-nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

});