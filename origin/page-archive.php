<?php

/**
 * Template Name: Archive
 */
?>

<?php get_header(); ?>

<div id="contents">
  <div class="contents__inner">
    <h2 class="ttl">
      <?php the_title(); ?>
    </h2>

    <ul>
      <?php
      $args = array(
        'type'            => 'monthly',
        'limit'           => '',
        'format'          => 'html',
        'before'          => '',
        'after'           => '',
        'show_post_count' => false,
        'echo'            => 1,
        'order'           => 'DESC',
        'post_type'     => 'post'
      );
      wp_get_archives($args);
      ?>
    </ul>
  </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>​
