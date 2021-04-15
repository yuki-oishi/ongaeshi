$(function () {
    //ドロワーの開閉処理
    $(".p-header__toggle").click(function () {
        $(this).toggleClass("active");

        if ($(this).hasClass("active")) {
            $(".p-header-nav_sp").addClass("open");
            $(".p-nav-overlay").addClass("open");
            $("html").addClass("open");
            $("body").addClass("open");
        } else {
            $(".p-header-nav_sp").removeClass("open");
            $(".p-nav-overlay").removeClass("open");
            $("html").removeClass("open");
            $("body").removeClass("open");
        }
    });
});

$(window).resize(function () {
    if ($(window).width() > 768) {
        $(".p-header-nav_sp").removeClass("open");
        $(".p-nav-overlay").removeClass("open");
        $("html").removeClass("open");
        $("body").removeClass("open");
        $(".p-header__toggle").removeClass("active");
    }
});
