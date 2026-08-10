<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <?php part("gtm", ["position" => "head"]); ?>

  <!-- ▼ CSS -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=<?php echo filemtime(ABSPATH . '../assets/css/styles.css'); ?>">
  <!-- ▼ GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Zen+Kaku+Gothic+New:wght@500;700;900&display=swap">
  <?php // スクロールアニメーションはJS前提のため、JS無効時は初期状態のまま表示する ?>
  <noscript>
    <style>
      .js-fade,
      .js-stagger>* {
        opacity: 1;
        translate: none;
      }

      .common-label::before {
        scale: 1 1;
      }
    </style>
  </noscript>

  <?php wp_head(); ?>
</head>