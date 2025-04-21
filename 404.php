<?php
/*
Template Name:404
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/404/404-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/404/404-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/404/404-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/404/404-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/404/404-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/404/404-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/404/404-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Not Found</span>
            <h1 class="jpTtl">ページが見つかりません。</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>ページが見つかりません。</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
    <div class="leadTtlWrap animate-bottom" data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s ease-in-out 0s, opacity 1.5s ease-in-out 0s; transition: transform 1.5s ease-in-out 0s, opacity 1.5s ease-in-out 0s; ">
        <span class="enTtl">Not Found</span>
        <h2 class="jpTtl">ページが見つかりません。</h2>
    </div>
    <p class="text-lead">ご指定のURLは、<br class="sp">このサーバーでは見つかりませんでした。<br>
      該当のURLが変更になったか、<br class="sp">あるいはタイプミスの可能性があります。<br>
      URLをご確認の上、もう一度お試しください。<br>
    なお、このページは自動的にジャンプします。</p>
    <a class="text-toplink" href="/">※自動的にジャンプしない場合は<br class="sp">こちらをクリックしてください。</a>
</section>
</main>
<?php get_footer(); ?>