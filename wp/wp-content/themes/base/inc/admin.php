<?php

namespace Site\Admin;

if (!defined("ABSPATH")) die();

// ログイン画面のロゴをサイトのロゴに差し替える（縦横比 304.43 : 236.34）。
// コアのlogin.cssより後に出す必要があるので wp_add_inline_style で連結する
add_action("login_enqueue_scripts", function () {
  $logo = esc_url(home_url("/assets/images/common/logo03.svg"));

  wp_add_inline_style("login", ".login h1 a {
    width: 200px;
    height: 155px;
    background-image: url('{$logo}');
    background-size: contain;
  }");
});

// ロゴのリンク先・代替テキストをwordpress.orgから自サイトへ
add_filter("login_headerurl", fn() => home_url("/"));
add_filter("login_headertext", fn() => get_bloginfo("name"));

// 管理メニューの整理
add_action("admin_menu", function () {
  $pages = [
    // "index.php",              // ダッシュボード
    "edit.php",                  // 投稿
    // "upload.php",             // メディア
    // "edit.php?post_type=page", // 固定ページ
    "edit-comments.php",         // コメント
    "themes.php",                // 外観
    // "plugins.php",            // プラグイン
    // "users.php",              // ユーザ
    // "tools.php",              // ツール
    // "options-general.php",    // 設定
  ];

  foreach ($pages as $page) remove_menu_page($page);
});
