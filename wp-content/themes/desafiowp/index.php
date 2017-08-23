<?php get_header(); ?>
<!--Início da section de destaques-->
<section>
	<div class="container-fluid bg_color_desafio">
		<!--Início da section de destaque - primária-->
		<div class="container destaque-principal">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<!--Iniciando o loop de postagem-->
					<?php 
						if(have_posts()) :
							while(have_posts()) : the_post();
					 ?>

					<article class="post_format_padrao">
						<a href="<?php the_permalink() ?>">
                        	<h1><?php the_title(); ?></h1>
	                    </a>

	                    <br />
	                    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
						
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

	                    <?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
	                    </a>
						
						<hr />
						
						<p><?php the_excerpt(); ?></p>

						<br />
						<p>Categorias: <?php the_category(' '); ?></p>
						<p><?php the_tags('Tags: ', ', '); ?></p>
					</article>
					<?php 
					endwhile;
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