<?php
/*
Template Name: message
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-top-sp.jp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Top Message</span>
            <h1 class="jpTtl">代表メッセージ</h1>
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
            <span>代表メッセージ</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap">
        <h2 class="jpTtl animate-bottom">信頼し、信頼され、いかなる時も誠実に</h2>
        </div>
        <p class="animate-bottom">私たちは長い間技術を蓄積し、さまざまな面で合理化を重ねてまいりましたが、その目的はただひとつ、「お客様にご満足をいただく」ことです。マテックスの社員教育の根幹は、お客様最優先の意識の徹底です。私たちは社内外におけるあらゆる活動、決定を「どうすればお客様にご満足いただけるか」という一点に絞って対処してきました。創業以来、激動の年月を着実に成長し続けることができましたのも、この単純明快な信念に徹してきたことで、長くお客様の信頼をかち得たからだと信じています。<br>マテックスはこれからもこの信念を曲げることなく、新しい時代に立ち向かってまいります。</p>
    </section>
    
    <section class="messageInner">
        <div id="ceoWrap">
            <div class="ceoImg animate-fade">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/message/message-img01.webp" alt="代表写真">
            </div>
            <div class="ceoProfile animate-bottom">
                <span>代表取締役社長<br>新井 憲明</span>
            </div>
        </div>
        <div id="motto">
            <div class="textWrap animate-bottom">
                <h3>社是</h3>
                <p>私たちは互に援け合い 人格の向上と技術の錬磨に努め 鐵を通じて社会に貢献し国家と共に繁栄を希うものである</p>
            </div>
            <div class="textWrap animate-bottom">
                <h3 class="notFirst">社訓</h3>
                <ul>
                    <li>一、企業は何より人にある</li>
                    <li>一、人は創意と進歩に生きる</li>
                    <li>一、業は周到に企画し、果敢に実行する</li>
                    <li>一、君も我も互いに信頼し、またその信頼に背かないことを誓う</li>
                    <li>一、努力 執念 根性</li>
                </ul>
            </div>
            <div class="textWrap animate-bottom">
                <h3 class="notFirst">作業方針</h3>
                <p>安全第一  良品増産  敏速出荷</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>