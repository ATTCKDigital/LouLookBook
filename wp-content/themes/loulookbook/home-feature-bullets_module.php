<!-- home feature bullets -->
<section class="featured_bullets full_wide clearfix">
  <?php
  $args = array(
    'post_type' => 'page',
    'post__in' => array(36)
    );
  query_posts($args);
  
  if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="feature">
      <?php  $image = get_field('iphone_image');
        if( !empty($image) ): ?>
      	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="phone"/>
      <?php endif; ?>
      <?php the_post_thumbnail('full');?>
    </div>
    
      <?php if( have_rows('feature_bullet') ): while ( have_rows('feature_bullet') ) : the_row(); ?>
        <article class="feature_box column column_1">
          <mark class="red_line"></mark>
          <h2><?php the_sub_field('feature_title');?></h2>
          <p><?php the_sub_field('feature_text');?></p>
        </article>
      <?php endwhile; endif;?>
     
    
  <?php endwhile; endif; wp_reset_query(); ?>
  <mark class="tab"></mark>
</section>
