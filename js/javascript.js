window.addEventListener('DOMContentLoaded', function() {

    // ###ハンバーガー###
    var $btn = $('.hNavToggleBtn');
    var $hNav = $('#hNavWrap');
    var $mask = $('#hNavClose');
    var $a = $('a');
    var open = 'open';
    $btn.on('click', function() {
        if (!$hNav.hasClass(open)) {
            $hNav.addClass(open);
        } else {
            $hNav.removeClass(open);
        }
    });

    $mask.on('click', function() {
        $hNav.removeClass(open);
    })
    $a.on('click', function() {
        $hNav.removeClass(open);
    })
    var $gNav = document.getElementById('gNav').innerHTML;
    document.getElementById('hNav').innerHTML = $gNav;


    // ###スムーズスクロール###
    $('a[href^="#"]').click(function() {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({ scrollTop: position - 100 }, speed, "swing");
        return false;
    });

    // ###スクロールトップ###
    var showFlag = false;
    var topBtn = $('#pageTop');
    topBtn.css('bottom', '-150px');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({ 'bottom': '16px' }, 200);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({ 'bottom': '-150px' }, 200);
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

});

// トップページヘッダー背景色追加
function headerBg() {
    var header = $('header');
    $(window).on('load scroll resize', function() {
        if ($(this).scrollTop() < 680) {
            header.css('background-color', '#fff');
        } else {
            header.css('background-color', '#fff');
        }
    });
}


var userAgent = window.navigator.userAgent.toLowerCase();

if (userAgent.indexOf('msie') != -1 ||
    userAgent.indexOf('trident') != -1) {} else {
    window.addEventListener('DOMContentLoaded', function() {
        // new ScrollHint('.js-scrollable');
    });
}