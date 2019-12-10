<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AML_Global
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aml-global' ); ?></a>
	<div class="mini-head">
		<div class="container">
			<div class="block">
				<ul class="short-contact-info">
					<li class="phone"><span>+(855)87225638 / +(65)91853392 </span></li>
					<li class="email"><span>fabianlim@aml-global.com</span></li>
				</ul>
				<ul class="social-media">
					<li class="facebook">
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/images/facebook-logo.svg'; ?>">
						</a>
					</li>
					<li class="linkendin">
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/images/linkedin.svg'; ?>">
						</a>
					</li>
					<li class="twitter">
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/images/twitter.svg'; ?>">
						</a>
					</li>
					<li class="search">
						<div class="top-search">
							<div class="inner" itemscope itemtype="https://schema.org/WebSite">
								<meta itemprop="url" content="<?php echo esc_url( home_url( '/' ) ); ?>"/>
								<form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" role="search" method="get" id="searchform"
								class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<meta itemprop="target" content="<?php echo esc_url(home_url('/')); ?>s?q={s}"/>
									<div class="search-form-inner">
										<input itemprop="query-input" type="text" class="search-form-input" value="<?php echo get_search_query(); ?>" name="s" id="s" />
										<button class="search-form-btn search-btn" type="submit">
											<span>Search</span>
										</button>
									</div>
								</form>
							</div>
						</div>						
						<img class="mini_search" src="<?php echo get_template_directory_uri().'/images/magnifying-glass-finder.png'; ?>">
					</li>
				</ul>
			</div>
		</div>

	</div>
	<header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
		<div class="container">
			<div class="site-branding">
				<?php
				the_custom_logo(); ?>

				<div class="brand-description">
					<?php $aml_global_description = get_bloginfo( 'description', 'display' ); ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php echo $aml_global_description; /* WPCS: xss ok. */ ?></p>
				</div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'aml-global' ); ?></button> -->
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<img src="<?php echo get_template_directory_uri().'/images/menu.svg'; ?>" alt="">
				</button>
				<span itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</span>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<?php if(is_page()){ ?>
		<div id="top_breadcrum">
			<div class="container">
				<div class="content">
					<h1><?php the_title(); ?></h1>
					<?php custom_breadcrumbs(); ?>
				</div>
			</div>
		</div>
		
	<?php }  ?>
	<?php if(is_home()){ ?>
		<div id="home-slide">
			<div class="container">
				
			</div>
		</div>
	<?php } ?>
	<div id="content" class="site-content">