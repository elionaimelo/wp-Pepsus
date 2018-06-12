<footer class="footer">
        <div class="container">
                <div class="row">
                        <div class="col-md-2 col-xs-4">

                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo logo-display">

                        </div>
                        <div class="col-md-9 col-xs-6">
                            <nav class="nav-footer">
                                <!-- <ul>
                                    <li><a href="http://">HOME</a></li>
                                    <li><a href="http://">SOBRE</a></li>
                                    <li><a href="http://">MEMBROS</a></li>
                                    <li><a href="http://">NOTÍCIAS</a></li>
                                    <li><a href="http://">CONTATOS</a></li>
                                </ul> -->

                                <?php wp_nav_menu( array('theme_location' => 'menu-footer') ); ?>
                            </nav>
                        </div>
                        <div class="col-md-1 col-xs-1">
                                <?php 
                                    if(is_active_sidebar('widget-2'))
                                        dynamic_sidebar('widget-2')
                                ?>
                        </div>
                    </div>
        </div>
    </footer>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <!-- <script src="scripts/vendor.js"></script>
    
    <script src="scripts/plugins.js"></script>
    
    <script src="scripts/main.js"></script> -->

    

    <?php wp_footer(); ?>

  </body>
</html>
