jQuery(document).ready(function($){

  $("a").bind("focus",function(){if(this.blur)this.blur();});
  $("a.target_blank").attr("target","_blank");
  $('.rollover').rollover();

  $('.footer_widget:nth-child(3n)').addClass('right_widget');
  $(".styled_post_list1 > li:last-child").addClass("last");
  $(".styled_post_list2 > li:last-child").addClass("last");

  $("#comment_area ol > li:even").addClass("even_comment");
  $("#comment_area ol > li:odd").addClass("odd_comment");
  $(".even_comment > .children > li").addClass("even_comment_children");
  $(".odd_comment > .children > li").addClass("odd_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");

  $("#trackback_switch").click(function(){
    $("#comment_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#comment_area").animate({opacity: 'hide'}, 0);
    $("#trackback_area").animate({opacity: 'show'}, 1000);
    return false;
  });

  $("#comment_switch").click(function(){
    $("#trackback_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#trackback_area").animate({opacity: 'hide'}, 0);
    $("#comment_area").animate({opacity: 'show'}, 1000);
    return false;
  });




function mediaQueryClass(width) {

 if (width > 641) { //PC

   $("html").removeClass("mobile");
   $("html").addClass("pc");

   var n_size=$("#global_menu > ul > li").size();
   var aWidth = 700/n_size;
   $("#global_menu > ul > li").css("width",aWidth+"px");
   $("#global_menu ul ul li").css("width",aWidth+"px");

   $(".menu_button").css("display","none");
   $("#global_menu").show();
   $("#global_menu ul ul").hide();
   $("#global_menu a:has(ul)").removeClass("active_menu").off("click");

   $("#global_menu li").hover(function(){
     $(">ul:not(:animated)",this).slideDown("fast");
     $(this).addClass("active_menu");
    }, function(){
     $(">ul",this).slideUp("fast");
     $(this).removeClass("active_menu");
    });

 } else { //�X�}�z

   $("html").removeClass("pc");
   $("html").addClass("mobile");

   $("#global_menu ul ul").show();
   $("#global_menu > ul > li").css("width", "");
   $("#global_menu ul ul li").css("width", "");
   $("#global_menu ul").removeClass("active_menu");
   $(".menu_button").css("display", "block");
   $("#global_menu li").off('hover');

   $('.menu_button').off('click');
   if($(".menu_button").hasClass("active")) {
     $(".menu_button").removeClass("active")
   };

   $(".menu_button").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $('#global_menu').hide();
       return false;
     } else {
       $(this).addClass("active");
       $('#global_menu').show();
       return false;
     };
   });

 };
};

mediaQueryClass(document.documentElement.clientWidth);

$(window).bind("resize orientationchange", function() {
  mediaQueryClass(document.documentElement.clientWidth);
})




});