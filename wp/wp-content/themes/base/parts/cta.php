<?php
// 全ページ共通の末尾3セクション（LINE / 応募CTA / お問い合わせ）
// ▼ 要クライアント確認：応募締切日はカンプ記載値のまま
//   締切日は将来ACFで管理する想定（entryページの募集期間切替と合わせて対応）
?>

<section class="common-line common-inner">
  <h2 class="common-subtitle js-fade">最新情報をLINEでお届け</h2>

  <div class="body js-fade">
    <img class="logo" src="/assets/images/common/logo03.svg" alt="" width="304" height="236">

    <div class="text">
      <p class="note">
        応募〆切などの大切なお知らせを<br class="sp">お届けします。<br class="pc">ご不明な点は、<br class="sp">LINEからお気軽にお問い合わせください。
      </p>
      <img class="qr" src="/assets/images/common/line-qr.png" alt="LINE公式アカウントのQRコード" width="360" height="360">
      <p class="id">公式LINE ID：@miraitsunagu</p>
      <a class="common-btn line" href="https://lin.ee/XS3E5pT" target="_blank" rel="noopener">友だち追加する</a>
    </div>
  </div>
</section>

<section class="common-cta js-stagger">
  <h2>あなたの「学びたい」を<br>ここから</h2>
  <p class="read">まずは応募して、<br class="sp">未来への一歩を踏み出してください。</p>
  <a class="common-btn large" href="<?php echo esc_url(home_url("/entry/")); ?>">応募する</a>
  <p class="note">応募締切　2026年10月31日（土）</p>
</section>

<section class="common-contact">
  <p class="common-label wide">CONTACT</p>

  <div class="common-inner">
    <h2 class="common-title js-fade">お問い合わせ</h2>

    <div class="body js-stagger">
      <p>制度に関するご質問から、学内掲示用ポスター・チラシ等の送付依頼まで。学生・保護者・教育関係者、どなたでもご利用いただけます。</p>
      <a class="common-btn large" href="<?php echo esc_url(home_url("/contact/")); ?>">お問合せフォーム</a>
    </div>
  </div>
</section>