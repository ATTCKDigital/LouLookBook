<?php get_header(); ?>
  <section class="full_wide archive">
  	<h1>Press and Accolades</h1>
  	<section class="archive_list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      	<article class="clearfix" id="load_more">
            <time datetime="<?php the_time('M d') ?>"><?php the_time('M d') ?></time>
            <div class="entry">
        		  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
              <?php the_excerpt();?>
              <a href="<?php the_permalink();?>" class="post_image"><?php the_post_thumbnail('full');?></a>
        		  <a class="read_more" href="<?php the_permalink();?>"><span>Read More </span>&#x2192;</a>
            </div>
          
  	    </article>
  	  <?php endwhile; endif; ?>
    </section>
    <div class="more_download"> 
      <?php
      $args = array(
        'post_type' => 'page',
        'post__in' => array(57)
        );
      query_posts($args);

      if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_field('press_kit_pdf');?>" target="_blank" class="download"><mark></mark>Download Press Kit</a>
      <?php endwhile; endif; ?>
    </div>  
  </section>
	
<?php get_footer(); ?>
