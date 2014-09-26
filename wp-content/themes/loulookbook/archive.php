<?php get_header(); ?>
  <section class="full_wide archive">
  	<h1>Press and Accolades</h1>
  	<article class="clearfix">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	

      <header>
        <div class="article_info">
          <time datetime="<?php the_time('M d') ?>"><?php the_time('M d') ?></time>
          <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        </div>
      </header>
      <div class="entry">
  		  <?php the_excerpt();?>
  		  <a class="read_more" href="<?php the_permalink();?>"><span>Read More </span>&#x2192;</a>
      </div>
      <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full');?></a>
		  
  	<?php endwhile; ?>
		
  	<?php endif; ?>

  	</article>
  </section>
	
<?php get_footer(); ?>
