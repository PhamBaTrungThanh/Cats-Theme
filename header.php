<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cats
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="fluid">
		<div class="wrapper">
			<a class="skip-link screen-reader-text hide" href="#content" hidden><?php esc_html_e( 'Skip to content', 'cats' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding hide-tl-up">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div><!-- .site-branding -->
				
				<nav id="site-navigation" class="main-navigation hide-tl-down row nested" role="navigation">
					<div class="tl-4">
						<div class="logo-image">
							<a class="site-title-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/image_logo.png' ?>" alt=""></a>
						</div>
					</div>
					<div class="tl-6">
						<div class="flex">
							<?php echo( reformat_wp_nav() ); ?>
						</div>
						
					</div>
						
					<div class="tl-2">
						<div class="flex nav-controls">
							<div class="flex-item even-fill nav-control flex horizontal-center veritcal-center">
								<?php if ( !is_user_logged_in() ) : ?>
									<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Đăng nhập"><i class="icon-login"></i></a>
								<?php else: ?>
									<a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Đăng xuất"><i class="icon-logout"></i></a>
								<?php endif; ?>
							</div>
							<div class="flex-item even-fill nav-control flex horizontal-center veritcal-center">
								<a href="#" title="Giỏ hàng"><i class="icon-basket"></i></a>
							</div>
							<div class="flex-item even-fill nav-control flex horizontal-center veritcal-center">
								<a href="#" title="Tìm kiếm"><i class="icon-search"></i></a>
							</div>
					</div>
					
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div>
	</div>
	<div class="fluld">
		<?php masterslider(1); ?>
	</div>
	<div class="fluid">
		<div id="content" class="site-content">
