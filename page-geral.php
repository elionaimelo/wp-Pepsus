<?php

/* Template Name: Gerais */


get_header('inner');
?>

   <main class="page-inner">
        <section class="sobre">
                <div class="container">
                    <div class="row">
                        <!-- se exitir imagem o layout é divido em duas colunas(duas seção de 6) caso contrário é exibido em uma linha(uma seção de 12) --> 
                        <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                            <div class="col-md-6">
                                <h2 class="title-border-left"><?php the_title(); ?></h2>
                                <p>
                                <?php
                                        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                                            <div class="entry-content-page">
                                                <?php the_content(); ?> <!-- Page Content -->
                                            </div><!-- .entry-content-page -->
                                        <?php
                                        endwhile; //resetting the page loop
                                        wp_reset_query(); //resetting the page query
                                    ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <?php
                                    the_post_thumbnail( 'full', array( 'class'  => 'img-responsive' ) ); // show featured image
                                ?>
                            </div>
                            <?php   
                            } else {
                            ?>
                            <div class="col-md-12">
                                <?php
                                    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                                        <div class="entry-content-page">
                                            <?php the_content(); ?> <!-- Page Content -->
                                        </div><!-- .entry-content-page -->
                                    <?php
                                    endwhile; //resetting the page loop
                                    wp_reset_query(); //resetting the page query
                                }
                                ?>
                            </div>          
                        </div>
                    </div>
                </div>
            </section>
        
           
            
        <?php include('inc/areas-atuacao-part.php') ?>
        
        <?php include('inc/membros-part.php') ?>

        <?php include('inc/participacao-part.php') ?>

        <?php include('inc/noticias-part.php') ?>
        
           
   </main>

<?php

get_footer();