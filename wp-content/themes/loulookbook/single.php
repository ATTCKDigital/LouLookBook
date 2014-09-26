<?php get_header(); ?>
  <section class="full_wide">
  	<article class="clearfix">

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $image = get_field('top_featured_image');
        if( !empty($image) ): ?>
      	<img class="top_image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php if(get_field('top_featured_video')):?>
        <div class="video_wrapper">
          <div class="video">
            <?php the_field('top_featured_video');?>
          </div>
        </div>
      <?php endif;?>
    
      <header>
        <div class="article_info">
          <time datetime="<?php the_time('F d, Y') ?>"><?php the_time('F d, Y') ?></time>
          <h1><?php the_title();?></h1>
          <small class="author"><span>By</span> <?php the_author(); ?></small>
        </div>
  		  <?php the_post_thumbnail('full');?>
      </header>
      <div class="entry">
  		  <?php the_content();?>
  		</div>
      <div class="share_tools">
        <?php if(get_field('original_article_link')):?><a href="<?php the_field('original_article_link');?>" target="_blank" class="original">Read Original Article &#x2192;</a><?php endif;?>
        <span>Share Article</span>
        <div class="social">
          <a href="" class="social_icon" target="_blank" id="twitter">Twitter</a>
          <a href="" class="social_icon" target="_blank" id="facebook">Facebook</a>
          <a href="" class="social_icon" target="_blank" id="link">Link</a>
        </div>
      </div>
  	<?php endwhile; endif; ?>

  	</article>
  </section>


<?php get_footer(); ?>
