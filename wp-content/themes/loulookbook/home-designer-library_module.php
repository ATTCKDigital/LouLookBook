<!-- home designer library -->
<section class="designer_library page_wide clearfix">
  <?php
  $args = array(
    'post_type' => 'page',
    'post__in' => array(29)
    );
  query_posts($args);
  
  if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="look_book">
      <div class="cropper"><?php the_post_thumbnail('full');?></div>
    </div>
    <article class="feature_box">
      <mark class="red_line"></mark>
      <?php if(get_field('title')):?>
        <h2><?php the_field('title');?></h2>
      <?php endif;?>
      <?php the_content();?>
    </article>
    
  <?php endwhile; endif; wp_reset_query(); ?>
  <mark class="tab"></mark>
</section>
