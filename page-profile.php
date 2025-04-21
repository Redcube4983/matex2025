<?php
/*
Template Name: profile
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/profile-top-sp.webp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/profile-top-sp.webp 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/profile-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/profile-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/profile-top-sp.webp" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/profile-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/profile-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Company profile</span>
            <h1 class="jpTtl">会社概要</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/aboutus/">企業情報</a>
        </li>
        <li>
            <span>会社概要</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
        <h2 class="jpTtl">無限のテクノロジー「マテックス」</h2>
        </div>
        <div class="logoWrap">
            <div class="logo animate-fade">
            <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/matexLogo.svg" alt="マテックスロゴ">
            </div>
            <p class="animate-bottom">さまざまな新素材（マテリアル)を積極的に扱っていこうという姿勢と力強く（マイティ）業務に邁進しようという決意、そして旧社名の丸八鐵鋼の社名から「マ」を。技術革新に果敢にチャレンジしていこうという意欲を表現するため、テクノロジーから「テック」を。お客様の限りないご愛顧、そしてお客様とともに無限に発展していこうという願いを込めて、無限を表すX「エックス」から「クス」を。こうして「マテックス」が誕生しまた。コーポレートマークは、「マテックス」の頭文字「M」と無限をあらわす“メビウスの帯”をモチーフに社名に込められた理念・姿勢をシンボル化したものです。</p>
        </div>
    </section>
    
    <section id="outline">
    <div id="overview">
        <div class="contentsTtl animate-bottom">
            <h3>会社概要</h3>
        </div>
        <table>
            <tbody>
                <?php
                    $free_item = SCF::get_option_meta('theme-options', 'companyProfile');
                    foreach ($free_item as $fields) { 

                    if($fields['profileTtl'] !== "" and $fields['profile']!== ""){
                    ?>
                    <tr class="animate-bottom">
                        <th><?php echo $fields['profileTtl']; ?></th>
                        <td><?php echo $fields['profile']; ?></td>
                    </tr>
                    <?php
                    } 
                    }
                ?>
                
                
            </tbody>
        </table>
        </div>
    
        <div id="businessItems">
        <div class="contentsTtl animate-bottom">
            <h3>営業品目</h3>
        </div>
        <ul>
            <?php
            $free_item = SCF::get_option_meta('theme-options', 'businessItems');
            foreach ($free_item as $fields) { 

            if($fields['items'] !== ""){
            ?>

            <li class="animate-bottom"><?php echo $fields['items']; ?></li>

            <?php
            } 
            }
            ?>
         </ul>
        </div>
    
    
        <div id="history">
        <div class="contentsTtl animate-bottom">
            <h3>沿革</h3>
        </div>
        <ul>
            <?php
            $free_item = SCF::get_option_meta('theme-options', 'history');
            foreach ($free_item as $fields) { 

            if($fields['ad'] !== "" and $fields['month']!== "" and $fields['contents']!== ""){
            ?>
            <li class="animate-bottom">
                <div class="ad-monthWrap">
                    <span class="ad"><?php echo $fields['ad']; ?>年</span>
                    <span class="month"><?php echo $fields['month']; ?>月</span>
                </div>
                <p class="contents"><?php echo $fields['contents']; ?></p>
            </li>
            <?php
            } 
            }
            ?>
        </ul>
    </div>
     <div id="organizationalChart">
        <div class="contentsTtl animate-bottom">
            <h3>組織図</h3>
        </div>
         <div class="chartImgWrap animate-fade">
             <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/profile/organizationalChart.svg" alt="組織図">
         </div>
         </div>
    </section>
</main>
<?php get_footer(); ?>