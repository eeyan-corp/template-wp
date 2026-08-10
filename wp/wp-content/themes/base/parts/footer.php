<?php
$news_url = get_post_type_archive_link("news");
?>

<footer class="site-footer">
  <div class="body common-inner">
    <a class="logo" href="<?php echo esc_url(home_url("/")); ?>">
      <img src="/assets/images/common/logo01.svg" alt="ミライヲツナグ奨学金" width="461" height="135">
    </a>

    <div class="nav">
      <div>
        <p>制度について</p>
        <ul>
          <li><a href="<?php echo esc_url(home_url("/")); ?>">トップ</a></li>
          <?php if (launched("training")) : ?>
            <li><a href="<?php echo esc_url(home_url("/training/")); ?>">研修プログラムについて</a></li>
          <?php endif; ?>
          <?php if (launched("parents")) : ?>
            <li><a href="<?php echo esc_url(home_url("/parents/")); ?>">保護者様へ</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <div>
        <p>応募・サポート</p>
        <ul>
          <li><a href="<?php echo esc_url(home_url("/entry/")); ?>">奨学金エントリーフォーム</a></li>
          <li><a href="<?php echo esc_url(home_url("/contact/")); ?>">お問い合わせ</a></li>
          <?php if (launched("faq")) : ?>
            <li><a href="<?php echo esc_url(home_url("/faq/")); ?>">よくあるご質問</a></li>
          <?php endif; ?>
          <?php if (launched("news")) : ?>
            <li><a href="<?php echo esc_url($news_url); ?>">保護者様新着情報へ</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <div>
        <p>運営</p>
        <ul>
          <?php if (launched("about")) : ?>
            <li><a href="<?php echo esc_url(home_url("/about/")); ?>">運営者情報</a></li>
          <?php endif; ?>
          <?php if (launched("training")) : ?>
            <li><a href="<?php echo esc_url(home_url("/training/")); ?>">研修プログラムについて</a></li>
          <?php endif; ?>
          <li><a href="https://lin.ee/XS3E5pT" target="_blank" rel="noopener">LINE公式アカウント</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="copyright">
    <a href="<?php echo esc_url(home_url("/privacy/")); ?>">プライバシーポリシー</a>
    <p>運営：延田グループ（NOBUTA GROUP）<span>&copy; Mirai wo Tsunagu Scholarship</span></p>
  </div>
</footer>