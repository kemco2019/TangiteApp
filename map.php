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
    <link rel="stylesheet" href="css/map.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">


    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <script src="js/location.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>


</head>

<body id="map">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <?php include "header.php"?>

<div class="main_body">

    <!-- canvas
    ================================================== -->
    <div class="location">
        <h5>キャンパス</h5>
        <body onload="init();">
            <div class="wrapper" onload="init();">
                <canvas id="location" width="1483" height="1028"></canvas>
            </div>
        </body>
    </div>
    <!-- works list
    ================================================== -->
    <div class = "coursework">
        <h4>本コースで見られる作品</h4>
            <div class= "worklist">
            <table>
                <tr>
                    <td>イサムノグチ 《学生》 1951年</td>
                </tr>
                <tr>
                    <td>イサムノグチ 《若い人》 1950年</td>
                </tr>
                <tr>
                    <td>イサムノグチ 《無》 1950-1951年</td>
                </tr>
            </table>
            </div>

        <p>慶應義塾が所蔵するイサム・ノグチの作品群は、現在すべて南館で見ることができる。彫刻作品の《学生》および《若い人》は、南館の入口（屋内）で展示され、《無》は3Fの旧ノグチ・ルーム横（屋外）に展示されている。
            <br>なお、《無》を見るには、外階段を上っていくか館内エレベーターで3Fに上った後、廊下を進んで外に出る必要がある。道程が少々分かりづらいため、以下の写真・動画を参照されたい。</p>
        <div class="imagelist">
            <img src="images/select1.jpg" >
            <img src="images/select1.jpg" >
            <img src="images/select1.jpg" >

        </div>
    </div>


       <!-- course
    ================================================== -->
    <div class="course">
        <h4>その他の周遊コース</h4>
        <a href="map.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">屋外作品を巡る</p>
                <p class="course_right">30分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="map.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">KUAC発 全作品を巡る</p>
                <p class="course_right">60分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
        <a href="map.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">KeMCo発 全作品を巡る</p>
                <p class="course_right">60分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
            </div>
        </a>
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
