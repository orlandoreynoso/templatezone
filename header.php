<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php include (TEMPLATEPATH . '/files/favicon.php'); ?>
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>
<body>

<header class="t-header">
	<div class="head-tzone">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 logo-tzone">
					<a class="logo" href="<?php bloginfo('url' ); ?>">
						<!-- img src="<?php  // echo get_bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="" -->
					</a>
				</div>
				<div class="col-xs-12 col-md-8 busca-redes">
					<div class="col-xs-12 col-md-6 redes">
						<div class="tredes">
							<a class="t-cin" href="<?php bloginfo('url'); ?>/contacto">
								<span class="t-c" >Contáctanos</span>
								<span class="t-n"><i class="t-i fa fa-phone-square "></i> (502) 2361-1627 | (502) 2361 - 1617</span>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 busca">
						<div class="search"><?php  get_search_form(); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fa-responsive">
		<div class="container">
	    	<div class="col-xs-12">
	    		<div class="resp">
	    			<div class="ititulo"><h2>Menu</h2></div>
	    			<div class="iconoresp">
						<a href="#" class="btn-menu" id="btn-menu">
							<i class="icono fa fa-bars"></i>
						</a>
					</div>
	    		</div>


	    	</div>
		</div>
	</div>
	<nav id="men">
		<div class="container">
			<div class="col-md-12">
				<div class="menucin" id="menucin">
					<div class="mini">
					<?php  showMenu(); ?>
					</div>
				</div>
	    	</div>
	    </div>
	</nav>
</header>
