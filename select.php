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


    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

</head>


<body id="select">
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- header
    ================================================== -->
    <?php include "header.php"?>

<div class="main_body">

    <!-- select bottun
    ================================================== -->
    <div class="content-jp">
    <div class="select_bottun">
        <h5>会場を選択してください</h5>
        <div class="flexbox">
            <div class="dist">
                <a href="south.php"><img src="images/select1.jpg" alt="">
                <div class="onimage" id="fab"><p>南会場 <i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p></div>
                </a>
                <p>慶應義塾大学アート・センター（KUAC）</p>
            </div>

            <div class="dist">
                <a href="east.php"><img src="images/select2.jpg" alt="">
                    <div class="onimage" id="fab"><p>東会場 <i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p></div>
                </a>
                <p>慶應義塾ミュージアム・コモンズ（KeMCo）</p>
            </div>
            <div class="dist">
                <a href="select_course.php"><img src="images/select3.jpg" alt="">
                    <div class="onimage" id="fab"><p>キャンパス<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p></div>
                </a>
                <p>三田キャンパス構内</p>
            </div>
        </div>
    </div>
    </div>

    <div class="content-en">
    <div class="select_bottun">
        <h5>Select the Venue</h5>
        <div class="flexbox">
            <div class="dist">
                <a href="south.php"><img src="images/select1.jpg" alt="">
                <div class="onimage" id="fab"><p>South Venue<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p></div>
                </a>
                <p>Keio University Art Center (KUAC)</p>
            </div>

            <div class="dist">
                <a href="east.php"><img src="images/select2.jpg" alt="">
                    <div class="onimage" id="fab"><p>East Venue<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p></div>
                </a>
                <p>Keio Museum Commons (KeMCo)</p>
            </div>
            <div class="dist">
                <a href="select_course.php"><img src="images/select3.jpg" alt="">
                    <div class="onimage" id="fab"><p>On Campus<i style = "color:white;"class="fas fa-arrow-right fa-lg fa-fw"></i></p></div>
                </a>
                <p>Mita Campus</p>
            </div>
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
