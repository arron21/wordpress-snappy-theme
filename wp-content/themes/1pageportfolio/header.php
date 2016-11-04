<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" />

	<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<?php wp_head();?>
</head>
<body>
<section class="container">
	<aside>
		<div class="top-name">
			<span><?php echo get_bloginfo( 'name' ); ?></span>
			<span><?php echo get_bloginfo( 'description' ); ?></span>
		</div>
		<nav>
			<ul>
				<!--<?php wp_list_pages( '&title_li=' ); ?>-->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

			</ul>
		</nav>
		<div class="social-links">
			<ul>
				<li><a href="#facebook"><i class="zmdi zmdi-facebook"></i></a></li>
				<li><a href="#linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
				<li><a href="#twitter"><i class="zmdi zmdi-twitter"></i></a></li>
			</ul>
		</div>
	</aside>