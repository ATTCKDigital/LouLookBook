<!-- homepage ipad slideshow -->
<section class="ipad_slideshow full_wide clearfix">
  
  <?php
  $args = array(
    'post_type' => 'page',
    'post__in' => array(19)
    );
  query_posts($args);
  
  if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="feature_box">
    <mark class="red_line"></mark>
    <?php if(get_field('title')):?>
      <h2><?php the_field('title');?></h2>
    <?php endif;?>
    <?php the_content();?>
    <?php if(get_field('cta_button_text')):?>
      <a href="<?php the_field('cta_button_text_link');?>" title="<?php the_field('cta_button_text');?>" class="button"><?php the_field('cta_button_text');?></a>
    <?php endif;?>
  </article>
  <?php
    $images = get_field('gallery');
    if( $images ): ?>
    <!-- ipad slideshow -->
      <div class="slideshow">
        <div id="slides">
          <?php foreach( $images as $image ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endforeach; ?>
        </div>
      </div>
      <!-- end ipad slideshow -->
  <?php endif; ?>
  <?php endwhile; endif; wp_reset_query(); ?>
  
</section>
