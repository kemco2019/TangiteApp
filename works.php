<?php
    $num2 = $_GET['2'];
    $number = (string)$_GET['s'].(string)$num2;
if ($number == "11"){
    $work_num = 1;
} else if ($number == "12"){
    $work_num = 2;
} else if ($number == "13"){
    $work_num = 3;
} else if ($number == "14"){
    $work_num = 4;
} else if ($number == "15"){
    $work_num = 5;
} else if ($number == "16"){
    $work_num = 6;
} else if ($number == "17"){
    $work_num = 7;
} else if ($number == "18"){
    $work_num = 8;
} else if ($number == "19"){
    $work_num = 9;
} else if ($number == "20"){
    $work_num = 10;
} else if ($number == "39"){
    setcookie('page1','true',time()+60*60*24*50);
    $work_num = 11;
} else if ($number == "51"){
    setcookie('page2','true',time()+60*60*24*50);
    $work_num = 12;
} else if ($number == "48"){
    setcookie('page3','true',time()+60*60*24*50);
    $work_num = 13;
} else if ($number == "99"){
    setcookie('page4','true',time()+60*60*24*50);
    $work_num = 14;
} else if ($number == "75"){
    setcookie('page5','true',time()+60*60*24*50);
    $work_num = 15;
} else if ($number == "84"){
    setcookie('page6','true',time()+60*60*24*50);
    $work_num = 16;
} else if ($number == "66"){
    setcookie('page7','true',time()+60*60*24*50);
    $work_num = 17;
} else if ($number == "78"){
    setcookie('page8','true',time()+60*60*24*50);
    $work_num = 18;
} else if ($number == "32"){
    setcookie('page9','true',time()+60*60*24*50);
    $work_num = 19;
} else {
    $alert = "<script type='text/javascript'>alert('番号が違います');　location.href='search.php';</script>";
    echo $alert;
}



$lines = file('data.csv');
$line = $lines[$work_num];
$data = explode(',', $line);

$lines_en = file('data_en.csv');
$line_en = $lines_en[$work_num];
$data_en = explode(',', $line_en);
$data_en = str_replace('，',",",$data_en);
?>
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
    <link rel="stylesheet" href="css/works.css">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/remix.css">


    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <script src="js/changeLang.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/audio.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/jquery.layerBoard.js"></script>
    <script>
        $(function(){
            $('#layer_board_area').layerBoard({alpha:0});

        })
    </script>

</head>


<body id="search">
<?php if ($number>20): ?>
<div id="layer_board_area">
	<div class="layer_board_bg"></div>
	<div class="layer_board">
        <p>スタンプが押されました</p>
		<!--<p class="btn_close"><a href="#"><img src="images/bnt_close.png" alt="close" width="63" height="12" /></a></p>-->
	</div>
</div>
<?php else: ?>
<?php endif;?>
<div id="wrapper">
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
    <!--<div class="topimage">
        <img src="images/title.png" >
    </div> --><!-- end s-header -->

    <!-- about
    ================================================== -->

    <section id="about" class="s-about target-section large-3 medium-12">
        <div class="content-jp">
        <div class="section-head">
            <div class="column basic_info row">
                <table id="midashi">
                    <tr>
                        <td rowspan="3" class="midashinum"><?php echo $data[0]; ?></td>
                        <td><?php echo $data[1]; ?></td>
                    </tr>
                    <tr>
                        <td class="midashiname"><?php echo $data[2]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $data[3]; ?></td>
                    </tr>
                </table>
            </div>

            <div class="column team-member">
                <img src=<?php echo $data[5]; ?> alt="">
            </div>

            <div class="column align-x-right">
                <p class="lead">
                <div class="bar">
                    <p><time id="playback_position_jp">0:00</time><input type="range" class="input-range" id="progress_jp" value="0" min="0" step="1"><time id="end_position_jp">0:00</time></p>
                </div>
                <!-- 音声ファイル -->
                <audio id="audio_jp" preload>
                    <source src=<?php echo $data[6]; ?> type="audio/mp3">
                </audio>
                <!-- 再生ボタン -->
                <div class="play">
                    <button id="btn-play_jp" type="button"><i class="fas fa-play"></i></button>
                </div>

                </p>
            </div>
        </div> <!-- end section-head -->
        </div>

        <div class="content-en">
        <div class="section-head">
            <div class="column basic_info row">
                <table id="midashi">
                    <tr>
                        <td rowspan="3" class="midashinum"><?php echo $data_en[0]; ?></td>
                        <td><?php echo $data_en[1]; ?></td>
                    </tr>
                    <tr>
                        <td class="midashiname"><?php echo $data_en[2]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $data_en[3]; ?></td>
                    </tr>
                </table>
            </div>

            <div class="column team-member">
                <img src=<?php echo $data_en[5]; ?> alt="">
            </div>

            <div class="column align-x-right">
                <p class="lead">
                <div class="bar">
                    <p><time id="playback_position_en">0:00</time><input type="range" class="input-range" id="progress_en" value="0" min="0" step="1"><time id="end_position_en">0:00</time></p>
                </div>
                <!-- 音声ファイル -->
                <audio id="audio_en" preload>
                    <source src=<?php echo $data_en[6]; ?> type="audio/mp3">
                </audio>
                <!-- 再生ボタン -->
                <div class="play">
                    <button id="btn-play_en" type="button"><i class="fas fa-play"></i></button>
                </div>

                </p>
            </div>
        </div> <!-- end section-head -->
        </div>
    </section> <!-- end s-about -->




    <!-- blog
    ================================================== -->
    <div class="content-jp">
    <section id="blog" class="s-blog target-section s-dark">

        <div class="row section-head">
            <div class="column large-3 medium-12">
                <h2>学芸員の作品解説</h2>
                <p class="desc"><?php echo $data[4]; ?></p>
                <a href="<?php echo $data[7]; ?>">
                <button class="koh" type="button">
                    Keio Object Hubで詳しく見る
                 </button>
                </a>
            </div>
        </div> <!-- end section-head -->
    </section> <!-- end s-blog -->
    </div>

    <div class="content-en">
    <section id="blog" class="s-blog target-section s-dark">

        <div class="row section-head">
            <div class="column large-3 medium-12">
                <h2>Commentary by Curator</h2>
                <p class="desc"><?php echo $data_en[4]; ?></p>
                <a href="<?php echo $data_en[7]; ?>">
                <button class="koh2" type="button">
                    Learn more at Keio Object Hub
                 </button>
                </a>
            </div>
        </div> <!-- end section-head -->
    </section> <!-- end s-blog -->
    </div>

    <!-- side angle
    ================================================== -->
    <div class="content-jp">
    <div class="sideangle">
        <?php if ($number==11 || $number==14): ?>
            <div class="leftangle" id="left"></div>
            <div class="rightangle" id="right"><form class="right_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number+1; ?>"><input type="submit" class="icon" value="&#xf105;"><p>次の作品</p></div></form>
        <?php elseif ($number<13 && $number>11 || $number<20 && $number>14) : ?>
            <div class="leftangle" id="left"><form class="left_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number-1; ?>"><input type="submit" class="icon" value="&#xf104;"><p>前の作品</p></div></form>
            <div class="rightangle" id="right"><form class="right_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number+1; ?>"><input type="submit" class="icon" value="&#xf105;"><p>次の作品</p></div></form>
        <?php elseif ($number==13 || $number==20): ?>
            <div class="leftangle" id="left"><form class="left_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number-1; ?>"><input type="submit" class="icon" value="&#xf104;"><p>前の作品</p></div></form>
            <div class="rightangle" id="right"></div>

    <?php else: ?>
    <?php endif;?>
    </div>
    </div>

    <div class="content-en">
    <div class="sideangle">
        <?php if ($number==11 || $number==14): ?>
            <div class="leftangle" id="left"></div>
            <div class="rightangle" id="right"><form class="right_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number+1; ?>"><input type="submit" class="icon" value="&#xf105;"><p>Next</p></div></form>
        <?php elseif ($number<13 && $number>11 || $number<20 && $number>14) : ?>
            <div class="leftangle" id="left"><form class="left_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number-1; ?>"><input type="submit" class="icon" value="&#xf104;"><p>Previous</p></div></form>
            <div class="rightangle" id="right"><form class="right_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number+1; ?>"><input type="submit" class="icon" value="&#xf105;"><p>Next</p></div></form>
        <?php elseif ($number==13 || $number==20): ?>
            <div class="leftangle" id="left"><form class="left_form" action="works.php" method="get"><input type="hidden" name="s" value="<?php echo $number-1; ?>"><input type="submit" class="icon" value="&#xf104;"><p>Previous</p></div></form>
            <div class="rightangle" id="right"></div>
    </div>
    <?php else: ?>
    <?php endif;?>
    </div>

</div>

<!-- footer
================================================== -->
<?php include "footer.php"?>



    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    </div>
</body>

</html>
