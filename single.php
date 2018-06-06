<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pepsus
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			

<section id="news">
        <div class="container">
            <div class="row">
                    <div class="col-md-10">
                            <h2 class="title-border-left">Notícias</h2>
                    </div>
			</div>
			
            <div class="row">

					<div class="blog col-md-9">
					<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>


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
