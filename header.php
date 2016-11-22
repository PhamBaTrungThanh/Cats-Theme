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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600|Roboto+Condensed:300,400&amp;subset=vietnamese" rel="stylesheet"> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="fluid first-item">
		<div class="top-bar"></div>
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
						<div class="logo-image flex  vertical-center horizontal-center">
							<a class="site-title-image flex-item" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/image_logo.png' ?>" alt=""></a>
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
	<?php if ( is_front_page() ): ?>
	<div class="fluid" id="presentation">
		<article class="wrapper">
			<header class="flex horizontal-center">
				<h1 class="header with-decor primary">Chúng tôi là ai</h1>
			</header>
			<section role="content">
				<p>Lorem ipsum dolor sit amet, purto bonorum suscipit cum ea. Vivendo fastidii definitionem per ut. An nam discere ponderum, his liber everti at, has id suscipiantur comprehensam. Ei nam veritus inimicus, ad eam lorem alterum. Nobis appetere torquatos cu eos, natum convenire expetenda te vis, mea alterum mentitum id.</p>
				<p>Zril vitae an mea, detraxit consequat ius et. His eu munere aperiri dignissim. Usu ex error dolore semper, interesset disputationi est ex. Oporteat rationibus nec ne. Natum viris perfecto eu mea, ex quem cetero salutatus duo. Etiam iudico intellegebat eum ea, ne ridens pertinacia theophrastus cum</p>
				<p>Lorem ipsum dolor sit amet, purto bonorum suscipit cum ea. Vivendo fastidii definitionem per ut. An nam discere ponderum, his liber everti at, has id suscipiantur comprehensam. Ei nam veritus inimicus, ad eam lorem alterum. Nobis appetere torquatos cu eos, natum convenire expetenda te vis, mea alterum mentitum id.</p>
				<p>Zril vitae an mea, detraxit consequat ius et. His eu munere aperiri dignissim. Usu ex error dolore semper, interesset disputationi est ex. Oporteat rationibus nec ne. Natum viris perfecto eu mea, ex quem cetero salutatus duo. Etiam iudico intellegebat eum ea, ne ridens pertinacia theophrastus cum</p>
			</section>
			<footer class="flex column horizontal-center">
				<h2 class="footer flex horizontal-center secondary">Theo dõi</h2>
				<div role="folow_me" class="folow_me flex horizontal-center">
					<div class="flex-item"><a href="http://facebook.com"><img src="<?php echo get_template_directory_uri() . '/images/folow_facebook.png'?>" alt=""></a></div>
					<div class="flex-item"><a href="http://twitch.com"><img src="<?php echo get_template_directory_uri() . '/images/folow_twitch.png'?>" alt=""></a></div>
				</div>
			</footer>
		</article>
	</div>
	<?php endif; ?>

	<div class="fluid">
		<div id="content" class="site-content">
