<?php
$st_is_ex    = st_is_ver_ex();
if ( $st_is_ex && ( get_the_date() != get_the_modified_date() ) && isset($GLOBALS['stdata592']) && $GLOBALS['stdata592'] === 'yes' ) :
	$today_date = date( get_option( 'date_format' ) );
else:
	$today_date = '';
endif;
$show_published_date = ( get_option( 'st-data140', '' ) === 'yes' ); ?>
<?php if ( ! is_front_page() ): ?>
	<div class="blogbox <?php st_hidden_class(); ?>">
		<p><span class="kdate">
			<?php if( $st_is_ex ):
				$postID = get_the_ID();
				$updatewidgetset = get_post_meta( $postID, 'updatewidget_set', true );
			else:
				$updatewidgetset = '';
			endif;

			if ( amp_is_amp() ) :
				if ( ! $show_published_date && trim ( $updatewidgetset ) === '' && $today_date ): ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i> <?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i> <time class="updated" datetime="<?php echo date( DATE_ISO8601 ); ?>"><?php echo esc_html( $today_date ); ?></time>
				<?php elseif ( ! $show_published_date && trim ( $updatewidgetset ) === '' && ( get_the_date() != get_the_modified_date() ) ) : ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i> <?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i> <time class="updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_modified_date() ); ?></time>
				<?php else: ?>
					<i class="st-fa st-svg-clock-o"></i> <time class="updated" datetime="<?php echo esc_attr( get_the_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				<?php endif;

			else:

				if ( ! $show_published_date && trim ( $updatewidgetset ) === '' && $today_date ): ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i><?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i><time class="updated" datetime="<?php echo date( DATE_ISO8601 ); ?>"><?php echo esc_html( $today_date ); ?></time>
				<?php elseif ( ! $show_published_date && trim ( $updatewidgetset ) === '' && ( get_the_date() != get_the_modified_date() ) ) : ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i><?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i><time class="updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_modified_date() ); ?></time>
				<?php else: ?>
					<i class="st-fa st-svg-clock-o"></i><time class="updated" datetime="<?php echo esc_attr( get_the_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				<?php endif;
			endif; ?>
		</span></p>
	</div>
<?php endif; ?>
