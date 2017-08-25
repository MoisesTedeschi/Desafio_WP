# Desafio WordPress – Instalação e Adição de novo Tema #
# Desafio_WP
Desafio Wordpress Webedia
Desenvolvimento de um tema do zero utilizando o CMS - WordPress.
O projeto deve evitar o uso de plugins e ser responsivo.

Seja bem-vindo, o tema base foi desenvolvido por [Moisés Tedeschi de Melo]( https://github.com/moisestedeschi), para o desafio de construção de uma tema do zero.

[Ver essa documentação em Português do Brasil]( https://github.com/MoisesTedeschi/Desafio_WP/blob/master/README.md)

## Instalação do WordPress ##

A instalação do WordPress é bastante simples, mas para que ela dê certo, é preciso ficar de olho em seus requisitos. 

# Requisitos do WordPress:

- Servidor baseado em UNIX/Linux;
- PHP versão 5.2.4 ou superior;
- MySQL versão 5.0 ou superior;
- Memória para o PHP de pelo menos 64 MB
(só para o WordPress puro, sem contar com os
possíveis adicionais).

É possível instalar o WordPress, também, em servidores Microsoft, porém a ferramenta pode ficar limitada e depender de outros recursos específicos de cada servidor. 

# Instalando o WordPress por meio das ferramentas de hospedagem
[Instalando o WordPress > A Famosa Instalação de 5 Minutos](https://codex.wordpress.org/pt-br:Instalando_o_WordPress)

Em alguns algumas hospedagens - como: Uol Host, Locaweb e HostGator, existem ferramentas próprias para a instalação do WordPress. E, aí, basta seguir o tutorial dado por cada uma delas para seguir em frente. No entanto, o usuário pode: 

- Acessar seu servidor de hospedagem;
- Criar um banco de dados;
- Criar um usuário para o banco de dados;
- Dar-lhe todas as permissões necessárias;
- Descompactar o WordPress, normalmente, dentro da pasta public_html ou www de sua hospedagem;
- Acessar o seu endereço (www.seuendereco.com) e seguir o passo-a-passo de instalação;
- Serão necessários o nome do usuário do banco de dados, o nome do banco de dados criado e o host. A informação sobre o host pode ser encontrada nos dados do painel de hospedagem do usuário, acessando o phpmyadmin e/ou solicitando suporte técnico ao servidor de hospedagem. 
[Exemlo - Visualizar os detalhes do seu banco de dados](https://br.godaddy.com/help/visualizar-os-detalhes-do-seu-banco-de-dados-16021])


# Instalando o WordPress localmente

A instalação do WordPress, também, pode ser efetuada localmente e de forma bem simples. Assim sendo, o tutorial oficial do WordPress.org é a base para o processo [Instalando o WordPress Localmente](https://codex.wordpress.org/pt-br:Instalando_o_WordPress_Localmente).

Em resumo, o usuário deve descompactar o WordPress na pasta de publicação do seu servidor local. O tutorial acima descreve quais são os servidores mais usados e como esse procedimento deve ser feito.

## Apresentação ##

As informações a seguir são para usuários do topo administrador. Logo, não se aplicam aos usuários visitantes.

## CONHECENDO O PAINEL ##

Uma visão geral sobre o painel de controle do site. O primeiro contato com o wordpress (internamente) é através do painel. O painel é um resumo, visual, de tudo que o gerenciador pode lhe proporcionar. Do lado esquerdo, o administrador encontra o menu de navegação com opções para gerenciar seu tema/conteúdo. Ao centro, o usuário encontra um resumo de atividades. As informações são sobre o WordPress (novidades), Comentários, Publicação rápida e afins. As opções podem ser exibidas (ou não) acessando a opção ‘Opções de Tela’.


## O MENU PRINCIPAL ##

# Item de menu: Inicio

A opção de ‘Início’ faz, exatamente, o que o nome diz. Ou seja, leva o usuário para o ponto de partida inicial. Logo, o administrador retorna para o painel inicial e visualiza as opções de ‘Novidades do WordPress’, ‘Rascunho rápido’ e etc.

# Item de menu: Post

A opção Post é uma das mais utilizadas do wordpress. Ao acessar essa opção, o administrador vai poder gerenciar todas as suas postagens. A opção possui sub-itens que são:

Adicionar novo – Adiciona novo post a lista de postagens. Essa página é composta, basicamente, de um título, área de texto, adição de formatos do post (padrão, nota, vídeo, imagem e afins), categorias e tags. 

O post pode possui 3 status – Rascunho, Revisão Pendente e Publicado.

O post tem 3 níveis de visibilidade – Público, Privado (só usuários cadastrados no site podem visualizar) e Protegido por Senha (só usuários com chave de acesso podem visualizar);

Categorias – gerenciar categorias dos posts. Ou seja, o administrador pode criar, excluir ou adicionar descrição para suas categorias. Também é possível criar um slug para as categorias nessa opção;

Tags – Gerenciar Tags. Assim como nas categorias, o administrador pode criar, excluir e/ou adicionar descrições ou slug para suas Tags.


# Item de menu: Mídia

É um espaço dedicado aos arquivos de mídia do seu projeto. Em resumo imagens, áudios e vídeos. Os sub-itens desse menu são:

Biblioteca – Visão geral da sua biblioteca. O administrador pode adicionar nova mídia a partir desse item de menu, pesquisar uma mídia, listar por datada e/ou selecionar em massa;

Adicionar nova – Adiciona uma nova mídia a biblioteca. 

# Item de menu: Página

Área de gerencia das páginas do projeto – Criar, Editar, Salvar como Rascunho ou Deletar. O administrador pode listar todas as páginas e/ou adicionar uma nova página ao tema através desse item.

Ao ‘Adicionar nova’ página, o administrador acessa a área de criação das páginas. Ela é composta de um Título, área de conteúdo (editor de texto), opções laterais:

Publicar que são as mesmas características citadas nos níveis de status e visibilidade dos POST;

Atributos da página:

	1º - ‘Mãe’ – A página será uma subpágina de alguma outra já existente? Caso seja, essa opção deve ser selecionada.); 

	2º - Modelo – Caso a página tenha algum ‘template’ customizado. A opção inicial é: Modelo Padrão;

	3º Ordem – Quem a ordem de exibição a página criada vai aparecer.

Imagem destacada: Definição de uma imagem que será o destaque da página criada.


# Item de menu: Comentários

Nessa opção, o administrador consegue gerenciar os comentários que foram feitos nas postagem ou páginas do seu tema. Quando um comentário for adicionado, o administrador do site pode gerenciar as características do mesmo (listar, aprovar, deletar [rejeitar], classificar como spam e afins). Ou seja, o comentário pode ser aprovado ou não pelo administrador do site.

# Item de menu: Aparência

Como o nome diz, a área em questão, gerencia o visual do site.
No primeiro subitem serve para gerenciar o tema utilizado no site. Logo, o administrador é capaz de adicionar um novo tema, excluir e ter acesso as informações do tema utilizado.

• Submenu - Temas [Para instalar um novo tema no WordPress]: 

Passo 1. Acesse seu painel administrativo do WordPress e clique em "Aparência" e depois em "Temas";

Passo 2. No painel de "Temas", o tema ativo estará com o indicador "Ativo" e você encontrará outros temas disponíveis para seu blog/site;

Passo 3. Como já temos o tema do "Desafio" baixado, clique em:
	"Adiconar novo" (Uma nova página será carregada e vários temas vão aparecer. Os temas são do repositório on line do WordPress.) e depois clique no botão "Fazer upload do tema". Uma mensagem irá aparecer:

	"Se você tem um tema no formato .zip, você deve instalá-lo fazendo upload do arquivo aqui."

	Selecione seu arquivo no formato informado e clique no botão: 'Instalar agora'.

Passo 4. Para ativar um tema basta clicar em "Ativar" ou clicar em "Visualizar" para ver como seu blog/site ficará;

Passo 5. Após instalar o tema, clique em "Ativar" para, é claro, ativar seu novo tema;

Passo 6. Caso você não encontre o tema desejado é possível pesquisar por outros temas no banco de temas do WordPress. Para isso, clique em "Adicionar Novo" no alto da tela ou no final da tela;

Passo 7. Escolha o tema desejado entre as categorias "Em Destaque", "Populares" e "Mais Recentes" e adicione o tema da mesma maneira como fizemos antes;

Passo 8. Outra opção é enviar seu tema via FTP. Acesse sua conta e clique na pasta "wp-content";

Passo 9. Clique na pasta "themes";

Passo 12. Retorne à sua área administrativa no WordPress e acesse a área de temas. Seu novo tema já estará disponível para uso.


• Submenu - Personalizar: Ao clicar o usuário/administrador consegue, em tempo real, visualizar algumas alterações feitas com a ajuda do menu lateral. As alterações podem ser relacionadas ao menu, descrição, widgets e afins.


• Submenu - Widgets: Caso o tema permita adicionar esses "pequenos programas", os Widgets são partes fundamentais da customização dos temas. Nesse menu, o administrador pode gerenciar adicionando ou retirando os Widgets do tema.

• Submenu - Menu: 
	O painel Aparência > Menus é responsável por gerenciar os menus depois da criação de websites. É possível ter vários menus, por exemplo:

	01 . Menu Secundário – geralmente usado no topo ao lado da marca, através do widgets "Menu secundário" em Aparência > Widgets.
	
	02 . Menu Principal – menu horizontal abaixo ou acima do topo ou banner.
	
	03 . Menu Lateral – usado nas barras laterais do site, através do widgets "Menu secundário".
	
	03 . Duplo Menu secundário – usado no topo com divisão tripla, formando um menu esquerdo e direito ao lado da marca.
	
	04 . Menu lateral de Produtos – usado nas barras laterais para exibir as categorias de produtos da Loja Virtual.

OBS: A quantidade de menus disponível pode variar de site para site.

- Gerenciando menus no painel de controle

Para criar novos menus, acesse Aparência > Menus. Digite o nome do menu desejado (ex: serviços) e clique em "Criar menu". Na lateral esquerda ficam os tipos de ítens que podem ser adicionados ao menu, reunidos em grupos (Páginas, Categorias, Links, etc.). Selecione os itens em que deseja adicionar e clique em "Adicionar ao menu". Ao finalizar as alterações, clique no botão "Salvar Menu".

> Páginas – exibe as páginas criadas para inserir como itens de menu.
> Links – cria link personalizado do menu, ou seja, link para menu externo.
> Posts – exibe os posts criados para inserir como itens de menu.
> Categorias – exibe as categorias (lista os posts quando clicado) para inserir como itens de menu.

OBS: No botão “Opções de Tela” no canto direito superior, você pode selecionar itens para exibir ou ocultar tipos de menu. Use esta função quando precisar inserir Categorias de Produtos no menu.

>> Para alterar a ordem, clique e arraste os ítens (para cima/baixo) na ordem desejada. Em caso de sub-menu, coloque o item abaixo do item “pai” e arraste para a direita conforme figura abaixo.

>> Para remover um item do menu, clique na seta ao lado do nome do item e clique em “Remover”.

- Criar links externos no menu

Para criar links externos no menu, utilize a opção Links do painel Aparência > "Menus".

> URL – digite o endereço de destino quando esse for clicado

> Texto do link – digite o título que deve aparecer para esse item (Exemplo: Blog)

Ao desenvolver o preenchimento dos campos, clique em "Adicionar ao menu", ajuste a posição do item e clique em “Salvar menu”.



## Ainda há alguns itens e subitens de menu para abordar, mas com essa base o administrador, com certeza, consegue instalar o WordPress, adicionar um novo tema e ter um conhecimento básico de uso do CMS.


## Referências ##
* [Bootstrap](http://getbootstrap.com/)
* [Bootstrap Sass](https://github.com/twbs/bootstrap-sass)
* [Sass](http://sass-lang.com/)


## Obrigado / Tnks
## Moisés Tedeschi