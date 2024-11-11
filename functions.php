<?php

// 各種ファイルの読み込み
function enqueue_scripts() {
    // CSSファイル
    wp_enqueue_style('main', get_stylesheet_uri());
    //bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css');
    //google-fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/////////////////////////////////////////////////////////////

function theme_setup() {
    // <title>タグを表示させる
    add_theme_support('title-tag');
    //アイキャッチ画像を登録
    add_theme_support('post-thumbnails');
    //アイキャッチ画像のサイズ
    add_image_size('post-eyecatch', 1000, 400, true);
}
add_action('after_setup_theme', 'theme_setup');

//ナビゲーションメニュー
function add_menus() {
    register_nav_menus(array(
        'header_nav' => 'ヘッダーに表示されるナビゲーション'
    ));
}
add_action('after_setup_theme', 'add_menus');

/////////////////////////////////////////////////////////////