<?php


get_header('inner');
?>

   <main class="page-inner">


<section id="news">
        <div class="container">
            <div class="row">
                    <div class="col-md-10">
                            <h2 class="title-border-left">Notícias</h2>
                    </div>
			</div>
			
            <div class="row">

					<div class="blog col-md-9">
                            <!-- Começa o Loop. -->
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php if ( in_category('3') ) { ?>
                                    <div class="post-cat-three">
                            <?php } else { ?>
                                    <div class="post">
                            <?php } ?>
                            <!-- Mostra o título como um link para o link permanente do post -->
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                <hr>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full', array( 'class'  => 'img-responsive' ) ); ?></a>
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
           
   </main>

<?php

get_footer();