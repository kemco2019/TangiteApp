<!DOCTYPE html>
<html class="no-js" lang="jp">
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
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/howto.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/howto.js"></script>
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>


    <!-- add sakai
    changeLang.js : JN-EN変換　<div class="content-jp(en)"> ...日本語or英語で記述... </div>
　-->
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

     <!-- add sakai -->

</head>


<body id="top">
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
    <div class="content-jp">
        <div class="topimage">
            <img src="images/title.png" >
        </div>
    </div>
    <div class="content-en">
        <div class="topimage">
            <img src="images/title_en.png" >
        </div>
    </div>

    <!-- actab
    ================================================== -->
    <div class="actab">
        <div class="content-jp">
            <h4>モバイルガイドの使い方</h4>
        </div>
        <div class="content-en">
            <h4>How to use our Mobile Guide</h4>
        </div>

        <div class="content-jp">
        <div class="accordion-wrap" id="accordion">
            <div class="accordion-item">
                <p class="accordion-header"><b>サーチ </b><i class="fas fa-angle-down" aria-hidden="true"></i><br>展示作品の解説を文字・音声の両方でお楽しみいただけます。</p>
            </div>
            <div class="accordion-text">
                <p><ol class="sample1">
                    <li>画面下の <span style="color:#D98A6A">「サーチ」</span>を選択します。<img src="images/howtosearch.jpg" ></li>
                    <li>ガイド番号を２桁で入力します。</li>
                    &nbsp;
                    <li>該当作品の解説が文字・音声の両方で視聴可能です。<img src="images/howto2.png" ></li>
                </ol></p>
            </div>
        </div>

        <div class="accordion-wrap" id="accordion">
            <div class="accordion-item">
                <p class="accordion-header"><b>マップ </b><i class="fas fa-angle-down" aria-hidden="true"></i><br>展覧会会場ならびにキャンパスに点在する作品群をマップを見ながら探索いただけます。 </p>
            </div>
            <div class="accordion-text">
                <p> <ol class="sample1">
                    <li>画面下の <span style="color:#D98A6A">「マップ」</span>を選択します。<img src="images/howtomap.jpg" ></li>
                    <li>三田キャンパス構内を含む3会場から会場を選択します。</li>
                    <li>マップを参照しながら、広範囲に所在する作品群を解説とともにお楽しみください。<img src="images/howto3.png" ></li>
                </ol> </p>
            </div>
        </div>

        <div class="accordion-wrap" id="accordion">
            <div class="accordion-item">
                <p class="accordion-header"><b>スタンプラリー </b><i class="fas fa-angle-down" aria-hidden="true"></i><br>キャンパス内に点在する作品を巡る、デジタルスタンプラリーになります。</p>
            </div>
            <div class="accordion-text">
                <p><ol class="sample1">
                    <li>画面下の <span style="color:#D98A6A">「スタンプラリー」</span>を選択します。<img src="images/howtostamp.jpg" ></li>
                    <li>点在作品のガイド番号を入力すると自動的にスタンプが付与されます。<img src="images/howto1.png" ></li>
                    <li>集めたスタンプの数に応じて、特製グッズがもらえます。（東会場1Fでお渡し）</li>
                </ol> </p>
            </div>
        </div>
        </div>

        <div class="content-en">
        <div class="accordion-wrap" id="accordion">
            <div class="accordion-item">
                <p class="accordion-header"><b>SEARCH </b><i class="fas fa-angle-down" aria-hidden="true"></i><br>Enjoy the work description with letters and voice</p>
            </div>
            <div class="accordion-text">
                <p><ol class="sample1">
                    <li>Select <span style="color:#D98A6A">”SEARCH”</span> on your device<img src="images/howtosearch_en.jpg" ></li>
                    <li>Enter the two letters for the guide number.</li>
                    &nbsp; 
                    <li>You can access to the work description. Both voice and letter guides are available. <img src="images/howto2_en.png" ></li>
                </ol></p>
            </div>
        </div>

        <div class="accordion-wrap" id="accordion">
            <div class="accordion-item">
                <p class="accordion-header"><b>MAP </b><i class="fas fa-angle-down" aria-hidden="true"></i><br>Discover the works inside the venues or spread On Campus using our maps.</p>
            </div>
            <div class="accordion-text">
                <p> <ol class="sample1">
                    <li>Select <span style="color:#D98A6A">"MAP"</span> on your device<img src="images/howtomap_en.jpg" ></li>
                    <li>Select the venue of the three venues including Mita Campus.</li>
                    <li>Enjoy the works widely spread out over the campus referring to the maps.<img src="images/howto3_en.png" ></li>
                </ol> </p>
            </div>
        </div>

        <div class="accordion-wrap" id="accordion">
            <div class="accordion-item">
                <p class="accordion-header"><b>STAMP </b><i class="fas fa-angle-down" aria-hidden="true"></i><br>Join the digital Stamp Rally by touring the works spread On Campus.</p>
            </div>
            <div class="accordion-text">
                <p><ol class="sample1">
                    <li>Select <span style="color:#D98A6A">"STAMP"</span> on your device<img src="images/howtostamp_en.jpg" ></li>
                    <li>With entering the guide numbers of each works, Stamps will be provided automatically.<img src="images/howto1_en.png" ></li>
                    <li>You can get special presents depending on the amount of your collected Stamps. (@ East Venue 1st floor)</li>
                </ol> </p>
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
