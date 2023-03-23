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
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>


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
        <h5>KUAC発 全作品を巡るコース</h5>
        </div>
        <div class="content-en">
        <h5>Visit all works starting from KUAC</h5>
        </div>
        <body onload="init();">
            <div class="wrapper" onload="init();">
                <canvas id="location" width="1483" height="1028" style = "background-image: url(images/map_southcourse.png);"></canvas>
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
                    <td>宇佐美圭司《やがてすべては一つの円のなかに No.1》1982年</td>
                </tr>
                <tr>
                    <td>柴田佳石《福澤諭吉胸像》1953年</td>
                </tr>
                <tr>
                    <td>イサム・ノグチ《無》1950‒1951年</td>
                </tr>
                <tr>
                    <td>イサム・ノグチ《若い人》1950年</td>
                </tr>
                <tr>
                    <td>イサム・ノグチ《学生》1951年</td>
                </tr>
                <tr>
                    <td>猪熊弦一郎《デモクラシー》1949年</td>
                </tr>
                <tr>
                    <td>菊池一雄《青年》1948年</td>
                </tr>
                <tr>
                    <td>朝倉文夫《平和来》1952年</td>
                </tr>
                <tr>
                    <td>北村四海《手古奈》1909年頃</td>
                </tr>
            </table>
            </div>

        <p>KUACを出て横断歩道を渡ると正門があります。南校舎の階段を上り、右手に図書館があります。三田演説館前を経由し、南館３F屋外に《無》南館１Fに《学生》《若い人》があります。《デモクラシー》は西校舎地下１Fにあります。労働組合本部前を経由して、福澤公園内に《平和来》があります。図書館旧館１Fを経由し東門から出て、KeMCoでの鑑賞がお済みでない方は、東京タワーと反対方向に向かって歩いた先のKeMCoへ。詳細は、以下の写真・動画を参照してください。
            </p>
        <div class="imagelist">
            <video muted playsinline src="movie/jp/southroute.mov" controls poster="thumbnail/jp/all.jpg"></video>
        </div>
    </div>
    </div>

    <div class="content-en">
    <div class = "coursework">
        <h4>Works  you can see in this course</h4>
            <div class= "worklist">
            <table>
                <tr>
                    <td>USAMI Keiji 《Eventually They All Come into a Circle No. 1》1982</td>
                </tr>
                <tr>
                    <td>SHIBATA Kaseki 《Bust of Yukichi Fukuzawa》 1953</td>
                </tr>
                <tr>
                    <td>NOGUCHI Isamu 《Mu (Nothingness)》 1950-1951</td>
                </tr>
                <tr>
                    <td>NOGUCHI Isamu 《Wakai Hito (Young Person)》 1950</td>
                </tr>
                <tr>
                    <td>NOGUCHI Isamu 《Gakusei (Student)》 1951</td>
                </tr>
                <tr>
                    <td>INOKUMA Genichirō 《Democracy》 1949</td>
                </tr>
                <tr>
                    <td>KIKUCHI Kazuo 《Youth》 1948</td>
                </tr>
                <tr>
                    <td>ASAKURA Fumio 《Heiwa Kitaru (Coming of Peace)》 1952</td>
                </tr>
                <tr>
                    <td>KITAMURA Shikai 《The Maiden Tekona》 ca. 1909</td>
                </tr>
            </table>
            </div>

        <p>After visiting KUAC, go straight across the street  and enter the South Gate. Go up the stairs of South School Building and you will see The Keio University Library on your right. Turn back and go by the side of the Mita Enzetsu-kan, and at the South Building visit “Mu” at 3rd floor outdoor, “Gakusei” and “Wakai Hito” at 1st floor. You can find “Democracy” at the West School Building first basement floor. Pass by the West Building and “Heiwa Kitaru” stands in Fukuzawa Park. Visit The Old Library 1st floor and go through the East Gate. If you have not been to KeMCo yet, go the other way round of Tokyo Tower and visit KeMCo. For more details, check the photos and videos below.
            </p>
        <div class="imagelist">
            <video muted playsinline src="movie/en/southroute_en.MP4" controls poster="thumbnail/en/all_en.jpg"></video>
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
        <a href="outdoorroute.php">
            <div class="course_row" id="course_fab">
                <p class="course_left">屋外作品を巡る</p>
                <p class="course_right">30分<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p>
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
        <h4>Other Courses</h4>
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
