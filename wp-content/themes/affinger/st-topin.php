<?php
if ( trim( $GLOBALS["stdata9"] ) !== '' ) {
	$topin_id = $GLOBALS["stdata9"];
	if(get_post($topin_id)){
		$topin_type = get_post($topin_id)->post_type;
	}else{
		$topin_type = '';
	}
}else{
	$topin_id = '';
	$topin_type = '';
}


if( ( trim( $topin_id ) !== '' ) && ( $topin_type === 'page' )){
?>

<div class="post st-topin">

	<?php
		$topin_query = new WP_Query( 'post_type=page&p=' . $topin_id );
		$postID = $topin_query->post->ID;
		$eyecatchset = get_post_meta( $postID, 'eyecatch_set', true );


		$st_youtube_thumbnail_info   = st_youtube_thumbnail_info( $postID );
		$youtube_thum_img            = $st_youtube_thumbnail_info['youtube_thumb_img'];
		$youtube_thum_url            = $st_youtube_thumbnail_info['youtube_thumb_url'];
		$youtube_link                = $st_youtube_thumbnail_info['youtube_video_url'];
		$st_youtube_eyecatch         = $st_youtube_thumbnail_info['use_youtube_video'];
		$st_youtube_eyecatch_html    = apply_filters( 'the_content', "<div class='st-youtube-eyecatch'><div class='youtube-container'>[embed]" . esc_url( $youtube_link ) . "[/embed]</div></div>" );

		$is_amp           = amp_is_amp();
		$youtube_thum_img = ( $is_amp && $youtube_thum_url )
			? '<img src="' . esc_url( $youtube_thum_url ) . '" alt="" width="960" height="540" />'
			: $youtube_thum_img;

		if ( $youtube_thum_img ){ ?>
				<?php if ( ! $is_amp && $st_youtube_eyecatch ){ ?>
					<?php echo '<div class="st-eyecatch"><div class="youtube_thum_link_full">'. $st_youtube_eyecatch_html . '</div></div>'; ?>
				<?php } else { ?>
					<?php echo '<div class="st-eyecatch"><div class="youtube_thum_link_full">'. $youtube_thum_img . '</div></div>'; ?>
				<?php } ?>
		<?php } elseif ( get_post_thumbnail_id( $postID ) && (( isset($GLOBALS['stdata53']) && $GLOBALS['stdata53'] === 'yes' ) || ( isset( $eyecatchset ) && $eyecatchset === 'yes' ))) { ?>
			<div class="st-eyecatch"><?php echo get_the_post_thumbnail( $topin_query->post->ID,'full' ); ?>

				<?php
				$stcopyurl = get_post_meta( $postID, 'st_copyurl', true );
				$stcopyright = get_post_meta( $postID, 'st_copyright', true );

				if( trim( $stcopyright ) !== '' ) { ?>
					<p class="eyecatch-copyurl"><i class="st-fa st-svg-copyright" aria-hidden="true"></i><?php echo esc_url( get_home_url()); ?></p>
				<?php
				} elseif( trim( $stcopyurl ) !== '' ) { ?>
					<p class="eyecatch-copyurl"><i class="st-fa st-svg-camera-retro" aria-hidden="true"></i><?php echo stripslashes( $stcopyurl ); ?></p>
				<?php
				}elseif((!empty(get_post(get_post_thumbnail_id($postID))->post_excerpt)) && (trim($GLOBALS['stdata75']) !== '' && $GLOBALS['stdata75'] === 'yes')){ ?>
					<p class="eyecatch-copyurl"><i class="st-fa st-svg-camera-retro" aria-hidden="true"></i><?php echo get_post(get_post_thumbnail_id($postID))->post_excerpt;?></p>
			</div>
		<?php }	?>

	<?php }

		if(!is_front_page() && is_home()){
		}else{
			if ( get_post_thumbnail_id( $postID ) && (( isset($GLOBALS['stdata53']) && $GLOBALS['stdata53'] === 'yes' ) || ( isset( $eyecatchset ) && $eyecatchset === 'yes' ))) { ?>
				<div class="nowhits-eye"><?php get_template_part( 'popular-thumbnail' ); ?></div>
			<?php }else{ ?>
				<div class="nowhits <?php st_noheader_class(); ?>"><?php get_template_part( 'popular-thumbnail' ); ?></div>
			<?php } ?>

			<?php if ( is_front_page() && is_active_sidebar( 12 ) ) { ?>
					<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 12 ) ) : else : ?>
					<?php endif; ?>
			<?php } ?>

			<?php get_template_part( 'news-st' ); ?>
		<?php } ?>

		<?php
		if ( $topin_query->have_posts() ) : while ( $topin_query->have_posts() ) : $topin_query->the_post();
			st_the_content( 'topin' );
		endwhile;
			wp_reset_postdata();
		endif; ?>
</div>
<?php
} else {

}
?>
