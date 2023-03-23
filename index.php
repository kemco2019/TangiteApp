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
    <link rel="stylesheet" href="css/home.css">
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

     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NPDQ9CGSRF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NPDQ9CGSRF');
</script>

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

    <!-- serch
    ================================================== -->
    <div class="content-jp"> <!-- 日本語版 -->
        <div class="search">
            <form id="form4" action="works.php" method="get">
                <input id="sbox4"  id="s" name="s" type="number" placeholder="&#xf00a; ガイド番号を２桁で入力" maxlength="2">
                <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <p class="intro">会場内およびキャンパス内の作品横に提示されたガイド番号を入力すると、文字・音声で解説をお楽しみいただけます。</p>
            <a href="howto.php" class="botton">
                <div class="mobile_guide">
                    モバイルガイドの使い方
                </div>
            </a>
        </div>
    </div>
    <div class="content-en">　<!-- 英語版 -->
        <div class="search">
            <form id="form4" action="works.php" method="get">
                <input id="sbox4"  id="s" name="s" type="number" placeholder="&#xf00a; Enter Guide number" maxlength="2">
                <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <p>You can enjoy the commentary in text and voice by entering the work number presented next to the work in the venue and on campus.</p>
            <a href="howto.php" class="botton">
                <div class="mobile_guide">
                    How to use our Mobile Guide
                </div>
            </a>
        </div>
    </div>

    <!-- pickup
    ================================================== -->
    <div class="content-jp">
        <div class="pickup">
            <h4>ピックアップ作品</h4>
            <div class="horizontal-list">
                <div class="item">
                    <a href="works.php?s=1&2=4">
                        <div class = "workimage">
                            <img src="images/works/14.jpg">
                        </div>
                        <h6 style="color:#79B387">Keio Museum Commons</h6>
                        <h5>大熊氏廣、鈴木長吉《福澤諭吉還暦祝 灯台》</h5>
                        <p>福澤諭吉の還暦祝いで寄附が募られ制作された本作は、明治期における洋風彫刻の旗手である彫刻家・大熊氏廣が原型を、江戸時代からの鋳物技術を受け継ぐ金工師・鈴木長吉が鋳造を手がけ、西洋からの技法と日本の伝統技法が混ざり合う明治期ならではの表現を今に伝える作品である。灯台本体は配合の異なる2種の合金により5層の模様をもち、下部にあるしぶきまで表された荒波は銀で、精巧な岩礁は銅で造られ、大熊の得意とする躍動的表現と、鈴木の精緻な技巧をみることができる。長らく破損状態で保管されていたが「未来をひらく福澤諭吉」展（2009年、東京国立博物館ほか）に向け修復を開始。作業にあたっては、作品に附されていた材料・寸法を記した完成図および写真資料（明治期の印刷物）が重要な手がかりとなった。修復の基本方針としては展覧会出品を念頭に、主に欠失・変形していた金属部分について材料の一致を追求しない外形復元にとどめることとし、入手・加工しやすい真鍮やポリエステル樹脂を用い、附資料を参照し再現された。また駆動部は修理せず、色調も経年による金属酸化の状態のままとした。</p>
                    </a>
                </div>
                <div class="item">
                    <a href="works.php?s=1&2=7">
                        <div class = "workimage">
                            <img src="images/works/17.jpg">
                        </div>
                        <h6 style="color:#79B387">Keio Museum Commons</h6>
                        <h5>河野通勢《箱根芦ノ湖風景》</h5>
                        <p>河野通勢は油彩を用いた細密な画風を得意とし、晩年には多数の挿絵を手がけたことで知られる。岸田劉生率いる草土社に参加したことで、岸田の推薦を受けて1923年に草土社の同人である清宮彬と共に慶應義塾幼稚舎の図画科の担任教師に就任した。1927年に椿貞夫と交代する形で河野は幼稚舎から退職することになるのだが、本作はその教員生活の記念として幼稚舎に寄贈されたものである。正確な制作時期や寄贈年は不明だが、様式的特徴から昭和後期に制作されたと推測される。2005年に修復措置が行われた際は、画面に亀裂が多数発生し、樹木部分の彩色層には浮き上がりや剥落も確認された。また作品を保護する額についても、構造が脆弱であることや吊り金具や紐の強度が充分でないこと、ガラスに黴が発生していることが報告書で記述されている。以上から、修復の方針は、汚れの除去と損傷部分に対する剥落止めや充填補彩など「最小限度の対症的な処置を行う」ことと、額の新調と、額に対する作品の固定の改善、補強を行うことに決定された。</p>
                    </a>
                </div>
                <div class="item">
                    <a href="works.php?s=1&2=2">
                        <div class = "workimage">
                            <img src="images/works/12.jpg">
                        </div>
                        <h6>Keio University Art Center</h6>
                        <h5>イサム・ノグチ、谷口吉郎設計《旧ノグチ・ルーム》</h5>
                        <p>「ノグチ・ルーム」は、1951年に建築家谷口吉郎と彫刻家イサム・ノグチの協働によって三田キャンパスにつくられた、第二研究室棟１階の庭と彫刻を伴う談話室である。この建築空間は2003年の南館建設に伴い解体され、南館3階のルーフテラスへ、形を変えて一部移築された。移築後の「旧ノグチ・ルーム」は、ニューヨークのイサム・ノグチ財団および庭園美術館への《丸椅子》ほか家具類の貸出を契機として、2007年度に全面的な修復が行われた。修復時の調査により、ノグチが用いた、当時日本で一般的に使われていた素材は、現在では入手しにくいものであることが判明。可能な限りオリジナルと合う素材を探し、修復が進められた。また、ルーフテラスに移築されたことで直射日光が多く差し込むようになり、家具の劣化が進行していることが確認された。そこで、2011年度には家具専用カバーを設置し、紫外線カットフィルムを全窓面に取り付けることで保存状態が飛躍的に改善。その後は年に一度専門家による状態の点検、清掃、保護ワックスの塗布等、継続的なケアを実施している。現在は通常内部非公開としつつ、定期的に公開の機会を設け、利用者には使用上の注意点を記したガイドラインを明示。保存と活用のバランスをとりながら、建築空間の継承に取り組んでいる。</p>
                    </a>
                </div>
                <div class="item">
                    <a href="works.php?s=1&2=1">
                        <div class = "workimage">
                            <img src="images/works/11.jpg">
                        </div>
                        <h6>Keio University Art Center</h6>
                        <h5>中西夏之《男子総カタログ '63》</h5>
                        <p>青写真用感光紙を複数枚繋いだ約12ｍの本作は、ハイレッド・センター（以下、HRC）による「シェルター計画」（1964年１月26／27日、帝国ホテル旧館で実施されたイベント。招待者の身体を計測・記録し、等身大「シェルター」を販売することを目的とした）において撮影されたHRC結社員・中西夏之、赤瀬川原平、和泉達の背面写真を、のちに中西が等身大でプリントした作品。土方巽アーカイヴ（アート・センター内）に紐づくかたちで慶應義塾にもたらされた。「土方巽＋中西夏之『背面』」展（2012年、アート・センター）に際し修復が計画された。長尺についだ紙をひろげた形状の本作は、展示でかかる負荷によって紙の傷みが深刻であったが、作家関係者の名前が入った当て紙がなされるなど、制作当時から展示の度に手当てがされてきた形跡が見られた。制作時の風合いや資料的価値を残すためにも、外形的には現状維持の方針をとることにした。展覧会前には、テープ跡の除去および繋いだ長尺紙面の損傷部・接合部に対し和紙と生麩糊を用いて展示に耐えうる補修・補強を施した。また展示後には、中性紙の専用保管容器を新調し、長期的な作品保存の手立てがとられた。</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-en">
        <div class="pickup">
            <h4>FEATURED</h4>
            <div class="horizontal-list">
                <div class="item">
                    <a href="works.php?s=1&2=4">
                        <div class = "workimage">
                            <img src="images/works/14.jpg">
                        </div>
                        <h6 style="color:#79B387">Keio Museum Commons</h6>
                        <h5>OKUMA Ujihiro and SUZUKI Chokichi, Miniature Lighthouse, Gifted in Celebration of Fukuzawa Yukichi's 60th Birthday</h5>
                        <p>This miniature lighthouse was donated and produced to celebrate Yukichi Fukuzawa's 60th birthday. The sculptor Ujihiro Okuma, a leading person of Western-style sculpture in the Meiji era, made the mold for this work. Its casting was done by Chokichi Suzuki, the metalworker who inherited metal casting techniques from the Edo period. This work’s significance lies in its unique expression of the Meiji era, where Western techniques were comined with traditional Japanese ones. The body of the lighthouse has a five-layered pattern made from two different types of alloy. The rough waters in the lower part are silver, crashing against elaborate rocks of copper. These indicate Okuma's mastery of dynamic expression and Suzuki's exquisite craftsmanship.Although the work had remained damaged for a long time, its restoration started to prepare for the exhibition "Fukuzawa Yukichi: Living the Future" (2009, Tokyo National Museum and others).  Each process was carefully followed through with the help of its blueprint and photographic documentation (printed materials from the Meiji era) attached to the work. With exhibition in mind, the basic policy of the conservation was to reconstruct the appearance of the missing and deformed metal parts without seeking to match the original materials. The parts were reconstructed with reference to accompanying documents, using materials easy to obtain and work with such as brass and polyester resin. Its mechanical parts were unrepaired, their colors left in the state of metal oxidation due to aging.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="works.php?s=1&2=7">
                        <div class = "workimage">
                            <img src="images/works/17.jpg">
                        </div>
                        <h6 style="color:#79B387">Keio Museum Commons</h6>
                        <h5>KONO Michisei, Ashinoko Lake Scene, Hakone</h5>
                        <p>Mishisei Kono was known for his detailed oil painting style and for the many illustrations he produced in his later years. He was a member of the Sodosha led by Ryusei Kishida, and was appointed teachers of the art department at Keio Gijuku Yochisha elementary school along with his fellow Sodosha member Hitoshi Seimiya  in 1923 by Kishida's recommendation. In 1927, Kono was replaced by Sadao Tsubaki, and this work was donated to the Yochisha as a memorial of his teaching career.  The exact dates of production and donation are unknown, but the stylistic features suggest that it was produced in the late Showa period.When the painting was restored in 2005, it was found to have numerous cracks in the painting, and the coloured layer on the trees had fallen off. The report also stated that the frames used to protect the work were weak, that the hanging brackets and strings were not strong enough, and that the glass had mold. Due to such predicament, it was decided that the restoration would consist of "minimal symptomatic measures", such as the removal of dirt as well as the application of anti-seizure and fillers to the damaged areas, along with replacement of the frame and the improvement and reinforcement of the fixation of the work to the frame.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="works.php?s=1&2=2">
                        <div class = "workimage">
                            <img src="images/works/12.jpg">
                        </div>
                        <h6>Keio University Art Center</h6>
                        <h5>NOGUCHI Isamu and TANIGUCHI Yoshiro, The Ex-Noguchi Room [A common room in the Second Faculty Building]</h5>
                        <p>The “Noguchi Room” was a common room on the first floor of the Second Faculty Building on Mita Campus created in 1951, designed through a collaboration between the sculptor lsamu Noguchi (1904-88) and the architect Yoshiro Taniguchi (1904-79).The Second Faculty Building was dismantled for the construction of the South Building in 2003, and was partially relocated to the roof terrace on the third-floor of the South Building in a different form. The "Ex-Noguchi Room" underwent a major restoration in 2007, when the stool and other furniture were loaned to the Isamu Noguchi Foundation and the Garden Museum in New York. Research conducted during the restoration revealed that the materials used by Noguchi, which were commonly used in Japan in the 1950s, are now hard to find. So, the materials matching the original were sought. In addition, it was confirmed that the furniture was deteriorating due to direct sunlight from the relocation to the roof terrace. Therefore, furniture covers were made to protect them from sunlight. Also, UV-blocking film was affixed to the window. These countermeasures slow down deterioration, and are very effective for preserving the works.Since then, the furniture has been under continuous care, with experts inspecting its condition once a year, cleaning it, and applying protective wax. At present, the Ex-Noguchi Room is usually closed to the public, but it is periodically opened to the public and users are given guidelines on how to use it. We are striving to inherit architectural spaces while maintaining a balance between preservation and utilization.</p>
                    </a>
                </div>
                <div class="item">
                    <a href="works.php?s=1&2=1">
                        <div class = "workimage">
                            <img src="images/works/11.jpg">
                        </div>
                        <h6>Keio University Art Center</h6>
                        <h5>NAKANISHI Natsuyuki, General Catalogue of Males</h5>
                        <p>This 12-meter-long artwork made of several sheets of cyanotype paper is a life-size back photography of Hi-Red Center (hereinafter HRC) members: Natsuyuki Nakanishi, Genpei Akasegawa, and Tatsu Izumi. The photographs were taken during the "Shelter Plan" by HRC, an event which took place on 26 and 27 January 1964 in the old building of the Imperial Hotel. The aim of the event was to measure and record the bodies of guests and sell their life-size "shelters". The artwork landed at Keio University in connection to the Hijikata Tatsumi Archive (in Keio University Art Center).For the exhibition "Tatsumi Hijikata + Natsuyuki Nakanishi–– Back" (in 2012, Keio University Art Center), a restoration of the work was planned. The artwork, composed of some sheets of paper, was severely damaged by the past displays. There is a slip of paper on the back of it with the names of the artists involved, indicating that the artwork had been repaired after every exhibition. In order to preserve the original texture of the artwork and its documentary value, the appearance had been kept as is. Before the exhibition, the tape traces were removed, and the damaged parts and joints of the connected papers were restored with washi paper and shofu-nori (wheat starch paste) to withstand installation. After the exhibition, a new storage box made of acid-free paper was prepared for long-term preservation.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- top_map
    ================================================== -->
    <div class="content-jp">
        <div class="top_map">
            <img src="images/map_mita.png" >
            <p>本展覧会の会期中は、南会場（慶應義塾大学アート・センター）と東会場（慶應義塾ミュージアム・コモンズ）に加えて、キャンパス内に点在している作品群もご覧頂けます。以下の開館時間を参照のうえ、ぜひお楽しみください。</p>
        </div>
    </div>
    <div class="content-en">
        <div class="top_map">
            <img src="images/map_mita.png" >
            <p>During the exhibition period, visitors are able to see the works in the South Venue (Keio University Art Center) and the East Venue (Keio University Museum Commons), as well as the works spread around the campus. Please refer to the opening hours below.</p>
        </div>
    </div>

    <!-- info
    ================================================== -->
    <div class="content-jp">
        <div class="info">
            <h4>開館時間（11/29-12/3）</h4>
            <table>
                <tr>
                <th>アート・センター</th>
                <td>11:00 - 18:00</td>
                </tr>
                <tr>
                <th>ミュージアム・コモンズ</th>
                <td>11:00 - 18:00</td>
                </tr>
                <tr>
                <th>三田メディアセンター</th>
                <td>08:45 - 20:00</td>
                </tr>
                <tr>
                <th>慶應義塾史展示館</th>
                <td>10:00 - 18:00</td>
                </tr>
                <tr>
                    <th>西校舎　学生食堂ホール</th>
                    <td>11:00 - 15:00</td>
                </tr>
                <tr>
                    <th>旧ノグチ・ルーム</th>
                    <td>閉館</td>
                </tr>
            </table>
            <a href="schedule.php" class="botton">
                <div class="kaikan_info">
                    開館スケジュール一覧
                </div>
            </a>
        </div>
    </div>
    <div class="content-en">
        <div class="info">
            <h4>OPENING HOURS（11/29-12/3）</h4>
            <table>
                <tr>
                <th>Keio University <br>Art Center</th>
                <td>11:00—18:00</td>
                </tr>
                <tr>
                <th>Keio Museum <br>Commons</th>
                <td>11:00—18:00</td>
                </tr>
                <tr>
                <th>Keio <br>University Library</th>
                <td>08:45—20:00</td>
                </tr>
                <tr>
                <th>Fukuzawa Yukichi <br>Memorial Keio <br>History Museum</th>
                <td>10:00—18:00</td>
                </tr>
                <tr>
                    <th>Co-op Cafeteria <br>[B1F, West School <br>Building]</th>
                    <td>11:00 - 15:00</td>
                </tr>
                <tr>
                    <th>Ex-Noguchi Room</th>
                    <td>Closed</td>
                </tr>
            </table>
            <a href="schedule.php" class="botton">
                <div class="kaikan_info">
                    Opening Schedules
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
