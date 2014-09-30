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
          <a href="https://twitter.com/home/?status=Check out this post: <?php the_permalink() ?> via @loulookbook" class="social_icon" target="_blank" id="twitter">Twitter</a>
          <a href="https://www.facebook.com/sharer/sharer.php" class="social_icon" target="_blank" id="facebook">Facebook</a>
          <a href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Share This" class="social_icon" target="_blank" id="link">Link</a>
        </div>
        <a href="/press" target="_blank" class="original">See All Articles &#x2192;</a>
      </div>
  	<?php endwhile; endif; ?>

  	</article>
  </section>


<?php get_footer(); ?>
