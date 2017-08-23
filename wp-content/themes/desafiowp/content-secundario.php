<article class="post_format_padrao">
	
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    
	<div class="miniaturas">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">

	    <?php the_post_thumbnail('your-custom-size') ?>
	    </a>

	</div>
</article>