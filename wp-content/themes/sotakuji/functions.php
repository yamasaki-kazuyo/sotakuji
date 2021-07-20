<?php
/* ****************************************************************************
01-カスタム投稿タイプの追加
  -重要なお知らせ
  -周辺情報
  -Live配信
02-bodyタグにスラッグやカテゴリ名のidを追加する
03-アイキャッチ画像の追加
04-カスタム投稿でのアイキャッチ画像の追加
05-概要（抜粋）の文字数調整
06-contact form7のカスタマイズ　確認用メールアドレス
07-contact form7のカスタマイズ　郵便番号自動入力　全文英語のメールを受信しない
**************************************************************************** */

global $wp_rewrite;
$wp_rewrite->flush_rules();

/* 01-カスタム投稿タイプの追加
---------------------------------------------------------------------------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {
  //カスタム投稿タイプ１（ここから）-重要なお知らせ
  register_post_type( 'important-notices',
    array(
		'labels' => array(
		'name' => __( '重要なお知らせ' ),
		'singular_name' => __( '重要なお知らせ' )
		),
		'public' => true,
		'menu_position' =>5,
		)
	);
//カスタム投稿タイプ１（ここまで）
	
//カスタム投稿タイプ２（ここから）-周辺情報
  register_post_type( 'location',
    array(
      'labels' => array(
        'name' => __( '周辺情報' ),
        'singular_name' => __( '周辺情報' )
      ),
      'public' => true,
      'menu_position' => 5,
	  'order' => 'DESC',
    )

  );
//カスタム投稿タイプ２（ここまで）
	
//カスタム投稿タイプ3（ここから）-Live配信
  register_post_type( 'live',
    array(
      'labels' => array(
        'name' => __( 'Live配信' ),
        'singular_name' => __( 'Live配信' )
      ),
      'public' => true,
      'menu_position' => 5,
	  'order' => 'DESC',
    )

  );
//カスタム投稿タイプ3（ここまで）
	
}



/* 02-投稿したカテゴリーにclass「category」を追加する
---------------------------------------------------------------------------- */
//カスタム投稿タイプ
add_action('init', 'custom_blog_init');
function custom_blog_init() 
{
	$labels = array(
		'name' => _x('よくあるご質問', 'post type general name'),
		'singular_name' => _x('よくあるご質問', 'post type singular name'),
		'all_items' => __('投稿一覧'),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,//管理画面・サイトへの表示の有無
		'publicly_queryable' => true,
		'show_ui' => true, //管理画面のメニューへの表示の有無
		'menu_position' => 5,//管理メニューでの表示位置
		'query_var' => true,
		'rewrite' => true,//パーマリンク設定
		'capability_type' => 'post',//権限タイプ
		'map_meta_cap' => true,//デフォのメタ情報処理を利用の有無
		'hierarchical' => false,//階層(親)の有無
		'menu_icon' => 'dashicons-admin-customizer',//アイコン画像
		'supports' => array('title','editor','thumbnail','custom-fields','excerpt','trackbacks','comments','revisions','page-attributes'),
		'has_archive' => true//アーカイブの有無
	); 
	register_post_type('faq',$args);
}

//カスタム分類(カスタムタクソノミー)
function custom_blog_taxonomies() {

	//タクソノミー1
	$labels = array(
		"name" => _x( "質問カテゴリー", "taxonomy general name" ),
		"singular_name" => _x( "質問カテゴリー", "taxonomy singular name" ),
	);

	$args = array(
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,//true:カテゴリー・false:タグ
		"show_ui" => true,//管理画面のメニューへの表示の有無
		"show_in_menu" => true,
		"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
		"query_var" => true,//wp_queryでの使用の可否
		"rewrite" => array( 'slug' => 'blog_cat', 'with_front' => true, ),//パーマリンクの設定
		"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,//クイック編集への表示の可否
	);
	register_taxonomy( "blog_cat", array( "faq" ), $args );

}

add_action( 'init', 'custom_blog_taxonomies' );

/* 03-アイキャッチ画像の追加
---------------------------------------------------------------------------- */
add_theme_support( 'post-thumbnails', array( 'post','page','location' ) );

/* 04-カスタム投稿でのアイキャッチ画像の追加
---------------------------------------------------------------------------- */
register_post_type(
    'location',
    // 'supports'に'thumbnail'を追記
    array('supports' => array('title','editor','thumbnail'))
);

/* 05-概要（抜粋）の文字数調整
---------------------------------------------------------------------------- */
 function my_excerpt_length($length) {
 return 82;
 }
 add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_more($more) {
return ”;
}
add_filter('excerpt_more' , ' my_excerpt_more' ); 

/* 06-contact form7のカスタマイズ　確認用メールアドレス
---------------------------------------------------------------------------- */
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
global $my_email_confirm;
$tag = new WPCF7_Shortcode( $tag );
$name = $tag->name;
$value = isset( $_POST[$name] )
? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
: '';
if ($name == "your-email"){
$my_email_confirm=$value;
}
if ($name == "your-email_confirm" && $my_email_confirm != $value){
$result->invalidate( $tag,"確認用のメールアドレスが一致していません");
}

return $result;
}

/* 07-contact form7のカスタマイズ　郵便番号自動入力
---------------------------------------------------------------------------- */
wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

//メールフォームの textarea にひらがなが無ければ送信できない（contact form7）
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);
 
function wpcf7_validation_textarea_hiragana($result, $tag)
{
    $name = $tag['name'];
    $value = (isset($_POST[$name])) ? (string) $_POST[$name] : '';
 
    if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
        $result['valid'] = false;
        $result['reason'] = array($name => 'エラー / この内容は送信できません。');
    }
 
    return $result;
}
