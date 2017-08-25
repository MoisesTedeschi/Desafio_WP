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
//Habilitando html5 para melhorar o input do form de pesquisa
add_theme_support('html5', array('search-form'));

/**Personalizando o projeto**/
//Mudar texto do footer do admin
function change_footer_admin () {
  echo 'O projeto foi criado por Moisés Tedeschi e utilizando WordPress <3. Se precisar de ajuda, entre em <a href="https://github.com/moisestedeschi" target="_blank" title="Link para o GitHub">contato</a>. ;-) ';
}
add_filter('admin_footer_text', 'change_footer_admin');

//Adiciona ao tema uma caixa de contato no painel
function b3m_add_dashboard_widgets() {
  wp_add_dashboard_widget('wp_dashboard_widget', 'Sobre o site', 'b3m_theme_info');
}
add_action('wp_dashboard_setup', 'b3m_add_dashboard_widgets' );

function b3m_theme_info() {
  echo "<ul>
  <li><strong>Site desenvolvido por:</strong> Moisés Tedeschi.</li>
  <li><strong>Precisa de ajuda?</strong> Vá à seção de <a href='https://github.com/MoisesTedeschi/Desafio_WP/blob/master/README.md' target='_blank'><i>Documentação.</i></a></li>
  <li><strong>Página: </strong> <a href='https://github.com/MoisesTedeschi' target='_blank'>github.com/MoisesTedeschi</a></li>
  <li><strong>Contato:</strong> <a href='mailto:moisestedeschi@gmail.com'>moisestedeschi@gmail.com</a></li>
  </ul>";
}