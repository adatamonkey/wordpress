<?php

/**
 * Template Name: Tag
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
        'orderby' => 'id',
        'order' => 'desc'
      );
      $tags = get_tags($args);
      foreach ($tags as $tag) {
        echo "<li><a href=\"" . get_tag_link($tag->term_id) . "\">" . $tag->name . "";
        echo "<span class=\"tag-link-count\"> (" . $tag->count . ")";
        if (!empty($tag->tag_description)) echo " - " . $tag->tag_description;
        echo "</span></a></li>\n";
      } ?>
    </ul>
  </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>​
