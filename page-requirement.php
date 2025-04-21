<?php
/*
Template Name: requirement
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-sp.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-sp.webp 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-sp.webp" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Requirement</span>
            <h1 class="jpTtl">募集要項</h1>
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
            <span>応募要項</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">社会に貢献できる仕事に<br class="sp">チャレンジしませんか！</h2>
        </div>
        <p class="textCenter animate-bottom">マテックスの社訓が一番最初に掲げているのは、 「企業は何より人にある」です。<br class="pc">「人」が育たなければ会社の成長はないと考え、私たちは何よりも「人」＝社員を大切にしています。<br class="pc">限りない可能性を秘めた「鉄」を取り扱う私たちと一緒に、社会に貢献できるダイナミックな仕事にチャレンジしませんか！</p>
</section>
    
<section id="requirementInner">
    <div id="listWrap">
            <div class="contentsTtl animate-bottom">
                <h3>応募要項</h3>
            </div>
            <table>
                <tbody>
                    <?php
                        $free_item = SCF::get_option_meta('theme-options', 'requirement');
                        foreach ($free_item as $fields) { 

                        if($fields['profileTtl'] !== "" and $fields['profile']!== ""){
                        ?>
                        <tr class="animate-bottom">
                            <th><?php echo $fields['ttl']; ?></th>
                            <td><?php echo $fields['about']; ?></td>
                        </tr>
                        <?php
                        } 
                        }
                    ?>


                </tbody>
            </table>
        </div>
    <div id="othersWrap">
            <div class="contentsTtl animate-bottom">
                <h3>求める人物像</h3>
            </div>
            <ul class="animate-bottom">
            <?php
            $free_item = SCF::get_option_meta('theme-options', 'idealProfile');
            foreach ($free_item as $fields) { 

            if($fields['aboutIdeal'] !== ""){
            ?>

            <li>・<?php echo $fields['aboutIdeal']; ?></li>

            <?php
            } 
            }
            ?>
         </ul>
        </div>
    <div id="othersWrap">
            <div class="contentsTtl">
                <h3>会社の雰囲気</h3>
            </div>
            <ul class="animate-bottom">
            <?php
            $free_item = SCF::get_option_meta('theme-options', 'atmosphere');
            foreach ($free_item as $fields) { 

            if($fields['aboutAtmosphere'] !== ""){
            ?>

            <li>・<?php echo $fields['aboutAtmosphere']; ?></li>

            <?php
            } 
            }
            ?>
         </ul>
        </div>
</section>
<section id="cta-area">
    <div class="button"><a href="https://job.career-tasu.jp/2024/corp/00032474/"><span>エントリーはこちら</span></a></div>
</section>

</main>
<?php get_footer(); ?>




