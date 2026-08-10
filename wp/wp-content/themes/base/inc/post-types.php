<?php

if (!defined("ABSPATH")) die();

add_action("init", function () {
  // 新着情報。未公開フェーズ中は管理画面でのみ編集でき、フロントには出さない
  $news_public = launched("news");

  register_post_type("news", [
    "label" => "新着情報",
    "public" => $news_public,
    "show_ui" => true,
    "has_archive" => $news_public,
    // publicだけ落としてもパーマストラクトは残り、/news/〇〇/ がTOPを200で返してしまう
    "rewrite" => $news_public,
    "query_var" => $news_public,
    "supports" => ["title"],
  ]);

  // 新着情報のカテゴリー（TOPの新着情報でラベル表示に使用）
  register_taxonomy("news_category", "news", [
    "label" => "新着情報カテゴリー",
    "public" => $news_public,
    "show_ui" => true,
    "hierarchical" => true,
    "show_admin_column" => true,
  ]);
});
