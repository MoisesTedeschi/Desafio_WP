<?php get_header(); ?>
<div class="container-fluid bg_color_desafio">
	<div class="container box_post_padrao">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<article class="single_post">

					<?php 
					while(have_posts()) : the_post();
					?>
					<section class="post_format_padrao">
				        <h2><?php the_title(); ?></h2>

				        <br />
				        <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
						
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

				        <?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
				        </a>
						
						<hr />
						
						<p><?php the_content(); ?></p>

						<br />
						<p>Categorias: <?php the_category(' '); ?></p>
						<p><?php the_tags('Tags: ', ', '); ?></p>
					</section>
					
					<br />

					<div class="paginacao_single text-left">
						<?php previous_post_link(); ?>
					</div>

					<div class="paginacao_single text-right">
						<?php next_post_link(); ?>
					</div>
					
					<br />
					
					<div class="comentarios">
					
					<?php 
					if(comments_open() || get_comments_number()):
						comments_template();
					endif;

					?>
					</div>

					<?php 
					endwhile;
					?>
				</article>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>