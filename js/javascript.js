window.addEventListener('DOMContentLoaded', function () {

    /*￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣🐠
    ｜   ハンバーガー開閉
    ⎿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿🐠 */

    var $btn = $('.hNavToggleBtn');
    var $hNav = $('#hNavWrap');
    var $mask = $('#hNavClose');
    var $a = $('a');
    var open = 'open';
    $btn.on('click', function () {
        if (!$hNav.hasClass(open)) {
            $hNav.addClass(open);
        } else {
            $hNav.removeClass(open);
        }
    });

    $mask.on('click', function () {
        $hNav.removeClass(open);
    })
    // $a.on('click', function () {  aタグを開いて下層ページを開きたい時にハンバーガーメニューが閉じるので除外
    //     $hNav.removeClass(open);
    // })
    var $gNav = document.getElementById('gNav').innerHTML;
    // document.getElementById('hNav').innerHTML = $gNav;  下層ページがある時に、hNAv と gNav を別物にしたいので除外

    /*￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣🐠
    ｜   ハンバーガー内 下層ページ
    ⎿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿🐠 */

    //ドロップダウンの設定を関数でまとめる
    function mediaQueriesWin() {
        var width = $(window).width();
        if (width <= 1023) { //横幅が1023px以下の場合 $(".has_child>a").off('click');	//has_childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
            $(".has_child>a").on('click', function () { //has_childクラスがついたaタグをクリックしたら
                var parentElem = $(this).parent(); // aタグから見た親要素のliを取得し
                $(parentElem).toggleClass('active'); //矢印方向を変えるためのクラス名を付与して
                $(parentElem).children('ul').stop().slideToggle(500); //liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
                return false; //リンクの無効化
            });
        } else { //横幅が1024px以上の場合
            $(".has_child>a").off('click'); //has_childクラスがついたaタグのonイベントをoff(無効)にし
            $(".has_child>a").removeClass('active'); //activeクラスを削除
            $('.has_child').children('ul').css("display", ""); //スライドトグルで動作したdisplayも無効化にする
        }
    }

    // ページがリサイズされたら動かしたい場合の記述
    $(window).resize(function () {
        mediaQueriesWin(); /* ドロップダウンの関数を呼ぶ*/
    });

    // ページが読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function () {
        mediaQueriesWin(); /* ドロップダウンの関数を呼ぶ*/
    });

    /*￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣🐠
    ｜   スムーススクロール
    ⎿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿🐠 */

    $('a[href^="#"]').click(function () {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({ scrollTop: position - 100 }, speed, "swing");
        return false;
    });

    /*￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣🐠
    ｜   スクロールトップ(最上部へ)
    ⎿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿🐠 */

    var showFlag = false;
    var topBtn = $('#pageTop');
    topBtn.css('bottom', '-150px');
    $(window).scroll(function () {
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
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

});
