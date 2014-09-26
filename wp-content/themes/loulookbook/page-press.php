<?php 
  /*
  Template Name: Press
  */
get_header(); ?>
<section class="full_wide archive">
	<article class="clearfix">
    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status'=> 'publish'
      );
      $query = new WP_Query( $args );
      if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
    ?>
  
    <header>
      <div class="article_info">
        <h1><?php the_title();?></h1>
      </div>
    </header>
    <div class="entry">
		  <?php the_content();?>
    </div>
	<?php endwhile; endif; ?>

	</article>
</section>
<?php get_footer(); ?>