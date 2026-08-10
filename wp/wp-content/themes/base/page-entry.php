<!DOCTYPE html>
<html lang="ja">

<?php part("head"); ?>

<body>
  <?php part("gtm", ["position" => "body"]); ?>

  <div id="entry" class="lower">
    <?php part("header"); ?>

    <main>
      <header class="fv js-fv">
        <?php part("linework", ["name" => "support"]); ?>

        <p class="common-label wide">ENTRY</p>
        <h1 class="title common-inner js-fade"><?php the_title(); ?></h1>
      </header>
      <?php part("breadcrumb"); ?>

      <div class="body common-inner">
        <p class="lead js-fade">
          奨学金への応募は、このエントリーフォームから。スマホで約3分で完了します。<br>
          送信完了後の自動返信メールにて、小論文の入力と証明書のご提出をいただく本申込フォームをご案内します。
        </p>

        <dl class="period js-fade">
          <dt>応募受付期間</dt>
          <dd>2026年8月10日〜10月31日</dd>
        </dl>
        <div class="formrun-embed js-fade" data-formrun-form="@miraitsunagu-entry" data-formrun-redirect="true"></div>
      </div>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>