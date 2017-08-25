<!--
Solução para ser melhorada no pós desafio
-->
<div>	
	<!--Início da section de destaque: primário e secundário-->
	<?php
	//Variáveis globais
		$div_tamanho = 'col-xs-12 col-md-12 box_post_padrao separador_destaque';
		$opcao_conteudo = 'destaque';
		$itens_categoria = get_categories(array('include' => '25, 20, 7'));

	//Usando o foreach para pegar os itens das catégorias citadas acima - ´Na primeira vez que percorer o for, o conteúdo será de destaque e ocupará 12 colunas. Nas próximas, o conteúdo será secundário e ocupará 6 colunas.
		foreach ($itens_categoria as $item):
			$argumento = array(
				'category__in'  => $item->cat_ID,
				'posts_per_page' => 1
		);
	//Criando um novo objeto do tipo WP_Query
		
		$consulta = new WP_Query($argumento);
	
	//Iniciando o loop das postagens
		if($consulta->have_posts()):
			while($consulta->have_posts()):
				$consulta->the_post();
	?>

	<!--Ocupando 12 colunas-->
	<div class="<?php echo $div_tamanho ?>">
		<?php 
			//Buscando uma parte do template de destaque
			get_template_part('content', $opcao_conteudo);
		?>
	</div>

	<?php	
		//Ocupando 6 colunas
		$div_tamanho = 'col-xs-12 col-md-6 box_post_padrao destaque-secundario';
		
		//Vai buscar outra parte o template - Secundário
		$opcao_conteudo = 'secundario';
	?>
	<!--pensar em uma solução para o espaçamento do box-->

	<?php
		endwhile;
		//Resetando o Loop
		wp_reset_postdata();
		endif;
		endforeach;	
	?>
</div>