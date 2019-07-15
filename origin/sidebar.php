<div id="sidebar">
  <?php
  if (is_active_sidebar('category_widget')) : ?>
    <?php dynamic_sidebar('category_widget'); ?>
    <?php dynamic_sidebar('tag_widget'); ?>
    <?php dynamic_sidebar('archive_widget'); ?>
  <?php else : ?>
    <div class="widget">
      <h2>No Widget</h2>
      <p>ウィジットは設定されていません。</p>
    </div>
  <?php endif; ?>
</div>
