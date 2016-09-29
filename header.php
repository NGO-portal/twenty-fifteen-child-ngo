<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 // Silence the server a bit
header_remove("X-Powered-By");
header("X-New-Header: test");
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- added for ngo-portal navigation menu -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
	<!-- Show ads from group 1 -->
	<?php if( function_exists( 'adrotate_group' ) ) { echo adrotate_group(1); } ?>
	<!-- NGO-portal navigation icons -->
	<?php
	get_net_site_url( $net_url );
	$sitelist = ngob_get_sitelist_slug();
	?>
	<li class="top-navigation"><a href=<?php bloginfo('url'); ?>/wp-admin/>
		<i class="fa fa-edit" aria-hidden="true" title="<?php _e("Login","beyond-expectations-child-ngo");?>"></i>
		<span class="screen-reader-text"><?php _e("Login", "beyond-expectations-child-ngo");?></span>
	</a></li>
	<li class="top-navigation"><a href=<?php echo $net_url . "/"; if( !empty( $sitelist ) ) { echo $sitelist; }?>>
		<i class="fa fa-external-link" aria-hidden="true" title="<?php _e('NGO-list','beyond-expectations-child-ngo');?>"></i>
		<span class="screen-reader-text"><?php _e("NGO-list", "beyond-expectations-child-ngo");?>:</span>
	</a></li>
	<!-- End navigation icons-->