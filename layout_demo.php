<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>レイアウトDemo</title>

    <?php include("head.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>

    <main class="wrapper layout_demo">

        <section>
            <div class="content_wrap_100">

                <div class="font_size_40 bold text_align_ctr margin_top_50">幅100%</div>
                <div class="wrap_clm">
                    <div class="grid" style="background-color: #92aac7;">
                        <p style="color:white;">1カラム<br>
                            全幅</p>
                    </div>
                </div>


                <div class="font_size_40 bold text_align_ctr margin_top_50">$inner_950</div>
                <div class="inner_950">
                    <div class="wrap_clm">
                        <div class="grid" style="background-color: #92aac7;">
                            <p style="color:white;">1カラム<br>
                                全幅</p>
                        </div>
                    </div>
                </div>

                <div class="font_size_40 bold text_align_ctr margin_top_50">2カラム幅同じ</div>
                <div class="wrap_clm">
                    <div class="grid50" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 50%</p>
                    </div>
                    <div class="grid50 text_align_ctr" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 50%(text_align_ctr)</p>
                    </div>
                </div>


                <div class="font_size_40 bold text_align_ctr margin_top_50">2カラム幅違い</div>
                <div class="wrap_clm">
                    <div class="grid30" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 30%</p>
                    </div>
                    <div class="grid50" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 50%</p>
                    </div>
                </div>


                <div class="font_size_40 bold text_align_ctr margin_top_50">3カラム投稿</div>
                <div class="wrap_clm post_clm">
                    <div class="grid30" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 30%</p>
                    </div>
                    <div class="grid30" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 30%</p>
                    </div>
                    <div class="grid30" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 30%</p>
                    </div>
                    <div class="grid30" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 30%</p>
                    </div>
                    <div class="grid30" style="background-color: #92aac7;">
                        <p style="color:white;">2カラム<br>
                            幅 30%</p>
                    </div>
                    <div class="grid30"></div>
                </div>
            </div>
        </section>




        <section class="sect_01">
        </section>


        <section class="sect_02">
        </section>

        <section class="sect_03">
        </section>

    </main>

    <?php include("footer.php"); ?>