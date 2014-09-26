<section class="latest full_wide clearfix">
  <h2>See what others are saying</h2>
  <?php
    $args = array(
      'cat' => 2,
      'posts_per_page' => 3
    );
    $query = new WP_Query( $args );
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
  ?>
    <article class="column_1 column">
      <a href="<?php the_permalink();?>" class="logo_wrap"><?php the_post_thumbnail();?></a>
      <a class="read_more" href="<?php the_permalink();?>"><span>Read More </span>&#x2192;</a>
    </article>
  <?php endwhile; endif; wp_reset_query(); ?>
</section>
