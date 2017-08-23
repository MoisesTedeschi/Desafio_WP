<?php get_header(); ?>
<!--Início da section de destaques-->
<section>
	<div class="container-fluid bg_color_desafio">
		<!--Início da section de destaque - primária-->
		<div class="container destaque-principal">
			<div class="row">			
				<?php

					$div_tamanho = 'col-xs-12 col-md-12';
					$opcao_conteudo = 'destaque';

					$itens_categoria = get_categories(array('include' => '25, 20, 7'));

					foreach ($itens_categoria as $item):
						$argumento = array(
							'category__in'  => $item->cat_ID,
							'posts_per_page' => 1
						);
				
					$consulta = new WP_Query($argumento);

					if($consulta->have_posts()):
						while($consulta->have_posts()):
							$consulta->the_post();
				?>

				<div class="<?php echo $div_tamanho ?>">
					<?php 
						get_template_part('content', $opcao_conteudo);
					?>
				</div>

						
				<?php	

					$div_tamanho = 'col-xs-12 col-md-6 destaque-secundario';
					$opcao_conteudo = 'secundario';

					endwhile;
					wp_reset_postdata();
					endif;
					endforeach;	
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>