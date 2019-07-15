<?php get_header(); ?>

<div id="contents">
  <div class="contents__inner">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="post__content">
          <h2 class="ttl">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <div class="meta">
            <date class="meta__date">
              <?php echo get_the_date(); ?>
            </date>
            <div class="meta__category">
              <?php the_category(', '); ?>
            </div>
            <ul class="meta__tag">
              <li>
                <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
              </li>
            </ul>
          </div>
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
        </div>
        <?php comments_template(); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <p>表示する記事がありません</p>
    <?php endif; ?>
  </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
