<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>未設定</title>

    <?php include("head.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>

    <?php /* 以下コンテンツ */ ?>
    
    <main class="contact no_top">
        <section class="mv no_top relative">
            <div class="container">
                <div class="mv_title">
                    <p class="font-size-60 bold">お問い合わせ</p>
                    <p class="font-size-35">Contact</p>
                </div>
            </div>
            <img src="./img/company_ceo/common_mv.png" alt="mv" width="100vw" height="auto">

            <div class="container breadcrumbsArea">
                <ul>
                    <li><a href="">トップページ</a></li>
                    <li><a href="">お問い合わせ</a></li>
                </ul>
            </div>
        </section>

        <section class="sect_01">

            <div class="inner mgn-btm-50">
                <h3>お問い合わせ</h3>
                <span>Contact</span>
            </div>

            <div class="inner mgn-btm-50 span_red">
                <p class="font-size-16">
                    お手数ですが、<span>*</span> の付いた項目は必ずご入力ください。<br>
                    半角カタカナ、外字（登録文字）での入力は文字化けの原因となりますのでお控えください。<br>
                    <a href="">個人情報保護方針</a>にご同意の上、送信ください。
                </p>
            </div>

            <div class="inner mgn-btm-100">
                <form method="post" action="mail.php">
                    <table class="formTable span_red">
                        <tbody>
                            <tr>
                                <th class="font-size-16 bold">会社名(団体名)<span>*</span></th>
                                <td><input size="20" type="text" name="会社名(団体名)"></td>
                            </tr>
                            <tr>
                                <th class="font-size-16 bold">お名前<span>*</span></th>
                                <td><input size="30" type="text" name="お名前"></td>
                            </tr>
                            <tr>
                                <th class="font-size-16 bold">ご住所<span>*</span></th>
                                <td><input size="30" type="text" name="ご住所"></td>
                            </tr>
                            <tr>
                                <th class="font-size-16 bold">電話番号<span>*</span></th>
                                <td><input type="tel" name="電話番号"></td>
                            </tr>
                            <tr>
                            <tr>
                                <th class="font-size-16 bold">メールアドレス<span>*</span></th>
                                <td><input type="email" name="メールアドレス"></td>
                            </tr>
                            <tr>
                                <th class="font-size-16 bold last_child">お問い合わせ内容<span>*</span><br></th>
                                <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="submit">
                        <div class="relative">
                            <p class="submit_btn">
                                <input type="submit" value="　 確　認 　"><span class="material-icons-outlined icon-position-right">arrow_right_alt</span>
                            </p>
                        </div>
                        <div class="relative">
                            <p class="submit_btn">
                                <input type="reset" value="リセット"><span class="material-icons-outlined icon-position-right">arrow_right_alt</span>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>

    <?php include("footer.php"); ?>