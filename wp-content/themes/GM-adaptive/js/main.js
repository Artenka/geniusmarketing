var $ = jQuery.noConflict();

$(function(){
    $('.nav-md').on('click', function(){
        $('.menu').toggle(300);
        $('.collapse-btn').toggleClass('collapse-btn-active');
        $('.collapse-btn-sm').toggleClass('collapse-btn-sm-active');
    });
});