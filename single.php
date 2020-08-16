<!DOCTYPE html>
<html>
<?php while ( have_posts() ) : the_post(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php the_title(); ?> - <?php bloginfo( 'name' ) ?></title>
    <link rel="stylesheet" href="/wp-content/themes/MEnet-wp/static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="/wp-content/themes/MEnet-wp/static/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/wp-content/themes/MEnet-wp/static/css/permalink.css">
    <!-- Custom fonts for this template -->
    <link href="/wp-content/themes/MEnet-wp/static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="/">ME net</a><button data-toggle="collapse"
                data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/about/">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Blog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contact/">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('<?php if (get_the_post_thumbnail_url()) echo get_the_post_thumbnail_url(); else echo '/wp-content/themes/MEnet-wp/static/img/post-bg.jpg'; ?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                        <h1><br><strong><?php the_title(); ?></strong></h1><span class="meta">Posted
                            by&nbsp;<em><span style="text-decoration: underline;"><?php the_author(); ?></span></em> on <?php the_date(); ?>
                            <br><br></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
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
                    <p class="text-muted copyright">Copyright &copy; ME net 2020</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="/wp-content/themes/MEnet-wp/static/vendor/jquery/jquery.min.js"></script>
    <script src="/wp-content/themes/MEnet-wp/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/wp-content/themes/MEnet-wp/static/bootstrap/js/bootstrap.min.js"></script>
    <script src="/wp-content/themes/MEnet-wp/static/js/clean-blog.js"></script>
</body>
<?php endwhile; ?>
</html>