<!DOCTYPE html>
<html class="no-js" lang="ja">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>KeMCo webapp</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/stamp.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">


    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

</head>


<body id="stamp">
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- header
    ================================================== -->
    <?php include "header.php"?>


<div class="main_body">
    <!-- topimage
    ================================================== -->
    <div class="topimage">
    <div class="content-jp">
        <p>キャンパス点在作品を巡る<br>スタンプラリー</p>
    </div>
    <div class="content-en">
        <p>Stamp Rally<br>touring around the Campus</p>
    </div>
    </div> <!-- end s-header -->



    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section s-dark">
        <div class="content-jp">
        <div class="readme">
            <p>点在作品のガイド番号を入力する度に、自動的にスタンプが貯まります。スタンプの数に応じて特製グッズをプレゼントしておりますので、この機会にぜひご参加ください。</p>
                <div class="goods">
                <a href="goods.php">
                <button type="button">
                    特製グッズについて
                </button>
                </a>
                </div>
        </div>
        </div>
        <div class="content-en">
        <div class="readme">
            <p>With entering the guide numbers of each works you can collect the stamps. After collecting all of them, we will give you some special present. Please enjoy it!</p>
                <div class="goods">
                <a href="goods.php">
                <button type="button">
                    About the special presents
                </button>
                </a>
                </div>
        </div>
        </div>
        <div class="stamps">
            <img <?php if(!empty($_COOKIE['page1'])){echo 'src="images/stamp/T.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page2'])){echo 'src="images/stamp/a.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page3'])){echo 'src="images/stamp/n.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page4'])){echo 'src="images/stamp/g.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page5'])){echo 'src="images/stamp/i.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page6'])){echo 'src="images/stamp/tt.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page7'])){echo 'src="images/stamp/e.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page8'])){echo 'src="images/stamp/m.png"';} ?> class="stamp_img">
            <img <?php if(!empty($_COOKIE['page9'])){echo 'src="images/stamp/ee.png"';} ?> class="stamp_img">
        </div>
        <br>
        <div class="content-jp">
        <div class="attention">
            スタンプラリーをご利用いただくには、ご使用のブラウザが「Cookieを受け入れる」設定になっている必要がございます。<br><br>
            展覧会の開催期間中は、何度でもご参加いただけますが、特製グッズの受け渡しはお一人様につき一回限りとさせていただきます。なお、特製グッズ受け渡しは東会場（慶應義塾ミュージアム・コモンズ）1Fとなります。<br><br>
            スタンプの蓄積に不具合等が生じた場合は、開館時間中に東会場（慶應義塾ミュージアム・コモンズ）1F受付までお越しください。担当スタッフが対応致します。<br>
        </div>
        </div>
        <div class="content-en">
        <div class="attention">
            In terms of participating in the Stamp Rally, your browser needs to accept cookies, so please check your settings.<br><br>
            During the exhibition period, you can participate in the Stamp Rally as many times as you want, however, we can give the presents only once for each participant .<br><br>
            If there any problems about collecting stamps occur, please access to the East Venue (Keio Museum Commons) 1st floor reception at open times and the staff will help you.<br>
        </div>
        </div>

    </section> <!-- end s-contact -->
    <div class="content-jp">
    <div class="course">
        <h4>周遊コース</h4>
        <a href="noguchiroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">イサム・ノグチの作品を巡る</p>
                <p class="course_right">30分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="outdoorroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">屋外作品を巡る</p>
                <p class="course_right">30分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="southroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">KUAC発 全作品を巡るコース</p>
                <p class="course_right">60分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="eastroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">KeMCo発 全作品を巡るコース</p>
                <p class="course_right">60分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <div class="course_text">
            <p>※各所要時間は目安です<br>
                ※各コースをタップするとキャンパスマップとともに位置情報[GPS]が起動します（端末本体やブラウザの位置情報設定がオンになっている必要があります）。</p>
        </div>
    </div>
    </div>

    <div class="content-en">
    <div class="course">
        <h4>Touring Courses</h4>
        <a href="noguchiroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">Visit NOGUCHI Isamu’s works</p>
                <p class="course_right">30min<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="outdoorroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">Visit outdoor works</p>
                <p class="course_right">30min<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="southroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">Visit all works starting from KUAC</p>
                <p class="course_right">60min<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="eastroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">Visit all works starting from KeMCo</p>
                <p class="course_right">60min<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <div class="course_text">
            <p>※Each time is only an estimate<br>
                ※If you access each courses, the Campus map will pop up and it will guide you using GPS. (The main device’s or the browser’s GPS needs to be turned on.)</p>
        </div>
    </div>
    </div>

</div>

<!-- footer
================================================== -->
<?php include "footer.php"?>



    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
