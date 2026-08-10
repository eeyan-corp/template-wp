<?php

namespace {
  require_once __DIR__ . "/inc/admin.php";       // 管理画面カスタマイズ
  require_once __DIR__ . "/inc/post-types.php";  // カスタム投稿タイプ

  // titleタグの出力をWordPress（＝Yoast SEO）に任せる。
  // この宣言が無いとYoastがtitleを出力できず、全ページでtitleが欠落する
  add_action("after_setup_theme", function () {
    add_theme_support("title-tag");
  });

  // 公開フェーズの管理。第1弾はTOP・エントリー・お問い合わせ・プライバシーポリシーのみ公開する。
  // ページを追加公開するときはここをtrueに戻せば、導線とニュース投稿タイプがまとめて復活する
  const LAUNCHED = [
    "training" => false, // ビジネス研修について
    "parents"  => false, // 保護者様へ
    "about"    => false, // 運営者情報
    "faq"      => false, // よくあるご質問
    "news"     => false, // 新着情報
  ];

  function launched($key) {
    return LAUNCHED[$key] ?? false;
  }

  // 配列・オブジェクトの値を安全に取得
  function el($o, $k, $d=null){
    if(is_array($o)){
      return isset($o[$k]) ? $o[$k] : $d;
    }else{
      return isset($o->$k) ? $o->$k : $d;
    }
  }

  // テンプレートファイルを変数付きで読み込む
  function view($view, $vars=[]){
    if(file_exists(__DIR__ . "{$view}.php")){
      extract($vars);
      include __DIR__ . "{$view}.php";
    }
  }

  // parts/配下のパーツファイルを読み込む
  function part($part, $vars=[]){
    view("/parts/{$part}", $vars);
  }
};

namespace Site {
  // サイト固有の関数をここに記述
}
