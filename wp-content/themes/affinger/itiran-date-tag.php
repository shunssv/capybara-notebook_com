<?php
$st_is_ex    = st_is_ver_ex();
if ( $st_is_ex && ( get_the_date() != get_the_modified_date() ) && isset($GLOBALS['stdata592']) && $GLOBALS['stdata592'] === 'yes' ) :
	$today_date = date( 'Y/n/j' );
else:
	$today_date = '';
endif;
$show_published_date = ( get_option( 'st-data140', '' ) === 'yes' );
if ( trim ( $GLOBALS['stdata324'] ) === '' ): ?>
	<div class="blog_info">
		<p>
			<?php if( $st_is_ex ):
				$postID = get_the_ID();
				$updatewidgetset = get_post_meta( $postID, 'updatewidget_set', true );
			else:
				$updatewidgetset = '';
			endif;

			if ( ! $show_published_date && trim ( $updatewidgetset ) === '' && $today_date ): ?>
				<i class="st-fa st-svg-refresh"></i><?php echo esc_html( $today_date ); ?>
			<?php elseif ( ! $show_published_date && trim ( $updatewidgetset ) === '' && ( get_the_date() != get_the_modified_date() ) ) : ?>
				<i class="st-fa st-svg-refresh"></i><?php the_modified_date( 'Y/n/j' ); ?>
			<?php else: ?>
				<i class="st-fa st-svg-clock-o"></i><?php the_time( 'Y/n/j' ); ?>
			<?php endif; ?>
			<?php if ( trim( $GLOBALS['stdata466']) === '' ) : ?>
				&nbsp;<span class="pcone">
						<?php the_tags( '<i class="st-fa st-svg-tags"></i>&nbsp;', ', ' ); ?>
				</span></p>
			<?php endif; ?>
	</div>
<?php else: ?>
	<?php if ( trim( $GLOBALS['stdata466']) === '' ) : ?>
		<div class="blog_info">
			<p><span class="pcone"><?php the_tags( '<i class="st-fa st-svg-tags"></i>&nbsp;', ', ' ); ?></span></p>
		</div>
	<?php endif; ?>
<?php endif;
