<?php get_header(); ?>
<section>
	<div class="container-fluid bg_color_desafio">
		<div class="container destaque-principal">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<?php 
						if(have_posts()) :
							while(have_posts()) : the_post();
					 ?>

					<article class="post_format_padrao">
						
                        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	                    
	                    <br />
	                    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
						
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

	                    <?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
	                    </a>
						<p>Categorias: <?php the_category(' '); ?></p>
						<br />

					</article>
					<?php 
					endwhile;
					?>
					
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
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>