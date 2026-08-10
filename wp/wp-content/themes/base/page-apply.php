<!DOCTYPE html>
<html lang="ja">

<?php part("head"); ?>

<body>
  <?php part("gtm", ["position" => "body"]); ?>

  <div id="apply" class="lower">
    <?php part("header"); ?>

    <main>
      <header class="fv js-fv">
        <?php part("linework", ["name" => "support"]); ?>

        <p class="common-label wide">APPLICATION</p>
        <h1 class="title common-inner js-fade"><?php the_title(); ?></h1>
      </header>
      <?php part("breadcrumb"); ?>

      <div class="body common-inner">
        <p class="lead js-fade">
          エントリーいただいた方専用のフォームです。<br>
          小論文の入力と証明書のご提出をもって、応募が完了します。
        </p>

        <div class="formrun-embed js-fade" data-formrun-form="@miraitsunagu-apply" data-formrun-redirect="true" data-dynamic-init="true"></div>
      </div>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>