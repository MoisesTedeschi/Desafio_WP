<article class="post_format_padrao">
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
   	<p>Categorias: <?php the_category(' '); ?></p>
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

	<?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
	</a>
</article>