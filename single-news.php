<?php
/*
Template Name: single-news
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/news/news-top-sp.webp 1x,<?php echo get_template_directory_uri(); ?>/images/news/news-top-sp.webp 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/news/news-top-sp.webp" srcset="<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/news/news-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">News</span>
            <div class="jpTtl">お知らせ</div>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/news/">お知らせ一覧</a>
        </li>
        <li>
            <?php echo get_the_title(); ?>
        </li>
    </ul>
</div>

<div id="singleNewsWrap">
  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
       <h1><?php the_title(); ?></h1>
        <time><?php the_date(); ?></time>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
    <div id="next-prev-navi">
        <div class="prev">
            <?php if (get_previous_post()):?>
            <?php previous_post_link('&laquo; %link', '前のお知らせへ'); ?>
            <?php endif; ?>
        </div>
        <div class="next">
            <?php if (get_next_post()):?>
            <?php next_post_link('%link &raquo;', '次のお知らせへ'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

</main>
<?php get_footer(); ?>

