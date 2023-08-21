//slider
$(".home-mainvisual__slider").slick({
    fade: true,
    speed: 1100,
    infinite: true,
    // autoplay: true,
    arrows: false,
});

//menu mobile
$(document).ready(function () {
    "use strict";
    $(".c-header__hamburger").click(function (e) {
        e.preventDefault();
        $("body").toggleClass("is-fixed");
        $(this).toggleClass('active');
        $(".c-header__overlay").toggleClass("is-menushow");
        $(".c-header__navhide").toggleClass("opened");
    });
    
    $(".c-header__collink").click(function () {
        var item = $(this).next();
        if (item.length > 0) {
            $(".c-header__navhide").animate({scrollTop: 0},0);
        }
        else {
            $(".c-header__overlay").toggleClass("is-menushow");
            $(".c-header__navhide").toggleClass("opened");
            $(".c-header__hamburger").removeClass("active");
            $('body').toggleClass("is-fixed");
        }
    });

    $(".c-header__overlay").click(function () {
        $(".c-header__navhide").removeClass("opened");
        $(".c-header__hamburger").removeClass("active");
        $(".c-header__overlay").toggleClass("is-menushow");
        $('body').toggleClass("is-fixed");
    });
    
	//header fixed when scroll
    $(window).scroll(function () {
        if ($(window).scrollTop() > 20) {
        $(".c-header").addClass("is-headfixed");
        $(".c-header__wrap").addClass("is-headfixed");
        }
        else{
        $(".c-header").removeClass("is-headfixed");
        $(".c-header__wrap").removeClass("is-headfixed");
        }    
    }).scroll();
    
    //active_scroll_menu
    $('.c-header__link').click(function () {
        var tag=$(this).attr("href");
        var top=tag.offsetTop;   
        $('html, body').animate({ scrollTop: $(tag).position().top - 85}, 100);
        return false;
    });

    $('.c-header__collink').click(function () {
        var tag=$(this).attr("href");
        var top=tag.offsetTop;   
        $('html, body').animate({ scrollTop: $(tag).position().top - 85}, 100);
        return false;
    });

    //back to top
    $(".c-backtotop").addClass("is-hidetop");
        $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            $('.c-backtotop').removeClass("is-hidetop");
        } else {
            $('.c-backtotop').addClass("is-hidetop");
        }
    });
    $('.c-backtotop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 100);
        return false;
    });
});

//validate form
$(document).ready(function(){
    $(".mw_wp_form form").validate({
        rules: {
            "type": {
                required: true
            },
            "name": {
                required: true
            },
            "company": {
                required: true
            },
            "email": {
                required: true,
                email: true,
            },
            "phone": {
                required: false,
                fnType: true,
                maxlength: 13,
                minlength:10,
            },
            "content": {
                required: true
            },
            "privacy[data][]": {
                required: true
            }
        },
        messages: {
            "type": {
                required: "は必須項目です"
            },
            "name": {
                required: "は必須項目です"
            },
            "company": {
                required: "は必須項目です"
            },
            "email": {
                required: "は必須項目です",
                email: "example@gmail.com"
            },
            "phone": {
                required: "は必須項目です",
                fnType: "無効な電話番号",
                maxlength: "無効な電話番号",
                minlength: "無効な電話番号",
            },
            "content": {
                required: "は必須項目です"
            },
            "privacy[data][]": {
                required: "当社のプライバシーポリシーに同意してください"
            }
        }
    });

    $.validator.addMethod('email', function (value) {
        return value.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/);
        }, '正しいメールアドレスを入力してください');
    $.validator.addMethod('fnType', function (value) {
        return value.match(/^(?:\d{0}|\d{10}|\d{11}|\d{3}-\d{3}-\d{4}|\d{2}-\d{4}-\d{4}|\d{3}-\d{4}-\d{4})$/);
    }, '有効な電話番号を入力してください');
    $(".mw_wp_form form .c-btn__submit").click(function () {
        if ($(".mw_wp_form form").valid()) {
            return true;
        }
    });
});
