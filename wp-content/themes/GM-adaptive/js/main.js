var $ = jQuery.noConflict();

$(function(){

    // navigation bar collapse
    $('.nav-md').on('click', function(){
        $('.menu').toggle(300);
        $('.collapse-btn').toggleClass('collapse-btn-active');
        $('.collapse-btn-sm').toggleClass('collapse-btn-sm-active');
    });

    // masonry init
    $('.grid').masonry({
        itemSelector: '.grid-item'
    });

    //vacancies show button
    $('.required-show').on('click', function(){
        $(this).prev('.required-hidden').toggle(400);
        $(this).text(function(i, text){
            return text === "Читать полностью ▼" ? "Закрыть ▲" : "Читать полностью ▼";
        })
    });

});