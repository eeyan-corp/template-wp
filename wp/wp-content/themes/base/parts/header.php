<?php
// ▼ 要クライアント確認：下層ページのURL（/training/ /parents/ /about/ /faq/）は仮。
//   ページ作成後にスラッグを確定させる。
$news_url = get_post_type_archive_link("news");

// 下層ページが1つも公開されていない間は、TOPだけ残っても意味がないのでリストごと出さない
$has_nav = launched("training") || launched("parents") || launched("about") || launched("faq") || launched("news");
?>

<header class="site-header">
  <a class="logo" href="<?php echo esc_url(home_url("/")); ?>">
    <img src="/assets/images/common/logo01.svg" alt="ミライヲツナグ奨学金" width="461" height="135">
  </a>

  <button class="menu-btn js-menu-btn" type="button" aria-label="メニューを開く" aria-expanded="false" aria-controls="global-nav">
    <span></span>
  </button>

  <nav class="global-nav js-menu" id="global-nav">
    <?php if ($has_nav) : ?>
      <ul>
        <li><a href="<?php echo esc_url(home_url("/")); ?>">TOP</a></li>
        <?php if (launched("training")) : ?>
          <li><a href="<?php echo esc_url(home_url("/training/")); ?>">ビジネス研修について</a></li>
        <?php endif; ?>
        <?php if (launched("parents")) : ?>
          <li><a href="<?php echo esc_url(home_url("/parents/")); ?>">保護者様へ</a></li>
        <?php endif; ?>
        <?php if (launched("about")) : ?>
          <li><a href="<?php echo esc_url(home_url("/about/")); ?>">運営者情報</a></li>
        <?php endif; ?>
        <?php if (launched("faq")) : ?>
          <li><a href="<?php echo esc_url(home_url("/faq/")); ?>">FAQ</a></li>
        <?php endif; ?>
        <?php if (launched("news")) : ?>
          <li><a href="<?php echo esc_url($news_url); ?>">新着情報</a></li>
        <?php endif; ?>
      </ul>
    <?php endif; ?>

    <div class="btns">
      <a class="btn entry" href="<?php echo esc_url(home_url("/entry/")); ?>">応募する</a>
      <a class="btn contact" href="<?php echo esc_url(home_url("/contact/")); ?>">お問い合わせ</a>
    </div>
  </nav>
</header>

<div class="side-nav js-side-nav">
  <a class="entry" href="<?php echo esc_url(home_url("/entry/")); ?>">応募する</a>
  <a class="line" href="https://lin.ee/XS3E5pT" target="_blank" rel="noopener">LINEで相談</a>
</div>