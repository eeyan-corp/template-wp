<script src="/assets/js/script.js?v=<?php echo filemtime(ABSPATH . "../assets/js/script.js"); ?>" defer></script>

<?php // formrunの埋め込みフォームを設置しているページでのみSDKを読み込む ?>
<?php if (is_page(["entry", "apply", "contact"])) : ?>
  <script src="https://sdk.form.run/js/v2/embed.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>
