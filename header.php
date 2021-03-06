<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/screen.min.css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
</head>
<body <?php body_class(); ?>>
	<main>
		<header>
			<div class="wrapper">
				<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?> <span> ☆ </span></a></h1>
			</div>
		</header>
		<nav class="wrapper">
		<?php wp_nav_menu( array( 'theme_location' => 'header-nav' ) ); ?>
		</nav>