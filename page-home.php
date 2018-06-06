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
				<p class="infor-margin-top">Maecenas in nulla quam. Ut sem ex, iaculis sit amet hendrerit et, elementum nec ante.</p>
			</div>
			<div class="col-md-3">
				<button class="btn btn-default pull-right">
					SAIBA MAIS
				</button>
			</div>
		</div>
	</div>

	</section>

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
