<!doctype html>
<head>
<meta charset="UTF-8">
<title>株式会社マテックス</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
<meta name="description" content="株式会社マテックスは関東・東北を中心に展開するコイルセンターとして、業界トップレベルの製品・サービスの提供を通じてお客様のモノづくりを支えています。">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/common/images/apple-touch-icon.png">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/common/images/apple-touch-icon.png">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/common/images/favicon.ico">
<!--リダイレクト（10秒後のトップへ戻る）-->
<?php if( is_404() ): ?>
<meta http-equiv="refresh" content="10 ; URL=/">
<?php endif; ?>
<!---->
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<?php if( is_front_page() ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
<?php elseif( is_home() ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css"/>
<?php elseif(is_page(array('business', 'aboutus'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
<?php elseif(is_page(array('officejob', 'technical', 'salesjob'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page2.css">
<?php elseif( is_page( 'message' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-message.css">
<?php elseif( is_page( 'profile' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-profile.css">
<?php elseif( is_page( 'businessbase' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-businessBase.css">
<?php elseif( is_page( 'quality' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-quality.css">
<?php elseif( is_page( 'network' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-network.css">
<?php elseif( is_page( 'production' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-production.css">
<?php elseif( is_page( 'support' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-support.css">
<?php elseif( is_page( 'company' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-company.css">
<?php elseif( is_page( 'policy' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-policy.css">
<?php elseif( is_page( 'aboutusing' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-aboutUsing.css">
<?php elseif( is_page( 'work' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-work.css">
<?php elseif( is_page( 'recruit' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-recruit.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/magnific-popup.css">
<?php elseif( is_page( 'requirement' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-requirement.css">
<?php elseif( is_page( 'application' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/application.css">
<?php elseif( is_page( 'confirm' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/application-confirm.css">
<?php elseif( is_page( 'completed' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/application-completed.css">
<?php elseif( is_page( 'error' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/application-error.css">
<?php elseif( is_single() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single-news.css">
<?php elseif( is_post_type_archive('news') ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css"/>
<?php elseif( is_404() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/404.css"/>
<?php else: ?>
<?php endif; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_head(); ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z57K9JHKBZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z57K9JHKBZ');
</script>

<body>

<header id="headerWrap">
    <div id="header-left">
        <?php if( is_front_page() ): ?>
            <h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" alt="matex"></a></h1>
        <?php else: ?>
            <div class="site-logo"><a href="<?php echo esc_url( home_url( '/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" alt="matex"></a></div>
        <?php endif; ?>
    </div>

    <div id="header-right">
    <ul id="global-nav">
        <li class="global-nav single"><h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a></h3></li>
        <li class="global-nav parent">
            <h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/aboutus/') ); ?>">企業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/message/') ); ?>">代表メッセージ</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/profile/') ); ?>">会社概要</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/businessBase/') ); ?>">事業拠点</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/quality/') ); ?>">品質・環境への取り組み</a></h4></li>
            </ul>
        </li>
        <li class="global-nav parent">
            <h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/business/') ); ?>">事業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/network/') ); ?>">販売/納品体制</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/production/') ); ?>">生産体制</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/support/') ); ?>">技術サポート体制</a></h4></li>
            </ul>
        </li>
        <li class="global-nav parent">
            <h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/support/') ); ?>/recruit/">採用情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/company/') ); ?>">会社を知る</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/work/') ); ?>">仕事を知る</a></h4>
                    <ul class="great-gran-child">
                        <li class="gran-child workListWrap">
                        <span class="workSpan"></span>
                        <h5 class="workListTxt"><a href="/salesjob/">営業職</a></h5>
                        </li>
                        <li class="gran-child workListWrap">
                        <span class="workSpan"></span>
                        <h5 class="workListTxt"><a href="/technical/">技術職</a></h5>
                        </li>
                        <li class="gran-child workListWrap">
                        <span class="workSpan"></span>
                        <h5 class="workListTxt"><a href="/officejob/">事務職</a></h5>
                        </li>
                    </ul>
                </li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/requirement/') ); ?>">募集要項</a></h4></li>
            </ul>
        </li>
<!--
        <li class="global-nav single">
            <h3><a href="#">お問い合わせ</a></h3>
        </li>
-->     <li class="global-nav">
            <h3><a href="<?php echo esc_url( home_url( '/news/') ); ?>">お知らせ一覧</a></h3>
        </li>
        <li class="global-nav other">
            <h3><a href="<?php echo esc_url( home_url( '/policy/') ); ?>">個人情報保護方針</a></h3>
        </li>
        <li class="global-nav other">
            <h3><a href="<?php echo esc_url( home_url( '/aboutusing/') ); ?>">サイトのご利用について</a></h3>
        </li>
    </ul>
    </div>
    <div id="header-toggle">
    <div class="toggle-wrap">
        <span></span>
        <span></span>
        <span></span>
    </div>
    </div>
</header>
















