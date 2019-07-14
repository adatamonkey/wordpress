<?php get_header(); ?>

<div>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="ttl">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <ul>
          <li class="item">
            <date class="date">
              <?php echo get_the_date(); ?>
            </date>
          </li>
          <li class="item">
            <?php the_category(', '); ?>
          </li>
          <li class="item">
            <?php the_tags(''); ?>
          </li>
        </ul>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php $args = array(
          'before' => '<div class="page-split">',
          'after' => '</div>',
          'link_before' => '<span>',
          'link_after' => '</span>',
        );
        wp_link_pages($args);
        ?>
        <?php comments_template(); ?>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
    <p>表示する記事がありません</p>
  <?php endif; ?>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
