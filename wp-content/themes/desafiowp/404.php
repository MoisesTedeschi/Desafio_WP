<?php get_header(); ?>
<div class="container-fluid bg_color_desafio">
	<div class="container box_post_padrao">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<header>
					
					<h2>PÁGINA NÃO FOI ENCONTRADA!</h2>
					<p>Infelizmente, a página que você está procurando não existe no site.</p>
				</header>
				<div class="erro404">
					<p>Deseja procurar por outro assunto?</p>
					<br />
					
					<?php get_search_form(); ?>
					
					<br />
					<div class="topicos_recentes">
						<?php the_widget('WP_Widget_Recent_Posts'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>