<article class="post_format_padrao">
	
    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    <br />
    <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
	
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
    <?php the_post_thumbnail('large', array('class' => 'img_responsive')); ?>
    </a>
	<hr />
	<p><?php the_excerpt(); ?></p>
	<br />
	<p><?php the_tags('Tags: ', ', '); ?></p>
</article>