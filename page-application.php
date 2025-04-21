<?php
/*
Template Name:application
*/
?>
<?php get_header(); ?>

<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/application/application-top-sp.webp 1x,<?php echo get_template_directory_uri(); ?>/images/application/application-top-sp.webp 2x">
                <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/application/application-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/application/application-top-pc.webp 2x">
                <img src="<?php echo get_template_directory_uri(); ?>/images/application/application-top-sp.webp" srcset="<?php echo get_template_directory_uri(); ?>/images/application/application-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/application/application-top-pc.webp 2x" alt="トップ背景画像">
            </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Apply for an interview</span>
            <h1 class="jpTtl">面接のお申し込み</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="<?php echo esc_url( home_url( '/recruit/') ); ?>">採用情報</a>
        </li>
        <li>
            <span>面接のお申し込み</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">面接のお申し込み</h2>
        </div>
    </section>

    <section id="application_form_wrap">
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        <?php endif; ?> 
    </section>
      
    </main>
<?php get_footer(); ?>

