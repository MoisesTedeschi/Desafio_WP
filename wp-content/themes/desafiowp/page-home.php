<?php get_header(); ?>
<!--Início da section de destaques-->
<section>
	<div class="container-fluid bg_color_desafio">
		<div class="container">
			<div class="row">		
				<?php 
					$argumntos_primaria = array(
				 		'post_type' => 'post',
				 		'posts_per_page' => 1,
				 		'category__in' => 31
				 	);

					$somente_destaque = new WP_Query($argumntos_primaria);
					if($somente_destaque->have_posts()):
						while($somente_destaque->have_posts()):
							$somente_destaque->the_post();
				 ?>
				 <div class="col-xs-12 col-md-12 box_post_padrao">
					
					<?php  get_template_part('content', 'destaque'); ?>

				</div>
				<?php 

					endwhile;
					wp_reset_postdata();
					endif;
				 ?>

				 <?php 
				 	$argumntos_secundaria = array(
				 		'post_type' => 'post',
				 		'posts_per_page' => 2,
				 		'category__not_in' => 31
				 	);

					$destaque_secudario = new WP_Query($argumntos_secundaria);
					if($destaque_secudario->have_posts()):
						while($destaque_secudario->have_posts()):
							$destaque_secudario->the_post();
				 ?>
				 <div class="col-xs-12 col-md-6 destaque-secundario separador_destaque">
					
					<?php  get_template_part('content', 'secundario'); ?>

				</div>
				<div class="divisor_post_secundario"></div>
				<?php 
					endwhile;
					wp_reset_postdata();
					endif;
				 ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>