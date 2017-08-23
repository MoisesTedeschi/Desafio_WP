<?php get_header(); ?>
<section>
	<div class="container-fluid bg_color_desafio">
		<div class="container destaque-principal">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<?php 

					the_archive_title('<h1 class="titulo_arquivo">','</h1>');

						if(have_posts()) :
							while(have_posts()) : the_post();
					 
							get_template_part('content', 'arquivo');

							endwhile;
					?>
					
					<div class="paginacao text-letf">
						<?php next_posts_link("<< Mais Antigos"); ?>
					</div>

					<div class="paginacao text-right">
						<?php previous_posts_link("Mais Novos >>"); ?>
					</div>

					<?php else: ?>
						<p>Nenhuma postagem foi encontrada!</p>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>