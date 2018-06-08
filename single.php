<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pepsus
 */

get_header('inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			

<section id="news" class="layout-post">
        <div class="container">
		
            <div class="row">

					<div class="blog col-md-9">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php if ( in_category('3') ) { ?>
                                    <div class="post-cat-three">
                            <?php } else { ?>
                                    <div class="post">
                            <?php } ?>
                            <!-- Mostra o título como um link para o link permanente do post -->
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                <hr>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
                            <br>
                            <!-- Mostra a data e um link para outros posts do mesmo autor. -->
                            <small><?php the_time('j \d\e F \d\e Y') ?> por <?php the_author_posts_link() ?></small>

                            <!-- Mostra o conteúdo do post em uma DIV -->
                            <div class="entry">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_content(); ?></a>
                            </div>

                            <!-- Mostra uma lista de categorias do post separadas por vírgula -->
                            <p class="categoria-posts">Postado em <?php the_category(', '); ?></p>
                            </div> <!-- Fecha a primeira DIV -->

							<?php echo DISPLAY_ULTIMATE_PLUS(); ?>

							<?php // If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							?>

                            <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
                            <?php endwhile; else: ?>

                            <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
                            <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
                            <p>Sorry, no posts matched your criteria.</p>

                            <!-- Término verdadeiro do Loop -->
                            <?php endif; ?>


					</div>
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar(); ?>
					</aside>
				</div>
        </div>
	</section>

		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
