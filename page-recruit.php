<?php
/*
Template Name:recruit
*/
?>
<?php get_header(); ?>

<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jp" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Recruit</span>
            <h1 class="jpTtl">採用情報</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>採用情報</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">あらゆる産業を支えるダイナミックな仕事</h2>
        </div>
        <p class="textCenter animate-bottom">私たちの生活を支えている「鉄」製品は、太古の昔から使われてきました。
時に重厚長大に、時に繊細でしなやかに、<br class="pc">時代の変化とともにへ変幻自在に形状や性質を変え存在してきました。社会に貢献し続ける「鉄」のように、既成概念にとらわれず、自由な発想を持った挑戦できる人材を求めています。</p>
    </section>
    <section class="recruitInner">
        <div class="contents content1">
            <div class="contentImg animate-left">
                
            <div class="movie_wrap">
                <div class="txt_movie">
                    <h4>マテックス会社紹介CM</h4>
                    <div class="photo_youtube_wrap">
                        <div class="photo_youtube">
                            <a class="movie-button popup-movie" href="https://www.youtube.com/watch?v=0SuRTDIrl8U">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg01.webp" alt="企業情報画像1">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl animate-bottom">
                        <span>Company</span>
                        <h3>会社を知る</h3>
                    </div>
                    <p class='animate-bottom'>鉄の可能性、鋼材流通業界と<br>マテックスの役割をご紹介します。</p>
                </div>
                <div class="moreButtonWrap animate-fade">
                    <a href="/company/" class="moreButton">more</a>
                </div>
            </div>
        </div>
        <div class="contents content2">
            <div class="contentImg animate-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg02.webp" alt="企業情報画像2">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl animate-bottom">
                        <span>More</span>
                        <h3>仕事を知る</h3>
                    </div>
                    <p class='animate-bottom'>社会と鉄をつなぐ架け橋として、<br>ヤリガイのある仕事がここにあります。</p>
                </div>
                <div class="moreButtonWrap animate-fade">
                    <a href="/work/" class="moreButton">more</a>
                </div>
            </div>
        </div>
        <div class="contents content1">
            <div class="contentImg animate-left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg03.webp" alt="企業情報画像3">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl animate-bottom">
                        <span>Requirement</span>
                        <h3>募集要項</h3>
                    </div>
                    <p class='animate-bottom'>新卒採用・キャリア採用の情報は<br>こちらからご確認ください。</p>
                </div>
                <div class="moreButtonWrap animate-fade">
                    <a href="/requirement/" class="moreButton">more</a>
                </div>
            </div>
        </div>  
        <div class="contents content3">
            

            <div id="faq-content">
                <div class="faq_wrap">
                    <h4>よくあるご質問</h4>
                    <p class="nav-open"><span>Q.</span>コイルセンターって何？</p>
                    <nav>
                        <p>製造業を支える大切な役目を担う施設です！<br>
                        鉄は様々な用途に使われます。しかし、素材(鉄鋼)メーカーが作った材料そのままでは、量やサイズが大きすぎて取り扱いができない、という問題があります。そこで、自動車部品や電化製品など様々な製品を作りやすいように材料を再加工して配達するのがコイルセンターです。</p>
                    </nav>
                    <p class="nav-open"><span>Q.</span>マテックスの立ち位置は？</p>
                    <nav>
                        <p>日本一のコイルセンターです！<br>1937年の創業以来、業績が赤字だったのはリーマンショックの一度だけ。関東と東北、甲信越を営業エリアに生産と販売サービスを一体化した販売力、独自にプレス技術講習会を開催する技術力、いずれも他社と比べて負けない自信があります！</p>
                    </nav>
                    <p class="nav-open"><span>Q.</span>どこにあるの？</p>
                    <nav>
                        <p>工場/営業所は、栃木県佐野市、福島県大玉村、群馬県高崎市、埼玉県狭山市に、本社は東京都台東区にあります。人材は拠点に近い地域の出身者を主に採用しています。地元の先輩がきっといるはずです。</p>
                    </nav>
                    <p class="nav-open"><span>Q.</span>IT業界などに比べて、鉄鋼業界って地味じゃない？</p>
                    <nav>
                        <p>たしかに地味です・・・でも、無くてはならない仕事です！<br>鉄鋼業界はけっして華やかではありませんが、安定して長く働けるところが魅力です。マテックは法律が定める就労規則に基づき、全ての社員が活き活きと働ける職場環境を整えています。土日はもちろん休み(年間休日120日以上)。仕事もプライベートも充実した社会人ライフが過ごせると思います。</p>
                    </nav>
                </div>
                <div class="comment_wrap">
                    <p>この他に知りたいことがあれば、面接の際に何でも聞いてください。<br>あなたの大事な将来だから、私たちは誠心誠意お答えします！<br>
                    面接は対面またはオンラインで。下記の面接お申込みフォームからお気軽にお申込みください。</p>
                </div>
                <div class="form_link_button_wrap">
                    <a href="/application/">面接のお申込みはこちら</a>
                </div>
            </div>












        </div>
    </section>
    </main>
<?php get_footer(); ?>

