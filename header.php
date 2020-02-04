<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<h1><a href="<?php echo home_url('') ?>"><?php bloginfo('name'); ?></a></h1>
			<nav class="nav-container">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false) ); ?>
			</nav>
		</div>
	</header>