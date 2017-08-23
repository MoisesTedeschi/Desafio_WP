<?php get_header(); ?>
<!--Início da section de destaques-->
<section>
	<div class="container-fluid bg_color_desafio">
		<!--Início da section de destaque - primária-->
		<div class="container destaque-principal">
			<div class="row">
				<div class="col-xs-12 col-md-12 destaque-principal">
					<?php 
					$argumentos = array(
						'type_post' 			=> 'post',
						'posts_per_page' 		=> 3,

					);
					?>
					
					<?php 
					$secundario_destaque = new WP_Query($argumentos);

					if($secundario_destaque->have_posts()):
						while($secundario_destaque->have_posts()):
							$secundario_destaque->the_post();
					?>
					<?php get_template_part('content','categoria');?>
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