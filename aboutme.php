<?php /* Template Name: About Me */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" href="/wp-content/themes/DPAitaly-wp/static/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/boffi-libs.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/boffi.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/clean-blog.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/style.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/static.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/dipaolo.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/dipaolo2.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/header.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/lago.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/DPAitaly-wp/static/css/lago-style.css">
	<script src="/wp-content/themes/DPAitaly-wp/static/js/main.js"></script>
  	<script src="https://kit.fontawesome.com/4c0b3ae1d6.js" crossorigin="anonymous"></script>
	<title>About ME - <?php bloginfo( 'name' ) ?></title>
</head>
<body>
  <div id="sidebar-section-peripherial">
    <?php get_sidebar(); ?>
  <div class="rowContainer ContentPage" id="container_15714">
    <div class="staticContent_Wrapper wrapper_without_nav">
      <div class="static_content histoire">
                          
                          <?php 
                          $post = get_post();
                          echo apply_filters('the_content', $post->post_content);
                          ?>

        </div>
      </div>
    </div>
  </div>
<script src="/wp-content/themes/DPAitaly-wp/static/js/jquery.js"></script>
<script src="/wp-content/themes/DPAitaly-wp/static/js/sidebar.js"></script>
</body>
</html>