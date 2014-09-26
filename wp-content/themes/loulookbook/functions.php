<?php

  
  function scripts_styles()
  {

    // Other scripts
    wp_register_script( 'home', get_template_directory_uri() . '/js/scripts_home.js', array( 'jquery' ), '', true);
    wp_register_script( 'ipad-slideshow', get_template_directory_uri() . '/js/vendors/jquery.slides.min.js', array( 'home' ), '', true);


    // Other stylesheets
    wp_register_style( 'home', get_template_directory_uri() . '/css/home.css' );
    wp_register_style( 'hero', get_template_directory_uri() . '/css/home-hero_module.css' );
    wp_register_style( 'latest', get_template_directory_uri() . '/css/home-latest-posts_module.css' );
    wp_register_style( 'ipad-slideshow', get_template_directory_uri() . '/css/home-ipad-slideshow_module.css' );
    wp_register_style( 'designer-library', get_template_directory_uri() . '/css/home-designer-library_module.css' );
    wp_register_style( 'feature-bullets', get_template_directory_uri() . '/css/home-feature-bullets_module.css' );
    wp_register_style( 'download', get_template_directory_uri() . '/css/download_module.css' );
    wp_register_style( 'article', get_template_directory_uri() . '/css/article.css' );


    // Global styles 

    if(is_home()) {
      wp_enqueue_style( 'home' );
      wp_enqueue_style( 'hero' );
      wp_enqueue_style( 'latest' );
      wp_enqueue_style( 'ipad-slideshow' );
      wp_enqueue_style( 'designer-library' );
      wp_enqueue_style( 'feature-bullets' );
      wp_enqueue_style( 'download' );
      wp_enqueue_script( 'home' );
      wp_enqueue_script( 'ipad-slideshow' );
      
    }

    if(is_single() || is_page()) {
      wp_enqueue_style( 'article' );
    }


  }
  add_action( 'wp_enqueue_scripts', 'scripts_styles' );
?>