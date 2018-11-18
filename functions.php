<?php


// カスタムメニュー
register_nav_menus(array(
	'navigation' => ' ナビゲーションバー ',
	));

// ウイジェット
register_sidebar();
register_sidebar();

// フッター
register_sidebar(array('name' => 'フッター1'));
register_sidebar(array('name' => 'フッター2'));

//抜粋記事の文字数
function my_length($length){
	return 150;
}
add_filter('excerpt_mblength','my_length');

//抜粋記事の省略記号
function my_more($more){
	return ' ...';
}
add_filter('excerpt_more','my_more');

//アイキャッチ画像
add_theme_support('post-thumbnails');
?>
