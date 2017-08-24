<article class="post_format_padrao">
	
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<br />
	<?php
		$postid = get_the_ID();
	     if (get_post_meta($postid, 'subtitulo', true)){
	     	echo '<div>'. get_post_meta($postid, 'subtitulo', true) .'</div>';
		}	 
	?>

    <br />

	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
    <?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
    </a>
	
	<hr />
	<p><?php the_content(); ?></p>
</article>