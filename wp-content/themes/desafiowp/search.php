<?php get_header(); ?>
<div class="container-fluid bg_color_desafio">
	<div class="container destaque-principal">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<?php 

					while(have_posts()) : the_post();
						get_template_part('content', 'pesquisa');
					endwhile;
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>