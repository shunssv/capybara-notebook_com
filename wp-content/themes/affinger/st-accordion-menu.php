<?php
$st_mobile_logo_center = get_option( 'st_mobile_logo_center' );
$site_name = st_header_sitetitle();
if ( get_option( 'st_icon_logo' ) && ( $site_name || st_header_catchphrase() ) ):
	$st_icon_logo_url = esc_url( get_option( 'st_icon_logo' ) );
	$st_icon_logo_sp = '<span id="st-icon-logo"><img class="st-icon-logo-sp" src="' . $st_icon_logo_url . '"></span>';
else:
	$st_icon_logo_sp = '';
endif;

if ( st_is_header_nav_enabled() ):

	if ( trim( $GLOBALS["stdata82"] ) !== '' ):
		$menutext = '<span class="op-text">' . esc_html( $GLOBALS["stdata82"] ) . '</span>';
	else:
		$menutext = '';
	endif;
	if ( trim( $GLOBALS["stdata84"] ) !== '' ):
		$menutext2 = '<span class="op-text">' . esc_html( $GLOBALS["stdata84"] ) . '</span>';
	else:
		$menutext2 = '';
	endif;

	if ( trim( $GLOBALS["stdata85"] ) !== '' ):
		$menuurl = esc_url( $GLOBALS["stdata85"] );
	else:
		$menuurl = '#';
	endif;
	if ( trim( $GLOBALS["stdata86"] ) !== '' ):
		$menuurl2 = esc_url( $GLOBALS["stdata86"] );
	else:
		$menuurl2 = '#';
	endif;

	if ( trim( $GLOBALS["stdata81"] ) !== '' ):
		$web_icon = esc_attr( $GLOBALS["stdata81"] );
		$menuicon = '<i class="st-fa ' . $web_icon . '" aria-hidden="true"></i>';
	else:
		$menuicon = '';
	endif;
	if ( trim( $GLOBALS["stdata83"] ) !== '' ):
		$web_icon2 = esc_attr( $GLOBALS["stdata83"] );
		$menuicon2 = '<i class="st-fa ' . $web_icon2 . '" aria-hidden="true"></i>';
	else:
		$menuicon2 = '';
	endif;

	$has_text = ( isset( $GLOBALS['stdata374'] ) && $GLOBALS['stdata374'] === 'yes' )
?>
	<nav id="s-navi" class="pcnone" data-st-nav data-st-nav-type="<?php echo esc_attr( _st_get_sticky_menu_type() ); ?>">
		<dl class="acordion is-active" data-st-nav-primary>
			<dt class="trigger">
				<p class="acordion_button"><span class="op op-menu<?php if ( $has_text ): ?> has-text<?php endif; ?>"><i class="st-fa <?php st_svg_close_class(); ?>"></i></span></p>

				<?php if ( isset( $GLOBALS['stdata479'] ) && $GLOBALS['stdata479'] === 'yes' ) : ?>
					<p class="acordion_button acordion_button_search"><span class="op op-search"><i class="st-fa st-svg-search_s <?php st_svg_close_class( 'op-search-close' ); ?>"></i></span></p>
				<?php endif; ?>

				<?php if ( is_front_page() && trim( $GLOBALS['stdata429'] ) !== '' ) : ?>
				<?php elseif ( st_has_additional_mobile_menu() ): ?>
					<div id="st-mobile-logo"></div>
				<?php elseif ( is_front_page() ) : ?>

					<?php if( ! st_header_catchphrase() && st_header_sitetitle() ): ?>

						<?php if ( $st_mobile_logo_center ): ?>
							<?php echo $st_icon_logo_sp; ?>
						<?php endif; ?>
						<h1 id="st-mobile-logo">
							<?php if ( ! $st_mobile_logo_center ): ?>
								<?php echo $st_icon_logo_sp; ?>
							<?php endif; ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'description' ); ?>"><?php if ( get_option( 'st_mobile_logo' ) ): //ロゴ画像がある時 ?><img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_mobile_logo' ) ); ?>" ><?php else: //ロゴ画像が無い時 ?><?php echo esc_html( wp_trim_words( get_bloginfo( 'name' ), 120, '...' ) ); ?><?php endif; ?></a>
						</h1>

					<?php elseif( st_header_catchphrase() || st_header_sitetitle() ): ?>

						<?php if ( get_option( 'st_mobile_logo' ) ): ?>
							<?php get_template_part( 'st-header-logo-img' ); ?>
						<?php else: ?>
							<?php if ( $st_mobile_logo_center ): ?>
								<?php echo $st_icon_logo_sp; ?>
							<?php endif; ?>
							<div id="st-mobile-logo" class="st-mobile-title">
								<?php if ( ! $st_mobile_logo_center ): ?>
									<?php echo $st_icon_logo_sp; ?>
								<?php endif; ?>
								<div id="st-text-logo">
									<?php get_template_part( 'st-header-logo' ); ?>
								</div>
							</div>
						<?php endif; ?>

					<?php endif; ?>

				<?php else: ?>

					<?php if( ! st_header_catchphrase() && st_header_sitetitle() ): ?>

						<?php if ( $st_mobile_logo_center ): ?>
							<?php echo $st_icon_logo_sp; ?>
						<?php endif; ?>
						<p id="st-mobile-logo">
							<?php if ( ! $st_mobile_logo_center ): ?>
								<?php echo $st_icon_logo_sp; ?>
							<?php endif; ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'description' ); ?>"><?php if ( get_option( 'st_mobile_logo' ) ): //ロゴ画像がある時 ?><img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_mobile_logo' ) ); ?>" ><?php else: //ロゴ画像が無い時 ?><?php echo esc_html( wp_trim_words( get_bloginfo( 'name' ), 120, '...' ) ); ?><?php endif; ?></a>
						</p>

					<?php elseif( st_header_catchphrase() || st_header_sitetitle() ): ?>

						<?php if ( get_option( 'st_mobile_logo' ) ): ?>
							<?php get_template_part( 'st-header-logo-img' ); ?>
						<?php else: ?>
				
							<?php if ( $st_mobile_logo_center ): ?>
								<?php echo $st_icon_logo_sp; ?>
							<?php endif; ?>

							<div id="st-mobile-logo" class="st-mobile-title">
								<?php if ( ! $st_mobile_logo_center ): ?>
									<?php echo $st_icon_logo_sp; ?>
								<?php endif; ?>
								<div id="st-text-logo">
									<?php get_template_part( 'st-header-logo' ); ?>
								</div>
							</div>
						<?php endif; ?>

					<?php endif; ?>
				<?php endif; ?>

				<!-- 追加メニュー -->
				<?php if ( ( trim( $GLOBALS["stdata81"] ) !== '' ) || ( trim( $GLOBALS["stdata82"] ) !== '' ) ) { ?>
					<p class="acordion_extra_1"><a href="<?php echo $menuurl ?>"><span class="op-st"><?php echo $menuicon; ?><?php echo $menutext ?></span></a></p>
				<?php } else { } ?>

				<!-- 追加メニュー2 -->
				<?php if ( ( trim( $GLOBALS["stdata83"] ) !== '' ) || ( trim( $GLOBALS["stdata84"] ) !== '' )  ) { ?>
					<p class="acordion_extra_2"><a href="<?php echo $menuurl2 ?>"><span class="op-st2"><?php echo $menuicon2; ?><?php echo $menutext2 ?></span></a></p>
				<?php } else { } ?>

			</dt>

			<dd class="acordion_tree">
				<div class="acordion_tree_content">

					<?php if ( is_active_sidebar( 25 ) ) : ?>
						<div class="st-ac-box">
							<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 25 ) ) : else : ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>


						<?php
						if ( has_nav_menu( 'smartphone-menu' ) ) :
							$defaults = array(
								'theme_location' => 'smartphone-menu',
								'link_before'    => '<span class="menu-item-label">',
								'link_after'     => '</span>',
							);
						else :
							$defaults = array(
								'theme_location' => 'primary-menu',
								'link_before'    => '<span class="menu-item-label">',
								'link_after'     => '</span>',
							);
						endif;?>
						<?php wp_nav_menu( $defaults ); ?>
						<div class="clear"></div>

					<?php if ( is_active_sidebar( 27 ) ): ?>
						<div class="st-ac-box st-ac-box-bottom">
							<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 27 ) ) : else : ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>

				</div>
			</dd>

			<?php if ( isset( $GLOBALS['stdata479'] ) && $GLOBALS['stdata479'] === 'yes' ): ?>
				<dd class="acordion_search">
					<div class="acordion_search_content">
						<?php if ( is_active_sidebar( 34 ) ): ?>
							<?php dynamic_sidebar( 34 ); ?>
						<?php else: ?>
							<?php echo get_search_form(); ?>
						<?php endif; ?>
					</div>
				</dd>
			<?php endif; ?>
		</dl>

		<?php ?>
		<?php if ( _st_is_sticky_mobile_link_design_available() ): ?>
			<div id="st-mobile-link-design-sticky" class="ac-shadow" data-st-nav-secondary>
				<?php
				st_get_template_part(
					'st-footer-link-design',
					null,
					array(
						'nav_menu_args' => array(
							'menu_id' => 'menu-st-mobile-link-design-sticky',
						)
					)
				);
				?>
			</div>
		<?php endif; ?>
	</nav>
<?php
endif;
