$(function () {
    var $this = $(this);
    var $acMenu = $('.accordion-menu');
　　 var $toggleMenu =$('.menu-second_sp');

    $toggleMenu.hide();
    $acMenu.on('click', function () {
        $(this).find($toggleMenu).slideToggle(300);
        $(this).toggleClass('active');
    });

});
