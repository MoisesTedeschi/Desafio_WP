<div class="post_format_padrao">
	<a href="<?php the_permalink() ?>">
    	<h1><?php the_title(); ?></h1>
    </a>

   <p>Categorias: <?php the_category(' '); ?></p>
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

    <?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
    </a>
</div>