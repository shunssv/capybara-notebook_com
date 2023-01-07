<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<article>

				<div class="home-post post">

				<?php if (is_paged()): ?>
				<?php else: ?>

						<?php if ( trim( $GLOBALS["stdata9"] ) !== '' ) {
						}else{ ?>
							<?php if( is_front_page() && ( isset($GLOBALS['stdata54']) ) && ( $GLOBALS['stdata54'] === 'yes' ) ): ?>
								<div class="nowhits <?php st_noheader_class(); ?>"><?php get_template_part( 'popular-thumbnail' ); ?></div>
							<?php endif; ?>

							<?php if ( is_front_page() && is_active_sidebar( 12 ) ) { ?>
								<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 12 ) ) : else : ?>
								<?php endif; ?>
							<?php } ?>
							<?php if ( is_front_page() ): get_template_part( 'news-st' ); endif; ?>
						<?php }?>

						<div class="entry-content">
							<?php if ( st_is_home_check() ): ?>
								<?php get_template_part( 'st-top-page' ); ?>
							<?php else: ?>
								<?php get_template_part( 'st-topin' );  ?>
								<?php if ( trim($GLOBALS['stdata89']) !== '' ): ?>
									<div class="st-topcontent">
										<?php st_the_editor_content( 'st-data89' ); ?>
									</div>
								<?php endif; ?>
							<?php endif; ?>

							<?php get_template_part( 'st-tab-category' ); ?>
						</div>

						<?php if ( is_front_page() && is_active_sidebar( 35 ) ) { ?>
							<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 35 ) ) : else : ?>
							<?php endif; ?>
						<?php } ?>

						<?php if ( st_is_ver_ex_af() && isset($GLOBALS['stplus']) && $GLOBALS['stplus'] === 'yes' ) {
							get_template_part( 'st-rank' );
						} ?>

						<?php
						if( is_front_page() && ( isset($GLOBALS['stdata59']) && $GLOBALS['stdata59'] === 'yes' ) ){?>
						<div class="nowhits-under">
							<?php if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
								get_template_part( 'popular-thumbnail-off' );
							}else{
								get_template_part( 'popular-thumbnail-on' );
							} ?>
						</div>
						<?php } ?>

				<?php endif; ?>

				</div>

				<aside>

					<?php
					if( $GLOBALS["stdata44"]  === '' ){
						if( $GLOBALS["stdata66"]  !== '' ) {
							$new_entryname = st_esc_html_i( stripslashes( $GLOBALS["stdata66"] ) );
							echo '<p class="n-entry-t"><span class="n-entry">' . $new_entryname . '</span></p>';
						}
						?>

						<?php get_template_part( 'itiran' ); ?>
						<?php get_template_part( 'st-pagenavi' ); ?>
					<?php } ?>

				</aside>

					<?php get_template_part( 'sns-top' ); ?>

					<?php if ( is_front_page() && is_active_sidebar( 13 ) ) { ?>
						<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 13 ) ) : else : ?>
						<?php endif; ?>
					<?php } ?>

			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
