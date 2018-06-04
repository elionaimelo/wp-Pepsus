<!doctype html>
  <html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEPSUS</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    

    <link rel="stylesheet" href="styles/main.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    
    <script src="scripts/vendor/modernizr.js"></script>

    <?php wp_head(); ?>
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav blue">

      <!-- Start Top Search -->
      <div class="top-search">
          <div class="container">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Pesquisar">
                  <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
              </div>
          </div>
      </div>
      <!-- End Top Search -->

      <div class="container">            
          <!-- Start Atribute Navigation -->
          <div class="attr-nav">
              <ul>
                  <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
              </ul>
          </div>
          <!-- End Atribute Navigation -->

          <!-- Start Header Navigation -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="index.php">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo img-responsive" alt="">
              </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
              <!-- <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                  <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                  <li><a href="#">Sobre</a></li>
                  <li><a href="#">Área de atuação</a></li>
                  <li><a href="#">Membros</a></li>
                  <li><a href="#">Notícias</a></li>
                  <li><a href="#">Contato</a></li>
              </ul> -->

               <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 1,
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
                ?>
          </div><!-- /.navbar-collapse -->
      </div>   
  </nav>
 
