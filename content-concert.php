<?php
/**
 * Template for displaying content from custom post type "concert"
 *
 * @since Twenty Fifteen Child NGO 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<br/><br/>
		<header class="entry-header">
			<?php
					the_title( '<h1 class="entry-title">', '</h1>' );
			?>		
		</header><!-- .entry-header -->
	
	<div class="entry-content">

		<!-- Inline block and other css to make image and text to line up doesn't work with twenty fifteen, so let's make a table-->
		<table style="width: 100%; border: none">
  		<tr style="border: none;">
				<td style="width: 30%; border: none;">
					<?php
						echo the_post_thumbnail('thumbnail');
					?>
				</td>
				<td style="width: 35%; vertical-align: top; border: none;">

					<small>
					<?php $firstplaybexpsconsing = esc_html( get_post_meta( get_the_ID(), 'ngoc_first_performance', true ) );?>
					<?php if( ! empty($firstplaybexpsconsing)){?>
						<div>
							<b><?php _e( 'Premiere', 'twenty-fifteen-child-ngo' ); ?>: </b><?php echo $firstplaybexpsconsing; ?>
						</div>
					<?php } ?>
				
					<?php $lastplaybexpsconsing = esc_html( get_post_meta( get_the_ID(), 'ngoc_last_performance', true ) ); ?>
					<?php if(! empty($lastplaybexpsconsing)){?>
						<div>
							<b><?php _e( 'Last gig', 'twenty-fifteen-child-ngo' ); ?>: </b><?php echo $lastplaybexpsconsing; ?>
						</div>
					<?php } ?>
				
					<?php $conperformbexsing = esc_html( get_post_meta( get_the_ID(), 'ngoc_performances', true ) );?>
					<?php if(! empty($conperformbexsing)){ ?>
						<div>
							<b><?php _e( 'Number of gigs', 'twenty-fifteen-child-ngo' ); ?>: </b><?php echo $conperformbexsing; ?>
						</div>
					<?php } ?>
					<div>
						<?php the_terms($post->ID, 'concert_category', '<b>' . __('Category', 'twenty-fifteen-child-ngo') . ':</b><br/>', '<br/>'); ?>
					</div>
					<div>
						<?php the_terms($post->ID, 'concert_scenes', '<b>' . __('Venues', 'twenty-fifteen-child-ngo') . ':</b><br/>', '<br/>'); ?>
					</div>
					</small>
				</td>

				<td style="width: 35%; vertical-align: top; border: none;">
					<small>	
					<div>
						<?php the_terms($post->ID, 'concert_musicians', '<b>' . __('Musicians', 'twenty-fifteen-child-ngo') . ':</b> <br/>', '<br/>'); ?>
					</div>
				
					<?php $conmetainfobexsing = esc_html( get_post_meta( get_the_ID(), 'ngoc_meta_info', true ) ); ?>
					<?php if(! empty($conmetainfobexsing)){?>
						<div>
							<b><?php _e('Other coworkers', 'twenty-fifteen-child-ngo')?>: </b><?php echo wpautop( $conmetainfobexsing ); ?>
						</div>
					<?php } ?>
					<?php $conticketbexsing = esc_html( get_post_meta( get_the_ID(), 'ngoc_ticket_url', true ) );?>
					<?php if(! empty($conticketbexsing)){ ?>
						<div style="background:lightgrey;">
							<b><?php _e('Buy tickets here', 'twenty-fifteen-child-ngo')?>: </b><a href="<?php echo $conticketbexsing; ?>" target="_blank"><?php echo $conticketbexsing;?></a>
						</div>
					<?php	} ?>
					</small>
				</td>
  		</tr>
		</table>
		
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
