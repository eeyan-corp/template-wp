<!DOCTYPE html>
<html lang="ja">

<?php part("head"); ?>

<body>
  <?php part("gtm", ["position" => "body"]); ?>

  <div id="<?php echo is_404() ? "notfound" : "page"; ?>" class="lower">
    <?php part("header"); ?>

    <main>
      <header class="fv">
        <?php part("linework", ["name" => "support"]); ?>

        <p class="common-label wide"><?php echo is_404() ? "404 NOT FOUND" : "NEWS"; ?></p>
        <h1 class="title common-inner js-fade">
          <?php
          if (is_404()) {
            echo "ページが見つかりません";
          } elseif (is_singular()) {
            the_title();
          } elseif (is_post_type_archive()) {
            post_type_archive_title();
          } else {
            the_archive_title();
          }
          ?>
        </h1>
      </header>
      <?php part("breadcrumb"); ?>

      <div class="body common-inner">
        <?php if (is_404()) : ?>
          <p>お探しのページは削除されたか、URL が変更された可能性があります。</p>
          <a class="common-btn" href="<?php echo esc_url(home_url("/")); ?>">トップページへ戻る</a>
        <?php elseif (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <?php part("cta"); ?>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>
