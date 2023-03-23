<!DOCTYPE html>
<html class="no-js" lang="en">
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
    <link rel="stylesheet" href="css/map.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/remix.css">

    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>


</head>


<body id="select_course">
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- header
    ================================================== -->
    <?php include "header.php"?>

<div class="main_body">
     <!-- top_map
    ================================================== -->
    <div class="content-jp">
    <div class="top_map">
        <h5>キャンパス</h5>
        <img src="images/mita_overview.png" >
        <p>キャンパス内に点在する作品は、自由に見て回っていただけますが、屋内作品は各館の開館時間にご注意ください。尚、学生スタッフがお勧めする周遊ルートを30分/60分の2ルート（計4コース）用意しておりますので、以下よりご利用ください。</p>
    </div>
    </div>

    <div class="content-en">
    <div class="top_map">
        <h5>On Campus</h5>
        <img src="images/mita_overview.png" >
        <p>You may visit the works inside of Mita Campus freely, however, please make sure that some of the works located inside the buildings can be seen only at open times.<br>You may also enjoy touring the venues using the Touring Courses made by KeMCo Students Staff (taking time 30 minutes or 60 minutes).</p>
    </div>
    </div>


    <!-- course
    ================================================== -->
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
                <p class="course_left">KUAC発 全作品を巡る</p>
                <p class="course_right">60分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="eastroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">KeMCo発 全作品を巡る</p>
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

    <!-- side angle
    ================================================== -->
    <div class="content-jp">
    <div class="sideangle">
        <div class="leftangle" id="left"><a href="south.php"><i class="fas fa-angle-left fa-3x"></i><p>南会場</p></div></a>
        <div class="rightangle" id="right"><a href="east.php"><i class="fas fa-angle-right fa-3x"></i><p>東会場</p></div></a>
    </div>
    </div>

    <div class="content-en">
    <div class="sideangle">
        <div class="leftangle" id="left"><a href="south.php"><i class="fas fa-angle-left fa-3x"></i><p>South Venue</p></div></a>
        <div class="rightangle" id="right"><a href="east.php"><i class="fas fa-angle-right fa-3x"></i><p>East Venue</p></div></a>
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
