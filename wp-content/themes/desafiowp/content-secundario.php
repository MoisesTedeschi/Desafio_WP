<article class="formato_post_secundario">
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    
	<div class="miniaturas">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

	    <?php the_post_thumbnail( 'img_crop_secundario' ); ?>
	    </a>
	</div>
</article>