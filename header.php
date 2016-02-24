<!DOCTYPE html>
<html class="wf-loading">
	<head>
		<script src="https://use.typekit.net/eiv7ylw.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<meta charset="UTF-8">
		<title>Emmeloord</title>
		<link href='<?php echo get_template_directory_uri(); ?>/css/style.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		<section id="menu">
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</section>
		<section id="content">
			<header>
				<?php xvilo_get_header();?>
			</header>
			<div class="container">