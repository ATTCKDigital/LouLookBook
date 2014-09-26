<?php get_header(); ?>
  <section class="full_wide archive">
  	<article class="clearfix">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	

      <header>
        <div class="article_info">
          <h1><?php the_title();?></h1>
        </div>
      </header>
      <div class="entry">
  		  <?php the_content();?>
      </div>
  	<?php endwhile; ?>
		
  	<?php endif; ?>

  	</article>
  </section>
	
<?php get_footer(); ?>
