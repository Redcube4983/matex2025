<?php
/*
Template Name: company
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Company</span>
            <h1 class="jpTtl">会社を知る</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/recruit/">採用情報</a>
        </li>
        <li>
            <span>会社を知る</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">社会と鉄の未来をひらく、<br class="sp">鋼材流通のパイオニア</h2>
        </div>
        <p class="textCenter animate-bottom">私たちの身の回りには「鉄」が溢れています。あなたの身の回りも見渡してみてください。<br>朝起きて顔を洗う時にひねる蛇口も・・・パンを焼くトースターも・・・卵をゆでるお鍋も・・・牛乳を冷やす冷蔵庫も・・・。これら「鉄」を使った製品は、空気と同様に私たちの生活に切り離すことのできないものです。暮らしの中のあらゆるシーンに「鉄」をお届けする鋼材流通のパイオニア、それが私たちマテックスです。</p>
</section>
<section id="companyWrap">
    <div class="textWrap">
        <h3 class="animate-bottom">鉄は無限の可能性を秘めた、古くて新しいマテリアル</h3>
        <p class="animate-bottom">「鉄」は古来から日本刀に使われ、その実用性、加工性、芸術性の高さから海外でも高く評価されました。戦後は「産業のコメ」と呼ばれ、あらゆる分野の基礎素材として復興を助け、高度経済成長期には高速道路、高層ビルなどに使用され経済発展に大きく寄与しました。鉄は、加工性がよく、丈夫で経済的であり、また、鉄スクラップは不純物をとり除くことでリサイクルされ、再び別の製品に生まれ変われる環境に優しい素材です。「鉄」は、今もなお研究開発され、次世代の暮らしに欠かせない無限の可能性を秘めたマテリアル(素材)です。</p>
    </div>
    <div class="imgWrap">
        <div class="companyImg">
            <div class="companyImg-inner animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/companyImg01.jpg" alt="イメージ画像">
            </div>
            <div class="companyImg-inner animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/companyImg02.jpg" alt="イメージ画像">
            </div>
            <div class="companyImg-inner animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/companyImg03.jpg" alt="イメージ画像">
            </div>
            <div class="companyImg-inner animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/companyImg04.jpg" alt="イメージ画像">
            </div>
            <div class="companyImg-inner animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/companyImg05.jpg" alt="イメージ画像">
            </div>
            <div class="companyImg-inner animate-bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/companyImg06.jpg" alt="イメージ画像">
            </div>
        </div>
    </div>
    <div class="textWrap2">
        <h3 class="animate-bottom">マテックスは社会と鉄の架け橋として<br class="sp">大きな役割を担っています</h3>
        <p class="animate-bottom">鉄鋼メーカーや製品メーカーだけでは、私たちの暮らしや産業は成り立ちません。鉄鋼メーカーとユーザー(製品メーカー、部品メーカー)の中間に立ち、鉄鋼メーカーが製造する母材を(商社などを経由して)仕入れ、ユーザーの仕様デマンドにあわせて加工するコイルセンターの存在が不可欠です。マテックスは、関東・東北を中心に展開するコイルセンターとして、高度なコイル加工技術と新鋭機器を駆使し、厳しい品質管理体制のもとに高品質・高精度の鋼材をユーザーにお届けしています。社会と鉄の架け橋としてーマテックスは鉄鋼流通の要となる重要な役割を担っているのです。</p>
        <div class="image animate-bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/companyImg07.svg" alt="">
        </div>
    </div>
    
</section>

</main>
<?php get_footer(); ?>

