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
        <h5>屋外作品を巡るコース</h5>
        </div>
        <div class="content-en">
        <h5>Visit outdoor works</h5>
        </div>
        <body onload="init();">
            <div class="wrapper" onload="init();">
                <canvas id="location" width="1483" height="1028" style = "background-image: url(images/map_outdoor.png);"></canvas>
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
                    <td>柴田佳石 《福澤諭吉胸像》 1953年</td>
                </tr>
                <tr>
                    <td>イサムノグチ 《無》 1950-1951年</td>
                </tr>
                <tr>
                    <td>菊池一雄 《青年》 1948年</td>
                </tr>
                <tr>
                    <td>朝倉文夫 《平和来》 1952年</td>
                </tr>
            </table>
            </div>

        <p>《福澤諭吉胸像》は三田演説館前、生い茂る蔦に囲まれています。《無》は南館外階段を上った先にあります。館内エレベーターで３Fに上った後、廊下を進んで非常口から向かうこともできます。《青年》は労働組合本部前、コンクリート塀を背景に展示されています。《平和来》は塾監局前の福澤公園内に展示されています。
            <br>《無》、《平和来》は道程が少々分かりづらいため、以下の写真・動画を参照してください。</p>
        <div class="imagelist">
            <video muted playsinline src="movie/jp/outdoor.mov" controls poster="thumbnail/jp/outdoor.jpg"></video>
        </div>
    </div>
    </div>

    <div class="content-en">
    <div class = "coursework">
        <h4>Works you can see in this course</h4>
            <div class= "worklist">
            <table>
                <tr>
                    <td>SHIBATA Kaseki 《Bust of Yukichi Fukuzawa》1953</td>
                </tr>
                <tr>
                    <td>NOGUCHI Isamu 《Mu(Nothingness)》1950-1951</td>
                </tr>
                <tr>
                    <td>KIKUCHI Kazuo 《Youth》1948</td>
                </tr>
                <tr>
                    <td>ASAKURA Fumio《Heiwa Kitaru(Coming of Peace)》</td>
                </tr>
            </table>
            </div>

        <p>《Bust of Yukichi Fukuzawa》is established in front of Mita Enzetsu-kan. Go up the outdoor stairs of South Building and you can see《Mu(Nothingness)》. To see it, you can take the elevator to the third floor, walk along the corridor and then go out from the  emergency exit.
            <br>《Youth》is exhibited in front of West Building. 《Heiwa Kitaru(Coming of Peace)》is exhibited in Fukuzawa park, in front of Jukukan-kyoku. For more details, check the photos and the videos below.</p>
        <div class="imagelist">
            <video muted playsinline src="movie/en/outdoor_en.MP4" controls poster="thumbnail/en/outdoor_en.jpg"></video>
        </div>
    </div>
    </div>

       <!-- course
    ================================================== -->
    <div class="content-jp">
    <div class="course">
        <h4>その他の周遊コース</h4>
        <a href="noguchiroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">イサムノグチの作品を巡る</p>
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
        <a href="noguchiroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">Visit NOGUCHI Isamu’s  works</p>
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
