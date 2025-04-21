<?php
/*
Template Name: support
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-sp.webp 1x,<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-sp.webp 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-sp.webp" srcset="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">support</span>
            <h1 class="jpTtl">技術サポート体制</h1>
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
            <span>技術サポート体制</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">Faithful Partnerをモットーに<br class="sp">独自のサービスを提供</h2
        </div>
        <div class="supportlogoWrap">
        <div class="logoWrap animate-fade">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/supportImg01.svg" alt="サポート体制ロゴ画像">
        </div>
        <p class="animate-bottom">マテックスのモットーにFaithful Partner (フェイスフル パートナー※) があります。<br>社員やその家族、取引先やユーザーなどマテックスを取り巻く全ての人が仲間であると考え、「信頼し、信頼され、いかなる時も誠実に」をモットーとしています。<br>マテックスはこれからも「Faithful Partner」をモットーに鉄鋼業の裾野を支え、持続可能なより良い社会へ貢献してまいります。<br><br><span>※Faithful：信頼できる、誠実な／Partner：相手、仲間、共同者</span></p>
        </div>
</section>
<section id="supportWrap">
     <h3 class="animate-bottom">お客様のお役に立てるよう活動しています。</h3>
    <div class="innerWrap">
        <div class="img animate-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/supportImg02.webp" alt="技術サポート体制画像">
        </div>
        <div class="textWrap">
            <h4 class="animate-bottom">技術顧問によるソリューション提案</h4>
            <p class="animate-bottom">鉄のことを知り尽くしたマテックスの技術顧問がお客様のもとへお伺いし、不良品発生のお悩みや加工技術の問題点などについて丁寧にヒアリングし、改善策、解決策をご提案します。</p>
        </div>
    </div>
    <div class="innerWrap">
        <div class="img animate-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/supportImg03.webp" alt="技術サポート体制画像">
        </div>
        <div class="textWrap">
            <h4 class="animate-bottom">プレス板金講習会</h4>
            <p class="animate-bottom">1998年から栃木・福島・群馬・埼玉の4会場で毎年数百名のお客様が参加しています。鉄鋼メーカーで薄鋼板の成形・利用技術に関する研究に幅広く携わってきた技術顧問が、鉄鋼薄板製品、塑性力学、塑性加工、新工法・新技術などの分野で、基礎技術から応用技術まで、広範囲にわたった講演を行っています。<br>また、この講習会では鉄鋼事情の最新情報を発信するとともに、普段なかなか機会が無い鉄鋼メーカーとお客様が顔を会わせることのできる場として鉄鋼業界の活性化の役割も果たしています。</p>
        </div>
    </div>
</section>
<!--
<section id="cta-area" class="animate-bottom">
    <div class="button"><a href=""><span>プレス技術講習会の<br class="sp">資料はこちら</span></a></div>
</section>
-->

</main>
<?php get_footer(); ?>

