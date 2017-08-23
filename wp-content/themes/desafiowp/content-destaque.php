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
	
	<p><span><?php the_excerpt(); ?></span></p>

	<br />
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_tags('Tags: ', ', '); ?></p>
</article>