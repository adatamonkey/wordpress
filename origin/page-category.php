<?php

/**
 * Template Name: Category
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
      $categories = get_categories($args);
      foreach ($categories as $category) {
        echo "<li><a href=\"" . get_category_link($category->term_id) . "\">" . $category->name . "";
        echo "<span class=\"tag-link-count\"> (" . $category->count . ")";
        if (!empty($category->category_description)) echo " - " . $category->category_description;
        echo "</span></a></li>\n";
      } ?>
    </ul>
  </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>​
