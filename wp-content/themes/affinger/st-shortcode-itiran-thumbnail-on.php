<?php
$st_is_ex = st_is_ver_ex();
$in_feed_ad_cycle = (int) trim( get_option( 'st-data214', '' ) );
$show_in_feed_ad = false;
$in_feed_ad_per  = false;
if( $st_is_ex ):

	$wpp_view_limit = trim( get_option( 'st-data223', '' ) );
	$wpp_view_limit = ( $wpp_view_limit !== '' ) ? (int) $wpp_view_limit : 9999;


	$wpp_view_limit_label = trim( get_option( 'st-data224', '' ) );
	$wpp_view_limit_label = ( $wpp_view_limit_label !== '' ) ? $wpp_view_limit_label : '殿堂';

	$show_wpp_view_count      = (bool) trim( get_option( 'st-data225', '' ) );
endif;
$default_thumbnail        = trim( get_option( 'st-data97', '' ) );
$hide_excerpt_on_pc       = (bool) trim( get_option( 'st-data202', '' ) );
$show_category_on_listing = (bool) trim( get_option( 'st-data125', '' ) );

$is_rank = (bool) $attributes['is_rank'] ?: false;

$amp            = amp_is_amp() ? 'amp' : null;
?>

<?php if ( $query->have_posts() ): $offset = 0; ?>
	<div class="kanren shortcode-kanren <?php st_marugazou_class(); ?>">
		<?php while ( $query->have_posts() ): $query->the_post(); ?>

			<?php
			$postID = get_the_ID();
			$st_youtube_thumbnail_info = st_youtube_thumbnail_info( $postID );
			$youtube_thum_img          = $st_youtube_thumbnail_info['youtube_thumb_img'];
			?>

			<?php if ( $show_in_feed_ad && ( ( $offset + $query->current_post + 1 ) % $in_feed_ad_per === 0 ) ): ?>
				<div class="st-infeed-adunit">
					<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
						<?php dynamic_sidebar( 26 ); ?>
					<?php endif; ?>
				</div>
			<?php
			$offset ++;
			endif; ?>

			<dl class="clearfix">
				<dt><a href="<?php the_permalink(); ?>">
						<?php if ( $is_rank ): ?>
							<div class="kanren-rank-label">
								<?php $rank = $query->current_post + 1; ?>

									<?php if ( $youtube_thum_img || has_post_thumbnail() ): ?>
										<?php get_template_part( 'st-thumbnail' ); ?><span class="kanren-no kanren-rank<?php echo esc_attr( $rank ); ?>"><?php echo esc_html( $rank ); ?></span>
									<?php else: ?>
										<?php if(trim($GLOBALS['stdata97']) !== ''){ ?>
											<img src="<?php echo esc_url( ($GLOBALS['stdata97']) ); ?>" alt="no image" title="no image" width="100" height="100" /><span class="kanren-no kanren-rank<?php echo esc_attr( $rank ); ?>"><?php echo esc_html( $rank ); ?></span>
										<?php }else{ ?>
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" /><span class="kanren-no kanren-rank<?php echo esc_attr( $rank ); ?>"><?php echo esc_html( $rank ); ?></span>
										<?php } ?>
									<?php endif;  ?>

							</div>
							<?php if( $st_is_ex ): ?>
								<?php elseif ( $show_wpp_view_count && function_exists( 'wpp_get_views' ) && ! amp_is_amp() ): ?>
									<?php $wpp_view_count = max( 0, (int) wpp_get_views( get_the_ID(), null, false ) ); ?>
									<div class="st-wppviews-label">
										<div class="st-wppviews-text">
											<?php if ( $wpp_view_count > $wpp_view_limit ): ?>
												<span class="wpp-views-limit"><?php echo esc_html( $wpp_view_limit_label ); ?></span>
											<?php else: ?>
												<span class="wpp-views"><?php echo esc_html( number_format_i18n( $wpp_view_count ) ); ?><span class="wpp-text">view</span></span>
											<?php endif; ?>
										</div>

										<?php if ( $youtube_thum_img || has_post_thumbnail() ): ?>
											<?php get_template_part( 'st-thumbnail' ); ?>
										<?php else: ?>
											<?php if(trim($GLOBALS['stdata97']) !== ''){ ?>
												<img src="<?php echo esc_url( ($GLOBALS['stdata97']) ); ?>" alt="no image" title="no image" width="100" height="100" />
											<?php }else{ ?>
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
											<?php } ?>
										<?php endif;  ?>
									</div>
							<?php endif; ?>

						<?php else: ?>

							<?php if ( $youtube_thum_img || has_post_thumbnail() ): ?>
								<?php get_template_part( 'st-thumbnail' ); ?>
							<?php else: ?>
								<?php if(trim($GLOBALS['stdata97']) !== ''){ ?>
									<img src="<?php echo esc_url( ($GLOBALS['stdata97']) ); ?>" alt="no image" title="no image" width="100" height="100" />
								<?php }else{ ?>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
								<?php } ?>
							<?php endif;  ?>

						<?php endif; ?>
					</a></dt>
				<dd>
					<?php if ( trim( $GLOBALS['stdata465']) === '' ) : st_get_template_part( 'st-shortcode-single-category', $amp ); endif; ?>

					<h5 class="kanren-t"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

					<?php get_template_part( 'itiran-date-tag' ); ?>

					<?php get_template_part( 'st-excerpt' );   ?>

					<?php if ( isset( $GLOBALS['stdata465']) && $GLOBALS['stdata465'] === 'yes' ) :
						echo '<div class="st-catgroup-under">';
						st_get_template_part( 'st-shortcode-single-category', $amp );
						echo '</div>';
					endif; ?>

				</dd>
			</dl>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php else: ?>
<?php endif; ?>
