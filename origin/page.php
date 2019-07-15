<?php get_header(); ?>
<div id="contents">
  <div class="contents__inner">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="ttl">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <?php the_post_thumbnail(); ?>
          <?php the_content(); ?>
          <?php comments_template(); ?>
        </div>
      <?php endwhile; ?>
    <?php else :
      ?><p>表示する記事がありません</p>
    <?php endif; ?>
  </div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
