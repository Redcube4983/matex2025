<body>
<footer>
<section id="cta-area">
<!--    <div class="button"><a href=""><span>お問い合わせはこちら</span></a></div>-->
    <div class="cta-tel">
        <p>お電話でのお問い合わせ</p>
        <p><a href="tel:03-3844-0808">03-3844-0808</a></p>
    </div>

</section>
<div class="site-logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" alt="matex"></a></div>


<div id="footer-sitemap">
    <ul class="footer-sitemap">
        <li class="single"><h3><a href="#">TOP</a></h3></li>
        <li class="parent">
            <h3><a href="/aboutus/">企業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="/message/">代表メッセージ</a></h4></li>
                <li class="gran-child"><h4><a href="/profile/">会社概要</a></h4></li>
                <li class="gran-child"><h4><a href="/businessbase/">事業拠点</a></h4></li>
                <li class="gran-child"><h4><a href="/quality/">品質・環境への取り組み</a></h4></li>
            </ul>
        </li>
        <li class="parent">
            <h3><a href="/business/">事業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="/network/">販売/納品体制</a></h4></li>
                <li class="gran-child"><h4><a href="/production/">生産体制</a></h4></li>
                <li class="gran-child"><h4><a href="/support/">技術サポート体制</a></h4></li>
            </ul>
        </li>
        <li class="parent">
            <h3><a href="/recruit/">採用情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="/company/">会社を知る</a></h4></li>
                <li class="gran-child">
                    <h4><a href="/work/">仕事を知る</a></h4>
                        <ul class="great-gran-child">
                            <li class="gran-child workListWrap">
                            <span class="workSpan"></span>
                            <h4 class="workListTxt"><a href="/salesjob/">営業職</a></h4>
                            </li>
                            <li class="gran-child workListWrap">
                            <span class="workSpan"></span>
                            <h4 class="workListTxt"><a href="/technical/">技術職</a></h4>
                            </li>
                            <li class="gran-child workListWrap">
                            <span class="workSpan"></span>
                            <h4 class="workListTxt"><a href="/officejob/">事務職</a></h4>
                            </li>
                        </ul>
                </li>
                <li class="gran-child"><h4><a href="/requirement/">募集要項</a></h4></li>
            </ul>
        </li>
        <li class="single">
            <h3><a href="/news/">お知らせ一覧</a></h3>
            <h3><a href="/policy/">個人情報保護方針</a></h3>
            <h3><a href="/aboutusing/">サイトのご利用について</a></h3>
            <h3><a href="/aboutiron/">鉄の魅力について</a></h3>
        </li>
    </ul>
</div>
<address>
    <h2>株式会社マテックス</h2>
    <div class="jusho">
    <p class="zip">〒111-0036</p>
    <p class="address">東京都台東区松が谷1-10-2</p>
    </div>
    <div class="tel-fax">
    <p class="tel">TEL.03-3844-0808</p><p class="fax">FAX.03-3844-4109</p>
    </div>
</address>
<div id="copyright"><p class="copyright">© <?php echo date_i18n('Y'); ?> MATEX Co., Ltd. All rights reserved.</p></div>
</footer>

<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/scrollreveal.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/ofi.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
<?php if( is_front_page() ): ?>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>
<?php endif; ?>
<script>
$(function() {
	$('main').append('<div id="tagetTop"><a href="#" class="smooth"><span></span></a></div>');
    $('#tagetTop').css('display', 'none' );
	$(window).bind('scroll load',function(){
		var i = $(window).scrollTop();
		var headH = $('header').height();
        var footH = $('footer').height();
        var documentHeight = $('body').height();
        var windowHeight = window.innerHeight;
		var keyvisualH = $('#main-visual').height();
        var tagetTop = $('#tagetTop').height();
        var footBottom = $('#footer-bottom').height(); 
		if ( i >= keyvisualH ) {
			$('#tagetTop').fadeIn();
		}else {
			$('#tagetTop').fadeOut();
		}
        if ( i >= (keyvisualH / 2) ) {
			$('header').addClass("white");
            $('#panNavi').addClass("white");
		}else {
			$('header').removeClass("white");
            $('#panNavi').removeClass("white");
		}
        if ((documentHeight - (footH + tagetTop + windowHeight)) < i) {
        $('#tagetTop').removeClass("fixed");
        }else{
        $('#tagetTop').addClass("fixed"); 
        }
	});
    $('.smooth').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
    
});
</script>
<?php if( is_front_page() ): ?>
<script>
jQuery(function(){
   jQuery(window).scroll(function(){
      var obj_t_pos = jQuery('.business-image-area').offset().top;
      var scr_count = jQuery(document).scrollTop() + (window.innerHeight/2); // ディスプレイの半分の高さを追加
      if(scr_count > obj_t_pos){
         jQuery('.business-image-area').addClass('show');
         jQuery('.business-image-area').fadeIn().addClass('animate');
      }else{
         
      }
   })
})
jQuery(function(){
   jQuery(window).scroll(function(){
      var obj_t_pos = jQuery('.recruit-image-area').offset().top;
      var scr_count = jQuery(document).scrollTop() + (window.innerHeight/2); // ディスプレイの半分の高さを追加
      if(scr_count > obj_t_pos){
         jQuery('.recruit-image-area').addClass('show');
         jQuery('.recruit-image-area').fadeIn().addClass('animate');
      }else{
         
      }
   })
})
jQuery(function(){
   jQuery(window).scroll(function(){
      var obj_t_pos = jQuery('.aboutIron-image-area').offset().top;
      var scr_count = jQuery(document).scrollTop() + (window.innerHeight/2); // ディスプレイの半分の高さを追加
      if(scr_count > obj_t_pos){
         jQuery('.aboutIron-image-area').addClass('show');
         jQuery('.aboutIron-image-area').fadeIn().addClass('animate');
      }else{
         
      }
   })
})
</script>
<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.magnific-popup.min.js"></script>
<script>
$(document).ready(function() {
            $('.popup-movie').magnificPopup({
              disableOn: null,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 200,
              preloader: false,
              fixedContentPos: false
            });
          });
</script>
<?php elseif( is_page('recruit') ): ?>
<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.magnific-popup.min.js"></script>
<script>
$(document).ready(function() {
            $('.popup-movie').magnificPopup({
              disableOn: null,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 200,
              preloader: false,
              fixedContentPos: false
            });
          });
</script>
<?php elseif( is_page('aboutiron') ): ?>
<script defer src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.magnific-popup.min.js"></script>
<script>
$(document).ready(function() {
            $('.popup-movie').magnificPopup({
              disableOn: null,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 200,
              preloader: false,
              fixedContentPos: false
            });
          });
</script>
<?php else: ?>
<script>
$(document).ready(function() {
    var list = $('.list').innerWidth();
    var panNavi = $('#panNavi').innerWidth();
    var scrollLeft = list - panNavi;
    $('.list').scrollLeft(list - scrollLeft);
});
</script>
<?php endif; ?>
<script type="text/javascript">
    	$(function(){
    		//クリックで動く
    		$('.nav-open').click(function(){
    			$(this).toggleClass('active');
    			$(this).next('nav').slideToggle();
    		});
    	});
</script>
<?php wp_footer(); ?>
</body>
</html>