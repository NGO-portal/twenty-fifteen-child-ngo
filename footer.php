<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

 // Get info about network
get_net_site_info($net_site_name, $net_site_desc);
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			&copy; <?php _e('Copyright', 'twenty-fifteen-child-ngo')?> <?php echo date('Y'); ?> - <?php echo $net_site_name;?> &amp; <?php echo bloginfo('title') ?>
		</div><!-- .site-info -->
		<?php if( function_exists( 'adrotate_group' ) ) { echo adrotate_group(5); } ?>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
