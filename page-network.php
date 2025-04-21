<?php
/*
Template Name: network
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/network/network-top-sp.webp 1x,<?php echo get_template_directory_uri(); ?>/images/business/network/network-top-sp.webp 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/network/network-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/business/network/network-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/network/network-top-sp.webp" srcset="<?php echo get_template_directory_uri(); ?>/images/business/network/network-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/business/network/network-top-pc.webp 2x" alt="トップ背景画像">
            </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Network</span>
            <h1 class="jpTtl">販売/納品体制</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/business/">事業情報</a>
        </li>
        <li>
            <span>販売/納品体制</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">“拠点主義”体制から<br class="sp">ジャストインタイムでデリバリー</h2>
        </div>
</section>
<section id="networkInner">
    <div class="textMap">
    <div class="textWrap">
        <ul>
            <li>
                <h3 class="animate-bottom">販売体制</h3>
                <p class="animate-bottom">鉄鋼メーカーから供給される一次製品を、お客様のニーズに合わせて加工、納品するのが私たちコイルセンターの役割です。
                    マテックスは、北関東から東北にかけて、生産と販売サービスを一体化した拠点をバランスよく展開。東京本社と各拠点が緻密に連携し、最適な在庫管理、納期管理を実現しています。お客様の身近にあって、その声をじかに聞き、最短の反応でニーズにお応えする。この「拠点主義」こそマテックスの一貫したポリシーです。私たちはこれからもお客様と親密で永続的な信頼関係を守るために最善を尽くします。</p>
            </li>
            <li>
                <h3 class="animate-bottom">納品体制</h3>
                <p class="animate-bottom">ジャストインタイムの納品体制を支えているのは、マテックス専属の輸送会社、カンテツ運輸株式会社による強力な配送システムです。カンテツ運輸はもともとマテックスの輸送部門が分離独立したもので、24トントレーラーや大型トラックを多数保有し、万全な配送システムを構築しています。コイル輸送専門に長い経験をつんだ運行スタッフがマテックスの4拠点それぞれに常駐し、さまざまな状況に臨機応変に対応しながら、第二の営業マンとして誠実にお客様の元へお届けしています。</p>
            </li>
        </ul>
        <div class="mapImg animate-fade">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/network/networkImg01.svg" alt="地図画像">
        </div>
    </div>
    </div> 
    <div class="imgWrap">
        <div class="position animate-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/network/networkImg02.svg" alt="体制仕組み図画像">
        </div>
        <div class="stateImgWrap">
        <div class="stateImgWrap1">
            <div class="img1 animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/network/networkImg03.webp" alt="様子画像">
            </div>
            <div class="img2 animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/network/networkImg04.webp" alt="様子画像">
            </div>
        </div>
        <div class="stateImgWrap2">
            <div class="img3 animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/network/networkImg05.webp" alt="様子画像">
            </div>
            <div class="img4 animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/network/networkImg06.webp" alt="様子画像">
            </div>
        </div>
        </div>
        </div>
</section>

</main>
<?php get_footer(); ?>








