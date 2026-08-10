<!DOCTYPE html>
<html lang="ja">

<?php part("head"); ?>

<body>
  <?php part("gtm", ["position" => "body"]); ?>

  <div id="top">
    <?php part("header"); ?>

    <main>
      <section class="fv js-fv">
        <?php part("linework", ["name" => "fv", "class" => "js-fade"]); ?>

        <h1 class="js-fade">可能性を広げ、人間力を育み、未来の自立をツナグ。</h1>

        <div class="lead js-stagger">
          <p>返済不要・伴走支援つきの給付型奨学金</p>
          <a class="common-btn" href="<?php echo esc_url(home_url("/entry/")); ?>">応募する</a>
        </div>
      </section>

      <section class="guide common-inner">
        <dl>
          <dt class="tag">応募受付期間</dt>
          <dd class="date">2026年8月10日〜10月31日</dd>
        </dl>

        <dl>
          <dt class="tag gray">準備のご案内</dt>
          <dd>応募には成績証明書・所得証明書等が必要です。<br>取得には時間がかかる場合があるため、<br class="sp">早めのご準備をおすすめします。</dd>
        </dl>
      </section>

      <section class="philosophy">
        <?php part("linework", ["name" => "philosophy", "class" => "js-fade"]); ?>

        <p class="common-label">01 / PHILOSOPHY</p>

        <div class="body common-inner js-stagger">
          <div class="visual">
            <img src="/assets/images/top/philosophy-image01.jpg" alt="" width="262" height="368">
          </div>

          <div class="text">
            <p>ミライヲツナグ奨学金は、延田グループ（株式会社延田エンタープライズ）が運営する給付型の学生支援制度です。経済的支援と伴走支援の両面で、あなたの学びと挑戦を支えます。</p>
            <?php if (launched("about")) : ?>
              <a class="common-btn" href="<?php echo esc_url(home_url("/about/")); ?>">運営者情報・メッセージ</a>
            <?php endif; ?>
          </div>

          <h2 class="copy"><span>学びたい子が環境によって</span><span>学びを諦めなくていい社会へ</span></h2>
        </div>
      </section>

      <section class="scholarship">
        <p class="common-label">02 / SCHOLARSHIP</p>

        <div class="common-inner">
          <h2 class="common-title js-fade from-left">返済不要の給付型奨学金</h2>

          <div class="amount js-stagger">
            <div class="figure">
              <p class="number">50<span>万円</span></p>
              <p>年額給付額（返済不要・年2回に分けて給付）<br>採用予定6名（応募状況により最大10名まで拡大の可能性）</p>
            </div>

            <dl class="js-fade from-right">
              <dt>返済不要</dt>
              <dd>「借りる」ではなく「もらえる」給付型。卒業後の返済は一切ありません。</dd>
              <dt>併用OK</dt>
              <dd>JASSO等の他の奨学金・授業料減免と併用できます。減額もありません。</dd>
            </dl>
          </div>

          <div class="target js-fade">
            <div class="head">
              <p class="tag">対象となる方</p>
              <p>次のすべてに当てはまる方が対象です。<small>※JASSO（日本学生支援機構）等、他の奨学金と併用できます。</small></p>
            </div>

            <ul>
              <li>ひとり親家庭（母子、父子、またはこれに準ずる家庭）で経済的困難のある方</li>
              <li>大学2年生・3年生の方</li>
              <li>在籍大学の学部・学科が定める標準修得単位数以上を修得しており、過去に留年がない方</li>
              <li>将来の明確な目標を持ち、社会に貢献したいという高い学習意欲・強い意志がある方</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="support">
        <?php part("linework", ["name" => "support", "class" => "js-fade"]); ?>

        <p class="common-label">03 ／ SUPPORT</p>

        <div class="body common-inner">
          <ul class="program js-stagger">
            <li>
              <img src="/assets/images/top/support-image01.jpg" alt="" width="273" height="189">
              <h3><span>ビジネスコア・</span><span>アカデミー</span></h3>
              <p>論理的思考、マーケティング基礎、ビジネスコミュニケーション。社会に出る上で核となる知識とスキルを集中的に学びます。</p>
            </li>
            <li>
              <img src="/assets/images/top/support-image02.jpg" alt="" width="273" height="189">
              <h3><span>実戦型プロジェクト・</span><span>ラボ</span></h3>
              <p>企業の実際の経営課題に、チームで挑む実戦プログラム。市場調査から課題の特定、担当者へのプレゼンまで体験します。</p>
            </li>
            <li>
              <img src="/assets/images/top/support-image03.jpg" alt="" width="273" height="189">
              <h3><span>キャリアデザイン・</span><span>スタジオ</span></h3>
              <p>自己解析からES添削・模擬面接、キャリアプラン構築まで。自分の経験と想いを礎に、未来の描き方を学びます。</p>
            </li>
          </ul>

          <div class="text js-stagger">
            <p>社会に出てからの自立を支える、無料の研修プログラムです。希望する奨学生の方にご参加いただけます。</p>
            <?php if (launched("training")) : ?>
              <a class="common-btn" href="<?php echo esc_url(home_url("/training/")); ?>">研修プログラムをくわしく見る</a>
            <?php endif; ?>
          </div>

          <h2 class="copy js-fade">研修プログラム<span>任意参加</span></h2>
        </div>
      </section>

      <section class="parents">
        <div class="card">
          <?php part("linework", ["name" => "parents", "class" => "js-fade"]); ?>

          <p class="common-label">04／ FOR PARENTS</p>

          <div class="body">
            <img class="js-fade from-left" src="/assets/images/top/parents-image.jpg" alt="" width="656" height="612">

            <div class="text js-stagger">
              <h2 class="common-title">保護者の皆さまへ</h2>
              <p>お子さまの学びを、ご家庭だけで抱えないでください。対象条件・応募の流れ・個人情報の安全性について、保護者の方にわかりやすくまとめています。</p>
              <?php if (launched("parents")) : ?>
                <a class="common-btn" href="<?php echo esc_url(home_url("/parents/")); ?>">保護者の方へ（詳細を見る）</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="schedule">
        <?php part("linework", ["name" => "schedule", "class" => "js-fade"]); ?>

        <p class="common-label wide">SCHEDULE</p>

        <div class="common-inner">
          <h2 class="common-title js-fade from-left">応募から給付まで</h2>

          <ol class="flow js-stagger">
            <li>
              <p class="date">2026年8月10日〜10月31日</p>
              <h3>応募</h3>
              <p>このサイトの応募フォームから、スマホで完結します。</p>
            </li>
            <li>
              <p class="date">11月〜12月</p>
              <h3>選考</h3>
              <p>一次審査（書類・小論文）と二次審査（面接）で、あなたの想いと意欲を見ます。12月に結果をお知らせします。</p>
            </li>
            <li>
              <p class="date">2027年1月〜3月</p>
              <h3>給付・研修スタート</h3>
              <p>1月下旬と3月下旬の2回に分けて給付（各25万円）。2〜3月には任意参加の研修プログラムを実施します。</p>
            </li>
          </ol>
        </div>
      </section>

      <section class="apply">
        <p class="common-label wide">HOW TO APPLY</p>
        <div class="common-inner">
          <h2 class="common-title js-fade from-left">応募はWebで3ステップ</h2>
          <p class="lead js-fade">
            所得証明などの大切な書類は、セキュリティに配慮した環境でお預かりします。<br>
            郵送の手間なくスマホからでも応募できます。
          </p>
          <ol class="step js-stagger">
            <li>
              <p class="number">STEP<span>01</span></p>
              <h3>エントリー</h3>
              <p>お名前・大学名など基本情報を入力（スマホで約3分）。</p>
            </li>
            <li>
              <p class="number">STEP<span>02</span></p>
              <h3>本申込</h3>
              <p>小論文（400〜800字）の入力と、成績証明書・所得証明書等のアップロード（郵送不要）。</p>
            </li>
            <li>
              <p class="number">STEP<span>03</span></p>
              <h3>結果発表</h3>
              <p>一次審査（書類）・二次審査（面接）を経て、12月に結果をご連絡します。</p>
            </li>
          </ol>

          <a class="common-btn large block js-fade" href="<?php echo esc_url(home_url("/entry/")); ?>">エントリーフォームへ</a>
        </div>
      </section>

      <?php if (launched("news")) : ?>
        <?php
        $news = new WP_Query([
          "post_type" => "news",
          "posts_per_page" => 3,
          "no_found_rows" => true,
        ]);
        ?>
        <section class="news">
          <p class="common-label wide">NEWS</p>

          <div class="common-inner">
            <h2 class="common-title js-fade from-left">新着情報</h2>

            <?php if ($news->have_posts()) : ?>
              <ul class="js-stagger">
                <?php while ($news->have_posts()) : $news->the_post(); ?>
                  <?php $terms = get_the_terms(get_the_ID(), "news_category"); ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <p class="meta">
                        <time datetime="<?php echo esc_attr(get_the_date("c")); ?>"><?php echo esc_html(get_the_date("Y.m.d")); ?></time>
                        <?php if (!is_wp_error($terms) && !empty($terms)) : ?>
                          <span class="tag"><?php echo esc_html($terms[0]->name); ?></span>
                        <?php endif; ?>
                      </p>
                      <p class="title"><?php the_title(); ?></p>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php else : ?>
              <p class="empty js-fade">現在お知らせはありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <a class="common-btn beige js-fade" href="<?php echo esc_url(get_post_type_archive_link("news")); ?>">新着情報一覧を見る</a>
          </div>
        </section>
      <?php endif; ?>

      <section class="faq">
        <p class="common-label wide">FAQ</p>

        <div class="common-inner">
          <h2 class="common-title js-fade from-left">よくあるご質問</h2>

          <ul class="js-stagger">
            <li class="js-accordion is-open">
              <button class="question js-accordion-trigger" type="button" aria-expanded="true">返済は必要ですか？</button>
              <div class="answer">
                <div>
                  <div class="body">
                    <p>返済不要の給付型です。卒業後の返済義務は一切ありません。</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="js-accordion">
              <button class="question js-accordion-trigger" type="button" aria-expanded="false">他の奨学金と併用できますか？</button>
              <div class="answer">
                <div>
                  <div class="body">
                    <p>JASSO（日本学生支援機構）などと併用可能です。</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="js-accordion">
              <button class="question js-accordion-trigger" type="button" aria-expanded="false">個人情報は安全に扱われますか？</button>
              <div class="answer">
                <div>
                  <div class="body">
                    <p>ご提出いただいた書類・情報は、本奨学金の選考・運営以外の目的には使用しません。取り扱いはプライバシーポリシーに定めています。</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>

          <?php if (launched("faq")) : ?>
            <a class="common-btn ghost js-fade" href="<?php echo esc_url(home_url("/faq/")); ?>">FAQ一覧を見る</a>
          <?php endif; ?>
        </div>
      </section>

      <?php part("cta"); ?>
    </main>

    <?php part("footer"); ?>
  </div>

  <?php part("scripts"); ?>
</body>

</html>