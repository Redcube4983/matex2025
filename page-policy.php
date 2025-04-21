<?php
/*
Template Name: policy
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/policy-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/policy-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/policy-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/policy-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/policy/policy-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/policy-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/policy-top-pc.jpg 2x" alt="トップ背景画像">
            </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Policy</span>
            <h1 class="jpTtl">個人情報保護方針</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>個人情報保護方針</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">お客様情報の保護についての考え方</h2>
        </div>
        <p class="animate-bottom">当社は、当社の業務を円滑に行うため、お客様の電子メールアドレスをはじめ、氏名、住所、電話番号等の情報を収集・利用させていただいております。当社は、これらのお客様の個人情報（以下「お客様情報」といいます。）の適正な保護を重大な責務と認識し、この責務を果たすために、次の方針の下でお客さま情報を取り扱います。</p>
        <p class="animate-bottom">お客様情報に適用される個人情報の保護に関する法律その他の関係法令を遵守し、適切に取り扱います。また、適宜取扱いの改善に努めます。</p>
        <p class="animate-bottom">お客様情報の取扱いに関する規程を明確にし、従業者に周知徹底します。また、取引先等に対しても適切にお客様情報を取り扱うように要請します。</p>
        <p class="animate-bottom">お客様情報の収集に際しては、利用目的を特定して通知または公表し、その利用目的にしたがってお客様情報を取り扱います。</p>
        <p class="animate-bottom">お客様情報の漏洩、紛失、改ざん等を防止するために必要な対策を講じて適切な管理を行います。</p>
</section>

</main>
<?php get_footer(); ?>

