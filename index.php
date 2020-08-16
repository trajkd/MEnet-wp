<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo( 'name' ) ?></title>

  <!-- Bootstrap core CSS -->
  <link href="/wp-content/themes/MEnet-wp/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/wp-content/themes/MEnet-wp/static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="//db.onlinewebfonts.com/c/7f0bd87d173a5d980ef018411a95686a?family=BlairMdITC+TT" rel="stylesheet" type="text/css"/>

  <!-- Custom styles for this template -->
  <link href="/wp-content/themes/MEnet-wp/static/css/clean-blog.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/MEnet-wp/static/css/boffi.css">

</head>

<body>
  <div id="sidebar-section-peripherial">
    <?php get_sidebar(); ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="/">
          <span>Mind Empathy netWorking</span>
          <span class='tagline'>
            <span>
              <span class='bracket'>\([\)</span>
              <span class='initial'>E</span><span class='hidden nameFull mpathy'>mpathy</span>
              <span>=</span>
              <span class='initial'>m</span><span class='hidden nameFull ind'>ind</span>
              <span class='initial'>c</span><span class='hidden nameFull reativity'>reativity</span><span>²</span>
              <span class='bracket'>\(]\)</span>
              <!-- \([ E = mc^2 ]\) -->
            </span>
          </span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead">
      <div class="overlay particle-network-animation"></div>
      <div class="overlay particle-network-animation exploratory"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>ME net</h1>
              <span class="subheading"><p><strong>Your idea is a valid one</strong></p> Inside <span class="blair"><span class="m">M</span>E netWork</span> you will find collaboration and brainstorming to achieve it</span>
              <p><button class="btn btn-primary start">Explore</button></p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="exploration" style="display: none;">
      <div class="overlay particle-network-animation"></div>
    </div>

    <div class="container" id="blogposts">
        <div class="row" data-aos="slide-up">
            <div class="col-md-10 col-lg-8">
                <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="post-preview">
                    <a href="<?php the_permalink() ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <h3 class="post-subtitle"><?php the_excerpt(__('(more…)')); ?></h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#"><?php the_author(); ?></a> on <?php the_date(); ?></p>
                </div>
                <hr>
                <?php endwhile;
                wp_reset_postdata();
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

     <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/MindEmpathyNET">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/me-net-mind-empathy-networking/">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="mailto:hello@mindempathy.net">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="container copyright">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Copyright &copy; ME net 2020</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="/wp-content/themes/MEnet-wp/static/vendor/jquery/jquery.min.js"></script>
  <script src="/wp-content/themes/MEnet-wp/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/wp-content/themes/MEnet-wp/static/js/clean-blog.js"></script>
  <script async src="/wp-content/themes/MEnet-wp/static/js/networkanimation.js"></script>
  <script src="/wp-content/themes/MEnet-wp/static/js/sidebar.js"></script>

</body>

</html>