<?php
/*
Template Name: index
*/
?>
<?php get_header(); ?>
<main>

<section id="main-visual" class="mainvisual">
<div class="loading"><img src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" width="300" height="85" alt=""></div>
<div class="mask-container">
    <svg id="mask" class="mask" viewBox="0 0 620.9 535.4">
        <defs>
            <mask id="svgPath">
                <path class="st0" d="M316.5,38.7c10.4-14.9,29.3-30.5,49.8-36c72.9-19.8,171.2,72.2,223.5,218.2c52.3,146,37.1,285-34,310.5
	c-71.1,25.5-171.2-72.2-223.5-218.2L316,270.9c0,0,29.4-84.1,44.7-126.3c10.9,25,25,58.4,42.9,103.2
	C447.9,358.6,475.1,413,511.4,405c21.6-4.8,28.2-84.6-14.1-189.4C455,110.8,404.5,83.3,385.4,91.6c-16.1,7.1-23.6,18.6-25.6,24.6
	c-25.9,59.9-71.2,196.9-71.2,196.9c-52.3,146-152.4,243.7-223.5,218.2c-71.1-25.5-86.4-164.5-34-310.5S181.7-17.1,254.6,2.7
	c20.5,5.6,36.2,18.5,47.3,37.1c0,0-25.7,38.1-40.9,76.5c-2-6-9.5-17.6-25.6-24.6c-19-8.3-69.5,19.1-111.8,123.9
	C81.3,320.3,88,400.2,109.5,405c36.3,8.1,63.5-46.3,107.8-157.2C261.7,137,281.7,95.6,290.9,79.5C307.8,49.7,316.5,38.7,316.5,38.7z
	"  fill="#fff"></path>
            </mask>
        </defs>
        <image href="<?php echo get_template_directory_uri(); ?>/images/front-page/mask-bg.jpg" width="1440" height="auto" mask="url(#svgPath)" x="-50%" y="-10%" style="opacity: 1; transform: scale(1) translate(0%,-0%);" ></image>
    </svg>
</div>

    <picture class="">
			<source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/slider01-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/slider01-sp.jpg 2x">
			<img class="main-bg" src="<?php echo get_template_directory_uri(); ?>/images/front-page/slider01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/slider01.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/slider01.jpg 2x" alt="" width="750" height="1000">
	</picture>
<div id="main-text-area">
    <p class="main-en">For Material Bridge</p>
    <h2 class="main-ja">社会と鉄をつなぐ、架け橋でありたい。</h2>
    <div class="main-text-link"><a href=""><span>About us</span></a></div>
</div>
</section>

<section id="news-area">
    <div class="news-area-inner">
    <h2 class="news-title">News</h2>
    <ul id="news-list">
        <li class="news-list"><time>2023/02/02</time><h3><a href="#">新組織体制について。</a></h3></li>
        <li class="news-list"><time>2023/01/16</time><h3><a href="#">●●●装置が稼働しました。</a></h3></li>
        <li class="news-list"><time>2022/12/20</time><h3><a href="#">ウェブサイトリニューアルしました。</a></h3></li>
    </ul>
    </div>
</section>
<section id="movie-area">
<div class="movie-text-area">
    <div class="movie-text-area-top">
        <h2 class="movie-title">社会と鉄をつなげるために。</h2>
        <h3 class="movie-sub-title">マテックス会社紹介ムービー</h3>
    </div>
    <div class="movie-text-area-bottom">
        <p class="movie-text-en">The Coil Center</p>
    </div>
    <img class="movie-logo" src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" alt="matex">
    <a class="movie-button">
    <img class="movie-play" src="<?php echo get_template_directory_uri(); ?>/common/images/movie-play.svg" alt="matex">
    </a>
</div>
<div class="movie-image-area">
    <div class="movie-image-inner">
        <img class="movie-image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/movie-bg01.jpg" alt="">
    </div>
    <div class="movie-image-inner">
        <img class="movie-image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/movie-bg02.jpg" alt="">
    </div>
    <div class="movie-image-inner">
        <img class="movie-image" src="<?php echo get_template_directory_uri(); ?>/images/front-page/movie-bg03.jpg" alt="">
    </div>
</div>
</section>
<section id="contents-area">
    <div id="business">
        <div class="business-image-area">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/business-image.png" alt="">
        </div>
        <div class="business-text-area">
        <h2 class="business-title">Business</h2>
        <p class="business-text">マテックスは、<br class="tab"><br class="pc">
           設備・技術・流通サービスの<br>
           いずれにおいても<br class="tab"><br class="pc">
           トップレベルのコイルセンターとして<br>
           社会と鉄鋼製品をきめ細やかなコントロールで<br>
           つなぎ続けています。</p>
        <a href="#"><span>more</span></a>
        </div>
    </div>
    <div id="recruit">
        <div class="recruit-image-area">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/recruit-image.png" alt="">
        </div>
        <div class="recruit-text-area">
        <h2 class="recruit-title">Recruit</h2>
        <p class="recruit-text">時に重厚長大に、時に繊細でしなやかに。<br>
           時代やニーズに合わせて<br class="tab"><br class="pc">
           変幻自在に形状や性質を変え、<br>
           社会に貢献し続けてきた鉄鋼製品のように。<br>
           変化を恐れず、既成概念にとらわれず、<br>
           常に新しいことに挑戦し続けられる<br class="tab"><br class="pc">
           人材を募集しています。</p>
        <a href="#"><span>more</span></a>
        </div>
    </div>
</section>
<section id="link-area">
    <div class="link-image-area">
     <img class="link-bg" src="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg.jpg" alt="">
    </div>
    <div class="link-area">
        <ul>
            <li>
                <picture class="">
                        <source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-01-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-01-sp.jpg 2x">
                        <img class="link-li-bg" src="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-01.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-01.jpg 2x" alt="" width="750" height="1000">
                </picture>
                <a href="#">
                <h3>Network</h3>
                <p>全国カバー、超・拠点主義。</p>
                <h4>販売/納品体制</h4>
                </a>
            </li>
            <li>
                <picture class="">
                        <source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-02-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-02-sp.jpg 2x">
                        <img class="link-li-bg" src="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-02.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-02.jpg 2x" alt="" width="750" height="1000">
                </picture>
                <a href="#">
                <h3>Production</h3>
                <p>コイル加工技術、極まる。</p>
                <h4>生産体制</h4>
                </a>
            </li>
            <li>
                <picture class="">
                        <source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-03-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-03-sp.jpg 2x">
                        <img class="link-li-bg" src="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-03.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-03.jpg 2x" alt="" width="750" height="1000">
                </picture>
                <a href="#">
                <h3>Support</h3>
                <p>鉄鋼のスペシャリストとして。</p>
                <h4>技術サポート体制</h4>
                </a>
            </li>
            <li>
                <picture class="">
                        <source media="(max-width: 959px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-04-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-04-sp.jpg 2x">
                        <img class="link-li-bg" src="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-04.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-04.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/front-page/link-bg-04.jpg 2x" alt="" width="750" height="1000">
                </picture>
                <a href="#">
                <h3>Quality/<br class="pc">Environmental</h3>
                <p>質を高め、環境負荷を低減。</p>
                <h4>品質・環境への取り組み</h4>
                </a>
            </li>
        </ul>
    </div>
</section>
</main>
<?php get_footer(); ?>