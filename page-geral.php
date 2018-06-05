<?php

/* Template Name: Páginas gerais */


get_header('inner');
?>

   <main class="page-inner">
        <section class="sobre">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title-border-left">Sobre</h2>
                            <p>
                                O Programa de Educação Permanente em Saúde da Família (PEPSUS) é uma iniciativa de qualificação em saúde para profissionais que atuam na Estratégia de Saúde da Família e no Núcleo de Apoio à Saúde da Família. O programa possibilita a construção autônoma de um itinerário formativo, com foco nas necessidades de educação permanente do profissional e do território de saúde. O PEPSUS possui módulos de extensão, cursos de aperfeiçoamento e curso de especialização em Saúde da Família.
                
            O PEPSUS foi idealizado pelos seus Coordenadores (Lyane Ramalho – Coordenadora Geral e José Adailton da Silva – Coordenador Pedagógico) em 2016, objetivando contemplar a Educação Permanente para todos os profissionais que atuam na Atenção Primária à Saúde.
            
            O desafio é que tais estratégias possibilitem que os alunos sejam protagonistas de seu processo de aprendizagem, estimulando e provocando transformações positivas nos serviços de saúde ao qual estão vinculados. O método adotado é o da problematização, proporcionando que o conhecimento prévio seja aperfeiçoado e retorne ao serviço favorecendo a multiplicação de saberes. 
            
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-sobre.jpg" class="img-responsive img-sobre center-block" alt="">
                        </div>
                    </div>
                </div>
            </section>
        
            <section id="services">
                <div class="container">
                    <div class="row">
                        <h6 class="text-center">NOSSA EQUIPE ESTA PREPARADA PRA LHE AJUDAR</h6>
                        <h2 class="text-center title-border-bottom">Alcance grandes resultados com nosso programa<br>
                                veja as áreas de atuação
                                </h2>
                    </div>
        
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/img-extensao.jpg" class="img-responsive" alt="">
                                <h4 class="text-center">EXTENSÃO</h4>
                                <p class="text-justify">
                                    Os módulos de Extensão ofertados pelo PEPSUS são autoinstrucionais, com duração de 30h. Nessa forma de ingresso, a extensão pode ser livremente cursada por profissionais de saúde e estudantes da área. Existem mais de 30 módulos do PEPSUS...
                                </p>
        
                                <a href="#" class="btn btn-color2">
                                    Saiba mais
                                </a> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/img-extensao.jpg" class="img-responsive" alt="">
                                <h4 class="text-center">APERFEIÇOAMENTO</h4>
                                <p class="text-justify">
                                    O aperfeiçoamento faz parte de uma área estratégica do PEPSUS centrada nas linhas de cuidado, que tem a Atenção Primária como foco da atenção. Os cursos de aperfeiçoamento possuem módulos específicos que, juntos, formam um itinerário formativo de 180h.
                                </p>
        
                                <a href="#" class="btn btn-color2">
                                    Saiba mais
                                </a> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/img-extensao.jpg" class="img-responsive" alt="">
                                <h4 class="text-center">ESPECIALIZAÇÃO</h4>
                                <p class="text-justify">
                                    O curso de Especialização em Saúde da Família possui duração de 48 semanas, com carga horária – CH total de 360h, sendo 345 a distância, via AVASUS, e 15h presenciais, no Seminário de Apresentação do Trabalho de Conclusão de Curso – TCC.
                                </p>
        
                                <a href="#" class="btn btn-color2">
                                    Saiba mais
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

        
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

            <section id="participation" class="remove-padding-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/information.png" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-10">
                                <h4 class="txt-white text-center">Quem pode participar?</h4>
                                <p class="txt-white text-center">
                                    Profissionais que atuam na Estratégia de Saúde da Família e no Núcleo de Apoio à Saúde da Família que forem selecionados por meio de Edital.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="news">
        <div class="container">
            <div class="row">
                    <div class="col-md-10">
                            <h2 class="title-border-left">Notícias</h2>
                    </div>
                    <div class="col-md-2">
                            <a href="noticias" class="btn btn-default">
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
									<img src="<?php echo get_template_directory_uri(); ?>/images/img-news.jpg" class="img-responsive" alt="">
								</div>
								<article class="card-news-infor">
									<h5><?php the_title(); ?></h5>
									<p>
									<?php the_content(); ?>
									</p>

                                    <p><?php the_tags('Tags: ',','); ?></p>
                                    <p>Categorias: <?php the_category(' ') ?></p>
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
        
           
   </main>

<?php

get_footer();