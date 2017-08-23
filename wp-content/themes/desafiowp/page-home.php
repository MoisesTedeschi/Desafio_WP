<?php get_header(); ?>
<!--Início da section de destaques-->
<section>
	<div class="container-fluid bg_color_desafio">
		<!--Início da section de destaque - primária-->
		<div class="container destaque-principal">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					
					<!--Iniciando uma nova consulta usando o WP_query-->

					<?php 
					$destaque = new WP_Query('type_post=post&postes_per_page=1&cat=20');

					if($destaque->have_posts()):
						while($destaque->have_posts()):
							$destaque->the_post();
					?>
					<?php get_template_part('content','destaque');?>
					<?php  
						endwhile;
						//Resetando a consulta para não influenciar na próxima.
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</div>

		<!--Início da section de destaque - secundária-->
		<div class="container">
			<div class="row">	
				<div class="col-xs-12 col-md-6 destaque-secundario separador">

				<!--Consultas de destaques secundários-->
					<?php 
					$argumentos = array(
						'type_post' 				=> 'post',
						'posts_per_page' 		=> 1,
						'category__in' 	=> 23, //Não vou listar a categoria do loop anterior.

					);
					?>
					
					<?php 
					$secundario_destaque = new WP_Query($argumentos);

					if($secundario_destaque->have_posts()):
						while($secundario_destaque->have_posts()):
							$secundario_destaque->the_post();
					?>
					<?php get_template_part('content','secundario');?>
					<?php  
						endwhile;
						//Resetando a consulta para não influenciar na próxima.
						wp_reset_postdata();
						endif;
					?>
				</div>
				<div class="col-xs-12 col-md-6 destaque-secundario">
				<!--Consultas de destaques secundários-->
					<?php 
						$argumentos = array(
							'type_post' 				=> 'post',
							'posts_per_page' 		=> 1,
							'category__not_in' 	=> array(20,23), //Não vou listar a categoria do loop anterior.
						);
						?>
						<?php 
						$secundario_destaque = new WP_Query($argumentos);

						if($secundario_destaque->have_posts()):
							while($secundario_destaque->have_posts()):
								$secundario_destaque->the_post();
						?>
						<?php get_template_part('content','secundario');?>
						<?php  
							endwhile;
							//Resetando a consulta para não influenciar na próxima.
							wp_reset_postdata();
							endif;
						?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>