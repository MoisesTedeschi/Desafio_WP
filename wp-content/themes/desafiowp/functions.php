<?php
//Arquivo de funções do projeto de Desafio WordPress Webedia.

// Criando função "carrega_scripts" para chamar o Bootstrap via CDN.
function carrega_scripts(){

	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');

	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);

	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

//Chamando a função de registro de menu
register_nav_menus( 
	array(
		'menu_principal_desafio' => 'Menu Principal',
		'menu_footer_desafio'    => 'Menu Footer'
	)
);

//Chamando a função thumbnails para variação de tamanho de imagem do post.
add_theme_support('post-thumbnails');