<?php

namespace Site\Admin;

if(!defined("ABSPATH")) die();

// 管理メニューの整理
add_action("admin_menu", function(){
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

  foreach($pages as $page) remove_menu_page($page);
});
