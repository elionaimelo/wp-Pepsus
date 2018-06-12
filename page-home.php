<?php
get_header();
?>

<div class="pageheader fixed-demo dark">
      	
      

       <?php 
echo do_shortcode('[smartslider3 slider=1]');
?>
  </div>
  

  <section class="infor remove-padding-section">

	<div class="container">
		<div class="row">
            
                <div class="col-md-9">
                    <p class="infor-margin-top">
                    
                         Conhece as comunidades práticas do PEPSUS?
                    </p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-default pull-right button-margin-top">
                        SAIBA MAIS
                    </a>
                </div>
            
		</div>
	</div>

	</section>

	<section class="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if ( dynamic_sidebar('widget-1') ) : else : endif; ?>
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

                        <a href="<?php echo home_url(); ?>/areas-de-atuacao" class="btn btn-color2">
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

                        <a href="<?php echo home_url(); ?>/areas-de-atuacao" class="btn btn-color2">
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

                        <a href="<?php echo home_url(); ?>/areas-de-atuacao" class="btn btn-color2">
                            Saiba mais
                        </a> 
                    </div>
                </div>
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
	
    <?php include('inc/membros-part.php') ?>
	
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="title-border-left">Contato</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-contato.png" class="img-responsive hidden-xs" alt="">
                </div>

                <div class="col-md-9">

                        <?php echo do_shortcode("[ninja_form id=4]"); ?>
                        
                </div>
            </div>
        </div>
	</section>


	<?php include('inc/noticias-part.php') ?>
	
	<section id="partner">
            <div class="container">
            <?php echo do_shortcode("[ed-logo id='112']"); ?>
            </div>
    </section>

<?php

get_footer();
