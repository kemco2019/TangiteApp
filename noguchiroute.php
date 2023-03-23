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
        <div class="content-jp">
        <h5>イサムノグチの作品を巡るコース</h5>
        </div>
        <div class="content-en">
        <h5>Visit NOGUCHI Isamu’s works</h5>
        </div>
        <body onload="init();">
            <div class="wrapper" onload="init();">
                <canvas id="location" width="1483" height="1028" style = "background-image: url(images/map_noguchi.png);"></canvas>
            </div>
        </body>
    </div>
    <!-- serch
    ================================================== -->
    <div class="content-jp">
    <div class="search">
        <form id="form4" action="works.php" method="get">
            <input id="sbox4"  id="s" name="s" type="number" placeholder="&#xf00a; ガイド番号を２桁で入力" maxlength="2">
            <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    </div>

    <div class="content-en">
    <div class="search">
        <form id="form4" action="works.php" method="get">
            <input id="sbox4"  id="s" name="s" type="number" placeholder="&#xf00a; Enter Guide Number" maxlength="2">
            <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    </div>

    <!-- works list
    ================================================== -->
    <div class="content-jp">
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

        <p>慶應義塾が所蔵するイサム・ノグチの作品群は、現在すべて南館で見ることができます。彫刻作品の《学生》および《若い人》は、南館の入口（屋内）で展示され、《無》は3Fの旧ノグチ・ルーム横（屋外）に展示されています。
            <br>なお、《無》を見るには、外階段を上っていくか館内エレベーターで3Fに上った後、廊下を進んで非常口から外に出る必要があります。道程が少々分かりづらいため、以下の写真・動画を参照してください。</p>
        <div class="imagelist">
            <video muted playsinline src="movie/jp/noguchi.mov" controls poster="thumbnail/jp/noguchi.jpg"></video>
        </div>
    </div>
    </div>

    <div class="content-en">
    <div class = "coursework">
        <h4>Works you can see in this course</h4>
            <div class= "worklist">
            <table>
                <tr>
                    <td>NOGUCHI Isamu 《Gakusei（Student）》1951</td>
                </tr>
                <tr>
                    <td>NOGUCHI Isamu《Wakai Hito（Young Person）》1950</td>
                </tr>
                <tr>
                    <td>NOGUCHI Isamu《Mu（Nothingness）》1950-1951</td>
                </tr>
            </table>
            </div>

        <p>We can see all Isamu Noguchi’s works which are held in Keio University in South Building. Two of them, 《Gakusei（Student）》and 《Wakai HIto （Young Person）》are exhibited in the entrance, the inside of South Building. The other, 《Mu（Nothingness）》is exhibited next to Ex-Noguchi room, the outside of South Building.
            <br>In addition, to see 《Mu（Nothingness）》, take the elevator to the third floor, walk along the corridor and then go out from the emergency exit. In detail, Please check out the photos and the video.For more details, check the photos and the videos below.</p>
        <div class="imagelist">
            <video muted playsinline src="movie/en/noguchi_en.MP4" controls poster="thumbnail/en/noguchi_en.jpg"></video>
        </div>
    </div>
    </div>


       <!-- course
    ================================================== -->
    <div class="content-jp">
    <div class="course">
        <h4>その他の周遊コース</h4>
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
    </div>
    </div>

    <div class="content-en">
    <div class="course">
        <h4>Other courses</h4>
        <a href="outdoorroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">Visit Outdoor Works</p>
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
