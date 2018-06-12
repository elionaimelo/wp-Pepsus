<!doctype html>
  <html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <style>
          .owl-carousel {
                display: block !important;
            }
    </style>
    

    <?php wp_head(); ?>
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav">

     
      <div class="top-search">
          <div class="container">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <!-- <input type="text" class="form-control" placeholder="Pesquisar"> -->
                  <?php get_search_form(); ?>
                  <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
              </div>
          </div>
      </div>


      <div class="container">            

          <div class="attr-nav">
              <ul>
                  <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
              </ul>
          </div>

          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="<?php echo home_url(); ?>">
                  
				  <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo logo-display">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/logo-blue.png" class="logo img-responsive logo-scrolled">
              </a>
          </div>

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
          </div>
      </div>   

     
  </nav>
  
 