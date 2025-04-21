<?php
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'オプション設定', 'オプション設定', 'manage_options', 'theme-options', 'dashicons-admin-settings', 25);
function change_posts_per_page($query) {
    /* 管理画面,メインクエリに干渉しないために必須 */
    if ( is_admin() || ! $query->is_main_query() ){
            return;
    }
    if ( $query->is_front_page() ) {
        return;
    }
    if ( $query->is_home() ) {
        $query->set( 'posts_per_page', '12' );
        $query->set( 'post_type', 'news');
        return;
    }
    if ( $query->is_archive() ) {
        return;
    }
   }
   add_action( 'pre_get_posts', 'change_posts_per_page' );

// ログイン画面 ロゴ変更
function login_logo_image() {
    echo '<style type="text/css">
            #login h1 a {
                background: url(' . get_bloginfo('template_directory') . '/common/images/matex-logo.svg) no-repeat;
                width: 100%;
                background-size: 100% auto;
                height: 90px;
            }
    </style>';
}
add_action('login_head', 'login_logo_image');
// アイキャッチを有効化
add_theme_support( 'post-thumbnails' );
/* 投稿内の画像を相対パスに */
function delete_domain_from_attachment_url( $url ) {
 if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
 $url = $match[2];
 }
 return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );
/* 投稿内の画像を相対パスに */
function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('template_directory') .'/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');
/* 投稿内のショートコード有効 */
function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
}
add_shortcode('php', 'my_php_Include');
/* 編集者の監理画面を変更 */
function remove_menus () {
	global $menu;
	global $current_user;
	get_currentuserinfo();
	if($current_user -> ID != "1") {
        remove_menu_page( 'cptui_main_menu' ); 
        remove_menu_page( 'aioseo' ); 
        remove_menu_page( 'edit.php?post_type=smart-custom-fields' ); 
        remove_menu_page( 'ai1wm_export' );
		$restricted = array(
            __('投稿'),
            __('コメント'),
 			__('お問い合わせ'),
			__('外観'),
			__('プラグイン'),
			__('ユーザー'),
			__('ツール'),
			__('設定'),
            __('All in One SEO'),
            __('Smart Custom Fields'),
            __('カスタムフィールド'),
            __('CPT UI')
		);
		end ($menu);
		while (prev($menu)){
			$value = explode(' ',$menu[key($menu)][0]);
			if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
				unset($menu[key($menu)]);
			}
		}
	remove_submenu_page('index.php','update-core.php'); //更新非表示
	}
}
add_action('admin_menu', 'remove_menus');
add_action( 'wp_enqueue_scripts', 'remove_my_global_styles' );
function remove_my_global_styles() {
	wp_dequeue_style( 'global-styles' );
}

//js, css 出力場所を指定
function add_custom_scripts()
{
    //予約フォームのみ、mailform.jsを出力する
    if (is_page('application')) {
        wp_enqueue_script(
            'form_script',
            get_template_directory_uri() . '/js/mailform.js',
            array('jquery'),
            NULL,
            true //bodyの終了タグ前に読込
        );
    }
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');


?>

