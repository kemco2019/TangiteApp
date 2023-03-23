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
    <!-- south map
    ================================================== -->
    <div class="room">
        
        <div class="content-jp">
        <h5>南会場</h5>
        </div>
        <div class="content-en">
        <h5>South Venue</h5>
        </div>
        <img src="images/map_south.png">
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

    <!-- side angle
    ================================================== -->
    <div class="content-jp">
    <div class="sideangle">
        <div class="leftangle" id="left"><a href="select_course.php"><i class="fas fa-angle-left fa-3x"></i><p>キャンパス</p></div></a>
        <div class="rightangle" id="right"><a href="east.php"><i class="fas fa-angle-right fa-3x"></i><p>東会場</p></div></a>
    </div>
    </div>

    <div class="content-en">
    <div class="sideangle">
        <div class="leftangle" id="left"><a href="select_course.php"><i class="fas fa-angle-left fa-3x"></i><p>On Campus</p></div></a>
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