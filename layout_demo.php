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
        <section class="mv">
            <div class="content_wrap_100">
                <div class="wrap_1clm">
                    <div class="grid">
                        <img src="https://placehold.jp/92aac7/ffffff/1200x600.png?text=MV%201200x600" alt="mv">
                    </div>
                </div>
            </div>
            <div class="content_wrap_100" style="background-color: #92aac7;">
                <div class="wrap_1clm">
                    <div class="grid">
                        <p style="color:white;">1カラム<br>
                            全幅</p>
                    </div>
                </div>

                <div class="wrap_2clm">
                    <div class="grid30">
                        <p style="color:white;">1カラム<br>
                            全幅</p>
                    </div>
                    <div class="grid30">
                        <p style="color:white;">1カラム<br>
                            全幅</p>
                    </div>
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