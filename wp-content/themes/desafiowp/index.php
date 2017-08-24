<?php get_header(); ?>
<div class="container-fluid bg_color_desafio">

	<?php 
		if(have_posts()) :
			while(have_posts()) : the_post();
	?>
	<div class="container box_post_padrao">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<article class="post_format_padrao">
					
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    <br />
                    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
					
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

                    <?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
                    </a>
					<p>Categorias: <?php the_category(' '); ?></p>
					<br />

				</article>

			</div>
		</div>
	</div>

	<br />					

	<?php 
	endwhile;
	?>

	<div class="container box_post_padrao">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="paginacao text-letf">
					<?php next_posts_link("<< Mais Antigos"); ?>
				</div>

				<div class="paginacao text-right">
					<?php previous_posts_link("Mais Novos >>"); ?>
				</div>

				<?php
				else:
				?>

				<p>Nenhuma postagem foi encontrada!</p>
			</div>
		</div>
	</div>

	<?php endif; ?>
</div>
<?php get_footer(); ?>