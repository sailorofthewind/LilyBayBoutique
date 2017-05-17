<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lilybayboutique
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Favicon -->
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/lilybay.ico">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,700|Lato:300,300i,400,400i,700|Abhaya+Libre" rel="stylesheet"> 
<!-- Bootstrap css -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<div id="content-wrapper">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lilybayboutique-theme' ); ?></a>


			<!-- NAVBAR ======================================================== -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<!-- navbar header -->
					<div class="navbar-header">
						<button class="navbar-toggle collapsed" role="button" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" id="logo" alt="Lily Bay Boutique logo"></a>
					</div>

					<?php 

						wp_nav_menu( array(

							'theme_location'	=> 'primary',
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'nav navbar-nav navbar-right'

						));

					?>

				</div>
			</nav>
		</header>

