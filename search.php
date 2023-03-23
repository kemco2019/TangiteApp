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
    <link rel="stylesheet" href="css/search.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    

    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/search.js"></script>

    
</head>


<body id="search">
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- header
    ================================================== -->
    <?php include "header.php"?>


<div class="main_body">
    

    <!-- contact
    ================================================== -->
    <div class="content-jp"> <!-- 日本語版 -->
        <div class="search">
            <form id="form4" action="works.php" method="get">
                <input id="sbox4"  id="s" name="s" type="number" placeholder="&#xf00a; ガイド番号を２桁で入力" maxlength="2">
                <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="content-en">　<!-- 英語版 -->
        <div class="search">
            <form id="form4" action="works.php" method="get">
                <input id="sbox4"  id="s" name="s" type="number" placeholder="&#xf00a; Enter Guide number" maxlength="2">
                <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="animegif">
        <img src="images/howto.gif">
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