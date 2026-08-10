<!DOCTYPE html>
<html lang="ja">

<?php part("head"); ?>

<body>
  <?php part("gtm", ["position" => "body"]); ?>

  <div id="contact" class="lower">
    <?php part("header"); ?>

    <main>
      <header class="fv js-fv">
        <?php part("linework", ["name" => "support"]); ?>

        <p class="common-label wide">CONTACT</p>
        <h1 class="title common-inner js-fade"><?php the_title(); ?></h1>
      </header>
      <?php part("breadcrumb"); ?>

      <div class="body common-inner">
        <p class="lead js-fade">
          「自分は対象になる？」「応募方法って難しい？」——応募を決めていなくても大丈夫です。<br>
          奨学金に関するご質問や、学校での告知のご相談まで、お気軽にお寄せください。<br>
          学生・保護者・大学関係者、どなたでもご利用いただけます。
        </p>
        <div class="formrun-embed js-fade" data-formrun-form="@miraitsunagu-contact" data-formrun-redirect="true"></div>
      </div>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>