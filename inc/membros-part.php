<section id="members">
                <div class="container">
                    <h2 class="title-border-left">Membros</h2>


                    <div class="row">
                    <?php 
                        $args = array( 'post_type' => 'membros2', 'posts_per_page' => 10 );

                        $the_query = new WP_Query( $args ); 

                        ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-image">
                                        
                                        <?php
                                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                the_post_thumbnail( 'full', array( 'class'  => 'img-responsive' ) ); // show featured image
                                            } 
                                        ?>
                                    </div>
                                    <div class="card-infor">
                                        <article>
                                                
                                                <h4><?php the_title(); ?></h4>
                                                <h6><?php 
                                                  the_cfc_field('infors', 'profissao');
                                                ?></h6>
                                                
                                                <p>
                                                    <?php the_content(); ?>
                                                </p>
                                                <hr class="border-blue">
                                        </article>
                                        <div class="social-buttons">
                                            <a href="<?php echo do_shortcode('[rwmb_meta meta_key="prefix-url_1"]')?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-lattes.png" alt="">
                                            </a>
            
                                            <a href="<?php echo do_shortcode('[rwmb_meta meta_key="prefix-url_2"]')?>" target="_blank">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php wp_reset_postdata(); ?>
                            <?php endwhile; ?>
                            <?php else:  ?>
                                <p><?php _e( 'Houve um erro! Desculpe!' ); ?></p>
                            <?php endif; ?>
                            
                    </div>
                </div>
            </section>