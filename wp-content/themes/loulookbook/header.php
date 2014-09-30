<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!-- <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">  -->
<meta property="og:title" content="<?php the_title();?>"/>
<meta property="og:url" content="<?php the_permalink();?>"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { echo wp_title(); } elseif (is_category()) {echo '&raquo; Press';} ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri() . '/dist/html5shiv.js'; ?>"></script>
<![endif]-->


<?php wp_head(); ?>
</head>
<body class="pagetype-<?php if(is_home()){ echo 'home';}elseif(is_category()){echo 'category';}else{echo 'article';}?>">
  <section id="top_container" class="page_wide">
    <header class="global">
      <nav class="clearfix">
        <h4><a href="/">Lou</a></h4>
        <div class="social<?php if(!(is_home())){ echo ' invert';}?>">
          <a href="http://instagram.com/loulookbook" class="social_icon" target="_blank" id="instagram">Instagram</a>
          <a href="https://www.facebook.com/loulookbook" class="social_icon" target="_blank" id="facebook">Facebook</a>
          <a href="https://twitter.com/loulookbook" class="social_icon" target="_blank" id="twitter">Twitter</a>
          <a href="" class="button">Download<?if(!(wp_is_mobile())):?> Lou<?php endif;?></a>
        </div>
      </nav>
    </header>