<?php
/*
Template Name: aboutiron
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-top.webp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-top.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-top.webp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-top.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">About Iron</span>
            <h1 class="jpTtl">鉄の魅力について</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>鉄の魅力について</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">鉄の魅力を、様々な角度からご紹介します</h2>
        </div>
    </section>
    <div class="aboutIron-innerWrap">
        <div class="aboutIron-movieArea" class="animate-bottom">
            <div class="aboutIron-movieArea-inner">
                <a class="movie-button popup-movie" href="https://www.youtube.com/watch?v=dsirkSjpys8">
                    <span></span>
                </a>
            </div>
            <div class="movie-image-area">
                <div class="movie-image-inner">
                    <img class="movie-image" src="<?php echo get_template_directory_uri(); ?>/images/aboutIron/aboutIron-movie.webp" alt="">
                </div>
            </div>
        </div>
        <div class="aboutIron-textArea">
            <p>２１世紀もすでに四半世紀が過ぎ、物事はすっかり様変わりいたしました。最大の変化は、コンピュータの急速な普及と日常生活への定着ではないでしょうか？今やコンピュータは小学生でも手足のように扱う時代で、人間の生活はそれなくしては成り立たなくなりました。コンピュータを介してＡＩ（Artificial Intelligence=人工知能）が仕事の上では業務の効率化や生産性の向上、生活の面では暮らしの便利化に役立っています。また、DX（Digital Transformation=デジタル技術の活用による仕事や生活の変革）を推進することでビジネスの可能性は限りなく広がっています。<br class="pc">一方で、コンピュータの普及で膨大な電力が消費されるようになりました。その電力をつくる上で大きな役割を果たしているのが鉄なのです。鉄がＡＩ、ＤＸを支えていると言っても過言ではありません。しかしながら、鉄はあまりにも日常生活の身近にあり過ぎて、人々は鉄の価値や効用を忘れがちです。私は、鉄に携わってきた者の一人として、自戒の念を込め、暮らしや社会の文字通り要（かなめ）の一つである鉄について広く知っていただくために、この動画を作成しました。</p>
            <span>株式会社マテックス<br>代表取締役会長<br>新井 勝良</span>
        </div>
    </div>
    </main>
<?php get_footer(); ?>

