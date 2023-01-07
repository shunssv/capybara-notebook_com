<?php
$footer_logo_check = get_option( 'st_footer_logo' ) || ( get_option( 'st_logo_image' ) && ( st_headerfooter_logo() ) ) ? true : false;
	
if ( ! $footer_logo_check && get_option( 'st_icon_logo' ) ): ?>
	<div id="st-footer-logo">
		<div id="st-icon-logo">
			<?php if ( is_front_page() ): ?>
				<img src="<?php echo esc_url( get_option( 'st_icon_logo' ) ); ?>" >
			<?php else: ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_option( 'st_icon_logo' ) ); ?>" ></a>
			<?php endif; ?>
		</div>
<?php endif; ?>

	<div id="st-text-logo">

		<h3 class="footerlogo">
			<!-- ロゴ又はブログ名 -->
			<?php if ( !is_home() || !is_front_page() ): ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php endif; ?>

				<?php if  ( get_option( 'st_footer_logo' )) : ?>
					<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_footer_logo' ) ); ?>" >
				<?php else: ?>
					<?php if  ( get_option( 'st_logo_image' ) && (st_headerfooter_logo()) ): ?>
						<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" >
					<?php else: ?>
						<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
					<?php endif; ?>
				<?php endif; ?>

			<?php if ( !is_home() || !is_front_page() ): ?>
				</a>
			<?php endif; ?>
		</h3>

		<?php if(trim($GLOBALS['stdata102']) === ''): ?>
			<p class="footer-description">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
			</p>
		<?php endif; ?>

	</div>

<?php if ( get_option( 'st_icon_logo' ) ): ?>
	</div><!-- /#st-footer-logo -->
<?php endif; ?>

<?php if(trim($GLOBALS['stdata206']) === ''): ?>
	<div class="st-footer-tel">
		<?php get_template_part( 'st-header-widget' ); ?>
	</div>
<?php endif; ?>
