<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="theme-color" content="#000000">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
    <header id="header" class="cont-wrap">
		<nav class="navbar navbar-expand-xl">
			<?php if ( get_theme_mod( 'cr_logo' ) ) : ?>
				<div class="wraper-logo">
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
						<img class="logo" src='<?php echo esc_url( get_theme_mod( 'cr_logo', 'medium' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php else : ?>
				<hgroup>
					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
					<p class=""><?php bloginfo( 'description' ); ?></p> 
				</hgroup>
			<?php endif; ?>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<div id="menu-toggle">
					 <div id="hamburger">
						<span></span><span></span> <span></span>
					</div>
					<div id="cross">
						<span></span><span></span>
					</div>
			    </div>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					    <?php wp_nav_menu( array(
							'theme_location' => 'primary', // Defined when registering the menu
							'menu_id'        => 'primary-menu',
							'link_class'   => 'animsition-link',
							'container'      => false,
							'depth'          => 2,
							'menu_class'     => 'navbar-nav ',
							'fallback_cb' 	 => 'wp_bootstrap_navwalker::fallback',
							'walker' 		 => new wp_bootstrap_navwalker()
						) ); ?>
				<ul class="social">
				    <?php if ( get_option( 'cr_twitter' ) ) : ?>
				        <li class="twitter"><a target="_blank" href="<?php echo get_option('cr_twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i> <small><?php echo get_option('cr_twitter_title'); ?></small></a></li>
				    <?php endif; ?>
				    <?php if ( get_option( 'cr_facebook' ) ) : ?>
				        <li class="facebook"><a target="_blank" href="<?php echo get_option('cr_facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i> <small><?php echo get_option('cr_facebook_title'); ?></small></a></li>
				    <?php endif; ?>
				    <?php if ( get_option( 'cr_instagram' ) ) : ?>
				        <li class="instagram"><a target="_blank" href="<?php echo get_option('cr_instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i> <small><?php echo get_option('cr_instagram_title'); ?></small></a></li>
				    <?php endif; ?>
				</ul>
			</div>
		</nav>   
	</header> 
	
<main class="main-content" >
    