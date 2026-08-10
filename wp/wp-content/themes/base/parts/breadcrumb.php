<?php
if (is_front_page()) return;
$position = 1;
?>

<nav class="breadcrumb common-inner" aria-label="パンくずリスト">
  <ol itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="<?php echo esc_url(home_url("/")); ?>" itemprop="item">
        <span itemprop="name">トップ</span>
      </a>
      <meta itemprop="position" content="<?php echo $position++; ?>" />
    </li>

    <?php if (is_404()) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name">ページが見つかりません</span>
        <meta itemprop="position" content="<?php echo $position; ?>" />
      </li>

    <?php elseif (is_page()) : ?>
      <?php
      $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
      foreach ($ancestors as $ancestor) :
      ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="<?php echo esc_url(get_permalink($ancestor)); ?>" itemprop="item">
            <span itemprop="name"><?php echo esc_html(get_the_title($ancestor)); ?></span>
          </a>
          <meta itemprop="position" content="<?php echo $position++; ?>" />
        </li>
      <?php endforeach; ?>

      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name"><?php echo esc_html(get_the_title()); ?></span>
        <meta itemprop="position" content="<?php echo $position; ?>" />
      </li>
    <?php endif; ?>
  </ol>
</nav>
