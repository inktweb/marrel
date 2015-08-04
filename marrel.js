$(function($){
    $('.hamburger-btn a').click(function(){
        $('.hamburger li:not(.hamburger-btn)').slideToggle();
    })
})