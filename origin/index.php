<?php get_header(); ?>

<div id="contents">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <div class="post">
        <div class="post__thumbnailContainer">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </div>
        <div class="post__detail">
          <a href="<?php the_permalink(); ?>">
            <h3 class="post__title">
              <?php the_title(); ?>
            </h3>
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
        </div>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
    <p>表示する記事がありません</p>
  <?php endif; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <ul class="p-pagenation">
      <li class="prevpostslink"><?php next_posts_link('Prev'); ?></li>
      <li class="prevpostslink"><?php previous_posts_link('Next'); ?></li>
    </ul>
  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
