$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });
    $('.evaluate-collapse').on('click', function(){
        $('.evaluate-content2').toggle();
        $('.evaluate-collapse').toggle();
        $('.evaluate-more').toggle();
    });
    $('.evaluate-more').on('click', function(){
        $('.evaluate-content2').toggle();
        $('.evaluate-collapse').toggle();
        $('.evaluate-collapse').toggle();
    });
    $('.bars').on('click', function(){
        $('.menu').toggle();
        $('.bars').toggle();
        $('.close').toggle();
    });
    $('.close').on('click', function(){
        $('.menu').toggle();
        $('.bars').toggle();
        $('.close').toggle();
    });
});