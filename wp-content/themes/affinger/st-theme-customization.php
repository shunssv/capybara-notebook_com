<?php

if ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'biz' ){
	if ( locate_template( 'st-theme-get-preset-theme-mod-overrides_biz.php' ) !== '' ) {
		require_once locate_template( 'st-theme-get-preset-theme-mod-overrides_biz.php' );
	}
}elseif ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'flat' ){
 	if ( locate_template( 'st-theme-get-preset-theme-mod-overrides_flat.php' ) !== '' ) {
		require_once locate_template( 'st-theme-get-preset-theme-mod-overrides_flat.php' );
	}
}elseif ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'cute' ){
 	if ( locate_template( 'st-theme-get-preset-theme-mod-overrides_cute.php' ) !== '' ) {
		require_once locate_template( 'st-theme-get-preset-theme-mod-overrides_cute.php' );
	}
}elseif ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'blog' ){
 	if ( locate_template( 'st-theme-get-preset-theme-mod-overrides_blog.php' ) !== '' ) {
		require_once locate_template( 'st-theme-get-preset-theme-mod-overrides_blog.php' );
	}
}elseif ( st_is_ver_ex() && isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'ex' ){
 	if ( locate_template( 'st-theme-get-preset-theme-mod-overrides_ex.php' ) !== '' ) {
		require_once locate_template( 'st-theme-get-preset-theme-mod-overrides_ex.php' );
	}
}elseif ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'reset' ){
 	if ( locate_template( 'st-theme-get-preset-theme-mod-overrides_reset.php' ) !== '' ) {
		require_once locate_template( 'st-theme-get-preset-theme-mod-overrides_reset.php' );
	}
}else{
 	if ( locate_template( 'st-theme-get-preset-theme-mod-overrides.php' ) !== '' ) {
		require_once locate_template( 'st-theme-get-preset-theme-mod-overrides.php' );
	}
}

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'St_Customize_Button_Control' ) ) {
	class St_Customize_Button_Control extends WP_Customize_Control {
		public $type         = 'button';

		public $button_label = 'ボタン';

		public $class        = 'button-primary button';

		public function render_content() {
			?>
			<label>
				<?php if ( ! empty( $this->label ) ) : ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo $this->description; ?></span>
				<?php endif; ?>

				<button id="<?php echo esc_attr( $this->id ); ?>" type="button" name="<?php echo esc_attr( $this->id ); ?>" class="<?php echo esc_attr( $this->class ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->input_attrs(); ?>>
					<?php echo esc_html( $this->button_label ); ?>
				</button>
			</label>
			<?php
		}

		public function enqueue() {
			wp_enqueue_script(
				'st-customizer-reset',
				get_template_directory_uri() . '/js/customizer-reset.js',
				array( 'jquery' ),
				false,
				true
			);

			wp_localize_script(
				'st-customizer-reset',
				'ST_CUSTOMIZER_RESET',
				array(
					'nonce' => wp_create_nonce( 'st_customizer_reset' ),
				)
			);
		}
	}
}

if ( !function_exists( 'st_is_customizer_enabled' ) ) {
	function st_is_customizer_enabled() {
		return true;
	}
}

if ( !function_exists( 'st_get_preset_name' ) ) {
	function st_get_preset_name() {
		return get_option( 'st-data68', '' );
	}
}

if ( !function_exists( 'st_should_output_style_element' ) ) {
	function st_should_output_style_element() {
		return ( get_option( 'st-data90', '' ) === 'yes' );
	}
}

if ( !function_exists( 'st_get_kantan_setting' ) ) {
	function st_get_kantan_setting() {
		return get_theme_mod( 'st_theme_setting', '' );
	}
}

if ( !function_exists( 'st_get_entrytitle_designsetting' ) ) {
	function st_get_entrytitle_designsetting() {
		return get_theme_mod( 'st_entrytitle_designsetting', '' );
	}
}

if ( !function_exists( 'st_get_h2_designsetting' ) ) {
	function st_get_h2_designsetting() {
		return get_theme_mod( 'st_h2_designsetting', 'centerlinedesign' );
	}
}

if ( !function_exists( 'st_get_h3_designsetting' ) ) {
	function st_get_h3_designsetting() {
		return get_theme_mod( 'st_h3_designsetting', '' );
	}
}

if ( !function_exists( 'st_get_widgets_title_designsetting' ) ) {
	function st_get_widgets_title_designsetting() {
		return get_theme_mod( 'st_widgets_title_designsetting', '' );
	}
}

if ( !function_exists( 'st_get_previous_kantan_setting' ) ) {
	function st_get_previous_kantan_setting() {
		return get_theme_mod( '_st_current_theme_setting', st_get_kantan_setting() );
	}
}

if ( !function_exists( 'st_get_preset_colors' ) ) {
	function st_get_preset_colors( $preset_name = null ) {
		switch ( true ) {
		
			case ( $preset_name === 'red' ):
				$basecolor   = '#cf3c4f';
				$maincolor   = '#d34c5d';
				$subcolor    = '#fef9fa';
				$accentcolor = $basecolor;
				$textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'blue' ):
				$basecolor   = '#3880ff';
				$maincolor   = '#4c8dff';
				$subcolor    = '#eefaff';
				$accentcolor = $basecolor;
				$textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'green' ):
				$basecolor   = '#28ba62';
				$maincolor   = '#2bca6b';
				$subcolor    = '#f7fdf9';
				$accentcolor = $basecolor;
				$textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'orange' ):
				$basecolor   = '#ffc409';
				$maincolor   = '#ffcd30';
				$subcolor    = '#fffefa';
				$accentcolor = $basecolor;
				$textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'pink' ):
				$basecolor   = '#ff8be2';
				$maincolor   = '#ff9fe7';
				$subcolor    = '#fffbfc';
				$accentcolor = $basecolor;
				$textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'glay' ):
				$basecolor   = '#222428';
				$maincolor   = '#34373d';
				$subcolor    = '#FAFAFA';
				$accentcolor = $basecolor;
				$textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'red_y' ):
                $basecolor   = '#ed576b';
                $maincolor   = '#ef697b';
                $subcolor    = '#fef7f8';
                $accentcolor = $basecolor;
                $textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'blue_y' ):
                $basecolor   = '#3dc2ff';
                $maincolor   = '#51c8ff';
                $subcolor    = '#eefaff';
                $accentcolor = $basecolor;
                $textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'green_y' ):
                $basecolor   = '#42d77d';
                $maincolor   = '#52da88';
                $subcolor    = '#f4fdf7';
                $accentcolor = $basecolor;
                $textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'orange_y' ):
                $basecolor   = '#ffd349';
                $maincolor   = '#ffd85d';
                $subcolor    = '#fffefa';
                $accentcolor = $basecolor;
                $textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'pink_y' ):
				$basecolor   = '#ffafeb';
				$maincolor   = '#ffc3f0';
				$subcolor    = '#fffbfc';
				$accentcolor = $basecolor;
				$textcolor   = '#ffffff';

				break;

		
			case ( $preset_name === 'glay_y' ):
                $basecolor   = '#92949c';
                $maincolor   = '#9c9ea5';
                $subcolor    = '#FAFAFA';
                $accentcolor = $basecolor;
                $textcolor   = '#FFFFFF';

				break;

		
			default:
				$basecolor   = '#e3e3e3';
				$maincolor   = '#f0f0f0';
				$subcolor    = '#fafafa';
				$accentcolor = '';
				$textcolor   = '#0f0f0f';

				break;
		}
	
		return array(
		
			'basecolor'   => $basecolor,
			'maincolor'   => $maincolor,
			'subcolor'    => $subcolor,
			'accentcolor' => $accentcolor,
			'textcolor'   => $textcolor,
		);
	}
}

if ( !function_exists( 'st_get_kantan_colors' ) ) {
	function st_get_kantan_colors() {
	
		return array(
		
			'keycolor'  => get_theme_mod( 'st_key_patterncolor', '' ),
			'maincolor' => get_theme_mod( 'st_main_patterncolor', '' ),
			'subcolor'  => get_theme_mod( 'st_sub_patterncolor', '' ),
			'textcolor' => get_theme_mod( 'st_text_patterncolor', '' ),
		);
	}
}

if ( !function_exists( 'st_get_plain_theme_mod_defaults' ) ) {
	function st_get_plain_theme_mod_defaults() {
		return array(

			'st_header_footer_logo'   => '',
			'st_pc_logo_height'       => '',
			'st_mobile_logo_height'   => '48',
			'st_mobile_logo_center'   => '',
			'st_mobile_sitename'      => '',
			'st_icon_logo_width'      => '60',
			'st_icon_logo_width_sp'   => '38',

			'st_area'                 => '',
			'st_main_top_bg_none'     => '',
			'st_main_archive_bg_none' => '',

			'st_top_bordercolor' => '',
			'st_line100'         => '',
			'st_line_height'     => '',

			'st_headbox_bgcolor_t'          => '',
			'st_headbox_bgcolor'            => '',
			'st_front_page_bgcolor'         => '',
			'st_wrapper_bgcolor'            => '',
			'st_header100'                  => '',
			'st_header_image_side'          => 'center',
			'st_header_image_top'           => 'center',
			'st_header_image_repeat'        => '',
			'st_header_bg_image_flex'       => '',
			'st_header_front_exclusion_set' => '',
			'st_header_gradient'            => '',

			'st_headerunder_bgcolor'      => '',
			'st_headerunder_image_side'   => 'center',
			'st_headerunder_image_top'    => 'center',
			'st_headerunder_image_repeat' => '',

			'st_headerbg_image_area'       => '',
			'st_headerbg_image_side'       => 'center',
			'st_headerbg_image_top'        => 'center',
			'st_headerbg_image_repeat'     => '',
			'st_headerbg_image_flex'       => '',
			'st_headerbg_image_dark'       => '',

			'st_menu_logocolor' => '',

			'st_menu_maincolor'                 => '',
			'st_menu_main_bordercolor'          => '',
			'st_main_opacity'                   => '',
			'st_entry_content_bg_image_side'    => 'center',
			'st_entry_content_bg_image_top'     => 'center',
			'st_entry_content_bg_image_repeat'  => '',
			'st_entry_content_bg_image_flex'    => '',

			'st_footer_widgets_bg_color' => '',
			'st_footer_widgets100'       => '',

			'st_footer_bg_text_color' => '',
			'st_footer_bg_color_t'    => '',
			'st_footer_bg_color'      => '',
			'st_footer100'            => '',
			'st_footer_image_side'    => 'center',
			'st_footer_image_top'     => 'center',
			'st_footer_image_repeat'  => '',
			'st_footerbg_image_flex'  => '',
			'st_footer_gradient'            => '',

		
			'st_main_textcolor'      => '',
			'st_main_textcolor_sub'      => '',
			'st_side_textcolor'      => '',
			'st_link_textcolor'      => '',
			'st_link_hovertextcolor' => '',
			'st_link_hoveropacity'   => '',

		
			'st_headerwidget_bgcolor'   => '',
			'st_headerwidget_textcolor' => '',
			'st_header_tel_color'       => '',

		
			'st_kuzu_color' => '#777',

		
			'st_entrytitle_color'           => '',
			'st_entrytitle_bgcolor'         => '',
			'st_entrytitle_bgcolor_t'       => '',
			'st_entrytitleborder_color'       => '',
			'st_entrytitleborder_undercolor'  => '',
			'st_entrytitle_border_tb'         => '',
			'st_entrytitle_border_tb_sub'         => '',
			'st_entrytitle_border_tb_dot'         => '',
			'st_entrytitle_designsetting'     => '',
			'st_entrytitle_bgimg_side'        => 'left',
			'st_entrytitle_bgimg_top'         => 'center',
			'st_entrytitle_bgimg_repeat'      => '',
			'st_entrytitle_bgimg_leftpadding' => '',
			'st_entrytitle_bgimg_tupadding'   => '',
			'st_entrytitle_bg_radius'         => '',
			'st_entrytitle_no_css'            => '',
			'st_entrytitle_gradient'            => '',
			'st_entrytitle_text_center'            => '',
			'st_entrytitle_design_wide'            => '',

		
			'st_h2_color'           => '',
			'st_h2_bgcolor'         => '',
			'st_h2_bgcolor_t'       => '',
			'st_h2border_color'       => '',
			'st_h2border_undercolor'  => '',
			'st_h2_border_tb'         => '',
			'st_h2_border_tb_sub'         => '',
			'st_h2_border_tb_dot'         => '',
			'st_h2_designsetting'     => '',
			'st_h2_bgimg_side'        => 'left',
			'st_h2_bgimg_top'         => 'center',
			'st_h2_bgimg_repeat'      => '',
			'st_h2_bgimg_leftpadding' => 20,
			'st_h2_bgimg_tupadding'   => 10,
			'st_h2_bg_radius'         => '',
			'st_h2_no_css'            => '',
			'st_h2_gradient'            => '',
			'st_h2_text_center'            => '',
			'st_h2_design_wide'            => '',

		
			'st_h3_color'          => '',
			'st_h3_bgcolor'        => '',
			'st_h3_bgcolor_t'      => '',
			'st_h3border_color'       => '',
			'st_h3border_undercolor'  => '',
			'st_h3_border_tb'         => '',
			'st_h3_border_tb_sub'         => '',
			'st_h3_border_tb_dot'         => '',
			'st_h3_designsetting'     => '',
			'st_h3_bgimg_side'        => 'left',
			'st_h3_bgimg_top'         => 'center',
			'st_h3_bgimg_repeat'      => '',
			'st_h3_bgimg_leftpadding' => 20,
			'st_h3_bgimg_tupadding'   => 10,
			'st_h3_bg_radius'         => '',
			'st_h3_no_css'            => '',
			'st_h3_gradient'            => '',
			'st_h3_text_center'            => '',
			'st_h3_design_wide'            => '',

		
			'st_h4_textcolor'    => '',
			'st_h4bordercolor'   => '',
			'st_h4bgcolor'       => '',
			'st_h4_design'            => '',
			'st_h4_top_border'        => '',
			'st_h4_bottom_border'     => '',
			'st_h4_bgimg_side'        => 'left',
			'st_h4_bgimg_top'         => 'center',
			'st_h4_bgimg_repeat'      => '',
			'st_h4_bgimg_leftpadding' => 20,
			'st_h4_bgimg_tupadding'   => 10,
			'st_h4hukidasi_design'    => '',
			'st_h4_bg_radius'         => '',
			'st_h4_no_css'            => '',
			'st_h4_husen_shadow'            => '',

		
			'st_h4_matome_textcolor'    => '',
			'st_h4_matome_bordercolor'   => '',
			'st_h4_matome_bgcolor'       => '',
			'st_h4_matome_design'            => '',
			'st_h4_matome_top_border'        => '',
			'st_h4_matome_bottom_border'     => '',
			'st_h4_matome_bgimg_side'        => 'left',
			'st_h4_matome_bgimg_top'         => 'center',
			'st_h4_matome_bgimg_repeat'      => '',
			'st_h4_matome_bgimg_leftpadding' => 20,
			'st_h4_matome_bgimg_tupadding'   => 10,
			'st_h4_matome_hukidasi_design'    => '',
			'st_h4_matome_bg_radius'    => '',
			'st_h4_matome_no_css'    => '',

		
			'st_h5_textcolor'    => '',
			'st_h5bordercolor'   => '',
			'st_h5bgcolor'       => '',
			'st_h5_design'            => '',
			'st_h5_top_border'        => '',
			'st_h5_bottom_border'     => '',
			'st_h5_bgimg_side'        => 'left',
			'st_h5_bgimg_top'         => 'center',
			'st_h5_bgimg_repeat'      => '',
			'st_h5_bgimg_leftpadding' => 20,
			'st_h5_bgimg_tupadding'   => 10,
			'st_h5hukidasi_design'    => '',
			'st_h5_bg_radius'         => '',
			'st_h5_no_css'            => '',
			'st_h5_husen_shadow'            => '',

			'st_blockquote_color' => '',

			'st_separator_color'       => '',
			'st_separator_bgcolor'     => '',
			'st_separator_bordercolor' => '',
			'st_separator_type'        => '',

			'st_catbg_color'   => '',
			'st_cattext_color' => '',
			'st_cattext_radius' => '',

		
			'st_news_datecolor'            => '',
			'st_news_text_color'           => '',
			'st_menu_newsbarcolor_t'       => '',
			'st_menu_newsbarcolor'         => '',
			'st_menu_newsbar_border_color' => '',
			'st_menu_newsbartextcolor'     => '',
			'st_menu_newsbgcolor'          => '',

		
			'st_menu_navbar_topunder_color' => '',
			'st_menu_navbar_side_color'     => '',
			'st_menu_navbar_right_color'    => '',
			'st_menu_navbarcolor'           => '',
			'st_menu_navbarcolor_t'         => '',
			'st_menu_navbartextcolor'       => '',
			'st_menu_bold'                  => '',
			'st_menu100'                    => '',
			'st_menu_center'                => '',
			'st_menu_width'                 => 160,
			'st_menu_padding'               => '',
			'st_navbarcolor_gradient'       => '',

			'st_headermenu_bgimg_side'           => 'center',
			'st_headermenu_bgimg_top'            => 'center',
			'st_headermenu_bgimg_repeat'         => '',
			'st_menu_navbar_front_exclusion_set' => '',

			'st_sidemenu_bgimg_side'        => 'center',
			'st_sidemenu_bgimg_top'         => 'center',
			'st_sidemenu_bgimg_repeat'      => '',
			'st_sidemenu_bgimg_leftpadding' => 15,
			'st_sidemenu_bgimg_tupadding'   => 8,

			'st_sidebg_bgimg_side'   => 'center',
			'st_sidebg_bgimg_top'    => 'center',
			'st_sidebg_bgimg_repeat' => '',

			'st_header_top_bgcolor'      => '',
			'st_header_top_bgcolor_g'    => '',
			'st_header_top_textcolor'    => '',
			'st_header_under_bgcolor'    => '',
			'st_header_under_bgcolor'       => '',
			'st_header_under_image_side'    => 'center',
			'st_header_under_image_top'     => 'center',
			'st_header_under_image_repeat'  => '',
			'st_header_under_image_flex'    => '',
			'st_header_under_image_dark'    => '',

			'st_header_card_bgcolor'    => '',
			'st_header_card_image_side'    => '',
			'st_header_card_image_top'    => '',
			'st_header_card_image_repeat'    => '',
			'st_header_card_image_flex'    => '',

			'st_headerimg100'             => '',
			'st_header_height'            => '',
			'st_header_height_sp'         => '',
			'st_header_height_vh'         => '',
			'st_header_bgcolor'           => '',
			'st_topgabg_image_side'       => 'center',
			'st_topgabg_image_top'        => 'center',
			'st_topgabg_image_repeat'     => '',
			'st_topgabg_image_flex'       => '',
			'st_topgabg_image_fix'        => '',
			'st_topgabg_image_sumahoonly' => '',

			'st_menu_navbar_undercolor' => '',

		
			'st_menu_side_widgets_topunder_color' => '',
			'st_menu_side_widgetscolor'           => '',
			'st_menu_side_widgetscolor_t'         => '',
			'st_menu_side_widgetstextcolor'       => '',
			'st_menu_icon'            => '',
			'st_undermenu_icon'       => '',
			'st_menu_icon_color'      => '',
			'st_undermenu_icon_color' => '',
			'st_sidemenu_fontsize'    => '',
			'st_sidemenu_accordion'   => '',
			'st_sidemenu_gradient'            => '',

			'st_side_bgcolor' => '',

			'st_menu_pagelist_childtextcolor'         => '',
			'st_menu_pagelist_bgcolor'                => '',
			'st_menu_pagelist_childtext_border_color' => '',

		
			'st_widgets_title_color'          => '',
			'st_widgets_title_bgcolor'        => '',
			'st_widgets_title_bgcolor_t'      => '',
			'st_widgets_titleborder_color'       => '',
			'st_widgets_titleborder_undercolor'  => '',
			'st_widgets_title_designsetting'     => '',
			'st_widgets_title_bgimg_side'        => 'left',
			'st_widgets_title_bgimg_top'         => 'center',
			'st_widgets_title_bgimg_repeat'      => '',
			'st_widgets_title_bgimg_leftpadding' => 10,
			'st_widgets_title_bgimg_tupadding'   => 7,
			'st_widgets_title_bg_radius'         => '',

			'st_tagcloud_color'       => '',
			'st_tagcloud_bordercolor'       => '',
			'st_tagcloud_bgcolor'       => '',
			'st_rss_color'            => '',

			'st_search_form_text'            => '検索したいテキストを入力',
			'st_search_form_border_color'    => '',
			'st_search_form_border_width'    => 1,
			'st_search_form_bg_color'        => '',
			'st_search_form_text_color'      => '',
			'st_search_form_icon_color'      => '',
			'st_search_form_icon_bg_color'   => '',
			'st_search_form_border_radius'   => '',
			'st_search_form_font_size'       => 14,
			'st_search_form_padding_lr'      => 25,
			'st_search_form_padding_tb'      => 10,

			'st_search_form_btn_border_color'    => '',
			'st_search_form_btn_border_width'    => 1,
			'st_search_form_btn_bg_color'        => '#f3f3f3',
			'st_search_form_btn_shadow_color'    => '',
			'st_search_form_btn_text_color'      => '#424242',
			'st_search_form_btn_font_weight'     => '',
			'st_search_form_btn_border_radius'   => 5,
			'st_search_form_btn_font_size'       => 14,
			'st_search_form_btn_padding_lr'      => 10,
			'st_search_form_btn_padding_tb'      => 10,

			'st_sns_btn'     => '',
			'st_sns_btntext' => '',

			'st_formbtn_textcolor'   => '',
			'st_formbtn_bordercolor' => '',
			'st_formbtn_bgcolor_t'   => '',
			'st_formbtn_bgcolor'     => '',
			'st_formbtn_radius'      => '',

			'st_formbtn2_textcolor'   => '',
			'st_formbtn2_bordercolor' => '',
			'st_formbtn2_bgcolor_t'   => '',
			'st_formbtn2_bgcolor'     => '',
			'st_formbtn2_radius'      => '',

			'st_contactform7btn_textcolor' => '',
			'st_contactform7btn_bgcolor'   => '',

		
			'st_menu_osusumemidasitextcolor' => '',
			'st_menu_osusumemidasicolor'     => '',
			'st_menu_osusumemidasinocolor'   => '',
			'st_menu_osusumemidasinobgcolor' => '',
			'st_menu_popbox_color'           => '',
			'st_menu_popbox_textcolor'       => '',
			'st_nohidden'                    => '',

		
			'st_blackboard_textcolor'   => '',
			'st_blackboard_bordercolor' => '',
			'st_blackboard_bgcolor'     => '',
			'st_blackboard_mokuzicolor'   => '',
			'st_blackboard_title_bgcolor'   => '',
			'st_blackboard_list3_fontweight'   => '',
			'st_blackboard_underbordercolor'   => '',
			'st_blackboard_webicon'   => 'f0f6',

		
			'st_freebox_tittle_textcolor' => '',
			'st_freebox_tittle_color'     => '',
			'st_freebox_color'            => '',
			'st_freebox_textcolor'        => '',

		
			'st_memobox_color' => '',
		
			'st_slidebox_color' => '',

		
			'st_menu_sumartmenutextcolor'          => '',
			'st_menu_sumartmenubordercolor'        => '',
			'st_menu_sumart_bg_color'              => '',
			'st_menu_smartbar_bg_color_t'          => '',
			'st_menu_smartbar_bg_image_side'       => 'center',
			'st_menu_smartbar_bg_image_top'        => 'center',
			'st_menu_smartbar_bg_image_repeat'     => '',
			'st_menu_smartbar_front_exclusion_set' => '',
			'st_menu_smartbar_bg_color'            => '',
			'st_menu_sumartbar_bg_color'           => '',
			'st_menu_sumartcolor'                  => '',
			'st_menu_faicon'                       => '',
			'st_search_slide_sumartbar_bg_color'   => '',
			'st_sticky_menu'                       => '',
			'st_sticky_primary_menu_side'          => '',
			'st_slidemenubg_image_side'            => 'center',
			'st_slidemenubg_image_top'             => 'center',
			'st_slidemenubg_image_repeat'          => '',
			'st_slidemenubg_image_flex'            => '',

		
			'st_middle_sumartmenutextcolor'   => '',
			'st_middle_sumartmenubordercolor' => '',
			'st_middle_sumart_bg_color'       => '',
			'st_middle_sumart_bg_color_t'     => '',
			'st_middle_sumartmenu_space'      => '',

			'st_menu_sumart_st_bg_color'  => '',
			'st_menu_sumart_st_color'     => '',
			'st_menu_sumart_st2_bg_color' => '',
			'st_menu_sumart_st2_color'    => '',
			'st_menu_sumart_footermenu_text_color'    => '',
			'st_menu_sumart_footermenu_bg_color'    => '',
			'st_menu_sumart_footermenu_fontawesome' => '',

		
			'st_guidemenu_bg_color'     => '',
			'st_guidemenu_radius'       => '',
			'st_guidemenutextcolor'     => '',
			'st_guidemenutextcolor2'    => '',
			'st_guide_bg_color'         => '',

		
			'st_boxnavimenu_color'        => '',
			'st_boxnavimenu_bg_color'     => '',
			'st_boxnavimenu_bordercolor'  => '',
			'st_boxnavimenu_fontawesome'  => '300',

		
			'st_webicon_question'        => '',
			'st_webicon_check'           => '',
			'st_webicon_checkbox'        => '',
			'st_webicon_checkbox_square' => '',
			'st_webicon_checkbox_size'   => '120',
			'st_webicon_checkbox_simple' => '',
			'st_webicon_exclamation'     => '',
			'st_webicon_memo'            => '',
			'st_webicon_user'            => '',
			'st_webicon_oukan'           => '',
			'st_webicon_bigginer'        => '',

		
			'st_author_basecolor'          => '',
			'st_author_bg_color'           => '',

			'st_author_profile'               => '',
			'st_author_bg_color_profile'      => '',
			'st_author_basecolor_profile'     => '',
			'st_author_text_color_profile'    => '',
			'st_author_profile_shadow'        => '',
			'st_author_profile_avatar_shadow' => '',
			'st_author_profile_radius'        => '',

			'st_author_profile_btn_url'        => '',
			'st_author_profile_btn_text'       => '',
			'st_author_profile_btn_text_color' => '',
			'st_author_profile_btn_top'        => '#eb445a',
			'st_author_profile_btn_bottom'     => '',
			'st_author_profile_btn_shadow'     => '',

		
			'st_thumbnail_bordercolor' => '',
		
			'st_kanren_bordercolor' => '',
			'st_kanren_border_dashed' => '',
		
			'st_pagination_bordercolor' => '',

		
			'st_pagetop_up'            => '',
			'st_pagetop_circle'        => '',
			'st_pagetop_bgcolor'       => '',
			'st_pagetop_img_right'     => '',
			'st_pagetop_img_bottom'    => '',
			'st_pagetop_hidden'        => '',

		
			'st_toc_textcolor'           => '',
			'st_toc_text2color'          => '',
			'st_toc_bordercolor'         => '#f3f3f3',
			'st_toc_bgcolor'             => '',
			'st_toc_list_icon_base'      => '#777',
			'st_toc_mokuzicolor'         => '',
			'st_toc_mokuzi_border'       => '',
			'st_toc_list1_left'          => '',
			'st_toc_list1_icon'          => '',
			'st_toc_list2_icon'          => '',
			'st_toc_list3_fontweight'    => '',
			'st_toc_list3_icon'          => '',
			'st_toc_underbordercolor'    => '',
			'st_toc_webicon'             => 'e91c',
			'st_toc_radius'              => '',
			'st_toc_list_style'          => _st_get_default_toc_list_style(),
			'st_toc_only_toc_fontweight' => '',
			'st_toc_border_width'        => '5',

		
			'st_maruno_textcolor'   => '',
			'st_maruno_nobgcolor'   => '',
			'st_maruno_bordercolor' => '',
			'st_maruno_bgcolor'     => '',
			'st_maruno_radius'     => '',

		
			'st_maruck_textcolor'   => '',
			'st_maruck_nobgcolor'   => '',
			'st_maruck_bordercolor' => '',
			'st_maruck_bgcolor'     => '',
			'st_maruck_radius'      => '',

		
			'st_timeline_list_color'       => '',
			'st_timeline_list_now_color'   => '',
			'st_timeline_list_bg_color'    => '',
			'st_timeline_list_color_count' => '',
			'st_timeline_list_now_blink'   => '',

		
			'st_card_border_color'   => '',
			'st_card_border_size'   => '',
			'st_card_label_bgcolor' => '',
			'st_card_label_textcolor'     => '',
			'st_card_label_designsetting' => '',

		
			'st_step_bgcolor' => '',
			'st_step_color'     => '',
			'st_step_text_color'     => '',
			'st_step_text_bgcolor' => '',
			'st_step_text_border_color'   => '',
			'st_step_radius'   => '',

		
			'st_table_bordercolor'  => '',
			'st_table_cell_bgcolor' => '',
			'st_table_td_bgcolor'   => '',
			'st_table_td_textcolor' => '',
			'st_table_td_bold'      => '',
			'st_table_tr_bgcolor'   => '',
			'st_table_tr_textcolor' => '',
			'st_table_tr_bold'      => '',

		
			'st_kaiwa_bgcolor'        => '',
			'st_kaiwa2_bgcolor'       => '',
			'st_kaiwa3_bgcolor'       => '',
			'st_kaiwa4_bgcolor'       => '',
			'st_kaiwa5_bgcolor'       => '',
			'st_kaiwa6_bgcolor'       => '',
			'st_kaiwa7_bgcolor'       => '',
			'st_kaiwa8_bgcolor'       => '',
			'st_kaiwa_no_border'      => '',
			'st_kaiwa_borderradius'   => '',
			'st_kaiwa_change_border'  => '',
			'st_kaiwa_change_border_bgcolor'  => '',

		);
	}
}

if (!function_exists( 'st_get_menuonly_theme_mod_overrides' )) {
	function st_get_menuonly_theme_mod_overrides() {
		extract( st_get_kantan_colors(), EXTR_OVERWRITE );

		return array(
		

		
			'st_menu_navbar_topunder_color' => $keycolor,
			'st_menu_navbar_side_color'     => $keycolor,
			'st_menu_navbar_right_color'    => $maincolor,
			'st_menu_navbarcolor'           => $keycolor,
			'st_menu_navbarcolor_t'         => $maincolor,

			'st_menu_navbartextcolor' => $textcolor,

		
			'st_menu_pagelist_childtextcolor'         => $keycolor,
			'st_menu_pagelist_bgcolor'                => $subcolor,
			'st_menu_pagelist_childtext_border_color' => $maincolor,
		);
	}
}

if (!function_exists( 'st_get_zentai_theme_mod_overrides' )) {
	function st_get_zentai_theme_mod_overrides() {
		extract( st_get_kantan_colors(), EXTR_OVERWRITE );

		$menuonly_overrides = st_get_menuonly_theme_mod_overrides();

		if ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'biz' ){
			$zentai_overrides   = array(
				'st_header_footer_logo' => '',
				'st_mobile_logo_height' => '',
				'st_mobile_logo_center' => '',
				'st_mobile_sitename'    => $textcolor,
				'st_area'               => '',

				'st_top_bordercolor' => '',
				'st_line100'         => '',
				'st_line_height'     => '5px',

				'st_headbox_bgcolor_t'   => $maincolor,
				'st_headbox_bgcolor'     => $keycolor,
				'st_wrapper_bgcolor'     => '',
				'st_header100'           => 'yes',
				'st_header_image_side'   => 'center',
				'st_header_image_top'    => 'center',
				'st_header_image_repeat' => '',
				'st_header_gradient'            => '',

				'st_headerunder_bgcolor'      => '',
				'st_headerunder_image_side'   => 'center',
				'st_headerunder_image_top'    => 'center',
				'st_headerunder_image_repeat' => '',

				'st_menu_logocolor' => $textcolor,

				'st_menu_maincolor'        => '#ffffff',
				'st_menu_main_bordercolor' => '',
				'st_main_opacity'          => '',

				'st_footer_bg_text_color' => $textcolor,
				'st_footer_bg_color_t'    => $maincolor,
				'st_footer_bg_color'      => $keycolor,
				'st_footer100'            => 'yes',
				'st_footer_image_side'    => 'center',
				'st_footer_image_top'     => 'center',
				'st_footer_image_repeat'  => '',
				'st_footer_gradient'            => '',

			
				'st_main_textcolor'      => '',
				'st_side_textcolor'      => '',
				'st_link_textcolor'      => '',
				'st_link_hovertextcolor' => '',
				'st_link_hoveropacity'   => '',

			
				'st_headerwidget_bgcolor'   => $subcolor,
				'st_headerwidget_textcolor' => '',
				'st_header_tel_color'       => $textcolor,

			
				'st_entrytitle_color'           => '',
				'st_entrytitle_bgcolor'         => '',
				'st_entrytitle_bgcolor_t'       => '',
				'st_entrytitleborder_color'       => '',
				'st_entrytitleborder_undercolor'  => '',
				'st_entrytitle_border_tb'         => '',
				'st_entrytitle_border_tb_sub'         => '',
				'st_entrytitle_border_tb_dot'         => '',
				'st_entrytitle_designsetting'     => '',
				'st_entrytitle_bgimg_side'        => 'left',
				'st_entrytitle_bgimg_top'         => 'center',
				'st_entrytitle_bgimg_repeat'      => '',
				'st_entrytitle_bgimg_leftpadding' => '',
				'st_entrytitle_bgimg_tupadding'   => '',
				'st_entrytitle_bg_radius'         => '',
				'st_entrytitle_no_css'            => '',
				'st_entrytitle_gradient'            => '',
				'st_entrytitle_text_center'            => '',
				'st_entrytitle_design_wide'            => '',

			
				'st_h2_color'           => $keycolor,
				'st_h2_bgcolor'         => $subcolor,
				'st_h2_bgcolor_t'       => '#fff',
				'st_h2border_color'       => $keycolor,
				'st_h2border_undercolor'  => $keycolor,
				'st_h2_border_tb_sub'         => '',
				'st_h2_border_tb_dot'         => '',
				'st_h2_designsetting'     => 'linedesign',
				'st_h2_bgimg_side'        => 'left',
				'st_h2_bgimg_top'         => 'center',
				'st_h2_bgimg_repeat'      => '',
				'st_h2_bgimg_leftpadding' => 0,
				'st_h2_bgimg_tupadding'   => 10,
				'st_h2_bg_radius'         => '',
				'st_h2_no_css'            => '',
				'st_h2_gradient'            => '',
				'st_h2_text_center'            => '',
				'st_h2_design_wide'            => '',

			
				'st_h3_color'          => $keycolor,
				'st_h3_bgcolor'        => '',
				'st_h3_bgcolor_t'      => '',
				'st_h3border_color'       => $keycolor,
				'st_h3border_undercolor'  => $subcolor,
				'st_h3_border_tb'         => '',
				'st_h3_border_tb_sub'         => '',
				'st_h3_border_tb_dot'         => '',
				'st_h3_designsetting'     => 'underlinedesign',
				'st_h3_bgimg_side'        => 'left',
				'st_h3_bgimg_top'         => 'center',
				'st_h3_bgimg_repeat'      => '',
				'st_h3_bgimg_leftpadding' => 10,
				'st_h3_bgimg_tupadding'   => 10,
				'st_h3_bg_radius'         => '',
				'st_h3_no_css'            => '',
				'st_h3_gradient'            => '',
				'st_h3_text_center'            => '',
				'st_h3_design_wide'            => '',

			
				'st_h4_textcolor'    => $keycolor,
				'st_h4bordercolor'   => $keycolor,
				'st_h4bgcolor'       => '',
				'st_h4_design'            => 'yes',
				'st_h4_top_border'        => '',
				'st_h4_bottom_border'     => '',
				'st_h4_bgimg_side'        => 'left',
				'st_h4_bgimg_top'         => 'center',
				'st_h4_bgimg_repeat'      => '',
				'st_h4_bgimg_leftpadding' => 20,
				'st_h4_bgimg_tupadding'   => 7,
				'st_h4hukidasi_design'    => '',
				'st_h4_bg_radius'         => '',
				'st_h4_no_css'            => '',
				'st_h4_husen_shadow'            => '',

			
				'st_h4_matome_textcolor'    => '',
				'st_h4_matome_bordercolor'   => '',
				'st_h4_matome_bgcolor'       => '',
				'st_h4_matome_design'            => '',
				'st_h4_matome_top_border'        => '',
				'st_h4_matome_bottom_border'     => '',
				'st_h4_matome_bgimg_side'        => 'center',
				'st_h4_matome_bgimg_top'         => 'center',
				'st_h4_matome_bgimg_repeat'      => '',
				'st_h4_matome_bgimg_leftpadding' => 20,
				'st_h4_matome_bgimg_tupadding'   => 10,
				'st_h4_matome_hukidasi_design'    => '',
				'st_h4_matome_bg_radius'    => '',
				'st_h4_matome_no_css'    => '',

			
				'st_h5_textcolor'    => $keycolor,
				'st_h5bordercolor'   => '',
				'st_h5bgcolor'       => $subcolor,
				'st_h5_design'            => '',
				'st_h5_top_border'        => '',
				'st_h5_bottom_border'     => '',
				'st_h5_bgimg_side'        => 'center',
				'st_h5_bgimg_top'         => 'center',
				'st_h5_bgimg_repeat'      => '',
				'st_h5_bgimg_leftpadding' => '10',
				'st_h5_bgimg_tupadding'   => '10',
				'st_h5hukidasi_design'    => '',
				'st_h5_bg_radius'         => '',
				'st_h5_no_css'            => '',
				'st_h5_husen_shadow'            => '',

				'st_blockquote_color' => '',

				'st_separator_color'   => $textcolor,
				'st_separator_bgcolor' => $keycolor,

				'st_catbg_color'   => $keycolor,
				'st_cattext_color' => '#ffffff',

			
				'st_news_datecolor'            => $keycolor,
				'st_news_text_color'           => '#333',
				'st_menu_newsbarcolor_t'       => $keycolor,
				'st_menu_newsbarcolor'         => $keycolor,
				'st_menu_newsbar_border_color' => $keycolor,
				'st_menu_newsbartextcolor'     => $textcolor,
				'st_menu_newsbgcolor'          => '',

			
				'st_menu_navbar_topunder_color' => $maincolor,
				'st_menu_navbar_side_color'     => $keycolor,
				'st_menu_navbar_right_color'    => $maincolor,
				'st_menu_navbarcolor'           => $keycolor,
				'st_menu_navbarcolor_t'         => $maincolor,
				'st_menu_navbar_undercolor'         => $maincolor,
				'st_menu_navbartextcolor'       => $textcolor,
				'st_menu_bold'                  => '',
				'st_menu100'                    => 'yes',
				'st_menu_padding'               => '',
				'st_navbarcolor_gradient'            => '',

				'st_headermenu_bgimg_side'   => 'center',
				'st_headermenu_bgimg_top'    => 'center',
				'st_headermenu_bgimg_repeat' => '',

				'st_sidemenu_bgimg_side'        => 'center',
				'st_sidemenu_bgimg_top'         => 'center',
				'st_sidemenu_bgimg_repeat'      => '',
				'st_sidemenu_bgimg_leftpadding' => 15,
				'st_sidemenu_bgimg_tupadding'   => 8,

				'st_sidebg_bgimg_side'   => 'center',
				'st_sidebg_bgimg_top'    => 'center',
				'st_sidebg_bgimg_repeat' => '',

				'st_headerimg100'             => '',
				'st_header_bgcolor'           => '',
				'st_topgabg_image_side'       => 'center',
				'st_topgabg_image_top'        => 'center',
				'st_topgabg_image_repeat'     => '',
				'st_topgabg_image_flex'       => '',
				'st_topgabg_image_sumahoonly' => '',

			
				'st_menu_side_widgets_topunder_color' => '',
				'st_menu_side_widgetscolor'           => $keycolor,
				'st_menu_side_widgetscolor_t'         => $maincolor,
				'st_menu_side_widgetstextcolor'       => '',
				'st_menu_icon'              => 'f138',
				'st_undermenu_icon'         => 'f105',
				'st_menu_icon_color'        => '',
				'st_undermenu_icon_color'   => '',
				'st_sidemenu_fontsize'      => '',
				'st_sidemenu_accordion'   => '',
				'st_sidemenu_gradient'            => '',

				'st_side_bgcolor' => '',

				'st_menu_pagelist_childtextcolor'         => $keycolor,
				'st_menu_pagelist_bgcolor'                => $subcolor,
				'st_menu_pagelist_childtext_border_color' => $maincolor,

			
				'st_widgets_title_color'          => $keycolor,
				'st_widgets_title_bgcolor'        => $subcolor,
				'st_widgets_title_bgcolor_t'      => '#fff',
				'st_widgets_titleborder_color'       => $keycolor,
				'st_widgets_titleborder_undercolor'  => $keycolor,
				'st_widgets_title_designsetting'     => 'linedesign',
				'st_widgets_title_bgimg_side'        => 'left',
				'st_widgets_title_bgimg_top'         => 'center',
				'st_widgets_title_bgimg_repeat'      => '',
				'st_widgets_title_bgimg_leftpadding' => 10,
				'st_widgets_title_bgimg_tupadding'   => 7,
				'st_widgets_title_bg_radius'         => '',

				'st_tagcloud_color'       => $keycolor,
				'st_tagcloud_bordercolor' => $keycolor,
				'st_rss_color'            => $keycolor,

				'st_sns_btn'     => '',
				'st_sns_btntext' => '',

				'st_formbtn_textcolor'   => $textcolor,
				'st_formbtn_bordercolor' => '',
				'st_formbtn_bgcolor_t'   => '',
				'st_formbtn_bgcolor'     => $keycolor,
				'st_formbtn_radius'      => 'yes',

				'st_formbtn2_textcolor'   => $textcolor,
				'st_formbtn2_bordercolor' => '',
				'st_formbtn2_bgcolor_t'   => '',
				'st_formbtn2_bgcolor'     => $keycolor,
				'st_formbtn2_radius'      => 'yes',

				'st_contactform7btn_textcolor' => $textcolor,
				'st_contactform7btn_bgcolor'   => $keycolor,

			
				'st_menu_osusumemidasitextcolor' => $textcolor,
				'st_menu_osusumemidasicolor'     => $keycolor,
				'st_menu_osusumemidasinocolor'   => $textcolor,
				'st_menu_osusumemidasinobgcolor' => $keycolor,
				'st_menu_popbox_color'           => $subcolor,
				'st_menu_popbox_textcolor'       => '',
				'st_nohidden'                    => '',

			
				'st_blackboard_textcolor'   => '',
				'st_blackboard_bordercolor' => '',
				'st_blackboard_bgcolor'     => '',
				'st_blackboard_mokuzicolor'   => '',
				'st_blackboard_title_bgcolor'   => '',
				'st_blackboard_list3_fontweight'   => '',
				'st_blackboard_underbordercolor'   => '',
				'st_blackboard_webicon'   => 'f0f6',

			
				'st_freebox_tittle_textcolor' => $textcolor,
				'st_freebox_tittle_color'     => $keycolor,
				'st_freebox_color'            => $subcolor,
				'st_freebox_textcolor'        => '',

			
				'st_memobox_color' => '',
			
				'st_slidebox_color' => '',

			
				'st_menu_sumartmenutextcolor' => '',
				'st_menu_sumartmenubordercolor' => $maincolor,
				'st_menu_sumart_bg_color'     => '',
				'st_menu_smartbar_bg_color_t'     => '',
				'st_menu_smartbar_bg_color'     => '',
				'st_menu_sumartbar_bg_color'  => $subcolor,
				'st_menu_sumartcolor'         => $textcolor,
				'st_menu_faicon'              => '',
				'st_sticky_menu'              => '',

				'st_menu_sumart_st_bg_color'  => $maincolor,
				'st_menu_sumart_st_color'     => $textcolor,
				'st_menu_sumart_st2_bg_color' => $maincolor,
				'st_menu_sumart_st2_color'    => $textcolor,
				'st_menu_sumart_footermenu_text_color'    => $textcolor,
				'st_menu_sumart_footermenu_bg_color'    => $maincolor,

			
				'st_middle_sumartmenutextcolor' => $textcolor,
				'st_middle_sumartmenubordercolor' => $maincolor,
				'st_middle_sumart_bg_color'     => $keycolor,
				'st_middle_sumart_bg_color_t'     => $keycolor,

			
				'st_webicon_question'    => '',
				'st_webicon_check'       => '',
				'st_webicon_exclamation' => '#f44336',
				'st_webicon_memo'        => '',
				'st_webicon_user'        => '',

			
				'st_thumbnail_bordercolor' => '',

			
				'st_author_basecolor' => $keycolor,
				'st_author_bg_color' => $subcolor,

			
				'st_pagetop_up'          => '',
				'st_pagetop_circle'      => 'yes',
				'st_pagetop_bgcolor'     => $keycolor,

			
				'st_toc_textcolor'           => '',
				'st_toc_text2color'          => '',
				'st_toc_bordercolor'         => '#f3f3f3',
				'st_toc_bgcolor'             => '',
				'st_toc_list_icon_base'      => '#777',
				'st_toc_mokuzicolor'         => '',
				'st_toc_mokuzi_border'       => '',
				'st_toc_list1_left'          => '',
				'st_toc_list1_icon'          => '',
				'st_toc_list2_icon'          => '',
				'st_toc_list3_fontweight'    => '',
				'st_toc_list3_icon'          => '',
				'st_toc_underbordercolor'    => '',
				'st_toc_webicon'             => 'e91c',
				'st_toc_radius'              => '',
				'st_toc_list_style'          => _st_get_default_toc_list_style(),
				'st_toc_only_toc_fontweight' => '',
				'st_toc_border_width'        => '5',

			
				'st_maruno_textcolor'   => $textcolor,
				'st_maruno_nobgcolor'   => $keycolor,
				'st_maruno_bordercolor' => '',
				'st_maruno_bgcolor'     => '',
				'st_maruno_radius'     => '',

			
				'st_maruck_textcolor'   => $textcolor,
				'st_maruck_nobgcolor'   => $keycolor,
				'st_maruck_bordercolor' => '',
				'st_maruck_bgcolor'     => '',
				'st_maruck_radius'     => '',

			
				'st_table_bordercolor'  => '',
				'st_table_cell_bgcolor' => '',
				'st_table_td_bgcolor'   => '',
				'st_table_td_textcolor' => '',
				'st_table_td_bold'      => '',
				'st_table_tr_bgcolor'   => '',
				'st_table_tr_textcolor' => '',
				'st_table_tr_bold'      => '',

			
				'st_kaiwa_bgcolor'  => $subcolor,
				'st_kaiwa2_bgcolor'  => '',
				'st_kaiwa3_bgcolor'  => '',
				'st_kaiwa4_bgcolor'  => '',
				'st_kaiwa5_bgcolor'  => '',
				'st_kaiwa6_bgcolor'  => '',
				'st_kaiwa7_bgcolor'  => '',
				'st_kaiwa8_bgcolor'  => '',

			
				'st_step_bgcolor'             => $keycolor,
				'st_step_color'               => $textcolor,
				'st_step_text_color'          => '',
				'st_step_text_bgcolor'        => '',
				'st_step_text_border_color'   => $keycolor,
				'st_step_radius'              => 'yes',

			
				'st_author_profile'           => '',
				'st_author_profile_shadow'    => '',
			);
		}elseif ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'blog' ){
			$zentai_overrides   = array(
				'st_header_footer_logo' => '',
				'st_mobile_logo_height' => '',
				'st_mobile_logo_center' => '',
				'st_mobile_sitename'     => $textcolor,
				'st_area'               => '',

				'st_top_bordercolor' => '',
				'st_line100'         => '',
				'st_line_height'     => '5px',

				'st_headbox_bgcolor_t'   => $keycolor,
				'st_headbox_bgcolor'     => $keycolor,
				'st_wrapper_bgcolor'     => '',
				'st_header100'           => 'yes',
				'st_header_image_side'   => 'center',
				'st_header_image_top'    => 'center',
				'st_header_image_repeat' => '',
				'st_header_gradient'            => '',

				'st_headerunder_bgcolor'      => '',
				'st_headerunder_image_side'   => 'center',
				'st_headerunder_image_top'    => 'center',
				'st_headerunder_image_repeat' => '',

				'st_menu_logocolor' => $textcolor,

				'st_menu_maincolor'        => '#ffffff',
				'st_menu_main_bordercolor' => '',
				'st_main_opacity'          => '',

				'st_footer_bg_text_color' => $textcolor,
				'st_footer_bg_color_t'    => $keycolor,
				'st_footer_bg_color'      => $keycolor,
				'st_footer100'            => 'yes',
				'st_footer_image_side'    => 'center',
				'st_footer_image_top'     => 'center',
				'st_footer_image_repeat'  => '',
				'st_footer_gradient'            => '',
				'st_footerbg_image_flex'  => 'yes',

			
				'st_main_textcolor'      => '',
				'st_side_textcolor'      => '',
				'st_link_textcolor'      => '',
				'st_link_hovertextcolor' => '',
				'st_link_hoveropacity'   => '',

			
				'st_headerwidget_bgcolor'   => $subcolor,
				'st_headerwidget_textcolor' => '',
				'st_header_tel_color'       => $textcolor,

			
				'st_entrytitle_color'           => '',
				'st_entrytitle_bgcolor'         => '',
				'st_entrytitle_bgcolor_t'       => '',
				'st_entrytitleborder_color'       => '',
				'st_entrytitleborder_undercolor'  => '',
				'st_entrytitle_border_tb'         => '',
				'st_entrytitle_border_tb_sub'         => '',
				'st_entrytitle_border_tb_dot'         => '',
				'st_entrytitle_designsetting'     => '',
				'st_entrytitle_bgimg_side'        => 'left',
				'st_entrytitle_bgimg_top'         => 'center',
				'st_entrytitle_bgimg_repeat'      => '',
				'st_entrytitle_bgimg_leftpadding' => '',
				'st_entrytitle_bgimg_tupadding'   => '',
				'st_entrytitle_bg_radius'         => '',
				'st_entrytitle_no_css'            => '',
				'st_entrytitle_gradient'            => '',
				'st_entrytitle_text_center'            => '',
				'st_entrytitle_design_wide'            => '',

			
				'st_h2_color'          => $keycolor,
				'st_h2_bgcolor'        => $subcolor,
				'st_h2_bgcolor_t'      => '',
				'st_h2border_color'       => $keycolor,
				'st_h2border_undercolor'  => '',
				'st_h2_border_tb'         => 'yes',
				'st_h2_border_tb_sub'         => '',
				'st_h2_border_tb_dot'         => '',
				'st_h2_designsetting'     => '',
				'st_h2_bgimg_side'        => 'left',
				'st_h2_bgimg_top'         => 'center',
				'st_h2_bgimg_repeat'      => '',
				'st_h2_bgimg_leftpadding' => '',
				'st_h2_bgimg_tupadding'   => 15,
				'st_h2_bg_radius'         => '',
				'st_h2_no_css'            => '',
				'st_h2_gradient'            => '',
				'st_h2_text_center'            => '',
				'st_h2_design_wide'            => '',

			
				'st_h3_color'           => $textcolor,
				'st_h3_bgcolor'         => $keycolor,
				'st_h3_bgcolor_t'       => $keycolor,
				'st_h3border_color'       => '',
				'st_h3border_undercolor'  => '',
				'st_h3_border_tb'         => '',
				'st_h3_border_tb_sub'         => '',
				'st_h3_border_tb_dot'         => '',
				'st_h3_designsetting'     => 'hukidasidesign',
				'st_h3_bgimg_side'        => 'left',
				'st_h3_bgimg_top'         => 'center',
				'st_h3_bgimg_repeat'      => '',
				'st_h3_bgimg_leftpadding' => 20,
				'st_h3_bgimg_tupadding'   => 10,
				'st_h3_bg_radius'         => 'yes',
				'st_h3_no_css'            => '',
				'st_h3_gradient'            => '',
				'st_h3_text_center'            => '',
				'st_h3_design_wide'            => '',

			
				'st_h4_textcolor'         => $keycolor,
				'st_h4bordercolor'        => $maincolor,
				'st_h4bgcolor'            => '',
				'st_h4_design'            => '',
				'st_h4_top_border'        => '',
				'st_h4_bottom_border'     => '',
				'st_h4_bgimg_side'        => 'left',
				'st_h4_bgimg_top'         => 'center',
				'st_h4_bgimg_repeat'      => '',
				'st_h4_bgimg_leftpadding' => 20,
				'st_h4_bgimg_tupadding'   => 10,
				'st_h4hukidasi_design'    => '',
				'st_h4_bg_radius'         => 'yes',
				'st_h4_no_css'            => '',
				'st_h4_husen_shadow'            => '',

			
				'st_h4_matome_textcolor'    => $textcolor,
				'st_h4_matome_bordercolor'   => '',
				'st_h4_matome_bgcolor'       => $keycolor,
				'st_h4_matome_design'            => '',
				'st_h4_matome_top_border'        => '',
				'st_h4_matome_bottom_border'     => '',
				'st_h4_matome_bgimg_side'        => 'center',
				'st_h4_matome_bgimg_top'         => 'center',
				'st_h4_matome_bgimg_repeat'      => '',
				'st_h4_matome_bgimg_leftpadding' => 20,
				'st_h4_matome_bgimg_tupadding'   => 10,
				'st_h4_matome_hukidasi_design'    => 'yes',
				'st_h4_matome_bg_radius'    => 'yes',
				'st_h4_matome_no_css'    => '',

			
				'st_h5_textcolor'    => $maincolor,
				'st_h5bordercolor'   => '',
				'st_h5bgcolor'       => $subcolor,
				'st_h5_design'            => '',
				'st_h5_top_border'        => '',
				'st_h5_bottom_border'     => '',
				'st_h5_bgimg_side'        => 'center',
				'st_h5_bgimg_top'         => 'center',
				'st_h5_bgimg_repeat'      => '',
				'st_h5_bgimg_leftpadding' => '15',
				'st_h5_bgimg_tupadding'   => '7',
				'st_h5hukidasi_design'    => '',
				'st_h5_bg_radius'         => '',
				'st_h5_no_css'            => '',
				'st_h5_husen_shadow'            => '',

				'st_blockquote_color' => $subcolor,

				'st_separator_color'   => $textcolor,
				'st_separator_bgcolor' => $keycolor,

				'st_catbg_color'   => $keycolor,
				'st_cattext_color' => '#ffffff',
				'st_cattext_radius' => 'yes',

			
				'st_news_datecolor'            => $keycolor,
				'st_news_text_color'           => '#333',
				'st_menu_newsbarcolor_t'       => $keycolor,
				'st_menu_newsbarcolor'         => $keycolor,
				'st_menu_newsbar_border_color' => $keycolor,
				'st_menu_newsbartextcolor'     => $textcolor,
				'st_menu_newsbgcolor'          => '',

			
				'st_menu_navbar_topunder_color' => $maincolor,
				'st_menu_navbar_side_color'     => '',
				'st_menu_navbar_right_color'    => $maincolor,
				'st_menu_navbarcolor'           => $keycolor,
				'st_menu_navbarcolor_t'         => $keycolor,
				'st_menu_navbar_undercolor'         => $maincolor,
				'st_menu_navbartextcolor'       => $textcolor,
				'st_menu_bold'                  => '',
				'st_menu100'                    => 'yes',
				'st_menu_padding'               => '',
				'st_navbarcolor_gradient'            => '',

				'st_headermenu_bgimg_side'   => 'center',
				'st_headermenu_bgimg_top'    => 'center',
				'st_headermenu_bgimg_repeat' => '',

				'st_sidemenu_bgimg_side'        => 'center',
				'st_sidemenu_bgimg_top'         => 'center',
				'st_sidemenu_bgimg_repeat'      => '',
				'st_sidemenu_bgimg_leftpadding' => 15,
				'st_sidemenu_bgimg_tupadding'   => 8,

				'st_sidebg_bgimg_side'   => 'center',
				'st_sidebg_bgimg_top'    => 'center',
				'st_sidebg_bgimg_repeat' => '',

				'st_headerimg100'             => '',
				'st_header_bgcolor'           => '',
				'st_topgabg_image_side'       => 'center',
				'st_topgabg_image_top'        => 'center',
				'st_topgabg_image_repeat'     => '',
				'st_topgabg_image_flex'       => '',
				'st_topgabg_image_sumahoonly' => '',

			
				'st_menu_side_widgets_topunder_color' => $maincolor,
				'st_menu_side_widgetscolor'           => $keycolor,
				'st_menu_side_widgetscolor_t'         => $keycolor,
				'st_menu_side_widgetstextcolor'       => $textcolor,
				'st_menu_icon'              => 'f138',
				'st_undermenu_icon'         => 'f105',
				'st_menu_icon_color'        => '',
				'st_undermenu_icon_color'   => '',
				'st_sidemenu_fontsize'      => 'yes',
				'st_sidemenu_accordion'   => '',
				'st_sidemenu_gradient'            => '',

				'st_side_bgcolor' => '',

				'st_menu_pagelist_childtextcolor'         => $keycolor,
				'st_menu_pagelist_bgcolor'                => $subcolor,
				'st_menu_pagelist_childtext_border_color' => $maincolor,

			
				'st_widgets_title_color'          => $keycolor,
				'st_widgets_title_bgcolor'        => '',
				'st_widgets_title_bgcolor_t'      => '',
				'st_widgets_titleborder_color'       => $keycolor,
				'st_widgets_titleborder_undercolor'  => $keycolor,
				'st_widgets_title_designsetting'     => 'leftlinedesign',
				'st_widgets_title_bgimg_side'        => 'left',
				'st_widgets_title_bgimg_top'         => 'center',
				'st_widgets_title_bgimg_repeat'      => '',
				'st_widgets_title_bgimg_leftpadding' => 20,
				'st_widgets_title_bgimg_tupadding'   => 5,
				'st_widgets_title_bg_radius'         => 'yes',

				'st_tagcloud_color'       => $keycolor,
				'st_tagcloud_bordercolor' => $keycolor,
				'st_rss_color'            => $keycolor,

				'st_sns_btn'     => '',
				'st_sns_btntext' => '',

				'st_formbtn_textcolor'   => $textcolor,
				'st_formbtn_bordercolor' => '',
				'st_formbtn_bgcolor_t'   => '',
				'st_formbtn_bgcolor'     => $keycolor,
				'st_formbtn_radius'      => 'yes',

				'st_formbtn2_textcolor'   => $textcolor,
				'st_formbtn2_bordercolor' => '',
				'st_formbtn2_bgcolor_t'   => '',
				'st_formbtn2_bgcolor'     => $keycolor,
				'st_formbtn2_radius'      => 'yes',

				'st_contactform7btn_textcolor' => $textcolor,
				'st_contactform7btn_bgcolor'   => $keycolor,

			
				'st_menu_osusumemidasitextcolor' => $textcolor,
				'st_menu_osusumemidasicolor'     => $keycolor,
				'st_menu_osusumemidasinocolor'   => $textcolor,
				'st_menu_osusumemidasinobgcolor' => $keycolor,
				'st_menu_popbox_color'           => $subcolor,
				'st_menu_popbox_textcolor'       => '',
				'st_nohidden'                    => '',

			
				'st_blackboard_textcolor'   => '',
				'st_blackboard_bordercolor' => '',
				'st_blackboard_bgcolor'     => '',
				'st_blackboard_mokuzicolor'   => '',
				'st_blackboard_title_bgcolor'   => '',
				'st_blackboard_list3_fontweight'   => '',
				'st_blackboard_underbordercolor'   => '',
				'st_blackboard_webicon'   => 'f0f6',

			
				'st_freebox_tittle_textcolor' => $textcolor,
				'st_freebox_tittle_color'     => $keycolor,
				'st_freebox_color'            => $subcolor,
				'st_freebox_textcolor'        => '',

			
				'st_memobox_color' => '',
			
				'st_slidebox_color' => '',

			
				'st_menu_sumartmenutextcolor' => $textcolor,
				'st_menu_sumartmenubordercolor' => $maincolor,
				'st_menu_sumart_bg_color'     => '',
				'st_menu_smartbar_bg_color_t'     => '',
				'st_menu_smartbar_bg_color'     => '',
				'st_menu_sumartbar_bg_color'  => $keycolor,
				'st_menu_sumartcolor'         => $textcolor,
				'st_menu_faicon'              => '',
				'st_sticky_menu'              => '',

				'st_menu_sumart_st_bg_color'  => $maincolor,
				'st_menu_sumart_st_color'     => $textcolor,
				'st_menu_sumart_st2_bg_color' => $maincolor,
				'st_menu_sumart_st2_color'    => $textcolor,
				'st_menu_sumart_footermenu_text_color'    => $textcolor,
				'st_menu_sumart_footermenu_bg_color'    => $maincolor,

			
				'st_guidemenu_bg_color'     => $keycolor,
				'st_guidemenu_radius'       => 'yes',
				'st_guidemenutextcolor'     => $textcolor,
				'st_guidemenutextcolor2'    => '',
				'st_guide_bg_color'         => $subcolor,

			
				'st_middle_sumartmenutextcolor' => $textcolor,
				'st_middle_sumartmenubordercolor' => $maincolor,
				'st_middle_sumart_bg_color'     => $keycolor,
				'st_middle_sumart_bg_color_t'     => $keycolor,

			
				'st_webicon_question'    => '#64B5F6',
				'st_webicon_check'       => '#FFA726',
				'st_webicon_exclamation' => '#f44336',
				'st_webicon_memo'        => '#29B6F6',
				'st_webicon_user'        => '#4FC3F7',
				'st_webicon_oukan'        => '#9E9D24',
				'st_webicon_bigginer'        => '#4CAF50',

			
				'st_thumbnail_bordercolor' => '',

			
				'st_author_basecolor' => $keycolor,
				'st_author_bg_color' => $subcolor,

			
				'st_pagetop_up'          => '',
				'st_pagetop_circle'      => 'yes',
				'st_pagetop_bgcolor'     => $keycolor,

			
				'st_toc_textcolor'           => '',
				'st_toc_text2color'          => '',
				'st_toc_bordercolor'         => '#f3f3f3',
				'st_toc_bgcolor'             => '',
				'st_toc_list_icon_base'      => '#777',
				'st_toc_mokuzicolor'         => '',
				'st_toc_mokuzi_border'       => '',
				'st_toc_list1_left'          => '',
				'st_toc_list1_icon'          => '',
				'st_toc_list2_icon'          => '',
				'st_toc_list3_fontweight'    => '',
				'st_toc_list3_icon'          => '',
				'st_toc_underbordercolor'    => '',
				'st_toc_webicon'             => 'e91c',
				'st_toc_radius'              => '',
				'st_toc_list_style'          => _st_get_default_toc_list_style(),
				'st_toc_only_toc_fontweight' => '',
				'st_toc_border_width'        => '5',

			
				'st_maruno_textcolor'   => $textcolor,
				'st_maruno_nobgcolor'   => $keycolor,
				'st_maruno_bordercolor' => '',
				'st_maruno_bgcolor'     => $subcolor,
				'st_maruno_radius'     => 'yes',

			
				'st_maruck_textcolor'   => $textcolor,
				'st_maruck_nobgcolor'   => $keycolor,
				'st_maruck_bordercolor' => '',
				'st_maruck_bgcolor'     => $subcolor,
				'st_maruck_radius'     => 'yes',

			
				'st_table_bordercolor'  => '',
				'st_table_cell_bgcolor' => '',
				'st_table_td_bgcolor'   => '',
				'st_table_td_textcolor' => '',
				'st_table_td_bold'      => '',
				'st_table_tr_bgcolor'   => '',
				'st_table_tr_textcolor' => '',
				'st_table_tr_bold'      => '',

			
				'st_kaiwa_bgcolor'  => $subcolor,
				'st_kaiwa2_bgcolor'  => '',
				'st_kaiwa3_bgcolor'  => '',
				'st_kaiwa4_bgcolor'  => '',
				'st_kaiwa5_bgcolor'  => '',
				'st_kaiwa6_bgcolor'  => '',
				'st_kaiwa7_bgcolor'  => '',
				'st_kaiwa8_bgcolor'  => '',

			
				'st_step_bgcolor'             => $keycolor,
				'st_step_color'               => $textcolor,
				'st_step_text_color'          => '',
				'st_step_text_bgcolor'        => '',
				'st_step_text_border_color'   => $keycolor,
				'st_step_radius'              => 'yes',

			
				'st_author_profile'           => '',
				'st_author_profile_shadow'    => '',
			);
		}elseif ( st_is_ver_ex() && isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'ex' ){
			$zentai_overrides   = array(
				'st_header_footer_logo' => '',
				'st_mobile_logo_height' => '',
				'st_mobile_logo_center' => '',
				'st_mobile_sitename'     => $textcolor,   
				'st_area'               => '',

				'st_top_bordercolor' => '',   
				'st_line100'         => '',   
				'st_line_height'     => '',

				'st_headbox_bgcolor_t'   => $keycolor,   
				'st_headbox_bgcolor'     => $keycolor,   
				'st_wrapper_bgcolor'     => '',   
				'st_header100'           => 'yes',   
				'st_header_image_side'   => 'center',
				'st_header_image_top'    => 'center',
				'st_header_image_repeat' => '',   
				'st_header_gradient'            => '',       

				'st_headerunder_bgcolor'      => '',   
				'st_headerunder_image_side'   => 'center',
				'st_headerunder_image_top'    => 'center',
				'st_headerunder_image_repeat' => '',   

				'st_menu_logocolor' => $textcolor,

				'st_menu_maincolor'        => '#ffffff',
				'st_menu_main_bordercolor' => '',       
				'st_main_opacity'          => '',       

				'st_footer_bg_text_color' => $textcolor,      
				'st_footer_bg_color_t'    => $keycolor,      
				'st_footer_bg_color'      => $keycolor,      
				'st_footer100'            => 'yes',      
				'st_footer_image_side'    => 'center',
				'st_footer_image_top'     => 'center',
				'st_footer_image_repeat'  => '',      
				'st_footer_gradient'            => '',       
				'st_footerbg_image_flex'  => 'yes',      

			
				'st_main_textcolor'      => '',
				'st_side_textcolor'      => '',
				'st_link_textcolor'      => '',
				'st_link_hovertextcolor' => '',
				'st_link_hoveropacity'   => '',

			
				'st_headerwidget_bgcolor'   => $subcolor,
				'st_headerwidget_textcolor' => '',
				'st_header_tel_color'       => $textcolor,

			
				'st_entrytitle_color'           => '',
				'st_entrytitle_bgcolor'         => '',       
				'st_entrytitle_bgcolor_t'       => '',       
				'st_entrytitleborder_color'       => '',       
				'st_entrytitleborder_undercolor'  => '',
				'st_entrytitle_border_tb'         => '',       
				'st_entrytitle_border_tb_sub'         => '',   
				'st_entrytitle_border_tb_dot'         => '',   
				'st_entrytitle_designsetting'     => '',       
				'st_entrytitle_bgimg_side'        => 'left', 
				'st_entrytitle_bgimg_top'         => 'center', 
				'st_entrytitle_bgimg_repeat'      => '',       
				'st_entrytitle_bgimg_leftpadding' => '',       
				'st_entrytitle_bgimg_tupadding'   => '',       
				'st_entrytitle_bg_radius'         => '',       
				'st_entrytitle_no_css'            => '',       
				'st_entrytitle_gradient'            => '',       
				'st_entrytitle_text_center'            => '',       
				'st_entrytitle_design_wide'            => '',       

			
				'st_h2_color'          => $keycolor,
				'st_h2_bgcolor'        => '',
				'st_h2_bgcolor_t'      => '',
				'st_h2border_color'       => $keycolor,
				'st_h2border_undercolor'  => '', 
				'st_h2_border_tb'         => '',       
				'st_h2_border_tb_sub'         => '',   
				'st_h2_border_tb_dot'         => '',   
				'st_h2_designsetting'     => 'hukidasidesign_under',
				'st_h2_bgimg_side'        => 'left',  
				'st_h2_bgimg_top'         => 'center',  
				'st_h2_bgimg_repeat'      => '',        
				'st_h2_bgimg_leftpadding' => 10,        
				'st_h2_bgimg_tupadding'   => 15,        
				'st_h2_bg_radius'         => '',       
				'st_h2_no_css'            => '',       
				'st_h2_gradient'            => '',       
				'st_h2_text_center'            => '',       
				'st_h2_design_wide'            => '',       

			
				'st_h3_color'           => $textcolor,
				'st_h3_bgcolor'         => $keycolor, 
				'st_h3_bgcolor_t'       => '', 
				'st_h3border_color'       => $keycolor,
				'st_h3border_undercolor'  => $textcolor, 
				'st_h3_border_tb'         => '',      
				'st_h3_border_tb_sub'         => '',   
				'st_h3_border_tb_dot'         => '',   
				'st_h3_designsetting'     => 'checkboxdesign',       
				'st_h3_bgimg_side'        => 'left', 
				'st_h3_bgimg_top'         => 'center', 
				'st_h3_bgimg_repeat'      => '',       
				'st_h3_bgimg_leftpadding' => '',       
				'st_h3_bgimg_tupadding'   => 10,       
				'st_h3_bg_radius'         => '',       
				'st_h3_no_css'            => '',       
				'st_h3_gradient'            => '',       
				'st_h3_text_center'            => '',       
				'st_h3_design_wide'            => '',       

			
				'st_h4_textcolor'         => $keycolor,
				'st_h4bordercolor'        => $keycolor,        
				'st_h4bgcolor'            => '', 
				'st_h4_design'            => 'yes',        
				'st_h4_top_border'        => '',        
				'st_h4_bottom_border'     => '',        
				'st_h4_bgimg_side'        => 'left',  
				'st_h4_bgimg_top'         => 'center',  
				'st_h4_bgimg_repeat'      => '',        
				'st_h4_bgimg_leftpadding' => 20,        
				'st_h4_bgimg_tupadding'   => 10,        
				'st_h4hukidasi_design'    => '',       
				'st_h4_bg_radius'         => '',       
				'st_h4_no_css'            => '',       
				'st_h4_husen_shadow'            => '',       

			
				'st_h4_matome_textcolor'    => $textcolor,
				'st_h4_matome_bordercolor'   => '',       
				'st_h4_matome_bgcolor'       => $keycolor,       
				'st_h4_matome_design'            => '',       
				'st_h4_matome_top_border'        => '',       
				'st_h4_matome_bottom_border'     => '',       
				'st_h4_matome_bgimg_side'        => 'center', 
				'st_h4_matome_bgimg_top'         => 'center', 
				'st_h4_matome_bgimg_repeat'      => '',       
				'st_h4_matome_bgimg_leftpadding' => 20,       
				'st_h4_matome_bgimg_tupadding'   => 10,       
				'st_h4_matome_hukidasi_design'    => 'yes',       
				'st_h4_matome_bg_radius'    => 'yes',       
				'st_h4_matome_no_css'    => '',       

			
				'st_h5_textcolor'    => $keycolor,
				'st_h5bordercolor'   => '',       
				'st_h5bgcolor'       => $subcolor, 
				'st_h5_design'            => '',        
				'st_h5_top_border'        => '',        
				'st_h5_bottom_border'     => '',        
				'st_h5_bgimg_side'        => 'center',  
				'st_h5_bgimg_top'         => 'center',  
				'st_h5_bgimg_repeat'      => '',        
				'st_h5_bgimg_leftpadding' => '15',        
				'st_h5_bgimg_tupadding'   => '7',        
				'st_h5hukidasi_design'    => '',       
				'st_h5_bg_radius'         => '',       
				'st_h5_no_css'            => '',       
				'st_h5_husen_shadow'            => '',       

				'st_blockquote_color' => $subcolor,

				'st_separator_color'   => $textcolor,
				'st_separator_bgcolor' => $keycolor,

				'st_catbg_color'   => $keycolor,
				'st_cattext_color' => '#ffffff',
				'st_cattext_radius' => 'yes',   

			
				'st_news_datecolor'            => $keycolor, 
				'st_news_text_color'           => '#333',    
				'st_menu_newsbarcolor_t'       => $keycolor, 
				'st_menu_newsbarcolor'         => $keycolor, 
				'st_menu_newsbar_border_color' => $keycolor, 
				'st_menu_newsbartextcolor'     => $textcolor,
				'st_menu_newsbgcolor'          => '',        

			
				'st_menu_navbar_topunder_color' => $maincolor,
				'st_menu_navbar_side_color'     => '',
				'st_menu_navbar_right_color'    => $maincolor,
				'st_menu_navbarcolor'           => $keycolor,
				'st_menu_navbarcolor_t'         => $keycolor,
				'st_menu_navbar_undercolor'         => $keycolor,
				'st_menu_navbartextcolor'       => $textcolor,
				'st_menu_bold'                  => '',        
				'st_menu100'                    => 'yes',        
				'st_menu_padding'               => '',        
				'st_navbarcolor_gradient'            => '',       

				'st_headermenu_bgimg_side'   => 'center',
				'st_headermenu_bgimg_top'    => 'center',
				'st_headermenu_bgimg_repeat' => '',      

				'st_sidemenu_bgimg_side'        => 'center',
				'st_sidemenu_bgimg_top'         => 'center',
				'st_sidemenu_bgimg_repeat'      => '',      
				'st_sidemenu_bgimg_leftpadding' => 15,      
				'st_sidemenu_bgimg_tupadding'   => 8,       

				'st_sidebg_bgimg_side'   => 'center',
				'st_sidebg_bgimg_top'    => 'center',
				'st_sidebg_bgimg_repeat' => '',      

				'st_headerimg100'             => '',   
				'st_header_bgcolor'           => '',   
				'st_topgabg_image_side'       => 'center',
				'st_topgabg_image_top'        => 'center',
				'st_topgabg_image_repeat'     => '',   
				'st_topgabg_image_flex'       => '',   
				'st_topgabg_image_sumahoonly' => '',   

			
				'st_menu_side_widgets_topunder_color' => $maincolor,       
				'st_menu_side_widgetscolor'           => $keycolor,       
				'st_menu_side_widgetscolor_t'         => $keycolor,       
				'st_menu_side_widgetstextcolor'       => $textcolor,
				'st_menu_icon'              => 'f138',
				'st_undermenu_icon'         => 'f105',
				'st_menu_icon_color'        => '',
				'st_undermenu_icon_color'   => '',
				'st_sidemenu_fontsize'      => 'yes',
				'st_sidemenu_accordion'   => '',
				'st_sidemenu_gradient'            => '',       

				'st_side_bgcolor' => '',

				'st_menu_pagelist_childtextcolor'         => $maincolor,
				'st_menu_pagelist_bgcolor'                => $subcolor, 
				'st_menu_pagelist_childtext_border_color' => $maincolor,

			
				'st_widgets_title_color'          => $keycolor,
				'st_widgets_title_bgcolor'        => '',      
				'st_widgets_title_bgcolor_t'      => '',       
				'st_widgets_titleborder_color'       => $keycolor,     
				'st_widgets_titleborder_undercolor'  => '',
				'st_widgets_title_designsetting'     => 'leftlinedesign',
				'st_widgets_title_bgimg_side'        => 'left', 
				'st_widgets_title_bgimg_top'         => 'center', 
				'st_widgets_title_bgimg_repeat'      => '',       
				'st_widgets_title_bgimg_leftpadding' => 20,      
				'st_widgets_title_bgimg_tupadding'   => 5,      
				'st_widgets_title_bg_radius'         => '',       

				'st_tagcloud_color'       => $keycolor,
				'st_tagcloud_bordercolor' => $keycolor,
				'st_rss_color'            => $keycolor,

				'st_sns_btn'     => '',
				'st_sns_btntext' => '',

				'st_formbtn_textcolor'   => $textcolor,
				'st_formbtn_bordercolor' => '',        
				'st_formbtn_bgcolor_t'   => '',        
				'st_formbtn_bgcolor'     => $keycolor, 
				'st_formbtn_radius'      => 'yes',        

				'st_formbtn2_textcolor'   => $textcolor,
				'st_formbtn2_bordercolor' => '',        
				'st_formbtn2_bgcolor_t'   => '',        
				'st_formbtn2_bgcolor'     => $keycolor, 
				'st_formbtn2_radius'      => 'yes',        

				'st_contactform7btn_textcolor' => $textcolor,
				'st_contactform7btn_bgcolor'   => $maincolor,

			
				'st_menu_osusumemidasitextcolor' => $textcolor,  
				'st_menu_osusumemidasicolor'     => $maincolor,
				'st_menu_osusumemidasinocolor'   => $textcolor,  
				'st_menu_osusumemidasinobgcolor' => $maincolor,
				'st_menu_popbox_color'           => $subcolor,   
				'st_menu_popbox_textcolor'       => '',          
				'st_nohidden'                    => '',          

			
				'st_webicon_checkbox_simple'      => 'yes',

			
				'st_blackboard_textcolor'   => '',
				'st_blackboard_bordercolor' => '',
				'st_blackboard_bgcolor'     => '',
				'st_blackboard_mokuzicolor'   => '',
				'st_blackboard_title_bgcolor'   => '',
				'st_blackboard_list3_fontweight'   => '',
				'st_blackboard_underbordercolor'   => '',
				'st_blackboard_webicon'   => 'f0f6',

			
				'st_freebox_tittle_textcolor' => $textcolor,  
				'st_freebox_tittle_color'     => $keycolor,
				'st_freebox_color'            => $subcolor,   
				'st_freebox_textcolor'        => '',          

			
				'st_memobox_color' => '',
			
				'st_slidebox_color' => '',

			
				'st_menu_sumartmenutextcolor' => $textcolor,
				'st_menu_sumartmenubordercolor' => $keycolor,
				'st_menu_sumart_bg_color'     => '',
				'st_menu_smartbar_bg_color_t'     => '',
				'st_menu_smartbar_bg_color'     => '',
				'st_menu_sumartbar_bg_color'  => $keycolor,      
				'st_menu_sumartcolor'         => $textcolor,
				'st_menu_faicon'              => '',       
				'st_sticky_menu'              => '',       

				'st_menu_sumart_st_bg_color'  => $keycolor,
				'st_menu_sumart_st_color'     => $textcolor,
				'st_menu_sumart_st2_bg_color' => $keycolor,
				'st_menu_sumart_st2_color'    => $textcolor,
				'st_menu_sumart_footermenu_text_color'    => $textcolor,
				'st_menu_sumart_footermenu_bg_color'    => $keycolor,

			
				'st_guidemenu_bg_color'     => $keycolor,
				'st_guidemenu_radius'       => 'yes',
				'st_guidemenutextcolor'     => $textcolor,
				'st_guidemenutextcolor2'    => '',
				'st_guide_bg_color'         => $subcolor,

			
				'st_middle_sumartmenutextcolor'   => $textcolor,
				'st_middle_sumartmenubordercolor' => $maincolor,
				'st_middle_sumart_bg_color'       => $keycolor,
				'st_middle_sumart_bg_color_t'     => $keycolor,

			
				'st_webicon_question'    => '#64B5F6',
				'st_webicon_check'       => '#FFA726',
				'st_webicon_exclamation' => '#f44336',
				'st_webicon_memo'        => '#29B6F6',
				'st_webicon_user'        => '#4FC3F7',
				'st_webicon_oukan'        => '#9E9D24',
				'st_webicon_bigginer'        => '#4CAF50',

			
				'st_thumbnail_bordercolor' => '',  

			
				'st_author_basecolor' => $keycolor, 
				'st_author_bg_color' => $subcolor,  

			
				'st_pagetop_up'          => '',  
				'st_pagetop_circle'      => 'yes',
				'st_pagetop_bgcolor'     => $keycolor,    

			
				'st_toc_textcolor'           => '',
				'st_toc_text2color'          => '',
				'st_toc_bordercolor'         => '#f3f3f3',
				'st_toc_bgcolor'             => '',
				'st_toc_list_icon_base'      => '#777',
				'st_toc_mokuzicolor'         => '',
				'st_toc_mokuzi_border'       => '',
				'st_toc_list1_left'          => '',
				'st_toc_list1_icon'          => '',
				'st_toc_list2_icon'          => '',
				'st_toc_list3_fontweight'    => '',
				'st_toc_list3_icon'          => '',
				'st_toc_underbordercolor'    => '',
				'st_toc_webicon'             => 'e91c',
				'st_toc_radius'              => '',
				'st_toc_list_style'          => _st_get_default_toc_list_style(),
				'st_toc_only_toc_fontweight' => '',
				'st_toc_border_width'        => '5',

			
				'st_maruno_textcolor'   => $textcolor,
				'st_maruno_nobgcolor'   => $keycolor,
				'st_maruno_bordercolor' => '',
				'st_maruno_bgcolor'     => $subcolor,
				'st_maruno_radius'     => 'yes',

			
				'st_maruck_textcolor'   => $textcolor,
				'st_maruck_nobgcolor'   => $keycolor,
				'st_maruck_bordercolor' => '',
				'st_maruck_bgcolor'     => $subcolor,
				'st_maruck_radius'     => 'yes',

			
				'st_table_bordercolor'  => '',
				'st_table_cell_bgcolor' => '',
				'st_table_td_bgcolor'   => '',
				'st_table_td_textcolor' => '',
				'st_table_td_bold'      => '',
				'st_table_tr_bgcolor'   => '',
				'st_table_tr_textcolor' => '',
				'st_table_tr_bold'      => '',

			
				'st_kaiwa_bgcolor'  => $subcolor,
				'st_kaiwa2_bgcolor'  => '',
				'st_kaiwa3_bgcolor'  => '',
				'st_kaiwa4_bgcolor'  => '',
				'st_kaiwa5_bgcolor'  => '',
				'st_kaiwa6_bgcolor'  => '',
				'st_kaiwa7_bgcolor'  => '',
				'st_kaiwa8_bgcolor'  => '',

			
				'st_step_bgcolor'             => $keycolor,
				'st_step_color'               => $textcolor,
				'st_step_text_color'          => '',
				'st_step_text_bgcolor'        => '',
				'st_step_text_border_color'   => $keycolor,
				'st_step_radius'              => 'yes',

			
				'st_author_profile'           => '',
				'st_author_profile_shadow'    => '',
			);
		}elseif ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'cute' ){
			$zentai_overrides   = array(
				'st_header_footer_logo' => '',
				'st_mobile_logo_height' => '',
				'st_mobile_logo_center' => '',
				'st_mobile_sitename'     => $textcolor,
				'st_area'               => '',

				'st_top_bordercolor' => '',
				'st_line100'         => '',
				'st_line_height'     => '5px',

				'st_headbox_bgcolor_t'   => $keycolor,
				'st_headbox_bgcolor'     => $maincolor,
				'st_wrapper_bgcolor'     => '',
				'st_header100'           => 'yes',
				'st_header_image_side'   => 'center',
				'st_header_image_top'    => 'center',
				'st_header_image_repeat' => '',
				'st_header_gradient'            => 'yes',

				'st_headerunder_bgcolor'      => '',
				'st_headerunder_image_side'   => 'center',
				'st_headerunder_image_top'    => 'center',
				'st_headerunder_image_repeat' => '',

				'st_menu_logocolor' => $textcolor,

				'st_menu_maincolor'        => '#ffffff',
				'st_menu_main_bordercolor' => '',
				'st_main_opacity'          => '',

				'st_footer_bg_text_color' => $textcolor,
				'st_footer_bg_color_t'    => $maincolor,
				'st_footer_bg_color'      => $keycolor,
				'st_footer100'            => 'yes',
				'st_footer_image_side'    => 'center',
				'st_footer_image_top'     => 'center',
				'st_footer_image_repeat'  => '',
				'st_footer_gradient'            => 'yes',

			
				'st_main_textcolor'      => '',
				'st_side_textcolor'      => '',
				'st_link_textcolor'      => '',
				'st_link_hovertextcolor' => '',
				'st_link_hoveropacity'   => '',

			
				'st_headerwidget_bgcolor'   => $subcolor,
				'st_headerwidget_textcolor' => '',
				'st_header_tel_color'       => $textcolor,

			
				'st_entrytitle_color'           => '',
				'st_entrytitle_bgcolor'         => '',
				'st_entrytitle_bgcolor_t'       => '',
				'st_entrytitleborder_color'       => '',
				'st_entrytitleborder_undercolor'  => '',
				'st_entrytitle_border_tb'         => '',
				'st_entrytitle_border_tb_sub'         => '',
				'st_entrytitle_border_tb_dot'         => '',
				'st_entrytitle_designsetting'     => '',
				'st_entrytitle_bgimg_side'        => 'left',
				'st_entrytitle_bgimg_top'         => 'center',
				'st_entrytitle_bgimg_repeat'      => '',
				'st_entrytitle_bgimg_leftpadding' => '',
				'st_entrytitle_bgimg_tupadding'   => '',
				'st_entrytitle_bg_radius'         => '',
				'st_entrytitle_no_css'            => '',
				'st_entrytitle_gradient'            => '',
				'st_entrytitle_text_center'            => '',
				'st_entrytitle_design_wide'            => '',

			
				'st_h2_color'             => $keycolor,
				'st_h2_bgcolor'           => $subcolor,
				'st_h2_bgcolor_t'         => '',
				'st_h2border_color'       => '',
				'st_h2border_undercolor'  => '',
				'st_h2_border_tb_sub'     => '',
				'st_h2_border_tb_dot'     => '',
				'st_h2_designsetting'     => 'hukidasidesign',
				'st_h2_bgimg_side'        => 'left',
				'st_h2_bgimg_top'         => 'center',
				'st_h2_bgimg_repeat'      => '',
				'st_h2_bgimg_leftpadding' => '',
				'st_h2_bgimg_tupadding'   => 25,
				'st_h2_bg_radius'         => '',
				'st_h2_no_css'            => '',
				'st_h2_gradient'            => '',
				'st_h2_text_center'            => 'yes',
				'st_h2_design_wide'            => 'yes',

			
				'st_h3_color'          => $textcolor,
				'st_h3_bgcolor'        => $keycolor,
				'st_h3_bgcolor_t'      => $maincolor,
				'st_h3border_color'       => $keycolor,
				'st_h3border_undercolor'  => $keycolor,
				'st_h3_border_tb'         => '',
				'st_h3_border_tb_sub'         => '',
				'st_h3_border_tb_dot'         => '',
				'st_h3_designsetting'     => 'stripe_design',
				'st_h3_bgimg_side'        => 'left',
				'st_h3_bgimg_top'         => 'center',
				'st_h3_bgimg_repeat'      => '',
				'st_h3_bgimg_leftpadding' => '',
				'st_h3_bgimg_tupadding'   => 10,
				'st_h3_bg_radius'         => 'yes',
				'st_h3_no_css'            => '',
				'st_h3_gradient'            => '',
				'st_h3_text_center'            => '',
				'st_h3_design_wide'            => '',

			
				'st_h4_textcolor'         => $keycolor,
				'st_h4bordercolor'        => $maincolor,
				'st_h4bgcolor'            => '',
				'st_h4_design'            => 'yes',
				'st_h4_top_border'        => '',
				'st_h4_bottom_border'     => '',
				'st_h4_bgimg_side'        => 'left',
				'st_h4_bgimg_top'         => 'center',
				'st_h4_bgimg_repeat'      => '',
				'st_h4_bgimg_leftpadding' => 20,
				'st_h4_bgimg_tupadding'   => 10,
				'st_h4hukidasi_design'    => '',
				'st_h4_bg_radius'         => 'yes',
				'st_h4_no_css'            => '',
				'st_h4_husen_shadow'            => '',

			
				'st_h4_matome_textcolor'    => '',
				'st_h4_matome_bordercolor'   => '',
				'st_h4_matome_bgcolor'       => '',
				'st_h4_matome_design'            => '',
				'st_h4_matome_top_border'        => '',
				'st_h4_matome_bottom_border'     => '',
				'st_h4_matome_bgimg_side'        => 'center',
				'st_h4_matome_bgimg_top'         => 'center',
				'st_h4_matome_bgimg_repeat'      => '',
				'st_h4_matome_bgimg_leftpadding' => 20,
				'st_h4_matome_bgimg_tupadding'   => 10,
				'st_h4_matome_hukidasi_design'    => '',
				'st_h4_matome_bg_radius'    => '',
				'st_h4_matome_no_css'    => '',

			
				'st_h5_textcolor'    => $keycolor,
				'st_h5bordercolor'   => '',
				'st_h5bgcolor'       => $subcolor,
				'st_h5_design'            => '',
				'st_h5_top_border'        => '',
				'st_h5_bottom_border'     => '',
				'st_h5_bgimg_side'        => 'center',
				'st_h5_bgimg_top'         => 'center',
				'st_h5_bgimg_repeat'      => '',
				'st_h5_bgimg_leftpadding' => '20',
				'st_h5_bgimg_tupadding'   => 10,
				'st_h5hukidasi_design'    => '',
				'st_h5_bg_radius'         => 'yes',
				'st_h5_no_css'            => '',
				'st_h5_husen_shadow'            => 'yes',

				'st_blockquote_color' => '#f3f3f3',

				'st_separator_color'   => $textcolor,
				'st_separator_bgcolor' => $keycolor,

				'st_catbg_color'   => $keycolor,
				'st_cattext_color' => '#ffffff',

			
				'st_news_datecolor'            => $keycolor,
				'st_news_text_color'           => '#333',
				'st_menu_newsbarcolor_t'       => $keycolor,
				'st_menu_newsbarcolor'         => $keycolor,
				'st_menu_newsbar_border_color' => $keycolor,
				'st_menu_newsbartextcolor'     => $textcolor,
				'st_menu_newsbgcolor'          => '',

			
				'st_menu_navbar_topunder_color' => $maincolor,
				'st_menu_navbar_side_color'     => $keycolor,
				'st_menu_navbar_right_color'    => '',
				'st_menu_navbarcolor'           => $keycolor,
				'st_menu_navbarcolor_t'         => $maincolor,
				'st_menu_navbar_undercolor'         => $maincolor,
				'st_menu_navbartextcolor'       => $textcolor,
				'st_menu_bold'                  => '',
				'st_menu100'                    => 'yes',
				'st_menu_padding'               => '',
				'st_navbarcolor_gradient'            => 'yes',

				'st_headermenu_bgimg_side'   => 'center',
				'st_headermenu_bgimg_top'    => 'center',
				'st_headermenu_bgimg_repeat' => '',

				'st_sidemenu_bgimg_side'        => 'center',
				'st_sidemenu_bgimg_top'         => 'center',
				'st_sidemenu_bgimg_repeat'      => '',
				'st_sidemenu_bgimg_leftpadding' => 15,
				'st_sidemenu_bgimg_tupadding'   => 8,

				'st_sidebg_bgimg_side'   => 'center',
				'st_sidebg_bgimg_top'    => 'center',
				'st_sidebg_bgimg_repeat' => '',

				'st_headerimg100'             => '',
				'st_header_bgcolor'           => '',
				'st_topgabg_image_side'       => 'center',
				'st_topgabg_image_top'        => 'center',
				'st_topgabg_image_repeat'     => '',
				'st_topgabg_image_flex'       => '',
				'st_topgabg_image_sumahoonly' => '',

			
				'st_menu_side_widgets_topunder_color' => '',
				'st_menu_side_widgetscolor'           => $keycolor,
				'st_menu_side_widgetscolor_t'         => $maincolor,
				'st_menu_side_widgetstextcolor'       => '',
				'st_menu_icon'              => 'f138',
				'st_undermenu_icon'         => 'f105',
				'st_menu_icon_color'        => '',
				'st_undermenu_icon_color'   => '',
				'st_sidemenu_fontsize'      => '',
				'st_sidemenu_accordion'   => '',
				'st_sidemenu_gradient'            => 'yes',

				'st_side_bgcolor' => '',

				'st_menu_pagelist_childtextcolor'         => $keycolor,
				'st_menu_pagelist_bgcolor'                => $subcolor,
				'st_menu_pagelist_childtext_border_color' => $maincolor,

			
				'st_widgets_title_color'          => $textcolor,
				'st_widgets_title_bgcolor'        => $keycolor,
				'st_widgets_title_bgcolor_t'      => $maincolor,
				'st_widgets_titleborder_color'       => $maincolor,
				'st_widgets_titleborder_undercolor'  => $maincolor,
				'st_widgets_title_designsetting'     => 'stripe_design',
				'st_widgets_title_bgimg_side'        => 'left',
				'st_widgets_title_bgimg_top'         => 'center',
				'st_widgets_title_bgimg_repeat'      => '',
				'st_widgets_title_bgimg_leftpadding' => 20,
				'st_widgets_title_bgimg_tupadding'   => 7,
				'st_widgets_title_bg_radius'         => 'yes',

				'st_tagcloud_color'       => $keycolor,
				'st_tagcloud_bordercolor' => $keycolor,
				'st_rss_color'            => $keycolor,

				'st_sns_btn'     => '',
				'st_sns_btntext' => '',

				'st_formbtn_textcolor'   => $textcolor,
				'st_formbtn_bordercolor' => '',
				'st_formbtn_bgcolor_t'   => '',
				'st_formbtn_bgcolor'     => $keycolor,
				'st_formbtn_radius'      => 'yes',

				'st_formbtn2_textcolor'   => $textcolor,
				'st_formbtn2_bordercolor' => '',
				'st_formbtn2_bgcolor_t'   => '',
				'st_formbtn2_bgcolor'     => $keycolor,
				'st_formbtn2_radius'      => 'yes',

				'st_contactform7btn_textcolor' => $textcolor,
				'st_contactform7btn_bgcolor'   => $keycolor,

			
				'st_menu_osusumemidasitextcolor' => $textcolor,
				'st_menu_osusumemidasicolor'     => $keycolor,
				'st_menu_osusumemidasinocolor'   => $textcolor,
				'st_menu_osusumemidasinobgcolor' => $keycolor,
				'st_menu_popbox_color'           => $subcolor,
				'st_menu_popbox_textcolor'       => '',
				'st_nohidden'                    => '',

			
				'st_blackboard_textcolor'   => '',
				'st_blackboard_bordercolor' => '',
				'st_blackboard_bgcolor'     => '',
				'st_blackboard_mokuzicolor'   => '',
				'st_blackboard_title_bgcolor'   => '',
				'st_blackboard_list3_fontweight'   => '',
				'st_blackboard_underbordercolor'   => '',
				'st_blackboard_webicon'   => 'f0f6',

			
				'st_freebox_tittle_textcolor' => $textcolor,
				'st_freebox_tittle_color'     => $keycolor,
				'st_freebox_color'            => $subcolor,
				'st_freebox_textcolor'        => '',

			
				'st_memobox_color' => '',
			
				'st_slidebox_color' => '',

			
				'st_menu_sumartmenutextcolor' => '',
				'st_menu_sumartmenubordercolor' => $maincolor,
				'st_menu_sumart_bg_color'     => '',
				'st_menu_smartbar_bg_color_t'     => '',
				'st_menu_smartbar_bg_color'     => '',
				'st_menu_sumartbar_bg_color'  => $subcolor,
				'st_menu_sumartcolor'         => $textcolor,
				'st_menu_faicon'              => '',
				'st_sticky_menu'              => '',

				'st_menu_sumart_st_bg_color'  => $maincolor,
				'st_menu_sumart_st_color'     => $textcolor,
				'st_menu_sumart_st2_bg_color' => $maincolor,
				'st_menu_sumart_st2_color'    => $textcolor,
				'st_menu_sumart_footermenu_text_color'    => $textcolor,
				'st_menu_sumart_footermenu_bg_color'    => $maincolor,

			
				'st_middle_sumartmenutextcolor' => $textcolor,
				'st_middle_sumartmenubordercolor' => '',
				'st_middle_sumart_bg_color'     => $keycolor,
				'st_middle_sumart_bg_color_t'     => $maincolor,

			
				'st_webicon_question'    => '',
				'st_webicon_check'       => '',
				'st_webicon_exclamation' => '#f44336',
				'st_webicon_memo'        => '',
				'st_webicon_user'        => '',

			
				'st_thumbnail_bordercolor' => '',

			
				'st_author_basecolor' => $keycolor,
				'st_author_bg_color' => $subcolor,

			
				'st_pagetop_up'          => '',
				'st_pagetop_circle'      => 'yes',
				'st_pagetop_bgcolor'     => $keycolor,

			
				'st_toc_textcolor'           => '',
				'st_toc_text2color'          => '',
				'st_toc_bordercolor'         => '#f3f3f3',
				'st_toc_bgcolor'             => '',
				'st_toc_list_icon_base'      => '#777',
				'st_toc_mokuzicolor'         => '',
				'st_toc_mokuzi_border'       => '',
				'st_toc_list1_left'          => '',
				'st_toc_list1_icon'          => '',
				'st_toc_list2_icon'          => '',
				'st_toc_list3_fontweight'    => '',
				'st_toc_list3_icon'          => '',
				'st_toc_underbordercolor'    => '',
				'st_toc_webicon'             => 'e91c',
				'st_toc_radius'              => '',
				'st_toc_list_style'          => _st_get_default_toc_list_style(),
				'st_toc_only_toc_fontweight' => '',
				'st_toc_border_width'        => '5',

			
				'st_maruno_textcolor'   => $textcolor,
				'st_maruno_nobgcolor'   => $keycolor,
				'st_maruno_bordercolor' => '',
				'st_maruno_bgcolor'     => '',
				'st_maruno_radius'     => '',

			
				'st_maruck_textcolor'   => $textcolor,
				'st_maruck_nobgcolor'   => $keycolor,
				'st_maruck_bordercolor' => '',
				'st_maruck_bgcolor'     => '',
				'st_maruck_radius'     => '',

			
				'st_table_bordercolor'  => '',
				'st_table_cell_bgcolor' => '',
				'st_table_td_bgcolor'   => '',
				'st_table_td_textcolor' => '',
				'st_table_td_bold'      => '',
				'st_table_tr_bgcolor'   => '',
				'st_table_tr_textcolor' => '',
				'st_table_tr_bold'      => '',

			
				'st_kaiwa_bgcolor'  => $subcolor,
				'st_kaiwa2_bgcolor'  => '',
				'st_kaiwa3_bgcolor'  => '',
				'st_kaiwa4_bgcolor'  => '',
				'st_kaiwa5_bgcolor'  => '',
				'st_kaiwa6_bgcolor'  => '',
				'st_kaiwa7_bgcolor'  => '',
				'st_kaiwa8_bgcolor'  => '',

			
				'st_step_bgcolor'             => $keycolor,
				'st_step_color'               => $textcolor,
				'st_step_text_color'          => '',
				'st_step_text_bgcolor'        => '',
				'st_step_text_border_color'   => $keycolor,
				'st_step_radius'              => 'yes',

			
				'st_author_profile'           => '',
				'st_author_profile_shadow'    => '',
			);
		}elseif ( isset( $GLOBALS['stdata261']) && $GLOBALS['stdata261'] === 'flat' ){
			$zentai_overrides   = array(
				'st_header_footer_logo' => '',
				'st_mobile_logo_height' => '',
				'st_mobile_logo_center' => '',
				'st_mobile_sitename'     => $textcolor,
				'st_area'               => '',

				'st_top_bordercolor' => '',
				'st_line100'         => '',
				'st_line_height'     => '5px',

				'st_headbox_bgcolor_t'   => $keycolor,
				'st_headbox_bgcolor'     => $keycolor,
				'st_wrapper_bgcolor'     => '',
				'st_header100'           => 'yes',
				'st_header_image_side'   => 'center',
				'st_header_image_top'    => 'center',
				'st_header_image_repeat' => '',
				'st_header_gradient'            => 'yes',

				'st_headerunder_bgcolor'      => '',
				'st_headerunder_image_side'   => 'center',
				'st_headerunder_image_top'    => 'center',
				'st_headerunder_image_repeat' => '',

				'st_menu_logocolor' => $textcolor,

				'st_menu_maincolor'        => '#ffffff',
				'st_menu_main_bordercolor' => '',
				'st_main_opacity'          => '',

				'st_footer_bg_text_color' => $textcolor,
				'st_footer_bg_color_t'    => $keycolor,
				'st_footer_bg_color'      => $keycolor,
				'st_footer100'            => 'yes',
				'st_footer_image_side'    => 'center',
				'st_footer_image_top'     => 'center',
				'st_footer_image_repeat'  => '',
				'st_footer_gradient'            => 'yes',

			
				'st_main_textcolor'      => '',
				'st_side_textcolor'      => '',
				'st_link_textcolor'      => '',
				'st_link_hovertextcolor' => '',
				'st_link_hoveropacity'   => '',

			
				'st_headerwidget_bgcolor'   => $subcolor,
				'st_headerwidget_textcolor' => '',
				'st_header_tel_color'       => $textcolor,

			
				'st_entrytitle_color'           => '',
				'st_entrytitle_bgcolor'         => '',
				'st_entrytitle_bgcolor_t'       => '',
				'st_entrytitleborder_color'       => '',
				'st_entrytitleborder_undercolor'  => '',
				'st_entrytitle_border_tb'         => '',
				'st_entrytitle_border_tb_sub'         => '',
				'st_entrytitle_border_tb_dot'         => '',
				'st_entrytitle_designsetting'     => '',
				'st_entrytitle_bgimg_side'        => 'left',
				'st_entrytitle_bgimg_top'         => 'center',
				'st_entrytitle_bgimg_repeat'      => '',
				'st_entrytitle_bgimg_leftpadding' => '',
				'st_entrytitle_bgimg_tupadding'   => '',
				'st_entrytitle_bg_radius'         => '',
				'st_entrytitle_no_css'            => '',
				'st_entrytitle_gradient'            => '',
				'st_entrytitle_text_center'            => '',
				'st_entrytitle_design_wide'            => '',

			
				'st_h2_color'           => $textcolor,
				'st_h2_bgcolor'         => $keycolor,
				'st_h2_bgcolor_t'       => '',
				'st_h2border_color'       => '',
				'st_h2border_undercolor'  => '',
				'st_h2_border_tb_sub'         => '',
				'st_h2_border_tb_dot'         => '',
				'st_h2_designsetting'     => 'hukidasidesign',
				'st_h2_bgimg_side'        => 'left',
				'st_h2_bgimg_top'         => 'center',
				'st_h2_bgimg_repeat'      => '',
				'st_h2_bgimg_leftpadding' => 0,
				'st_h2_bgimg_tupadding'   => 10,
				'st_h2_bg_radius'         => '',
				'st_h2_no_css'            => '',
				'st_h2_gradient'            => '',
				'st_h2_text_center'            => 'yes',
				'st_h2_design_wide'            => '',

			
				'st_h3_color'          => $keycolor,
				'st_h3_bgcolor'        => $subcolor,
				'st_h3_bgcolor_t'      => '',
				'st_h3border_color'       => $keycolor,
				'st_h3border_undercolor'  => $keycolor,
				'st_h3_border_tb'         => 'yes',
				'st_h3_border_tb_sub'         => '',
				'st_h3_border_tb_dot'         => '',
				'st_h3_designsetting'     => '',
				'st_h3_bgimg_side'        => 'left',
				'st_h3_bgimg_top'         => 'center',
				'st_h3_bgimg_repeat'      => '',
				'st_h3_bgimg_leftpadding' => '',
				'st_h3_bgimg_tupadding'   => 10,
				'st_h3_bg_radius'         => '',
				'st_h3_no_css'            => '',
				'st_h3_gradient'            => '',
				'st_h3_text_center'            => '',
				'st_h3_design_wide'            => '',

			
				'st_h4_textcolor'         => $keycolor,
				'st_h4bordercolor'        => $keycolor,
				'st_h4bgcolor'            => '',
				'st_h4_design'            => 'yes',
				'st_h4_top_border'        => '',
				'st_h4_bottom_border'     => '',
				'st_h4_bgimg_side'        => 'left',
				'st_h4_bgimg_top'         => 'center',
				'st_h4_bgimg_repeat'      => '',
				'st_h4_bgimg_leftpadding' => 20,
				'st_h4_bgimg_tupadding'   => 10,
				'st_h4hukidasi_design'    => '',
				'st_h4_bg_radius'         => '',
				'st_h4_no_css'            => '',
				'st_h4_husen_shadow'            => '',

			
				'st_h4_matome_textcolor'    => '',
				'st_h4_matome_bordercolor'   => '',
				'st_h4_matome_bgcolor'       => '',
				'st_h4_matome_design'            => '',
				'st_h4_matome_top_border'        => '',
				'st_h4_matome_bottom_border'     => '',
				'st_h4_matome_bgimg_side'        => 'center',
				'st_h4_matome_bgimg_top'         => 'center',
				'st_h4_matome_bgimg_repeat'      => '',
				'st_h4_matome_bgimg_leftpadding' => 20,
				'st_h4_matome_bgimg_tupadding'   => 10,
				'st_h4_matome_hukidasi_design'    => '',
				'st_h4_matome_bg_radius'    => '',
				'st_h4_matome_no_css'    => '',

			
				'st_h5_textcolor'    => $keycolor,
				'st_h5bordercolor'   => $maincolor,
				'st_h5bgcolor'       => $subcolor,
				'st_h5_design'            => '',
				'st_h5_top_border'        => '',
				'st_h5_bottom_border'     => '',
				'st_h5_bgimg_side'        => 'center',
				'st_h5_bgimg_top'         => 'center',
				'st_h5_bgimg_repeat'      => '',
				'st_h5_bgimg_leftpadding' => '20',
				'st_h5_bgimg_tupadding'   => 10,
				'st_h5hukidasi_design'    => '',
				'st_h5_bg_radius'         => '',
				'st_h5_no_css'            => '',
				'st_h5_husen_shadow'            => '',

				'st_blockquote_color' => '#f3f3f3',

				'st_separator_color'   => $textcolor,
				'st_separator_bgcolor' => $keycolor,

				'st_catbg_color'   => $keycolor,
				'st_cattext_color' => '#ffffff',

			
				'st_news_datecolor'            => $keycolor,
				'st_news_text_color'           => '#333',
				'st_menu_newsbarcolor_t'       => $keycolor,
				'st_menu_newsbarcolor'         => $keycolor,
				'st_menu_newsbar_border_color' => $keycolor,
				'st_menu_newsbartextcolor'     => $textcolor,
				'st_menu_newsbgcolor'          => '',

			
				'st_menu_navbar_topunder_color' => $maincolor,
				'st_menu_navbar_side_color'     => $keycolor,
				'st_menu_navbar_right_color'    => $maincolor,
				'st_menu_navbarcolor'           => $keycolor,
				'st_menu_navbarcolor_t'         => $keycolor,
				'st_menu_navbar_undercolor'         => $maincolor,
				'st_menu_navbartextcolor'       => $textcolor,
				'st_menu_bold'                  => '',
				'st_menu100'                    => 'yes',
				'st_menu_padding'               => '',
				'st_navbarcolor_gradient'            => 'yes',

				'st_headermenu_bgimg_side'   => 'center',
				'st_headermenu_bgimg_top'    => 'center',
				'st_headermenu_bgimg_repeat' => '',

				'st_sidemenu_bgimg_side'        => 'center',
				'st_sidemenu_bgimg_top'         => 'center',
				'st_sidemenu_bgimg_repeat'      => '',
				'st_sidemenu_bgimg_leftpadding' => 15,
				'st_sidemenu_bgimg_tupadding'   => 8,

				'st_sidebg_bgimg_side'   => 'center',
				'st_sidebg_bgimg_top'    => 'center',
				'st_sidebg_bgimg_repeat' => '',

				'st_headerimg100'             => '',
				'st_header_bgcolor'           => '',
				'st_topgabg_image_side'       => 'center',
				'st_topgabg_image_top'        => 'center',
				'st_topgabg_image_repeat'     => '',
				'st_topgabg_image_flex'       => '',
				'st_topgabg_image_sumahoonly' => '',

			
				'st_menu_side_widgets_topunder_color' => '',
				'st_menu_side_widgetscolor'           => $keycolor,
				'st_menu_side_widgetscolor_t'         => $maincolor,
				'st_menu_side_widgetstextcolor'       => '',
				'st_menu_icon'              => 'f138',
				'st_undermenu_icon'         => 'f105',
				'st_menu_icon_color'        => '',
				'st_undermenu_icon_color'   => '',
				'st_sidemenu_fontsize'      => '',
				'st_sidemenu_accordion'   => '',
				'st_sidemenu_gradient'            => 'yes',

				'st_side_bgcolor' => '',

				'st_menu_pagelist_childtextcolor'         => $keycolor,
				'st_menu_pagelist_bgcolor'                => $subcolor,
				'st_menu_pagelist_childtext_border_color' => $maincolor,

			
				'st_widgets_title_color'          => $textcolor,
				'st_widgets_title_bgcolor'        => $keycolor,
				'st_widgets_title_bgcolor_t'      => '',
				'st_widgets_titleborder_color'       => '',
				'st_widgets_titleborder_undercolor'  => '',
				'st_widgets_title_designsetting'     => 'hukidasidesign',
				'st_widgets_title_bgimg_side'        => 'left',
				'st_widgets_title_bgimg_top'         => 'center',
				'st_widgets_title_bgimg_repeat'      => '',
				'st_widgets_title_bgimg_leftpadding' => 20,
				'st_widgets_title_bgimg_tupadding'   => 7,
				'st_widgets_title_bg_radius'         => '',

				'st_tagcloud_color'       => $keycolor,
				'st_tagcloud_bordercolor' => $keycolor,
				'st_rss_color'            => $keycolor,

				'st_sns_btn'     => '',
				'st_sns_btntext' => '',

				'st_formbtn_textcolor'   => $textcolor,
				'st_formbtn_bordercolor' => '',
				'st_formbtn_bgcolor_t'   => '',
				'st_formbtn_bgcolor'     => $keycolor,
				'st_formbtn_radius'      => 'yes',

				'st_formbtn2_textcolor'   => $textcolor,
				'st_formbtn2_bordercolor' => '',
				'st_formbtn2_bgcolor_t'   => '',
				'st_formbtn2_bgcolor'     => $keycolor,
				'st_formbtn2_radius'      => 'yes',

				'st_contactform7btn_textcolor' => $textcolor,
				'st_contactform7btn_bgcolor'   => $keycolor,

			
				'st_menu_osusumemidasitextcolor' => $textcolor,
				'st_menu_osusumemidasicolor'     => $keycolor,
				'st_menu_osusumemidasinocolor'   => $textcolor,
				'st_menu_osusumemidasinobgcolor' => $keycolor,
				'st_menu_popbox_color'           => $subcolor,
				'st_menu_popbox_textcolor'       => '',
				'st_nohidden'                    => '',

			
				'st_blackboard_textcolor'   => '',
				'st_blackboard_bordercolor' => '',
				'st_blackboard_bgcolor'     => '',
				'st_blackboard_mokuzicolor'   => '',
				'st_blackboard_title_bgcolor'   => '',
				'st_blackboard_list3_fontweight'   => '',
				'st_blackboard_underbordercolor'   => '',
				'st_blackboard_webicon'   => 'f0f6',

			
				'st_freebox_tittle_textcolor' => $textcolor,
				'st_freebox_tittle_color'     => $keycolor,
				'st_freebox_color'            => $subcolor,
				'st_freebox_textcolor'        => '',

			
				'st_memobox_color' => '',
			
				'st_slidebox_color' => '',

			
				'st_menu_sumartmenutextcolor' => '',
				'st_menu_sumartmenubordercolor' => $maincolor,
				'st_menu_sumart_bg_color'     => '',
				'st_menu_smartbar_bg_color_t'     => '',
				'st_menu_smartbar_bg_color'     => '',
				'st_menu_sumartbar_bg_color'  => $subcolor,
				'st_menu_sumartcolor'         => $textcolor,
				'st_menu_faicon'              => '',
				'st_sticky_menu'              => '',

				'st_menu_sumart_st_bg_color'  => $maincolor,
				'st_menu_sumart_st_color'     => $textcolor,
				'st_menu_sumart_st2_bg_color' => $maincolor,
				'st_menu_sumart_st2_color'    => $textcolor,
				'st_menu_sumart_footermenu_text_color'    => $textcolor,
				'st_menu_sumart_footermenu_bg_color'    => $maincolor,

			
				'st_middle_sumartmenutextcolor' => $textcolor,
				'st_middle_sumartmenubordercolor' => $maincolor,
				'st_middle_sumart_bg_color'     => $keycolor,
				'st_middle_sumart_bg_color_t'     => $keycolor,

			
				'st_webicon_question'    => '',
				'st_webicon_check'       => '',
				'st_webicon_exclamation' => '#f44336',
				'st_webicon_memo'        => '',
				'st_webicon_user'        => '',

			
				'st_thumbnail_bordercolor' => '',

			
				'st_author_basecolor' => $keycolor,
				'st_author_bg_color' => $subcolor,

			
				'st_pagetop_up'          => '',
				'st_pagetop_circle'      => 'yes',
				'st_pagetop_bgcolor'     => $keycolor,

			
				'st_toc_textcolor'           => '',
				'st_toc_text2color'          => '',
				'st_toc_bordercolor'         => '#f3f3f3',
				'st_toc_bgcolor'             => '',
				'st_toc_list_icon_base'      => '#777',
				'st_toc_mokuzicolor'         => '',
				'st_toc_mokuzi_border'       => '',
				'st_toc_list1_left'          => '',
				'st_toc_list1_icon'          => '',
				'st_toc_list2_icon'          => '',
				'st_toc_list3_fontweight'    => '',
				'st_toc_list3_icon'          => '',
				'st_toc_underbordercolor'    => '',
				'st_toc_webicon'             => 'e91c',
				'st_toc_radius'              => '',
				'st_toc_list_style'          => _st_get_default_toc_list_style(),
				'st_toc_only_toc_fontweight' => '',
				'st_toc_border_width'        => '5',

			
				'st_maruno_textcolor'   => $textcolor,
				'st_maruno_nobgcolor'   => $keycolor,
				'st_maruno_bordercolor' => '',
				'st_maruno_bgcolor'     => '',
				'st_maruno_radius'     => '',

			
				'st_maruck_textcolor'   => $textcolor,
				'st_maruck_nobgcolor'   => $keycolor,
				'st_maruck_bordercolor' => '',
				'st_maruck_bgcolor'     => '',
				'st_maruck_radius'     => '',

			
				'st_table_bordercolor'  => '',
				'st_table_cell_bgcolor' => '',
				'st_table_td_bgcolor'   => '',
				'st_table_td_textcolor' => '',
				'st_table_td_bold'      => '',
				'st_table_tr_bgcolor'   => '',
				'st_table_tr_textcolor' => '',
				'st_table_tr_bold'      => '',

			
				'st_kaiwa_bgcolor'  => $subcolor,
				'st_kaiwa2_bgcolor'  => '',
				'st_kaiwa3_bgcolor'  => '',
				'st_kaiwa4_bgcolor'  => '',
				'st_kaiwa5_bgcolor'  => '',
				'st_kaiwa6_bgcolor'  => '',
				'st_kaiwa7_bgcolor'  => '',
				'st_kaiwa8_bgcolor'  => '',

			
				'st_step_bgcolor'             => $keycolor,
				'st_step_color'               => $textcolor,
				'st_step_text_color'          => '',
				'st_step_text_bgcolor'        => '',
				'st_step_text_border_color'   => $keycolor,
				'st_step_radius'              => 'yes',

			
				'st_author_profile'           => '',
				'st_author_profile_shadow'    => '',
			);
		} else {
			$zentai_overrides   = array(
				'st_header_footer_logo' => '',
				'st_mobile_logo_height' => '',
				'st_mobile_logo_center' => '',
				'st_mobile_sitename'     => $textcolor,
				'st_area'               => '',

				'st_top_bordercolor' => '',
				'st_line100'         => '',
				'st_line_height'     => '5px',

				'st_headbox_bgcolor_t'   => $keycolor,
				'st_headbox_bgcolor'     => $maincolor,
				'st_wrapper_bgcolor'     => '',
				'st_header100'           => 'yes',
				'st_header_image_side'   => 'center',
				'st_header_image_top'    => 'center',
				'st_header_image_repeat' => '',
				'st_header_gradient'            => 'yes',

				'st_headerunder_bgcolor'      => '',
				'st_headerunder_image_side'   => 'center',
				'st_headerunder_image_top'    => 'center',
				'st_headerunder_image_repeat' => '',

				'st_menu_logocolor' => $textcolor,

				'st_menu_maincolor'        => '#ffffff',
				'st_menu_main_bordercolor' => '',
				'st_main_opacity'          => '',

				'st_footer_bg_text_color' => $textcolor,
				'st_footer_bg_color_t'    => $maincolor,
				'st_footer_bg_color'      => $keycolor,
				'st_footer100'            => 'yes',
				'st_footer_image_side'    => 'center',
				'st_footer_image_top'     => 'center',
				'st_footer_image_repeat'  => '',
				'st_footer_gradient'            => 'yes',

			
				'st_main_textcolor'      => '',
				'st_side_textcolor'      => '',
				'st_link_textcolor'      => '',
				'st_link_hovertextcolor' => '',
				'st_link_hoveropacity'   => '',

			
				'st_headerwidget_bgcolor'   => $subcolor,
				'st_headerwidget_textcolor' => '',
				'st_header_tel_color'       => $textcolor,

			
				'st_entrytitle_color'           => '',
				'st_entrytitle_bgcolor'         => '',
				'st_entrytitle_bgcolor_t'       => '',
				'st_entrytitleborder_color'       => '',
				'st_entrytitleborder_undercolor'  => '',
				'st_entrytitle_border_tb'         => '',
				'st_entrytitle_border_tb_sub'         => '',
				'st_entrytitle_border_tb_dot'         => '',
				'st_entrytitle_designsetting'     => '',
				'st_entrytitle_bgimg_side'        => 'left',
				'st_entrytitle_bgimg_top'         => 'center',
				'st_entrytitle_bgimg_repeat'      => '',
				'st_entrytitle_bgimg_leftpadding' => '',
				'st_entrytitle_bgimg_tupadding'   => '',
				'st_entrytitle_bg_radius'         => '',
				'st_entrytitle_no_css'            => '',
				'st_entrytitle_gradient'            => '',
				'st_entrytitle_text_center'            => '',
				'st_entrytitle_design_wide'            => '',

			
				'st_h2_color'           => $keycolor,
				'st_h2_bgcolor'         => $keycolor,
				'st_h2_bgcolor_t'       => $subcolor,
				'st_h2border_color'       => $keycolor,
				'st_h2border_undercolor'  => $subcolor,
				'st_h2_border_tb_sub'         => '',
				'st_h2_border_tb_dot'         => '',
				'st_h2_designsetting'     => 'centerlinedesign',
				'st_h2_bgimg_side'        => 'left',
				'st_h2_bgimg_top'         => 'center',
				'st_h2_bgimg_repeat'      => '',
				'st_h2_bgimg_leftpadding' => 0,
				'st_h2_bgimg_tupadding'   => 10,
				'st_h2_bg_radius'         => '',
				'st_h2_no_css'            => '',
				'st_h2_gradient'            => '',
				'st_h2_text_center'            => 'yes',
				'st_h2_design_wide'            => '',

			
				'st_h3_color'          => $textcolor,
				'st_h3_bgcolor'        => $keycolor,
				'st_h3_bgcolor_t'      => $keycolor,
				'st_h3border_color'       => $keycolor,
				'st_h3border_undercolor'  => $maincolor,
				'st_h3_border_tb'         => '',
				'st_h3_border_tb_sub'         => '',
				'st_h3_border_tb_dot'         => '',
				'st_h3_designsetting'     => 'hukidasidesign',
				'st_h3_bgimg_side'        => 'left',
				'st_h3_bgimg_top'         => 'center',
				'st_h3_bgimg_repeat'      => '',
				'st_h3_bgimg_leftpadding' => 0,
				'st_h3_bgimg_tupadding'   => 10,
				'st_h3_bg_radius'         => '',
				'st_h3_no_css'            => '',
				'st_h3_gradient'            => '',
				'st_h3_text_center'            => 'yes',
				'st_h3_design_wide'            => '',

			
				'st_h4_textcolor'    => $keycolor,
				'st_h4bordercolor'   => $keycolor,
				'st_h4bgcolor'       => $subcolor,
				'st_h4_design'            => 'yes',
				'st_h4_top_border'        => '',
				'st_h4_bottom_border'     => '',
				'st_h4_bgimg_side'        => 'left',
				'st_h4_bgimg_top'         => 'center',
				'st_h4_bgimg_repeat'      => '',
				'st_h4_bgimg_leftpadding' => 20,
				'st_h4_bgimg_tupadding'   => 10,
				'st_h4hukidasi_design'    => '',
				'st_h4_bg_radius'         => '',
				'st_h4_no_css'            => '',
				'st_h4_husen_shadow'            => '',

			
				'st_h4_matome_textcolor'    => '',
				'st_h4_matome_bordercolor'   => '',
				'st_h4_matome_bgcolor'       => '',
				'st_h4_matome_design'            => '',
				'st_h4_matome_top_border'        => '',
				'st_h4_matome_bottom_border'     => '',
				'st_h4_matome_bgimg_side'        => 'center',
				'st_h4_matome_bgimg_top'         => 'center',
				'st_h4_matome_bgimg_repeat'      => '',
				'st_h4_matome_bgimg_leftpadding' => 20,
				'st_h4_matome_bgimg_tupadding'   => 10,
				'st_h4_matome_hukidasi_design'    => '',
				'st_h4_matome_bg_radius'    => '',
				'st_h4_matome_no_css'    => '',

			
				'st_h5_textcolor'    => $keycolor,
				'st_h5bordercolor'   => $maincolor,
				'st_h5bgcolor'       => $subcolor,
				'st_h5_design'            => '',
				'st_h5_top_border'        => '',
				'st_h5_bottom_border'     => 'yes',
				'st_h5_bgimg_side'        => 'center',
				'st_h5_bgimg_top'         => 'center',
				'st_h5_bgimg_repeat'      => '',
				'st_h5_bgimg_leftpadding' => '20',
				'st_h5_bgimg_tupadding'   => 10,
				'st_h5hukidasi_design'    => '',
				'st_h5_bg_radius'         => '',
				'st_h5_no_css'            => '',
				'st_h5_husen_shadow'            => '',

				'st_blockquote_color' => '#f3f3f3',

				'st_separator_color'   => $textcolor,
				'st_separator_bgcolor' => $keycolor,

				'st_catbg_color'   => $keycolor,
				'st_cattext_color' => '#ffffff',

			
				'st_news_datecolor'            => $keycolor,
				'st_news_text_color'           => '#333',
				'st_menu_newsbarcolor_t'       => $keycolor,
				'st_menu_newsbarcolor'         => $keycolor,
				'st_menu_newsbar_border_color' => $keycolor,
				'st_menu_newsbartextcolor'     => $textcolor,
				'st_menu_newsbgcolor'          => '',

			
				'st_menu_navbar_topunder_color' => $maincolor,
				'st_menu_navbar_side_color'     => $keycolor,
				'st_menu_navbar_right_color'    => $maincolor,
				'st_menu_navbarcolor'           => $keycolor,
				'st_menu_navbarcolor_t'         => $maincolor,
				'st_menu_navbar_undercolor'         => $maincolor,
				'st_menu_navbartextcolor'       => $textcolor,
				'st_menu_bold'                  => '',
				'st_menu100'                    => 'yes',
				'st_menu_padding'               => '',
				'st_navbarcolor_gradient'            => 'yes',

				'st_headermenu_bgimg_side'   => 'center',
				'st_headermenu_bgimg_top'    => 'center',
				'st_headermenu_bgimg_repeat' => '',

				'st_sidemenu_bgimg_side'        => 'center',
				'st_sidemenu_bgimg_top'         => 'center',
				'st_sidemenu_bgimg_repeat'      => '',
				'st_sidemenu_bgimg_leftpadding' => 15,
				'st_sidemenu_bgimg_tupadding'   => 8,

				'st_sidebg_bgimg_side'   => 'center',
				'st_sidebg_bgimg_top'    => 'center',
				'st_sidebg_bgimg_repeat' => '',

				'st_headerimg100'             => '',
				'st_header_bgcolor'           => '',
				'st_topgabg_image_side'       => 'center',
				'st_topgabg_image_top'        => 'center',
				'st_topgabg_image_repeat'     => '',
				'st_topgabg_image_flex'       => '',
				'st_topgabg_image_sumahoonly' => '',

			
				'st_menu_side_widgets_topunder_color' => '',
				'st_menu_side_widgetscolor'           => $keycolor,
				'st_menu_side_widgetscolor_t'         => $maincolor,
				'st_menu_side_widgetstextcolor'       => '',
				'st_menu_icon'              => 'f138',
				'st_undermenu_icon'         => 'f105',
				'st_menu_icon_color'        => '',
				'st_undermenu_icon_color'   => '',
				'st_sidemenu_fontsize'      => '',
				'st_sidemenu_accordion'   => '',
				'st_sidemenu_gradient'            => 'yes',

				'st_side_bgcolor' => '',

				'st_menu_pagelist_childtextcolor'         => $keycolor,
				'st_menu_pagelist_bgcolor'                => $subcolor,
				'st_menu_pagelist_childtext_border_color' => $maincolor,

			
				'st_widgets_title_color'          => $keycolor,
				'st_widgets_title_bgcolor'        => '',
				'st_widgets_title_bgcolor_t'      => '',
				'st_widgets_titleborder_color'       => $keycolor,
				'st_widgets_titleborder_undercolor'  => $maincolor,
				'st_widgets_title_designsetting'     => 'gradient_underlinedesign',
				'st_widgets_title_bgimg_side'        => 'left',
				'st_widgets_title_bgimg_top'         => 'center',
				'st_widgets_title_bgimg_repeat'      => '',
				'st_widgets_title_bgimg_leftpadding' => 10,
				'st_widgets_title_bgimg_tupadding'   => 7,
				'st_widgets_title_bg_radius'         => '',

				'st_tagcloud_color'       => $keycolor,
				'st_tagcloud_bordercolor' => $keycolor,
				'st_rss_color'            => $keycolor,

				'st_sns_btn'     => '',
				'st_sns_btntext' => '',

				'st_formbtn_textcolor'   => $textcolor,
				'st_formbtn_bordercolor' => '',
				'st_formbtn_bgcolor_t'   => '',
				'st_formbtn_bgcolor'     => $keycolor,
				'st_formbtn_radius'      => 'yes',

				'st_formbtn2_textcolor'   => $textcolor,
				'st_formbtn2_bordercolor' => '',
				'st_formbtn2_bgcolor_t'   => '',
				'st_formbtn2_bgcolor'     => $keycolor,
				'st_formbtn2_radius'      => 'yes',

				'st_contactform7btn_textcolor' => $textcolor,
				'st_contactform7btn_bgcolor'   => $keycolor,

			
				'st_menu_osusumemidasitextcolor' => $textcolor,
				'st_menu_osusumemidasicolor'     => $keycolor,
				'st_menu_osusumemidasinocolor'   => $textcolor,
				'st_menu_osusumemidasinobgcolor' => $keycolor,
				'st_menu_popbox_color'           => $subcolor,
				'st_menu_popbox_textcolor'       => '',
				'st_nohidden'                    => '',

			
				'st_blackboard_textcolor'   => '',
				'st_blackboard_bordercolor' => '',
				'st_blackboard_bgcolor'     => '',
				'st_blackboard_mokuzicolor'   => '',
				'st_blackboard_title_bgcolor'   => '',
				'st_blackboard_list3_fontweight'   => '',
				'st_blackboard_underbordercolor'   => '',
				'st_blackboard_webicon'   => 'f0f6',

			
				'st_freebox_tittle_textcolor' => $textcolor,
				'st_freebox_tittle_color'     => $keycolor,
				'st_freebox_color'            => $subcolor,
				'st_freebox_textcolor'        => '',

			
				'st_memobox_color' => '',
			
				'st_slidebox_color' => '',

			
				'st_menu_sumartmenutextcolor' => '',
				'st_menu_sumartmenubordercolor' => $maincolor,
				'st_menu_sumart_bg_color'     => '',
				'st_menu_smartbar_bg_color_t'     => '',
				'st_menu_smartbar_bg_color'     => '',
				'st_menu_sumartbar_bg_color'  => $subcolor,
				'st_menu_sumartcolor'         => $textcolor,
				'st_menu_faicon'              => '',
				'st_sticky_menu'              => '',

				'st_menu_sumart_st_bg_color'  => $maincolor,
				'st_menu_sumart_st_color'     => $textcolor,
				'st_menu_sumart_st2_bg_color' => $maincolor,
				'st_menu_sumart_st2_color'    => $textcolor,
				'st_menu_sumart_footermenu_text_color'    => $textcolor,
				'st_menu_sumart_footermenu_bg_color'    => $maincolor,

			
				'st_middle_sumartmenutextcolor' => $textcolor,
				'st_middle_sumartmenubordercolor' => '',
				'st_middle_sumart_bg_color'     => $keycolor,
				'st_middle_sumart_bg_color_t'     => $maincolor,

			
				'st_webicon_question'    => '',
				'st_webicon_check'       => '',
				'st_webicon_exclamation' => '#f44336',
				'st_webicon_memo'        => '',
				'st_webicon_user'        => '',

			
				'st_thumbnail_bordercolor' => '',

			
				'st_author_basecolor' => $keycolor,
				'st_author_bg_color' => $subcolor,

			
				'st_pagetop_up'          => '',
				'st_pagetop_circle'      => 'yes',
				'st_pagetop_bgcolor'     => $keycolor,

			
				'st_toc_textcolor'           => '',
				'st_toc_text2color'          => '',
				'st_toc_bordercolor'         => '#f3f3f3',
				'st_toc_bgcolor'             => '',
				'st_toc_list_icon_base'      => '#777',
				'st_toc_mokuzicolor'         => '',
				'st_toc_mokuzi_border'       => '',
				'st_toc_list1_left'          => '',
				'st_toc_list1_icon'          => '',
				'st_toc_list2_icon'          => '',
				'st_toc_list3_fontweight'    => '',
				'st_toc_list3_icon'          => '',
				'st_toc_underbordercolor'    => '',
				'st_toc_webicon'             => 'e91c',
				'st_toc_radius'              => '',
				'st_toc_list_style'          => _st_get_default_toc_list_style(),
				'st_toc_only_toc_fontweight' => '',
				'st_toc_border_width'        => '5',

			
				'st_maruno_textcolor'   => $textcolor,
				'st_maruno_nobgcolor'   => $keycolor,
				'st_maruno_bordercolor' => '',
				'st_maruno_bgcolor'     => '',
				'st_maruno_radius'     => '',

			
				'st_maruck_textcolor'   => $textcolor,
				'st_maruck_nobgcolor'   => $keycolor,
				'st_maruck_bordercolor' => '',
				'st_maruck_bgcolor'     => '',
				'st_maruck_radius'     => '',

			
				'st_table_bordercolor'  => '',
				'st_table_cell_bgcolor' => '',
				'st_table_td_bgcolor'   => '',
				'st_table_td_textcolor' => '',
				'st_table_td_bold'      => '',
				'st_table_tr_bgcolor'   => '',
				'st_table_tr_textcolor' => '',
				'st_table_tr_bold'      => '',

			
				'st_kaiwa_bgcolor'  => $subcolor,
				'st_kaiwa2_bgcolor'  => '',
				'st_kaiwa3_bgcolor'  => '',
				'st_kaiwa4_bgcolor'  => '',
				'st_kaiwa5_bgcolor'  => '',
				'st_kaiwa6_bgcolor'  => '',
				'st_kaiwa7_bgcolor'  => '',
				'st_kaiwa8_bgcolor'  => '',

			
				'st_step_bgcolor'             => $keycolor,
				'st_step_color'               => $textcolor,
				'st_step_text_color'          => '',
				'st_step_text_bgcolor'        => '',
				'st_step_text_border_color'   => $keycolor,
				'st_step_radius'              => 'yes',

			
				'st_author_profile'           => '',
				'st_author_profile_shadow'    => 'yes',
			);
		}

		return array_merge($menuonly_overrides, $zentai_overrides);
	}
}

if ( !function_exists( 'st_create_default_theme_mod_diff' ) ) {
	function st_create_default_theme_mod_diff( $theme_mod_defaults ) {
		$theme_mod_diff    = array();
		$previous_defaults = st_get_theme_mod_defaults( st_get_previous_kantan_setting() );

		foreach ($theme_mod_defaults as $theme_mod_name => $theme_mod_value) {
			if (!array_key_exists($theme_mod_name, $previous_defaults)) {
				$theme_mod_diff[$theme_mod_name] = $theme_mod_value;

				continue;
			}

			$current_theme_mod = get_theme_mod($theme_mod_name, $previous_defaults[$theme_mod_name]);

		

            if ($current_theme_mod === $previous_defaults[$theme_mod_name]) {
				$theme_mod_diff[$theme_mod_name] = $theme_mod_value;

				continue;
			}
		}

		return $theme_mod_diff;
	}
}

if ( !function_exists( 'st_get_var_theme_mod_maps' ) ) {
	function st_get_var_theme_mod_maps() {
		return array(		

			'st_header_footer_logo'    => 'st_header_footer_logo',
			'st_pc_logo_height'        => 'st_pc_logo_height',
			'st_mobile_logo_height'    => 'st_mobile_logo_height',
			'st_mobile_logo_center'    => 'st_mobile_logo_center',
			'st_mobile_sitename'       => 'st_mobile_sitename',
			'st_icon_logo_width'       => 'st_icon_logo_width',
			'st_icon_logo_width_sp'    => 'st_icon_logo_width_sp',

			'st_area'                  => 'st_area',
			'st_main_top_bg_none'      => 'st_main_top_bg_none',
			'st_main_archive_bg_none'  => 'st_main_archive_bg_none',

			'st_top_bordercolor' => 'st_top_bordercolor',
			'st_line100'         => 'st_line100',
			'st_line_height'     => 'st_line_height',

			'st_headbox_bgcolor_t'          => 'st_headbox_bgcolor_t',
			'st_headbox_bgcolor'            => 'st_headbox_bgcolor',
			'st_front_page_bgcolor'  		=> 'st_front_page_bgcolor',
			'st_wrapper_bgcolor'            => 'st_wrapper_bgcolor',
			'st_header100'                  => 'st_header100',
			'st_header_image_side'          => 'st_header_image_side',
			'st_header_image_top'           => 'st_header_image_top',
			'st_header_image_repeat'        => 'st_header_image_repeat',
			'st_header_bg_image_flex'       => 'st_header_bg_image_flex',
			'st_header_front_exclusion_set' => 'st_header_front_exclusion_set',
			'st_header_gradient'            => 'st_header_gradient',

			'st_headerunder_bgcolor'      => 'st_headerunder_bgcolor',
			'st_headerunder_image_side'   => 'st_headerunder_image_side',
			'st_headerunder_image_top'    => 'st_headerunder_image_top',
			'st_headerunder_image_repeat' => 'st_headerunder_image_repeat',

			'st_headerbg_image_area'       => 'st_headerbg_image_area',
			'st_headerbg_image_side'       => 'st_headerbg_image_side',
			'st_headerbg_image_top'        => 'st_headerbg_image_top',
			'st_headerbg_image_repeat'     => 'st_headerbg_image_repeat',
			'st_headerbg_image_flex'       => 'st_headerbg_image_flex',
			'st_headerbg_image_dark'       => 'st_headerbg_image_dark',

			'menu_logocolor' => 'st_menu_logocolor',

			'menu_maincolor'                    => 'st_menu_maincolor',
			'menu_main_bordercolor'             => 'st_menu_main_bordercolor',
			'st_main_opacity'                   => 'st_main_opacity',
			'st_entry_content_bg_image_side'    => 'st_entry_content_bg_image_side',
			'st_entry_content_bg_image_top'     => 'st_entry_content_bg_image_top',
			'st_entry_content_bg_image_repeat'  => 'st_entry_content_bg_image_repeat',
			'st_entry_content_bg_image_flex'    => 'st_entry_content_bg_image_flex',

			'st_footer_widgets_bg_color' => 'st_footer_widgets_bg_color',
			'st_footer_widgets100'       => 'st_footer_widgets100',

			'st_footer_bg_text_color' => 'st_footer_bg_text_color',
			'st_footer_bg_color_t'    => 'st_footer_bg_color_t',
			'st_footer_bg_color'      => 'st_footer_bg_color',
			'st_footer100'            => 'st_footer100',
			'st_footer_image_side'    => 'st_footer_image_side',
			'st_footer_image_top'     => 'st_footer_image_top',
			'st_footer_image_repeat'  => 'st_footer_image_repeat',
			'st_footerbg_image_flex'  => 'st_footerbg_image_flex',
			'st_footer_gradient'            => 'st_footer_gradient',

		
			'st_main_textcolor'      => 'st_main_textcolor',
			'st_main_textcolor_sub'      => 'st_main_textcolor_sub',
			'st_side_textcolor'      => 'st_side_textcolor',
			'st_link_textcolor'      => 'st_link_textcolor',
			'st_link_hovertextcolor' => 'st_link_hovertextcolor',
			'st_link_hoveropacity'   => 'st_link_hoveropacity',

		
			'menu_st_headerwidget_bgcolor'   => 'st_headerwidget_bgcolor',
			'menu_st_headerwidget_textcolor' => 'st_headerwidget_textcolor',
			'menu_st_header_tel_color'       => 'st_header_tel_color',

		
			'st_kuzu_color' => 'st_kuzu_color',

		
			'st_entrytitle_color'              => 'st_entrytitle_color',
			'st_entrytitle_bgcolor'            => 'st_entrytitle_bgcolor',
			'st_entrytitle_bgcolor_t'          => 'st_entrytitle_bgcolor_t',
			'st_entrytitleborder_color'       => 'st_entrytitleborder_color',
			'st_entrytitleborder_undercolor'  => 'st_entrytitleborder_undercolor',
			'st_entrytitle_border_tb'         => 'st_entrytitle_border_tb',
			'st_entrytitle_border_tb_sub'         => 'st_entrytitle_border_tb_sub',
			'st_entrytitle_designsetting'     => 'st_entrytitle_designsetting',
			'st_entrytitle_bgimg_side'        => 'st_entrytitle_bgimg_side',
			'st_entrytitle_bgimg_top'         => 'st_entrytitle_bgimg_top',
			'st_entrytitle_bgimg_repeat'      => 'st_entrytitle_bgimg_repeat',
			'st_entrytitle_bgimg_leftpadding' => 'st_entrytitle_bgimg_leftpadding',
			'st_entrytitle_bgimg_tupadding'   => 'st_entrytitle_bgimg_tupadding',
			'st_entrytitle_bg_radius'         => 'st_entrytitle_bg_radius',
			'st_entrytitle_no_css'            => 'st_entrytitle_no_css',
			'st_entrytitle_gradient'            => 'st_entrytitle_gradient',
			'st_entrytitle_text_center'            => 'st_entrytitle_text_center',
			'st_entrytitle_design_wide'            => 'st_entrytitle_design_wide',

		
			'st_h2_color'              => 'st_h2_color',
			'st_h2_bgcolor'            => 'st_h2_bgcolor',
			'st_h2_bgcolor_t'          => 'st_h2_bgcolor_t',
			'st_h2border_color'       => 'st_h2border_color',
			'st_h2border_undercolor'  => 'st_h2border_undercolor',
			'st_h2_border_tb'         => 'st_h2_border_tb',
			'st_h2_border_tb_sub'         => 'st_h2_border_tb_sub',
			'st_h2_designsetting'     => 'st_h2_designsetting',
			'st_h2_bgimg_side'        => 'st_h2_bgimg_side',
			'st_h2_bgimg_top'         => 'st_h2_bgimg_top',
			'st_h2_bgimg_repeat'      => 'st_h2_bgimg_repeat',
			'st_h2_bgimg_leftpadding' => 'st_h2_bgimg_leftpadding',
			'st_h2_bgimg_tupadding'   => 'st_h2_bgimg_tupadding',
			'st_h2_bg_radius'         => 'st_h2_bg_radius',
			'st_h2_no_css'            => 'st_h2_no_css',
			'st_h2_gradient'            => 'st_h2_gradient',
			'st_h2_text_center'            => 'st_h2_text_center',
			'st_h2_design_wide'            => 'st_h2_design_wide',

		
			'st_h3_color'              => 'st_h3_color',
			'st_h3_bgcolor'            => 'st_h3_bgcolor',
			'st_h3_bgcolor_t'          => 'st_h3_bgcolor_t',
			'st_h3border_color'       => 'st_h3border_color',
			'st_h3border_undercolor'  => 'st_h3border_undercolor',
			'st_h3_border_tb'         => 'st_h3_border_tb',
			'st_h3_border_tb_sub'         => 'st_h3_border_tb_sub',
			'st_h3_designsetting'     => 'st_h3_designsetting',
			'st_h3_bgimg_side'        => 'st_h3_bgimg_side',
			'st_h3_bgimg_top'         => 'st_h3_bgimg_top',
			'st_h3_bgimg_repeat'      => 'st_h3_bgimg_repeat',
			'st_h3_bgimg_leftpadding' => 'st_h3_bgimg_leftpadding',
			'st_h3_bgimg_tupadding'   => 'st_h3_bgimg_tupadding',
			'st_h3_bg_radius'         => 'st_h3_bg_radius',
			'st_h3_no_css'            => 'st_h3_no_css',
			'st_h3_gradient'            => 'st_h3_gradient',
			'st_h3_text_center'            => 'st_h3_text_center',
			'st_h3_design_wide'            => 'st_h3_design_wide',

		
			'st_h4_textcolor'    => 'st_h4_textcolor',
			'st_h4bordercolor'   => 'st_h4bordercolor',
			'st_h4bgcolor'          => 'st_h4bgcolor',
			'st_h4_design'            => 'st_h4_design',
			'st_h4_top_border'        => 'st_h4_top_border',
			'st_h4_bottom_border'     => 'st_h4_bottom_border',
			'st_h4_bgimg_side'        => 'st_h4_bgimg_side',
			'st_h4_bgimg_top'         => 'st_h4_bgimg_top',
			'st_h4_bgimg_repeat'      => 'st_h4_bgimg_repeat',
			'st_h4_bgimg_leftpadding' => 'st_h4_bgimg_leftpadding',
			'st_h4_bgimg_tupadding'   => 'st_h4_bgimg_tupadding',
			'st_h4hukidasi_design'    => 'st_h4hukidasi_design',
			'st_h4_bg_radius'         => 'st_h4_bg_radius',
			'st_h4_no_css'            => 'st_h4_no_css',
			'st_h4_husen_shadow'            => 'st_h4_husen_shadow',

		
			'st_h4_matome_textcolor'    => 'st_h4_matome_textcolor',
			'st_h4_matome_bordercolor'   => 'st_h4_matome_bordercolor',
			'st_h4_matome_bgcolor'          => 'st_h4_matome_bgcolor',
			'st_h4_matome_design'            => 'st_h4_matome_design',
			'st_h4_matome_top_border'        => 'st_h4_matome_top_border',
			'st_h4_matome_bottom_border'     => 'st_h4_matome_bottom_border',
			'st_h4_matome_bgimg_side'        => 'st_h4_matome_bgimg_side',
			'st_h4_matome_bgimg_top'         => 'st_h4_matome_bgimg_top',
			'st_h4_matome_bgimg_repeat'      => 'st_h4_matome_bgimg_repeat',
			'st_h4_matome_bgimg_leftpadding' => 'st_h4_matome_bgimg_leftpadding',
			'st_h4_matome_bgimg_tupadding'   => 'st_h4_matome_bgimg_tupadding',
			'st_h4_matome_hukidasi_design'    => 'st_h4_matome_hukidasi_design',
			'st_h4_matome_bg_radius'         => 'st_h4_matome_bg_radius',
			'st_h4_matome_no_css'            => 'st_h4_matome_no_css',

		
			'st_h5_textcolor'    => 'st_h5_textcolor',
			'st_h5bordercolor'   => 'st_h5bordercolor',
			'st_h5bgcolor'          => 'st_h5bgcolor',
			'st_h5_design'            => 'st_h5_design',
			'st_h5_top_border'        => 'st_h5_top_border',
			'st_h5_bottom_border'     => 'st_h5_bottom_border',
			'st_h5_bgimg_side'        => 'st_h5_bgimg_side',
			'st_h5_bgimg_top'         => 'st_h5_bgimg_top',
			'st_h5_bgimg_repeat'      => 'st_h5_bgimg_repeat',
			'st_h5_bgimg_leftpadding' => 'st_h5_bgimg_leftpadding',
			'st_h5_bgimg_tupadding'   => 'st_h5_bgimg_tupadding',
			'st_h5hukidasi_design'    => 'st_h5hukidasi_design',
			'st_h5_bg_radius'         => 'st_h5_bg_radius',
			'st_h5_no_css'            => 'st_h5_no_css',
			'st_h5_husen_shadow'            => 'st_h5_husen_shadow',

			'st_blockquote_color' => 'st_blockquote_color',

			'menu_separator_color'     => 'st_separator_color',
			'menu_separator_bgcolor'   => 'st_separator_bgcolor',
			'st_separator_bordercolor' => 'st_separator_bordercolor',
			'st_separator_type'        => 'st_separator_type',

			'st_catbg_color'   => 'st_catbg_color',
			'st_cattext_color' => 'st_cattext_color',
			'st_cattext_radius' => 'st_cattext_radius',

		
			'menu_news_datecolor'     => 'st_news_datecolor',
			'menu_news_text_color'    => 'st_news_text_color',
			'menu_newsbarcolor_t'     => 'st_menu_newsbarcolor_t',
			'menu_newsbarcolor'       => 'st_menu_newsbarcolor',
			'menu_newsbarbordercolor' => 'st_menu_newsbar_border_color',
			'menu_newsbartextcolor'   => 'st_menu_newsbartextcolor',
			'st_menu_newsbgcolor'     => 'st_menu_newsbgcolor',

		
			'menu_navbar_topunder_color' => 'st_menu_navbar_topunder_color',
			'menu_navbar_side_color'     => 'st_menu_navbar_side_color',
			'menu_navbar_right_color'    => 'st_menu_navbar_right_color',
			'menu_navbarcolor'           => 'st_menu_navbarcolor',
			'menu_navbarcolor_t'         => 'st_menu_navbarcolor_t',
			'menu_navbartextcolor'       => 'st_menu_navbartextcolor',
			'st_menu_bold'               => 'st_menu_bold',
			'st_menu100'                 => 'st_menu100',
			'st_menu_center'             => 'st_menu_center',
			'st_menu_width'              => 'st_menu_width',
			'st_menu_padding'            => 'st_menu_padding',
			'st_navbarcolor_gradient'    => 'st_navbarcolor_gradient',

			'st_headermenu_bgimg_side'           => 'st_headermenu_bgimg_side',
			'st_headermenu_bgimg_top'            => 'st_headermenu_bgimg_top',
			'st_headermenu_bgimg_repeat'         => 'st_headermenu_bgimg_repeat',
			'st_menu_navbar_front_exclusion_set' => 'st_menu_navbar_front_exclusion_set',

			'st_sidemenu_bgimg_side'        => 'st_sidemenu_bgimg_side',
			'st_sidemenu_bgimg_top'         => 'st_sidemenu_bgimg_top',
			'st_sidemenu_bgimg_repeat'      => 'st_sidemenu_bgimg_repeat',
			'st_sidemenu_bgimg_leftpadding' => 'st_sidemenu_bgimg_leftpadding',
			'st_sidemenu_bgimg_tupadding'   => 'st_sidemenu_bgimg_tupadding',

			'st_sidebg_bgimg_side'   => 'st_sidebg_bgimg_side',
			'st_sidebg_bgimg_top'    => 'st_sidebg_bgimg_top',
			'st_sidebg_bgimg_repeat' => 'st_sidebg_bgimg_repeat',

			'st_header_top_bgcolor'      => 'st_header_top_bgcolor',
			'st_header_top_bgcolor_g'    => 'st_header_top_bgcolor_g',
			'st_header_top_textcolor'    => 'st_header_top_textcolor',

			'st_header_under_bgcolor'       => 'st_header_under_bgcolor',
			'st_header_under_image_side'    => 'st_header_under_image_side',
			'st_header_under_image_top'     => 'st_header_under_image_top',
			'st_header_under_image_repeat'  => 'st_header_under_image_repeat',
			'st_header_under_image_flex'    => 'st_header_under_image_flex',
			'st_header_under_image_dark'    => 'st_header_under_image_dark',

			'st_header_card_bgcolor'       => 'st_header_card_bgcolor',
			'st_header_card_image_side'    => 'st_header_card_image_side',
			'st_header_card_image_top'     => 'st_header_card_image_top',
			'st_header_card_image_repeat'  => 'st_header_card_image_repeat',
			'st_header_card_image_flex'    => 'st_header_card_image_flex',

			'st_headerimg100'             => 'st_headerimg100',
			'st_header_height'            => 'st_header_height',
			'st_header_height_sp'         => 'st_header_height_sp',
			'st_header_height_vh'         => 'st_header_height_vh',
			'st_header_bgcolor'           => 'st_header_bgcolor',
			'st_topgabg_image_side'       => 'st_topgabg_image_side',
			'st_topgabg_image_top'        => 'st_topgabg_image_top',
			'st_topgabg_image_repeat'     => 'st_topgabg_image_repeat',
			'st_topgabg_image_flex'       => 'st_topgabg_image_flex',
			'st_topgabg_image_fix'        => 'st_topgabg_image_fix',
			'st_topgabg_image_sumahoonly' => 'st_topgabg_image_sumahoonly',

			'menu_navbar_undercolor'  => 'st_menu_navbar_undercolor',

		
			'st_menu_side_widgets_topunder_color' => 'st_menu_side_widgets_topunder_color',
			'st_menu_side_widgetscolor'           => 'st_menu_side_widgetscolor',
			'st_menu_side_widgetscolor_t'         => 'st_menu_side_widgetscolor_t',
			'st_menu_side_widgetstextcolor'       => 'st_menu_side_widgetstextcolor',
			'st_menu_icon'            => 'st_menu_icon',
			'st_undermenu_icon'       => 'st_undermenu_icon',
			'st_menu_icon_color'      => 'st_menu_icon_color',
			'st_undermenu_icon_color' => 'st_undermenu_icon_color',
			'st_sidemenu_fontsize'    => 'st_sidemenu_fontsize',
			'st_sidemenu_accordion'   => 'st_sidemenu_accordion',
			'st_sidemenu_gradient'            => 'st_sidemenu_gradient',

			'st_side_bgcolor' => 'st_side_bgcolor',

			'menu_pagelist_childtextcolor'         => 'st_menu_pagelist_childtextcolor',
			'menu_pagelist_bgcolor'                => 'st_menu_pagelist_bgcolor',
			'menu_pagelist_childtext_border_color' => 'st_menu_pagelist_childtext_border_color',

		
			'st_widgets_title_color'          => 'st_widgets_title_color',
			'st_widgets_title_bgcolor'        => 'st_widgets_title_bgcolor',
			'st_widgets_title_bgcolor_t'      => 'st_widgets_title_bgcolor_t',
			'st_widgets_titleborder_color'       => 'st_widgets_titleborder_color',
			'st_widgets_titleborder_undercolor'  => 'st_widgets_titleborder_undercolor',
			'st_widgets_title_designsetting'     => 'st_widgets_title_designsetting',
			'st_widgets_title_bgimg_side'        => 'st_widgets_title_bgimg_side',
			'st_widgets_title_bgimg_top'         => 'st_widgets_title_bgimg_top',
			'st_widgets_title_bgimg_repeat'      => 'st_widgets_title_bgimg_repeat',
			'st_widgets_title_bgimg_leftpadding' => 'st_widgets_title_bgimg_leftpadding',
			'st_widgets_title_bgimg_tupadding'   => 'st_widgets_title_bgimg_tupadding',
			'st_widgets_title_bg_radius'         => 'st_widgets_title_bg_radius',

			'st_tagcloud_color'        => 'st_tagcloud_color',
			'st_tagcloud_bordercolor'  => 'st_tagcloud_bordercolor',
			'st_tagcloud_bgcolor'      => 'st_tagcloud_bgcolor',
			'menu_rsscolor'            => 'st_rss_color',

			'st_search_form_text'            => 'st_search_form_text',
			'st_search_form_border_color'    => 'st_search_form_border_color',
			'st_search_form_border_width'    => 'st_search_form_border_width',
			'st_search_form_bg_color'        => 'st_search_form_bg_color',
			'st_search_form_text_color'      => 'st_search_form_text_color',
			'st_search_form_icon_color'      => 'st_search_form_icon_color',
			'st_search_form_icon_bg_color'   => 'st_search_form_icon_bg_color',
			'st_search_form_border_radius'   => 'st_search_form_border_radius',
			'st_search_form_font_size'       => 'st_search_form_font_size',
			'st_search_form_padding_lr'      => 'st_search_form_padding_lr',
			'st_search_form_padding_tb'      => 'st_search_form_padding_tb',

			'st_search_form_btn_border_color'    => 'st_search_form_btn_border_color',
			'st_search_form_btn_border_width'    => 'st_search_form_btn_border_width',
			'st_search_form_btn_bg_color'        => 'st_search_form_btn_bg_color',
			'st_search_form_btn_shadow_color'    => 'st_search_form_btn_shadow_color',
			'st_search_form_btn_text_color'      => 'st_search_form_btn_text_color',
			'st_search_form_btn_font_weight'     => 'st_search_form_btn_font_weight',
			'st_search_form_btn_border_radius'   => 'st_search_form_btn_border_radius',
			'st_search_form_btn_font_size'       => 'st_search_form_btn_font_size',
			'st_search_form_btn_padding_lr'      => 'st_search_form_btn_padding_lr',
			'st_search_form_btn_padding_tb'      => 'st_search_form_btn_padding_tb',

			'st_sns_btn'     => 'st_sns_btn',
			'st_sns_btntext' => 'st_sns_btntext',

			'st_formbtn_textcolor'   => 'st_formbtn_textcolor',
			'st_formbtn_bordercolor' => 'st_formbtn_bordercolor',
			'st_formbtn_bgcolor_t'   => 'st_formbtn_bgcolor_t',
			'st_formbtn_bgcolor'     => 'st_formbtn_bgcolor',
			'st_formbtn_radius'      => 'st_formbtn_radius',

			'st_formbtn2_textcolor'   => 'st_formbtn2_textcolor',
			'st_formbtn2_bordercolor' => 'st_formbtn2_bordercolor',
			'st_formbtn2_bgcolor_t'   => 'st_formbtn2_bgcolor_t',
			'st_formbtn2_bgcolor'     => 'st_formbtn2_bgcolor',
			'st_formbtn2_radius'      => 'st_formbtn2_radius',

			'st_contactform7btn_textcolor' => 'st_contactform7btn_textcolor',
			'st_contactform7btn_bgcolor'   => 'st_contactform7btn_bgcolor',

		
			'menu_osusumemidasitextcolor' => 'st_menu_osusumemidasitextcolor',
			'menu_osusumemidasicolor'     => 'st_menu_osusumemidasicolor',
			'menu_osusumemidasinocolor'   => 'st_menu_osusumemidasinocolor',
			'menu_osusumemidasinobgcolor' => 'st_menu_osusumemidasinobgcolor',
			'menu_popbox_color'           => 'st_menu_popbox_color',
			'menu_popbox_textcolor'       => 'st_menu_popbox_textcolor',
			'st_nohidden'                 => 'st_nohidden',

		
			'st_blackboard_textcolor'   => 'st_blackboard_textcolor',
			'st_blackboard_bordercolor' => 'st_blackboard_bordercolor',
			'st_blackboard_bgcolor'     => 'st_blackboard_bgcolor',
			'st_blackboard_mokuzicolor'   => 'st_blackboard_mokuzicolor',
			'st_blackboard_title_bgcolor'   => 'st_blackboard_title_bgcolor',
			'st_blackboard_list3_fontweight'   => 'st_blackboard_list3_fontweight',
			'st_blackboard_underbordercolor'   => 'st_blackboard_underbordercolor',
			'st_blackboard_webicon'   => 'st_blackboard_webicon',

		
			'freebox_tittle_textcolor' => 'st_freebox_tittle_textcolor',
			'freebox_tittle_color'     => 'st_freebox_tittle_color',
			'freebox_color'            => 'st_freebox_color',
			'freebox_textcolor'        => 'st_freebox_textcolor',

		
			'st_memobox_color' => 'st_memobox_color',
		
			'st_slidebox_color' => 'st_slidebox_color',

		
			'menu_sumartmenutextcolor'             => 'st_menu_sumartmenutextcolor',
			'st_menu_sumartmenubordercolor'        => 'st_menu_sumartmenubordercolor',
			'st_menu_smartbar_bg_color'            => 'st_menu_smartbar_bg_color',
			'st_menu_smartbar_bg_color_t'          => 'st_menu_smartbar_bg_color_t',
			'st_menu_smartbar_bg_image_side'       => 'st_menu_smartbar_bg_image_side',
			'st_menu_smartbar_bg_image_top'        => 'st_menu_smartbar_bg_image_top',
			'st_menu_smartbar_bg_image_repeat'     => 'st_menu_smartbar_bg_image_repeat',
			'st_menu_smartbar_front_exclusion_set' => 'st_menu_smartbar_front_exclusion_set',

			'menu_sumart_bg_color'        => 'st_menu_sumart_bg_color',
			'menu_sumartbar_bg_color'     => 'st_menu_sumartbar_bg_color',
			'menu_sumartcolor'            => 'st_menu_sumartcolor',
			'st_menu_faicon'              => 'st_menu_faicon',
			'st_search_slide_sumartbar_bg_color'   => 'st_search_slide_sumartbar_bg_color',
			'st_sticky_menu'              => 'st_sticky_menu',
			'st_sticky_primary_menu_side' => 'st_sticky_primary_menu_side',
 			'st_slidemenubg_image_side'   => 'st_slidemenubg_image_side',
			'st_slidemenubg_image_top'    => 'st_slidemenubg_image_top',
			'st_slidemenubg_image_repeat' => 'st_slidemenubg_image_repeat',
			'st_slidemenubg_image_flex'   => 'st_slidemenubg_image_flex',

		
			'st_middle_sumartmenutextcolor' => 'st_middle_sumartmenutextcolor',
			'st_middle_sumartmenubordercolor' => 'st_middle_sumartmenubordercolor',
			'st_middle_sumart_bg_color'     => 'st_middle_sumart_bg_color',
			'st_middle_sumart_bg_color_t'     => 'st_middle_sumart_bg_color_t',
			'st_middle_sumartmenu_space'     => 'st_middle_sumartmenu_space',

			'menu_sumart_st_bg_color'  => 'st_menu_sumart_st_bg_color',
			'menu_sumart_st_color'     => 'st_menu_sumart_st_color',
			'menu_sumart_st2_bg_color' => 'st_menu_sumart_st2_bg_color',
			'menu_sumart_st2_color'    => 'st_menu_sumart_st2_color',
			'st_menu_sumart_footermenu_text_color'    => 'st_menu_sumart_footermenu_text_color',
			'st_menu_sumart_footermenu_bg_color'    => 'st_menu_sumart_footermenu_bg_color',
			'st_menu_sumart_footermenu_fontawesome'    => 'st_menu_sumart_footermenu_fontawesome',

		
			'st_guidemenu_bg_color'     => 'st_guidemenu_bg_color',
			'st_guidemenu_radius'       => 'st_guidemenu_radius',
			'st_guidemenutextcolor'     => 'st_guidemenutextcolor',
			'st_guidemenutextcolor2'    => 'st_guidemenutextcolor2',
			'st_guide_bg_color'         => 'st_guide_bg_color',

		
			'st_boxnavimenu_color'        => 'st_boxnavimenu_color',
			'st_boxnavimenu_bg_color'     => 'st_boxnavimenu_bg_color',
			'st_boxnavimenu_bordercolor'  => 'st_boxnavimenu_bordercolor',
			'st_boxnavimenu_fontawesome'  => 'st_boxnavimenu_fontawesome',

		
			'st_webicon_question'        => 'st_webicon_question',
			'st_webicon_check'           => 'st_webicon_check',
			'st_webicon_checkbox'        => 'st_webicon_checkbox',
			'st_webicon_checkbox_square' => 'st_webicon_checkbox_square',
			'st_webicon_checkbox_size'   => 'st_webicon_checkbox_size',
			'st_webicon_checkbox_simple' => 'st_webicon_checkbox_simple',
			'st_webicon_exclamation'     => 'st_webicon_exclamation',
			'st_webicon_memo'            => 'st_webicon_memo',
			'st_webicon_user'            => 'st_webicon_user',
			'st_webicon_oukan'           => 'st_webicon_oukan',
			'st_webicon_bigginer'        => 'st_webicon_bigginer',

		
			'st_author_basecolor'          => 'st_author_basecolor',
			'st_author_bg_color'           => 'st_author_bg_color',

			'st_author_profile'               => 'st_author_profile',
			'st_author_bg_color_profile'      => 'st_author_bg_color_profile',
			'st_author_basecolor_profile'     => 'st_author_basecolor_profile',
			'st_author_text_color_profile'    => 'st_author_text_color_profile',
			'st_author_profile_shadow'        => 'st_author_profile_shadow',
			'st_author_profile_avatar_shadow' => 'st_author_profile_avatar_shadow',
			'st_author_profile_radius'        => 'st_author_profile_radius',

			'st_author_profile_btn_url'    => 'st_author_profile_btn_url',
			'st_author_profile_btn_text'   => 'st_author_profile_btn_text',
			'st_author_profile_btn_text_color'    => 'st_author_profile_btn_text_color',
			'st_author_profile_btn_top'    => 'st_author_profile_btn_top',
			'st_author_profile_btn_bottom' => 'st_author_profile_btn_bottom',
			'st_author_profile_btn_shadow' => 'st_author_profile_btn_shadow',

		
			'st_thumbnail_bordercolor'        => 'st_thumbnail_bordercolor',
		
			'st_kanren_bordercolor' => 'st_kanren_bordercolor',
			'st_kanren_border_dashed' => 'st_kanren_border_dashed',
		
			'st_pagination_bordercolor' => 'st_pagination_bordercolor',

		
			'st_pagetop_up'          => 'st_pagetop_up',
			'st_pagetop_circle'      => 'st_pagetop_circle',
			'st_pagetop_bgcolor'     => 'st_pagetop_bgcolor',
			'st_pagetop_img_right'   => 'st_pagetop_img_right',
			'st_pagetop_img_bottom'  => 'st_pagetop_img_bottom',
			'st_pagetop_hidden'      => 'st_pagetop_hidden',

		
			'st_toc_textcolor'           => 'st_toc_textcolor',
			'st_toc_text2color'          => 'st_toc_text2color',
			'st_toc_bordercolor'         => 'st_toc_bordercolor',
			'st_toc_bgcolor'             => 'st_toc_bgcolor',
			'st_toc_list_icon_base'      => 'st_toc_list_icon_base',
			'st_toc_mokuzicolor'         => 'st_toc_mokuzicolor',
			'st_toc_mokuzi_border'       => 'st_toc_mokuzi_border',
			'st_toc_list1_left'          => 'st_toc_list1_left',
			'st_toc_list1_icon'          => 'st_toc_list1_icon',
			'st_toc_list2_icon'          => 'st_toc_list2_icon',
			'st_toc_list3_fontweight'    => 'st_toc_list3_fontweight',
			'st_toc_list3_icon'          => 'st_toc_list3_icon',
			'st_toc_underbordercolor'    => 'st_toc_underbordercolor',
			'st_toc_webicon'             => 'st_toc_webicon',
			'st_toc_radius'              => 'st_toc_radius',
			'st_toc_list_style'          => 'st_toc_list_style',
			'st_toc_only_toc_fontweight' => 'st_toc_only_toc_fontweight',
			'st_toc_border_width'        => 'st_toc_border_width',

		
			'st_maruno_textcolor'   => 'st_maruno_textcolor',
			'st_maruno_nobgcolor'   => 'st_maruno_nobgcolor',
			'st_maruno_bordercolor' => 'st_maruno_bordercolor',
			'st_maruno_bgcolor'     => 'st_maruno_bgcolor',
			'st_maruno_radius'     => 'st_maruno_radius',

		
			'st_maruck_textcolor'   => 'st_maruck_textcolor',
			'st_maruck_nobgcolor'   => 'st_maruck_nobgcolor',
			'st_maruck_bordercolor' => 'st_maruck_bordercolor',
			'st_maruck_bgcolor'     => 'st_maruck_bgcolor',
			'st_maruck_radius'      => 'st_maruck_radius',

		
			'st_timeline_list_color'       => 'st_timeline_list_color',
			'st_timeline_list_now_color'   => 'st_timeline_list_now_color',
			'st_timeline_list_bg_color'    => 'st_timeline_list_bg_color',
			'st_timeline_list_color_count' => 'st_timeline_list_color_count',
			'st_timeline_list_now_blink'   => 'st_timeline_list_now_blink',

		
			'st_card_border_color'        => 'st_card_border_color',
			'st_card_border_size'         => 'st_card_border_size',
			'st_card_label_bgcolor'       => 'st_card_label_bgcolor',
			'st_card_label_textcolor'     => 'st_card_label_textcolor',
			'st_card_label_designsetting' => 'st_card_label_designsetting',

		
			'st_step_bgcolor' => 'st_step_bgcolor',
			'st_step_color'     => 'st_step_color',
			'st_step_text_color'     => 'st_step_text_color',
			'st_step_text_bgcolor' => 'st_step_text_bgcolor',
			'st_step_text_border_color'   => 'st_step_text_border_color',
			'st_step_radius'   => 'st_step_radius',

		
			'st_table_bordercolor'  => 'st_table_bordercolor',
			'st_table_cell_bgcolor' => 'st_table_cell_bgcolor',
			'st_table_td_bgcolor'   => 'st_table_td_bgcolor',
			'st_table_td_textcolor' => 'st_table_td_textcolor',
			'st_table_td_bold'      => 'st_table_td_bold',
			'st_table_tr_bgcolor'   => 'st_table_tr_bgcolor',
			'st_table_tr_textcolor' => 'st_table_tr_textcolor',
			'st_table_tr_bold'      => 'st_table_tr_bold',

		
			'st_kaiwa_bgcolor'        => 'st_kaiwa_bgcolor',
			'st_kaiwa2_bgcolor'       => 'st_kaiwa2_bgcolor',
			'st_kaiwa3_bgcolor'       => 'st_kaiwa3_bgcolor',
			'st_kaiwa4_bgcolor'       => 'st_kaiwa4_bgcolor',
			'st_kaiwa5_bgcolor'       => 'st_kaiwa5_bgcolor',
			'st_kaiwa6_bgcolor'       => 'st_kaiwa6_bgcolor',
			'st_kaiwa7_bgcolor'       => 'st_kaiwa7_bgcolor',
			'st_kaiwa8_bgcolor'       => 'st_kaiwa8_bgcolor',
			'st_kaiwa_no_border'      => 'st_kaiwa_no_border',
			'st_kaiwa_borderradius'   => 'st_kaiwa_borderradius',
			'st_kaiwa_change_border'  => 'st_kaiwa_change_border',
			'st_kaiwa_change_border_bgcolor'  => 'st_kaiwa_change_border_bgcolor',
		);
	}
}

if ( !function_exists( 'st_create_theme_mod_var_array' ) ) {
	function st_create_theme_mod_var_array( $theme_mod_defaults, $maps, $theme_mod_overrides = array() ) {
		$vars = array();

		foreach ( $maps as $var_name => $theme_mod_name ) {
			$in_defaults  = array_key_exists( $theme_mod_name, $theme_mod_defaults );
			$in_overrides = array_key_exists( $theme_mod_name, $theme_mod_overrides );

			if ( !$in_defaults && !$in_overrides ) {
				continue;
			}

		
			if ($in_overrides) {
				$vars[$var_name] = $theme_mod_overrides[$theme_mod_name];

				continue;
			}

			$vars[$var_name] = get_theme_mod( $theme_mod_name, $theme_mod_defaults[$theme_mod_name] );
		}

		return $vars;
	}
}

if ( !function_exists( 'st_get_theme_mod_defaults' ) ) {
	function st_get_theme_mod_defaults($kantan_setting = null) {
		$kantan_setting = ( $kantan_setting !== null ) ? $kantan_setting : st_get_kantan_setting();
		$defaults       = st_get_plain_theme_mod_defaults();

		if ( !st_is_customizer_enabled() ) {
			return $defaults;
		}

		$preset_overrides = st_get_preset_theme_mod_overrides( st_get_preset_name() );
		$defaults         = array_merge( $defaults, $preset_overrides);

		switch (true) {
		
			case ($kantan_setting === 'defaultcolor'):
			
				$defaults = array_merge($defaults, st_get_zentai_theme_mod_overrides());

				break;

		
			default:
				break;
		}

		return $defaults;
	}
}

if ( ! function_exists( '_st_customize_setting' ) ) {
	function _st_customize_settings( $settings = null ) {
		static $store = [];

		if ( $settings === null ) {
			return $store;
		}

		$store = $settings;
	}
}

if (!function_exists('_st_customization_add_color_controls')) {
	function _st_customization_add_color_controls(
		WP_Customize_Manager $wp_customize,
		$section,
		$priority = 10,
		$label = ''
	) {
		static $id = 1;

		if ( $id === 1 ) {
			$preset_colors  = st_get_preset_colors( st_get_preset_name() );

			extract( $preset_colors, EXTR_OVERWRITE );

		
			$wp_customize->add_setting( 'st_key_patterncolor',
				array(
					'default'              => '',
					'sanitize_callback'    => 'sanitize_hex_color',
					'sanitize_js_callback' => 'maybe_hash_hex_color',
				) );

			$wp_customize->add_setting( 'st_main_patterncolor',
				array(
					'default'              => '',
					'sanitize_callback'    => 'sanitize_hex_color',
					'sanitize_js_callback' => 'maybe_hash_hex_color',
				) );

			$wp_customize->add_setting( 'st_sub_patterncolor',
				array(
					'default'              => '',
					'sanitize_callback'    => 'sanitize_hex_color',
					'sanitize_js_callback' => 'maybe_hash_hex_color',
				) );

			$wp_customize->add_setting( 'st_text_patterncolor',
				array(
					'default'              => '',
					'sanitize_callback'    => 'sanitize_hex_color',
					'sanitize_js_callback' => 'maybe_hash_hex_color',
				) );
		}

		$suffix   = '_' . $id;
		$priority = 0;

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'st_key_patterncolor' . $suffix,
			array(
				'label'       => __( $label, 'affinger' ),
				'section'     => $section,
				'description' => 'キーカラー（推奨：一番濃い色）',
				'settings'    => 'st_key_patterncolor',
				'priority'    => $priority,
			)
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'st_main_patterncolor' . $suffix,
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => $section,
				'description' => 'メインカラー（推奨：少し薄い色）',
				'settings'    => 'st_main_patterncolor',
				'priority'    => $priority,
			)
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'st_sub_patterncolor' . $suffix,
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => $section,
				'description' => 'サブカラー（推奨：とても薄い色）',
				'settings'    => 'st_sub_patterncolor',
				'priority'    => $priority,
			)
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control(
			$wp_customize,
			'st_text_patterncolor' . $suffix,
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => $section,
				'description' => 'テキスト（一部）',
				'settings'    => 'st_text_patterncolor',
				'priority'    => $priority,
			)
		) );

		$id ++;
	}
}

function st_customize_register( $wp_customize ) {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	$kantan_setting = st_get_previous_kantan_setting();
	$defaults       = st_get_theme_mod_defaults( $kantan_setting );
	$preset_colors  = st_get_preset_colors( st_get_preset_name() );

	extract( $preset_colors, EXTR_OVERWRITE );

	$default_settings = $wp_customize->settings();

	$wp_customize->add_section( 'st_logo_image',
		array(
			'title'       => 'ロゴ画像 / サイトのタイトル',
			'priority' => 10,
			'description' => '',
		) );

	$wp_customize->add_setting( 'st_logo_image',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'logo_Image',
		array(
			'label'    => 'ロゴ画像',
			'section'  => 'st_logo_image',
			'settings' => 'st_logo_image',
		)
	) );

	$wp_customize->add_setting( 'st_footer_logo',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'footer_logo',
		array(
			'label'       => '',
			'section'     => 'st_logo_image',
			'description' => 'フッターロゴ画像',
			'settings'    => 'st_footer_logo',
		)
	) );

	$wp_customize->add_setting( 'st_header_footer_logo',
		array(
			'default'           => $defaults['st_header_footer_logo'],
			'sanitize_callback' => 'sanitize_checkbox',
		) );
	$wp_customize->add_control( 'st_header_footer_logo',
		array(
			'section'     => 'st_logo_image',
			'settings'    => 'st_header_footer_logo',
			'label'       => 'ヘッダーロゴ画像を使用する',
			'description' => '',
			'type'        => 'checkbox',
		) );

		$wp_customize->add_setting( 'st_pc_logo_height',
			array(
				'default'           => $defaults['st_pc_logo_height'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_pc_logo_height_c',
			array(
				'section'     => 'st_logo_image',
				'settings'    => 'st_pc_logo_height',
				'label'       => '',
				'description' => 'ロゴの最大の高さ（px）',
				'type'        => 'option',
			) );

	$wp_customize->add_setting( 'st_menu_logocolor',
		array(
			'default'              => $defaults['st_menu_logocolor'],
			'sanitize_callback'    => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
		) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_logocolor', array(
		'label'       => __( '', 'affinger' ),
		'description' => 'サイトタイトルとキャッチフレーズの文字色',
		'section'     => 'st_logo_image',
		'settings'    => 'st_menu_logocolor',
	) ) );

	$wp_customize->add_setting( 'st_mobile_logo',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'mobile_logo',
		array(
			'label'       => 'スマホロゴ画像',
			'section'     => 'st_logo_image',

			'description' => 'カスタマイザーには反映されない項目がございます',
			'settings'    => 'st_mobile_logo',
		)
	) );

		//スマホタイトル使用時のテキスト色

		$wp_customize->add_setting( 'st_mobile_sitename',
			array(
				'default'              => $defaults['st_mobile_sitename'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_mobile_sitename', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'スマホヘッダーのタイトル色',
			'section'     => 'st_logo_image',

			'settings' => 'st_mobile_sitename',
		) ) );

	$wp_customize->add_setting( 'st_mobile_logo_height',
		array(
			'default'           => $defaults['st_mobile_logo_height'],
			'sanitize_callback' => 'sanitize_int',

		) );
	$wp_customize->add_control( 'st_mobile_logo_height_c',
		array(
			'section'     => 'st_logo_image',
			'settings'    => 'st_mobile_logo_height',
			'label'       => '',
			'description' => 'スマホロゴの最大の高さ（px）',
			'type'        => 'option',
		) );

	$wp_customize->add_setting( 'st_mobile_logo_center',
		array(
			'default'           => $defaults['st_mobile_logo_center'],
			'sanitize_callback' => 'sanitize_checkbox',
		) );
	$wp_customize->add_control( 'st_mobile_logo_center',
		array(
			'section'     => 'st_logo_image',
			'settings'    => 'st_mobile_logo_center',
			'label'       => 'スマホロゴ（又はタイトル）を左寄せ',
			'description' => '',
			'type'        => 'checkbox',
		) );

	$wp_customize->add_setting( 'st_icon_logo',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'icon_logo',
		array(
			'label'       => 'アイコンロゴ画像',
			'section'     => 'st_logo_image',
			'description' => 'サイトのタイトルの前に画像を設置します',
			'settings'    => 'st_icon_logo',
		)
	) );

	$wp_customize->add_setting( 'st_icon_logo_width',
		array(
			'default'           => $defaults['st_icon_logo_width'],
			'sanitize_callback' => 'sanitize_int',

		) );
	$wp_customize->add_control( 'st_icon_logo_width_c',
		array(
			'section'     => 'st_logo_image',
			'settings'    => 'st_icon_logo_width',
			'label'       => '',
			'description' => 'PCアイコンロゴの最大の高さ（px）',
			'type'        => 'option',
		) );

	$wp_customize->add_setting( 'st_icon_logo_width_sp',
		array(
			'default'           => $defaults['st_icon_logo_width_sp'],
			'sanitize_callback' => 'sanitize_int',

		) );
	$wp_customize->add_control( 'st_icon_logo_width_sp_c',
		array(
			'section'     => 'st_logo_image',
			'settings'    => 'st_icon_logo_width_sp',
			'label'       => '',
			'description' => 'スマホアイコンロゴの最大の高さ（px）',
			'type'        => 'option',
		) );

	/*-------------------------------------------------------
	ヘッダー画像
	-------------------------------------------------------*/
	$wp_customize->add_section( 'header_image',
		array(
			'title'    => 'ヘッダー画像',
			'priority' => 20,
			'description' => 'ヘッダー画像 / ヘッダー画像エリア（高さ・背景色・背景画像）',
		) );

	if ( st_is_customizer_enabled() ) {
	
	}

		/*ヘッダー画像100%*/
		$wp_customize->add_setting( 'st_headerimg100',
			array(
				'default'           => $defaults['st_headerimg100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headerimg100',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_headerimg100',
				'label'       => 'ヘッダー画像の横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	/*スマホヘッダー画像*/
	$wp_customize->add_setting( 'st_mobile_header',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'mobile_header',
		array(
			'label'       => '',
			'section'     => 'header_image',
			'description' => 'スマホヘッダー画像',
			'settings'    => 'st_mobile_header',
		)
	) );

	if ( st_is_customizer_enabled() ) {

	
		$wp_customize->add_setting( 'st_header_height',
			array(
				'default'           => $defaults['st_header_height'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_header_height_c',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_header_height',
				'label'       => __( 'ヘッダー画像エリア', 'affinger' ),
				'description' => 'ヘッダー画像エリア最低の高さ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_header_height_sp',
			array(
				'default'           => $defaults['st_header_height_sp'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_header_height_sp_c',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_header_height_sp',
				'label'       => '',
				'description' => 'スマホ（599px以下）※高さを分ける場合',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_header_height_vh',
			array(
				'default'           => $defaults['st_header_height_vh'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_height_vh',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_header_height_vh',
				'label'       => 'トップページのヘッダー画像エリアの高さを画面サイズに応じて最大にする（β）※優先',
				'description' => '',
				'type'        => 'checkbox',
			) );

	
		$wp_customize->add_setting( 'st_header_bgcolor',
			array(
				'default'              => $defaults['st_header_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_bgcolor', array(
			'label'       => '',
			'description' => 'ヘッダー画像エリアの背景色',
			'section'     => 'header_image',
			'settings' => 'st_header_bgcolor',
		) ) );

	

		$wp_customize->add_setting( 'st_topgabg_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'topga_Image',
			array(
				'label'       => '',
				'section'     => 'header_image',
				'description' => 'ヘッダー画像の後ろに配置する背景画像です（ヘッダー画像にpngなど透過性のある素材を利用すると重ねることが出来ます）',
				'settings'    => 'st_topgabg_image',
			)
		) );

		$wp_customize->add_setting( 'st_topgabg_image_side',
			array(
				'default'           => $defaults['st_topgabg_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_topgabg_image_side',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_topgabg_image_top',
			array(
				'default'           => $defaults['st_topgabg_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_topgabg_image_top',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_topgabg_image_repeat',
			array(
				'default'           => $defaults['st_topgabg_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_topgabg_image_repeat',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_topgabg_image_flex',
			array(
				'default'           => $defaults['st_topgabg_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_topgabg_image_flex',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_topgabg_image_fix',
			array(
				'default'           => $defaults['st_topgabg_image_fix'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_topgabg_image_fix',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_fix',
				'label'       => 'パララックス（視差効果）風にする ※PCのみ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_topgabg_image_sumahoonly',
			array(
				'default'           => $defaults['st_topgabg_image_sumahoonly'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_topgabg_image_sumahoonly',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_sumahoonly',
				'label'       => '背景画像をスマホ・タブレットのみにする',
				'description' => '',
				'type'        => 'checkbox',
			) );
	}
	/*-------------------------------------------------------
		基本エリア設定
	-------------------------------------------------------*/
	if ( st_is_customizer_enabled() ) {

		$wp_customize->add_panel( 'st_panel_base_area',
			array(
				'title'       => __( '基本エリア設定', 'affinger' ),
				'description' => '',
				'priority'    => 81,
			) );

		$wp_customize->add_section('color_controls', array(
    		'title' => 'カラーパレット',
    		'panel' => 'st_panel_base_area',
  		));
		_st_customization_add_color_controls( $wp_customize, 'color_controls' );

		$wp_customize->add_section('colors', array(
			'title' => '背景色',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_front_page_bgcolor',
			array(
				'default'              => $defaults['st_front_page_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_front_page_bgcolor', array(
			'label'       => __( 'フロントページ背景色', 'affinger' ),
			'description' => 'フロントページ限定の背景色です',
			'section'     => 'colors',
			'settings' => 'st_front_page_bgcolor',
		) ) );	

		$wp_customize->add_setting( 'st_wrapper_bgcolor',
			array(
				'default'              => $defaults['st_wrapper_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_wrapper_bgcolor', array(
			'label'       => __( 'サイト背景色', 'affinger' ),
			'description' => 'サイト全体を包括する背景色です※色を設定すると幅のMAX値は1100pxになります',
			'section'     => 'colors',
			'settings' => 'st_wrapper_bgcolor',
		) ) );

		// headerエリア
		$wp_customize->add_section('st_panel_header', array( // 中パネル
			'title' => 'headerエリア',
			'description' => 'header（ヘッダー～ヘッダー画像下エリア）全体のエリアです',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_headerbg_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'header_Image',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_header',
				'description' => '',
				'settings'    => 'st_headerbg_image',
			)
		) );

		$wp_customize->add_setting( 'st_headerbg_sp_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'header_sp_Image',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_header',
				'description' => 'スマホ（959px以下）',
				'settings'    => 'st_headerbg_sp_image',
			)
		) );

		$wp_customize->add_setting( 'st_headerbg_image_area',
			array(
				'default'           => $defaults['st_headerbg_image_area'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headerbg_image_area',
			array(
				'section'     => 'st_panel_header',
				'settings'    => 'st_headerbg_image_area',
				'label'       => '',
				'description' => '背景画像の範囲',
				'type'        => 'radio',
				'choices'     => array(
					''        => __( 'デフォルト', 'affinger' ),
					'middle'  => __( 'ヘッダー画像エリア下', 'affinger' ),
					'bottom'  => __( 'ヘッダーカードエリア', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_headerbg_image_side',
			array(
				'default'           => $defaults['st_headerbg_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headerbg_image_side',
			array(
				'section'     => 'st_panel_header',
				'settings'    => 'st_headerbg_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_headerbg_image_top',
			array(
				'default'           => $defaults['st_headerbg_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headerbg_image_top',
			array(
				'section'     => 'st_panel_header',
				'settings'    => 'st_headerbg_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_headerbg_image_repeat',
			array(
				'default'           => $defaults['st_headerbg_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headerbg_image_repeat',
			array(
				'section'     => 'st_panel_header',
				'settings'    => 'st_headerbg_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_headerbg_image_flex',
			array(
				'default'           => $defaults['st_headerbg_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headerbg_image_flex',
			array(
				'section'     => 'st_panel_header',
				'settings'    => 'st_headerbg_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_headerbg_image_dark',
			array(
				'default'           => $defaults['st_headerbg_image_dark'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headerbg_image_dark',
			array(
				'section'     => 'st_panel_header',
				'settings'    => 'st_headerbg_image_dark',
				'label'       => '背景画像を暗くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_section('st_panel_header_area', array(
			'title' => 'ヘッダーエリア',
			'description' => 'サイトのタイトルなどが表示される一番上のエリアです',
			'panel' => 'st_panel_base_area',
		));

	
		$wp_customize->add_setting( 'st_top_bordercolor',
			array(
				'default'              => $defaults['st_top_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_top_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'サイト上部にライン',
			'section'     => 'st_panel_header_area',
			'settings'    => 'st_top_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_line_height',
			array(
				'default'           => $defaults['st_line_height'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_line_height',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_line_height',
				'label'       => '',
				'description' => 'ラインの高さ（px）',
				'type'        => 'radio',
				'choices'     => array(
					'1px' => __( '1px', 'affinger' ),
					'5px' => __( '5px', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_line100',
			array(
				'default'           => $defaults['st_line100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_line100',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_line100',
				'label'       => 'ラインの横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_headbox_bgcolor',
			array(
				'default'              => $defaults['st_headbox_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headbox_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_header_area',
			'settings' => 'st_headbox_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_headbox_bgcolor_t',
			array(
				'default'              => $defaults['st_headbox_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headbox_bgcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'st_panel_header_area',

			'settings' => 'st_headbox_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_header100',
			array(
				'default'           => $defaults['st_header100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header100',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_header100',
				'label'       => 'ヘッダー背景の横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );


			$wp_customize->add_setting( 'st_header_gradient',
			array(
				'default'           => $defaults['st_header_gradient'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_gradient',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_header_gradient',
				'label'       => 'グラデーションを横向きにする',
				'description' => '',
				'type'        => 'checkbox',
			) );


	

		$wp_customize->add_setting( 'st_header_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'head_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_header_area',
				'description' => 'ヘッダーエリア背景画像',
				'settings'    => 'st_header_image',
			)
		) );

		$wp_customize->add_setting( 'st_header_image_side',
			array(
				'default'           => $defaults['st_header_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_header_image_side',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_header_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_header_image_top',
			array(
				'default'           => $defaults['st_header_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_header_image_top',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_header_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_header_image_repeat',
			array(
				'default'           => $defaults['st_header_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_image_repeat',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_header_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_header_bg_image_flex',
			array(
				'default'           => $defaults['st_header_bg_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_bg_image_flex',
			array(
				'section'     => 'st_panel_header_area',
				'settings'    => 'st_header_bg_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		if ( st_is_ver_ex() ):
			$wp_customize->add_setting( 'st_header_front_exclusion_set',
				array(
					'default'           => $defaults['st_header_front_exclusion_set'],
					'sanitize_callback' => 'sanitize_checkbox',
				) );
			$wp_customize->add_control( 'st_header_front_exclusion_set',
				array(
					'section'     => 'st_panel_header_area',
					'settings'    => 'st_header_front_exclusion_set',
					'label'       => '背景色及び画像をトップページのみ除外する',
					'description' => '',
					'type'        => 'checkbox',
				) );
		endif;

		/*ヘッダーウィジェットの背景色*/
		$wp_customize->add_setting( 'st_headerwidget_bgcolor',
			array(
				'default'              => $defaults['st_headerwidget_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerwidget_bgcolor', array(
			'label'       => __( 'ヘッダー右（フッター）ウィジェット背景色', 'affinger' ),
			'section'     => 'st_panel_header_area',
			'description' => '',
			'settings'    => 'st_headerwidget_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_headerwidget_textcolor',
			array(
				'default'              => $defaults['st_headerwidget_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerwidget_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_header_area',
			'description' => 'ヘッダーウィジェット文字色',
			'settings'    => 'st_headerwidget_textcolor',
		) ) );

		/*電話番号とヘッダーリンク*/

		$wp_customize->add_setting( 'st_header_tel_color',
			array(
				'default'              => $defaults['st_header_tel_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_tel_color', array(
			'label'       => __( '電話番号とヘッダーリンク', 'affinger' ),
			'section'     => 'st_panel_header_area',
			'description' => '',
			'settings'    => 'st_header_tel_color',
		) ) );

	
		$wp_customize->add_section('st_panel_header_area_top', array(
			'title' => 'ヘッダー画像エリア上 / 下ウィジェット',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_header_top_bgcolor',
			array(
				'default'              => $defaults['st_header_top_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_top_bgcolor', array(
			'label'       => __( 'ヘッダーエリア上', 'affinger' ),
			'description' => 'ヘッダーエリア上の背景色',
			'section'     => 'st_panel_header_area_top',
			'settings' => 'st_header_top_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_header_top_bgcolor_g',
			array(
				'default'              => $defaults['st_header_top_bgcolor_g'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_top_bgcolor_g', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ヘッダーエリア上の背景色（右）',
			'section'     => 'st_panel_header_area_top',
			'settings' => 'st_header_top_bgcolor_g',
		) ) );

		$wp_customize->add_setting( 'st_header_top_textcolor',
			array(
				'default'              => $defaults['st_header_top_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_top_textcolor', array(
			'label'       => '',
			'description' => 'ヘッダーエリア上の文字色',
			'section'     => 'st_panel_header_area_top',
			'settings' => 'st_header_top_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_header_under_bgcolor',
			array(
				'default'              => $defaults['st_header_under_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_under_bgcolor', array(
			'label'       => __( 'ヘッダーエリア下', 'affinger' ),
			'description' => 'ヘッダーエリア下の背景色',
			'section'     => 'st_panel_header_area_top',
			'settings' => 'st_header_under_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_header_under_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'header_under_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_header_area_top',
				'description' => 'ヘッダー画像の後ろに配置する背景画像です（ヘッダー画像にpngなど透過性のある素材を利用すると重ねることが出来ます）',
				'settings'    => 'st_header_under_image',
			)
		) );

		$wp_customize->add_setting( 'st_header_under_image_side',
			array(
				'default'           => $defaults['st_header_under_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_header_under_image_side',
			array(
				'section'     => 'st_panel_header_area_top',
				'settings'    => 'st_header_under_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_header_under_image_top',
			array(
				'default'           => $defaults['st_header_under_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_header_under_image_top',
			array(
				'section'     => 'st_panel_header_area_top',
				'settings'    => 'st_header_under_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_header_under_image_repeat',
			array(
				'default'           => $defaults['st_header_under_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_under_image_repeat',
			array(
				'section'     => 'st_panel_header_area_top',
				'settings'    => 'st_header_under_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_header_under_image_flex',
			array(
				'default'           => $defaults['st_header_under_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_under_image_flex',
			array(
				'section'     => 'st_panel_header_area_top',
				'settings'    => 'st_header_under_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_header_under_image_dark',
			array(
				'default'           => $defaults['st_header_under_image_dark'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_under_image_dark',
			array(
				'section'     => 'st_panel_header_area_top',
				'settings'    => 'st_header_under_image_dark',
				'label'       => '背景画像を暗くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		if ( st_is_ver_ex_af() ):
		
			$wp_customize->add_section('st_panel_header_card_area', array(
				'title' => 'ヘッダーカードエリア',
				'panel' => 'st_panel_base_area',
			));

			$wp_customize->add_setting( 'st_header_card_bgcolor',
				array(
					'default'              => $defaults['st_header_card_bgcolor'],
					'sanitize_callback'    => 'sanitize_hex_color',
					'sanitize_js_callback' => 'maybe_hash_hex_color',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_card_bgcolor', array(
				'label'       => __( '', 'affinger' ),
				'description' => '',
				'section'     => 'st_panel_header_card_area',
				'settings' => 'st_header_card_bgcolor',
			) ) );

			$wp_customize->add_setting( 'st_header_card_image',
				array(
					'default'           => '',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_url_raw',
				) );

			$wp_customize->add_control( new WP_Customize_Image_Control(
				$wp_customize,
				'header_card_Image',
				array(
					'label'       => __( '', 'affinger' ),
					'section'     => 'st_panel_header_card_area',
					'description' => '',
					'settings'    => 'st_header_card_image',
				)
			) );

			$wp_customize->add_setting( 'st_header_card_image_side',
				array(
					'default'           => $defaults['st_header_card_image_side'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_header_card_image_side',
				array(
					'section'     => 'st_panel_header_card_area',
					'settings'    => 'st_header_card_image_side',
					'label'       => '',
					'description' => '背景画像の横位置',
					'type'        => 'radio',
					'choices'     => array(
						'left'   => __( '左', 'affinger' ),
						'center' => __( '真ん中', 'affinger' ),
						'right'  => __( '右', 'affinger' ),
					),
				) );

			$wp_customize->add_setting( 'st_header_card_image_top',
				array(
					'default'           => $defaults['st_header_card_image_top'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_header_card_image_top',
				array(
					'section'     => 'st_panel_header_card_area',
					'settings'    => 'st_header_card_image_top',
					'label'       => '',
					'description' => '背景画像の縦位置',
					'type'        => 'radio',
					'choices'     => array(
						'top'    => __( '上', 'affinger' ),
						'center' => __( '真ん中', 'affinger' ),
						'bottom' => __( '下', 'affinger' ),
					),
				) );

			$wp_customize->add_setting( 'st_header_card_image_repeat',
				array(
					'default'           => $defaults['st_header_card_image_repeat'],
					'sanitize_callback' => 'sanitize_checkbox',
				) );
			$wp_customize->add_control( 'st_header_card_image_repeat',
				array(
					'section'     => 'st_panel_header_card_area',
					'settings'    => 'st_header_card_image_repeat',
					'label'       => '背景画像を繰り返さない',
					'description' => '',
					'type'        => 'checkbox',
				) );

			$wp_customize->add_setting( 'st_header_card_image_flex',
				array(
					'default'           => $defaults['st_header_card_image_flex'],
					'sanitize_callback' => 'sanitize_checkbox',
				) );
			$wp_customize->add_control( 'st_header_card_image_flex',
				array(
					'section'     => 'st_panel_header_card_area',
					'settings'    => 'st_header_card_image_flex',
					'label'       => '背景画像を幅100%のレスポンシブにする',
					'description' => '',
					'type'        => 'checkbox',
				) );
		endif;
	
		$wp_customize->add_section('st_panel_header_area_under', array(
			'title' => 'header以下のエリア',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_headerunder_bgcolor',
			array(
				'default'              => $defaults['st_headerunder_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerunder_bgcolor', array(
			'label'       => __( '背景色', 'affinger' ),
			'description' => '',
			'section'     => 'st_panel_header_area_under',

			'settings' => 'st_headerunder_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_headerunder_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'headerunder_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_header_area_under',
				'description' => '背景画像',
				'settings'    => 'st_headerunder_image',
			)
		) );

		$wp_customize->add_setting( 'st_headerunder_image_side',
			array(
				'default'           => $defaults['st_headerunder_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headerunder_image_side',
			array(
				'section'     => 'st_panel_header_area_under',
				'settings'    => 'st_headerunder_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_headerunder_image_top',
			array(
				'default'           => $defaults['st_headerunder_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headerunder_image_top',
			array(
				'section'     => 'st_panel_header_area_under',
				'settings'    => 'st_headerunder_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_headerunder_image_repeat',
			array(
				'default'           => $defaults['st_headerunder_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headerunder_image_repeat',
			array(
				'section'     => 'st_panel_header_area_under',
				'settings'    => 'st_headerunder_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

	
		$wp_customize->add_section('st_panel_post_area', array(
			'title' => 'mainエリア（記事）',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_menu_maincolor',
			array(
				'default'              => $defaults['st_menu_maincolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_maincolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_post_area',

			'settings' => 'st_menu_maincolor',
		) ) );

	

		$wp_customize->add_setting( 'st_main_opacity',
			array(
				'default'           => $defaults['st_main_opacity'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_main_opacity',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_main_opacity',
				'label'       => '',
				'description' => '背景色透過※PC閲覧時（白色になります）',
				'type'        => 'select',
				'choices'     => array(
					''   => __( '透過しない', 'affinger' ),
					'20' => __( '20%', 'affinger' ),
					'50' => __( '50%', 'affinger' ),
					'80' => __( '80%', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_menu_main_bordercolor',
			array(
				'default'              => $defaults['st_menu_main_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_main_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '周りのボーダー',
			'section'     => 'st_panel_post_area',
			'settings'    => 'st_menu_main_bordercolor',
		) ) );

		/*記事エリアの幅*/
		$wp_customize->add_setting( 'st_area',
			array(
				'default'           => $defaults['st_area'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_area',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_area',
				'label'       => 'PC時の記事エリアの幅を広げる（640→700px）',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_entry_content_bg_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'entry_content_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_post_area',
				'description' => '※背景色は無視されます',
				'settings'    => 'st_entry_content_bg_image',
			)
		) );

		$wp_customize->add_setting( 'st_entry_content_bg_image_side',
			array(
				'default'           => $defaults['st_entry_content_bg_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_entry_content_bg_image_side',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_entry_content_bg_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_entry_content_bg_image_top',
			array(
				'default'           => $defaults['st_entry_content_bg_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_entry_content_bg_image_top',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_entry_content_bg_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_entry_content_bg_image_repeat',
			array(
				'default'           => $defaults['st_entry_content_bg_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entry_content_bg_image_repeat',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_entry_content_bg_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_entry_content_bg_image_flex',
			array(
				'default'           => $defaults['st_entry_content_bg_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entry_content_bg_image_flex',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_entry_content_bg_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/* TOP除外 */
		$wp_customize->add_setting( 'st_main_top_bg_none',
			array(
				'default'           => $defaults['st_main_top_bg_none'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_main_top_bg_none',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_main_top_bg_none',
				'label'       => 'トップページの枠線・背景色を無くしてワイドに',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/* アーカイブ除外 */
		$wp_customize->add_setting( 'st_main_archive_bg_none',
			array(
				'default'           => $defaults['st_main_archive_bg_none'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_main_archive_bg_none',
			array(
				'section'     => 'st_panel_post_area',
				'settings'    => 'st_main_archive_bg_none',
				'label'       => 'アーカイブページの枠線・背景色を無くしてワイドに',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*サイドバー*/
		$wp_customize->add_section('st_panel_sidebar', array(
			'title' => 'サイドバー',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_side_textcolor',
			array(
				'default'              => $defaults['st_side_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_side_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'サイドの文字色（一部カラーの強制変更）',
			'section'     => 'st_panel_sidebar',
			'settings'    => 'st_side_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_side_bgcolor',
			array(
				'default'              => $defaults['st_side_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_side_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'サイドバーウィジェットエリアの背景色',
			'section'     => 'st_panel_sidebar',
			'settings' => 'st_side_bgcolor',
		) ) );

		/*フッター一括ウィジェット*/
		$wp_customize->add_section('st_panel_footer_widgets_area', array( // 中パネル
			'title' => 'フッター一括ウィジェット',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_footer_widgets_bg_color',
			array(
				'default'              => $defaults['st_footer_widgets_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_widgets_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_footer_widgets_area',
			'description' => '背景色',
			'settings'    => 'st_footer_widgets_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_footer_widgets100',
			array(
				'default'           => $defaults['st_footer_widgets100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_footer_widgets100',
			array(
				'section'     => 'st_panel_footer_widgets_area',
				'settings'    => 'st_footer_widgets100',
				'label'       => '幅を100%にする',
				'description' => '余白は「0」になります',
				'type'        => 'checkbox',
			) );

		/*フッターエリア*/
		$wp_customize->add_section('st_panel_footer_area', array(
			'title' => 'フッターエリア',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_footer_bg_text_color',
			array(
				'default'              => $defaults['st_footer_bg_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_bg_text_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_footer_area',
			'description' => 'フッター文字色',
			'settings'    => 'st_footer_bg_text_color',
		) ) );

		$wp_customize->add_setting( 'st_footer_bg_color',
			array(
				'default'              => $defaults['st_footer_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_footer_area',
			'description' => '背景色',
			'settings'    => 'st_footer_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_footer_bg_color_t',
			array(
				'default'              => $defaults['st_footer_bg_color_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_bg_color_t', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_footer_area',
			'description' => '背景色（グラデーション上部）',
			'settings'    => 'st_footer_bg_color_t',
		) ) );

		$wp_customize->add_setting( 'st_footer100',
			array(
				'default'           => $defaults['st_footer100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_footer100',
			array(
				'section'     => 'st_panel_footer_area',
				'settings'    => 'st_footer100',
				'label'       => 'フッターの背景色を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_footer_gradient',
			array(
				'default'           => $defaults['st_footer_gradient'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_footer_gradient',
			array(
				'section'     => 'st_panel_footer_area',
				'settings'    => 'st_footer_gradient',
				'label'       => 'グラデーションを横向きにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_footer_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'footer_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_footer_area',
				'description' => 'フッター画像',
				'settings'    => 'st_footer_image',
			)
		) );

		$wp_customize->add_setting( 'st_footer_image_side',
			array(
				'default'           => $defaults['st_footer_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_footer_image_side',
			array(
				'section'     => 'st_panel_footer_area',
				'settings'    => 'st_footer_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_footer_image_top',
			array(
				'default'           => $defaults['st_footer_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_footer_image_top',
			array(
				'section'     => 'st_panel_footer_area',
				'settings'    => 'st_footer_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_footer_image_repeat',
			array(
				'default'           => $defaults['st_footer_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_footer_image_repeat',
			array(
				'section'     => 'st_panel_footer_area',
				'settings'    => 'st_footer_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_footerbg_image_flex',
			array(
				'default'           => $defaults['st_footerbg_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_footerbg_image_flex',
			array(
				'section'     => 'st_panel_footer_area',
				'settings'    => 'st_footerbg_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*記事一覧の区切りボーダー*/
		$wp_customize->add_section('st_panel_post_border', array(
			'title' => '記事一覧の区切りボーダー',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_kanren_bordercolor',
			array(
				'default'              => $defaults['st_kanren_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kanren_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダーカラー',
			'section'     => 'st_panel_post_border',
			'settings'    => 'st_kanren_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_kanren_border_dashed',
			array(
				'default'           => $defaults['st_kanren_border_dashed'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_kanren_border_dashed',
			array(
				'section'     => 'st_panel_post_border',
				'settings'    => 'st_kanren_border_dashed',
				'label'       => '破線にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*ページャーとPREV NEXTリンク*/
		$wp_customize->add_section('st_panel_pagination', array(
			'title' => 'ページャーとPREV NEXTリンク',
			'panel' => 'st_panel_base_area',
		));

		$wp_customize->add_setting( 'st_pagination_bordercolor',
			array(
				'default'              => $defaults['st_pagination_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_pagination_bordercolor', array(
			'label'       => __( 'ページャーとPREV NEXTリンク', 'affinger' ),
			'description' => 'カラー',
			'section'     => 'st_panel_pagination',
			'settings'    => 'st_pagination_bordercolor',
		) ) );


		/*-------------------------------------------------------
		メニュー
		-------------------------------------------------------*/

		$wp_customize->add_panel( 'st_panel_stmenus',
			array(
				'title'       => __( '- 各メニュー設定', 'affinger' ),
				'priority'    => 101,
			) );

		$wp_customize->add_section('color_controls_stmenus', array(
    		'title' => 'カラーパレット',
    		'panel' => 'st_panel_stmenus',
  		));
		_st_customization_add_color_controls( $wp_customize, 'color_controls_stmenus' );

		$wp_customize->add_section('st_panel_header_menu', array(
			'title' => 'PCヘッダーメニュー',
			'description' => '600px以上で表示されるメニューです。位置は「テーマ管理」＞「メニュー」で変更できます。予め「メニュー設定」にて「ヘッダーメニュー」を設定してください。',
			'panel' => 'st_panel_stmenus',
		));

		$wp_customize->add_setting( 'st_menu_navbarcolor',
			array(
				'default'              => $defaults['st_menu_navbarcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_header_menu',
			'description' => '背景色',
			'settings'    => 'st_menu_navbarcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbarcolor_t',
			array(
				'default'              => $defaults['st_menu_navbarcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_header_menu',
			'description' => '背景色（グラデーション上部）',
			'settings'    => 'st_menu_navbarcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbar_topunder_color',
			array(
				'default'              => $defaults['st_menu_navbar_topunder_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_navbar_topunder_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_header_menu',
				'description' => 'ボーダー上下色',
				'settings'    => 'st_menu_navbar_topunder_color',
			) ) );

		$wp_customize->add_setting( 'st_menu_navbar_side_color',
			array(
				'default'              => $defaults['st_menu_navbar_side_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_side_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_header_menu',
			'description' => 'ボーダー左右色',
			'settings'    => 'st_menu_navbar_side_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbar_right_color',
			array(
				'default'              => $defaults['st_menu_navbar_right_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_right_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_header_menu',
			'description' => 'ボーダー右色',
			'settings'    => 'st_menu_navbar_right_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbartextcolor',
			array(
				'default'              => $defaults['st_menu_navbartextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbartextcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_header_menu',
			'settings'    => 'st_menu_navbartextcolor',
		) ) );

		$wp_customize->add_setting( 'st_navbarcolor_gradient',
			array(
				'default'           => $defaults['st_navbarcolor_gradient'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_navbarcolor_gradient',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_navbarcolor_gradient',
				'label'       => 'グラデーションを横向きにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_menu_bold',
			array(
				'default'           => $defaults['st_menu_bold'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_menu_bold',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_menu_bold',
				'label'       => '第一階層メニューを太字にする（サイドメニュー連動）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_menu_center',
			array(
				'default'           => $defaults['st_menu_center'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_menu_center',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_menu_center',
				'label'       => 'メニューをセンター寄せにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_menu100',
			array(
				'default'           => $defaults['st_menu100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_menu100',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_menu100',
				'label'       => 'メニューの横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_menu_width',
			array(
				'default'           => $defaults['st_menu_width'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_menu_width_c',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_menu_width',
				'label'       => '',
				'description' => 'メニューの幅（px）',
				'type'        => 'option',
			) );

	

		$wp_customize->add_setting( 'st_menu_padding',
			array(
				'default'           => $defaults['st_menu_padding'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_menu_padding',
			array(
				'section'     => 'st_panel_header_menu',
				'label'       => '',
				'description' => 'メニューの上下に隙間を作る',
				'type'        => 'select',
				'choices'     => array(
					''         => __( '設定しない', 'affinger' ),
					'top10'    => __( '上に10pxの隙間', 'affinger' ),
					'bottom10' => __( '下に10pxの隙間', 'affinger' ),
				),
			) );

	

		$wp_customize->add_setting( 'st_menu_navbar_undercolor',
			array(
				'default'              => $defaults['st_menu_navbar_undercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_undercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_header_menu',
			'description' => '下層ドロップダウンメニュー背景色',
			'settings'    => 'st_menu_navbar_undercolor',
		) ) );

	

		$wp_customize->add_setting( 'st_headermenu_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'headermenu_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_header_menu',
				'description' => '背景画像',
				'settings'    => 'st_headermenu_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_headermenu_bgimg_side',
			array(
				'default'           => $defaults['st_headermenu_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headermenu_bgimg_side',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_headermenu_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_headermenu_bgimg_top',
			array(
				'default'           => $defaults['st_headermenu_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headermenu_bgimg_top',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_headermenu_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_headermenu_bgimg_repeat',
			array(
				'default'           => $defaults['st_headermenu_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headermenu_bgimg_repeat',
			array(
				'section'     => 'st_panel_header_menu',
				'settings'    => 'st_headermenu_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		if ( st_is_ver_ex() ):
			$wp_customize->add_setting( 'st_menu_navbar_front_exclusion_set',
				array(
					'default'           => $defaults['st_menu_navbar_front_exclusion_set'],
					'sanitize_callback' => 'sanitize_checkbox',
				) );
			$wp_customize->add_control( 'st_menu_navbar_front_exclusion_set',
				array(
					'section'     => 'st_panel_header_menu',
					'settings'    => 'st_menu_navbar_front_exclusion_set',
					'label'       => '背景色及び画像をトップページのみ除外する（第一階層）',
					'description' => '',
					'type'        => 'checkbox',
				) );
		endif;

	
		$wp_customize->add_section('st_panel_side_menu_widgets', array(
			'title' => 'サイドメニューウィジェット',
			'description' => 'ウィジェットにて「01_STINGERサイドバーメニュー」を挿入して表示されるメニューです。予め「メニュー」にて「サイドメニュー」を設定してください。',
			'panel' => 'st_panel_stmenus',
		));

		$wp_customize->add_setting( 'st_menu_side_widgetscolor',
			array(
				'default'              => $defaults['st_menu_side_widgetscolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_side_widgetscolor', array(
			'label'       => __( 'サイドメニューウィジェット', 'affinger' ),
			'section'     => 'st_panel_side_menu_widgets',
			'description' => '背景色',
			'settings'    => 'st_menu_side_widgetscolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_side_widgetscolor_t',
			array(
				'default'              => $defaults['st_menu_side_widgetscolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_side_widgetscolor_t', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_side_menu_widgets',
			'description' => '背景色（グラデーション上部）',
			'settings'    => 'st_menu_side_widgetscolor_t',
		) ) );

		$wp_customize->add_setting( 'st_menu_side_widgets_topunder_color',
			array(
				'default'              => $defaults['st_menu_side_widgets_topunder_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_side_widgets_topunder_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_side_menu_widgets',
				'description' => 'ボーダー色',
				'settings'    => 'st_menu_side_widgets_topunder_color',
			) ) );

		$wp_customize->add_setting( 'st_menu_side_widgetstextcolor',
			array(
				'default'              => $defaults['st_menu_side_widgetstextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_side_widgetstextcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_side_menu_widgets',
			'settings'    => 'st_menu_side_widgetstextcolor',
		) ) );

		$wp_customize->add_setting( 'st_sidemenu_gradient',
			array(
				'default'           => $defaults['st_sidemenu_gradient'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sidemenu_gradient',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_gradient',
				'label'       => 'グラデーションを横向きにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_menu_icon',
			array(
				'default'           => $defaults['st_menu_icon'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_menu_icon',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_menu_icon',
				'label'       => __( '', 'affinger' ),
				'description' => '第一階層Webアイコン',
				'type'        => 'select',
				'choices'     => array(
					''     => __( '設定しない', 'affinger' ),
					'f054' => __( '矢印1', 'affinger' ),
					'f105' => __( '矢印2', 'affinger' ),
					'f138' => __( '矢印3', 'affinger' ),
					'f0a9' => __( '矢印4', 'affinger' ),
					'f0da' => __( '矢印5', 'affinger' ),
					'f152' => __( '矢印6', 'affinger' ),
					'f18e' => __( '矢印7', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_menu_icon_color',
			array(
				'default'              => $defaults['st_menu_icon_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_icon_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'アイコン色',
			'section'     => 'st_panel_side_menu_widgets',
			'settings'    => 'st_menu_icon_color',
		) ) );

		$wp_customize->add_setting( 'st_undermenu_icon',
			array(
				'default'           => $defaults['st_undermenu_icon'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_undermenu_icon',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_undermenu_icon',
				'label'       => '',
				'description' => '第二階層以下Webアイコン',
				'type'        => 'select',
				'choices'     => array(
					''     => __( '設定しない', 'affinger' ),
					'f054' => __( '矢印1', 'affinger' ),
					'f105' => __( '矢印2', 'affinger' ),
					'f138' => __( '矢印3', 'affinger' ),
					'f0a9' => __( '矢印4', 'affinger' ),
					'f0da' => __( '矢印5', 'affinger' ),
					'f152' => __( '矢印6', 'affinger' ),
					'f18e' => __( '矢印7', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_undermenu_icon_color',
			array(
				'default'              => $defaults['st_undermenu_icon_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_undermenu_icon_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'アイコン色',
			'section'     => 'st_panel_side_menu_widgets',
			'settings'    => 'st_undermenu_icon_color',
		) ) );

	

		$wp_customize->add_setting( 'st_sidemenu_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'sidemenu_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_side_menu_widgets',
				'description' => '第一階層背景画像',
				'settings'    => 'st_sidemenu_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_side',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_side',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_top',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_top',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_repeat',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_repeat',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_tupadding',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_sidemenu_tupadding_c',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_sidemenu_fontsize',
			array(
				'default'           => $defaults['st_sidemenu_fontsize'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sidemenu_fontsize',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_fontsize',
				'label'       => '第一階層メニューの文字サイズを大きくする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	
		$wp_customize->add_setting( 'st_sidemenu_accordion',
			array(
				'default'           => $defaults['st_sidemenu_accordion'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sidemenu_accordion',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidemenu_accordion',
				'label'       => '第二階層以下をスライドメニューにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_menu_pagelist_childtextcolor',
			array(
				'default'              => $defaults['st_menu_pagelist_childtextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_pagelist_childtextcolor',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_side_menu_widgets',
				'description' => '第二階層の文字色',
				'settings'    => 'st_menu_pagelist_childtextcolor',
			) ) );

		$wp_customize->add_setting( 'st_menu_pagelist_childtext_border_color',
			array(
				'default'              => $defaults['st_menu_pagelist_childtext_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_pagelist_childtext_border_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_side_menu_widgets',
				'description' => '第二階層の下線色',
				'settings'    => 'st_menu_pagelist_childtext_border_color',
			) ) );

		$wp_customize->add_setting( 'st_menu_pagelist_bgcolor',
			array(
				'default'              => $defaults['st_menu_pagelist_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_pagelist_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_side_menu_widgets',
			'settings'    => 'st_menu_pagelist_bgcolor',
		) ) );

	

		$wp_customize->add_setting( 'st_sidebg_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'sidebg_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_side_menu_widgets',
				'description' => 'サイドメニュー全体の背景画像',
				'settings'    => 'st_sidebg_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_sidebg_bgimg_side',
			array(
				'default'           => $defaults['st_sidebg_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidebg_bgimg_side',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidebg_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidebg_bgimg_top',
			array(
				'default'           => $defaults['st_sidebg_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidebg_bgimg_top',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidebg_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidebg_bgimg_repeat',
			array(
				'default'           => $defaults['st_sidebg_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sidebg_bgimg_repeat',
			array(
				'section'     => 'st_panel_side_menu_widgets',
				'settings'    => 'st_sidebg_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

	
		$wp_customize->add_section('st_panel_sp_menu_slide', array(
			'title' => 'スマホメニュー（スマホヘッダー）',
			'description' => '599px以下にて表示されるスライドメニューです。（スライドメニューバー背景色及び画像はカスタマイザーには反映されません※実機のみ確認できます）',
			'panel' => 'st_panel_stmenus',
		));

		$wp_customize->add_setting( 'st_menu_sumart_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'スライドメニューボタン背景色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumart_bg_color',
		) ) );


		$wp_customize->add_setting( 'st_menu_sumartcolor',
			array(
				'default'              => $defaults['st_menu_sumartcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'スライドメニューアイコン色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumartcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_smartbar_bg_color',
			array(
				'default'              => $defaults['st_menu_smartbar_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_smartbar_bg_color', array(
			'label'       => __( '' ),
			'description' => 'スライドメニューバー背景色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_smartbar_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_smartbar_bg_color_t',
			array(
				'default'              => $defaults['st_menu_smartbar_bg_color_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_smartbar_bg_color_t', array(
			'label'       => __( '' ),
			'description' => 'スライドメニューバー背景色（グラデーション上部※向きはヘッダーエリア連動）',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_smartbar_bg_color_t',
		) ) );

	

		$wp_customize->add_setting( 'st_menu_smartbar_bg_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'sp_menubar_Image',
			array(
				'label'       => '背景画像',
				'section'     => 'st_panel_sp_menu_slide',
				'description' => 'スライドメニューバー背景画像',
				'settings'    => 'st_menu_smartbar_bg_image',
			)
		) );

		$wp_customize->add_setting( 'st_menu_smartbar_bg_image_side',
			array(
				'default'           => $defaults['st_menu_smartbar_bg_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_menu_smartbar_bg_image_side',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_menu_smartbar_bg_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_menu_smartbar_bg_image_top',
			array(
				'default'           => $defaults['st_menu_smartbar_bg_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_menu_smartbar_bg_image_top',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_menu_smartbar_bg_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_menu_smartbar_bg_image_repeat',
			array(
				'default'           => $defaults['st_menu_smartbar_bg_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_menu_smartbar_bg_image_repeat',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_menu_smartbar_bg_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		if ( st_is_ver_ex() ):
			$wp_customize->add_setting( 'st_menu_smartbar_front_exclusion_set',
				array(
					'default'           => $defaults['st_menu_smartbar_front_exclusion_set'],
					'sanitize_callback' => 'sanitize_checkbox',
				) );
			$wp_customize->add_control( 'st_menu_smartbar_front_exclusion_set',
				array(
					'section'     => 'st_panel_sp_menu_slide',
					'settings'    => 'st_menu_smartbar_front_exclusion_set',
					'label'       => '背景色及び画像をトップページのみ除外する',
					'description' => '',
					'type'        => 'checkbox',
				) );
		endif;

	

		$wp_customize->add_setting( 'st_menu_sumartmenutextcolor',
			array(
				'default'              => $defaults['st_menu_sumartmenutextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartmenutextcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'スライドメニュー内のテキストリンク色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumartmenutextcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumartmenubordercolor',
			array(
				'default'              => $defaults['st_menu_sumartmenubordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartmenubordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'スライドメニュー内リンクのボーダー色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumartmenubordercolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumartbar_bg_color',
			array(
				'default'              => $defaults['st_menu_sumartbar_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartbar_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'スライドメニュー内背景色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumartbar_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_search_slide_sumartbar_bg_color',
			array(
				'default'              => $defaults['st_search_slide_sumartbar_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_search_slide_sumartbar_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '検索スライドメニュー内背景色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_search_slide_sumartbar_bg_color',
		) ) );

	

		$wp_customize->add_setting( 'st_slidemenubg_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'slidemenu_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_sp_menu_slide',
				'description' => 'スライドメニュー内に配置する背景画像です',
				'settings'    => 'st_slidemenubg_image',
			)
		) );

		$wp_customize->add_setting( 'st_slidemenubg_image_side',
			array(
				'default'           => $defaults['st_slidemenubg_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_slidemenubg_image_side',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_slidemenubg_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_slidemenubg_image_top',
			array(
				'default'           => $defaults['st_slidemenubg_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_slidemenubg_image_top',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_slidemenubg_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_slidemenubg_image_repeat',
			array(
				'default'           => $defaults['st_slidemenubg_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_slidemenubg_image_repeat',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_slidemenubg_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_slidemenubg_image_flex',
			array(
				'default'           => $defaults['st_slidemenubg_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_slidemenubg_image_flex',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_slidemenubg_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_menu_faicon',
			array(
				'default'           => $defaults['st_menu_faicon'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_menu_faicon',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_menu_faicon',
				'label'       => 'メニューのWebアイコンを非表示',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*スライドメニューのfix*/
		$wp_customize->add_setting( 'st_sticky_menu',
			array(
				'default'           => $defaults['st_sticky_menu'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sticky_menu',
			array(
				'section'     => 'st_panel_sp_menu_slide',
				'settings'    => 'st_sticky_menu',
				'label'       => '表示パターン',
				'description' => '',
				'type'        => 'radio',
				'choices'     => array(
					''      => '通常',
					'fixed' => '固定',
					'1'     => 'スクロール追尾',
				),
			) );

		if ( st_is_ver_ex() ):
			$wp_customize->add_setting( 'st_sticky_primary_menu_side',
				array(
					'default'           => $defaults['st_sticky_primary_menu_side'],
					'sanitize_callback' => 'sanitize_checkbox',
				) );
			$wp_customize->add_control( 'st_sticky_primary_menu_side',
				array(
					'section'         => 'st_panel_sp_menu_slide',
					'settings'        => 'st_sticky_primary_menu_side',
					'label'           => 'スクロールで内容対象をヘッダーメニュー（横列）に変更',
					'description'     => '',
					'type'            => 'checkbox',
					'active_callback' => '_st_is_sticky_primary_menu_side_setting_active',
				) );
		endif;

		/*追加メニュー1*/
		$wp_customize->add_setting( 'st_menu_sumart_st_color',
			array(
				'default'              => $defaults['st_menu_sumart_st_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st_color', array(
			'label'       => __( 'スマホ追加メニュー', 'affinger' ),
			'description' => 'メニューアイコン色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumart_st_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_st_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_st_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumart_st_bg_color',
		) ) );

		/*追加メニュー2*/
		$wp_customize->add_setting( 'st_menu_sumart_st2_color',
			array(
				'default'              => $defaults['st_menu_sumart_st2_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st2_color', array(
			'label'       => __( 'スマホ追加メニュー2', 'affinger' ),
			'description' => 'メニューアイコン色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumart_st2_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_st2_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_st2_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st2_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_sp_menu_slide',
			'settings'    => 'st_menu_sumart_st2_bg_color',
		) ) );

		/*スマホミドルメニュー*/
		$wp_customize->add_section('st_panel_sp_menu_middle', array(
			'title' => 'スマホミドル / 横列メニュー',
			'description' => '※PHPによる分岐の為、カスタマイザーでは表示されません',
			'panel' => 'st_panel_stmenus',
		));

		$wp_customize->add_setting( 'st_middle_sumartmenutextcolor',
			array(
				'default'              => $defaults['st_middle_sumartmenutextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_middle_sumartmenutextcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_sp_menu_middle',
			'settings'    => 'st_middle_sumartmenutextcolor',
		) ) );

		$wp_customize->add_setting( 'st_middle_sumart_bg_color',
			array(
				'default'              => $defaults['st_middle_sumart_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_middle_sumart_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_sp_menu_middle',
			'settings'    => 'st_middle_sumart_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_middle_sumart_bg_color_t',
			array(
				'default'              => $defaults['st_middle_sumart_bg_color_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_middle_sumart_bg_color_t', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色（グラデーション上部※向きはヘッダーエリア連動）',
			'section'     => 'st_panel_sp_menu_middle',
			'settings'    => 'st_middle_sumart_bg_color_t',
		) ) );

		$wp_customize->add_setting( 'st_middle_sumartmenubordercolor',
			array(
				'default'              => $defaults['st_middle_sumartmenubordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_middle_sumartmenubordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色（ミドルのみ）',
			'section'     => 'st_panel_sp_menu_middle',
			'settings'    => 'st_middle_sumartmenubordercolor',
		) ) );

		$wp_customize->add_setting( 'st_middle_sumartmenu_space',
			array(
				'default'           => $defaults['st_middle_sumartmenu_space'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_middle_sumartmenu_space',
			array(
				'section'     => 'st_panel_sp_menu_middle',
				'settings'    => 'st_middle_sumartmenu_space',
				'label'       => '周りに余白（ミドルのみ）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*スマホフッターメニュー*/
		$wp_customize->add_section('st_panel_sp_menu_footer', array(
			'title' => 'スマホフッターメニュー',
			'description' => '※PHPによる分岐の為、カスタマイザーでは表示されません',
			'panel' => 'st_panel_stmenus',
		));

		$wp_customize->add_setting( 'st_menu_sumart_footermenu_text_color',
			array(
				'default'              => $defaults['st_menu_sumart_footermenu_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_footermenu_text_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_sp_menu_footer',
			'settings'    => 'st_menu_sumart_footermenu_text_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_footermenu_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_footermenu_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_footermenu_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_sp_menu_footer',
			'settings'    => 'st_menu_sumart_footermenu_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_footermenu_fontawesome',
			array(
				'default'           => $defaults['st_menu_sumart_footermenu_fontawesome'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_menu_sumart_footermenu_fontawesome_c',
			array(
				'section'     => 'st_panel_sp_menu_footer',
				'settings'    => 'st_menu_sumart_footermenu_fontawesome',
				'label'       => '',
				'description' => 'アイコンサイズ(%)',
				'type'        => 'option',
			) );

		if ( st_is_ver_ex_af() ):
		/*ガイドメニュー*/
		$wp_customize->add_section('st_panel_menu_guide', array(
			'title' => 'ガイドメニュー',
			'panel' => 'st_panel_stmenus',
		));

		$wp_customize->add_setting( 'st_guidemenu_bg_color',
			array(
				'default'              => $defaults['st_guidemenu_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_guidemenu_bg_color', array(
			'label'       => __( 'ガイドメニュー', 'affinger' ),
			'description' => '背景色（第一階層）',
			'section'     => 'st_panel_menu_guide',
			'settings'    => 'st_guidemenu_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_guidemenu_radius',
			array(
				'default'           => $defaults['st_guidemenu_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_guidemenu_radius',
			array(
				'section'     => 'st_panel_menu_guide',
				'settings'    => 'st_guidemenu_radius',
				'label'       => '角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_guidemenutextcolor',
			array(
				'default'              => $defaults['st_guidemenutextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_guidemenutextcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'テキスト色（第一階層）',
			'section'     => 'st_panel_menu_guide',
			'settings'    => 'st_guidemenutextcolor',
		) ) );

		$wp_customize->add_setting( 'st_guidemenutextcolor2',
			array(
				'default'              => $defaults['st_guidemenutextcolor2'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_guidemenutextcolor2', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'テキスト色（第二階層以下）',
			'section'     => 'st_panel_menu_guide',
			'settings'    => 'st_guidemenutextcolor2',
		) ) );

		$wp_customize->add_setting( 'st_guide_bg_color',
			array(
				'default'              => $defaults['st_guide_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_guide_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色（記事内用タグのみ）',
			'section'     => 'st_panel_menu_guide',
			'settings'    => 'st_guide_bg_color',
		) ) );
		endif;

		/*ボックスメニュー*/
		$wp_customize->add_section('st_panel_menu_boxnavi', array(
			'title' => 'ボックスメニュー',
			'panel' => 'st_panel_stmenus',
			'description' => 'ショートコードで作成するボックスメニュー',
		));

		$wp_customize->add_setting( 'st_boxnavimenu_color',
			array(
				'default'              => $defaults['st_boxnavimenu_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_boxnavimenu_color', array(
			'label'       => __( 'ボックスメニュー', 'affinger' ),
			'description' => 'テキスト色',
			'section'     => 'st_panel_menu_boxnavi',
			'settings'    => 'st_boxnavimenu_color',
		) ) );

		$wp_customize->add_setting( 'st_boxnavimenu_bg_color',
			array(
				'default'              => $defaults['st_boxnavimenu_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_boxnavimenu_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_menu_boxnavi',
			'settings'    => 'st_boxnavimenu_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_boxnavimenu_bordercolor',
			array(
				'default'              => $defaults['st_boxnavimenu_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_boxnavimenu_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_menu_boxnavi',
			'settings'    => 'st_boxnavimenu_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_boxnavimenu_fontawesome',
			array(
				'default'           => $defaults['st_boxnavimenu_fontawesome'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_boxnavimenu_fontawesome_c',
			array(
				'section'     => 'st_panel_menu_boxnavi',
				'settings'    => 'st_boxnavimenu_fontawesome',
				'label'       => '',
				'description' => 'アイコンサイズ(%)',
				'type'        => 'option',
			) );

		/*-------------------------------------------------------
		各見出し
		-------------------------------------------------------*/

		$wp_customize->add_panel( 'st_panel_tagcolors',
			array(
				'title'       => __( '見出しタグ（hx）/ テキスト', 'affinger' ),
				'priority'    => 101,
			) );

		$wp_customize->add_section('color_controls_tagcolors', array(
    		'title' => 'カラーパレット',
    		'panel' => 'st_panel_tagcolors',
  		));
		_st_customization_add_color_controls( $wp_customize, 'color_controls_tagcolors' );

		$wp_customize->add_section('st_panel_entrytitle', array(
			'title' => '記事タイトル',
			'panel' => 'st_panel_tagcolors',
		));

		/*記事タイトル*/

		$wp_customize->add_setting( 'st_entrytitle_color',
			array(
				'default'              => $defaults['st_entrytitle_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitle_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_entrytitle',
			'settings'    => 'st_entrytitle_color',
		) ) );

		$wp_customize->add_setting( 'st_entrytitle_bgcolor',
			array(
				'default'              => $defaults['st_entrytitle_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitle_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_entrytitle',
			'settings'    => 'st_entrytitle_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_entrytitle_bgcolor_t',
			array(
				'default'              => $defaults['st_entrytitle_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitle_bgcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'st_panel_entrytitle',
			'settings'    => 'st_entrytitle_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_entrytitleborder_color',
			array(
				'default'              => $defaults['st_entrytitleborder_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitleborder_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_entrytitle',
			'settings'    => 'st_entrytitleborder_color',
		) ) );

		$wp_customize->add_setting( 'st_entrytitleborder_undercolor',
			array(
				'default'              => $defaults['st_entrytitleborder_undercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitleborder_undercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色（サブ）',
			'section'     => 'st_panel_entrytitle',
			'settings'    => 'st_entrytitleborder_undercolor',
		) ) );

		$wp_customize->add_setting( 'st_entrytitle_border_tb',
			array(
				'default'           => $defaults['st_entrytitle_border_tb'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_border_tb',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_border_tb',
				'label'       => ' ボーダーを上下のみにする ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_entrytitle_border_tb_sub',
			array(
				'default'           => $defaults['st_entrytitle_border_tb_sub'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_border_tb_sub',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_border_tb_sub',
				'label'       => 'ボーダーを太くする（下をサブカラーに）',
				'description' => '',
				'type'        => 'checkbox',
			) );


		if ( st_is_ver_ex() ):
			$wp_customize->add_setting( 'st_entrytitle_designsetting',
				array(
					'default'           => $defaults['st_entrytitle_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_entrytitle_designsetting',
				array(
					'section'     => 'st_panel_entrytitle',
					'settings'    => 'st_entrytitle_designsetting',
					'label'       => '',
					'description' => 'タイトルの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'           => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'hukidasidesign_under'     => __( '吹き出し下線デザインに変更', 'affinger' ),
						'linedesign'               => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'          => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign' => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'         => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'          => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'            => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'           => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'           => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						''                         => __( 'なし', 'affinger' ),
					),
				) );
		else:
			$wp_customize->add_setting( 'st_entrytitle_designsetting',
				array(
					'default'           => $defaults['st_entrytitle_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_entrytitle_designsetting',
				array(
					'section'     => 'st_panel_entrytitle',
					'settings'    => 'st_entrytitle_designsetting',
					'label'       => '',
					'description' => 'タイトルの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'           => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'linedesign'               => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'          => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign' => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'         => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'          => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'            => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'           => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'           => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						''                         => __( 'なし', 'affinger' ),
					),
				) );
		endif;

		$wp_customize->add_setting( 'st_entrytitle_text_center',
			array(
				'default'           => $defaults['st_entrytitle_text_center'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_text_center',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_text_center',
				'label'       => 'テキストを中央寄せ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_entrytitle_design_wide',
			array(
				'default'           => $defaults['st_entrytitle_design_wide'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_design_wide',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_design_wide',
				'label'       => 'デザインを幅一杯に',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_entrytitle_bg_radius',
			array(
				'default'           => $defaults['st_entrytitle_bg_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_bg_radius',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_bg_radius',
				'label'       => '背景や吹き出しの角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_entrytitle_gradient',
			array(
				'default'           => $defaults['st_entrytitle_gradient'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_gradient',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_gradient',
				'label'       => 'グラデーションを横向きにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_entrytitle_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'entrytitle_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_entrytitle',
				'description' => '背景画像',
				'settings'    => 'st_entrytitle_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_side',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_side',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_top',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_top',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_repeat',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_repeat',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_tupadding',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_entrytitle_tupadding_c',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_entrytitle_no_css',
			array(
				'default'           => $defaults['st_entrytitle_no_css'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_no_css',
			array(
				'section'     => 'st_panel_entrytitle',
				'settings'    => 'st_entrytitle_no_css',
				'label'       => 'カスタマイザーのCSSを無効化',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*h2タグ*/
		$wp_customize->add_section('st_panel_h2', array(
			'title' => 'H2タグ',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_h2_color',
			array(
				'default'              => $defaults['st_h2_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h2_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_h2',
			'settings'    => 'st_h2_color',
		) ) );

		$wp_customize->add_setting( 'st_h2_bgcolor',
			array(
				'default'              => $defaults['st_h2_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h2_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_h2',
			'settings'    => 'st_h2_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h2_bgcolor_t',
			array(
				'default'              => $defaults['st_h2_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h2_bgcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'st_panel_h2',
			'settings'    => 'st_h2_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_h2border_color',
			array(
				'default'              => $defaults['st_h2border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h2border_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_h2',
			'settings'    => 'st_h2border_color',
		) ) );

		$wp_customize->add_setting( 'st_h2border_undercolor',
			array(
				'default'              => $defaults['st_h2border_undercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h2border_undercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色（サブ）',
			'section'     => 'st_panel_h2',
			'settings'    => 'st_h2border_undercolor',
		) ) );

		$wp_customize->add_setting( 'st_h2_border_tb',
			array(
				'default'           => $defaults['st_h2_border_tb'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_border_tb',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_border_tb',
				'label'       => ' ボーダーを上下のみにする ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h2_border_tb_sub',
			array(
				'default'           => $defaults['st_h2_border_tb_sub'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_border_tb_sub',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_border_tb_sub',
				'label'       => 'ボーダーを太くする（下をサブカラーに）',
				'description' => '',
				'type'        => 'checkbox',
			) );


		if ( st_is_ver_ex() ):
			$wp_customize->add_setting( 'st_h2_designsetting',
				array(
					'default'           => $defaults['st_h2_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_h2_designsetting',
				array(
					'section'     => 'st_panel_h2',
					'settings'    => 'st_h2_designsetting',
					'label'       => '',
					'description' => 'h2タグの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'            => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'hukidasidesign_under'      => __( '吹き出し下線デザインに変更', 'affinger' ),
						'linedesign'                => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'           => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign'  => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'          => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'           => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                 => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'             => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'            => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'            => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'checkboxdesign'            => __( 'チェック（ボックスタイプ）デザインに変更', 'affinger' ),
						''                          => __( 'なし', 'affinger' ),
					),
				) );
		elseif ( st_is_ver_af() ):
			$wp_customize->add_setting( 'st_h2_designsetting',
				array(
					'default'           => $defaults['st_h2_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_h2_designsetting',
				array(
					'section'     => 'st_panel_h2',
					'settings'    => 'st_h2_designsetting',
					'label'       => '',
					'description' => 'h2タグの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'            => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'linedesign'                => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'           => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign'  => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'          => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'           => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                 => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'             => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'            => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'            => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'checkboxdesign'            => __( 'チェック（ボックスタイプ）デザインに変更', 'affinger' ),
						''                          => __( 'なし', 'affinger' ),
					),
				) );
		else:
			$wp_customize->add_setting( 'st_h2_designsetting',
				array(
					'default'           => $defaults['st_h2_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_h2_designsetting',
				array(
					'section'     => 'st_panel_h2',
					'settings'    => 'st_h2_designsetting',
					'label'       => '',
					'description' => 'h2タグの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'            => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'linedesign'                => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'           => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign'  => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'          => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'           => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                 => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'             => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'            => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'            => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						''                          => __( 'なし', 'affinger' ),
					),
				) );
			endif;

		$wp_customize->add_setting( 'st_h2_text_center',
			array(
				'default'           => $defaults['st_h2_text_center'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_text_center',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_text_center',
				'label'       => 'テキストを中央寄せ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h2_design_wide',
			array(
				'default'           => $defaults['st_h2_design_wide'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_design_wide',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_design_wide',
				'label'       => 'デザインを幅一杯に',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h2_bg_radius',
			array(
				'default'           => $defaults['st_h2_bg_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_bg_radius',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_bg_radius',
				'label'       => '背景や吹き出しの角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h2_gradient',
			array(
				'default'           => $defaults['st_h2_gradient'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_gradient',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_gradient',
				'label'       => 'グラデーションを横向きにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_h2_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h2_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_h2',
				'description' => '背景画像',
				'settings'    => 'st_h2_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h2_bgimg_side',
			array(
				'default'           => $defaults['st_h2_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h2_bgimg_side',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_top',
			array(
				'default'           => $defaults['st_h2_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h2_bgimg_top',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_repeat',
			array(
				'default'           => $defaults['st_h2_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_bgimg_repeat',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h2_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h2_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h2_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h2_tupadding_c',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h2_no_css',
			array(
				'default'           => $defaults['st_h2_no_css'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_no_css',
			array(
				'section'     => 'st_panel_h2',
				'settings'    => 'st_h2_no_css',
				'label'       => 'カスタマイザーのCSSを無効化',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*h3タグ*/
		$wp_customize->add_section('st_panel_h3', array(
			'title' => 'H3タグ',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_h3_color',
			array(
				'default'              => $defaults['st_h3_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h3_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_h3',
			'settings'    => 'st_h3_color',
		) ) );

		$wp_customize->add_setting( 'st_h3_bgcolor',
			array(
				'default'              => $defaults['st_h3_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h3_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_h3',
			'settings'    => 'st_h3_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h3_bgcolor_t',
			array(
				'default'              => $defaults['st_h3_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h3_bgcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'st_panel_h3',
			'settings'    => 'st_h3_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_h3border_color',
			array(
				'default'              => $defaults['st_h3border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h3border_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_h3',
			'settings'    => 'st_h3border_color',
		) ) );

		$wp_customize->add_setting( 'st_h3border_undercolor',
			array(
				'default'              => $defaults['st_h3border_undercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h3border_undercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色（サブ）',
			'section'     => 'st_panel_h3',
			'settings'    => 'st_h3border_undercolor',
		) ) );

		$wp_customize->add_setting( 'st_h3_border_tb',
			array(
				'default'           => $defaults['st_h3_border_tb'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_border_tb',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_border_tb',
				'label'       => ' ボーダーを上下のみにする ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3_border_tb_sub',
			array(
				'default'           => $defaults['st_h3_border_tb_sub'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_border_tb_sub',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_border_tb_sub',
				'label'       => ' ボーダーを太くする（下をサブカラーに） ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		if ( st_is_ver_ex() ):
			$wp_customize->add_setting( 'st_h3_designsetting',
				array(
					'default'           => $defaults['st_h3_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_h3_designsetting',
				array(
					'section'     => 'st_panel_h3',
					'settings'    => 'st_h3_designsetting',
					'label'       => '',
					'description' => 'h3タグの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'            => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'hukidasidesign_under'      => __( '吹き出し下線デザインに変更', 'affinger' ),
						'linedesign'                => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'           => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign'  => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'          => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'           => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                 => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'             => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'            => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'            => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'checkboxdesign'            => __( 'チェック（ボックスタイプ）デザインに変更', 'affinger' ),
						''                          => __( 'なし', 'affinger' ),
					),
				) );
		elseif ( st_is_ver_af() ):
			$wp_customize->add_setting( 'st_h3_designsetting',
				array(
					'default'           => $defaults['st_h3_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_h3_designsetting',
				array(
					'section'     => 'st_panel_h3',
					'settings'    => 'st_h3_designsetting',
					'label'       => '',
					'description' => 'h3タグの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'            => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'linedesign'                => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'           => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign'  => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'          => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'           => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                 => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'             => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'            => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'            => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'checkboxdesign'            => __( 'チェック（ボックスタイプ）デザインに変更', 'affinger' ),
						''                          => __( 'なし', 'affinger' ),
					),
				) );
		else:
			$wp_customize->add_setting( 'st_h3_designsetting',
				array(
					'default'           => $defaults['st_h3_designsetting'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_h3_designsetting',
				array(
					'section'     => 'st_panel_h3',
					'settings'    => 'st_h3_designsetting',
					'label'       => '',
					'description' => 'h3タグの基本スタイル',
					'type'        => 'radio',
					'choices'     => array(
						'hukidasidesign'            => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
						'linedesign'                => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						'underlinedesign'           => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'gradient_underlinedesign'  => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'centerlinedesign'          => __( 'センターラインに変更（※要ボーダー色）', 'affinger' ),
						'shortlinedesign'           => __( 'ショートラインに変更（※要ボーダー色）', 'affinger' ),
						'dotdesign'                 => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
						'stripe_design'             => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
						'underdotdesign'            => __( '破線アンダーラインに変更（※要ボーダー色）', 'affinger' ),
						'leftlinedesign'            => __( '左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
						''                          => __( 'なし', 'affinger' ),
					),
				) );
		endif;

		$wp_customize->add_setting( 'st_h3_text_center',
			array(
				'default'           => $defaults['st_h3_text_center'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_text_center',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_text_center',
				'label'       => 'テキストを中央寄せ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3_design_wide',
			array(
				'default'           => $defaults['st_h3_design_wide'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_design_wide',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_design_wide',
				'label'       => 'デザインを幅一杯に',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3_bg_radius',
			array(
				'default'           => $defaults['st_h3_bg_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_bg_radius',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_bg_radius',
				'label'       => '背景や吹き出しの角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3_gradient',
			array(
				'default'           => $defaults['st_h3_gradient'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_gradient',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_gradient',
				'label'       => 'グラデーションを横向きにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_h3_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h3_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_h3',
				'description' => '背景画像',
				'settings'    => 'st_h3_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h3_bgimg_side',
			array(
				'default'           => $defaults['st_h3_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h3_bgimg_side',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_top',
			array(
				'default'           => $defaults['st_h3_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h3_bgimg_top',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_repeat',
			array(
				'default'           => $defaults['st_h3_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_bgimg_repeat',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h3_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h3_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h3_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h3_tupadding_c',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h3_no_css',
			array(
				'default'           => $defaults['st_h3_no_css'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_no_css',
			array(
				'section'     => 'st_panel_h3',
				'settings'    => 'st_h3_no_css',
				'label'       => 'カスタマイザーのCSSを無効化',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*h4タグ*/
		$wp_customize->add_section('st_panel_h4', array(
			'title' => 'H4タグ',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_h4_textcolor',
			array(
				'default'              => $defaults['st_h4_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h4_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_h4',
			'settings'    => 'st_h4_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_h4bordercolor',
			array(
				'default'              => $defaults['st_h4bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h4bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_h4',
			'settings'    => 'st_h4bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_h4bgcolor',
			array(
				'default'              => $defaults['st_h4bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h4bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_h4',
			'settings'    => 'st_h4bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h4_design',
			array(
				'default'           => $defaults['st_h4_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_design_c',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_design',
				'label'       => '左ボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_top_border',
			array(
				'default'           => $defaults['st_h4_top_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_top_border_c',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_top_border',
				'label'       => '上にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_bottom_border',
			array(
				'default'           => $defaults['st_h4_bottom_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_bottom_border_c',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_bottom_border',
				'label'       => '下にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4hukidasi_design',
			array(
				'default'           => $defaults['st_h4hukidasi_design'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h4hukidasi_design',
			array(
			'section'     => 'st_panel_h4',
			'settings'    => 'st_h4hukidasi_design',
			'label'       => '',
			'description' => 'h4タグのスタイル指定',
			'type'        => 'radio',
			'choices'     => array(
				'hukidasidesign'             => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
				'dogears'       => __( '耳折れデザインに変更（※要背景色）', 'affinger' ),
				''             => __( 'なし', 'affinger' ),
			),
		) );

		$wp_customize->add_setting( 'st_h4_bg_radius',
			array(
				'default'           => $defaults['st_h4_bg_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_bg_radius',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_bg_radius',
				'label'       => '背景や吹き出しの角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_husen_shadow',
			array(
				'default'           => $defaults['st_h4_husen_shadow'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_husen_shadow_c',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_husen_shadow',
				'label'       => 'ふせん風の影をつける（※要背景色）',

				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_h4_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h4_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_h4',
				'description' => '背景画像',
				'settings'    => 'st_h4_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h4_bgimg_side',
			array(
				'default'           => $defaults['st_h4_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h4_bgimg_side',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_top',
			array(
				'default'           => $defaults['st_h4_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h4_bgimg_top',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_repeat',
			array(
				'default'           => $defaults['st_h4_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_bgimg_repeat',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h4_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h4_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h4_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h4_tupadding_c',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h4_no_css',
			array(
				'default'           => $defaults['st_h4_no_css'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_no_css',
			array(
				'section'     => 'st_panel_h4',
				'settings'    => 'st_h4_no_css',
				'label'       => 'カスタマイザーのCSSを無効化',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*h5タグ*/
		$wp_customize->add_section('st_panel_h5', array(
			'title' => 'H5タグ',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_h5_textcolor',
			array(
				'default'              => $defaults['st_h5_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h5_textcolor', array(
			'label'       => __( 'H5タグ', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_h5',
			'settings'    => 'st_h5_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_h5bordercolor',
			array(
				'default'              => $defaults['st_h5bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h5bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_h5',
			'settings'    => 'st_h5bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_h5bgcolor',
			array(
				'default'              => $defaults['st_h5bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h5bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_h5',
			'settings'    => 'st_h5bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h5_design',
			array(
				'default'           => $defaults['st_h5_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_design_c',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_design',
				'label'       => '左ボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5_top_border',
			array(
				'default'           => $defaults['st_h5_top_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_top_border_c',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_top_border',
				'label'       => '上にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5_bottom_border',
			array(
				'default'           => $defaults['st_h5_bottom_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_bottom_border_c',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_bottom_border',
				'label'       => '下にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5hukidasi_design',
			array(
				'default'           => $defaults['st_h5hukidasi_design'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h5hukidasi_design',
			array(
			'section'     => 'st_panel_h5',
			'settings'    => 'st_h5hukidasi_design',
			'label'       => '',
			'description' => 'h5タグのスタイル指定',
			'type'        => 'radio',
			'choices'     => array(
				'hukidasidesign'             => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
				'dogears'       => __( '耳折れデザインに変更（※要背景色）', 'affinger' ),
				''             => __( 'なし', 'affinger' ),
			),
		) );

		$wp_customize->add_setting( 'st_h5_bg_radius',
			array(
				'default'           => $defaults['st_h5_bg_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_bg_radius',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_bg_radius',
				'label'       => '背景や吹き出しの角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5_husen_shadow',
			array(
				'default'           => $defaults['st_h5_husen_shadow'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_husen_shadow_c',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_husen_shadow',
				'label'       => 'ふせん風の影をつける（※要背景色）',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_h5_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h5_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_h5',
				'description' => '背景画像',
				'settings'    => 'st_h5_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h5_bgimg_side',
			array(
				'default'           => $defaults['st_h5_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h5_bgimg_side',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_top',
			array(
				'default'           => $defaults['st_h5_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h5_bgimg_top',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_repeat',
			array(
				'default'           => $defaults['st_h5_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_bgimg_repeat',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h5_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h5_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h5_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h5_tupadding_c',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h5_no_css',
			array(
				'default'           => $defaults['st_h5_no_css'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_no_css',
			array(
				'section'     => 'st_panel_h5',
				'settings'    => 'st_h5_no_css',
				'label'       => 'カスタマイザーのCSSを無効化',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*h4（まとめ）タグ*/
		$wp_customize->add_section('st_panel_h4_matome', array(
			'title' => 'まとめタグ',
			'panel' => 'st_panel_tagcolors',
		));


		$wp_customize->add_setting( 'st_h4_matome_textcolor',
			array(
				'default'              => $defaults['st_h4_matome_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h4_matome_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_h4_matome',
			'settings'    => 'st_h4_matome_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_h4_matome_bordercolor',
			array(
				'default'              => $defaults['st_h4_matome_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h4_matome_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_h4_matome',
			'settings'    => 'st_h4_matome_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_h4_matome_bgcolor',
			array(
				'default'              => $defaults['st_h4_matome_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h4_matome_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_h4_matome',
			'settings'    => 'st_h4_matome_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h4_matome_design',
			array(
				'default'           => $defaults['st_h4_matome_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_matome_design_c',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_design',
				'label'       => '左ボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_matome_top_border',
			array(
				'default'           => $defaults['st_h4_matome_top_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_matome_top_border_c',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_top_border',
				'label'       => '上にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_matome_bottom_border',
			array(
				'default'           => $defaults['st_h4_matome_bottom_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_matome_bottom_border_c',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_bottom_border',
				'label'       => '下にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_matome_hukidasi_design',
			array(
				'default'           => $defaults['st_h4_matome_hukidasi_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_matome_hukidasi_design',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_hukidasi_design',
				'label'       => '吹き出しデザインに変更（※要背景色）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_matome_bg_radius',
			array(
				'default'           => $defaults['st_h4_matome_bg_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_matome_bg_radius',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_bg_radius',
				'label'       => '背景や吹き出しの角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_h4_matome_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',


				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h4_matome_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_h4_matome',
				'description' => '背景画像',
				'settings'    => 'st_h4_matome_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h4_matome_bgimg_side',
			array(
				'default'           => $defaults['st_h4_matome_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h4_matome_bgimg_side',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h4_matome_bgimg_top',
			array(
				'default'           => $defaults['st_h4_matome_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h4_matome_bgimg_top',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_h4_matome_bgimg_repeat',
			array(
				'default'           => $defaults['st_h4_matome_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_matome_bgimg_repeat',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_matome_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h4_matome_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h4_matome_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h4_matome_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h4_matome_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h4_matome_tupadding_c',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h4_matome_no_css',
			array(
				'default'           => $defaults['st_h4_matome_no_css'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_matome_no_css',
			array(
				'section'     => 'st_panel_h4_matome',
				'settings'    => 'st_h4_matome_no_css',
				'label'       => 'カスタマイザーのCSSを無効化',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*ウィジェットタイトル（サイドバー）*/
		$wp_customize->add_section('st_panel_widgets_title', array(
			'title' => 'ウィジェットタイトル（サイドバー）',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_widgets_title_color',
			array(
				'default'              => $defaults['st_widgets_title_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_widgets_title_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_widgets_title',
			'settings'    => 'st_widgets_title_color',
		) ) );


		$wp_customize->add_setting( 'st_widgets_title_bgcolor',
			array(
				'default'              => $defaults['st_widgets_title_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_widgets_title_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_widgets_title',
			'settings'    => 'st_widgets_title_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_widgets_title_bgcolor_t',
			array(
				'default'              => $defaults['st_widgets_title_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_widgets_title_bgcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'st_panel_widgets_title',
			'settings'    => 'st_widgets_title_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_widgets_titleborder_color',
			array(
				'default'              => $defaults['st_widgets_titleborder_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_widgets_titleborder_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_widgets_title',
			'settings'    => 'st_widgets_titleborder_color',
		) ) );

		$wp_customize->add_setting( 'st_widgets_titleborder_undercolor',
			array(
				'default'              => $defaults['st_widgets_titleborder_undercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_widgets_titleborder_undercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色（サブ）',
			'section'     => 'st_panel_widgets_title',
			'settings'    => 'st_widgets_titleborder_undercolor',
		) ) );


		$wp_customize->add_setting( 'st_widgets_title_designsetting',
			array(
				'default'           => $defaults['st_widgets_title_designsetting'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_widgets_title_designsetting',
			array(
				'section'     => 'st_panel_widgets_title',
				'settings'    => 'st_widgets_title_designsetting',
				'label'       => '',
				'description' => 'ウィジェットタイトルの基本スタイル',
				'type'        => 'radio',
				'choices'     => array(
					'hukidasidesign'       => __( '吹き出しデザインに変更（※要背景色）', 'affinger' ),
					'leftlinedesign' => __( '左ラインに変更（※要ボーダー色）', 'affinger' ),
					'linedesign'     => __( '囲み&左ラインデザインに変更（※要ボーダー色）', 'affinger' ),
					'underlinedesign'     => __( '2色アンダーラインに変更（※要ボーダー色）', 'affinger' ),
					'gradient_underlinedesign'     => __( 'グラデーションアンダーラインに変更（※要ボーダー色）', 'affinger' ),
					'dotdesign' => __( '囲みドットデザインに変更（※要ボーダー色）', 'affinger' ),
					'stripe_design' => __( 'ストライプデザインに変更（※要背景色）', 'affinger' ),
					''             => __( 'なし', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_widgets_title_bg_radius',
			array(
				'default'           => $defaults['st_widgets_title_bg_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_widgets_title_bg_radius',
			array(
				'section'     => 'st_panel_widgets_title',
				'settings'    => 'st_widgets_title_bg_radius',
				'label'       => '背景や吹き出しの角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	

		$wp_customize->add_setting( 'st_widgets_title_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'widgets_title_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_widgets_title',
				'description' => '背景画像',
				'settings'    => 'st_widgets_title_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_widgets_title_bgimg_side',
			array(
				'default'           => $defaults['st_widgets_title_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_widgets_title_bgimg_side',
			array(
				'section'     => 'st_panel_widgets_title',
				'settings'    => 'st_widgets_title_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'right'  => __( '右', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_widgets_title_bgimg_top',
			array(
				'default'           => $defaults['st_widgets_title_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_widgets_title_bgimg_top',
			array(
				'section'     => 'st_panel_widgets_title',
				'settings'    => 'st_widgets_title_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'affinger' ),
					'center' => __( '真ん中', 'affinger' ),
					'bottom' => __( '下', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_widgets_title_bgimg_repeat',
			array(
				'default'           => $defaults['st_widgets_title_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_widgets_title_bgimg_repeat',
			array(
				'section'     => 'st_panel_widgets_title',
				'settings'    => 'st_widgets_title_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_widgets_title_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_widgets_title_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_widgets_title_bgimg_leftpadding_c',
			array(
				'section'     => 'st_panel_widgets_title',
				'settings'    => 'st_widgets_title_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_widgets_title_bgimg_tupadding',
			array(
				'default'           => $defaults['st_widgets_title_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_widgets_title_tupadding_c',
			array(
				'section'     => 'st_panel_widgets_title',
				'settings'    => 'st_widgets_title_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );


		/*カテゴリ*/
		$wp_customize->add_section('st_panel_catlink', array(
			'title' => 'カテゴリ',
			'description' => '各カテゴリ編集ページで個別にも設定できます',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_catbg_color',
			array(
				'default'              => $defaults['st_catbg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_catbg_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_catlink',
			'settings'    => 'st_catbg_color',
		) ) );

		$wp_customize->add_setting( 'st_cattext_color',
			array(
				'default'              => $defaults['st_cattext_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_cattext_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_catlink',
			'settings'    => 'st_cattext_color',
		) ) );

		$wp_customize->add_setting( 'st_cattext_radius',
			array(
				'default'           => $defaults['st_cattext_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_cattext_radius',
			array(
				'section'     => 'st_panel_catlink',
				'settings'    => 'st_cattext_radius',
				'label'       => '角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*投稿日時・ぱんくず・タグ*/
		$wp_customize->add_section('st_panel_kuzu', array(
			'title' => '投稿日時・ぱんくず・タグ',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_kuzu_color',
			array(
				'default'              => $defaults['st_kuzu_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kuzu_color', array(
			'label'       => __( '投稿日時・ぱんくず・タグ', 'affinger' ),
			'description' => 'テキスト色',
			'section'     => 'st_panel_kuzu',
			'settings'    => 'st_kuzu_color',
		) ) );

		/*引用*/
		$wp_customize->add_section('st_panel_blockquote', array(
			'title' => '引用部分の背景色',
			'description' => '背景色を指定するとアイコンは白色となります',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_blockquote_color',
			array(
				'default'              => $defaults['st_blockquote_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blockquote_color', array(
			'label'    => __( '', 'affinger' ),
			'section'  => 'st_panel_blockquote',
			'settings' => 'st_blockquote_color',
		) ) );

		/*NEW及び関連記事*/
		$wp_customize->add_section('st_panel_new_entry', array(
			'title' => 'NEW ENTRY & 関連記事',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_separator_bgcolor',
			array(
				'default'              => $defaults['st_separator_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_separator_bgcolor', array(
			'label'       => __( 'NEW ENTRY & 関連記事', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_new_entry',
			'settings'    => 'st_separator_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_separator_bordercolor',
			array(
				'default'              => $defaults['st_separator_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_separator_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー',
			'section'     => 'st_panel_new_entry',
			'settings'    => 'st_separator_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_separator_color',
			array(
				'default'              => $defaults['st_separator_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_separator_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => '文字色',
			'section'     => 'st_panel_new_entry',
			'settings'    => 'st_separator_color',
		) ) );

		$wp_customize->add_setting( 'st_separator_type',
			array(
				'default'           => $defaults['st_separator_type'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_separator_type',
			array(
				'section'     => 'st_panel_new_entry',
				'settings'    => 'st_separator_type',
				'label'       => '',
				'description' => 'デザインパターン',
				'type'        => 'radio',
				'choices'     => array(
				''            => __( 'ノーマル', 'affinger' ),
				'border'      => __( 'ボーダー', 'affinger' ),
				'round'      => __( 'ラウンド', 'affinger' ),
				),
			) );

		/*タグクラウド*/
		$wp_customize->add_section('st_panel_tagcloud', array(
			'title' => 'タグクラウド',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_tagcloud_color',
			array(
				'default'              => $defaults['st_tagcloud_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_tagcloud_color', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'テキスト色',
			'section'     => 'st_panel_tagcloud',
			'settings'    => 'st_tagcloud_color',
		) ) );

		$wp_customize->add_setting( 'st_tagcloud_bordercolor',
			array(
				'default'              => $defaults['st_tagcloud_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_tagcloud_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'ボーダー色',
			'section'     => 'st_panel_tagcloud',
			'settings'    => 'st_tagcloud_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_tagcloud_bgcolor',
			array(
				'default'              => $defaults['st_tagcloud_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_tagcloud_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '背景色',
			'section'     => 'st_panel_tagcloud',
			'settings'    => 'st_tagcloud_bgcolor',
		) ) );

		/*記事内テキスト*/
		$wp_customize->add_section('st_panel_main_textcolor', array(
			'title' => 'テキスト色一括変更',
			'panel' => 'st_panel_tagcolors',
		));

		$wp_customize->add_setting( 'st_main_textcolor',
			array(
				'default'              => $defaults['st_main_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_main_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'description' => '記事内のテキストなど※一括変更は注意して御利用下さい（白背景に白文字が適応されると読めなくなります）',
			'section'     => 'st_panel_main_textcolor',
			'settings'    => 'st_main_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_main_textcolor_sub',
			array(
				'default'           => $defaults['st_main_textcolor_sub'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_main_textcolor_sub',
			array(
				'section'     => 'st_panel_main_textcolor',
				'settings'    => 'st_main_textcolor_sub',
				'label'       => '範囲を広げる（記事タイトル・抜粋など）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*記事内リンク色*/

		$wp_customize->add_setting( 'st_link_textcolor',
			array(
				'default'              => $defaults['st_link_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_link_textcolor', array(
			'label'       => __( '記事内リンク色', 'affinger' ),
			'description' => '',
			'section'     => 'st_panel_main_textcolor',
			'settings'    => 'st_link_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_link_hovertextcolor',
			array(
				'default'              => $defaults['st_link_hovertextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_link_hovertextcolor', array(
			'label'       => __( '全てのリンクテキスト', 'affinger' ),
			'description' => 'マウスオーバー色',
			'section'     => 'st_panel_main_textcolor',
			'settings'    => 'st_link_hovertextcolor',
		) ) );

		$wp_customize->add_setting( 'st_link_hoveropacity',
			array(
				'default'           => $defaults['st_link_hoveropacity'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_link_hoveropacity',
			array(
				'section'     => 'st_panel_main_textcolor',
				'settings'    => 'st_link_hoveropacity',
				'label'       => 'マウスオーバー時に透明度を下げる',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*-------------------------------------------------------
		オプションカラー
		-------------------------------------------------------*/

		$wp_customize->add_panel( 'st_panel_optioncolors',
			array(
				'title'       => __( 'オプション（その他）', 'affinger' ),
				'priority'    => 102,
			) );

		$wp_customize->add_section('color_controls_optioncolors', array(
    		'title' => 'カラーパレット',
    		'panel' => 'st_panel_optioncolors',
  		));
		_st_customization_add_color_controls( $wp_customize, 'color_controls_optioncolors' );

		/*記事内のWebアイコン*/
		$wp_customize->add_section('st_panel_webicon', array(
			'title' => '記事内のWebアイコン（スタイル）',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_webicon_question',
			array(
				'default'              => $defaults['st_webicon_question'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_question', array(
			'label'       => __( '', 'affinger' ),
			'description' => '[？] はてなマーク',
			'section'     => 'st_panel_webicon',
			'settings'    => 'st_webicon_question',
		) ) );

		$wp_customize->add_setting( 'st_webicon_check',
			array(
				'default'              => $defaults['st_webicon_check'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_check', array(
			'label'       => __( '', 'affinger' ),
			'description' => '(v) チェックマーク',
			'section'     => 'st_panel_webicon',
			'settings'    => 'st_webicon_check',
		) ) );

		$wp_customize->add_setting( 'st_webicon_exclamation',
			array(
				'default'              => $defaults['st_webicon_exclamation'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_exclamation', array(
			'label'       => __( '', 'affinger' ),
			'description' => '[！] エクステンションマーク',
			'section'     => 'st_panel_webicon',
			'settings'    => 'st_webicon_exclamation',
		) ) );

		$wp_customize->add_setting( 'st_webicon_memo',
			array(
				'default'              => $defaults['st_webicon_memo'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_memo', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'メモマーク',
			'section'     => 'st_panel_webicon',
			'settings'    => 'st_webicon_memo',
		) ) );

		$wp_customize->add_setting( 'st_webicon_user',
			array(
				'default'              => $defaults['st_webicon_user'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_user', array(
			'label'       => __( '', 'affinger' ),
			'description' => '人物マーク',
			'section'     => 'st_panel_webicon',
			'settings'    => 'st_webicon_user',
		) ) );

		$wp_customize->add_setting( 'st_webicon_oukan',
			array(
				'default'              => $defaults['st_webicon_oukan'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_oukan', array(
			'label'       => __( '', 'affinger' ),
			'description' => '王冠マーク',
			'section'     => 'st_panel_webicon',
			'settings'    => 'st_webicon_oukan',
		) ) );

		$wp_customize->add_setting( 'st_webicon_bigginer',
			array(
				'default'              => $defaults['st_webicon_bigginer'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_bigginer', array(
			'label'       => __( '', 'affinger' ),
			'description' => '初心者マーク',
			'section'     => 'st_panel_webicon',
			'settings'    => 'st_webicon_bigginer',
		) ) );

		/* リストまとめ */
		$wp_customize->add_section('st_panel_maruno', array(
			'title' => 'リスト（数字・チェック / ボックスタイプ）',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_maruno_textcolor',
			array(
				'default'              => $defaults['st_maruno_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_textcolor', array(
			'label'       => __( '数字リスト', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'ナンバー色',
			'settings'    => 'st_maruno_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruno_nobgcolor',
			array(
				'default'              => $defaults['st_maruno_nobgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_nobgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'ナンバー背景色',
			'settings'    => 'st_maruno_nobgcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruno_bordercolor',
			array(
				'default'              => $defaults['st_maruno_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => '囲いボーダー色',
			'settings'    => 'st_maruno_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_maruno_bgcolor',
			array(
				'default'              => $defaults['st_maruno_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => '囲い背景色',
			'settings'    => 'st_maruno_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruno_radius',
			array(
				'default'           => $defaults['st_maruno_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_maruno_radius',
			array(
				'section'     => 'st_panel_maruno',
				'settings'    => 'st_maruno_radius',
				'label'       => '背景色の角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*マルチェックのカラー*/
		$wp_customize->add_setting( 'st_maruck_textcolor',
			array(
				'default'              => $defaults['st_maruck_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_textcolor', array(
			'label'       => __( 'チェック（マル）リスト', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'チェック色',
			'settings'    => 'st_maruck_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruck_nobgcolor',
			array(
				'default'              => $defaults['st_maruck_nobgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_nobgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'チェック（マル）背景色',
			'settings'    => 'st_maruck_nobgcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruck_bordercolor',
			array(
				'default'              => $defaults['st_maruck_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => '囲いボーダー色',
			'settings'    => 'st_maruck_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_maruck_bgcolor',
			array(
				'default'              => $defaults['st_maruck_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => '囲い背景色',
			'settings'    => 'st_maruck_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruck_radius',
			array(
				'default'           => $defaults['st_maruck_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_maruck_radius',
			array(
				'section'     => 'st_panel_maruno',
				'settings'    => 'st_maruck_radius',
				'label'       => '背景色の角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/* [v] チェックボックス */
		$wp_customize->add_setting( 'st_webicon_checkbox',
			array(
				'default'              => $defaults['st_webicon_checkbox'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_checkbox', array(
			'label'       => __( 'チェック（簡易 / ボックスタイプ）', 'affinger' ),
			'description' => 'チェック色',
			'section'     => 'st_panel_maruno',
			'settings'    => 'st_webicon_checkbox',
		) ) );

		$wp_customize->add_setting( 'st_webicon_checkbox_square',
			array(
				'default'              => $defaults['st_webicon_checkbox_square'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_checkbox_square', array(
			'label'       => __( '', 'affinger' ),
			'description' => 'チェックの枠色',
			'section'     => 'st_panel_maruno',
			'settings'    => 'st_webicon_checkbox_square',
		) ) );

		$wp_customize->add_setting( 'st_webicon_checkbox_simple',
			array(
				'default'           => $defaults['st_webicon_checkbox_simple'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_webicon_checkbox_simple',
			array(
				'section'     => 'st_panel_maruno',
				'settings'    => 'st_webicon_checkbox_simple',
				'label'       => 'チェック（ボックスタイプ）のデザインをチェックのみにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_webicon_checkbox_size',
			array(
				'default'           => $defaults['st_webicon_checkbox_size'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_webicon_checkbox_size_c',
			array(
				'section'     => 'st_panel_maruno',
				'settings'    => 'st_webicon_checkbox_size',
				'label'       => '',
				'description' => 'チェックのみサイズ（%）※微調整用',
				'type'        => 'option',
			) );

		/* こんな方におすすめ */
		$wp_customize->add_setting( 'st_blackboard_mokuzicolor',
			array(
				'default'              => $defaults['st_blackboard_mokuzicolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blackboard_mokuzicolor', array(
			'label'       => __( 'こんな方におすすめ', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'タイトル色',
			'settings'    => 'st_blackboard_mokuzicolor',
		) ) );

		$wp_customize->add_setting( 'st_blackboard_title_bgcolor',
			array(
				'default'              => $defaults['st_blackboard_title_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blackboard_title_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'タイトル背景色',
			'settings'    => 'st_blackboard_title_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_blackboard_textcolor',
			array(
				'default'              => $defaults['st_blackboard_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blackboard_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => '枠線とタイトル下線',
			'settings'    => 'st_blackboard_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_blackboard_underbordercolor',
			array(
				'default'              => $defaults['st_blackboard_underbordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blackboard_underbordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'チェックアイコン（丸タイプ）',
			'settings'    => 'st_blackboard_underbordercolor',
		) ) );

		$wp_customize->add_setting( 'st_blackboard_bordercolor',
			array(
				'default'              => $defaults['st_blackboard_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blackboard_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => 'テキストと下線',
			'settings'    => 'st_blackboard_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_blackboard_bgcolor',
			array(
				'default'              => $defaults['st_blackboard_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blackboard_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_maruno',
			'description' => '背景色',
			'settings'    => 'st_blackboard_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_blackboard_list3_fontweight',
			array(
				'default'           => $defaults['st_blackboard_list3_fontweight'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_blackboard_list3_fontweight',
			array(
				'section'     => 'st_panel_maruno',
				'settings'    => 'st_blackboard_list3_fontweight',
				'label'       => 'タイトル下線を非表示',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_blackboard_webicon',
			array(
				'default'           => $defaults['st_blackboard_webicon'],
				'sanitize_callback' => 'sanitize_text_field',

			) );
		$wp_customize->add_control( 'st_blackboard_webicon',
			array(
				'section'     => 'st_panel_maruno',
				'settings'    => 'st_blackboard_webicon',
				'label'       => __( '', 'affinger' ),
				'description' => 'Webアイコン（unicode）',
				'type'        => 'option',
			) );

		/*タイムライン*/
		$wp_customize->add_section('st_panel_timeline', array(
			'title' => 'タイムライン',
			'panel' => 'st_panel_optioncolors',
			'description' => 'st-timelineショートコードのカラー設定',
		));

		$wp_customize->add_setting( 'st_timeline_list_color',
			array(
				'default'              => $defaults['st_timeline_list_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_timeline_list_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_timeline',
			'description' => 'ラインカラー',
			'settings'    => 'st_timeline_list_color',
		) ) );

		$wp_customize->add_setting( 'st_timeline_list_color_count',
			array(
				'default'              => $defaults['st_timeline_list_color_count'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_timeline_list_color_count', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_timeline',
			'description' => 'カウントカラー',
			'settings'    => 'st_timeline_list_color_count',
		) ) );

		$wp_customize->add_setting( 'st_timeline_list_now_color',
			array(
				'default'              => $defaults['st_timeline_list_now_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_timeline_list_now_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_timeline',
			'description' => 'nowカラー',
			'settings'    => 'st_timeline_list_now_color',
		) ) );

		$wp_customize->add_setting( 'st_timeline_list_now_blink',
			array(
				'default'           => $defaults['st_timeline_list_now_blink'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_timeline_list_now_blink',
			array(
				'section'     => 'st_panel_timeline',
				'settings'    => 'st_timeline_list_now_blink',
				'label'       => 'nowクラスの点滅',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_timeline_list_bg_color',
			array(
				'default'              => $defaults['st_timeline_list_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_timeline_list_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_timeline',
			'description' => '背景色（※一括）',
			'settings'    => 'st_timeline_list_bg_color',
		) ) );

		/* ステップ */
		$wp_customize->add_section('st_panel_step', array(
			'title' => 'ステップ / ポイント',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_step_bgcolor',
			array(
				'default'              => $defaults['st_step_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_step_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_step',
			'description' => 'ステップ数・ポイントの背景色',
			'settings'    => 'st_step_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_step_color',
			array(
				'default'              => $defaults['st_step_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_step_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_step',
			'description' => 'ステップ数・ポイントの色',
			'settings'    => 'st_step_color',
		) ) );

        $wp_customize->add_setting( 'st_step_text_color',
			array(
				'default'              => $defaults['st_step_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_step_text_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_step',
			'description' => 'テキスト色',
			'settings'    => 'st_step_text_color',
		) ) );

        $wp_customize->add_setting( 'st_step_text_bgcolor',
			array(
				'default'              => $defaults['st_step_text_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_step_text_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_step',
			'description' => 'テキストの背景色',
			'settings'    => 'st_step_text_bgcolor',
		) ) );

        $wp_customize->add_setting( 'st_step_text_border_color',
			array(
				'default'              => $defaults['st_step_text_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_step_text_border_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_step',
			'description' => 'ボーダー色',
			'settings'    => 'st_step_text_border_color',
		) ) );

		$wp_customize->add_setting( 'st_step_radius',
			array(
				'default'           => $defaults['st_step_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_step_radius',
			array(
				'section'     => 'st_panel_step',
				'settings'    => 'st_step_radius',
				'label'       => '角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*ブログカード*/
		$wp_customize->add_section('st_panel_blogcard', array(
			'title' => 'ブログカード / ラベル',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_card_border_color',
			array(
				'default'              => $defaults['st_card_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_card_border_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_blogcard',
			'description' => '枠線',
			'settings'    => 'st_card_border_color',
		) ) );

		$wp_customize->add_setting( 'st_card_border_size',
			array(
				'default'           => $defaults['st_card_border_size'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_card_border_size',
			array(
				'section'     => 'st_panel_blogcard',
				'settings'    => 'st_card_border_size',
				'label'       => '枠線を太くする（3px）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_card_label_bgcolor',
			array(
				'default'              => $defaults['st_card_label_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_card_label_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_blogcard',
			'description' => 'ラベル背景色',
			'settings'    => 'st_card_label_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_card_label_textcolor',
			array(
				'default'              => $defaults['st_card_label_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_card_label_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_blogcard',
			'description' => 'ラベルテキスト色',
			'settings'    => 'st_card_label_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_card_label_designsetting',
			array(
				'default'           => $defaults['st_card_label_designsetting'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_card_label_designsetting',
			array(
				'section'     => 'st_panel_blogcard',
				'settings'    => 'st_card_label_designsetting',
				'label'       => '',
				'description' => 'ラベルデザイン',
				'type'        => 'radio',
				'choices'     => array(
					'ribondesign' => __( 'リボンデザイン', 'affinger' ),
					''               => __( 'デフォルト（たすき掛け）', 'affinger' ),
				),
			) );

		/*-------------------------
		テーブルカラー
		--------------------------*/
		$wp_customize->add_section('st_panel_table', array(
			'title' => 'table（表）',
			'panel' => 'st_panel_optioncolors',
		));

		/*テーブル全体*/

		$wp_customize->add_setting( 'st_table_bordercolor',
			array(
				'default'              => $defaults['st_table_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_table',
			'description' => '表のボーダー色',
			'settings'    => 'st_table_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_table_cell_bgcolor',
			array(
				'default'              => $defaults['st_table_cell_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_cell_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_table',
			'description' => '偶数行のセルの色',
			'settings'    => 'st_table_cell_bgcolor',
		) ) );

		/*縦一列目*/

		$wp_customize->add_setting( 'st_table_td_bgcolor',
			array(
				'default'              => $defaults['st_table_td_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_td_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_table',
			'description' => '縦一列目の背景色',
			'settings'    => 'st_table_td_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_td_textcolor',
			array(
				'default'              => $defaults['st_table_td_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_td_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_table',
			'description' => '縦一列目の文字色',
			'settings'    => 'st_table_td_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_td_bold',
			array(
				'default'           => $defaults['st_table_td_bold'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_table_td_bold',
			array(
				'section'     => 'st_panel_table',
				'settings'    => 'st_table_td_bold',
				'label'       => '縦一列目を太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*横一列目*/

		$wp_customize->add_setting( 'st_table_tr_bgcolor',
			array(
				'default'              => $defaults['st_table_tr_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_tr_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_table',
			'description' => '横一列目（tr）及びヘッダセル（th）の背景色',
			'settings'    => 'st_table_tr_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_tr_textcolor',
			array(
				'default'              => $defaults['st_table_tr_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_tr_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_table',
			'description' => '横一列目（tr）及びヘッダセル（th）の文字色',
			'settings'    => 'st_table_tr_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_tr_bold',
			array(
				'default'           => $defaults['st_table_tr_bold'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_table_tr_bold',
			array(
				'section'     => 'st_panel_table',
				'settings'    => 'st_table_tr_bold',
				'label'       => '横一列目（tr）及びヘッダセル（th）を太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/* 検索フォーム */
		$wp_customize->add_section('st_search_form', array(
			'title'       => '検索フォーム',
			'panel'       => 'st_panel_optioncolors',
			'description' => '数値は微調整用です（1～20）。極端な設定はデザインが破綻する場合があります',
		));

		$wp_customize->add_setting( 'st_search_form_text',
			array(
				'default'              => $defaults['st_search_form_text'],
				'sanitize_callback' => 'sanitize_text_field',

			) );
		$wp_customize->add_control( 'st_search_form_text_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_text',
				'label'       => '',
				'description' => '検索フォームのplaceholder',
				'type'        => 'text',
			) );

		$wp_customize->add_setting( 'st_search_form_font_size',
			array(
				'default'           => $defaults['st_search_form_font_size'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_font_size_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_font_size',
				'label'       => '',
				'description' => '文字・アイコンサイズ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_bg_color',
			array(
				'default'              => $defaults['st_search_form_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_bg_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索フォームの背景色',
				'settings'    => 'st_search_form_bg_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_text_color',
			array(
				'default'              => $defaults['st_search_form_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_text_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索フォーム内の文字色',
				'settings'    => 'st_search_form_text_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_border_color',
			array(
				'default'              => $defaults['st_search_form_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_border_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索フォームの枠線',
				'settings'    => 'st_search_form_border_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_border_width',
			array(
				'default'           => $defaults['st_search_form_border_width'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_border_width_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_border_width',
				'label'       => '',
				'description' => '検索フォーム枠線の太さ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_border_radius',
			array(
				'default'           => $defaults['st_search_form_border_radius'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_border_radius_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_border_radius',
				'label'       => '',
				'description' => '検索フォームの丸み（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_icon_color',
			array(
				'default'              => $defaults['st_search_form_icon_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_icon_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索アイコンの色',
				'settings'    => 'st_search_form_icon_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_icon_bg_color',
			array(
				'default'              => $defaults['st_search_form_icon_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_icon_bg_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索アイコンの背景色',
				'settings'    => 'st_search_form_icon_bg_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_padding_lr',
			array(
				'default'           => $defaults['st_search_form_padding_lr'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_padding_lr_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_padding_lr',
				'label'       => '',
				'description' => '左右の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_padding_tb',
			array(
				'default'           => $defaults['st_search_form_padding_tb'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_padding_tb_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_padding_tb',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

if(is_plugin_active( 'st-custom-search/st-custom-search.php' )):

		/* カスタム検索のボタン */
		$wp_customize->add_setting( 'st_search_form_btn_font_size',
			array(
				'default'           => $defaults['st_search_form_btn_font_size'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_btn_font_size_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_btn_font_size',
				'label'       => 'カスタム検索（ボタン）',
				'description' => '文字・アイコンサイズ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_btn_text_color',
			array(
				'default'              => $defaults['st_search_form_btn_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_btn_text_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索ボタンの文字色',
				'settings'    => 'st_search_form_btn_text_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_btn_font_weight',
			array(
				'default'           => $defaults['st_search_form_btn_font_weight'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_search_form_btn_font_weight_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_btn_font_weight',
				'label'       => '太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_search_form_btn_bg_color',
			array(
				'default'              => $defaults['st_search_form_btn_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_btn_bg_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索ボタンの背景色',
				'settings'    => 'st_search_form_btn_bg_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_btn_shadow_color',
			array(
				'default'              => $defaults['st_search_form_btn_shadow_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_btn_shadow_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索ボタンの影色',
				'settings'    => 'st_search_form_btn_shadow_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_btn_border_color',
			array(
				'default'              => $defaults['st_search_form_btn_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_search_form_btn_border_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_search_form',
				'description' => '検索ボタンの枠線',
				'settings'    => 'st_search_form_btn_border_color',
			) ) );

		$wp_customize->add_setting( 'st_search_form_btn_border_width',
			array(
				'default'           => $defaults['st_search_form_btn_border_width'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_btn_border_width_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_btn_border_width',
				'label'       => '',
				'description' => '検索ボタンの枠線 / 影の太さ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_btn_border_radius',
			array(
				'default'           => $defaults['st_search_form_btn_border_radius'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_btn_border_radius_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_btn_border_radius',
				'label'       => '',
				'description' => '検索ボタンの丸み（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_btn_padding_lr',
			array(
				'default'           => $defaults['st_search_form_btn_padding_lr'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_btn_padding_lr_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_btn_padding_lr',
				'label'       => '',
				'description' => '左右の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_search_form_btn_padding_tb',
			array(
				'default'           => $defaults['st_search_form_btn_padding_tb'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_search_form_btn_padding_tb_c',
			array(
				'section'     => 'st_search_form',
				'settings'    => 'st_search_form_btn_padding_tb',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );
endif;

		/*RSS（購読する）ボタン*/
		$wp_customize->add_section('st_panel_rss_button', array(
			'title' => 'RSSボタン',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_rss_color',
			array(
				'default'              => $defaults['st_rss_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_rss_color', array(
			'label'    => __( '', 'affinger' ),
			'section'  => 'st_panel_rss_button',
			'settings' => 'st_rss_color',
		) ) );

		/*SNSボタン*/
		$wp_customize->add_section('st_panel_sns_button', array(
			'title' => 'SNSボタン',
			'description' => '※一括反映',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_sns_btn',
			array(
				'default'              => $defaults['st_sns_btn'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sns_btn', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_sns_button',
			'description' => 'ボタン背景色',
			'settings'    => 'st_sns_btn',
		) ) );

		$wp_customize->add_setting( 'st_sns_btntext',
			array(
				'default'              => $defaults['st_sns_btntext'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sns_btntext', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_sns_button',
			'description' => 'アイコンと文字色',
			'settings'    => 'st_sns_btntext',
		) ) );

	
		$wp_customize->add_section('st_panel_news', array(
			'title' => 'お知らせ',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_menu_newsbarcolor_t',
			array(
				'default'              => $defaults['st_menu_newsbarcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbarcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_news',
			'description' => '見出し背景色上部（※上下共に設定）',
			'settings'    => 'st_menu_newsbarcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbarcolor',
			array(
				'default'              => $defaults['st_menu_newsbarcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbarcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_news',
			'description' => '見出し背景色下部',
			'settings'    => 'st_menu_newsbarcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbar_border_color',
			array(
				'default'              => $defaults['st_menu_newsbar_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_newsbar_border_color',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_news',
				'description' => '見出しボーダー色',
				'settings'    => 'st_menu_newsbar_border_color',
			) ) );

		$wp_customize->add_setting( 'st_menu_newsbartextcolor',
			array(
				'default'              => $defaults['st_menu_newsbartextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbartextcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_news',
			'description' => '見出し文字色',
			'settings'    => 'st_menu_newsbartextcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbgcolor',
			array(
				'default'              => $defaults['st_menu_newsbgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_news',
			'description' => '全体背景色',
			'settings'    => 'st_menu_newsbgcolor',
		) ) );

		/*日付の文字色*/

		$wp_customize->add_setting( 'st_news_datecolor',
			array(
				'default'              => $defaults['st_news_datecolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_news_datecolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_news',
			'description' => '日付の文字と下線色',
			'settings'    => 'st_news_datecolor',
		) ) );

		/*文字と下線色*/

		$wp_customize->add_setting( 'st_news_text_color',
			array(
				'default'              => $defaults['st_news_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_news_text_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_news',
			'description' => 'お知らせ文字',
			'settings'    => 'st_news_text_color',
		) ) );

		/*任意お薦め記事*/
		$wp_customize->add_section('st_panel_popular_post', array(
			'title' => 'おすすめ記事',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_menu_osusumemidasitextcolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasitextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_osusumemidasitextcolor',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_popular_post',
				'description' => '見出し文字色',
				'settings'    => 'st_menu_osusumemidasitextcolor',
			) ) );

		$wp_customize->add_setting( 'st_menu_osusumemidasicolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasicolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_osusumemidasicolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_popular_post',
			'description' => '見出し背景色',
			'settings'    => 'st_menu_osusumemidasicolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_popbox_color',
			array(
				'default'              => $defaults['st_menu_popbox_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_popbox_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_popular_post',
			'description' => 'コンテンツ背景色',
			'settings'    => 'st_menu_popbox_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_popbox_textcolor',
			array(
				'default'              => $defaults['st_menu_popbox_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_popbox_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_popular_post',
			'description' => '文字色',
			'settings'    => 'st_menu_popbox_textcolor',
		) ) );

		/*任意お薦め記事No*/

		$wp_customize->add_setting( 'st_menu_osusumemidasinocolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasinocolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_osusumemidasinocolor',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_popular_post',
				'description' => 'ナンバー（view）色',
				'settings'    => 'st_menu_osusumemidasinocolor',
			) ) );

		$wp_customize->add_setting( 'st_menu_osusumemidasinobgcolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasinobgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_osusumemidasinobgcolor',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_popular_post',
				'description' => 'ナンバー（view）背景色',
				'settings'    => 'st_menu_osusumemidasinobgcolor',
			) ) );

		$wp_customize->add_setting( 'st_nohidden',
			array(
				'default'           => $defaults['st_nohidden'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_nohidden',
			array(
				'section'     => 'st_panel_popular_post',
				'settings'    => 'st_nohidden',
				'label'       => 'ナンバーを非表示',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*フリーボックスウィジェット*/
		$wp_customize->add_section('st_panel_freebox_widgets', array(
			'title' => '見出し付きフリーボックス（ウィジェット）',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_freebox_tittle_textcolor',
			array(
				'default'              => $defaults['st_freebox_tittle_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_tittle_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_freebox_widgets',
			'description' => '見出し文字色',
			'settings'    => 'st_freebox_tittle_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_freebox_tittle_color',
			array(
				'default'              => $defaults['st_freebox_tittle_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_tittle_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_freebox_widgets',
			'description' => '見出し背景色',
			'settings'    => 'st_freebox_tittle_color',
		) ) );

		$wp_customize->add_setting( 'st_freebox_color',
			array(
				'default'              => $defaults['st_freebox_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_freebox_widgets',
			'description' => 'コンテンツ背景色',
			'settings'    => 'st_freebox_color',
		) ) );

		$wp_customize->add_setting( 'st_freebox_textcolor',
			array(
				'default'              => $defaults['st_freebox_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_freebox_widgets',
			'description' => '文字色',
			'settings'    => 'st_freebox_textcolor',
		) ) );

		/*メモボックス*/
		$wp_customize->add_section('st_panel_memobox', array(
			'title' => 'メモボックス',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_memobox_color',
			array(
				'default'              => $defaults['st_memobox_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_memobox_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_memobox',
			'description' => '文字・ボーダー色',
			'settings'    => 'st_memobox_color',
		) ) );

		/*スライドボックス*/
		$wp_customize->add_section('st_panel_slidebox', array(
			'title' => 'スライドボックス',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_slidebox_color',
			array(
				'default'              => $defaults['st_slidebox_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_slidebox_color', array(
			'label'       => __( 'スライドボックス', 'affinger' ),
			'section'     => 'st_panel_slidebox',
			'description' => '背景色',
			'settings'    => 'st_slidebox_color',
		) ) );

		/*ウィジェット問合せフォームボタン*/
		$wp_customize->add_section('st_panel_widgets_form_btn', array(
			'title' => '問合せボタン（ウィジェット）',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_formbtn_textcolor',
			array(
				'default'              => $defaults['st_formbtn_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_widgets_form_btn',
			'description' => '文字色',
			'settings'    => 'st_formbtn_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn_bordercolor',
			array(
				'default'              => $defaults['st_formbtn_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_widgets_form_btn',
			'description' => 'ボーダー色',
			'settings'    => 'st_formbtn_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn_radius',
			array(
				'default'           => $defaults['st_formbtn_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_formbtn_radius',
			array(
				'section'     => 'st_panel_widgets_form_btn',
				'settings'    => 'st_formbtn_radius',
				'label'       => '角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_formbtn_bgcolor',
			array(
				'default'              => $defaults['st_formbtn_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_widgets_form_btn',
			'description' => '背景色',
			'settings'    => 'st_formbtn_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn_bgcolor_t',
			array(
				'default'              => $defaults['st_formbtn_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_bgcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_widgets_form_btn',
			'description' => '背景色上部',
			'settings'    => 'st_formbtn_bgcolor_t',
		) ) );

		/*オリジナルウィジェットボタン*/
		$wp_customize->add_section('st_panel_original_widgets_btn', array(
			'title' => 'オリジナルボタン（ウィジェット）',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_formbtn2_textcolor',
			array(
				'default'              => $defaults['st_formbtn2_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_original_widgets_btn',
			'description' => '文字色',
			'settings'    => 'st_formbtn2_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_bordercolor',
			array(
				'default'              => $defaults['st_formbtn2_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_original_widgets_btn',
			'description' => 'ボーダー色',
			'settings'    => 'st_formbtn2_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_radius',
			array(
				'default'           => $defaults['st_formbtn2_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_formbtn2_radius',
			array(
				'section'     => 'st_panel_original_widgets_btn',
				'settings'    => 'st_formbtn2_radius',
				'label'       => '角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_formbtn2_bgcolor',
			array(
				'default'              => $defaults['st_formbtn2_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_original_widgets_btn',
			'description' => '背景色',
			'settings'    => 'st_formbtn2_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_bgcolor_t',
			array(
				'default'              => $defaults['st_formbtn2_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_bgcolor_t', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_original_widgets_btn',
			'description' => '背景色上部',
			'settings'    => 'st_formbtn2_bgcolor_t',
		) ) );

		/*会話ふきだしのカラー*/
		$wp_customize->add_section('st_panel_kaiwa', array(
			'title' => '会話ふきだし',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_kaiwa_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '全体又は会話1の背景色',
			'settings'    => 'st_kaiwa_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa2_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa2_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa2_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '会話2の背景色',
			'settings'    => 'st_kaiwa2_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa3_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa3_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa3_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '会話3の背景色',
			'settings'    => 'st_kaiwa3_bgcolor',
		) ) );
		$wp_customize->add_setting( 'st_kaiwa4_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa4_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa4_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '会話4の背景色',
			'settings'    => 'st_kaiwa4_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa5_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa5_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa5_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '会話5の背景色',
			'settings'    => 'st_kaiwa5_bgcolor',
		) ) );		$wp_customize->add_setting( 'st_kaiwa6_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa6_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa6_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '会話6の背景色',
			'settings'    => 'st_kaiwa6_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa7_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa7_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa7_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '会話7の背景色',
			'settings'    => 'st_kaiwa7_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa8_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa8_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa8_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => '会話8の背景色',
			'settings'    => 'st_kaiwa8_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa_no_border',
			array(
				'default'           => $defaults['st_kaiwa_no_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_kaiwa_no_border',
			array(
				'section'     => 'st_panel_kaiwa',
				'settings'    => 'st_kaiwa_no_border',
				'label'       => 'アイコンに枠線をつける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_kaiwa_borderradius',
			array(
				'default'           => $defaults['st_kaiwa_borderradius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_kaiwa_borderradius',
			array(
				'section'     => 'st_panel_kaiwa',
				'settings'    => 'st_kaiwa_borderradius',
				'label'       => 'ふきだしを角丸にしない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_kaiwa_change_border',
			array(
				'default'           => $defaults['st_kaiwa_change_border'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_kaiwa_change_border',
			array(
				'section'     => 'st_panel_kaiwa',
				'settings'    => 'st_kaiwa_change_border',
				'label'       => '',
				'description' => 'ボーダーデザインタイプ（枠線のみ）に変更',
				'type'        => 'radio',
				'choices'     => array(
					'normal'     => __( '普通（2px）', 'affinger' ),
					'thick'      => __( '太め（3px）', 'affinger' ),
					''           => __( 'なし', 'affinger' ),
				),
			) );

		$wp_customize->add_setting( 'st_kaiwa_change_border_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa_change_border_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa_change_border_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_kaiwa',
			'description' => 'ボーダーデザインタイプの背景色※一括',
			'settings'    => 'st_kaiwa_change_border_bgcolor',
		) ) );

		/*目次プラグイン（TOC+）のカラー*/
		$wp_customize->add_section('st_panel_toc_sugoi', array(
			'title' => '目次プラグイン（すごいもくじ）',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_toc_mokuzicolor',
			array(
				'default'              => $defaults['st_toc_mokuzicolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_mokuzicolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => '目次色',
			'settings'    => 'st_toc_mokuzicolor',
		) ) );

		$wp_customize->add_setting( 'st_toc_mokuzi_border',
			array(
				'default'              => $defaults['st_toc_mokuzi_border'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_mokuzi_border', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => '目次タイトル下の下線',
			'settings'    => 'st_toc_mokuzi_border',
		) ) );

		$wp_customize->add_setting( 'st_toc_textcolor',
			array(
				'default'              => $defaults['st_toc_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_textcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => '第1リンク文字色',
			'settings'    => 'st_toc_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_toc_list_icon_base',
			array(
				'default'              => $defaults['st_toc_list_icon_base'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_list_icon_base', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => 'リスト数字・アイコン',
			'settings'    => 'st_toc_list_icon_base',
		) ) );

		$wp_customize->add_setting( 'st_toc_text2color',
			array(
				'default'              => $defaults['st_toc_text2color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_text2color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => '第2リンク以降の文字色',
			'settings'    => 'st_toc_text2color',
		) ) );

		$wp_customize->add_setting( 'st_toc_underbordercolor',
			array(
				'default'              => $defaults['st_toc_underbordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_underbordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => '第2リンクの下線',
			'settings'    => 'st_toc_underbordercolor',
		) ) );

		$wp_customize->add_setting( 'st_toc_bordercolor',
			array(
				'default'              => $defaults['st_toc_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => 'ボーダー色',
			'settings'    => 'st_toc_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_toc_border_width',
			array(
				'default'           => $defaults['st_toc_border_width'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_toc_border_width_c',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_border_width',
				'label'       => '',
				'description' => 'ボーダーの太さ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_toc_bgcolor',
			array(
				'default'              => $defaults['st_toc_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_toc_sugoi',
			'description' => '背景色',
			'settings'    => 'st_toc_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_toc_radius',
			array(
				'default'           => $defaults['st_toc_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_toc_radius',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_radius',
				'label'       => '背景を角丸にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_toc_list1_left',
			array(
				'default'           => $defaults['st_toc_list1_left'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_toc_list1_left',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_list1_left',
				'label'       => '第1リンクをセンター寄せにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_toc_list2_icon',
			array(
				'default'           => $defaults['st_toc_list2_icon'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_toc_list2_icon',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_list2_icon',
				'label'       => '第2リンクの数字を非表示',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_toc_list3_fontweight',
			array(
				'default'           => $defaults['st_toc_list3_fontweight'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_toc_list3_fontweight',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_list3_fontweight',
				'label'       => '第2リンクを太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_toc_list1_icon',
			array(
				'default'           => $defaults['st_toc_list1_icon'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_toc_list1_icon',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_list1_icon',
				'label'       => '数字をアイコンに変更',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_toc_list3_icon',
			array(
				'default'           => $defaults['st_toc_list3_icon'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_toc_list3_icon',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_list3_icon',
				'label'       => '第3リンク以降の数字（アイコン）を非表示にして並列',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_toc_webicon',
			array(
				'default'           => $defaults['st_toc_webicon'],
				'sanitize_callback' => 'sanitize_text_field',

			) );
		$wp_customize->add_control( 'st_toc_webicon',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_webicon',
				'label'       => __( '', 'affinger' ),
				'description' => '目次アイコン（※Unicode）',
				'type'        => 'option',
			) );

	
		$wp_customize->add_setting( 'st_toc_only_toc_fontweight',
			array(
				'default'           => $defaults['st_toc_only_toc_fontweight'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_toc_only_toc_fontweight',
			array(
				'section'     => 'st_panel_toc_sugoi',
				'settings'    => 'st_toc_only_toc_fontweight',
				'label'       => '第1階層のみの場合のリンクを太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

	
		if ( st_is_st_toc_enabled() ) {
			$wp_customize->add_setting( 'st_toc_list_style',
				array(
					'default'           => $defaults['st_toc_list_style'],
					'sanitize_callback' => 'st_sanitize_choices',
				) );
			$wp_customize->add_control( 'st_toc_list_style',
				array(
					'section'     => 'st_panel_toc_sugoi',
					'settings'    => 'st_toc_list_style',
					'label'       => 'デザイン',
					'description' => '※投稿ごとの設定が優先されます<br>※タイムラインチェックはてなは各カラー設定が反映されます',
					'type'        => 'radio',
					'choices'     => array(
						'default'        => 'デフォルト',
						'timeline'       => 'タイムライン',
						'timeline-count' => 'タイムライン（カウント）',
						'check'          => 'チェック',
						'question'       => 'はてな',
					),
				) );
		}

		/*コンタクトフォーム7送信ボタン*/
		$wp_customize->add_section('st_panel_contactform7btn', array(
			'title' => 'コンタクトフォーム7送信ボタン',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_contactform7btn_textcolor',
			array(
				'default'              => $defaults['st_contactform7btn_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_contactform7btn_textcolor',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_contactform7btn',
				'description' => '文字色',
				'settings'    => 'st_contactform7btn_textcolor',
			) ) );

		$wp_customize->add_setting( 'st_contactform7btn_bgcolor',
			array(
				'default'              => $defaults['st_contactform7btn_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_contactform7btn_bgcolor',
			array(
				'label'       => __( '', 'affinger' ),
				'section'     => 'st_panel_contactform7btn',
				'description' => '背景色',
				'settings'    => 'st_contactform7btn_bgcolor',
			) ) );

		/* プロフィールカード */
		$wp_customize->add_section('st_panel_author_profile', array( // 中パネル
			'title' => 'プロフィールカード',
			'panel' => 'st_panel_optioncolors',
			'description' => 'プロフィールカードはウィジェットにて挿入。内容は「ユーザー」&gt;「プロフィール」にて設定できます',
		));

		$wp_customize->add_setting( 'st_author_profile',
			array(
				'default'           => $defaults['st_author_profile'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_author_profile',
			array(
				'section'     => 'st_panel_author_profile',
				'settings'    => 'st_author_profile',
				'label'       => '旧プロフィールカードに変更',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_author_basecolor',
			array(
				'default'              => $defaults['st_author_basecolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_basecolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => 'ボーダー色',
			'settings'    => 'st_author_basecolor',
		) ) );

		$wp_customize->add_setting( 'st_author_bg_color',
			array(
				'default'              => $defaults['st_author_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_bg_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => '背景色',
			'settings'    => 'st_author_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_author_profile_header',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'st_author_profile_header_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_author_profile',
				'description' => 'ヘッダー画像（プロフィールカード）',
				'settings'    => 'st_author_profile_header',
			)
		) );

		$wp_customize->add_setting( 'st_author_profile_avatar',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'st_author_profile_avatar_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_author_profile',
				'description' => 'アバター画像（プロフィールカード）※150px以上の正方形の画像推奨',
				'settings'    => 'st_author_profile_avatar',
			)
		) );

		$wp_customize->add_setting( 'st_author_profile_avatar_shadow',
			array(
				'default'           => $defaults['st_author_profile_avatar_shadow'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_author_profile_avatar_shadow',
			array(
				'section'     => 'st_panel_author_profile',
				'settings'    => 'st_author_profile_avatar_shadow',
				'label'       => 'アバター画像に影をつける（プロフィールカード）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_author_basecolor_profile',
			array(
				'default'              => $defaults['st_author_basecolor_profile'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_basecolor_profile', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => 'ボーダー色（プロフィールカード）',
			'settings'    => 'st_author_basecolor_profile',
		) ) );

		$wp_customize->add_setting( 'st_author_bg_color_profile',
			array(
				'default'              => $defaults['st_author_bg_color_profile'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_bg_color_profile', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => '背景色（プロフィールカード）',
			'settings'    => 'st_author_bg_color_profile',
		) ) );

		$wp_customize->add_setting( 'st_author_text_color_profile',
			array(
				'default'              => $defaults['st_author_text_color_profile'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_text_color_profile', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => 'テキスト色（プロフィールカード）',
			'settings'    => 'st_author_text_color_profile',
		) ) );

		$wp_customize->add_setting( 'st_author_profile_shadow',
			array(
				'default'           => $defaults['st_author_profile_shadow'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_author_profile_shadow',
			array(
				'section'     => 'st_panel_author_profile',
				'settings'    => 'st_author_profile_shadow',
				'label'       => '影をつける（プロフィールカード）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_author_profile_radius',
			array(
				'default'           => $defaults['st_author_profile_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_author_profile_radius',
			array(
				'section'     => 'st_panel_author_profile',
				'settings'    => 'st_author_profile_radius',
				'label'       => '角丸にする（プロフィールカード）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_author_profile_btn_url',
			array(
				'default'           => $defaults['st_author_profile_btn_url'],
				'sanitize_callback' => 'esc_url_raw',
			) );
		$wp_customize->add_control( 'st_author_profile_btn_url_c',
			array(
				'section'     => 'st_panel_author_profile',
				'settings'    => 'st_author_profile_btn_url',
				'label'       => __( '', 'affinger' ),
				'description' => 'ボタンURL（例：http://example.com）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_author_profile_btn_text',
			array(
				'default'           => $defaults['st_author_profile_btn_text'],
				'sanitize_callback' => 'sanitize_text_field',
			) );
		$wp_customize->add_control( 'st_author_profile_btn_text_c',
			array(
				'section'     => 'st_panel_author_profile',
				'settings'    => 'st_author_profile_btn_text',
				'label'       => __( '', 'affinger' ),
				'description' => 'ボタンテキスト',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_author_profile_btn_text_color',
			array(
				'default'              => $defaults['st_author_profile_btn_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_profile_btn_text_color', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => 'ボタンテキスト色（プロフィールカード）',
			'settings'    => 'st_author_profile_btn_text_color',
		) ) );

		$wp_customize->add_setting( 'st_author_profile_btn_top',
			array(
				'default'              => $defaults['st_author_profile_btn_top'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_profile_btn_top', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => 'ボタン上部背景色（プロフィールカード）',
			'settings'    => 'st_author_profile_btn_top',
		) ) );

		$wp_customize->add_setting( 'st_author_profile_btn_bottom',
			array(
				'default'              => $defaults['st_author_profile_btn_bottom'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_profile_btn_bottom', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => 'ボタン下部背景色（プロフィールカード）',
			'settings'    => 'st_author_profile_btn_bottom',
		) ) );

		$wp_customize->add_setting( 'st_author_profile_btn_shadow',
			array(
				'default'              => $defaults['st_author_profile_btn_shadow'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_author_profile_btn_shadow', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_author_profile',
			'description' => 'ボタン影色（プロフィールカード）',
			'settings'    => 'st_author_profile_btn_shadow',
		) ) );

		/*一覧サムネイル画像の枠線*/
		$wp_customize->add_section('st_panel_thumbnail', array(
			'title' => 'サムネイル画像',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_thumbnail_bordercolor',
			array(
				'default'              => $defaults['st_thumbnail_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_thumbnail_bordercolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_thumbnail',
			'description' => '一覧のサムネイル画像の枠線',
			'settings'    => 'st_thumbnail_bordercolor',
		) ) );

		/*ページトップボタン*/
		$wp_customize->add_section('st_panel_pagetop', array(
			'title' => 'TOPに戻るボタン',
			'panel' => 'st_panel_optioncolors',
		));

		$wp_customize->add_setting( 'st_pagetop_img',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'pagetop_Image',
			array(
				'label'       => '',
				'section'     => 'st_panel_pagetop',
				'description' => '',
				'settings'    => 'st_pagetop_img',
			)
		) );

		$wp_customize->add_setting( 'st_pagetop_img_right',
			array(
				'default'           => $defaults['st_pagetop_img_right'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_pagetop_img_right_c',
			array(
				'section'     => 'st_panel_pagetop',
				'settings'    => 'st_pagetop_img_right',
				'label'       => '',
				'description' => 'right（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_pagetop_img_bottom',
			array(
				'default'           => $defaults['st_pagetop_img_bottom'],
				'sanitize_callback' => 'sanitize_int',
			) );
		$wp_customize->add_control( 'st_pagetop_img_bottom_c',
			array(
				'section'     => 'st_panel_pagetop',
				'settings'    => 'st_pagetop_img_bottom',
				'label'       => '',
				'description' => 'bottom（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_pagetop_bgcolor',
			array(
				'default'              => $defaults['st_pagetop_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_pagetop_bgcolor', array(
			'label'       => __( '', 'affinger' ),
			'section'     => 'st_panel_pagetop',
			'description' => '背景色',
			'settings'    => 'st_pagetop_bgcolor',
		) ) );

		/*ページトップボタンの位置*/
		$wp_customize->add_setting( 'st_pagetop_up',
			array(
				'default'           => $defaults['st_pagetop_up'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_pagetop_up',
			array(
				'label'       => 'TOPに戻るボタンの配置を上にする（スマホアンカー広告使用時用）',
				'section'     => 'st_panel_pagetop',
				'settings'    => 'st_pagetop_up',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*ページトップボタンを丸くする*/
		$wp_customize->add_setting( 'st_pagetop_circle',
			array(
				'default'           => $defaults['st_pagetop_circle'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_pagetop_circle',
			array(
				'section'     => 'st_panel_pagetop',
				'settings'    => 'st_pagetop_circle',
				'label'       => 'ページトップボタンを丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*ページトップボタンを非表示*/
		$wp_customize->add_setting( 'st_pagetop_hidden',
			array(
				'default'           => $defaults['st_pagetop_hidden'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_pagetop_hidden',
			array(
				'section'     => 'st_panel_pagetop',
				'settings'    => 'st_pagetop_hidden',
				'label'       => 'ページトップボタンを非表示',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*-------------------------------------------------------
		簡単設定
		-------------------------------------------------------*/

		$wp_customize->add_section( 'stpattern',
			array(
				'title'       => __( '全体カラー設定', 'affinger' ),
				'description' => '保存後、ブラウザを更新してください。',
				'priority'    => 0,
			) );

		_st_customization_add_color_controls( $wp_customize, 'stpattern', '' );

		$wp_customize->add_setting( 'st_theme_setting',
			array(
				'default'           => '',
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_theme_setting',
			array(
				'section'     => 'stpattern',
				'settings'    => 'st_theme_setting',
				'label'       => '簡単設定を使用する',
				'description' => '',
				'type'        => 'radio',
				'choices'     => array(
					'zentai'       => __( '(1)全体的に反映：有効化すると反映箇所のカラー変更ができなくなります', 'affinger' ),
					'menuonly'     => __( '(2)一部メニューのみに反映：有効化すると反映箇所のカラー変更ができなくなります', 'affinger' ),
					'defaultcolor' => __( '(3)初期値として設定：反映箇所のカラー初期値として登録されます', 'affinger' ),
					''             => __( '使用しない（管理画面で選択したカラーが初期値になります）', 'affinger' ),
				),
			) );
		$wp_customize->add_setting( 'st_customizer_reset',
			array(
				'default' => '',
				'sanitize_callback' => '__return_null',
			) );
		$wp_customize->add_control( new St_Customize_Button_Control( $wp_customize, 'st_customizer_reset', array(
			'label'        => 'カスターマイザーをリセットする',
			'section'      => 'stpattern',
			'description'  => '',
			'button_label' => 'リセット',
			'settings'     => 'st_customizer_reset',
		) ) );
		/*-------------------------------------------------------
		追加 CSS
		-------------------------------------------------------*/

		if ( st_is_customizer_enabled() ) {
		
		}
	}

	$st_settings = [];


	$other_settings = [
		'header_text',
		'site_icon',
		'custom_logo',
		'header_textcolor',
		'background_color',
		'header_video',
		'external_header_video',
		'header_image',
		'header_image_data',
		'background_image',
		'background_image_thumb',
		'background_preset',
		'background_position_x',
		'background_position_y',
		'background_size',
		'background_repeat',
		'background_attachment',
	];

	foreach ( $wp_customize->settings() as $id => $setting ) {
		if ( array_key_exists( $id, $default_settings ) && ! in_array( $id, $other_settings, true ) ) {
			continue;
		}

		$st_settings[] = $setting;
	}

	_st_customize_settings( $st_settings );
}

add_action( 'customize_register', 'st_customize_register' );

add_action( 'customize_register', 'st_headerfooter_logo' );

if (!function_exists('_st_customize_save_after')) {
    function _st_customize_save_after() {
    	set_theme_mod('_st_current_theme_setting', st_get_kantan_setting());
    }
}
add_action('customize_save_after', '_st_customize_save_after');

function st_headerfooter_logo() {
	return get_theme_mod( 'st_header_footer_logo' );
}

if ( ! function_exists( 'st_get_search_form_placeholder' ) ) {
	function st_get_search_form_placeholder() {
		$text = (string) get_theme_mod( 'st_search_form_text' );
		$text = ( $text !== '' ) ? $text : '';

		return $text;
	}
}

function _st_is_sticky_primary_menu_side_setting_active() {

	return has_nav_menu( 'primary-menu-side' );
}

function _st_get_sticky_menu_type() {
	$default = 'normal';

	if ( ! st_is_customizer_enabled() ) {
		return $default;
	}


	$st_sticky_menu = get_theme_mod( 'st_sticky_menu' );

	if ( $st_sticky_menu === '1' ) {
		return 'tracked';
	}

	if ( $st_sticky_menu === 'fixed' ) {
		return 'fixed';
	}

	return $default;
}

function _st_is_sticky_mobile_link_design_available() {
	if ( ! st_is_customizer_enabled() ) {
		return false;
	}


	if ( ! _st_is_sticky_primary_menu_side_setting_active() ) {
		return false;
	}

	if ( ! has_nav_menu( 'primary-menu-side' ) ) {
		return false;
	}


	if ( ! in_array( _st_get_sticky_menu_type(), array( 'fixed', 'tracked' ), true ) ) {
		return false;
	}


	$is_sticky_primary_menu_side_enabled = (bool) get_theme_mod( 'st_sticky_primary_menu_side' );

	return ( wp_is_mobile() && $is_sticky_primary_menu_side_enabled );
}

if ( ! function_exists( '_st_get_default_toc_list_style' ) ) {
	function _st_get_default_toc_list_style() {
		$list_style = get_theme_mod( 'st_toc_list_style' );

		if ( $list_style === false ) {
		
			$paper_style = get_theme_mod( 'st_toc_paper_style' );

			return ( $paper_style ) ? 'paper' : 'default';
		}

		return 'default';
	}
}

if ( ! function_exists( '_st_get_global_toc_list_style' ) ) {
	function _st_get_global_toc_list_style() {
		return get_theme_mod( 'st_toc_list_style', _st_get_default_toc_list_style() );
	}
}

if ( st_is_customizer_enabled() ) {
	function st_customize_css() {
		require( dirname( __FILE__ ) . '/st-themecss-variables.php' );

		?>
		<style type="text/css">
			<?php include( dirname( __FILE__ ) . '/st-themecss.php' ); ?>
		</style>
		<?php
	}

	function st_enqueue_customize_css() {
		wp_enqueue_style(
			'st-themecss',
			get_template_directory_uri() . '/st-themecss-loader.php',
			array( 'style' ),
			false,
			'all'
		);
	}

	function st_customize_js() {
	
		if ( _st_get_sticky_menu_type() === 'tracked' || _st_is_sticky_mobile_link_design_available() ) {
			wp_enqueue_script( 'ac-fixmenu', get_template_directory_uri() . '/js/ac-fixmenu.js', array() );
		}
	}

	if ( is_customize_preview() ||
	     st_should_output_style_element()
	) {
		add_action( 'wp_head', 'st_customize_css' );
	} else {
		add_action( 'wp_enqueue_scripts', 'st_enqueue_customize_css', PHP_INT_MAX );
	}

	add_action( 'wp_footer', 'st_customize_js' );

	function st_ajax_customizer_reset() {
		global $wp_customize;

		if ( ! $wp_customize->is_preview() ) {
			wp_send_json_error( new WP_Error( 'not_in_preview', 'Not in preview.' ) );
		}

		if ( ! check_ajax_referer( 'st_customizer_reset', 'nonce', false ) ) {
			wp_send_json_error( new WP_Error( 'invalid_nonce', 'Invalid Nonce.' ) );
		}

		foreach ( _st_customize_settings() as $setting ) {
			if ( $setting->type === 'theme_mod' ) {
				remove_theme_mod( $setting->id );
			} elseif ( $setting->type === 'option' ) {
				delete_option( $setting->id );
			}
		}

	
		$stylesheet = get_stylesheet();
		$headers    = get_posts(
			array(
				'post_type'  => 'attachment',
				'meta_key'   => '_wp_attachment_is_custom_header',
				'meta_value' => $stylesheet,
				'orderby'    => 'none',
				'nopaging'   => true,
			)
		);

		$lastUsedKey = '_wp_attachment_custom_header_last_used_' . $stylesheet;

		foreach ( $headers as $header ) {
			delete_post_meta( $header->ID, $lastUsedKey );
			delete_post_meta( $header->ID, '_wp_attachment_is_custom_header', $stylesheet );
		}

		wp_send_json_success();
	}

	add_action( 'wp_ajax_st_customizer_reset', 'st_ajax_customizer_reset' );
}
