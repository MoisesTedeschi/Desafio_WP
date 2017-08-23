<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Desafio WordPress Webedia</title>
	<link rel="stylesheet" href="">

	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="container-fluid bg_color_desafio">
		<div class="container">
			<div class="row">
				<div class="area_logo">
					<div class="col-xs-offset-3 col-xs-6 col-md-offset-4 col-md-4">
						<p>UM SITE DO <img src="<?php echo get_template_directory_uri().'/assets/img/webedia_logo.jpg' ?>" alt="" class="logo_desafio"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg_color_menu">
		<div class="container topo_desafio">
			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-10">
					<nav class="pushmenu">
						<!--melhorar o menu-->
						<button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target=".navHeaderCollapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<div class="collapse navbar-collapse navHeaderCollapse">
							
							<ul class="nav navbar-nav navbar-left">
								<?php wp_nav_menu( 
										array('theme_location' => 'menu_principal_desafio')); ?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>