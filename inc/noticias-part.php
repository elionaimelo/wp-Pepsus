<section id="news">
        <div class="container">
            <div class="row">
                    <div class="col-md-10">
                            <h2 class="title-border-left">Notícias</h2>
                    </div>
                    <div class="col-md-2">
                            <a href="<?php echo home_url(); ?>/noticias" class="btn btn-default">
                                    Todas as notícias
                                </a> 
                    </div>
			</div>
			
            <div class="row">

				<?php
                   
                    $args = array(
                        'cat' => 6, //ID da sua categoria
                        'posts_per_page ' => 3, // Número de posts a exibir
                    );

                    $novo_loop = new WP_Query( $args );

                    if ( $novo_loop->have_posts() ) : while ( $novo_loop->have_posts() ) : $novo_loop->the_post();	
                ?>

                   <div class="col-md-4">
							<div class="card-news">
								<div class="card-news-image">
                                    <?php
                                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                the_post_thumbnail( 'full', array( 'class'  => 'img-responsive' ) ); // show featured image
                                            } 
                                        ?>
								</div>
								<article class="card-news-infor">
                                    <h5><?php the_title(); ?></h5>
                                    <p>Por <?php the_author_posts_link() ?> postado em <span><?php the_category(',') ?></span> Tags: <span><?php the_tags('',','); ?></span></p>
                                    <p class="data"><?php echo get_the_date(); ?></p>
									<p>
                                    <?php 
                                            $excerpt = get_the_excerpt();
                                            $excerpt = substr( $excerpt , 0, 180); 
                                            echo $excerpt; 
                                    ?>
									</p>
									<hr class="border-blue">
								</article>

								<a href="<?php the_permalink(); ?>" class="btn btn-color2">
									Saiba mais
								</a> 
							</div>
						</div>
                <?php
                    endwhile;
                    else :
                ?>
                    CASO NÃO EXISTA POSTS
                <?php
                    endif;
                    // Reseta as queries
                    wp_reset_postdata();
                ?>
					

               
            </div>
        </div>
	</section>