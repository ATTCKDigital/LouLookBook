<?php
  if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 450, 300, true );
    // add_image_size('featured-small',452,284,true);
    // add_image_size('thumb-grid',310,150,true);
    // add_image_size('featured-big',1010,532,true);
    // add_image_size('more-swoon',293,193,array( 'left', 'top' ));
    // add_image_size('port-box',450,238,true);
    add_image_size('top-home-carousel',928,600, true);
    add_image_size('editorial-home-carousel',928,637, true);
    add_image_size('travel-carousel',1247,645, true);
    add_image_size('mood-board-home',9999,255, false );
    add_image_size('poke-around',459,277, true );
    add_image_size('poke-around-small',400,400, true );
    add_image_size('archive',594,432, true );
    add_image_size('travel-archive',594,432, true );
    add_image_size('article',1247,830 );
    add_image_size('shop-thumb',300,300 );
    add_image_size('story-shop-large',1247,1247 );
    add_image_size('related-content',600,484, true );
  
  }
  // Changing excerpt length
  function new_excerpt_length($length) {
    return 20;
  }
  add_filter('excerpt_length', 'new_excerpt_length');

  // Changing excerpt more
  function new_excerpt_more($more) {
    if (is_category('travel')) {
      return '[&hellip;]';
    } else {
      return '&hellip;';
    }
  }
  add_filter('excerpt_more', 'new_excerpt_more');
  
  
  function scripts_styles()
  {

    // Other scripts
    wp_register_script( 'home', get_template_directory_uri() . '/js/scripts_home.js', array( 'jquery' ), '', true);


    // Other stylesheets
    wp_register_style( 'hero', get_template_directory_uri() . '/css/home-hero_module.css' );


    // Global styles 

    if(is_home()) {
      wp_enqueue_style( 'hero' );
      wp_enqueue_script( 'home' );
      
    }

    if(is_single()) {
      wp_enqueue_style( 'single-basic' );
      wp_enqueue_style( 'single-editorial' );
      wp_enqueue_style( 'mood-board-module' );
      wp_enqueue_style( 'shop-archive-module' );
      wp_enqueue_style( 'shop-story-module' );
   	  wp_enqueue_style( 'poke-around' );    
   	  wp_enqueue_style( 'more-content-module');
      wp_enqueue_style( 'top-story-carousel' );
      wp_enqueue_script( 'scripts-article' );   
      wp_enqueue_script( 'article-carousel' );   
      wp_enqueue_script( 'fancybox-mood' );
      wp_enqueue_script( 'fancybox-article' );
    }


  }
  add_action( 'wp_enqueue_scripts', 'scripts_styles' );
?>