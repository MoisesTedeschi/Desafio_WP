<article class="post_format_padrao">
	<a href="<?php the_permalink() ?>">
    	<h3><?php the_title(); ?></h3>
    </a>
	<div class="miniaturas">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

	    <?php the_post_thumbnail('medium', array('class' => 'img_responsive')); ?>
	    </a>
	</div>
</article>