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
    <link rel="stylesheet" href="css/schedule.css">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
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

    <!-- contents
    ================================================== -->
    <div class="content-jp">
    <h3>開館スケジュール一覧</h3>
    <div class="venue">
        <h4>アートセンター</h4>
        <div class="part row">
            <p>【開館時間】</p><p>11:00 ~ 18:00</p>
        </div>
        <div class="part row">
            <p>【閉館日】</p><p>土曜日・日曜日・祝日</p>
        </div>
        <div class="caution">
            11/6（土）は特別開館、11/8（月）は臨時休館<br>
        </div>
        <img src="images/schedules/art.jpg" >
    </div>

    <div class="venue">
        <h4>ミュージアム・コモンズ</h4>
        <div class="part row">
            <p>【開館時間】</p><p>11:00 ~ 18:00</p>
        </div>
        <div class="part row">
            <p>【閉館日】</p><p>土曜日・日曜日・祝日</p>
        </div>
        <div class="caution">
        11/6（土）は特別開館、11/8（月）は臨時休館<br>
        11/22（月）は一部ご覧いただけない作品がございます。
        </div>
        <img src="images/schedules/kemco.jpg" >
    </div>

    <div class="venue">
        <h4>三田メディアセンター</h4>
        <div class="part row">
            <p>【開館時間】</p><p>平日：8:45 ~ 20:00<br>土曜：8:45 ~ 18:00</p>
        </div>
        <div class="part row">
            <p>【閉館日】</p><p>日曜日・祝日</p>
        </div>
        <div class="caution">
        11/3（水）は特別開館<br>
        11/20（土） ~ 23（火）は三田祭開催のため休館
        </div>
        <img src="images/schedules/media.jpg" >
    </div>

    <div class="venue">
        <h4>慶應塾史展示館</h4>
        <div class="part row">
            <p>【開館時間】</p><p>10:00 ~ 18:00</p>
        </div>
        <div class="part row">
            <p>【閉館日】</p><p>日曜日・祝日</p>
        </div>
        <div class="caution">
        11/20（土） ~ 23（火）は三田祭開催のため休館
        </div>
        <img src="images/schedules/jyukushi.jpg" >
    </div>

    <div class="venue">
        <h4>西校舎　学生食堂ホール</h4>
        <div class="part row">
            <p>【開館時間】</p><p>11:00 ~ 15:00</p>
        </div>
        <div class="part row">
            <p>【閉館日】</p><p>土曜日・日曜日・祝日</p>
        </div>
        <img src="images/schedules/nishi.jpg" >
    </div>

    <div class="venue">
        <h4>旧ノグチ・ルーム</h4>
        <div class="part row">
            <p>【開館日・時間】</p><p>11/1（月） ~ 11/6（土）<br>
        11:00 ~ 18:00<br></p>
        </div>
        <div class="caution">
        11/3（水）は休館
        </div>
        <img src="images/works/12.jpg" >
    </div>
    </div>

    <div class="content-en">
    <h3>Open Hours (All Venues)</h3>
    <div class="venue">
        <h4>Keio University Art Center</h4>
        <div class="part row">
            <p>【Open Hours】</p><p>11:00 - 18:00</p>
        </div>
        <div class="part row">
            <p>【Closed Days】</p><p>Saturdays, Sundays & Public Holidays</p>
        </div>
        <div class="caution">
            Exceptionally Open on Sat., November 06, Temporarily Closure on Mon., November 08<br>
        </div>
        <img src="images/schedules/art.jpg" >
    </div>

    <div class="venue">
        <h4>Keio Museum Commons</h4>
        <div class="part row">
            <p>【Open Hours】</p><p>11:00 - 18:00</p>
        </div>
        <div class="part row">
            <p>【Closed Days】</p><p>Saturdays, Sundays & Public Holidays</p>
        </div>
        <div class="caution">
        Exceptionally Open on Sat., November 06, Temporarily Closure on Mon., November 08<br>
        On Mon., November 22, some of the works will not be displayed.
        </div>
        <img src="images/schedules/kemco.jpg" >
    </div>

    <div class="venue">
        <h4>Keio University Library</h4>
        <div class="part row">
            <p>【Open Hours】</p><p>Weekdays：8:45-20:00<br>Saturdays：8:45-18:00</p>
        </div>
        <div class="part row">
            <p>【Closed Days】</p><p>Sundays</p>
        </div>
        <div class="caution">
        Temporarily Closure on Wed., November 03 (Weekday)<br>
        Closure on Sat., November 20 - Tue., November 23 due to Mita-sai
        </div>
        <img src="images/schedules/media.jpg" >
    </div>

    <div class="venue">
        <h4>Fukuzawa Yukichi Memorial Keio History Museum</h4>
        <div class="part row">
            <p>【Open Hours】</p><p>10:00 - 18:00</p>
        </div>
        <div class="part row">
            <p>【Closed Days】</p><p>Sundays & Public Holidays</p>
        </div>
        <div class="caution">
        Closure on Sat., November 20 - Tue., November 23 due to Mita-sai
        </div>
        <img src="images/schedules/jyukushi.jpg" >
    </div>

    <div class="venue">
        <h4>West School Building Student Cafeteria</h4>
        <div class="part row">
            <p>【Open Hours】</p><p>11:00 - 15:00</p>
        </div>
        <div class="part row">
            <p>【Closed Days】</p><p>Saturdays & Sundays</p>
        </div>
        <img src="images/schedules/nishi.jpg" >
    </div>

    <div class="venue">
        <h4>Ex-Noguchi Room</h4>
        <div class="part row">
            <p>【Open Days & Hour】</p><p>Mon., November 01 - Sat., November 06　11：00～18：00</p>
        </div>
        <div class="caution">
        Temporarily Closure on Wed., November 03
        </div>
        <img src="images/works/12.jpg" >
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
