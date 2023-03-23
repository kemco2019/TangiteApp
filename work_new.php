<?php
$lines = file('data.csv');
?>

<!DOCTYPE html>
<head>
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
    <script src="js/audio1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/jquery.layerBoard.js"></script>
    <script>
        $(function(){
            $('#layer_board_area').layerBoard({alpha:0});
        })
    </script>
</head>


<body>	
<!-- MAIN CONTENTS -->
	
	<!--WORKS01-->
	<section id="works">
		<div class="commonContent">
			<h3 class="lower"><span class="ja">作品紹介</span></h3>
		</div><!--end .commonContent-->
		<navigation class="local_nav wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
			<div class="inner">
				<a href="#chapter01Link"><img src="img/icon_chapter01_w.svg" alt="I.">Chapter1</a>
				<a href="#chapter02Link"><img src="img/icon_chapter02_w.svg" alt="II.">Chapter2</a>
				<a href="#chapter03Link"><img src="img/icon_chapter03_w.svg" alt="III.">Chapter3</a>
				<a href="#chapter03Link"><img src="img/icon_chapter03_w.svg" alt="III.">Chapter4</a>
				<a href="#chapter03Link"><img src="img/icon_chapter03_w.svg" alt="III.">Chapter5</a>
			</div>
		</navigation>
	</section>
	<!--end WORKS-->
	
	<a id="chapter01Link" class="anchorLink"></a>
	<section id="works01">
		<div class="titleBox">
			<p class="ja">Chapter1</p>
		</div>
		<div class="txtBox">イタリアのフィレンツェで15世紀初頭に花開き、16世紀にかけてヨーロッパ各地で隆盛したルネサンス文化は、神と信仰を中心とした中世の世界観に対して、それに先立つ古代ギリシア・ローマの人間中心の文化を理想とみなし、その「再生（ルネサンス）」を目指したものです。<br>
			中世の絵画では、キリストや聖母は平面的に超然とした姿で描かれ、神性が強調されていましたが、ルネサンスの絵画では、古代美術を手本として立体的に人間らしく描写され、 人物を取り巻く空間も、遠近法を用いて奥行きが表現されるようになりました。人間味あふれる古代の神々の物語を描いた神話画が、宗教画と並んで絵画の主要ジャンルになったことも、ルネサンス期の特徴です。また、ドイツやネーデルラントなど北ヨーロッパでは、 16世紀に宗教改革による聖像礼拝の否定を受けて、宗教画の需要は減り、神話画や肖像画が隆盛しました。<br>
			このセクションでは、イタリアと北方のルネサンスを代表する画家たちの名画17点をご覧いただきます。
		</div>

		<details>
			<summary>Chapter1の詳細</summary>
			<section id="about" class="s-about target-section large-3 medium-12">
				<?php
            	$a = count($lines);
            	for($i=1; $i < count($lines); $i++){ 
            		$line = $lines[$i];
					$data = explode(',', $line);
				?>
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
			                    <p><time id="playback_position_jp<?php echo $i; ?>">0:00</time><input type="range" class="input-range" id="progress_jp<?php echo $i; ?>" value="0" min="0" step="1"><time id="end_position_jp<?php echo $i; ?>">0:00</time></p>
			                </div>
			                <!-- 音声ファイル -->
			                <audio id="audio_jp<?php echo $i; ?>" preload>
			                    <source src=<?php echo $data[6]; ?> type="audio/mp3">
			                </audio>
			                <!-- 再生ボタン -->
			                <div class="play">
			                    <button id="btn-play_jp<?php echo $i; ?>" type="button"><i class="fas fa-play"></i></button>
			                </div>

			                </p>
			            </div>
			        </div> <!-- end section-head -->
		        </div>
		        <?php } ?>
			</section><!--end #works01-->
		</details>

	    <!-- Java Script -->
	    <script src="js/plugins.js"></script>
	    <script src="js/main.js"></script>

</body>
</html>