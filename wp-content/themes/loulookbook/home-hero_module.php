<section class="hero full_wide">
  <img class="hero_image" src="<?php echo get_template_directory_uri() . '/images/reflections.jpg'; ?>" />
  <?php
    $args = array(
      'cat' => 3,
      'posts_per_page' => 1
    );
    $query = new WP_Query( $args );
    if (have_posts()) : while (have_posts()) : the_post();
  ?>
    <article>
      <div class="logo_date">
        <?php the_post_thumbnail();?>
        <time datetime="<?php the_time('jS F, Y') ?>"><?php the_time('F d, Y') ?></time>
      </div>
        <?php the_excerpt()?>
        <a class="read_more" href="<?php the_permalink();?>">Read More</a>
    </article>
  <?php endwhile; endif; wp_reset_query(); ?>
</section>
