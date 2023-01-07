<?php
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if (locate_template('st-is-ver-check.php') !== '') {
	require_once locate_template('st-is-ver-check.php');
	$st_is_ex    = st_is_ver_ex();
	$st_is_af    = st_is_ver_af();
	$st_is_st    = st_is_ver_st();
	$st_is_ex_af = st_is_ver_ex_af();
}

if (locate_template('st-plugin-support.php') !== '') {
	require_once locate_template('st-plugin-support.php');
}

if (locate_template('st-example.php') !== '') {
	require_once locate_template('st-example.php');
}

if (locate_template('st-affiliate-manager.php') !== '') {
	require_once locate_template('st-affiliate-manager.php');
}

if (locate_template('st-kanri.php') !== '') {
	require_once locate_template('st-kanri.php');
}

if (locate_template('st-block-style.php') !== '') {
	require_once locate_template('st-block-style.php');
}

if (locate_template('st-toc.php') !== '') {
	require_once locate_template('st-toc.php');
}

if (locate_template('st-card-ex.php') !== '') {
	require_once locate_template('st-card-ex.php');
}

if (locate_template('st-lazy-load.php') !== '') {
	require_once locate_template('st-lazy-load.php');
}

if (locate_template('st-replace-meta-box.php') !== '') {
	require_once locate_template('st-replace-meta-box.php');
}

if (locate_template('st-export-meta-box.php') !== '') {
	require_once locate_template('st-export-meta-box.php');
}

if (locate_template('st-theme-customization.php') !== '') {
	require_once locate_template('st-theme-customization.php');
}

if (locate_template('st-widgets.php') !== '') {
require_once locate_template('st-widgets.php');
}

if (locate_template('st-title.php') !== '') {
require_once locate_template('st-title.php');
}

if ( $st_is_ex ) {
	if (locate_template('st-taxonomy.php') !== '') {
		require_once locate_template('st-taxonomy.php');
	}
} else {
	if (locate_template('st-category.php') !== '') {
		require_once locate_template('st-category.php');
	}
}

if (locate_template('functions-amp.php') !== '') {
	require_once locate_template('functions-amp.php');
}

if (locate_template('st-structured-data.php') !== '') {
	require_once locate_template('st-structured-data.php');
}

if (locate_template('st-update.php') !== '') {
	require_once locate_template('st-update.php');
}

if ( trim( $GLOBALS['stdata238'] ) === '' && trim( $GLOBALS['stdata566'] ) === '' ) {
	require_once __DIR__ . '/vendor/scottmac/opengraph/OpenGraph.php';
}

if ( !function_exists( 'st_after_setup_theme' ) ) {
	function st_after_setup_theme() {
	
		$custom_bgcolor_defaults = array(
			'default-color' => '#f2f2f2',
		);
		add_theme_support( 'custom-background', $custom_bgcolor_defaults );
	
		add_theme_support( 'post-thumbnails' );
	
		add_theme_support( 'title-tag' );
	
		add_theme_support( 'automatic-feed-links' );
	
		if(trim($GLOBALS['stdata62']) !== ''){
			$heightpx = $GLOBALS['stdata62'];
		}else{
			$heightpx = 500;
		}
		if(trim($GLOBALS['stdata70']) !== ''){
			$headerwidthpx = $GLOBALS['stdata70'];
		}else{
			$headerwidthpx = 2200;
		}
		$custom_header = array(
			'random-default' => false,
			'width' => $headerwidthpx,
			'height' => $heightpx,
			'flex-height' => true,
			'flex-width' => false,
			'default-text-color' => '',
			'header-text' => false,
			'uploads' => true,
			'default-image' => '',
		);
		add_theme_support( 'custom-header', $custom_header );


	
		add_theme_support('custom-spacing');
	
		add_theme_support( 'custom-line-height' );
	
		add_theme_support( 'align-wide' );
	
		remove_theme_support( 'core-block-patterns' );
		remove_theme_support( 'block-templates' );
	
		$original_color_a = get_option( 'st-data460', '' ) !== '' ? get_option( 'st-data460' ) : '#00B900';
		$original_color_b = get_option( 'st-data461', '' ) !== '' ? get_option( 'st-data461' ) : '#f4fff4';
		$original_color_c = get_option( 'st-data462', '' ) !== '' ? get_option( 'st-data462' ) : '#F3E5F5';
		$original_color_d = get_option( 'st-data463', '' ) !== '' ? get_option( 'st-data463' ) : '#9E9D24';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Pale pink', 'affinger' ),
					'slug'  => 'pale-pink',
					'color' => ST_COLOR_PALE_PINK,
				),
				array(
					'name'  => __( 'Soft red', 'affinger' ),
					'slug'  => 'soft-red',
					'color' => ST_COLOR_SOFT_RED,
				),
				array(
					'name'  => __( 'Light grayish red', 'affinger' ),
					'slug'  => 'light-grayish-red',
					'color' => ST_COLOR_LIGHT_G_RED,
				),
				array(
					'name'  => __( 'Vivid yellow', 'affinger' ),
					'slug'  => 'vivid-yellow',
					'color' => ST_COLOR_VIVID_YELLOW,
				),
				array(
					'name'  => __( 'Very pale yellow', 'affinger' ),
					'slug'  => 'very-pale-yellow',
					'color' => ST_COLOR_VERY_PALE_YELLOW,
				),
				array(
					'name'  => __( 'Light green cyan', 'affinger' ),
					'slug'  => 'light-green-cyan',
					'color' => ST_COLOR_LIGHT_GREEN_CYAN,
				),
				array(
					'name'  => __( 'Pale cyan blue', 'affinger' ),
					'slug'  => 'pale-cyan-blue',
					'color' => ST_COLOR_PALE_CYAN_BLUE,
				),
				array(
					'name'  => __( 'Vivid cyan blue', 'affinger' ),
					'slug'  => 'vivid-cyan-blue',
					'color' => ST_COLOR_VIVID_CYAN_BLUE,
				),
				array(
					'name'  => __( 'Very light gray', 'affinger' ),
					'slug'  => 'very-light-gray',
					'color' => ST_COLOR_VERY_LIGHT_GRAY,
				),
				array(
					'name'  => __( 'Very dark gray', 'affinger' ),
					'slug'  => 'very-dark-gray',
					'color' => ST_COLOR_VERY_DARK_GRAY,
				),
				array(
					'name'  => __( 'White', 'affinger' ),
					'slug'  => 'white',
					'color' => ST_COLOR_WHITE,
				),
				array(
					'name'  => __( 'Original Color A', 'affinger' ),
					'slug'  => 'original-color-a',
					'color' => $original_color_a,
				),
				array(
					'name'  => __( 'Original Color B', 'affinger' ),
					'slug'  => 'original-color-b',
					'color' => $original_color_b,
				),
				array(
					'name'  => __( 'Original Color C', 'affinger' ),
					'slug'  => 'original-color-c',
					'color' => $original_color_c,
				),
				array(
					'name'  => __( 'Original Color D', 'affinger' ),
					'slug'  => 'original-color-d',
					'color' => $original_color_d,
				),
			)
		);
	
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name' => __( '小', 'affinger' ),
					'size' => .9,
					'slug' => 'small'
				),
				array(
					'name' => __( '標準', 'affinger' ),
					'size' => 1,
					'slug' => 'st-regular'
				),
				array(
					'name' => __( '大', 'affinger' ),
					'size' => 1.5,
					'slug' => 'large'
				),
				array(
					'name' => __( '超大', 'affinger' ),
					'size' => 3,
					'slug' => 'huge'
				)
			)
		);
	
		add_theme_support( 'disable-custom-font-sizes' );
	}
}
add_action( 'after_setup_theme', 'st_after_setup_theme' );

if ( !function_exists( 'st_enqueue_scripts' ) ) {
	function st_enqueue_scripts() {
		if ( function_exists( 'wp_use_widgets_block_editor' ) && wp_use_widgets_block_editor() ) {
			return;
		}

		wp_deregister_script( 'jquery' );

		wp_enqueue_script(
			'jquery',
			'//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
			array(),
			'1.11.3',
			false
		);

		if ( ( isset($GLOBALS['stdata398']) && $GLOBALS['stdata398'] === 'yes' ) && ( trim( $GLOBALS['stdata30'] ) === '' && trim( $GLOBALS['stdata266'] ) === '' ) ) {
		} else {
			wp_register_script(
				'slick',
				get_template_directory_uri() . '/vendor/slick/slick.js',
				array( 'jquery' ),
				'1.5.9',
				true
			);

			wp_enqueue_script( 'slick' );
		}

		if ( isset($GLOBALS['stdata64']) && $GLOBALS['stdata64'] === 'yes' ) {
			wp_enqueue_script(
				'smoothscroll',
				get_template_directory_uri() . '/js/smoothscroll.js',
				array('jquery')
			);
		}

		wp_enqueue_script( 'base', get_template_directory_uri() . '/js/base.js', array( 'jquery' ), false, true );

		wp_localize_script(
			'base',
			'ST',
			array(
				'ajax_url'              => admin_url( 'admin-ajax.php' ),
				'expand_accordion_menu' => ( $GLOBALS['stdata235'] === 'yes' ),
				'sidemenu_accordion'    => (bool) get_theme_mod( 'st_sidemenu_accordion' ),
				'is_mobile'             => wp_is_mobile(),
			)
		);

	
		if ( !st_is_mobile() && trim( $GLOBALS['stdata87'] ) === '' ) {
			wp_enqueue_script(
				'scroll',
				get_template_directory_uri() . '/js/scroll.js',
				array( 'jquery' ),
				false,
				true
			);
		}

		if ( st_is_background_video_available( 'youtube' ) ) {
			wp_enqueue_script(
				'st-youtube',
				get_template_directory_uri() . '/js/st-youtube.js',
				array( 'jquery' ),
				false,
				true
			);
		}

		if ( ! st_speed_on()
			|| ( trim( $GLOBALS['stdata415'] ) === '' && trim( $GLOBALS['stdata468'] ) !== '' )
		   ) {
			wp_enqueue_script(
				'st-copy-text',
				get_template_directory_uri() . '/js/st-copy-text.js',
				array( 'jquery' ),
				false,
				true
			);
		}

	
		if (
			( isset( $GLOBALS['stdata421'] ) && trim( $GLOBALS['stdata421'] ) === 'yes' )
			|| ( st_is_ver_ex() && trim( $GLOBALS['stdata587'] ) === 'yes' )
		) {
			wp_enqueue_script(
				'st-load-more',
				get_template_directory_uri() . '/js/st-load-more.js',
				array( 'jquery' ),
				false,
				true
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'st_enqueue_scripts' );

if ( isset( $GLOBALS['stdata126'] ) && $GLOBALS['stdata126'] === 'yes' ) {
	if ( ! function_exists( 'st_admin_register_styles' ) ) {
		function st_admin_register_styles() {
			wp_register_style(
				'st-admin-dashboard',
				get_theme_file_uri( 'css/admin/dashboard.css' ),
				array( 'dashboard' )
			);
		}
	}

	add_action( 'admin_init', 'st_admin_register_styles' );

	if ( ! function_exists( 'st_admin_enqueue_styles' ) ) {
		function st_admin_enqueue_styles( $hook_suffix ) {
			if ( $hook_suffix !== 'index.php' ) {
				return;
			}

			wp_enqueue_style( 'st-admin-dashboard' );
		}
	}

	add_action( 'admin_enqueue_scripts', 'st_admin_enqueue_styles' );
}

if ( ! function_exists( 'st_admin_enqueue_scripts' ) ) {
	function st_admin_enqueue_scripts( $hook_suffix ) {
		$data = [
		
			'affinger_type'             => $version = defined( 'AFFINGER_TYPE' ) ? strtolower( AFFINGER_TYPE ) : '',
			'affiliate_manager_enabled' => st_is_affiliate_manager_enabled(),
			'af_cpt_enabled'            => st_is_af_cpt_enabled(),
			'tag_plugin_enabled'        => st_is_tag_plugin_enabled(),
			'st_toc_enabled'            => st_is_st_toc_enabled(),
			'st_no_lazy_load_exists'    => st_is_st_no_lazy_laod_shortcode_exists(),
			'st_countdown_enabled'      => get_option( 'st-data419' ) !== 'yes',
			'st_rich_animation_enabled' => st_is_st_rich_animation_enabled(),
		];

		$json = json_encode( $data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT );

		wp_add_inline_script( 'jquery', 'ST = ' . $json );
	}
}
add_action( 'admin_enqueue_scripts', 'st_admin_enqueue_scripts' );

if ( !function_exists( '_st_get_google_font' ) ) {
	function _st_get_google_font() {
		$style = null;

		if ( trim( $GLOBALS['stdata49'] ) !== '') {
			$style = esc_url($GLOBALS['stdata49']);
		}

		return $style;
	}
}

if ( !function_exists( 'st_enqueue_styles' ) ) {
	function st_enqueue_styles() {
		$style_dependencies = array();

		wp_register_style(
			'normalize',
			get_template_directory_uri() . '/css/normalize.css',
			array(),
			'1.5.9',
			'all'
		);

		$style_dependencies[] = 'normalize';

		if ( isset( $GLOBALS["stdata400"] ) && $GLOBALS["stdata400"] === 'yes' ) {
			wp_register_style(
				'font-awesome',
				get_template_directory_uri() . '/css/fontawesome/css/font-awesome.min.css',
				array('normalize'),
				'4.7.0',
				'all'
			);

			$style_dependencies[] = 'font-awesome';
		}

		if ( ! st_speed_on() && isset( $GLOBALS["stdata400"] ) && $GLOBALS["stdata400"] === 'yes' ) {
			wp_register_style(
				'font-awesome-animation',
				get_template_directory_uri() . '/css/fontawesome/css/font-awesome-animation.min.css',
				array('normalize'),
				false,
				'all'
			);

			$style_dependencies[] = 'font-awesome-animation';
		}

		wp_register_style(
			'st_svg',
			get_template_directory_uri() . '/st_svg/style.css',
			array('normalize'),
			false,
			'all'
		);

		$style_dependencies[] = 'st_svg';

		if ( ( isset($GLOBALS['stdata398']) && $GLOBALS['stdata398'] === 'yes' ) && ( trim( $GLOBALS['stdata30'] ) === '' && trim( $GLOBALS['stdata266'] ) === '' ) ) {
		} else {
			wp_register_style(
				'slick',
				get_template_directory_uri() . '/vendor/slick/slick.css',
				array(),
				'1.8.0',
				'all'
			);

			wp_register_style(
				'slick-theme',
				get_template_directory_uri() . '/vendor/slick/slick-theme.css',
				array('slick'),
				'1.8.0',
				'all'
			);

			$style_dependencies[] = 'slick';
			$style_dependencies[] = 'slick-theme';
		}

		if ( isset( $GLOBALS["stdata430"] ) && $GLOBALS["stdata430"] === 'yes' ) {
			$googlefont_swap = '&display=swap';
		} else {
			$googlefont_swap = '';
		}

		if ( ( isset( $GLOBALS["stdata311"] ) && $GLOBALS["stdata311"] === 'roundedmplus1c' ) ||  ( isset( $GLOBALS["stdata98"] ) && $GLOBALS["stdata98"] === 'roundedmplus1c' ) ) {
			wp_register_style(
				'fonts-googleapis-roundedmplus1c',
				'//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:400,700&display=swap&subset=japanese'. $googlefont_swap,
				array(),
				false,
				'all'
			);

			$style_dependencies[] = 'fonts-googleapis-roundedmplus1c';
		}

		if ( ( isset( $GLOBALS["stdata311"] ) && $GLOBALS["stdata311"] === 'noto' ) ||  ( isset( $GLOBALS["stdata98"] ) && $GLOBALS["stdata98"] === 'noto' ) ) {
			wp_register_style(
				'fonts-googleapis-notosansjp',
				'//fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap&subset=japanese'. $googlefont_swap,
				array(),
				false,
				'all'
			);

			$style_dependencies[] = 'fonts-googleapis-notosansjp';
		}

		if ( trim( $GLOBALS['stdata42'] ) !== '' ) {
			wp_register_style(
				'fonts-googleapis-roboto500',
				'//fonts.googleapis.com/css2?family=Roboto:wght@500'. $googlefont_swap,
				array(),
				false,
				'all'
			);

			$style_dependencies[] = 'fonts-googleapis-roboto500';
		}

		if ( ( $custom_font = _st_get_google_font() ) !== null ) {
			wp_register_style(
				'fonts-googleapis-custom',
				$custom_font,
				array(),
				false,
				'all'
			);

			$style_dependencies[] = 'fonts-googleapis-custom';
		}

		wp_register_style(
			'style',
			get_template_directory_uri() . '/style.css',
			$style_dependencies,
			false,
			'all'
		);

		if ( is_child_theme() ) {
			wp_register_style(
				'child-style',
				get_stylesheet_uri(),
				array( 'style' ),
				false,
				'all'
			);

			wp_enqueue_style( 'child-style' );
		} else {
			wp_enqueue_style( 'style' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'st_enqueue_styles' );

if ( trim ( amp_is_amp() || $GLOBALS['stdata506'] ) === '' || ( defined( 'ST_LAZY_LOAD' ) && $GLOBALS['stdata326'] === 'yes' ) ) {
	add_filter( 'wp_lazy_loading_enabled', '__return_false' );
}

if ( ! function_exists( 'st_theme_menu_header_add' ) ) {
	function st_theme_menu_header_add(){
		global $wp_admin_bar;
		$my_theme = wp_get_theme(get_template());
		$theme_name = $my_theme->Name;

		$wp_admin_bar->add_menu( array(
			'id' => 'st_theme_menu',
			'title' => $theme_name . '管理',
			'href' => admin_url( 'admin.php?page=my-custom-admin')
		));
	}
}
if ( current_user_can( 'administrator' ) ) {
	add_action( 'wp_before_admin_bar_render', 'st_theme_menu_header_add', 10 );
}

if ( ! function_exists( 'st_post_id_header_add' ) ) {
	function st_post_id_header_add(){
		global $wp_admin_bar;
		$post_id = '';
		if( is_singular() ) {
			$post_id = 'ID ' . get_the_ID();
		}
		$wp_admin_bar->add_menu( array(
			'id' => 'st_post_id',
			'title' => $post_id,
		));
	}
}
add_action( 'wp_before_admin_bar_render', 'st_post_id_header_add', 10 );

if ( ! function_exists( 'st_top_edilt_menu_header_add' ) ) {
	function st_top_edilt_menu_header_add(){
		$edit_url = '';
		if ( trim( $GLOBALS["stdata9"] ) !== '' ) {
			$post_id = (int)$GLOBALS["stdata9"];
			if ( get_post( $post_id ) ) {
				$edit_url = admin_url() . 'post.php?post='. $post_id .'&action=edit';
			} else {
				$edit_url = '';
				return;
			}
		} else {
			return;
		}

		global $wp_admin_bar;

		$wp_admin_bar->add_menu( array(
			'id' => 'st_top_edit_menu',
			'title' => '固定記事トップ',
			'href' => $edit_url
		));
	}
	if ( current_user_can( 'administrator' ) ) {
		add_action( 'wp_before_admin_bar_render', 'st_top_edilt_menu_header_add', 10 );
	}
}

if ( ! st_speed_on() ) {
	if ( isset( $GLOBALS['stdata438'] ) && $GLOBALS['stdata438'] === 'yes' ) {
		function st_google_matelial_design() {
			echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">'. "\n";
		}
		add_action( 'wp_head', 'st_google_matelial_design' );
	}
}

if ( ! function_exists( 'st_customizerNotices' ) ) {
	$kantan_setting = get_theme_mod('st_theme_setting');
	if ( $kantan_setting && ( $kantan_setting === 'zentai' || $kantan_setting === 'menuonly' ) ){
		function st_customizerNotices()	{
			global $pagenow;
			if ( $pagenow != 'admin.php' ) {
				return;
			}

			$html  = '<div class="updated">';
			$html .= '  <p>カスタマイザーの「全体カラー設定」により一部のカラー及びデザイン変更が制限されています</p>';
			$html .= '</div>';

			echo $html;
		}
	add_action( 'admin_notices', 'st_customizerNotices' );
	}
}

if (!function_exists('st_auto_post_slug')) {
	function st_auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
		if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
			$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
		}

		return $slug;
	}

	if ( isset($GLOBALS['stdata4']) && $GLOBALS['stdata4'] === 'yes' ) {
		add_filter( 'wp_unique_post_slug', 'st_auto_post_slug', 10, 4 );
	}
}

if ( ! function_exists( '_st_getimagesize' ) ) {
	function _st_getimagesize( $filename, array &$imageinfo = null ) {
		static $sizes = array();

		$cache_key = hash( 'sha256', $filename );

		if ( $imageinfo === null && isset( $sizes[ $cache_key ] ) ) {
			return $sizes[ $cache_key ];
		}

		$size = getimagesize( $filename, $imageinfo );

		$sizes[ $cache_key ] = $size;

		return $size;
	}
}

if (!function_exists('st_custom_excerpt_length')) {
    function st_custom_excerpt_length($length) {
		if(trim($GLOBALS['stdata73']) !== ''){
			$excerptcount = $GLOBALS['stdata73'];
		}else{
			$excerptcount = 100;
		}

		return $excerptcount;
	}
}
add_filter( 'excerpt_length', 'st_custom_excerpt_length', 999 );

if ( ! function_exists( 'st_get_the_excerpt' ) ) {
	function st_get_the_excerpt( $post = null, $length = 100 ) {
		static $caches = [];

		$post      = get_post( $post );
		$cache_key = hash( 'sha256', serialize( [ $post, $length ] ) );
		$cache     = $caches[ $cache_key ] ?? null;

		if ( $cache !== null ) {
			return $cache;
		}

		$replace_filter = _st_function_replace_filter(
			'excerpt_length',
			'st_custom_excerpt_length',
			function () use ( $length ) {
				return $length;
			},
			999
		);

		$excerpt = $replace_filter( function () use ( $post ) {
			return apply_filters( 'the_excerpt', get_the_excerpt( $post ) );
		} );

		$caches[ $cache_key ] = $excerpt;

		return $excerpt;
	}
}

if ( ! function_exists( 'st_the_excerpt' ) ) {
	function st_the_excerpt( $post = null, $length = 100 ) {
		echo st_get_the_excerpt( $post, $length );
	}
}

if ( ! function_exists( 'st_has_post_thumbnail' ) ) {
	function st_has_post_thumbnail( $post = null ) {
		$has_post_thumbnail = has_post_thumbnail( $post );

		if ( ! st_is_ver_ex() ) {
			return $has_post_thumbnail;
		}

		$youtube_thumbnail_info = st_youtube_thumbnail_info( $post );
		$youtube_thumb_img      = $youtube_thumbnail_info['youtube_thumb_img'];
		$youtube_thumb_s_img    = $youtube_thumbnail_info['youtube_thumb_s_img'];
		$has_youtube_thumbnail  = ( $youtube_thumb_img !== '' || $youtube_thumb_s_img !== '' );

		return ( $has_youtube_thumbnail || $has_post_thumbnail );
	}
}

if ( $st_is_ex ) {
	if ( ! function_exists( 'st_youtube_transient_delete' ) ) {
		function st_youtube_transient_delete( $post_id ) {
			$transient_key = 'st_youtube_thumbnail_info_' . $post_id;

			delete_transient( $transient_key );
		}
	}

	add_action( 'save_post', 'st_youtube_transient_delete' );
}

if ( ! function_exists( 'st_youtube_thumbnail_info' ) ) {
	function st_youtube_thumbnail_info( $post = null ) {
		static $TRANSIENT_EXPIRATION = 60 * 60 * 24;

		$post          = get_post( $post );
		$post_id       = $post->ID;
		$transient_key = 'st_youtube_thumbnail_info_' . $post_id;

		$thumbnail_info = array(
			'post_id'             => '',
			'transient_key'       => '',
			'youtube_video_id'    => '',
			'youtube_thumb_url'   => '',
			'youtube_thumb_img'   => '',
			'youtube_thumb_s_url' => '',
			'youtube_thumb_s_img' => '',
			'youtube_video_url'   => '',
			'use_youtube_video'   => false,
		);

		if ( ! st_is_ver_ex() ) {
			return $thumbnail_info;
		}

		$cache = get_transient( $transient_key );

		if ( $cache !== false ) {
			return $cache;
		}

		$youtube_video_id  = trim( get_post_meta( $post_id, 'st_youtube_url', true ) );
		$use_youtube_video = ( get_post_meta( $post_id, 'st_youtube_eyecatch', true ) === 'yes' );

		if ( $youtube_video_id === '' ) {
		
			set_transient( $transient_key, $thumbnail_info, $TRANSIENT_EXPIRATION );

			return $thumbnail_info;
		}

		$youtube_thumb_url   = 'https://img.youtube.com/vi/' . $youtube_video_id . '/maxresdefault.jpg';
		$youtube_thumb_s_url = 'https://img.youtube.com/vi/' . $youtube_video_id . '/mqdefault.jpg';

	
		$youtube_thumb_exists = (bool) @file_get_contents( $youtube_thumb_url );

		if ( ! $youtube_thumb_exists ) {
			$youtube_thumb_url = $youtube_thumb_s_url;

		
			$youtube_thumb_exists = (bool) @file_get_contents( $youtube_thumb_url );
		}

		if ( ! $youtube_thumb_exists ) {
		
			set_transient( $transient_key, $thumbnail_info, $TRANSIENT_EXPIRATION );

			return $thumbnail_info;
		}

		$youtube_thumb_img   = '<img src="' . esc_url( $youtube_thumb_url ) . '" alt="" width="100%" height="auto" />';
		$youtube_thumb_s_img = '<img src="' . esc_url( $youtube_thumb_s_url ) . '" alt="" width="100%" height="auto" />';
		$youtube_video_url   = 'https://www.youtube.com/watch?v=' . $youtube_video_id;

		$thumbnail_info = array(
			'post_id'             => $post_id,
			'transient_key'       => $transient_key,
			'youtube_video_id'    => $youtube_video_id,
			'youtube_thumb_url'   => $youtube_thumb_url,
			'youtube_thumb_img'   => $youtube_thumb_img,
			'youtube_thumb_s_url' => $youtube_thumb_s_url,
			'youtube_thumb_s_img' => $youtube_thumb_s_img,
			'youtube_video_url'   => $youtube_video_url,
			'use_youtube_video'   => $use_youtube_video,
		);

	
		set_transient( $transient_key, $thumbnail_info, $TRANSIENT_EXPIRATION );

		return $thumbnail_info;
	}
}

if ( ! function_exists( 'st_has_additional_mobile_menu' ) ) {
	function st_has_additional_mobile_menu() {
		return (
			( trim( $GLOBALS["stdata81"] ) !== '' )
			|| ( trim( $GLOBALS["stdata82"] ) !== '' )
			|| ( trim( $GLOBALS["stdata83"] ) !== '' )
			|| ( trim( $GLOBALS["stdata84"] ) !== '' )
			|| ( trim( $GLOBALS["stdata81"] ) === '' && trim( $GLOBALS["stdata82"] ) === '' && trim( $GLOBALS["stdata83"] ) === '' && trim( $GLOBALS["stdata84"] ) === '' && ! wp_is_mobile() )
		);
	}
}

if ( ! function_exists( 'st_has_mobile_header_content' ) ) {
	function st_has_mobile_header_content() {
		return (
			st_has_additional_mobile_menu()        
			|| trim( $GLOBALS["stdata80"] ) === ''               
			|| trim( $GLOBALS["stdata479"] ) !== ''
			|| ( is_front_page() && ( trim ( $GLOBALS["stdata429"]) === '' ) )
			|| ( trim ($GLOBALS["stdata615"]) === '' )
			|| ( trim ($GLOBALS["stdata616"]) === '' )
		);
	}
}

if ( ! function_exists( 'st_has_mobile_header_content_exclude_menu' ) ) {
	function st_has_mobile_header_content_exclude_menu() {
		return (
			trim( $GLOBALS["stdata80"] ) !== ''        
			&&
			(
				st_has_additional_mobile_menu()        
				|| trim( $GLOBALS["stdata479"] ) !== ''
			)
		);
	}
}

if ( ! function_exists( 'st_has_header_content' ) ) {
	function st_has_header_content() {
	
		$show_logo_phrase = ( trim( $GLOBALS["stdata101"] ) === '' || trim( $GLOBALS["stdata102"] ) === '' );

	
		if ( is_front_page() ) {
			$show_logo_phrase = ( trim( $GLOBALS["stdata429"] ) === '' && $show_logo_phrase );
		}

		return (
			$show_logo_phrase
			|| ( is_active_sidebar( 8 ) )              
			|| ( trim( $GLOBALS["stdata42"] ) !== '' ) 
			|| ( trim( $GLOBALS["stdata43"] ) !== '' ) 
			|| ( trim( $GLOBALS["stdata428"] ) !== '' )
		);
	}
}

if ( ! function_exists( 'st_is_header_nav_enabled' ) ) {
	function st_is_header_nav_enabled() {
		if ( ! st_has_mobile_header_content() ) {
			return false;
		}

	
		return true;
	}
}

if ( ! function_exists( 'st_header_sitetitle' ) ) {
	function st_header_sitetitle(){
		if ( ( wp_is_mobile() && trim($GLOBALS['stdata615']) === '' ) || ( ! wp_is_mobile() && trim($GLOBALS['stdata101']) === '' ) ) {
			return true;
		}
		return false;
	}
}

if ( ! function_exists( 'st_header_catchphrase' ) ) {
	function st_header_catchphrase(){
		if ( ( wp_is_mobile() && trim($GLOBALS['stdata616']) === '' ) || ( ! wp_is_mobile() && trim($GLOBALS['stdata102']) === '' ) ) {
			return true;
		}
		return false;
	}
}

if ( ! function_exists( 'st_header_logo' ) ) {
	function st_header_logo(){
		if ( wp_is_mobile() && get_option( 'st_mobile_logo' ) ) {
			return get_option( 'st_mobile_logo' );
		} elseif ( ! wp_is_mobile() && get_option( 'st_logo_image' ) ) {
			return get_option( 'st_logo_image' );
		}
		
		return false;
	}
}

if ( ! function_exists( 'st_comment_open' ) ) {
	function st_comment_open(){
		global $post;
		if ( isset( $post->comment_status ) ) {
			return $post->comment_status == 'open';
		}
		return false;
	}
}

if ( ! function_exists( 'st_get_extended' ) ) {
	function st_get_extended( $post = null, $more_link_text = null ) {
		$extended = array(
			'main'      => '',
			'extended'  => '',
			'more_text' => '',
		);

		$_post = get_post( $post );

		if ( ! ( $_post instanceof WP_Post ) ) {
			return $extended;
		}

		if ( post_password_required( $_post ) ) {
			$extended['main'] = get_the_password_form( $_post );

			return $extended;
		}

		$elements = generate_postdata( $_post );

		if ( count( $elements['pages'] ) > 1 ) {
			$extended['main'] = implode( '', $elements['pages'] );

			return $extended;
		}

		$content               = $elements['pages'][0];
		$extended['more_text'] = $more_link_text;

		if ( $extended['more_text'] === null ) {
			$extended['more_text'] = sprintf(
				'<span aria-label="%1$s">%2$s</span>',
				sprintf(
					__( 'Continue reading %s' ),
					the_title_attribute(
						array(
							'echo' => false,
							'post' => $_post,
						)
					)
				),
				__( '(more&hellip;)' )
			);
		}

		if ( preg_match( '/<!--more(.*?)?-->/', $content, $matches ) ) {
			if ( has_block( 'more', $content ) ) {
				$content = preg_replace( '/<!-- \/?wp:more(.*?) -->/', '', $content );
			}

			$content = explode( $matches[0], $content, 2 );

			if ( ! empty( $matches[1] ) ) {
				$extended['more_text'] = strip_tags( wp_kses_no_null( trim( $matches[1] ) ) );
			}
		} else {
			$content = array( $content );
		}

		$extended['main'] = $content[0];

		if ( count( $content ) > 1 ) {
			$extended['main']     = force_balance_tags( $extended['main'] );
			$extended['extended'] = '<span id="more-' . $_post->ID . '"></span>' . $content[1];
		}

		return $extended;
	}
}

if ( ! function_exists( 'st_the_content' ) ) {
	function st_the_content( $context = 'general', $more_link_text = null, $strip_teaser = false ) {
		ob_start();

		the_content( $more_link_text, $strip_teaser );

		$content = ob_get_clean();
		$context = (array) $context;
		$content = apply_filters( 'st_the_content', $content, $context );

		echo $content;
	}
}

if ( ! function_exists( '_st_any_in_array' ) ) {
	function _st_any_in_array( array $needles, array $heystack ) {
		$_heystack = $heystack;

		sort( $_heystack );

		foreach ( $needles as $needle ) {
			$_needle = (array) $needle;

			sort( $_needle );

			if ( array_intersect( $_needle, $heystack ) === $_needle ) {
				return true;
			}
		}

		return false;
	}
}

if ( ! function_exists( 'st_insert_content_ads' ) ) {
	function st_insert_content_ads( $content, array $context = array( 'general' ) ) {
		static $cache = array();

		sort( $context );

		$context   = array_unique( $context );
		$cache_key = hash( 'sha256', serialize( array( $content, $context ) ) );

		if ( isset( $cache[ $cache_key ] ) ) {
			echo $cache[ $cache_key ];
		}

	
		$target_contexts = array(
			array( 'single', 'main' ),
			array( 'page', 'main' ),
			'topin',
		);

		if ( amp_is_amp() || ! _st_any_in_array( $target_contexts, $context ) ) {
			$cache[ $cache_key ] = $content;

			return $content;
		}

	
		if ( st_is_ver_ex() ) {

		} else {
			$ad_html              = trim( stripslashes( get_option( 'st-data312', '' ) ) );
			$insert_ads_into_post = (bool) get_option( 'st-data313', '' );
			$insert_ads_into_page = (bool) get_option( 'st-data314', '' );
			$before_1st           = (bool) get_option( 'st-data315', '' );
			$before_2nd           = (bool) get_option( 'st-data316', '' );
			$before_3rd           = (bool) get_option( 'st-data317', '' );
			$before_4th           = (bool) get_option( 'st-data318', '' );
			$before_5th           = (bool) get_option( 'st-data319', '' );
		}

	
		$is_single = is_single();
		$is_page   = is_page();
		$is_home   = is_home();
		$is_topin  = in_array( 'topin', $context, true );

	
		$inserted_page_id_on_front = (int) get_option( 'st-data9', '' );
		$insert_page_on_front      = ( $inserted_page_id_on_front > 0 );
		$page_id_on_front          = (int) get_option( 'page_on_front' );
		$show_page_on_front        = ( get_option( 'show_on_front' ) === 'page' && ( $page_id_on_front > 0 ) );
		$post_id                   = ( $is_home && $insert_page_on_front ) ? $inserted_page_id_on_front : get_queried_object_id();

	
		$show_ads_on_page = true;
	
		$hide_ads = ( $is_single || $is_page || ( $is_home && $insert_page_on_front ) )
			? (bool) get_post_meta( $post_id, 'koukoku_set', true )
			: false;

	
		$insert_ads = ( $is_topin && $is_home && $insert_page_on_front && $show_ads_on_page && ! $hide_ads && $insert_ads_into_page ) ||
		              ( is_front_page() && $show_page_on_front && $show_ads_on_page && ! $hide_ads && $insert_ads_into_page ) ||
		              ( $is_single && ! $hide_ads && $insert_ads_into_post ) ||
		              ( $is_page && $show_ads_on_page && ! $hide_ads && $insert_ads_into_page );

		if ( st_is_ver_ex() ) {


		} else {

			$ad_html              = trim( stripslashes( get_option( 'st-data312', '' ) ) );
			$insert_ads_into_post = (bool) get_option( 'st-data313', '' );
			$insert_ads_into_page = (bool) get_option( 'st-data314', '' );
			$before_1st           = (bool) get_option( 'st-data315', '' );
			$before_2nd           = (bool) get_option( 'st-data316', '' );
			$before_3rd           = (bool) get_option( 'st-data317', '' );
			$before_4th           = (bool) get_option( 'st-data318', '' );
			$before_5th           = (bool) get_option( 'st-data319', '' );

			$is_single = is_single();
			$is_page   = is_page();
			$is_home   = is_home();
			$is_topin  = in_array( 'topin', $context, true );

			$inserted_page_id_on_front = (int) get_option( 'st-data9', '' );
			$insert_page_on_front      = ( $inserted_page_id_on_front > 0 );
			$page_id_on_front          = (int) get_option( 'page_on_front' );
			$show_page_on_front        = ( get_option( 'show_on_front' ) === 'page' && ( $page_id_on_front > 0 ) );
			$post_id                   = ( $is_home && $insert_page_on_front ) ? $inserted_page_id_on_front : get_queried_object_id();

			$show_ads_on_page = true;

			$hide_ads         = ( $is_single || $is_page || ( $is_home && $insert_page_on_front ) )
				? (bool) get_post_meta( $post_id, 'koukoku_set', true )
				: false;

			$insert_ads = ( $is_topin && $is_home && $insert_page_on_front && $show_ads_on_page && ! $hide_ads && $insert_ads_into_page ) ||
						  ( is_front_page() && $show_page_on_front && $show_ads_on_page && ! $hide_ads && $insert_ads_into_page ) ||
						  ( $is_single && ! $hide_ads && $insert_ads_into_post ) ||
						  ( $is_page && $show_ads_on_page && ! $hide_ads && $insert_ads_into_page );

			if ( $ad_html === '' || ! $insert_ads ) {
				$cache[ $cache_key ] = $content;

				return $content;
			}

			$ad_html  = '<div class="st-h-ad">' . $ad_html . '</div>';

			$excluded_classes = array(
				'st-cardbox-t',
			);

			$befores = array(
				1 => $before_1st,
				2 => $before_2nd,
				3 => $before_3rd,
				4 => $before_4th,
				5 => $before_5th,
			);

			$current_count = 0;
			$pattern       = <<<REGEXP
<(?<type>h2)(?<attr>(?:.*?\sclass\s*=\s*(?<quote>["'])(?<class>.*?)\k<quote>)?[^>]*)>(?<content>[\s\S]*?)</\k<type>>
REGEXP;

			$content = preg_replace_callback(
				'!' . $pattern . '!',
				function ( $matches ) use ( $ad_html, $excluded_classes, $befores, &$current_count ) {
					if ( $current_count >= 5 ) {
						return $matches[0];
					}

					$classes = array_map( 'trim', explode( ' ', $matches['class'] ) );

					if ( _st_any_in_array( $excluded_classes, $classes ) ) {
						return $matches[0];
					}

					$current_count ++;

					if ( ! $befores[ $current_count ] ) {
						return $matches[0];
					}

					$h_html = $ad_html .
							  '<' . $matches['type'] . $matches['attr'] . '>' . $matches['content'] . '</' . $matches['type'] . '>';

					return $h_html;
				},
				$content
			);

		}

		$cache[ $cache_key ] = $content;

		return $content;
	}
}
add_filter( 'st_the_content', 'st_insert_content_ads', PHP_INT_MAX, 2 );


if ( ! function_exists( '_st_wp_specialchars' ) ) {
	function _st_wp_specialchars( $string, $quote_style = ENT_NOQUOTES, $charset = false, $double_encode = false ) {
		$string = (string) $string;

		if ( strlen( $string ) === 0 ) {
			return '';
		}

		if ( ! preg_match( '/[&<>"\']/', $string ) ) {
			return $string;
		}

		if ( empty( $quote_style ) ) {
			$quote_style = ENT_NOQUOTES;
		} elseif ( ! in_array( $quote_style, array( 0, 2, 3, 'single', 'double' ), true ) ) {
			$quote_style = ENT_QUOTES;
		}

		if ( ! $charset ) {
			static $_charset = null;

			if ( ! isset( $_charset ) ) {
				$alloptions = wp_load_alloptions();
				$_charset   = isset( $alloptions['blog_charset'] ) ? $alloptions['blog_charset'] : '';
			}

			$charset = $_charset;
		}

		if ( in_array( $charset, array( 'utf8', 'utf-8', 'UTF8' ) ) ) {
			$charset = 'UTF-8';
		}

		$_quote_style = $quote_style;

		if ( $quote_style === 'double' ) {
			$quote_style  = ENT_COMPAT;
			$_quote_style = ENT_COMPAT;
		} elseif ( $quote_style === 'single' ) {
			$quote_style = ENT_NOQUOTES;
		}

		if ( ! $double_encode ) {
			$string = wp_kses_normalize_entities( $string );
		}

		$parts          = preg_split( '!(<[^>]*(?:>|$))!', $string, - 1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY );
		$escaped_string = '';

		foreach ( $parts as $part ) {
			if ( preg_match( '!^(<i\s+[^>]*?class\s*=\s*["\'].*?["\'][^>]*>|</i>)$!u', $part ) ) {
				$escaped_string .= $part;
			} else {
				$escaped_string .= @htmlspecialchars( $part, $quote_style, $charset, $double_encode );
			}
		}

		if ( $_quote_style === 'single' ) {
			$escaped_string = str_replace( "'", '&#039;', $escaped_string );
		}

		return $escaped_string;
	}
}

if ( ! function_exists( 'st_esc_html_i' ) ) {
	function st_esc_html_i( $text ) {
		$safe_text = wp_check_invalid_utf8( $text );
		$safe_text = _st_wp_specialchars( $safe_text, ENT_QUOTES );

		return apply_filters( 'esc_html', $safe_text, $text );
	}
}

if ( ! function_exists( 'st_get_template_part' ) ) {
	function st_get_template_part( $slug, $name = null, array $vars = array() ) {
		do_action( 'get_template_part_' . $slug, $slug, $name );

		$templates = array();
		$name      = (string) $name;

		if ( $name !== '' ) {
			$templates[] = $slug . '-' . $name . '.php';
		}

		$templates[] = $slug . '.php';

		st_locate_template( $templates, true, false, $vars );
	}
}

if ( ! function_exists( 'st_locate_template' ) ) {
	function st_locate_template( $template_names, $load = false, $require_once = true, array $vars = array() ) {
		$located = locate_template( $template_names, false );

		if ( $load && $located !== '' ) {
			st_load_template( $located, $require_once, $vars );
		}

		return $located;
	}
}

if ( ! function_exists( 'st_load_template' ) ) {
	function st_load_template( $_template_file, $require_once = true, array $_vars = array() ) {
		global $posts, $post, $wp_did_header, $wp_query, $wp_rewrite, $wpdb, $wp_version, $wp, $id, $comment, $user_ID;

		if ( is_array( $wp_query->query_vars ) ) {
			extract( $wp_query->query_vars, EXTR_SKIP );
		}

		if ( isset( $s ) ) {
			$s = esc_attr( $s );
		}

		extract( $_vars, EXTR_SKIP );

		if ( $require_once ) {
			require_once $_template_file;
		} else {
			require $_template_file;
		}
	}
}

if ( !function_exists( 'st_custom_excerpt_more' ) ) {
	function st_custom_excerpt_more( $more ) {
		return ' ... ';
	}
}
add_filter( 'excerpt_more', 'st_custom_excerpt_more' );

if ( !function_exists( 'st_is_mobile' ) ) {
	function st_is_mobile() {
		$use_w3tc_settings = trim( $GLOBALS['stdata394'] ) !== '' &&
		                     is_callable( array( 'W3TC\Dispatcher', 'component' ) );

		if ( $use_w3tc_settings ) {
			$mobile = W3TC\Dispatcher::component( 'Mobile_UserAgent' );

			if ( $mobile !== null ) {
				return ( $mobile->get_group() !== false );
			}
		}

		$useragents = array(
			'iPhone',
			'iPod',
			'Android.*Mobile',
			'Windows.*Phone',
			'dream',
			'CUPCAKE',
			'blackberry9500',
			'blackberry9530',
			'blackberry9520',
			'blackberry9550',
			'blackberry9800',
			'webOS',
			'incognito',
			'webmate'

		);

		$pattern = '/' . implode( '|', $useragents ) . '/iu';
		$ua      = isset( $_SERVER['HTTP_USER_AGENT'] ) ? $_SERVER['HTTP_USER_AGENT'] : '';

		return (bool) preg_match( $pattern, $ua );
	}
}

if ( !function_exists( 'st_title_limit' ) ) {
	function st_title_limit( $is_fullsize_text ) {
		global $post;
		if ( $is_fullsize_text ) {
			if( mb_strlen( $post->post_title ) > 27 ) {
				$title= mb_substr( $post->post_title,0,27 ) ;
				echo $title . '...';
			} else {
				echo $post->post_title;
			}
		} else {
			echo $post->post_title;
		}
	}
}

if ( !function_exists( 'st_searchform' ) ) {
	function st_searchform(  ) {
		ob_start();

		get_template_part( 'searchform' );

		return ob_get_clean();
	}
	add_shortcode( '検索', 'st_searchform' );
}

if ( $st_is_ex ) {
	if ( ! function_exists( 'st_pre_get_posts_for_search' ) ) {
		function st_pre_get_posts_for_search( WP_Query $wp_query ) {
			if ( is_admin() || ! is_search() ) {
				return;
			}

			$excluded_post_id = get_option( 'st-data485', '' );
			$excluded_cat_id  = get_option( 'st-data486', '' );
			$excluded_tag_id  = get_option( 'st-data487', '' );

			$excluded_post_ids = wp_parse_id_list( $excluded_post_id );
			$excluded_cat_ids  = _st_parse_term_id_string( $excluded_cat_id )[0];
			$excluded_tag_ids  = _st_parse_term_id_string( $excluded_tag_id, 'post_tag' )[0];

			$merge_ids = function ( array ...$arrays ) {
				return array_unique( array_merge( ...$arrays ) );
			};

			$post__not_in     = $merge_ids( $wp_query->get( 'post__not_in', array() ), $excluded_post_ids );
			$category__not_in = $merge_ids( $wp_query->get( 'category__not_in', array() ), $excluded_cat_ids );
			$tag__not_in      = $merge_ids( $wp_query->get( 'tag__not_in', array() ), $excluded_tag_ids );

			$wp_query->set( 'post__not_in', $post__not_in );
			$wp_query->set( 'category__not_in', $category__not_in );
			$wp_query->set( 'tag__not_in', $tag__not_in );
		}
	}
	add_action( 'pre_get_posts', 'st_pre_get_posts_for_search', 11 );
}

if ( !function_exists( 'st_my_content_shordcode' ) ) {
	function st_my_content_shordcode(  ) {
		ob_start();

		echo '<div class="st-my-content">';
		get_template_part( 'st-mycontent' );
		echo '</div>';

		return ob_get_clean();
	}
	add_shortcode( 'myct', 'st_my_content_shordcode' );
}

if ( !function_exists( 'st_my_content_2_shordcode' ) ) {
	function st_my_content_2_shordcode(  ) {
		ob_start();

		echo '<div class="st-my-content st-my-content-2">';
		get_template_part( 'st-mycontent-2' );
		echo '</div>';

		return ob_get_clean();
	}
	add_shortcode( 'myct2', 'st_my_content_2_shordcode' );
}

if ( !function_exists( 'st_sns_btn_shordcode' ) ) {
	function st_sns_btn_shordcode(  ) {
		ob_start();

		echo '<div class="st-sns-btn-shordcode">';
		if ( is_front_page() ){
			get_template_part( 'sns-top' );
		} elseif ( is_archive() ){
			get_template_part( 'sns-taxonomy' );
		} elseif ( is_singular() ) {
			get_template_part( 'sns' );
		}
		echo '</div>';

		return ob_get_clean();
	}
	add_shortcode( 'sns-btn', 'st_sns_btn_shordcode' );
}

if ( !function_exists( 'st_copy_url_btn' ) ) {
	function st_copy_url_btn(  ) {
		ob_start();

		get_template_part( 'st-copy-btn' );

		return ob_get_clean();
	}
	add_shortcode( 'st-copy-url-btn', 'st_copy_url_btn' );
}

if ( ! function_exists( '_st_store_global_query' ) ) {
	function _st_store_global_query(array $stack = []) {
		global $wp_query, $post, $pages, $page, $numpages, $multipage, $more;

		$stack[] = compact('wp_query', 'post', 'pages', 'page', 'numpages', 'multipage', 'more');

		return $stack;
	}
}

if ( ! function_exists( '_st_restore_global_query' ) ) {
	function _st_restore_global_query(array $stack = []) {
		global $wp_query, $post, $pages, $page, $numpages, $multipage, $more;

		$last = array_pop($stack);

		extract($last, EXTR_OVERWRITE);

		return $stack;
	}
}

if ( ! function_exists( '_st_stack_create' ) ) {
	function _st_stack_create() {
		static $stack = array();

		return array(
			'get'    => function ( $name = null ) use ( &$stack ) {
				$count        = count( $stack );
				$current_vars = ( $count > 0 ) ? $stack[ $count - 1 ] : array();

				if ( $name === null ) {
					return $current_vars;
				}

				return isset( $current_vars[ $name ] ) ? $current_vars[ $name ] : null;
			},
			'set'    => function ( $name_or_vars = null, $value = null ) use ( &$stack ) {
				$argc = count( func_get_args() );

				if ( $argc === 0 ) {
					return;
				}

				if ( $argc === 1 ) {
					$vars = $name_or_vars;
				} else {
					$count                         = count( $stack );
					$current_vars                  = ( $count > 0 ) ? $stack[ $count - 1 ] : array();
					$current_vars[ $name_or_vars ] = $value;
					$vars                          = $current_vars;
				}

				array_pop( $stack );

				$stack[] = $vars;
			},
			'length' => function () use ( &$stack ) {
				return count( $stack );
			},
			'push'   => function ( array $vars ) use ( &$stack ) {
				$stack[] = $vars;
			},
			'pop'    => function () use ( &$stack ) {
				return array_pop( $stack );
			},
		);
	}
}

if ( ! function_exists( '_st_stack_get_tab_stack' ) ) {
	function _st_stack_get_tab_stack() {
		$stack = null;

		if ( $stack !== null ) {
			return $stack;
		}

		$stack = _st_stack_create();

		return $stack;
	}
}

if ( ! function_exists( '_st_counter_create' ) ) {
	function _st_counter_create() {
		$count = 0;

		return array(
			'get'       => function () use ( &$count ) {
				return $count;
			},
			'increment' => function () use ( &$count ) {
				$count ++;
			},
			'decrement' => function () use ( &$count ) {
				$count --;
			},
			'reset'     => function () use ( &$count ) {
				$count = 0;
			},
		);
	}
}

if ( ! function_exists( '_st_counter_get_tab_counter' ) ) {
	function _st_counter_get_tab_counter() {
		static $counter = null;

		if ( $counter !== null ) {
			return $counter;
		}

		$counter = _st_counter_create();

		return $counter;
	}
}

if ( ! function_exists( '_st_function_without_filter' ) ) {
	function _st_function_without_filter( $tag, $function_to_remove, $priority = 10 ) {
		return function ( $callable ) use ( $tag, $function_to_remove, $priority ) {
			remove_filter( $tag, $function_to_remove, $priority );

			$result = $callable();

			add_filter( $tag, $function_to_remove, $priority );

			return $result;
		};
	}
}

if ( ! function_exists( '_st_function_replace_filter' ) ) {
	function _st_function_replace_filter( $tag, $function_to_replace, $function, $priority = 10 ) {
		return function ( $callable ) use ( $tag, $function_to_replace, $priority, $function ) {
			$without_filter = _st_function_without_filter( $tag, $function_to_replace, $priority );

			return $without_filter( function () use ( $tag, $priority, $function, $callable ) {
				add_filter( $tag, $function, $priority );

				$result = $callable();

				remove_filter( $tag, $function, $priority );

				return $result;
			} );
		};
	}
}

if ( ! function_exists( '_st_query_calculate_offset' ) ) {
	function _st_query_calculate_offset( WP_Query $query ) {
		$posts_per_page = (int) $query->get( 'posts_per_page', get_option( 'posts_per_page', '10' ) );

		if ( $posts_per_page === - 1 ) {
			return 0;
		}

		$offset = $query->get( 'offset' );

		if ( $offset !== '' ) {
			return absint( $offset );
		}

		$paged          = absint( $query->get( 'paged', '1' ) );
		$paged          = min( max( 1, $paged ), $query->max_num_pages );
		$posts_per_page = absint( $query->get( 'posts_per_page', get_option( 'posts_per_page', '10' ) ) );

		return ( $paged - 1 ) * $posts_per_page;
	}
}

if ( ! function_exists( '_st_query_has_next_page' ) ) {
	function _st_query_has_next_page( WP_Query $query ) {
		if ( ! $query->have_posts() ) {
			return false;
		}

		$paged = max( 1, absint( $query->get( 'paged', '1' ) ) );

		return ( $paged < $query->max_num_pages );
	}
}

if ( ! function_exists( '_st_pass_through_shortcode' ) ) {
	function _st_pass_through_shortcode( $atts, $content = null ) {
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return $content;
	}
}

if ( !function_exists( 'st_designfont_c' ) ) {
	function st_designfont_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontsize'        => '',
			'color'  => '',
			'textshadow'  => '#424242',
			'webfont'  => 'on',
			'fontweight'         => 'bold',
			'margin'   => '0 0 20px 0',
			'fontawesome'  => '',
			'webicon'  => '',
			'myclass'  => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$fontsize_css  = ( $fontsize !== '' ) ? 'font-size:' . (int) $fontsize . '%;' : '';
		$fontweight_css  = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
		$color_css  = ( $color !== '' ) ? 'color: ' . $color . ';' : '';
		$textshadow_css  = ( $textshadow !== '' ) ? 'text-shadow:1px 1px 1px '.$textshadow.';' : '';
		$webfont_class  = ( $webfont !== '' ) ? 'st-web-font ' : '';
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';
		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . '" aria-hidden="true"></i>' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<p class="st-designfont '. esc_attr( $webfont_class . $myclass_class ) .'" style="' . esc_attr( $fontsize_css . $color_css . $textshadow_css . $fontweight_css . $margin_css ) . '">' . $fontawesome_html  . $content . '</p>';
	}
}
add_shortcode('st-designfont','st_designfont_c');

if ( !function_exists( 'st_google_icon_c' ) ) {
	function st_google_icon_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontsize'        => '',
			'color'  => '',
			'googleicon'  => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$fontsize_css  = ( $fontsize !== '' ) ? 'font-size:' . (int) $fontsize . '%;' : '';
		$color_css  = ( $color !== '' ) ? 'color: ' . $color . ';' : '';
		$googleicon_html = ( $googleicon !== '' ) ? '<i class="material-icons" style="'. esc_attr( $fontsize_css . $color_css ) .'">'. esc_attr( $googleicon ) .'</i>' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return $googleicon_html;
	}
}
add_shortcode('st-google-icon','st_google_icon_c');

if ( $st_is_ex_af ) {
	if ( !function_exists( 'st_rank_c' ) ) {
		function st_rank_c( $atts, $content = null ) {
			$atts = shortcode_atts( array(
				'rankno'    => '',
				'bgcolor' => '#fafafa',
				'color'   => '#000000',
				'bordercolor' => '',
				'radius'   => '',
				'star' => '',
			), $atts );

			extract( array_map( 'trim', $atts ), EXTR_SKIP );

			$rankno_int   = ( $rankno !== '' ) ? (int) $rankno : '';
			$bgcolor_css = ( $bgcolor !== '' ) ? 'padding-left:10px;background-color:' . $bgcolor . ';' : '';
			$color_css   = ( $color !== '' ) ? 'color:' . $color . ';' : '';
			$bordercolor_css        = ( $bordercolor !== '' ) ? 'border-bottom:solid 1px ' . $bordercolor . ';' : '';
			$radius_css  = ( $radius !== '' ) ? 'border-radius: ' . $radius . 'px;' : '';
			$marginbottom_css  = ( ( $bgcolor !== '' ) || ( $bordercolor !== '' ) ) ? 'margin-bottom: 15px;' : '';

			if ( ( $rankno_int !== 1 ) && ( $rankno_int !== 2 ) && ( $rankno_int !== 3 ) ) {
				$rankno_int = '-normal';
			}

			if ( $star !== '' ){
				if ( $star === '5' ){
					$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i>';
				}elseif ( $star === '45' ) {
					$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i>';
				}elseif ( $star === '4' ) {
					$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
				}elseif ( $star === '35' ) {
					$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
				}elseif ( $star === '3' ) {
					$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
				}elseif ( $star === '2' ) {
					$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
				}elseif ( $star === '1' ) {
					$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
				}
			}else{
				$star_mark = '';
			}

			$star_html = ( $star_mark !== '' ) ? '<br/><span class="st-star">'.$star_mark.'</span>' : '';

		
			$content = (string) $content;
			$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
			$content = preg_replace( '!^</p>|<p>$!', '', $content );
			$content = do_shortcode( shortcode_unautop( $content ) );

			return '<div class="rankid' . $rankno_int . '" style="margin-bottom:10px;'.$bgcolor_css.$radius_css.$bordercolor_css.$color_css.$marginbottom_css.'"><h4 class="rankh4 rankh4-sc">' . $content . $star_html . '</h4></div>';
		}
	}
	add_shortcode('st-rank','st_rank_c');
}

if ( !function_exists( 'st_label_c' ) ) {
	function st_label_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'label'    => 'おすすめ',
			'bgcolor' => '#fafafa',
			'color'   => '#000000',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$text_html   = ( $label !== '' ) ? $label : '注目';
		$bgcolor_css = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css   = ( $color !== '' ) ? 'color:' . $color . ';' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="kanren st-labelbox"><div class="st-labelbox-label"><span style="' . esc_attr( $bgcolor_css . $color_css ) . '" class="st-labelbox-label-text">' . esc_html( $text_html ) . '</span></div>' . $content . '</div>';
	}
}
add_shortcode('st-label','st_label_c');

if ( !function_exists( 'st_ribon_c' ) ) {
	function st_ribon_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'label'    => 'おすすめ',
			'top' => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$text_html   = ( $label !== '' ) ? $label : 'おすすめ';
		$top_css = ( $top !== '' ) ? 'style="top:' . esc_attr( $top ) . 'px;"' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-ribon-box"><p class="st-ribon-label" '. $top_css .'><span class="st-ribon-text">'. $text_html .'</span></p>' . $content . '</div>';
	}
}
add_shortcode('st-ribon','st_ribon_c');

if ( $st_is_ex ) {
	if ( !function_exists( 'st_back_btn_c' ) ) {
		function st_back_btn_c( $atts, $content = null ) {
			$atts = shortcode_atts( array(
				'text'    => '前のページに戻る',
				'fontawesome' => '',
				'webicon'  => '',
			), $atts );

			extract( array_map( 'trim', $atts ), EXTR_SKIP );

			if ( $webicon ) {
				$fontawesome = $webicon;
			}

			$text_html   = ( $text !== '' ) ? $text : '前のページに戻る';
			$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';

		
			$content = (string) $content;
			$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
			$content = preg_replace( '!^</p>|<p>$!', '', $content );

			return '<script type="text/html" data-st-back-btn><p class="st-back-btn"><a href="#" onclick="st_back_btn_back(); return false;">' . $fontawesome_html . $text_html . '</a></p></script>';
		}
	}
	add_shortcode('st-back-btn','st_back_btn_c');
}

if ( !function_exists( 'st_wide_background_c' ) ) {
	function st_wide_background_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'bgcolor' => '',
			'backgroud_image' => '',
			'align' => '',
			'myclass'  => '',
			'add_style'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$bgcolor_css = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$backgroud_image_css  = ( $backgroud_image !== '' ) ? 'background-image: url(\''.esc_url($backgroud_image).'\');' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
		$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

		if ( $align === 'l' ) {
			$align_class = 'st-wide-background-left ';
		} elseif ( $align === 'r' ) {
			$align_class = 'st-wide-background-right ';
		} else {
			$align_class = 'st-wide-background ';
		}

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div style="' . $bgcolor_css . $backgroud_image_css . $add_style_css . '" class="st-wide-background '. $align_class . esc_attr ( $myclass_class ) .'">' . $content . '</div>';
	}
}
add_shortcode('st-wide-background','st_wide_background_c');

if ( $st_is_ex ) {
	if ( !function_exists( 'st_widecolumn_c' ) ) {
		function st_widecolumn_c( $atts, $content = null ) {
			$atts = shortcode_atts( array(
				'bgcolor'   => '#fafafa',
				'shadow'    => 'on',
				'myclass'   => '',
				'add_style' => '',
			), $atts );

			extract( array_map( 'trim', $atts ), EXTR_SKIP );

			$bgcolor_css = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
			$shadow_class   = ( $shadow === '' ) ? ' st-no-shadow' : '';
			$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
			$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

		
			$content = (string) $content;
			$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
			$content = preg_replace( '!^</p>|<p>$!', '', $content );
			$content = do_shortcode( shortcode_unautop( $content ) );

			return '<div style="' . $bgcolor_css . $add_style_css . '" class="st-lp-wide-wrapper '. esc_attr( $myclass_class ) .'"><div class="st-lp-wide-content' . $shadow_class . '" style="' . $bgcolor_css . '">' . $content . '</div></div>';
		}
	}
	add_shortcode('st-widecolumn','st_widecolumn_c');

	if ( !function_exists( 'st_date' ) ) {
		function st_date(  ) {
			return date("Y年n月");
		}

		add_shortcode( 'st-date', 'st_date' );
	}

}

if ( !function_exists( 'st_count_reset' ) ) {
	function st_count_reset( $arg, $content = null ) {
		$content = do_shortcode( shortcode_unautop( $content ) );
		return '<div class="st-count-reset">'.$content.'</div>';
	}
	add_shortcode( 'st-count-reset', 'st_count_reset' );
}

if ( !function_exists( 'st_comment_out_func' ) ) {
	function st_comment_out_func( $arg, $content = null ) {
		return null;
	}
}
add_shortcode('st-comment-out', 'st_comment_out_func');

if ( !function_exists( 'st_div_c' ) ) {
	function st_div_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => '',
			'margin'   => '',
			'padding'   => '',
			'add_style'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$class_attr  = ( $class !== '' ) ? $class : '';                         
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';    
		$padding_css  = ( $padding !== '' ) ? 'padding: ' . $padding . ';' : '';
		$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-shortcode-div '. $class_attr .'" style="' . esc_attr( $padding_css . $margin_css . $add_style_css ) . '">' . $content . '</div>';

	}
}
add_shortcode('st-div','st_div_c');

if ( !function_exists( 'st_div_a_c' ) ) {
	function st_div_a_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => '',
			'margin'   => '',
			'padding'   => '',
			'add_style'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$class_attr  = ( $class !== '' ) ? $class : '';                         
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';    
		$padding_css  = ( $padding !== '' ) ? 'padding: ' . $padding . ';' : '';
		$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-shortcode-div-a '. $class_attr .'" style="' . esc_attr( $padding_css . $margin_css . $add_style_css ) . '">' . $content . '</div>';

	}
}
add_shortcode('st-div-a','st_div_a_c');

if ( !function_exists( 'st_p_c' ) ) {
	function st_p_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => '',
			'margin'   => '',
			'padding'   => '',
			'add_style'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$class_attr  = ( $class !== '' ) ? $class : '';                         
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';    
		$padding_css  = ( $padding !== '' ) ? 'padding: ' . $padding . ';' : '';
		$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = preg_replace( '!<(\s*/)?p>!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<p class="st-shortcode-p '. $class_attr .'" style="' . esc_attr( $padding_css . $margin_css . $add_style_css ) . '">' . $content . '</p>';

	}
}
add_shortcode('st-p','st_p_c');

if ( !function_exists( 'st_span_c' ) ) {
	function st_span_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => '',
			'margin'   => '',
			'padding'   => '',
			'add_style'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$class_attr  = ( $class !== '' ) ? $class : '';                         
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';    
		$padding_css  = ( $padding !== '' ) ? 'padding: ' . $padding . ';' : '';
		$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = preg_replace( '!<(\s*/)?p>!', '', $content );
	

		return '<span class="st-shortcode-span '. $class_attr .'" style="' . esc_attr( $padding_css . $margin_css . $add_style_css ) . '">' . $content . '</span>';

	}
}
add_shortcode('st-span','st_span_c');

if ( !function_exists( 'st_br_c' ) ) {
	function st_br_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'line_height'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$line_height_css  = ( $line_height !== '' ) ? 'style="line-height: ' . esc_attr( $line_height ) . ';"' : '';    

		return '<br class="pcnone tabnone" ' . $line_height_css . '>';
	}
}
add_shortcode('st-br','st_br_c');

if ( !function_exists( 'st_i_c' ) ) {
	function st_i_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => '',
			'add_style'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$class_attr  = ( $class !== '' ) ? $class : '';                         
		$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

		return '<i class="' . esc_attr( $class_attr ) . '" aria-hidden="true" style="' .  esc_attr( $add_style_css ) . '"></i>';

	}
}
add_shortcode('st-i','st_i_c');

if ( !function_exists( 'st_pre_c' ) ) {
	function st_pre_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'myclass'     => '',
			'text'        => '',
			'fontawesome' => 'fa-code',
			'webicon'     => 'st-svg-code',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
		$text_html   = ( $text !== '' ) ? $text : '';
		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i> ' : '<i class="st-fa st-svg-code" aria-hidden="true"></i> ';

	
		$content = (string) $content;
        $content = preg_replace( '!<p>!', '', $content );
        $content = preg_replace( '!</p>!', '', $content );
        $content = shortcode_unautop( $content );
        $content = preg_replace( '!<br\s*/?>!', '', $content );

		return '<pre class="st-pre '. esc_attr( $myclass_class ) .'"><span class="st-pre-text">' . $fontawesome_html . $text_html . '</span>' . $content . '</pre>';

	}
}
add_shortcode('st-pre','st_pre_c');

if ( $st_is_ex_af ) {
	if ( !function_exists( 'st_pre_sc_c' ) ) {
		function st_pre_sc_c( $atts, $content = null ) {
			$atts = shortcode_atts( array(
				'myclass'     => '',
				'text'        => '',
				'fontawesome' => 'st-svg-shortcode',
				'webicon'     => 'st-svg-shortcode',
			), $atts );

			extract( array_map( 'trim', $atts ), EXTR_SKIP );

			if ( $webicon ) {
				$fontawesome = $webicon;
			}

			$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
			$text_html   = ( $text !== '' ) ? $text : '';
			$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i> ' : '<span>[/]</span> ';
		
			// <span class="iconify" data-icon="dashicons-shortcode" data-inline="true"></span>
			// <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

		
			$content = (string) $content;
			$content = preg_replace( '!<p>!', '', $content );
			$content = preg_replace( '!</p>!', '', $content );
			$content = preg_replace( '!<br\s*/?>!', '', $content );

			return '<pre class="st-pre '. esc_attr( $myclass_class ) .'"><span class="st-pre-text">' . $fontawesome_html . $text_html . '</span>' . $content . '</pre>';

		}
	}
	add_shortcode('st-pre-sc','st_pre_sc_c');
}

if ( !function_exists( 'st_table_c' ) ) {
	function st_table_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => 'st_table_sc',
			'bordercolor' => '',
			'width'       => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$bordercolor_css = ( $bordercolor !== '' ) ? 'border-top-color: ' . $bordercolor . ';border-right-color: ' . $bordercolor . ';' : '';
		$width_css  = ( $width !== '' ) ? 'width:' . $width . '%;' : '';
		$class_attr  = ( $class !== '' ) ? $class : '';

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<table class="'. $class_attr . '" style="' . $bordercolor_css . $width_css . ' border-collapse: collapse;"><tbody>' . $content . '</tbody></table>';
	}
}
add_shortcode('st-table','st_table_c');

if ( !function_exists( 'st_tr_c' ) ) {
	function st_tr_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => 'st_tr_sc',
			'bgcolor'    => '',
			'color'      => '',
			'fontweight' => '',
			'center'     => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$fontweight_css  = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
		$bgcolor_css        = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css        = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$center_css        = ( $center !== '' ) ? 'text-align:center;' : '';
		$class_attr  = ( $class !== '' ) ? $class : ''; //class

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<tr class="'. $class_attr . '" style="' . $bgcolor_css . $fontweight_css . $color_css . $center_css . '">' . $content . '</tr>';
	}
}
add_shortcode('st-tr','st_tr_c');

if ( !function_exists( 'st_td_c' ) ) {
	function st_td_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'class'       => 'st_td_sc',
			'bgcolor'     => '',
			'color'       => '',
			'fontweight'  => '',
			'center'      => '',
			'bordercolor' => '',
			'colspan'     => '',
			'width'       => '',
			'minwidth'       => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$fontweight_css  = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
		$bgcolor_css     = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css       = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$center_css      = ( $center !== '' ) ? 'text-align:center;' : '';
		$bordercolor_css = ( $bordercolor !== '' ) ? 'border-bottom-color: ' . $bordercolor . ';border-left-color: ' . $bordercolor . ';' : '';
		$colspan_attr      = ( $colspan !== '' ) ? 'colspan=' . intval($colspan) . '' : '';
		$width_css  = ( $width !== '' ) ? 'width:' . $width . '%;' : '';
		$minwidth_css  = ( $minwidth !== '' ) ? 'min-width:' . $minwidth . 'px;' : '';
		$class_attr  = ( $class !== '' ) ? $class : ''; //class

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<td class="'. $class_attr . '" style="' . $bgcolor_css . $width_css . $minwidth_css . $fontweight_css . $color_css . $center_css . $bordercolor_css . '" ' . $colspan_attr . '>' . $content . '</td>';
	}
}
add_shortcode('st-td','st_td_c');

if ( ! function_exists( 'st_input_tab_c' ) ) {
	function st_input_tab_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'bgcolor'    => '',
			'bordercolor'    => '',
			'color'      => '',
			'fontweight' => '',
			'width'      => '30',
			'value'      => '',
			'text'       => 'タブ',
			'checked'    => '',
			'event'      => '',
			'fontawesome'  => '',
			'webicon'  => '',
			'myclass'  => '',
		),
			$atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $atts['webicon'] ) {
			$atts['fontawesome'] = $atts['webicon'];
		}

		$counter      = _st_counter_get_tab_counter();
		$container_id = $counter['get']();

		$stack          = _st_stack_get_tab_stack();
		$container_type = $stack['get']( 'type' );
		$tab_count      = (int) $stack['get']( 'tab_count' ) + 1;

		$stack['set']('tab_count', $tab_count);

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		$tab_id_value   = ( $value !== '' ) ? ( $container_id . '-u-' . (int) $value ) : ( $container_id . '-' . $tab_count );
		$id_value       = 'tab-' . $tab_id_value;
		$name_value     = 'st-tab-' . $container_id;
		$fontweight_css = ( $fontweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
		$bgcolor_css    = ( $bgcolor !== '' ) ? 'background-color:' . $bgcolor . ';' : '';
		$bordercolor_css    = ( $bordercolor !== '' ) ? 'border:1px solid ' . $bordercolor . ';' : '';
		$tab_btn_class    = ( $bgcolor !== '' ) ? 'class="st-tab-noborder"' : '';
		$color_css      = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$fontawesome_html = ( $atts['fontawesome'] !== '' ) ? '<i class="st-fa ' . esc_attr( $atts['fontawesome'] ) . '" aria-hidden="true"></i>' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

		if ( $container_type === 'default' ) {
			$width_css = ( $width !== '' ) ? 'width:calc(' . $width . '% - 5px );' : 'width:30%;';
		} else {
			$width_css = '';
		}

		$value_value    = ( $value !== '' ) ? (int) $value : $tab_count;
		$text_value     = $text;
		$checked_attr   = ( $checked !== '' ) ? 'checked="checked"' : '';
		$event_attr             = ( $event !== '' ) ? ' onclick="gtag(\'event\', \'click\', { \'event_label\': \''. esc_attr($event) . '\', \'event_category\': \'linkclick\' });"' : '';

		return '<input id="' . esc_attr( $id_value ) . '" class="st-tab-label '. esc_attr( $myclass_class ) .'" title="' . esc_attr( $text_value ) . '" ' . $checked_attr . ' name="' . esc_attr( $name_value ) . '" type="radio" value="' . esc_attr( $value_value ) . '" ' . $event_attr . '/><label for="' . esc_attr( $id_value ) . '" style="' . $width_css . $fontweight_css . $bgcolor_css . $bordercolor_css . $color_css . '" ' . $tab_btn_class . '>' . $fontawesome_html . $text_value . '</label>';
	}
}
add_shortcode( 'st-input-tab', 'st_input_tab_c' );

if ( ! function_exists( 'st_tab_content_c' ) ) {
	function st_tab_content_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'type'    => 'default',
			'bgcolor' => '',
			'myclass' => 'st-tab-content-myclass',
		),
			$atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$counter = _st_counter_get_tab_counter();

		$counter['increment']();

		$container_id = $counter['get']();

		$stack      = _st_stack_get_tab_stack();
		$stack_vars = array(
			'type'          => $type,
			'tab_count'     => 0,
			'content_count' => 0,
		);

		$stack['push']($stack_vars);

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		$stack_vars = $stack['pop']();

		$id_value       = 'st-tab-content-' . $container_id;
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
		$class_value    = $myclass_class . ' st-tab-content st-tab-content-type-' . $type . ' st-tab-content-tab-' . $stack_vars['tab_count'];
		$bgcolor_css    = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';

		return '<div id="' . esc_attr( $id_value ) . '" class="' . $class_value . '" style="' . $bgcolor_css . '">' . $content . '</div>';
	}
}
add_shortcode( 'st-tab-content', 'st_tab_content_c' );

if ( ! function_exists( 'st_tab_main_c' ) ) {
	function st_tab_main_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'bgcolor'     => '',
			'bordercolor' => '',
			'value'       => '',
		),
			$atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$counter      = _st_counter_get_tab_counter();
		$container_id = $counter['get']();

		$stack         = _st_stack_get_tab_stack();
		$content_count = (int) $stack['get']( 'content_count' ) + 1;

		$stack['set']( 'content_count', $content_count );

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		$content_id_value = ( $value !== '' ) ? ( $container_id . '-u-' . (int) $value ) : ( $container_id . '-' . $content_count );
		$id_value         = 'st-tab-main-' . $content_id_value;
		$class_value      = 'st-tab-main st-tab-main-' . $content_count;
		$bordercolor_css  = ( $bordercolor !== '' ) ? 'border:1px solid ' . $bordercolor . ';' : '';
		$bgcolor_css      = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$padding_css      = ( ( $bgcolor !== '' ) || ( $bordercolor !== '' ) ) ? 'padding:10px;' : '';

		return '<div id="' . esc_attr( $id_value ) . '" class="' . esc_attr( $class_value ) . '" style="' . $bgcolor_css . $bordercolor_css . $padding_css . '">' . $content . '</div>';
	}
}
add_shortcode( 'st-tab-main', 'st_tab_main_c' );

if ( !function_exists( 'st_user_comment_box' ) ) {
	function st_user_comment_box( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'title'           => '',
			'user_text'           => '',
			'color'           => '',
			'star' => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$color_css   = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$border_color_css   = ( $color !== '' ) ? 'border-color:' . $color . ';' : '';
		$title_html   = ( $title !== '' ) ? $title : ''; //タイトル
		$user_text_html   = ( $user_text !== '' ) ? $user_text : '';

		if ( $star !== '' ){
			if ( $star === '5' ){
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i>';
			}elseif ( $star === '45' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i>';
			}elseif ( $star === '4' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '35' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '3' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '2' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '1' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}
		}else{
			$star_mark = '';
		}

		$star_html = ( $star_mark !== '' ) ? '<span class="st-star">'.$star_mark.'</span>' : '';

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-user-comment-box" style="'. $border_color_css .'">
<div class="st-user-comment-img">' . $content . '</div><div class="st-user-comment-text"><p style="'. $color_css .'">' . esc_html($title_html) . '</p><p class="st-user-comment-attribute">' . esc_html($user_text_html) .  $star_html .'</p>
</div>
</div>';
	}
}
add_shortcode('st-user-comment-box','st_user_comment_box');

if ( !function_exists( 'st_arrow' ) ) {
	function st_arrow(  ) {
		return '<div class="st-down"></div>';
	}

	add_shortcode( '下矢印', 'st_arrow' );
}

if ( !function_exists( 'st_triangle_down' ) ) {
	function st_triangle_down( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'color'   => '#000000',
		), $atts );
		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$color_css   = ( $color !== '' ) ? 'border-top-color:' . $color . ';' : '';
		return '<div class="st-triangle-down" style="' . esc_attr( $color_css ) . '"></div>';
	}

	add_shortcode( 'st-under-t', 'st_triangle_down' );
}

if ( !function_exists( 'st_maru' ) ) {
	function st_maru(  ) {
		return '<i class="st-fa st-svg-circle-o" aria-hidden="true"></i>';
	}

	add_shortcode( 'st-maru', 'st_maru' );
}

if ( !function_exists( 'st_x' ) ) {
	function st_x(  ) {
		return '<i class="st-fa st-svg-times" aria-hidden="true"></i>';
	}

	add_shortcode( 'st-x', 'st_x' );
}

if ( !function_exists( 'st_login_check' ) ) {
	function st_login_check( $atts, $content = null ) {
		if ( is_user_logged_in() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return $content;
		}

		return '';
	}

	add_shortcode( 'login-only', 'st_login_check' );
}

if ( !function_exists( 'st_logout_check' ) ) {
	function st_logout_check( $atts, $content = null ) {
		if ( ! is_user_logged_in() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return $content;
		}

		return '';
	}

	add_shortcode( 'logout-only', 'st_logout_check' );
}

if ( !function_exists( 'st_if_is_pc' ) ) {
	function st_if_is_pc( $atts, $content = null ) {
		if ( !wp_is_mobile() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return $content;
		}

		return '';
	}

	add_shortcode( 'pc', 'st_if_is_pc' );
}

if ( !function_exists( 'st_if_is_nopc' ) ) {
	function st_if_is_nopc( $atts, $content = null ) {
		if ( wp_is_mobile() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return $content;
		}

		return '';
	}

	add_shortcode( 'nopc', 'st_if_is_nopc' );
}

if ( !function_exists( 'st_frontsc_func' ) ) {
	function st_frontsc_func( $arg, $content = null ) {
		if( is_front_page() && !is_paged() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return '<div>'.$content.'</div>';
		}
	}
}
add_shortcode('frontonly', 'st_frontsc_func');

if ( !function_exists( 'st_no_frontsc_func' ) ) {
	function st_no_frontsc_func( $arg, $content = null ) {
		if( ! is_front_page() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return '<div>'.$content.'</div>';
		}
	}
}
add_shortcode('no-frontonly', 'st_no_frontsc_func');

if ( !function_exists( 'st_pagesc_func' ) ) {
	function st_pagesc_func( $arg, $content = null ) {
		if( is_page() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return '<div>'.$content.'</div>';
		}
	}
}
add_shortcode('pageonly', 'st_pagesc_func');

if ( !function_exists( 'st_postsc_func' ) ) {
	function st_postsc_func( $arg, $content = null ) {
		if( is_single() ) {
			$content = do_shortcode( shortcode_unautop( $content ) );
			return '<div>'.$content.'</div>';
		}
	}
}
add_shortcode('postonly', 'st_postsc_func');

if ( !function_exists( 'st_categorysc_func' ) ) {
	function st_categorysc_func( $arg, $content = null ) {
		$atts = shortcode_atts(
			array(
			
				'cat' => '0',
			),
			$arg
		);

	
		if ( $content === null || $content === '' ) {
			return '';
		}

		$queried_object_id     = get_queried_object_id();
		$is_main_query         = is_main_query();
		$is_single             = is_single();
		$is_category           = $is_main_query && is_category();
		$is_home_or_front_page = $is_main_query &&
		                         ( get_the_ID() === $queried_object_id ) && ( is_home() || is_front_page() );

	
		if ( $is_home_or_front_page ) {
			return '';
		}

	
		if ( ! $is_single && ! $is_category ) {
			return '';
		}

	
		$cat_ids = explode( ',', $atts['cat'] );
		$cat_ids = array_reduce(
			$cat_ids,
			function ( $new_cat_ids, $cat_id ) {
				$cat_id = trim( $cat_id );

				if ( preg_match( '/\A-?[0-9]+\z/', $cat_id ) ) {
					$new_cat_ids[] = (int) $cat_id;
				}

				return $new_cat_ids;
			},
			array()
		);

		if ( st_is_ver_ex() ) {
			$cat_ids = array_unique( $cat_ids );
			$cat_id  = implode( ',', $cat_ids );
			$cat_id  = ( $cat_id !== '' ) ? $cat_id : '0';
			$cat_ids = array_reduce(
				explode( ',', $cat_id ),
				function ( $cat_ids, $cat_id ) {
					$cat_id = (int) $cat_id;

					if ( $cat_id >= 0 ) {
						$cat_ids['includes'][] = $cat_id;
					} else {
						$cat_ids['excludes'][] = absint( $cat_id );
					}

					return $cat_ids;
				},
				array( 'includes' => array(), 'excludes' => array() )
			);

		
			if ( in_array( 0, $cat_ids['includes'], true ) ) {
			
				if ( ( $is_single && in_category( $cat_ids['excludes'] ) ) ||
					 ( $is_category && in_array( $queried_object_id, $cat_ids['excludes'], true ) ) ) {
					return '';
				}

				$content = do_shortcode( shortcode_unautop( $content ) );
				return '<div>' . $content . '</div>';
			}

		
			if ( $is_single ) {
			
				if ( in_category( $cat_ids['excludes'] ) ) {
					return '';
				}

			
				if ( in_category( $cat_ids['includes'] ) ) {
					$content = do_shortcode( shortcode_unautop( $content ) );
					return '<div>' . $content . '</div>';
				}
			}

		
			if ( $is_category ) {
			
				if ( in_array( $queried_object_id, $cat_ids['excludes'], true ) ) {
					return '';
				}

			
				if ( in_array( $queried_object_id, $cat_ids['includes'], true ) ) {
					$content = do_shortcode( shortcode_unautop( $content ) );
					return '<div>' . $content . '</div>';
				}
			}
		} else {
			$cat_ids = array_unique( $cat_ids );
			$cat_id  = implode( ',', $cat_ids );
			$cat_id  = ( $cat_id !== '' ) ? $cat_id : '0';
			$cat_ids = array_map( 'intval', explode( ',', $cat_id ) );

			if ( in_array( 0, $cat_ids, true ) ) {
				$content = do_shortcode( shortcode_unautop( $content ) );
				return '<div>' . $content . '</div>';
			}

			if ( $is_single && in_category( $cat_ids ) ) {
				$content = do_shortcode( shortcode_unautop( $content ) );
				return '<div>' . $content . '</div>';
			}

			if ( $is_category && in_array( $queried_object_id, $cat_ids, true ) ) {
				$content = do_shortcode( shortcode_unautop( $content ) );
				return '<div>' . $content . '</div>';
			}
		}

		return '';
	}
}
add_shortcode( 'catonly', 'st_categorysc_func' );

if ( ! function_exists( 'st_cardsc_func' ) ) {
	function st_cardsc_func( $arg, $content = '' ) {
		$globals = array();
		$globals = _st_store_global_query( $globals );

		$atts = shortcode_atts(
			array(
				'id'          => '0',
				'label'       => '',
				'name'        => '',
				'bgcolor'     => '#ffa520',
				'color'       => '#ffffff',
				'pc_height'   => '',
				'readmore'    => 'off',
				'fontawesome' => '',
				'webicon'     => '',
				'thumbnail'   => 'on',
				'myclass'     => '',
				'type'        => '',
			),
			$arg
		);

		$atts = array_map( 'trim', $atts );

		$post_id    = (int) $atts['id'];
		$post_query = new WP_Query( array(
			'p'              => $post_id,
			'post_type'      => 'any',
			'posts_per_page' => 1,
		) );

		if ( ! $post_query->have_posts() ) {
			_st_restore_global_query( $globals );

			return '';
		}

		$card_label       = $atts['label'];
		$card_name        = $atts['name'];
		$bgcolor_css      = ( $atts['bgcolor'] !== '' ) ? 'background:' . $atts['bgcolor'] . ';' : '';
		$color_css        = ( $atts['color'] !== '' ) ? 'color:' . $atts['color'] . ';' : '';
		$readmore         = ( $atts['readmore'] === 'on' );
		if ( $atts['webicon'] !== '' ) {
			$fontawesome_html = ( $atts['webicon'] !== '' ) ? '<i class="st-fa ' . esc_attr( $atts['webicon'] ) . '" aria-hidden="true"></i>' : '';
		} else {
			$fontawesome_html = ( $atts['fontawesome'] !== '' ) ? '<i class="st-fa ' . esc_attr( $atts['fontawesome'] ) . '" aria-hidden="true"></i>' : '';
		}
		$type_value       = ( $atts['type'] !== '' ) ? $atts['type'] : '';
		$height           = ( $atts['pc_height'] !== '' ) ? $atts['pc_height'] : '';
		$height_int       = intval($height);

		if ( $height_int === 0 || $height_int === '' || st_is_mobile() ) {
			$height_style = '';  //高さ
		} else {
			$height_style = ( $height !== '' ) ? 'style="height:' . esc_attr( $height_int ) . 'px;overflow:hidden;"' : '';
		}

		$height_style_thumb = ( $height_int !== '' && $height_int !== 0 ) ? 'style="height:' . esc_attr( $height ) . 'px;display:inline-block;"' : '';

		if ( isset( $type_value ) && ( $type_value === 'text' ) ){
			$title_head  = '<span class="st-card-title-head st-card-title-head-sankou" style="'. $bgcolor_css . $color_css . '">' . $fontawesome_html . $card_label . '</span>';
		} else {
			$title_head  = '';
		}

	
		$wpp_view_limit = trim( get_option( 'st-data223', '' ) );
		$wpp_view_limit = ( $wpp_view_limit !== '' ) ? (int) $wpp_view_limit : 9999;

	
		$wpp_view_limit_label = trim( get_option( 'st-data224', '' ) );
		$wpp_view_limit_label = ( $wpp_view_limit_label !== '' ) ? $wpp_view_limit_label : '殿堂';

		$show_wpp_view_count = (bool) trim( get_option( 'st-data229', '' ) );
		$default_thumbnail   = trim( get_option( 'st-data97', '' ) );
		$hide_excerpt_on_pc  = (bool) trim( get_option( 'st-data221', '' ) );

		$html = '';

		$post_id_now = get_the_ID();

	
		$st_youtube_thumbnail_info = st_youtube_thumbnail_info( $post_id );
		$youtube_thum_img          = $st_youtube_thumbnail_info['youtube_thumb_img'];
		$youtube_thum_img_s        = $st_youtube_thumbnail_info['youtube_thumb_s_img'];

		if ( st_is_ver_ex() ) {
			while ( $post_query->have_posts() ) {
				$post_query->the_post();

				ob_start();

				?>

				<?php if ( isset( $type_value ) && ( $type_value === 'content' ) ){
				?>

					<div class="st-cardbox-content <?php echo esc_attr(  $myclass_class ); ?>">

						<?php if ( $card_name !== '' ){
						?>
							<h3><?php echo $card_name; ?></h3>
						<?php } else { ?>
							<h3><?php echo the_title(); ?></h3>
						<?php } ?>

						<?php if ( $youtube_thum_img || ( ! $thumbnail_class && has_post_thumbnail() ) ) {
						?>
							<?php if ( $youtube_thum_img ){ ?>
								<?php echo '<p class="youtube_thum_link_full">'. $youtube_thum_img . '</p>'; ?>
							<?php } else { ?>
								<p><?php the_post_thumbnail( 'full' ); ?></p>
							<?php } ?>
						<?php } else {
						?>
						<?php } ?>

						<?php if ( $post_id_now === $post_id ) {
							echo '<p>※同一コンテンツのため、表示されません</p>';
						} else {
							the_content( '' );
						} ?>

						<?php if ( $card_label !== '' ){
						?>
							<p class="st-cardlink-text"><a href="<?php the_permalink() ?>"><?php echo $card_label; ?></a></p>
						<?php } else { ?>
							<p class="st-cardlink-text"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></p>
						<?php } ?>

					</div>

				<?php } elseif ( isset( $type_value ) && ( $type_value === 'thumb' ) ){ ?>

					<?php if ( $youtube_thum_img_s || has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink() ?>" class="st-card-thumb-only">
							<div <?php echo $height_style_thumb ; ?>>
								<?php if ( $youtube_thum_img_s ){ ?>
									<?php echo '<div class="youtube_thum_link_150">'. $youtube_thum_img_s . '</div>'; ?>
								<?php } else { ?>
									<?php the_post_thumbnail( 'st_thumb150' );
									?>
								<?php } ?>
							</div>
						</a>
					<?php } ?>

				<?php } else { ?>

					<a href="<?php the_permalink() ?>" class="st-cardlink">
					<div class="kanren st-cardbox <?php echo esc_attr(  $thumbnail_size_class . $thumbnail_class . $myclass_class ); ?>" <?php echo $height_style ; ?>>
						<?php if ( ( trim( $type_value ) === '' || ( isset( $type_value ) && $type_value === 'label' ) ) && $card_label !== '' ) {
						?>
							<div class="st-cardbox-label"><span style="<?php echo esc_attr( $bgcolor_css . $color_css ); ?>" class="st-cardbox-label-text"><?php echo $fontawesome_html; ?><?php echo esc_html( $card_label ); ?></span></div>
						<?php } elseif ( $show_wpp_view_count && function_exists( 'wpp_get_views' ) ) { ?>
							<?php $wpp_view_count = max(0, (int) wpp_get_views( get_the_ID(), null, false ) );
							?>
							<?php if ( $wpp_view_count > $wpp_view_limit ) { ?>
								<div class="st-cardbox-label st-wppview-limit-over"><span style="<?php echo esc_attr( $bgcolor_css . $color_css ); ?>" class="st-cardbox-label-text"><?php echo esc_html( $wpp_view_limit_label ); ?></span></div>
							<?php } else { ?>
								<div class="st-cardbox-label"><span style="<?php echo esc_attr( $bgcolor_css . $color_css ); ?>" class="st-cardbox-label-text"><?php echo esc_html( number_format_i18n( $wpp_view_count ) ); ?><span class="wpp-text">view</span></span></div>
							<?php } ?>
						<?php } ?>
						<dl class="clearfix">
							<dt class="st-card-img">
									<?php if ( $youtube_thum_img_s || has_post_thumbnail() ) {
									?>
										<?php if ( isset ( $GLOBALS['stdata478'] ) && $GLOBALS['stdata478'] === 'yes' ) {
										?>
											<?php if ( $youtube_thum_img_s ){ ?>
												<?php echo '<div class="youtube_thum_link_150">'. $youtube_thum_img_s . '</div>'; ?>
											<?php } else { ?>
												<?php the_post_thumbnail( 'st_thumb150' );
												?>
											<?php } ?>
										<?php } else { ?>
											<?php get_template_part( 'st-thumbnail' ); ?>
										<?php } ?>
									<?php } else {
									?>
										<?php if ( $default_thumbnail !== '' ) { ?>
											<img src="<?php echo esc_url( $default_thumbnail ); ?>" alt="no image" title="no image" width="300" height="300" />
										<?php } else { ?>
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
										<?php } ?>
									<?php } ?>
							</dt>
							<dd>
								<?php if (  $card_name !== '' ) {
								?>
									<h5 class="st-cardbox-t"><?php echo $title_head; ?><?php echo esc_html( $card_name ); ?></h5>
								<?php } else { ?>
									<h5 class="st-cardbox-t"><?php echo $title_head; ?><?php the_title(); ?></h5>
								<?php } ?>

								<?php if ( $thumbnail_size_class === '' && ( ! $hide_excerpt_on_pc && ! st_is_mobile() ) || ( st_is_mobile() && trim( $GLOBALS['stdata280'] ) !== '' ) ) { ?>
									<div class="st-card-excerpt smanone">
										<?php the_excerpt();
										?>
									</div>
								<?php } ?>
								<?php if ( $readmore ) { ?>
									<p class="cardbox-more">続きを見る</p>
								<?php } ?>
							</dd>
						</dl>
					</div>
					</a>

				<?php }

				$html = ob_get_clean();
			}

		} else {

			while ( $post_query->have_posts() ) {
				$post_query->the_post();

				ob_start();

				?>
				<a href="<?php the_permalink() ?>" class="st-cardlink">
				<div class="kanren st-cardbox" <?php echo $height_style ; ?>>
					<?php if ( ( trim( $type_value ) === '' || ( isset( $type_value ) && $type_value === 'label' ) ) && $card_label !== '' ) {
					?>
						<div class="st-cardbox-label"><span style="<?php echo esc_attr( $bgcolor_css . $color_css ); ?>" class="st-cardbox-label-text"><?php echo $fontawesome_html; ?><?php echo esc_html( $card_label ); ?></span></div>
					<?php } elseif ( $show_wpp_view_count && function_exists( 'wpp_get_views' ) ) { ?>
						<?php $wpp_view_count = max(0, (int) wpp_get_views( get_the_ID(), null, false ) );
						?>
						<?php if ( $wpp_view_count > $wpp_view_limit ) { ?>
							<div class="st-cardbox-label st-wppview-limit-over"><span style="<?php echo esc_attr( $bgcolor_css . $color_css ); ?>" class="st-cardbox-label-text"><?php echo esc_html( $wpp_view_limit_label ); ?></span></div>
						<?php } else { ?>
							<div class="st-cardbox-label"><span style="<?php echo esc_attr( $bgcolor_css . $color_css ); ?>" class="st-cardbox-label-text"><?php echo esc_html( number_format_i18n( $wpp_view_count ) ); ?><span class="wpp-text">view</span></span></div>
						<?php } ?>
					<?php } ?>
					<dl class="clearfix">
						<dt class="st-card-img">
								<?php if ( has_post_thumbnail() ) {
								?>
									<?php if ( isset ( $GLOBALS['stdata478'] ) && $GLOBALS['stdata478'] === 'yes' ) {
									?>
										<?php the_post_thumbnail( 'st_thumb150' );
										?>
									<?php } else { ?>
										<?php get_template_part( 'st-thumbnail' ); ?>
									<?php } ?>
								<?php } else {
								?>
									<?php if ( $default_thumbnail !== '' ) { ?>
										<img src="<?php echo esc_url( $default_thumbnail ); ?>" alt="no image" title="no image" width="300" height="300" />
									<?php } else { ?>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
									<?php } ?>
								<?php } ?>
						</dt>
						<dd>
							<?php if (  $card_name !== '' ) {
							?>
								<h5 class="st-cardbox-t"><?php echo $title_head; ?><?php echo esc_html( $card_name ); ?></h5>
							<?php } else { ?>
								<h5 class="st-cardbox-t"><?php echo $title_head; ?><?php the_title(); ?></h5>
							<?php } ?>

							<?php if ( ( ! $hide_excerpt_on_pc && ! st_is_mobile() ) || ( st_is_mobile() && trim( $GLOBALS['stdata280'] ) !== '' ) ) { ?>
								<div class="st-card-excerpt smanone">
									<?php the_excerpt();
									?>
								</div>
							<?php } ?>
							<?php if ( $readmore ) { ?>
								<p class="cardbox-more">続きを見る</p>
							<?php } ?>
						</dd>
					</dl>
				</div>
				</a>
				<?php

				$html = ob_get_clean();
			}

		}

		wp_reset_postdata();

		_st_restore_global_query( $globals );

		return $html;
	}
}
add_shortcode( 'st-card', 'st_cardsc_func' );

if ( ! function_exists( 'st_manage_oembed' ) ) {
	function st_manage_oembed() {
		global $wp;
		global $wp_embed;

		$oembed_disabled = ( get_option( 'st-data238', '' ) === 'yes' );

		$wp_embed->usecache = true;

		add_filter( 'oembed_ttl', function ( $time ) {
			return 60 * 60 * 24;
		} );

		if ( ! $oembed_disabled ) {
			return;
		}

		add_filter( 'embed_maybe_make_link', function ($output, $url)  {
			return $url;
		}, 10, 2);

		$wp->public_query_vars = array_diff(
			$wp->public_query_vars,
			array(
				'embed',
			)
		);

		remove_filter( 'the_content_feed', '_oembed_filter_feed_content' );
		remove_action( 'rest_api_init', 'wp_oembed_register_route' );
		remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request' );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
		remove_action( 'wp_head', 'wp_oembed_add_host_js' );
		remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result' );
		remove_filter( 'oembed_response_data', 'get_oembed_response_data_rich' );
		remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result' );
		add_filter( 'embed_oembed_discover', '__return_false', PHP_INT_MAX );

		add_filter( 'tiny_mce_plugins',
			function ( $plugins ) {
				return array_diff( $plugins, array( 'wpembed' ) ); }
		);

		add_filter(
			'rewrite_rules_array',
			function ( $rules ) {
				foreach ( $rules as $rule => $rewrite ) {
					if ( strpos( $rewrite, 'embed=true' ) !== false ) {
						unset( $rules[ $rule ] );
					}
				}

				return $rules;
			}
		);
	}
}
add_action( 'init', 'st_manage_oembed' );

if ( trim( $GLOBALS['stdata238'] ) === '' && trim( $GLOBALS['stdata566'] ) === '' ) {
	if ( ! function_exists( 'st_og_delete_transient' ) ) {
		function st_og_delete_transient( $url ) {
			$transient_key = 'st_og_fetch_' . hash( 'sha256', $url );

			delete_transient( $transient_key );
		}
	}

	add_action( 'save_post', 'st_og_delete_transient' );

	if ( ! function_exists( 'st_og_fetch' ) ) {
		function st_og_fetch( $url ) {
			static $TRANSIENT_EXPIRATION = 60 * 60 * 24;

			$transient_key = 'st_og_fetch_' . hash( 'sha256', $url );

			$cache = get_transient( $transient_key );

			if ( $cache !== false ) {
				return $cache;
			}

			try {
				$og = OpenGraph::fetch( $url );

				if ( ! ( $og instanceof Traversable ) ) {
					return false;
				}

				$og = (object) iterator_to_array( $og );
			} catch ( Exception $e ) {
				return false;
			}

			set_transient( $transient_key, $og, $TRANSIENT_EXPIRATION );

			return $og;
		}
	}

	if ( ! function_exists( 'st_generate_blog_card_html' ) ) {
		function st_generate_blog_card_html( object $source, array $args = null ) {
			$url   = $source->url ?? '';
			$title = $source->title ?? $url;
			$image = $source->image ?? '';
			$args  = $args ?? array();

			if ( $url === '' || $title === '' ) {
				return '';
			}

			$default_args = array(
				'image' => 'screenshot',
			);

			$args  = array_merge( $default_args, $args );

			if ( $image !== '' && $args['image'] === 'original' ) { // サムネイル画像
				$img_html = '<img src="' . esc_url( $image ) . '" alt="" width="100" height="100" />';
			} elseif ( $image !== '' && $args['image'] === 'screenshot' ) { // スクリーンショット画像
				$screenshot = 'https://s.wordpress.com/mshots/v1/' . urlencode( rtrim( $url, '/' ) ) . '?w=300&h=300';
				$img_html   = '<img src="' . esc_url( $screenshot ) . '" alt="" width="100" height="100" />';
			} elseif ( trim( $GLOBALS['stdata97'] ) !== '' ) { // サムネイル画像が無い場合
				$img_html = '<img src="' . esc_url( ( $GLOBALS['stdata97'] ) ) . '" alt="no image" title="no image" width="100" height="100" />';
			} else {
				$img_html = '<img src="' . get_template_directory_uri() . '/images/no-img.png" alt="no image" title="no image" width="100" height="100" />';
			}

			$content = $source->content ?? '';
			$excerpt = $content;

			if ( $content !== '' ) {
				$excerpt_length = (int) _x( '55', 'excerpt_length' );
				$excerpt_length = (int) apply_filters( 'excerpt_length', $excerpt_length );
				$excerpt_more   = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
				$excerpt        = wp_trim_words( $content, $excerpt_length, $excerpt_more );
			}

			$excerpt = apply_filters( 'wp_trim_excerpt', $excerpt, $content );

			$components = @parse_url( $url );
			$host       = ( $components !== false && isset( $components['host'] ) ) ? $components['host'] : null;

			$class = ( $host !== null ) ? 'has-site' : 'has-no-site';

			ob_start();
			?>

			<div>
				<a href="<?php echo esc_url( $url ); ?>" class="st-cardlink st-embed-cardlink <?php echo esc_attr($class); ?>">
					<div class="kanren st-cardbox">
						<dl class="clearfix">
							<dt class="st-card-img">
								<?php echo $img_html; ?>
							</dt>
							<dd>
								<p class="st-cardbox-t"><?php echo esc_html( $title ); ?></p>
								<div class="st-card-excerpt smanone"><p><?php echo esc_html( $excerpt ); ?></p></div>

								<?php if ( $host !== null ): ?>
								<p class="st-cardbox-site">
									<span class="st-cardbox-favicon"><img
											src="https://www.google.com/s2/favicons?domain=<?= esc_attr( $host ); ?>"
											width="16"
											height="16"
											alt=""></span><span
										class="st-cardbox-host"><?= esc_html( $host ); ?></span>
								</p>
								<?php endif; ?>
							</dd>
						</dl>
					</div>
				</a>
			</div>

			<?php
			return ob_get_clean();
		}
	}

	function get_blog_card( $post_id, $size = array( 150, 150 ) ) {
		$html = '';

		$post_query = new WP_Query( array(
			'p' => $post_id,
			'post_type' => 'any',
			'posts_per_page' => 1,
		) );
		if ( $post_query->have_posts() ) {
			while ( $post_query->have_posts() ) {
				$post_query->the_post();

				$st_youtube_thumbnail_info = st_youtube_thumbnail_info( $post_id );
				$youtube_thum_s_url        = $st_youtube_thumbnail_info['youtube_thumb_s_url'];

				if ( $youtube_thum_s_url ) {
					$thumb = '<div class="youtube_thum_link_150"><img src="' . esc_url( $youtube_thum_s_url ) . '" alt="" width="100" height="100" /></div>';
				} elseif ( has_post_thumbnail() ) {
					$thumb = '<img src="' . get_the_post_thumbnail_url( $post_id, 'thumbnail' ) . '" alt="" width="100" height="100" />';
				} else {
					if( trim($GLOBALS['stdata97'] ) !== '' ){
						$thumb = '<img src="' . esc_url( ($GLOBALS['stdata97']) ) . '" alt="no image" title="no image" width="100" height="100" />';
					} else {
						$thumb = '<img src="' . get_template_directory_uri() . '/images/no-img.png" alt="no image" title="no image" width="100" height="100" />';
					}
				}

				$permalink = get_permalink();

				$html .= '<div>';
				$html .= '<a href="' . $permalink . '" class="st-cardlink st-embed-cardlink">';
				$html .= '<div class="kanren st-cardbox">';
				$html .= '<dl class="clearfix">';
				$html .= '<dt class="st-card-img">';
				$html .= $thumb;
				$html .= '</dt>';
				$html .= '<dd>';
				$html .= '<p class="st-cardbox-t">' . get_the_title() . '</p>';
				$html .= '<div class="st-card-excerpt smanone"><p>' . get_the_excerpt() . '</p></div>';
				//$html .= '<p class="cardbox-more">続きを見る</p>';
				$html .= '</dd>';
				$html .= '</dl>';
				$html .= '</div>';
				$html .= '</a>';
				$html .= '</div>';
			}
			wp_reset_postdata();
		}

		return $html;
	}

	function st_blogcard_oembed_html( $html, $url ) {
		if ( is_admin() ) {
			return $html;
		}

		$post_id = url_to_postid( $url );

		if ( $post_id ) {
			return get_blog_card( $post_id );
		}

		$supported_oembed_html = wp_oembed_get( $url, array( 'discover' => false ) );

		if ( $supported_oembed_html !== false ) {
			return $html;
		}

		$og = st_og_fetch( $url );

		if ( $og === false ) {
			return $html;
		}

		$source          = new StdClass();
		$source->url     = $url;
		$source->title   = isset( $og->title ) ? $og->title : ( isset( $og->site_name ) ? $og->site_name : null );
		$source->title   = isset( $source->title ) ? strip_tags( $source->title ) : null;
		$source->image   = isset( $og->image ) ? $og->image : ( isset( $og->image_src ) ? $og->image_src : null );
		$source->content = isset( $og->descriptoin ) ? strip_tags( $og->description ) : null;

		return st_generate_blog_card_html( $source );
	}
	add_filter( 'embed_oembed_html', 'st_blogcard_oembed_html', 100, 2 );
}

if ( ! function_exists( '_st_process_shortcodes' ) ) {
	function _st_function_create_shortcode_processor( $name, $processor ) {
		return function ( $content, $tags_to_process = array(), $ignore_html = false ) use ( $name, $processor ) {
			static $cache = array();

			global $shortcode_tags;

			$tags_to_process = is_array( $tags_to_process ) ? $tags_to_process : array( $tags_to_process );
			$tags_to_process = array_unique( $tags_to_process );

			sort( $tags_to_process );

			$cacheKey = hash( 'sha256', serialize( array( $content, $tags_to_process ) ) );

			if ( isset( $cache[ $cacheKey ] ) ) {
				return $cache[ $cacheKey ];
			}

			if ( strpos( $content, '[' ) === false ) {
				return $content;
			}

			if ( empty( $shortcode_tags ) || ! is_array( $shortcode_tags ) ) {
				return $content;
			}

			preg_match_all( '@\[([^<>&/\[\]\x00-\x20=]++)@', $content, $matches );

			$tags_to_process = apply_filters( 'st_' . $name . '_shortcodes_tagnames', $tags_to_process, $content );
			$tagnames        = array_intersect( $tags_to_process, $matches[1] );

			if ( empty( $tagnames ) ) {
				return $content;
			}

			$content = do_shortcodes_in_html_tags( $content, $ignore_html, $tagnames );
			$pattern = get_shortcode_regex( $tagnames );

			$content = preg_replace_callback( "/{$pattern}/", $processor, $content );
			$content = unescape_invalid_shortcodes( $content );

			$cache[ $cacheKey ] = $content;

			return $content;
		};
	}
}

if ( ! function_exists( '_st_do_shortcodes' ) ) {
	function _st_do_shortcodes( $content, $tags_to_do = array(), $ignore_html = false ) {
		static $process_shortcodes = null;

		if ( $process_shortcodes === null ) {
			$process_shortcodes = _st_function_create_shortcode_processor( 'do', 'do_shortcode_tag' );
		}

		return $process_shortcodes( $content, $tags_to_do, $ignore_html );
	}
}

if ( ! function_exists( '_st_strip_shortcodes' ) ) {
	function _st_strip_shortcodes( $content, $tags_to_remove = array() ) {
		static $process_shortcodes = null;

		if ( $process_shortcodes === null ) {
			$process_shortcodes = _st_function_create_shortcode_processor(
				'strip',
				function ( $matches ) {
					if ( $matches[1] === '[' && $matches[6] === ']' ) {
						return $matches[1] . substr( $matches[0], 1, - 1 ) . $matches[6];
					}

					return $matches[1] . $matches[6];
				}
			);
		}

		return $process_shortcodes( $content, $tags_to_remove, true );
	}
}

if ( !function_exists( 'st_trim_excerpt' ) ) {
	function st_trim_excerpt( $text = '' ) {
		global $page, $pages;

		if ( $text !== '' ) {
			$text = preg_replace( '@<(noscript)[^>]*?>.*?</\\1>@siu', '', $text );

			return wp_strip_all_tags( $text );
		}

	
		$post  = get_post();
		$page  = $page ? $page : 1;
		$pages = is_array( $pages ) ? $pages : array( $post->post_content );

		$text = get_the_content( '' );

		$excerpt_allowed_blocks = function ( $allowed_blocks ) {
			$block_types    = WP_Block_Type_Registry::get_instance()->get_all_registered();
			$allowed_blocks = array_map(
				function ( $block_type ) {
					return $block_type->name;
				},
				$block_types
			);

			$allowed_blocks[] = null;

			$disallowed_blocks = [ 'core/image', 'core/embed' ];

			return array_diff( $allowed_blocks, $disallowed_blocks );
		};

		add_filter( 'excerpt_allowed_blocks', $excerpt_allowed_blocks, PHP_INT_MAX );

		$text = excerpt_remove_blocks( $text );

		remove_filter( 'pre_render_block', $excerpt_allowed_blocks, PHP_INT_MAX );

		if ( _st_is_block_rendering() || doing_filter( 'embed_oembed_html' ) ) {
			remove_filter( 'get_the_excerpt', 'st_trim_excerpt', 9 );
		}

		$text = _st_strip_shortcodes(
			$text,
			[
				'caption',
				'st-catgroup',
				'st-taggroup',
				'st-postgroup',
				'st-card',
				'st-myblock',
				'st_af',
				'wpdm_package',
				'st-pv-monitor',
				'st-osusume',
			]
		);

		$text = apply_filters( 'the_content', $text );

		if ( _st_is_block_rendering() || doing_filter( 'embed_oembed_html' ) ) {
			add_filter( 'get_the_excerpt', 'st_trim_excerpt', 9 );
		}

		$text = str_replace( ']]>', ']]&gt;', $text );

		$excerpt_length = apply_filters( 'excerpt_length', 55 );

		$excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
		$text         = wp_trim_words( $text, $excerpt_length, $excerpt_more );

		return $text;
	}
}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'st_trim_excerpt', 9 );

if ( !function_exists( 'st_margin' ) ) {
	function st_margin( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'margin'   => '0 0 20px 0',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-margin" style="' . esc_attr( $margin_css ) . '">' . $content . '</div>';
	}
}
add_shortcode('st-margin','st_margin');

if ( !function_exists( 'st_minihukidashi' ) ) {
	function st_minihukidashi( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontawesome' => '',
			'webicon'  => '',
			'bgcolor'     => '#fffde7',
			'color'       => '#1a1a1a',
			'margin'      => '0 0 20px 0',
			'fontsize'    =>  '',
			'fontweight'  => '',
			'radius'      => '',
			'add_boxstyle'   => '',
			'position'   => '',
			'myclass'  => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$bgcolor_css      = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css        = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$before_css       = ( $bgcolor !== '' ) ? 'border-top-color: ' . $bgcolor . ';' : '';
		$margin_css       = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';
		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$fontsize_css     = ( $fontsize !== '' ) ? 'font-size:' . $fontsize . '%;' : '';
		$fontweight_css   = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
		$radius_css       = ( $radius !== '' ) ? 'border-radius: ' . $radius . 'px;' : 'border-radius:30px;';
		$add_style_css    = ( $add_boxstyle !== '' ) ? 'style="' . esc_attr( $add_boxstyle ) . '"' : '';  
		$position_css     = ( $position !== '' ) ? 'left: 50%;' : '';  
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-minihukidashi-box '. esc_attr( $myclass_class ) .'" ' . $add_style_css . '><p class="st-minihukidashi" style="' . esc_attr( $bgcolor_css . $color_css . $margin_css . $fontsize_css . $fontweight_css . $radius_css ) . '"><span class="st-minihukidashi-arrow" style="' . esc_attr( $before_css . $position_css ) . '"></span><span class="st-minihukidashi-flexbox">' . $fontawesome_html . $content . '</span></p></div>';
	}
}
add_shortcode('st-minihukidashi','st_minihukidashi');

if ( !function_exists( 'st_marumozi' ) ) {
	function st_marumozi( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontawesome' => '',
			'webicon'  => '',
			'bgcolor' => '#fffde7',
			'color'   => '#1a1a1a',
			'radius'   => '30',
			'margin'   => '0 10px 0 0',
			'bordercolor' => '',
			'myclass'  => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$bgcolor_css = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css   = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$radius_css  = ( $radius !== '' ) ? 'border-radius: ' . $radius . 'px;' : '';
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';
		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? 'border:solid 2px ' . $bordercolor . ';' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<span class="st-marumozi '. esc_attr( $myclass_class ) .'" style="' . esc_attr( $bgcolor_css . $color_css . $radius_css . $margin_css . $bordercolor_css ) . '">' . $fontawesome_html . $content . '</span>';
	}
}
add_shortcode('st-marumozi','st_marumozi');

if ( !function_exists( 'st_marumozi_big' ) ) {
	function st_marumozi_big( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontawesome' => '',
			'webicon'  => '',
			'bgcolor' => '#fffde7',
			'color'   => '#1a1a1a',
			'radius'   => '30',
			'margin'   => '0 10px 0 0',
			'bordercolor' => '',
			'myclass'  => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$bgcolor_css = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css   = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$radius_css  = ( $radius !== '' ) ? 'border-radius: ' . $radius . 'px;' : '';
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';
		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? 'border:solid 4px ' . $bordercolor . ';' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<p class="st-marumozi-big-p"><span class="st-marumozi-big '. esc_attr( $myclass_class ) .'" style="' . esc_attr( $bgcolor_css . $color_css . $radius_css . $margin_css . $bordercolor_css ) . '">' . $fontawesome_html . $content . '</span></p>';
	}
}
add_shortcode('st-marumozi-big','st_marumozi_big');

if ( !function_exists( 'st_memo_c' ) ) {
	function st_memo_c( $atts, $content = null ){
		$atts = shortcode_atts( array(
			'fontawesome' => '',
			'webicon'     => '',
			'bordercolor' => '',
			'borderwidth' => '',
			'bgcolor'     => '#fafafa',
			'iconcolor'   => '#919191',
			'color'       => '#000000',
			'iconsize'    => '100',
			'myclass'     => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		if ( $bordercolor !== '' ){
			$bordercolor = $bordercolor;
		}elseif ( $iconcolor === '#919191' ){
			$bordercolor = '#E0E0E0';
		}else{
			$bordercolor = $iconcolor;
		}
		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bgcolor_css      = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css        = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$iconcolor_css        = ( $iconcolor !== '' ) ? 'color:' . $iconcolor . ';' : '';
		$iconsize_css        = ( $iconsize !== '' ) ? 'font-size:' . $iconsize . '%;' : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? 'border-color:' . $bordercolor . ';' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

		if( $borderwidth && $bordercolor ) {
			$border_style = 'border:' . $bordercolor . ' solid ' . $borderwidth . 'px;';
		} else {
			$border_style = '';
		}

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="clip-memobox ' . esc_attr ( $myclass_class ) . '" style="' . esc_attr( $bgcolor_css . $color_css . $border_style ) . '"><div class="clip-fonticon" style="' . esc_attr( $iconsize_css . $iconcolor_css . $bordercolor_css ) . '">' . $fontawesome_html . '</div><div class="clip-memotext"><p style="' . esc_attr( $color_css ) . '">'.$content.'</p></div></div>';
	}
}
add_shortcode('st-cmemo','st_memo_c');

if ( !function_exists( 'st_square_checkbox_c' ) ) {
	function st_square_checkbox_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'bgcolor' => '',
			'bordercolor'   => '',
			'borderwidth'        => '3',
			'fontweight'         => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$bgcolor_css = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? 'border-color:' . $bordercolor . ';' : '';
		$borderwidth_css  = ( $borderwidth !== '' ) ? 'border-width:' . $borderwidth . 'px;' : '';
		$fontweight_css  = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
		$nobox_class  = ( ( $borderwidth !== '' ) || ( $bgcolor !== '' ) ) ? '' : ' st-square-checkbox-nobox';
		if ( $borderwidth_css || $bgcolor_css ) {
			$padding_css = 'padding: 1.5em 2em 2em 1.5em; ';
		} else {
			$padding_css = '';
		}
	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div style="' . $padding_css .  $bgcolor_css . $bordercolor_css . $borderwidth_css . $fontweight_css . '" class="st-square-checkbox' . $nobox_class . '">' . $content . '</div>';
	}
}
add_shortcode('st-square-checkbox','st_square_checkbox_c');

if ( !function_exists( 'st_item_box_c' ) ) {
	function st_item_box_c( $atts, $content = null ){
		$atts = shortcode_atts( array(
			'link' => '#',
			'target' => '_blank',
			'rel' => 'nofollow',
			'img' => '',
			'title' => '',
			'price' => '',
            'star' => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

        $noimg = get_template_directory_uri().'/images/no-img.png';

		if ( $star !== '' ){
			if ( $star === '5' ){
            	$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i>';
            }elseif ( $star === '45' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i>';
			}elseif ( $star === '4' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '35' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '3' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '2' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}elseif ( $star === '1' ) {
				$star_mark = '<i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i>';
			}
		}else{
			$star_mark = '';
		}

		$link_url = ( $link !== '' ) ? esc_html($link) : '#';
		$target_attr     = ( $target !== '' ) ? ' target="_blank"' : '';
		$rel_attr        = ( $rel !== '' ) ? 'rel="nofollow' : '';
		$img_url    = ( $img !== '' ) ? $img : $noimg;
		$title_html       = ( $title !== '' ) ? '<h5 class="st-cardbox-t">' . esc_html($title) . '</h5>' : '';
		$price_html        = ( $price !== '' ) ? '<p class="itembox-price">価格' . esc_html($price) . '円</p>' : '';
		$star_html        = ( $star_mark !== '' ) ? '<span class="itembox-star st-star">'.$star_mark.'</span><br/>' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<a href="'.$link_url.'" class="itembox-link"><div class="kanren st-cardbox st-itmebox"><dl class="clearfix"><dt><img src="' . $img_url . '"/></dt><dd>' . $title_html . '<div class="itembox-guide"><p>'.$star_html.$content.'</p>'.$price_html.'</div></dd></dl></div></a>';
	}

}
add_shortcode('st-itembox','st_item_box_c');

if ( !function_exists( 'st_button_c' ) ) {
	function st_button_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontawesome' => '',
			'webicon'     => '',
			'title'       => 'ボタン',
			'type'        => 'A',
			'rel'         => '',
			'url'         => '#',
			'target'      => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$title        = ( $title !== '' ) ? $title : 'ボタン';
		$type         = ( $type !== '' ) ? $type : 'A';
		$url          = ( $url !== '' ) ? $url : '#';
		$nofollow_set = ( $rel !== '' ) ? ' rel="nofollow"' : '';
		$target_set   = ( $target !== '' ) ? ' target="_blank"' : '';

		if ( trim( $fontawesome ) !== '' ) {
			$fontawesome_html = '<i class="st-fa  ' . esc_attr( $fontawesome ) . '" aria-hidden="true"></i>';
		} else {
			$fontawesome_html = '';
		}

		if ( $type === 'A' ) {
			return '<div class="rankstlink-r2"><p><a href="' . esc_url( $url ) . '"' . $nofollow_set . $target_set . '>' . $fontawesome_html . esc_html( $title ) . '</a></p></div>';
		} else {
			return '<div class="rankstlink-l2"><p><a href="' . esc_url( $url ) . '"' . $nofollow_set . $target_set . '>' . $fontawesome_html . esc_html( $title ) . '</a></p></div>';
		}
	}
}
add_shortcode('st-button','st_button_c');

if ( !function_exists( 'st_mybutton_c' ) ) {
	function st_mybutton_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'title'              => 'ボタン',
			'rel'                => '',
			'url'                => '#',
			'target'             => '',
			'fontawesome'        => '',
			'webicon'            => '',
			'fontawesome_after'  => '',
			'webicon_after'      => '',
			'bgcolor'            => '#ffffff',
			'bgcolor_top'        => '',
			'bordercolor'        => '#757575',
			'borderwidth'        => '2',
			'borderradius'       => '5',
			'fontweight'         => 'bold',
			'color'              => '#424242',
			'width'              => '',
			'fontsize'           =>  '',
			'ref'                =>  '',
			'shadow'             => '',
			'class'              => '',
			'event'              => '',
			'beacon'             => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}
		if ( $webicon_after ) {
			$fontawesome_after = $webicon_after;
		}

		$title                  = ( $title !== '' ) ? $title : 'ボタン';
		$url                    = ( $url !== '' ) ? $url : '#';
		$target_set             = ( $target !== '' ) ? ' target="_blank"' : '';
		$fontawesome_html       = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$fontawesome_after_html = ( $fontawesome_after !== '' ) ? '<i class="st-fa fa-after ' . esc_attr( $fontawesome_after ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? 'border-color:' . $bordercolor . ';' : '';
		$borderwidth_css        = ( $borderwidth !== '' ) ? 'border-width:' . $borderwidth . 'px;' : '';
		$borderradius_css       = ( $borderradius !== '' ) ? 'border-radius:' . $borderradius . 'px;' : '';
		$fontweight_css         = ( $fontweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
		$color_css              = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$width_html             = ( $width !== '' ) ? 'width:' . $width . '%;' : '';
		$width_class            = ( $width === '' ) ? ' st-btn-default' : '';
		$fontsize_css           = ( $fontsize !== '' ) ? 'font-size:' . $fontsize . '%;' : '';
		$rel_class              = ( $ref !== '' ) ? ' st-reflection' : '';
		$noborder_class         = ( $borderwidth !== '' ) ? '' : ' st-mybtn-noborder';
		$shadow_css             = ( $shadow !== '' ) ? 'box-shadow:0 3px 0 ' . $shadow . ';' : '';
		$class_attr             = ( $class !== '' ) ? $class : '';
		$event_attr             = ( $event !== '' ) ? ' onclick="gtag(\'event\', \'click\', { \'event_label\': \''. esc_attr($event) . '\', \'event_category\': \'linkclick\' });"' : '';
		if ( st_is_ver_ex_af() ) {
			$beacon_src             = ( $beacon !== '' ) ? '<img border="0" width="1" height="1" src="' . esc_url( $beacon ) . '" alt="">' : '';
		} else {
			$beacon_src = '';
		}

		if ( ( $target !== '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow noopener"';
		} elseif ( ( $target === '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow"';
		} elseif ( ( $target !== '' ) && ( $rel === '' ) ) {
			$rel_set = ' rel="noopener"';
		} else {
			$rel_set = '';
		}

		if( ( $bgcolor_top !== '' ) && ( $bgcolor !== '' ) ) {
			$bgcolor_css  = 'background:' . $bgcolor . '; background: linear-gradient(to bottom, ' . $bgcolor_top . ', ' . $bgcolor . ');';
		} elseif( ( $bgcolor_top == '' ) && ( $bgcolor !== '' ) ) {
			$bgcolor_css  = 'background:' . $bgcolor . ';';
		} else {
			$bgcolor_css  = '';
		}

		return '<p class="'. $class_attr . ' st-mybtn' . $rel_class .  $width_class . $noborder_class . '" style="'.$bgcolor_css.$bordercolor_css.$borderwidth_css.$borderradius_css.$fontsize_css.$fontweight_css.$color_css.$width_html.$shadow_css.'"><a style="'.$fontweight_css.$color_css.'" href="' . esc_url( $url ) . '"' . $rel_set . $target_set . $event_attr . '>' . $fontawesome_html . esc_html( $title ) . $fontawesome_after_html .'</a></p>' . $beacon_src;

	}
}
add_shortcode('st-mybutton','st_mybutton_c');

if ( !function_exists( 'st_mybutton_mini_c' ) ) {
	function st_mybutton_mini_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'title'              => 'ボタン',
			'rel'                => '',
			'url'                => '#',
			'target'             => '',
			'fontawesome'        => '',
			'fontawesome_after'  => '',
			'webicon'            => '',
			'webicon_after'      => '',
			'bgcolor'            => '#ffffff',
			'bgcolor_top'        => '',
			'bordercolor'        => '#757575',
			'borderwidth'        => '',
			'borderradius'       => '5',
			'fontweight'         => 'bold',
			'color'              => '#424242',
			'fontsize'           =>  '',
			'ref'                =>  '',
			'shadow'             => '',
			'class'              => '',
			'event'              => '',
			'beacon'             => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}
		if ( $webicon_after ) {
			$fontawesome_after = $webicon_after;
		}

		$title                  = ( $title !== '' ) ? $title : 'ボタン';
		$url                    = ( $url !== '' ) ? $url : '#';
		$target_set             = ( $target !== '' ) ? ' target="_blank"' : '';
		$fontawesome_html       = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$fontawesome_after_html = ( $fontawesome_after !== '' ) ? '<i class="st-fa fa-after ' . esc_attr( $fontawesome_after ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? $bordercolor : '#ccc';
		$borderwidth_css        = ( $borderwidth !== '' ) ? 'border:' . $borderwidth . 'px solid '. $bordercolor_css .';' : '';
		$borderradius_css       = ( $borderradius !== '' ) ? 'border-radius:' . $borderradius . 'px;' : '';
		$fontweight_css         = ( $fontweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
		$color_css              = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$fontsize_css           = ( $fontsize !== '' ) ? 'font-size:' . $fontsize . '%;' : '';
		$rel_class              = ( $ref !== '' ) ? ' st-reflection' : '';
		$shadow_css             = ( $shadow !== '' ) ? 'box-shadow:0 3px 0 ' . $shadow . ';' : '';
		$class_attr             = ( $class !== '' ) ? $class : '';
		$event_attr             = ( $event !== '' ) ? ' onclick="gtag(\'event\', \'click\', { \'event_label\': \''. esc_attr($event) . '\', \'event_category\': \'linkclick\' });"' : '';
		$beacon_src             = ( $beacon !== '' ) ? '<img border="0" width="1" height="1" src="' . esc_url( $beacon ) . '" alt="">' : '';

		if( ( $bgcolor_top !== '' ) && ( $bgcolor !== '' ) ) {
			$bgcolor_css  = 'background:' . $bgcolor . '; background: linear-gradient(to bottom, ' . $bgcolor_top . ', ' . $bgcolor . ');';
		} elseif( ( $bgcolor_top == '' ) && ( $bgcolor !== '' ) ) {
			$bgcolor_css  = 'background:' . $bgcolor . ';';
		} else {
			$bgcolor_css  = '';
		}

		if ( ( $target !== '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow noopener"';
		} elseif ( ( $target === '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow"';
		} elseif ( ( $target !== '' ) && ( $rel === '' ) ) {
			$rel_set = ' rel="noopener"';
		} else {
			$rel_set = '';
		}

		return '<span class="st-mybtn st-mybtn-mini' . $rel_class .'"><a  style="' . $bgcolor_css . $borderwidth_css . $borderradius_css . $fontsize_css . $fontweight_css . $color_css.$shadow_css .'" href="' . esc_url( $url ) . '"' . $rel_set . $target_set . $event_attr . '>' . $fontawesome_html . esc_html( $title ) . $fontawesome_after_html .'</a></span>' . $beacon_src;

	}
}
add_shortcode('st-mybutton-mini','st_mybutton_mini_c');

if ( !function_exists( 'st_mcbutton_c' ) ) {
	function st_mcbutton_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontawesome'        => '',
			'title'              => 'ボタン',
			'rel'                => '',
			'url'                => '#',
			'target'             => '',
			'fontawesome'        => '',
			'fontawesome_after'  => '',
			'webicon'            => '',
			'webicon_after'      => '',
			'bgcolor'            => '#ffffff',
			'bgcolor_top'        => '',
			'bordercolor'        => '#757575',
			'borderwidth'        => '2',
			'borderradius'       => '5',
			'fontweight'         => 'bold',
			'color'              => '#424242',
			'width'              => '',
			'fontsize'           =>  '',
			'ref'                =>  '',
			'shadow'             => '',

			'mcbox_title'        =>  '',
			'mcbox_bg'           =>  '',
			'mcbox_color'        =>  '',
			'beacon'             => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}
		if ( $webicon_after ) {
			$fontawesome_after = $webicon_after;
		}

		$title                  = ( $title !== '' ) ? $title : 'ボタン';
		$url                    = ( $url !== '' ) ? $url : '#';
		$target_set             = ( $target !== '' ) ? ' target="_blank"' : '';
		$fontawesome_html       = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$fontawesome_after_html = ( $fontawesome_after !== '' ) ? '<i class="st-fa fa-after ' . esc_attr( $fontawesome_after ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? 'border-color:' . $bordercolor . ';' : '';
		$borderwidth_css        = ( $borderwidth !== '' ) ? 'border-width:' . $borderwidth . 'px;' : '';
		$borderradius_css       = ( $borderradius !== '' ) ? 'border-radius:' . $borderradius . 'px;' : '';
		$fontweight_css         = ( $fontweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
		$color_css              = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$width_html             = ( $width !== '' ) ? 'width:' . $width . '%;' : '';
		$width_class            = ( $width === '' ) ? ' st-btn-default' : '';
		$fontsize_css           = ( $fontsize !== '' ) ? 'font-size:' . $fontsize . '%;' : '';
		$rel_class              = ( $ref !== '' ) ? ' st-reflection' : '';
		$shadow_css             = ( $shadow !== '' ) ? 'box-shadow:0 3px 0 ' . $shadow . ';' : '';

		$mcbox_title            = ( $mcbox_title !== '' ) ? $mcbox_title : '';
		$mcbox_bg_css           = ( $mcbox_bg !== '' ) ? 'margin-bottom: 20px;padding: 20px 10px;background:' . $mcbox_bg . ';' : '';
		$mcbox_color_css        = ( $mcbox_color !== '' ) ? 'color:' . $mcbox_color . ';' : '';
		$mcbox_title_html       = ( $mcbox_title !== '' ) ? '<p class="st-mcbox-title center" style="' . $mcbox_color_css . '">' . $mcbox_title . '</p>' : '';

		$beacon_src             = ( $beacon !== '' ) ? '<img border="0" width="1" height="1" src="' . esc_url( $beacon ) . '" alt="">' : '';

		$fontsize_css  = ( $fontsize !== '' ) ? 'font-size:' . $fontsize . '%;' : '';

		if( ( $bgcolor_top !== '' ) && ( $bgcolor !== '' ) ) {
			$bgcolor_css  = 'background:' . $bgcolor . '; background: linear-gradient(to bottom, ' . $bgcolor_top . ', ' . $bgcolor . ');';
		} elseif( ( $bgcolor_top == '' ) && ( $bgcolor !== '' ) ) {
			$bgcolor_css  = 'background:' . $bgcolor . ';';
		} else {
			$bgcolor_css  = '';
		}

		if ( ( $target !== '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow noopener"';
		} elseif ( ( $target === '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow"';
		} elseif ( ( $target !== '' ) && ( $rel === '' ) ) {
			$rel_set = ' rel="noopener"';
		} else {
			$rel_set = '';
		}

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-mcbtn-box" style="' . $mcbox_bg_css . '">' . $mcbox_title_html . '<p class="st-mybtn' . $rel_class .  $width_class .'" style="'.$bgcolor_css.$bordercolor_css.$borderwidth_css.$borderradius_css.$fontsize_css.$fontweight_css.$color_css.$width_html.$shadow_css.'"><a style="'.$fontweight_css.$color_css.'" href="' . esc_url( $url ) . '"' . $rel_set . $target_set . '>' . $fontawesome_html . esc_html( $title ) . $fontawesome_after_html .'</a></p><p class="st-mcbox-text">' . $content . '</p></div>' . $beacon_src;

	}
}
add_shortcode('st-mcbutton','st_mcbutton_c');

if ( ! function_exists( 'st_timeline_c' ) ) {
	function st_timeline_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'myclass'   => '',
			'add_style' => '',
		),
			$atts );


		extract( array_map( 'trim', $atts ), EXTR_SKIP );

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

	
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
		$add_style_css  = ( $add_style !== '' ) ? $add_style : '';  

		return '<ul class="st-timeline st-count-reset ' . $myclass_class . '" style="' . $add_style_css . '">' . $content . '</ul>';
	}
}
add_shortcode( 'st-timeline', 'st_timeline_c' );


if ( ! function_exists( 'st_timeline_list_c' ) ) {
	function st_timeline_list_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'text'       => '',
			'myclass'    => '',
			'center'     => '',
			'fontsize'   => '',
			'color'      => '',
			'fontweight' => 'bold',
			'bgcolor'    => '',
			'rel'        => '',
			'url'        => '',
			'target'     => '',
			'event'      => '',
		),
			$atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

	
		$link_url   = ( $url !== '' ) ? $url : '';
		$target_set = ( $target !== '' ) ? ' target="_blank"' : '';
		$event_attr             = ( $event !== '' ) ? ' onclick="gtag(\'event\', \'click\', { \'event_label\': \''. esc_attr($event) . '\', \'event_category\': \'linkclick\' });"' : '';

		$myclass_class   = ( $myclass !== '' ) ? ' ' . $myclass : '';
		$alignment_class = ( $center !== '' ) ? ' is-align-center' : ' is-align-default';
		$text_class      = ( $text !== '' ) ? ' has-text' : ' has-no-text';
		$fontsize_css    = ( $fontsize !== '' ) ? 'font-size:' . (int) $fontsize . '%;' : '';
		$fontweight_css  = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
		$color_css       = ( $color !== '' ) ? 'color: ' . $color . ';' : '';
		$bgcolor_css     = ( $bgcolor !== '' ) ? 'padding-top: 10px;padding-bottom: 0;padding-right: 20px;background-color:' . $bgcolor . ';' : '';

		if ( ( $target !== '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow noopener"';
		} elseif ( ( $target === '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow"';
		} elseif ( ( $target !== '' ) && ( $rel === '' ) ) {
			$rel_set = ' rel="noopener"';
		} else {
			$rel_set = '';
		}

		if ( $link_url ) {
			$text_html = ( $text !== '' ) ? '<p class="st-timeline-list-text"><a href="' . esc_url( $url ) . '"' . $rel_set . $target_set . $event_attr . ' style="' . esc_attr( $fontsize_css . $fontweight_css . $color_css ) . '">' . esc_html( $text ) . '</a></p>' : '';
		} else {
			$text_html = ( $text !== '' ) ? '<p class="st-timeline-list-text" style="' . esc_attr( $fontsize_css . $fontweight_css . $color_css ) . '">' . esc_html( $text ) . '</p>' : '';
		}

		return '<li class="st-timeline-list' . $alignment_class . $myclass_class . $text_class . '" style="' . esc_attr( $bgcolor_css ) . '"><div>' . $text_html . $content . '</div></li>';
	}
}
add_shortcode( 'st-timeline-list', 'st_timeline_list_c' );

if ( !function_exists( 'st_step_c' ) ) {
	function st_step_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'step_no'            => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$step_no_html = ( $step_no !== '' ) ? $step_no : '1';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<p class="st-step-title"><span class="st-step-box"><span class="st-step">step<br/><span class="st-step-no">'. $step_no_html .'</span></span></span>' . $content . '</p>';
	}
}
add_shortcode('st-step','st_step_c');

if ( !function_exists( 'st_step_custom_c' ) ) {
	function st_step_custom_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'step_no'            => '',
			'step_bgcolor'       => '#70a6ff',
			'step_color'         => '#ffffff',
			'step_text_bgcolor'  => '#ffffff',
			'step_text_color'    => '#000',
			'bordercolor'        => '',
			'borderradius'       => '5',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$step_no_html = ( $step_no !== '' ) ? $step_no : '1';
		$step_bgcolor_css      = ( $step_bgcolor !== '' ) ? 'background:' . $step_bgcolor . ';' : 'background:#70a6ff;';
		$step_bgcolor_border_css      = ( $step_bgcolor !== '' ) ? 'border-top-color:' . $step_bgcolor . ';' : 'border-top-color:#70a6ff;';
		$step_color_css  = ( $step_color !== '' ) ? 'color:' . $step_color . ';' : '';
		$step_text_bgcolor_css      = ( $step_text_bgcolor !== '' ) ? 'background:' . $step_text_bgcolor . ';' : '';
		$step_text_color_css  = ( $step_text_color !== '' ) ? 'color:' . $step_text_color . ';' : '';
		$bordercolor        = ( $bordercolor !== '' ) ? $bordercolor : '';
		$bordercolor_css        = ( $bordercolor !== '' ) ? 'border-bottom:solid 2px ' . $bordercolor . ';' : '';
		$borderradius_css        = ( $borderradius !== '' ) ? 'border-radius:' . $borderradius . 'px;' : '';
		$borderradius_text_css        = ( ( $borderradius !== '' ) && ( $step_text_bgcolor !== '' ) ) ? 'border-radius:' . $borderradius . 'px;' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<p class="st-step-title" style="' . $borderradius_text_css . $step_text_bgcolor_css . $step_text_color_css . $bordercolor_css .'"><span class="st-step-box"><span class="st-step" style="' . $borderradius_css . $step_bgcolor_css . $step_color_css .'"><span class="step-arrow" style="' . $step_bgcolor_border_css . '"></span>step
<span class="st-step-no">'. $step_no_html .'</span></span></span>' . $content . '</p>';
	}
}
add_shortcode('st-step-custom','st_step_custom_c');

if ( !function_exists( 'st_point_c' ) ) {
	function st_point_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontsize'        => '',
			'bordercolor'  => '',
			'fontweight'         => 'bold',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$fontsize_css  = ( $fontsize !== '' ) ? 'font-size:' . (int) $fontsize . '%;' : '';
		$fontweight_css  = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
        $bordercolor_css  = ( $bordercolor !== '' ) ? 'padding-bottom:20px;border-bottom:1px dotted ' . $bordercolor . ';' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<p class="st-point" style="' . esc_attr( $fontsize_css . $bordercolor_css ) . '"><span class="st-point-text" style="' . esc_attr( $fontweight_css ) . '">' . $content . '</span></p>';
	}
}
add_shortcode('st-point','st_point_c');

if ( !function_exists( 'st_box_btn' ) ) {
	function st_box_btn( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'myclass'  => '',
			'type'     => '',
			'pc_show'  => '',
			'margin'   => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		$margin_css     = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

		$type_class     = ( $type !== '' ) ? 'st-box-btn-list-vertical' : '';

		if ( $pc_show && ! $type ) {
			if ( $pc_show == '4' ) {
				$pc_show_class = 'st-pc-show-4 ';
			} elseif ( $pc_show == '3' ) {
				$pc_show_class = 'st-pc-show-3 ';
			} else {
				$pc_show_class = '';
			}
		} else {
			$pc_show_class = '';
		}

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = preg_replace( '!<br(\s*/)?>!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<ul class="st-box-btn ' . esc_attr ( $myclass_class . $pc_show_class . $type_class ) . '">' . $content . '</ul>';
	}
}
add_shortcode('st-box-btn','st_box_btn');

if ( !function_exists( 'st_box_btn_list' ) ) {
	function st_box_btn_list( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'text'        => '',
			'subtext'     => '',
			'url'         => '',
			'fontawesome' => '',
			'webicon'     => '',
			'bgcolor'     => '',
			'color'       => '',
			'fontsize'    => '',
			'fontweight'  => '',
			'icon_image'  => '',
			'icon_size'   => '',
			'target'      => '',
			'rel'         => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$text_html           = ( $text !== '' ) ? $text : '';
		$bgcolor_css         = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$color_css           = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$fontsize_css        = ( $fontsize !== '' ) ? 'font-size:' . $fontsize . '%;' : '';
		$iconsize_css        = ( $icon_size !== '' ) ? 'width:' . $icon_size . '%;' : '';
		$fontawesomesize_css = ( $icon_size !== '' ) ? 'font-size:' . $icon_size . '%;' : '';
		$fontweight_css      = ( $fontweight !== '' ) ? 'font-weight:bold;' : '';
		$target_attr         = ( $target !== '' ) ? ' target="_blank"' : '';
		$rel_attr            = ( $rel !== '' ) ? 'rel="nofollow"' : '';

		$subtext_html     = ( $subtext !== '' ) ? '<p class="st-box-btn-memo" style="' . esc_attr( $color_css ) . '">' . $subtext . '</p>' : '';

		$icon_image_html  = ( $icon_image !== '' ) ? '<img src="'.esc_url($icon_image).'" style="' . esc_attr( $iconsize_css ) . '">' : '';
		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true" style="' . esc_attr( $fontawesomesize_css ) . '"></i>' : '';

	
		if( $icon_image_html ) {
			$st_box_btn_image = $icon_image_html;
		} elseif( $fontawesome_html && ! $icon_image_html) {
			$st_box_btn_image = $fontawesome_html;
		} else {
			$st_box_btn_image = '';
		}

	
		if ( trim( $url ) !== '' ) {
			$url_front_html = '<a href="' . esc_url($url) . '" style="' . esc_attr( $color_css ) . '" ' . $rel_attr . $target_attr . '>';
			$url_back_html  = '</a>';
		} else {
			$url_front_html = '<a href="#" style="' . esc_attr( $color_css ) . '" ' . $rel_attr . $target_attr . '>';
			$url_back_html  = '</a>';
		}

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<li style="' . esc_attr( $bgcolor_css ) . '">' . $url_front_html . $st_box_btn_image . ' <div class="st-box-btn-text-wrap"><p class="st-box-btn-text" style="' . esc_attr( $fontsize_css . $fontweight_css ) . '"> ' . $text_html . ' </p> ' . $subtext_html . ' </div> ' . $url_back_html . '</li>';
	}
}
add_shortcode('st-box-btn-list','st_box_btn_list');

if ( !function_exists( 'st_mybox_c' ) ) {
	function st_mybox_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'fontawesome'  => '',
			'webicon'      => '',
			'title'        => 'ポイント',
			'bgcolor'      => '#ffffff',
			'bordercolor'  => '#757575',
			'borderwidth'  => '',
			'borderradius' => '5',
			'titleweight'  => 'bold',
			'title_bordercolor' => '',
			'color'        => '#424242',
			'fontsize'        => '',
			'myclass'  => '',
			'margin'   => '25px 0',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bgcolor_css      = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
		$bordercolor_css  = ( $bordercolor !== '' ) ? 'border-color:' . $bordercolor . ';' : '';
		$borderwidth_css  = ( $borderwidth !== '' ) ? 'border-width:' . $borderwidth . 'px;' : 'border-width: 0;';
		$borderradius_css = ( $borderradius !== '' ) ? 'border-radius:' . $borderradius . 'px;' : '';
		$titleweight_css  = ( $titleweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
		$color_css        = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$fontsize_css  = ( $fontsize !== '' ) ? 'font-size:' . (int) $fontsize . '%;' : '';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
		$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';

		$titlebox    = '';
		$title_class = '';

		if ( $title !== '' ){
			$title_class = ' has-title ';

			if ( $bgcolor === '#ffffff' || $bgcolor === '' ){
				$titlebg = 'background: #ffffff;';
			} else {
				$titlebg = 'text-shadow: #fff 3px 0px 0px, #fff 2.83487px 0.981584px 0px, #fff 2.35766px 1.85511px 0px, #fff 1.62091px 2.52441px 0px, #fff 0.705713px 2.91581px 0px, #fff -0.287171px 2.98622px 0px, #fff -1.24844px 2.72789px 0px, #fff -2.07227px 2.16926px 0px, #fff -2.66798px 1.37182px 0px, #fff -2.96998px 0.42336px 0px, #fff -2.94502px -0.571704px 0px, #fff -2.59586px -1.50383px 0px, #fff -1.96093px -2.27041px 0px, #fff -1.11013px -2.78704px 0px, #fff -0.137119px -2.99686px 0px, #fff 0.850987px -2.87677px 0px, #fff 1.74541px -2.43999px 0px, #fff 2.44769px -1.73459px 0px, #fff 2.88051px -0.838246px 0px;background: linear-gradient(0deg,' . $bgcolor . ' 0%,' . $bgcolor . ' 55%,rgba(0,0,0,0) 55%,rgba(0,0,0,0) 100%);';
			}

			if ( $title_bordercolor ){
				$title_bordercolor_css  = 'border-bottom-color: '. $title_bordercolor;
				$myclass_class .=  ' st-title-border';
			}else{
				$title_bordercolor_css  = '';
			}

			$titlebox = '<p class="st-mybox-title" style="' . esc_attr( $color_css . $titleweight_css . $titlebg . $fontsize_css . $title_bordercolor_css ) . '">' . $fontawesome_html . $title . '</p>';

		}

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );
		return '<div class="st-mybox ' . esc_attr ( $title_class . $myclass_class ) . '" style="' . esc_attr( $bgcolor_css . $bordercolor_css . $borderwidth_css . $borderradius_css . $margin_css ) . '">' . $titlebox .
		       '<div class="st-in-mybox">' . $content . '</div>' .
		       '</div>';
	}
}
add_shortcode('st-mybox','st_mybox_c');

if ( $st_is_ex_af ) {
	if ( !function_exists( 'st_scbox_c' ) ) {
		function st_scbox_c( $atts, $content = null ) {
			$atts = shortcode_atts( array(
				'fontawesome'  => '',
				'webicon'      => '',
				'title'        => 'ポイント',
				'bgcolor'      => '#ffffff',
				'bordercolor'  => '#757575',
				'borderwidth'  => '',
				'borderradius' => '5',
				'titleweight'  => 'bold',
				'title_bordercolor' => '',
				'color'        => '#424242',
				'fontsize'        => '',
				'myclass'  => '',
				'margin'   => '25px 0',
			), $atts );

			extract( array_map( 'trim', $atts ), EXTR_SKIP );

			if ( $webicon ) {
				$fontawesome = $webicon;
			}

			$fontawesome_html = ( $fontawesome !== '' ) ? '<i class="st-fa ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
			$bgcolor_css      = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';' : '';
			$bordercolor_css  = ( $bordercolor !== '' ) ? 'border-color:' . $bordercolor . ';' : '';
			$borderwidth_css  = ( $borderwidth !== '' ) ? 'border-width:' . $borderwidth . 'px;' : 'border-width: 0;';
			$borderradius_css = ( $borderradius !== '' ) ? 'border-radius:' . $borderradius . 'px;' : '';
			$titleweight_css  = ( $titleweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
			$color_css        = ( $color !== '' ) ? 'color:' . $color . ';' : '';
			$fontsize_css  = ( $fontsize !== '' ) ? 'font-size:' . (int) $fontsize . '%;' : '';
			$myclass_class  = ( $myclass !== '' ) ? $myclass : '';
			$margin_css  = ( $margin !== '' ) ? 'margin: ' . $margin . ';' : '';

			$titlebox    = '';
			$title_class = '';

			if ( $title !== '' ){
				$title_class = ' has-title ';

				if ( $bgcolor === '#ffffff' || $bgcolor === '' ){
					$titlebg = 'background: #ffffff;';
				} else {
					$titlebg = 'text-shadow: #fff 3px 0px 0px, #fff 2.83487px 0.981584px 0px, #fff 2.35766px 1.85511px 0px, #fff 1.62091px 2.52441px 0px, #fff 0.705713px 2.91581px 0px, #fff -0.287171px 2.98622px 0px, #fff -1.24844px 2.72789px 0px, #fff -2.07227px 2.16926px 0px, #fff -2.66798px 1.37182px 0px, #fff -2.96998px 0.42336px 0px, #fff -2.94502px -0.571704px 0px, #fff -2.59586px -1.50383px 0px, #fff -1.96093px -2.27041px 0px, #fff -1.11013px -2.78704px 0px, #fff -0.137119px -2.99686px 0px, #fff 0.850987px -2.87677px 0px, #fff 1.74541px -2.43999px 0px, #fff 2.44769px -1.73459px 0px, #fff 2.88051px -0.838246px 0px;';
				}

				if ( $title_bordercolor ){
					$title_bordercolor_css  = 'border-bottom-color: '. $title_bordercolor;
					$myclass_class .=  ' st-title-border';
				}else{
					$title_bordercolor_css  = '';
				}

				$titlebox = '<p class="st-mybox-title" style="' . esc_attr( $color_css . $titleweight_css . $titlebg . $fontsize_css . $title_bordercolor_css ) . '">' . $fontawesome_html . $title . '</p>';

			}

		
			$content = (string) $content;
			$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
			$content = preg_replace( '!^</p>|<p>$!', '', $content );
			return '<div class="st-mybox ' . esc_attr ( $title_class . $myclass_class ) . '" style="' . esc_attr( $bgcolor_css . $bordercolor_css . $borderwidth_css . $borderradius_css . $margin_css ) . '">' . $titlebox .
				   '<div class="st-in-mybox">' . $content . '</div>' .
				   '</div>';
		}
	}
	add_shortcode('st-scbox','st_scbox_c');
}

if ( !function_exists( 'st_midasibox_c' ) ) {
	function st_midasibox_c( $atts, $content = null ){
		$atts = shortcode_atts( array(
			'fontawesome'  => '',
			'webicon'      => '',
			'title'        => '見出し（全角15文字）',
			'bgcolor'      => '#ffffff',
			'bordercolor'  => '#919191',
			'borderwidth'  => '2',
			'borderradius' => '5',
			'titleweight'  => 'bold',
			'color'        => '#000000',
			'myclass'  => '',
		), $atts);

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

	
		$fontawesome_html = $fontawesome !== '' ? '<i class="st-fa  ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bgcolor_css      = $bgcolor !== '' ? 'background:' . $bgcolor . ';' : '';
		$color_css        = $color !== '' ? 'color:' . $color . ';' : '';
		$borderwidth_css  = $borderwidth !== '' ? 'border-width:' . $borderwidth . 'px;' : '';
		$titleweight_css  = ( $titleweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

		$bordercolor_css    = '';
		$bc_bordercolor_css = '';

		if ( $bordercolor !== '' ) {
			$bordercolor_css    = 'border-color:' . $bordercolor . ';';
			$bc_bordercolor_css = 'background:' . $bordercolor . ';';
		}

	
		$borderradius_css = '';
		$title_class      = '';
		$title_class = $title !== '' ?  'has-title ' : '';

		if ( $borderradius !== '' ) {
			
			if (  $title  !== '' ) {
				$borderradius_css = 'border-radius:0 ' . $borderradius . 'px ' . $borderradius . 'px;';
			} else {
				$borderradius_css = 'border-radius:' . $borderradius . 'px;overflow:hidden;';
			}
		}

	
		$titleradius = $borderradius !== '' ? 'border-radius: 0 0 ' . $borderradius . 'px 0;' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="freebox ' . $title_class . $myclass_class .'" style="' . esc_attr( $bgcolor_css . $bordercolor_css . $borderwidth_css . $borderradius_css ) . '">' .
		       '<p class="p-free" style="' . esc_attr( $bc_bordercolor_css . $bordercolor_css . $titleweight_css ) . '">' .
		       '<span class="p-entry-f" style="' . esc_attr( $bc_bordercolor_css . $color_css . $titleweight_css . $titleradius ) . '">' . $fontawesome_html . esc_html( $title ) . '</span>' .
		       '</p>' .
		       '<div class="free-inbox">' . $content . '</div>' .
		       '</div>';
	}
}
add_shortcode('st-midasibox','st_midasibox_c');

if ( !function_exists( 'st_midasibox_intitle_c' ) ) {
	function st_midasibox_intitle_c( $atts, $content = null ){
		$atts = shortcode_atts( array(
			'fontawesome'  => '',
			'webicon'      => '',
			'title'        => '見出し（全角15文字）',
			'bgcolor'      => '#ffffff',
			'bordercolor'  => '#919191',
			'borderwidth'  => '2',
			'borderradius' => '5',
			'titleweight'  => 'bold',
			'color'        => '#000000',
			'myclass'  => '',
		), $atts);

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

	
		$fontawesome_html = $fontawesome !== '' ? '<i class="st-fa  ' . esc_attr( $fontawesome ) . ' st-css-no" aria-hidden="true"></i>' : '';
		$bgcolor_css      = $bgcolor !== '' ? 'background:' . $bgcolor . ';' : '';
		$color_css        = $color !== '' ? 'color:' . $color . ';' : '';
		$borderwidth_css  = $borderwidth !== '' ? 'border-width:' . $borderwidth . 'px;' : '';
		$titleweight_css  = ( $titleweight !== '' ) ? 'font-weight:bold;' : 'font-weight:normal;';
		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

		$bordercolor_css    = '';
		$bc_bordercolor_css = '';

		if ( $bordercolor !== '' ) {
			$bordercolor_css    = 'border-color:' . $bordercolor . ';';
			$bc_bordercolor_css = 'background:' . $bordercolor . ';';
		}

	
		$borderradius_css = '';
		$title_class      = '';
		$title_class = $title !== '' ?  'has-title ' : '';

		$borderradius_css = ( $borderradius !== '' ) ? 'border-radius:' . $borderradius . 'px;overflow:hidden;' : '';

	
		$titleradius = $borderradius !== '' ? 'border-radius:' . $borderradius . 'px ' . $borderradius . 'px 0 0;' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="freebox freebox-intitle ' . $title_class . $myclass_class .'" style="' . esc_attr( $bgcolor_css . $bordercolor_css . $borderwidth_css . $borderradius_css ) . '">' .
		       '<p class="p-free">' .
		       '<span class="p-entry-f" style="' . esc_attr( $bc_bordercolor_css . $color_css . $titleweight_css . $titleradius ) . '">' . $fontawesome_html . esc_html( $title ) . '</span>' .
		       '</p>' .
		       '<div class="free-inbox">' . $content . '</div>' .
		       '</div>';
	}
}
add_shortcode('st-midasibox-intitle','st_midasibox_intitle_c');

if ( !function_exists( 'st_slidebox_c' ) ) {
	function st_slidebox_c( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'text'           => '+ クリックして下さい',
			'bgcolor'        => '',
			'color'          => '',
			'margin_bottom'  => '',
			'fontawesome'    => '',
			'webicon'        => '',
			'myclass'        => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$collapsed_text  = ( $text !== '' ) ? $text : '+ クリックして下さい';
		$expanded_text = ( $text !== '' ) ? '閉じる' : '- 閉じる';
		$text_html  = sprintf(
			'<span class="st-slidebox-btn-text" data-st-slidebox-text data-st-slidebox-text-collapsed="%s" data-st-slidebox-text-expanded="%s">%s</span>',
			esc_attr( $collapsed_text ),
			esc_attr( $expanded_text ),
			esc_attr( $collapsed_text )
		);

		$bgcolor_css = ( $bgcolor !== '' ) ? 'background:' . $bgcolor . ';padding:15px;border-radius:5px;' : '';
		$color_css   = ( $color !== '' ) ? 'style="color:' . esc_attr($color) . ';"' : '';
		$margin_bottom_css  = ( $margin_bottom !== '' ) ? 'margin-bottom:' . (int) $margin_bottom . 'px;' : '';

		$fontawesome_html = ( $fontawesome !== '' )
			? sprintf(
				'<i class="st-fa %s" aria-hidden="true" data-st-slidebox-icon data-st-slidebox-icon-collapsed="%s" data-st-slidebox-icon-expanded="%s"></i>',
				esc_attr( $fontawesome ),
				esc_attr( $fontawesome ),
				'st-svg-minus-thin'
			)
		: '';

		$myclass_class  = ( $myclass !== '' ) ? $myclass : '';

		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return '<div class="st-slidebox-c is-collapsed '. esc_attr( $myclass_class ) .'" style="' . esc_attr( $margin_bottom_css . $bgcolor_css ) .'" data-st-slidebox><p class="st-btn-open" data-st-slidebox-toggle ' . $color_css . '>' . $fontawesome_html  . $text_html . '</p><div class="st-slidebox" data-st-slidebox-content>' . $content . '</div></div>';
	}
}
add_shortcode('st-slidebox','st_slidebox_c');

if ( !function_exists( 'st_flexbox' ) ) {
	function st_flexbox( $atts, $content = null ) {
		$atts = shortcode_atts( array(
			'url'             => '',
        	'title'           => '',
			'width'           => '',
			'height'          => '',
			'color'           => '#fff',
			'bgcolor'         => '',
			'fontsize'        => '200',
			'radius'          => '',
			'shadow'          => '',
			'bordercolor'     => '',
			'borderwidth'     => '',
			'backgroud_image' => '',
			'fontawesome'     => '',
			'webicon'         => '',
			'blur'            => '',
			'left'            => '',
			'margin_bottom'            => '0',
			'target' => '',
			'rel' => '',
			'myclass'  => '',
		), $atts );

		extract( array_map( 'trim', $atts ), EXTR_SKIP );

		if ( $webicon ) {
			$fontawesome = $webicon;
		}

		$height_css  = ( $height !== '' ) ? 'height:' . (int) $height . 'px;' : 'height:auto;';
		$width_css  = ( $width !== '' ) ? 'width:' . (int) $width . 'px;' : 'width:100%;box-sizing:border-box;';
		$color_css   = ( $color !== '' ) ? 'color:' . $color . ';' : '';
		$bgcolor_css   = ( $bgcolor !== '' ) ? 'background-color:' . $bgcolor . ';' : '';
		$fontsize_css  = ( $fontsize !== '' ) ? 'font-size:' . (int) $fontsize . '%;' : '';
		$radius_css  = ( $radius !== '' ) ? 'border-radius: ' .  (int) $radius . 'px;' : '';
		$shadow_css  = ( $shadow !== '' ) ? 'text-shadow:1px 1px 1px ' . $shadow . ';' : '';
		$backgroud_image_css  = ( $backgroud_image !== '' ) ? 'background-image: url(\''.esc_url($backgroud_image).'\');' : '';
		$left_class   = ( $left !== '' ) ? ' st-flexbox-left' : '';
		$margin_bottom_css  = ( $margin_bottom !== '' ) ? 'margin-bottom:' . (int) $margin_bottom . 'px;' : '';
		$target_attr     = ( $target !== '' ) ? ' target="_blank"' : '';
		$myclass_class  = ( $myclass !== '' ) ? ' ' . $myclass : '';

		if ( ( $target !== '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow noopener"';
		} elseif ( ( $target === '' ) && ( $rel !== '' ) ) {
			$rel_set = ' rel="nofollow"';
		} elseif ( ( $target !== '' ) && ( $rel === '' ) ) {
			$rel_set = ' rel="noopener"';
		} else {
			$rel_set = '';
		}

        if ( ( $bordercolor !== '' ) && ( $borderwidth !== '' ) ) {
        	$border_css  = 'border: solid '. $bordercolor . ' ' . $borderwidth .'px;';
        } else {
        	$border_css  = '';
        }

		if ( ( $bgcolor !== '' ) ||  ( $backgroud_image !== '' ) || ( $border_css !== '' )  ) {
			$space_css = 'padding:20px;';
		} else {
			$space_css = '';
		}

		if ( ( $blur !== '' ) &&  ( $backgroud_image !== '' ) ) {
			$blur_class = ' st-blur';
		} else {
			$blur_class = '';
		}

		if ( trim( $fontawesome ) !== '' ) {
			$fontawesome_html = '<i class="st-fa  ' . esc_attr( $fontawesome ) . '" aria-hidden="true"></i>';
		} else {
			$fontawesome_html = '';
		}

		if ( trim( $url ) !== '' ) {
			$url_front_html = '<a href="' . esc_url($url) . '" class="st-flexbox-link" ' . $rel_set . $target_attr . '>';
			$url_back_html  = '</a>';
		} else {
			$url_front_html = '';
			$url_back_html  = '';
		}

        $title_html        = ( $title !== '' ) ? '<p class="st-header-flextitle" style="'.$fontsize_css.$color_css.$shadow_css.'">' . $fontawesome_html . $title . '</p>' : '';

	
		$content = (string) $content;
		$content = preg_replace( '!<p>(?:\s|&nbsp;)*</p>!', '', $content );
		$content = preg_replace( '!^</p>|<p>$!', '', $content );
		$content = do_shortcode( shortcode_unautop( $content ) );

		return $url_front_html . '<div class="st-header-flexwrap' . $blur_class . $left_class . $myclass_class . '" style="' . $height_css . $width_css . $bgcolor_css . $radius_css . $border_css . $backgroud_image_css . $space_css . $margin_bottom_css . '"><div class="st-header-flexbox">' . $title_html . $content . '</div></div>' . $url_back_html;
	}
}
add_shortcode('st-flexbox','st_flexbox');

if ( ! function_exists( '_st_get_term_descendant' ) ) {
	function _st_get_term_descendants( $term_id, $taxonomy ) {
		static $cache = array();

		$term_id  = (int) $term_id;
		$cacheKey = hash( 'sha256', serialize( array( $term_id, $taxonomy ) ) );

		if ( isset( $cache[ $cacheKey ] ) ) {
			return $cache[ $cacheKey ];
		}

		if ( st_is_ver_ex() ) {
			$term_ids = is_taxonomy_hierarchical( $taxonomy ) ? get_term_children( $term_id, $taxonomy ) : array();
		} else {
			$term_ids = get_term_children( $term_id, $taxonomy );
		}

		if ( is_wp_error( $term_ids ) ) {
			$term_ids = array();
		}

		$cache[ $cacheKey ] = $term_ids;

		return $term_ids;
	}
}

if ( $st_is_ex ) {
	if ( ! function_exists( '_st_parse_term_id_string' ) ) {
		function _st_parse_term_id_string( $term_ids, $taxonomy = 'category', $includes_descendants = true ) {
			$term_ids = array_map( 'trim', explode( ',', $term_ids ) );
			$term_ids = array_map( 'intval', array_filter( $term_ids ) );

			$including_ids = array();
			$excluding_ids = array();

			foreach ( $term_ids as $term_id ) {
				if ( $term_id > 0 ) {
					$including_ids = $includes_descendants
						? array_merge( $including_ids, array( $term_id ), _st_get_term_descendants( $term_id, $taxonomy ) )
						: array_merge( $including_ids, array( $term_id ) );
				} elseif ( $term_id < 0 ) {
					$term_id        = absint( $term_id );
					$excluding_ids = $includes_descendants
						? array_merge( $excluding_ids, array( $term_id ), _st_get_term_descendants( $term_id, $taxonomy ) )
						: array_merge( $excluding_ids, array( $term_id ) );
				}
			}

			return array(
				array_unique( $including_ids ),
				array_unique( $excluding_ids ),
			);
		}
	}
} else {
	if ( ! function_exists( '_st_parse_cat_id_string' ) ) {

		function _st_parse_cat_id_string( $cat_ids, $includes_descendants = true ) {
			$cat_ids = array_map( 'trim', explode( ',', $cat_ids ) );
			$cat_ids = array_map( 'intval', array_filter( $cat_ids ) );

			$including_ids = array();
			$excluding_ids = array();

			foreach ( $cat_ids as $cat_id ) {
				if ( $cat_id > 0 ) {
					$including_ids = $includes_descendants
						? array_merge( $including_ids, array( $cat_id ), _st_get_term_descendants( $cat_id, 'category' ) )
						: array_merge( $including_ids, array( $cat_id ) );
				} elseif ( $cat_id < 0 ) {
					$cat_id        = absint( $cat_id );
					$excluding_ids = $includes_descendants
						? array_merge( $excluding_ids, array( $cat_id ), _st_get_term_descendants( $cat_id, 'category' ) )
						: array_merge( $excluding_ids, array( $cat_id ) );
				}
			}

			return array(
				array_unique( $including_ids ),
				array_unique( $excluding_ids ),
			);
		}
	}
}

if ( ! function_exists( '_st_get_deepest_term' ) ) {
	function _st_get_deepest_term( array $terms ) {
		$deepest_term  = null;
		$deepest_depth = - 1;

		foreach ( $terms as $term ) {
			$ancestors = get_ancestors( $term->term_id, $term->taxonomy, 'taxonomy' );
			$depth     = count( $ancestors );

			if ( $depth > $deepest_depth ) {
				$deepest_term  = get_term( $term );
				$deepest_depth = $depth;
			}
		}

		return $deepest_term;
	}
}

if ( ! function_exists( '_st_get_terms_hierarchical' ) ) {
	function _st_get_terms_hierarchical( $term ) {
		$term             = get_term( $term );
		$normalized_terms = [];

		$normalized_terms[ $term->term_id ] = $term;

		$ancestors = get_ancestors( $term->term_id, $term->taxonomy, 'taxonomy' );

		foreach ( $ancestors as $ancestor_id ) {
			$ancestor = get_term( $ancestor_id );

			if ( $ancestor === null || is_wp_error( $ancestor ) ) {
				continue;
			}

			$normalized_terms[ $ancestor->term_id ] = $ancestor;
		}

		return array_reverse( $normalized_terms, true );
	}
}

if ( ! function_exists( '_st_parse_responsive_column_settings' ) ) {
	function _st_parse_responsive_column_settings( $settings, $default_settings = array( 3, 2, 1 ) ) {
		$setting_count = count( $default_settings );
		$settings      = array_pad( explode( ',', $settings ), $setting_count, 0 );
		$settings      = array_slice( $settings, 0, $setting_count );

		return array_map(
			function ( $key ) use ( $settings, $default_settings ) {
				$value = (int) trim( $settings[ $key ] );

				return $value > 0 ? $value : $default_settings[ $key ];
			},
			array_keys( $settings )
		);
	}
}

if ( ! function_exists( '_st_get_responsive_thumbnail_size' ) ) {
	function _st_get_responsive_thumbnail_size( $column_settings ) {
		$sizes = array(
			1 => 'st_post_slider_1',
			2 => 'st_post_slider_2',
			3 => 'st_post_slider_3',
		);

		$max_slides_to_show = max( $column_settings );

		if ( isset( $sizes[ $max_slides_to_show ] ) ) {
			return $sizes[ $max_slides_to_show ];
		}

		return $sizes[3];
	}
}

if ( ! function_exists( '_st_get_the_responsive_post_thumbnail' ) ) {
	function _st_get_the_responsive_post_thumbnail( array $columm_settings, $post = null, $resize = true ) {
		$post              = get_post( $post );
		$thumbnail_size    = ( trim( $GLOBALS["stdata564"] === '' ) && $resize ) ? _st_get_responsive_thumbnail_size( $columm_settings ) : 'full';

		if ( has_post_thumbnail() ) {   
			return get_the_post_thumbnail( $post, $thumbnail_size );
		}

	

		$default_image_size = array( 'width' => 343, 'height' => 254, 'crop' => true );
		$default_thumbnail  = trim( get_option( 'st-data97', '' ) );
		$no_img             = ( $default_thumbnail !== '' )
			? $default_thumbnail
			: get_template_directory_uri() . '/images/no-img-l.png';

		if ($resize) {
			$image_sizes       = wp_get_additional_image_sizes();
			$image_size        = isset( $image_sizes[ $thumbnail_size ] )
				? $image_sizes[ $thumbnail_size ]
				: $default_image_size;
		} else {
			$image_size = _st_getimagesize( $no_img );
			$image_size = $image_size
				? array( 'width' => $image_size[0], 'height' => $image_size[1], 'crop' => true )
				: $default_image_size;
		}

		$size = max( $image_size['width'], $image_size['height'] );

		$post_thumbnail = sprintf(
			'<img src="%s" alt="no image" title="no image" width="%s" height="%s">',
			esc_url( $no_img ),
			$size,
			$size
		);

		return $post_thumbnail;
	}
}

if ( $st_is_ex ) {
	if ( ! function_exists( 'st_catgroup' ) ) {
		function st_catgroup( $atts, $content = null ) {
			$globals = array();
			$globals = _st_store_global_query( $globals );

			$default_slides_to_show = array( 3, 2, 1 );

			$atts = shortcode_atts(
				array(
					'cat'            => '',
					'page'           => '5',
					'order'          => 'desc',
					'orderby'        => 'date',
					'child'          => 'off',
					'slide'          => 'off',
					'slides_to_show' => implode( ',', $default_slides_to_show ),
					'slide_date'     => 'on',
					'slide_more'     => 'ReadMore',
					'slide_center'   => 'off',   
					'fullsize_type'  => '',
					'load_more'      => 'off',
					'type'           => '',
				),
				$atts
			);

			$atts = array_map( 'trim', $atts );

			list( $including_ids, $excluding_ids ) = _st_parse_term_id_string(
				$atts['cat'],
				'category',
				$atts['child'] === 'on'
			);

			$page = (int) $atts['page'];

		
			$order = strtoupper( $atts['order'] );
			$order = in_array( $order, array( 'ASC', 'DESC' ), true ) ? $order : 'DESC';

		
			$disable_all_slides = ( ! st_speed_off() && trim( get_option( 'st-data398' ) ) === 'yes' );   

			$slide          = ( $atts['slide'] === 'on' && ! $disable_all_slides );
			$slide_date     = ( $atts['slide_date'] !== 'off' );
			$slides_to_show = _st_parse_responsive_column_settings( $atts['slides_to_show'], $default_slides_to_show );
			$slide_center   = ( $atts['slide_center'] === 'on' );
			$fullsize_type  = in_array($atts['fullsize_type'], ['text', 'card'], true) ? $atts['fullsize_type'] : '';

		
			$load_more = (!$slide && $atts['load_more'] === 'on' );

			$type = st_is_ver_ex() ? $atts['type'] : '';   

		
			$cat_group_query = new WP_Query( array(
				'post_type'           => 'post',
				'category__in'        => $including_ids,
				'category__not_in'    => $excluding_ids,
				'orderby'             => $atts['orderby'],
				'order'               => $order,
				'posts_per_page'      => $page,
				'ignore_sticky_posts' => true,
			) );

			ob_start();

		
		
		
			$hide_thumbnail = (bool) trim( get_option( 'st-data5', '' ) );   
			$amp            = amp_is_amp() ? 'amp' : null;
			$is_slider      = ( $slide && ! $amp );
			$is_card        = ( ! $is_slider && $type === 'card' );

			if ( $is_slider ) {
				$template_slug = 'st-shortcode-slider';
				$vars          = array(
					'slide_query'    => $cat_group_query,
					'slides_to_show' => $slides_to_show,
					'slide_date'     => $slide_date,
					'slide_more'     => trim( $atts['slide_more'] ),
					'slide_center'   => $slide_center,
					'fullsize_type'  => $fullsize_type,
					'load_more'      => $load_more,
					'is_rank'        => false,
					'show_category'  => true,
				);
			} else {
				$template_slug = $is_card ? 'st-shortcode-kanren-card-list' : 'st-shortcode-kanren';
				$attributes    = array(
					'category__in'     => $including_ids,
					'category__not_in' => $excluding_ids,
					'orderby'          => $atts['orderby'],
					'order'            => $order,
					'posts_per_page'   => $page,
					'slide_more'       => trim( $atts['slide_more'] ),   
					'load_more'        => (int) $load_more,
					'type'             => $type,
					'hide_thumbnail'   => (int) $hide_thumbnail,
					'is_card'          => (int) $is_card,
				);

				$vars = array(
					'query'      => $cat_group_query,
					'attributes' => $attributes,
				);
			}

			st_get_template_part( $template_slug, $amp, $vars );

			return (string) ob_get_clean();
		}
	}
} else {
	if ( ! function_exists( 'st_catgroup' ) ) {
		function st_catgroup( $atts, $content = null ) {
			$globals = array();
			$globals = _st_store_global_query( $globals );

			$default_slides_to_show = array( 3, 2, 1 );

			$atts = shortcode_atts(
				array(
					'cat'            => '',
					'page'           => '5',
					'order'          => 'desc',
					'orderby'        => 'date',
					'child'          => 'off',
					'slide'          => 'off',
					'slides_to_show' => implode( ',', $default_slides_to_show ),
					'slide_date'     => 'on',
					'slide_more'     => 'ReadMore',
					'slide_center'   => 'off',
					'fullsize_type'  => '',
				),
				$atts
			);

			$atts = array_map( 'trim', $atts );

			list( $including_ids, $excluding_ids ) = _st_parse_cat_id_string(
				$atts['cat'],
				$atts['child'] === 'on'
			);

			$page = (int) $atts['page'];

			$order = strtoupper( $atts['order'] );
			$order = in_array( $order, array( 'ASC', 'DESC' ), true ) ? $order : 'DESC';

			if( isset( $GLOBALS["stdata398"] ) && $GLOBALS["stdata398"] === 'yes' ) {
				$atts['slide'] = '' ;
		}

			$slide          = ( $atts['slide'] === 'on' );
			$slide_date     = ( $atts['slide_date'] !== 'off' );
			$slides_to_show = _st_parse_responsive_column_settings( $atts['slides_to_show'], $default_slides_to_show );
			$slide_center   = ( $atts['slide_center'] === 'on' );
			$fullsize_type  = in_array($atts['fullsize_type'], ['text', 'card'], true) ? $atts['fullsize_type'] : '';

			$cat_group_query = new WP_Query( array(
				'post_type'           => 'post',
				'category__in'        => $including_ids,
				'category__not_in'    => $excluding_ids,
				'orderby'             => $atts['orderby'],
				'order'               => $order,
				'posts_per_page'      => $page,
				'ignore_sticky_posts' => true,
			) );

			_st_restore_global_query( $globals );

			ob_start();

			$vars = array(
				'slides_to_show'  => $slides_to_show,
				'slide_date'      => $slide_date,
				'slide_more'      => trim( $atts['slide_more'] ),
				'slide_center'    => $slide_center,
				'fullsize_type'   => $fullsize_type,
			);
			$amp       = amp_is_amp() ? 'amp' : null;
			$is_slider = ( $slide && ! $amp );

			if ( $is_slider ) {
				$vars['slide_query']   = $cat_group_query;
				$vars['is_rank']       = false;
				$vars['show_category'] = true;
			} else {
				$vars['cat_group_query'] = $cat_group_query;
			}

			$template_slug = $is_slider ? 'st-shortcode-slider' : 'st-shortcode-kanren';

			st_get_template_part( $template_slug, $amp, $vars );

			$html = ob_get_clean();

			_st_restore_global_query( $globals );

			return $html;
		}
	}
}
add_shortcode( 'st-catgroup', 'st_catgroup' );

if ( ! function_exists( '_st_parse_cat_id_string_head' ) ) {
	/**
	 * ヘッダー画像下エリア用カテゴリーの記事一覧ショートコード用
	 */
	function _st_parse_cat_id_string_head( $cat_ids, $includes_descendants = true ) {
		$cat_ids = array_map( 'trim', explode( ',', $cat_ids ) );
		$cat_ids = array_map( 'intval', array_filter( $cat_ids ) );

		$including_ids = array();
		$excluding_ids = array();

		foreach ( $cat_ids as $cat_id ) {
			if ( $cat_id > 0 ) {
				$including_ids = $includes_descendants
					? array_merge( $including_ids, array( $cat_id ), _st_get_term_descendants( $cat_id, 'category' ) )
					: array_merge( $including_ids, array( $cat_id ) );
			} elseif ( $cat_id < 0 ) {
				$cat_id        = absint( $cat_id );
				$excluding_ids = $includes_descendants
					? array_merge( $excluding_ids, array( $cat_id ), _st_get_term_descendants( $cat_id, 'category' ) )
					: array_merge( $excluding_ids, array( $cat_id ) );
			}
		}

		return array(
			array_unique( $including_ids ),
			array_unique( $excluding_ids ),
		);
	}
}

if ( ! function_exists( 'st_catgroup_headerslider' ) ) {
	/**
	 * ヘッダー画像下エリア用カテゴリーの記事一覧ショートコード (`[st-catgroup-header]`)
	 */
	function st_catgroup_headerslider( $atts, $content = null ) {
		$globals = array();
		$globals = _st_store_global_query( $globals );

		$default_slides_to_show = array( 3, 2, 1 );

		$atts = shortcode_atts(
			array(
				'cat'            => '',
				'page'           => '5',
				'order'          => 'desc',
				'orderby'        => 'date',
				'child'          => 'off',
				'slide'          => 'off',
				'slides_to_show' => implode( ',', $default_slides_to_show ),
				'slide_date'     => 'on',
				'slide_more'     => 'ReadMore',
				'slide_center'   => 'off',
				'fullsize_type'  => '',
			),
			$atts
		);

		$atts = array_map( 'trim', $atts );

		list( $including_ids, $excluding_ids ) = _st_parse_cat_id_string_head(
			$atts['cat'],
			$atts['child'] === 'on'
		);

		$page = (int) $atts['page'];

		$order = strtoupper( $atts['order'] );
		$order = in_array( $order, array( 'ASC', 'DESC' ), true ) ? $order : 'DESC';

		if( isset( $GLOBALS["stdata398"] ) && $GLOBALS["stdata398"] === 'yes' ) {
			$atts['slide'] = '' ;
	}

		$slide          = ( $atts['slide'] === 'on' );
		$slide_date     = ( $atts['slide_date'] !== 'off' );
		$slides_to_show = _st_parse_responsive_column_settings( $atts['slides_to_show'], $default_slides_to_show );
		$slide_center   = ( $atts['slide_center'] === 'on' );
		$fullsize_type  = in_array($atts['fullsize_type'], ['text', 'card'], true) ? $atts['fullsize_type'] : '';

		$cat_group_query = new WP_Query( array(
			'post_type'           => 'post',
			'category__in'        => $including_ids,
			'category__not_in'    => $excluding_ids,
			'orderby'             => $atts['orderby'],
			'order'               => $order,
			'posts_per_page'      => $page,
			'ignore_sticky_posts' => true,
		) );

		_st_restore_global_query( $globals );

		ob_start();

		$vars = array(
			'slides_to_show'  => $slides_to_show,
			'slide_date'      => $slide_date,
			'slide_more'      => trim( $atts['slide_more'] ),
			'slide_center'    => $slide_center,
			'fullsize_type'   => $fullsize_type,
		);
		$amp       = amp_is_amp() ? 'amp' : null;
		$is_slider = ( $slide && ! $amp );

		if ( $is_slider ) {
			$vars['slide_query']   = $cat_group_query;
			$vars['is_rank']       = false;
			$vars['show_category'] = true;
		} else {
			$vars['cat_group_query'] = $cat_group_query;
		}

		$template_slug = $is_slider ? 'st-shortcode-slider-header' : 'st-shortcode-kanren';

		st_get_template_part( $template_slug, $amp, $vars );

		$html = ob_get_clean();

		_st_restore_global_query( $globals );

		return $html;
	}
}
add_shortcode( 'st-catgroup-header', 'st_catgroup_headerslider' );

if ( $st_is_ex ) {
	if ( ! function_exists( 'ajax_st_load_more_get_the_content' ) ) {
		function ajax_st_load_more_get_the_content() {
			if ( ! isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) || strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) !== 'xmlhttprequest' ) {
				wp_die( - 1, 403 );
			}

			if ( ! wp_doing_ajax() ) {
				wp_die( - 1, 403 );
			}

			$data = array();

			try {
				$action  = (string) filter_input( INPUT_GET, 'action' );
				$payload = filter_input( INPUT_GET, 'payload', FILTER_DEFAULT, FILTER_FORCE_ARRAY ) ?: array();

				$payload = filter_var_array(
					$payload,
					array(
						'post_id'    => FILTER_DEFAULT,
						'attributes' => array(
							'filter' => FILTER_DEFAULT,
							'flags'  => FILTER_REQUIRE_ARRAY,
						),
					)
				);

				$post_id    = (int) $payload['post_id'];
				$attributes = filter_var_array(
					$payload['attributes'] ?: array(),
					array(
						'type'    => FILTER_DEFAULT,
						'content' => FILTER_DEFAULT,
					)
				);

				$attributes = array(
					'type'    => (string) $attributes['type'],
					'content' => (string) $attributes['content'],
				);

				$has_next = ( $attributes['type'] === 'main' );

				$data = array(
					'has_next' => $has_next,
					'html'     => _st_load_more_get_the_content( $post_id, $attributes ),
					'options'  => array(),
				);

				if ( $has_next ) {
					$data['options'] = array(
						'action'  => $action,
						'payload' => array(
							'post_id'    => $post_id,
							'attributes' => $attributes,
						),
					);
				}
			} catch ( Exception $e ) {
				wp_send_json_error( 'error', 500 );
			}

			wp_send_json_success( $data, 200 );
		}
	}

	if ( trim( get_option( 'st-data587', '' ) ) === 'yes' ) {
		add_action( 'wp_ajax_st_load_more_get_the_content', 'ajax_st_load_more_get_the_content' );
		add_action( 'wp_ajax_nopriv_st_load_more_get_the_content', 'ajax_st_load_more_get_the_content' );
	}

	if ( ! function_exists( '_st_load_more_get_the_content_options' ) ) {
		function _st_load_more_get_the_content_options( WP_Query $query, array $attributes = null ) {
			$default_attributes = array( 'type' => 'content', 'content' => '' );
			$attributes         = $attributes ?: array();
			$attributes         = array_merge( $default_attributes, $attributes );

			$attributes['type'] = ( $attributes['type'] === 'main' ) ? 'extended' : $attributes['type'];

			if ( $attributes['type'] !== 'content' ) {
				unset( $attributes['content'] );
			}

			$payload = array(
				'post_id'    => $query->queried_object->ID,
				'attributes' => $attributes,
			);

			$options = array(
				'action'  => 'st_load_more_get_the_content',
				'payload' => $payload,
			);

			return $options;
		}
	}

	if (!function_exists('_st_load_more_get_the_content')) {
		function _st_load_more_get_the_content( $post = null, $attributes = null ) {
			$default_attributes = array( 'type' => 'content', 'content' => '' );
			$attributes         = $attributes ?: array();
			$attributes         = array_merge( $default_attributes, $attributes );

			$load_more_enabled = ( trim( get_option( 'st-data587', '' ) ) === 'yes' );
			$extended          = st_get_extended( $post, '続きを読む' );

			if ( ! $load_more_enabled || $extended['extended'] === '' || $attributes['type'] === 'content' || amp_is_amp() ) {
				return $attributes['content'];
			}

			$content               = apply_filters( 'the_content', $extended[ $attributes['type'] ] );
			$content               = str_replace( ']]>', ']]&gt;', $content );
			$uuid                  = wp_generate_uuid4();
			$load_more_loading_img = get_theme_file_uri( 'images/st_loading.gif' );

			/** @var WP_Query $query */
			$query = $GLOBALS['wp_query'];

			$options = wp_json_encode( _st_load_more_get_the_content_options( $query, $attributes ) );

			ob_start();
			?>

			<div data-st-load-more-content data-st-load-more-id="<?php echo esc_attr( $uuid ); ?>">
				<?php echo $content; ?>
			</div>

			<?php if ( $attributes['type'] === 'main' ): ?>
				<div class="load-more-action entry-content-load-more-action">
					<button class="load-more-btn" data-st-load-more="<?php echo esc_attr( $options ); ?>"
					        data-st-load-more-controls="<?php echo esc_attr( $uuid ); ?>"
					        data-st-load-more-loading-img="<?php echo esc_attr( $load_more_loading_img ); ?>">
						<?php echo $extended['more_text']; ?>
					</button>
				</div>
			<?php endif; ?>

			<?php
			return ob_get_clean();
		}
	}

	if ( ! function_exists( 'st_load_more_the_content' ) ) {
		function st_load_more_the_content( $content, $context ) {
			if ( ! in_array( 'single', $context, true ) && ! in_array( 'main', $context, true ) ) {
				return $content;
			}

			$attributes = array(
				'type'    => 'main',
				'content' => $content,
			);

			return _st_load_more_get_the_content( null, $attributes );
		}
	}

	add_filter( 'st_the_content', 'st_load_more_the_content', 10, 2 );
}

if ( $st_is_ex ) {
	if ( ! function_exists( 'st_taggroup' ) ) {
		function st_taggroup( $atts, $content = null ) {
			$globals = array();
			$globals = _st_store_global_query( $globals );

			$default_slides_to_show = array( 3, 2, 1 );

			$atts = shortcode_atts(
				array(
					'tag'            => '',
					'page'           => '5',
					'order'          => 'desc',
					'orderby'        => 'date',
					'slide'          => 'off',
					'slides_to_show' => implode( ',', $default_slides_to_show ),
					'slide_date'     => 'on',
					'slide_more'     => 'ReadMore',
					'slide_center'   => 'off',   
					'fullsize_type'  => '',
					'load_more'      => 'off',
					'type'           => '',
				),
				$atts
			);

			$atts = array_map( 'trim', $atts );

			list( $including_ids, $excluding_ids ) = _st_parse_term_id_string( $atts['tag'], 'post_tag' );

			$page = (int) $atts['page'];

		
			$order = strtoupper( $atts['order'] );
			$order = in_array( $order, array( 'ASC', 'DESC' ), true ) ? $order : 'DESC';

		
			$disable_all_slides = ( ! st_speed_off() && trim( get_option( 'st-data398' ) ) === 'yes' );   

			$slide          = ( $atts['slide'] === 'on' && ! $disable_all_slides );
			$slide_date     = ( $atts['slide_date'] !== 'off' );
			$slides_to_show = _st_parse_responsive_column_settings( $atts['slides_to_show'], $default_slides_to_show );
			$slide_center   = ( $atts['slide_center'] === 'on' );
			$fullsize_type  = in_array($atts['fullsize_type'], ['text', 'card'], true) ? $atts['fullsize_type'] : '';

		
			$load_more = (!$slide && $atts['load_more'] === 'on' );

			$type = st_is_ver_ex() ? $atts['type'] : '';   

		
			$tag_group_query = new WP_Query( array(
				'post_type'           => 'post',
				'tag__in'             => $including_ids,
				'tag__not_in'         => $excluding_ids,
				'orderby'             => $atts['orderby'],
				'order'               => $order,
				'posts_per_page'      => $page,
				'ignore_sticky_posts' => true,
			) );

			ob_start();

		
		
		
			$hide_thumbnail = (bool) trim( get_option( 'st-data5', '' ) );   
			$amp            = amp_is_amp() ? 'amp' : null;
			$is_slider      = ( $slide && ! $amp );
			$is_card        = ( ! $is_slider && $type === 'card' );

			if ( $is_slider ) {
				$template_slug = 'st-shortcode-slider';
				$vars = array(
					'slide_query'    => $tag_group_query,
					'slides_to_show' => $slides_to_show,
					'slide_date'     => $slide_date,
					'slide_more'     => trim( $atts['slide_more'] ),
					'slide_center'   => $slide_center,
					'fullsize_type'  => $fullsize_type,
					'is_rank'        => false,
					'show_category'  => true,
				);
			} else {
				$template_slug = $is_card ? 'st-shortcode-kanren-card-list' : 'st-shortcode-kanren';
				$attributes    = array(
					'tag__in'        => $including_ids,
					'tag__not_in'    => $excluding_ids,
					'orderby'        => $atts['orderby'],
					'order'          => $order,
					'posts_per_page' => $page,
					'slide_more'     => trim( $atts['slide_more'] ),   
					'load_more'      => (int) $load_more,
					'type'           => $type,
					'hide_thumbnail' => (int) $hide_thumbnail,
					'is_card'        => (int) $is_card,
				);

				$vars = array(
					'query'      => $tag_group_query,
					'attributes' => $attributes,
				);
			}

			st_get_template_part( $template_slug, $amp, $vars );

			return (string) ob_get_clean();
		}
	}

	add_shortcode( 'st-taggroup', 'st_taggroup' );

	if (!function_exists('_st_get_tax_group_posts')) {
		function _st_get_tax_group_posts( WP_Query $query, array $attributes = null ) {
			$attributes     = ( $attributes !== null ) ? $attributes : array();
			$amp            = amp_is_amp() ? 'amp' : null;
			$hide_thumbnail = isset( $attributes['hide_thumbnail'] ) ? (bool) $attributes['hide_thumbnail'] : false;
			$is_card        = isset( $attributes['is_card'] ) ? (bool) $attributes['is_card'] : false;
			$vars           = array(
				'query'      => $query,
				'attributes' => $attributes,
			);

			ob_start();

			if ( $is_card ) {
				st_get_template_part( 'st-shortcode-kanren-card-list', $amp, $vars );
			} elseif ( $hide_thumbnail ) {
				st_get_template_part( 'st-shortcode-kanren-thumbnail-off', $amp, $vars );
			} else {
				st_get_template_part( 'st-shortcode-kanren-thumbnail-on', $amp, $vars );
			}

			return (string) ob_get_clean();
		}
	}

	if ( ! function_exists( '_st_load_more_get_tax_group_posts_options' ) ) {
		function _st_load_more_get_tax_group_posts_options( WP_Query $query, array $attributes = null ) {
			$attributes = ( $attributes !== null ) ? $attributes : array();
			$paged      = max( 1, absint( $query->get( 'paged', '1' ) ) );
			$paged      = min( $paged + 1, $query->max_num_pages );

			$payload = array(
				'page'       => $paged,
				'attributes' => $attributes,
			);

			$options = array(
				'action'  => 'st_load_more_get_tax_group_posts',
				'payload' => $payload,
			);

			return $options;
		}
	}

	if ( ! function_exists( '_st_load_more_get_tax_group_posts' ) ) {
		function _st_load_more_get_tax_group_posts() {
			if ( ! isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) || strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) !== 'xmlhttprequest' ) {
				wp_die( - 1, 403 );
			}

			if ( ! wp_doing_ajax() ) {
				wp_die( - 1, 403 );
			}

			$data = array();

			try {
			
				$action  = (string) filter_input( INPUT_GET, 'action' );
				$payload = filter_input( INPUT_GET, 'payload', FILTER_DEFAULT, FILTER_FORCE_ARRAY ) ?: array();

				$payload = filter_var_array(
					$payload,
					array(
						'page'             => FILTER_DEFAULT,
						'attributes'     => array(
							'filter' => FILTER_DEFAULT,
							'flags'  => FILTER_REQUIRE_ARRAY,
						),
					)
				);

				$page       = (int) $payload['page'];
				$attributes = filter_var_array(
					$payload['attributes'] ?: array(),
					array(
						'category__in'     => array(
							'filter' => FILTER_DEFAULT,
							'flags'  => FILTER_REQUIRE_ARRAY,
						),
						'category__not_in' => array(
							'filter' => FILTER_DEFAULT,
							'flags'  => FILTER_REQUIRE_ARRAY,
						),
						'tag__in'          => array(
							'filter' => FILTER_DEFAULT,
							'flags'  => FILTER_REQUIRE_ARRAY,
						),
						'tag__not_in'      => array(
							'filter' => FILTER_DEFAULT,
							'flags'  => FILTER_REQUIRE_ARRAY,
						),
						'orderby'          => FILTER_DEFAULT,
						'order'            => FILTER_DEFAULT,
						'posts_per_page'   => FILTER_DEFAULT,
						'slide_more'       => FILTER_DEFAULT,
						'load_more'        => FILTER_DEFAULT,
						'type'             => FILTER_DEFAULT,
						'hide_thumbnail'   => FILTER_DEFAULT,
						'is_card'          => FILTER_DEFAULT,
					)
				);

				$attributes = array(
					'category__in'     => $attributes['category__in'] ?: array(),
					'category__not_in' => $attributes['category__not_in'] ?: array(),
					'tag__in'          => $attributes['tag__in'] ?: array(),
					'tag__not_in'      => $attributes['tag__not_in'] ?: array(),
					'posts_per_page'   => (int) $attributes['posts_per_page'],
					'orderby'          => $attributes['orderby'] ?: 'date',
					'order'            => $attributes['order'] ?: 'DESC',
					'slide_more'       => (string) $attributes['slide_more'],
					'load_more'        => 1,
					'type'             => (string) $attributes['type'],
					'hide_thumbnail'   => (int) $attributes['hide_thumbnail'],
					'is_card'          => (int) $attributes['is_card'],
				);

			
				$args = array(
					'post_type'           => 'post',
					'paged'               => $page,
					'posts_per_page'      => $attributes['posts_per_page'],
					'orderby'             => $attributes['orderby'],
					'order'               => $attributes['order'],
					'ignore_sticky_posts' => true,
				);

				if ( count( $attributes['category__in'] ) > 0 ) {
					$args['category__in'] = $attributes['category__in'];
				}

				if ( count( $attributes['category__not_in'] ) > 0 ) {
					$args['category__not_in'] = $attributes['category__not_in'];
				}

				if ( count( $attributes['tag__in'] ) > 0 ) {
					$args['tag__in'] = $attributes['tag__in'];
				}

				if ( count( $attributes['tag__not_in'] ) > 0 ) {
					$args['tag__not_in'] = $attributes['tag__not_in'];
				}

				if ( is_user_logged_in() ) {
					$args['post_status'] = array( 'publish', 'private' );
				} else {
					$args['post_status'] = array( 'publish' );
				}

				$query     = new WP_Query( $args );
				$next_page = (int) $payload['page'] + 1;
				$has_next  = _st_query_has_next_page( $query );

				$data = array(
					'has_next' => $has_next,
					'html'     => _st_get_tax_group_posts( $query, $attributes ),
					'options'  => array(),
				);

				if ( $has_next ) {
					$data['options'] = array(
						'action'  => $action,
						'payload' => array(
							'page'       => $next_page,
							'attributes' => $attributes,
						),
					);
				}
			} catch ( Exception $e ) {
				wp_send_json_error( 'error', 500 );
			}

			wp_send_json_success( $data, 200 );
		}
	}


	if ( trim( get_option( 'st-data421', '' ) ) === 'yes' ) {
		add_action( 'wp_ajax_st_load_more_get_tax_group_posts', '_st_load_more_get_tax_group_posts' );
		add_action( 'wp_ajax_nopriv_st_load_more_get_tax_group_posts', '_st_load_more_get_tax_group_posts' );
	}

}

if ( ! function_exists( 'st_postgroup' ) ) {
	function st_postgroup( $atts, $content = null ) {
		$globals = array();
		$globals = _st_store_global_query( $globals );

		$default_slides_to_show = array( 3, 2, 1 );

		$atts = shortcode_atts(
			array(
				'id'             => '1',
				'rank'           => '0',
				'slide'          => 'off',
				'slides_to_show' => implode( ',', $default_slides_to_show ),
				'slide_date'     => 'on',
				'slide_more'     => 'ReadMore',
				'slide_center'   => 'off',   
				'fullsize_type'  => '',
				'type'           => '',
			),
			$atts
		);

		$atts = array_map( 'trim', $atts );

	
		$post_ids = explode( ',', $atts['id'] );
		$post_ids = array_unique( array_map( 'intval', array_filter( $post_ids ) ) );

	
		$slide          = ( $atts['slide'] === 'on' );
		$slide_date     = ( $atts['slide_date'] !== 'off' );
		$slides_to_show = _st_parse_responsive_column_settings( $atts['slides_to_show'], $default_slides_to_show );
		$slide_center   = ( $atts['slide_center'] === 'on' );
		$fullsize_type  = in_array($atts['fullsize_type'], ['text', 'card'], true) ? $atts['fullsize_type'] : '';

		$type = st_is_ver_ex() ? $atts['type'] : '';   

		$post_group_query = new WP_Query( array(
			'post_type'           => 'any',
			'post__in'            => $post_ids,
			'posts_per_page'      => - 1,
			'orderby'             => 'post__in',
			'ignore_sticky_posts' => true,
		) );

		_st_restore_global_query( $globals );

		ob_start();

	
	
	
		$hide_thumbnail = (bool) trim( get_option( 'st-data5', '' ) );
		$amp            = amp_is_amp() ? 'amp' : null;
		$is_slider      = ( st_is_ver_ex() && $slide && ! $amp );
		$is_card        = ( st_is_ver_ex() && ! $is_slider && $type === 'card' );

		if ( $is_slider ) {
			$template_slug = 'st-shortcode-slider';
			$vars          = [
				'slide_query'    => $post_group_query,
				'slides_to_show' => $slides_to_show,
				'slide_date'     => $slide_date,
				'slide_more'     => trim( $atts['slide_more'] ),
				'slide_center'   => $slide_center,
				'fullsize_type'  => $fullsize_type,
				'is_rank'        => (bool) $atts['rank'],
				'show_category'  => ! $atts['rank'],
			];
		} else {
			$template_slug = $is_card ? 'st-shortcode-itiran-card-list' : 'st-shortcode-itiran';
			$attributes    = array(
				'post__in'       => $post_ids,
				'orderby'        => 'post__in',
				'order'          => 'DESC',
				'posts_per_page' => - 1,
				'is_rank'        => (bool) $atts['rank'],
				'type'           => $type,
				'hide_thumbnail' => (int) $hide_thumbnail,
				'is_card'        => (int) $is_card,
			);

			$vars = array(
				'query'      => $post_group_query,
				'attributes' => $attributes,
			);
		}

		st_get_template_part( $template_slug, $amp, $vars );

		$html = ob_get_clean();

		_st_restore_global_query( $globals );

		return $html;
	}
}
add_shortcode( 'st-postgroup', 'st_postgroup' );


if ( !function_exists( 'st_osusume' ) ) {
	function st_osusume( $atts, $content = null ) {
		ob_start();

		$hide_thumbnail = get_option( 'st-data5', '' );
		$amp            = amp_is_amp() ? 'amp' : null;

		if ( $hide_thumbnail === 'yes' ) {
			st_get_template_part( 'popular-thumbnail-off', $amp, array( 'doing_st_osusume_shortcode' => true ) );
		} else {
			st_get_template_part( 'popular-thumbnail-on', $amp, array( 'doing_st_osusume_shortcode' => true ) );
		}

		return ob_get_clean();
	}
}

add_shortcode( 'st-osusume', 'st_osusume' );

add_image_size( 'st_thumb150', 150, 150, true );
if ( trim($GLOBALS['stdata398']) === ''
	|| ( trim($GLOBALS['stdata321']) !== '' || trim($GLOBALS['stdata322']) !== '' || trim($GLOBALS['stdata323']) !== '' ) ) {
	add_image_size( 'st_post_slider_1', 640, 475, true );
	add_image_size( 'st_post_slider_2', 343, 254, true );
	add_image_size( 'st_post_slider_3', 202, 150, true );

}

if ( ! has_image_size( 'st_kaiwa_image' ) ) {
	add_image_size( 'st_kaiwa_image', 100, 100, true );
}

if ( ! function_exists( 'st_image_size_names_choose' ) ) {
	function st_image_size_names_choose( $sizes ) {
		return array_merge(
			$sizes,
			array(
			
				'st_kaiwa_image' => '会話風アイコン',
			)
		);
	}
}

add_filter( 'image_size_names_choose', 'st_image_size_names_choose' );

if ( ! function_exists( 'st_meta_thumbnail' ) ) {
	function st_meta_thumbnail() {
		$st_ogp_url = trim( get_option( 'st-data264', '' ) );
		if ( ( is_page() || is_single() ) && has_post_thumbnail() ) {
	  		echo '<meta name="thumbnail" content="'. wp_get_attachment_url( get_post_thumbnail_id() ) .'">'. "\n";
		}elseif( $st_ogp_url ) {
	  		echo '<meta name="thumbnail" content="'. esc_attr( $st_ogp_url) .'">'. "\n";
		}else {
		
		}
	}
}
add_action( 'wp_head', 'st_meta_thumbnail' );

add_action( 'init', 'my_custom_menus' );
if ( $st_is_ex ) {
	function my_custom_menus() {
		register_nav_menus(
		   array(
			  'primary-menu' => __( 'ヘッダーメニュー（PC※960px以上）', 'affinger' ),
			  'primary-menu-side' => __( 'ヘッダーメニュー（横列）', 'affinger' ),
			  'secondary-menu' => __( 'フッターメニュー', 'affinger' ),
			  'sidepage-menu' => __( 'サイドメニュー', 'affinger' ),
			  'sidepage-menu2' => __( 'サイドメニュー2', 'affinger' ),
			  'sidepage-menu3' => __( 'サイドメニュー3', 'affinger' ),
			  'guidemap-menu' => __( 'ガイドマップメニュー', 'affinger' ),
			  'guidemap-menu2' => __( 'ガイドマップメニュー2', 'affinger' ),
			  'smartphone-menu' => __( 'スマホスライドメニュー', 'affinger' ),
			  'smartphone-middlemenu' => __( 'スマホミドルメニュー', 'affinger' ),
			  'smartphone-footermenu' => __( 'スマホフッターメニュー', 'affinger' )
		   )
		);
	}
} elseif ( $st_is_af ) {
	function my_custom_menus() {
		register_nav_menus(
		   array(
			  'primary-menu' => __( 'ヘッダーメニュー', 'affinger' ),
			  'primary-menu-side' => __( 'ヘッダーメニュー（横列）', 'affinger' ),
			  'secondary-menu' => __( 'フッターメニュー', 'affinger' ),
			  'sidepage-menu' => __( 'サイドメニュー', 'affinger' ),
			  'guidemap-menu' => __( 'ガイドマップメニュー', 'affinger' ),
			  'guidemap-menu2' => __( 'ガイドマップメニュー2', 'affinger' ),
			  'smartphone-menu' => __( 'スマホスライドメニュー', 'affinger' ),
			  'smartphone-middlemenu' => __( 'スマホミドルメニュー', 'affinger' ),
			  'smartphone-footermenu' => __( 'スマホフッターメニュー', 'affinger' )
		   )
		);
	}
} else {
	function my_custom_menus() {
		register_nav_menus(
		   array(
			  'primary-menu' => __( 'ヘッダーメニュー', 'affinger' ),
			  'primary-menu-side' => __( 'ヘッダーメニュー（横列）', 'affinger' ),
			  'secondary-menu' => __( 'フッターメニュー', 'affinger' ),
			  'sidepage-menu' => __( 'サイドメニュー', 'affinger' ),
			  'smartphone-menu' => __( 'スマホスライドメニュー', 'affinger' ),
			  'smartphone-middlemenu' => __( 'スマホミドルメニュー', 'affinger' ),
			  'smartphone-footermenu' => __( 'スマホフッターメニュー', 'affinger' )
		   )
		);
	}
}

function _st_is_mobile_link_design_available() {
	if ( ! has_nav_menu( 'primary-menu-side' ) ) {   
		return false;
	}


	$is_primary_menu_side_enabled = ( get_option( 'st-data469' ) === 'yes' );

	return ( wp_is_mobile() && $is_primary_menu_side_enabled );
}

add_post_type_support( 'page', 'excerpt' );

if ( isset( $GLOBALS['stdata240'] ) && trim( $GLOBALS['stdata240'] ) === 'yes' ) {

	if ( ! function_exists( 'st_add_editor_styles' ) ) {
		function st_add_editor_styles( $settings, $editor_id ) {
			$st_editor_styles = array();
			$add_all          = ( is_admin() && function_exists( 'get_current_screen' ) );
			$add_all          = ( $add_all && $editor_id === 'content' );

			if ( $add_all ) {
				$screen  = get_current_screen();
				$add_all = $add_all && ( $screen && isset( $screen->id ) );
				$add_all = $add_all && (
					( $screen->id === 'post' && $screen->post_type === 'post' ) ||
					( $screen->id === 'page' && $screen->post_type === 'page' ) ||
					$screen->id === 'edit-page'
				);
			}

		
		
			if ( ! $add_all ) {
				add_editor_style( 'editor-style.css' );

				return $settings;
			}

		
			$st_editor_styles[] = get_template_directory_uri() . '/css/normalize.css';
			if ( isset( $GLOBALS["stdata400"] ) && $GLOBALS["stdata400"] === 'yes' ) {
				$st_editor_styles[] = get_template_directory_uri() . '/css/fontawesome/css/font-awesome.min.css';
			}
			if ( ! st_speed_on() && isset( $GLOBALS["stdata400"] ) && $GLOBALS["stdata400"] === 'yes' ) { $st_editor_styles[] = get_template_directory_uri() . '/css/fontawesome/css/font-awesome-animation.min.css'; }
			$st_editor_styles[] = get_template_directory_uri() . '/st_svg/style.css';
			$st_editor_styles[] = 'editor-style.css';
			$st_editor_styles[] = '//fonts.googleapis.com/css?family=Montserrat:400';

			if ( ( $custom_font = _st_get_google_font() ) !== null ) {
				$st_editor_styles[] = $custom_font;
			}

			$st_editor_styles[] = 'st-themecss-loader.php';
			if ( st_is_ver_ex_af() ) {
				$st_editor_styles[] = 'st-rankcss.php';
			} else {
				$st_editor_styles[] = 'st-tagcss.php';
			}
			$st_editor_styles[] = get_template_directory_uri() . '/editor-style-rich.php';

			if ( $add_all ) {
				foreach ( $st_editor_styles as $editor_style ) {
					add_editor_style( $editor_style );
				}
			}

			return $settings;
		}
	}
	add_filter( 'wp_editor_settings', 'st_add_editor_styles', 10, 2 );
}else{
	add_editor_style( 'editor-style.css' );
}

if ( ! function_exists( 'st_enqueue_block_editor_assets' ) ) {

	function st_enqueue_block_editor_assets() {
		wp_register_style(
			'st-block-editor-style',
			get_template_directory_uri() . '/st-themecss-loader.php?style=block-editor-style',
			apply_filters( 'st_block_editor_style_dependencies', array( 'wp-components' ) )
		);
		wp_enqueue_style( 'st-block-editor-style' );

	
		wp_register_script(
			'st-block-editor-js',
			get_template_directory_uri() . '/js/st-block-editor.js',
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			'1.0.0',
			true
		);
		if ( isset( $GLOBALS["stdata452"] ) && $GLOBALS["stdata452"] === 'yes' ) {
			wp_enqueue_script( 'st-block-editor-js' );
		}

		wp_register_script(
			'st-block-exclusion-editor-js',
			get_template_directory_uri() . '/js/st-block-exclusion-editor.js',
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			'1.0.0',
			true
		);
		if ( trim( $GLOBALS["stdata623"] ) === ''
			&& isset( $GLOBALS['wp_version'] ) && version_compare( $GLOBALS['wp_version'], '5.8-alpha', '>=' ) ) {
			wp_enqueue_script( 'st-block-exclusion-editor-js' );
		}
	}
}

add_action( 'enqueue_block_editor_assets', 'st_enqueue_block_editor_assets' );

if ( !function_exists( 'st_gutenberg_autosave' ) ) {

	function st_gutenberg_autosave( $editor_settings ) {
		if ( trim( $GLOBALS["stdata542"] ) !== '' ) {
			$st_gutenberg_autosave_time = intval( $GLOBALS["stdata542"] );
		} else {
			$st_gutenberg_autosave_time = 300;
		}
	  $editor_settings['autosaveInterval'] = $st_gutenberg_autosave_time;
	  return $editor_settings;
	}
}
if ( isset( $GLOBALS['wp_version'] ) && version_compare( $GLOBALS['wp_version'], '5.8-alpha', '>=' ) ) {
	add_filter( 'block_editor_settings_all', 'st_gutenberg_autosave' );
} else {
	add_filter( 'block_editor_settings', 'st_gutenberg_autosave' );
}

if ( !function_exists( 'st_custom_editor_settings' ) ) {
	function st_custom_editor_settings( $initArray ) {
		$initArray['body_id'] = 'primary';   
		$initArray['body_class'] = 'post';   
	
		$initArray['valid_children'] = '+body[style|i],+div[div|span],+span[span]';
	
	
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'st_custom_editor_settings' );

if ( isset( $GLOBALS['stdata128'] ) && trim( $GLOBALS['stdata128'] ) !== '' ) {
	$st_pcsite_width = (int) $GLOBALS['stdata128'];
	$st_content_width = $st_pcsite_width - 140;
}else{
	$st_content_width = 920;
}

if ( !isset( $content_width ) ) {
	$content_width = $st_content_width;
}

if ( trim ( $GLOBALS['stdata2'] ) === '' ) {
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
}

if ( isset($GLOBALS['stdata500']) && $GLOBALS['stdata500'] === 'yes' ) {
	add_action( 'pre_ping', function ( &$post_links, &$pung, int $post_ID ) {
		foreach ( $post_links as $key => $link ) {
			if ( 0 === strpos( $link, home_url() ) ) {
				unset( $post_links[ $key ] );
			}
		}
	}, 10, 3 );
}

if ( isset($GLOBALS['stdata634']) && $GLOBALS['stdata634'] === 'yes' ) {
	add_filter( 'media_library_infinite_scrolling', '__return_true' );
}

if ( ! function_exists( '_st_get_page_info' ) ) {
	function _st_get_page_info() {
		$post = get_post();
		$page = ( $page = (int) get_query_var( 'page', 1 ) ) ? $page : 1;
		$more = 0;

		if ( $post->ID === get_queried_object_id() && ( is_page() || is_single() ) ) {
			$more = 1;
		} elseif ( is_feed() ) {
			$more = 1;
		}

		$content = $post->post_content;

		if ( strpos( $content, '<!--nextpage-->' ) !== false ) {
			$content = str_replace( "\n<!--nextpage-->\n", '<!--nextpage-->', $content );
			$content = str_replace( "\n<!--nextpage-->", '<!--nextpage-->', $content );
			$content = str_replace( "<!--nextpage-->\n", '<!--nextpage-->', $content );

			if ( strpos( $content, '<!--nextpage-->' ) === 0 ) {
				$content = substr( $content, 15 );
			}

			$pages = explode( '<!--nextpage-->', $content );
		} else {
			$pages = array( $post->post_content );
		}

		$pages     = apply_filters( 'content_pagination', $pages, $post );
		$numpages  = count( $pages );
		$multipage = 0;

		if ( $numpages > 1 ) {
			if ( $page > 1 ) {
				$more = 1;
			}

			$multipage = 1;
		}

		return array(
			'multipage' => $multipage,
			'more'      => $more,
			'page'      => $page,
			'numpages'  => $numpages,
		);
	}
}

if ( ! function_exists( '_st_link_page' ) ) {
	function _st_link_page_url( $i ) {
		global $wp_rewrite;

		$post       = get_post();
		$query_args = array();

		if ( $i === 1 ) {
			$url = get_permalink();
		} else {
			if ( get_option( 'permalink_structure' ) === '' ||
			     in_array( $post->post_status, array( 'draft', 'pending' ) )
			) {
				$url = add_query_arg( 'page', $i, get_permalink() );
			} elseif ( get_option( 'show_on_front' ) === 'page' && (int) get_option( 'page_on_front' ) === $post->ID ) {
				$url = trailingslashit( get_permalink() ) .
				       user_trailingslashit( $wp_rewrite->pagination_base . '/' . $i, 'single_paged' );
			} else {
				$url = trailingslashit( get_permalink() ) . user_trailingslashit( $i, 'single_paged' );
			}
		}

		if ( is_preview() ) {
			if ( ( $post->post_status !== 'draft' ) && isset( $_GET['preview_id'], $_GET['preview_nonce'] ) ) {
				$query_args['preview_id']    = wp_unslash( $_GET['preview_id'] );
				$query_args['preview_nonce'] = wp_unslash( $_GET['preview_nonce'] );
			}

			$url = get_preview_post_link( $post, $query_args, $url );
		}

		return $url;
	}
}

if ( ! function_exists( 'st_adjacent_posts_rel_link' ) ) {
	function st_adjacent_posts_rel_link() {
		if ( is_single() || is_page() ) {
			$page_info = _st_get_page_info();
			$multipage = $page_info['multipage'];
			$page      = $page_info['page'];
			$numpages  = $page_info['numpages'];

			if ( ! $multipage ) {
				return;
			}

			if ( $page > 1 ) {
				echo '<link rel="prev" href="' . _st_link_page_url( $page - 1 ) . '" />' . PHP_EOL;
			}

			if ( $page < $numpages ) {
				echo '<link rel="next" href="' . _st_link_page_url( $page + 1 ) . '" />' . PHP_EOL;
			}

			return;
		}

		$paged = ( $paged = (int) get_query_var( 'paged', 1 ) ) ? $paged : 1;

		if ( get_previous_posts_link() ) {
			echo '<link rel="prev" href="' . get_pagenum_link( $paged - 1 ) . '" />' . PHP_EOL;
		}

		if ( get_next_posts_link() ) {
			echo '<link rel="next" href="' . get_pagenum_link( $paged + 1 ) . '" />' . PHP_EOL;
		}
	}
}

add_action('wp_head', 'st_adjacent_posts_rel_link');

if ( !function_exists( 'st_custom_content_more_link' ) ) {
	function st_custom_content_more_link( $output ) {
		$output = preg_replace( '/#more-[\d]+/i', '', $output );

		return $output;
	}
}
add_filter( 'the_content_more_link', 'st_custom_content_more_link' );

if ( !function_exists( 'no_self_ping' ) ) {
	function no_self_ping( &$links ) {
		$home = home_url();
		foreach ( $links as $l => $link )
			if ( 0 === strpos( $link, $home ) )
				unset($links[$l]);
	}
add_action( 'pre_ping', 'no_self_ping' );
}

if ( !function_exists( 'st_youtube_img' ) ) {
	function st_youtube_img( $youtube_id ) {

		extract(shortcode_atts(array(
			'id' => '',
		), $youtube_id), EXTR_SKIP);

		$youtube_thumb_url   = 'https://img.youtube.com/vi/' . $id . '/maxresdefault.jpg';
		$youtube_thumb_s_url = 'https://img.youtube.com/vi/' . $id . '/mqdefault.jpg';

		$youtube_thumb_exists = (bool) @file_get_contents( $youtube_thumb_url );

		if ( ! $youtube_thumb_exists ) {
			$youtube_thumb_url = $youtube_thumb_s_url;
		}

		$youtube_link = '<div class="st-youtube"><a href="//www.youtube.com/watch?v='.$id.'" target="_blank" rel="nofollow"><i class="st-fa st-svg-youtube-play"></i><img src="' . $youtube_thumb_url . '" alt="" width="100%" height="auto" /></a></div>';

		return $youtube_link;
	}

	add_shortcode( 'youtube', 'st_youtube_img' );
}

if ( !function_exists( 'st_wrap_iframe_in_div' ) ) {
	function st_wrap_iframe_in_div( $the_content ) {
	
		$the_content =
		    preg_replace( '/<iframe[^>]+?youtube\.com[^<]+?<\/iframe>/is',
			   '<div
		class="youtube-container">${0}</div>',
			   $the_content );

		return $the_content;
	}
}

if ( !function_exists( 'st_singular_wrap_iframe_in_div' ) ) {
	function st_singular_wrap_iframe_in_div( $the_content ) {
		if ( is_singular() ) {
			$the_content = st_wrap_iframe_in_div( $the_content );
		}

		return $the_content;
	}
}
add_filter('the_content','st_singular_wrap_iframe_in_div');

if ( !function_exists( 'st_register_sidebars' ) ) {
	function st_register_sidebars() {
		register_sidebar( array(
			'id' => 'sidebar-10',
			'name' => 'サイドバートップ',
			'description' => 'サイドバーの一番上に表示されるコンテンツエリアです。',
			'before_widget' => '<div id="%1$s" class="ad %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title"><span>',
			'after_title' => '</span></p>',
		) );


		register_sidebar( array(
			'id' => 'sidebar-1',
			'name' => 'サイドバーウィジェット',
			'description' => 'サイドバーに表示されるコンテンツです',
			'before_widget' => '<div id="%1$s" class="ad %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title"><span>',
			'after_title' => '</span></p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-2',
			'name' => 'スクロール広告用',
			'description' => 'サイドバーの下でコンテンツに追尾するボックスエリアです。「カスタムHTML」等をここにドロップして内容を入力して下さい。アドセンスは禁止です。※PC以外では非表示部分',
			'before_widget' => '<div id="%1$s" class="ad %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title"><span>',
			'after_title' => '</span></p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-3',
			'name' => '広告・Googleアドセンス用336px（A）',
			'description' => 'Googleアドセンス336pxに適したボックス。PC閲覧時記事下に表示される1つ目。「カスタムHTML」をここにドロップしてコードを入力して下さい。',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-29',
			'name' => '広告・Googleアドセンス用336px（B）',
			'description' => 'Googleアドセンス336pxに適したボックス。PC閲覧時記事下に表示される2つ目。「カスタムHTML」をここにドロップしてコードを入力して下さい。',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-4',
			'name' => '広告・Googleアドセンスのスマホ',
			'description' => 'スマホのGoogleアドセンスボックスで記事下に1つ及び[adsense]ショートコードを利用した時にも挿入されます。「カスタムHTML」をここにドロップしてコードを入力して下さい。',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-26',
			'name' => '広告・Googleインフィード広告',
			'description' => 'Googleのインフィード広告を一覧に表示（※テーマ管理で別途表示を有効化）。「カスタムHTML」をここにドロップしてコードを入力して下さい。',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-23',
			'name' => 'PCのみ投稿記事上に表示',
			'description' => 'PC閲覧時のみ投稿記事上（AMPを除く）に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。',
			'before_widget' => '<div id="%1$s" class="st-widgets-box pc-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-20',
			'name' => '広告・スマホ上部のみ',
			'description' => 'スマホ閲覧時にヘッダー下に表示される「レスポンシブ リンク」専用エリア。「テキスト」をここにドロップしてコードを入力して下さい。',
			'before_widget' => '<div id="%1$s" class="st-sp-top-only-widgets adsbygoogle %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-9',
			'name' => '広告・スマホ記事下のみ',
			'description' => 'スマホのみ記事下に表示されるボックスエリアです。',
			'before_widget' => '<div id="%1$s" class="sc-post-widgets-underonly %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-18',
			'name' => WG_MB_FOOTER,
			'description' => 'スマホフッターに固定する広告用ウィジェットエリアです※要素が画面の高さを超えないよう注意してください（EX版ではテーマ管理の「Google・広告 &gt; スマホフッター広告」でフロート化できます）',
			'before_widget' => '<div id="footer-ad" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-16',
			'name' => '投稿記事の上に一括表示',
			'description' => '投稿記事の上に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。',
			'before_widget' => '<div id="%1$s" class="st-widgets-box post-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-37',
			'name' => '投稿記事タイトル下に一括表示',
			'description' => '投稿記事タイトル（及び投稿日）下に一括表示されます。※「記事ごとのヘッダーデザイン」使用時はぱんくず下',
			'before_widget' => '<div id="%1$s" class="st-widgets-box post-widgets-middle %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-5',
			'name' => '投稿記事の下に一括表示',
			'description' => '投稿記事の下に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。',
			'before_widget' => '<div id="%1$s" class="st-widgets-box post-widgets-bottom %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-17',
			'name' => '固定記事の上に一括表示',
			'description' => '固定記事の上に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。',
			'before_widget' => '<div id="%1$s" class="st-widgets-box page-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-38',
			'name' => '固定記事タイトル下に一括表示',
			'description' => '固定記事タイトル下に一括表示されます。※フロントページを除く',
			'before_widget' => '<div id="%1$s" class="st-widgets-box post-widgets-middle %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-6',
			'name' => '固定記事の下に一括表示',
			'description' => '固定記事の下に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。',
			'before_widget' => '<div id="%1$s" class="st-widgets-box page-widgets-bottom %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-8',
			'name' => 'ヘッダー右（フッター）ウィジェット',
			'description' => 'ヘッダー右とフッターに表示されるウィジェットです※タイトルは反映されません（フッターはテーマ管理で非表示に出来ます）',
			'before_widget' => '<div id="%1$s" class="headbox %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-31',
			'name' => 'ヘッダー画像エリア上のウィジェット',
			'description' => 'ヘッダー画像の上に挿入するウィジェットです。',
			'before_widget' => '<div id="%1$s" class="top-content %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-14',
			'name' => 'ヘッダー画像エリアウィジェット',
			'description' => 'ヘッダー画像の代わりに挿入するウィジェットです。',
			'before_widget' => '<div id="%1$s" class="top-content %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-28',
			'name' => 'ヘッダー画像エリア下のウィジェット',
			'description' => 'ヘッダー画像の下に挿入するウィジェットです。',
			'before_widget' => '<div id="%1$s" class="st-header-under-widgets %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-36',
			'name' => 'フッター一括ウィジェット',
			'description' => 'フッター上部に一括で表示されるウィジェットです',
			'before_widget' => '<div id="%1$s" class="footer-topbox %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-11',
			'name' => 'フッター右用ウィジェット（2列目）',
			'description' => 'フッターの右側に表示されるウィジェットです。ここを使用するとPCで見た時にフッターのロゴ等が左寄りになり2カラムになります。',
			'before_widget' => '<div id="%1$s" class="footer-rbox %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-30',
			'name' => 'フッター右用ウィジェット（3列目）',
			'description' => 'フッターの右側に表示されるウィジェットです。※「フッター右用ウィジェット（2列目）」が使用されている場合のみ表示されます',
			'before_widget' => '<div id="%1$s" class="footer-rbox-b %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-12',
			'name' => 'トップページ上部ウィジェット',
			'description' => 'トップページの上部に表示されるウィジェットです。「お知らせ」や「告知」スペースなどに',
			'before_widget' => '<div id="%1$s" class="top-wbox-t %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-35',
			'name' => 'トップページ中部ウィジェット',
			'description' => 'トップページの中部（挿入コンテンツと一覧の間）に表示されるウィジェットです。トップのみに表示したいリンクや広告などに',
			'before_widget' => '<div id="%1$s" class="top-wbox-u %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-13',
			'name' => 'トップページ下部ウィジェット',
			'description' => 'トップページの最下部に表示されるウィジェットです。トップのみに表示したいリンクや広告などに',
			'before_widget' => '<div id="%1$s" class="top-wbox-u %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-15',
			'name' => 'オリジナルのショートコード作成ウィジェット',
			'description' => 'ショートコードoriginalscの挿入することで表示できるウィジェットです',
			'before_widget' => '<div id="%1$s" class="%2$s" style="padding:10px 0;">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-19',
			'name' => 'AMPサイドバーウィジェット',
			'description' => 'AMP専用サイドバーに表示されるコンテンツです※一部未対応タグがございます',
			'before_widget' => '<div id="%1$s" class="ad %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title"><span>',
			'after_title' => '</span></p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-21',
			'name' => 'カテゴリの上に一括表示',
			'description' => 'カテゴリページの上に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。（カテゴリ別に表示するショートコード[catonly cat="id"]表示したい内容[/catonly]が利用できます）※タイトルは反映されません',
			'before_widget' => '<div id="%1$s" class="st-widgets-box cat-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-22',
			'name' => 'カテゴリの下に一括表示',
			'description' => 'カテゴリページの下に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。（カテゴリ別に表示するショートコード[catonly cat="id"]表示したい内容[/catonly]が利用できます）※タイトルは反映されません',
			'before_widget' => '<div id="%1$s" class="st-widgets-box cat-widgets-bottom %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-24',
			'name' => '404ページ',
			'description' => '記事が見つからない時に表示される404ページに挿入するウィジェットです',
			'before_widget' => '<div id="%1$s" class="st-w-404 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h5">',
			'after_title' => '</h5>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-25',
			'name' => 'スライドメニュー内上に表示',
			'description' => 'スライドメニュー上部に一括表示されます。※JSによりメニュー内の高さを取得するため挿入コンテンツによっては読み込みが遅くなる場合等がございます',
			'before_widget' => '<div id="%1$s" class="st-widgets-box ac-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-27',
			'name' => 'スライドメニュー内下に表示',
			'description' => 'スライドメニュー下部に一括表示されます。※JSによりメニュー内の高さを取得するため挿入コンテンツによっては読み込みが遅くなる場合等がございます',
			'before_widget' => '<div id="%1$s" class="st-widgets-box ac-widgets-bottom %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-34',
			'name' => '検索（スライド / オーバーレイ）に表示',
			'description' => 'スマホヘッダーの検索ボタンで開くエリアに表示されます。※JSによりメニュー内の高さを取得するため挿入コンテンツによっては読み込みが遅くなる場合等がございます',
			'before_widget' => '<div id="%1$s" class="st-widgets-box search-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-32',
			'name' => '検索結果ページ（上部）に表示',
			'description' => '検索結果ページの上部に表示されます',
			'before_widget' => '<div id="%1$s" class="st-widgets-box search-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-33',
			'name' => '検索結果ページ（下部）に表示',
			'description' => '検索結果ページの下部に表示されます',
			'before_widget' => '<div id="%1$s" class="post st-widgets-box search-widgets-top %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

	}
}
add_action( 'widgets_init', 'st_register_sidebars' );

if ( !function_exists( 'st_get_mtime' ) ) {
	function st_get_mtime( $format ) {
		$mtime = (int) get_the_modified_time( 'Ymd' );
		$ptime = (int) get_the_time( 'Ymd' );

		if ( $ptime > $mtime ) {
			return get_the_time( $format );
		} elseif ( $ptime === $mtime ) {
			return null;
		} else {
			return get_the_modified_time( $format );
		}
	}
}

if ( !function_exists( 'st_rss_feed_copyright' ) ) {
	function st_rss_feed_copyright( $content ) {
		$content = $content . '<p>Copyright &copy; ' . esc_html( date( 'Y' ) ) .
				 ' <a href="' . esc_url( home_url() ) . '">' .
				 apply_filters( 'bloginfo', get_bloginfo( 'name' ), 'name' ) .
				 '</a> All Rights Reserved.</p>';

		return $content;
	}
}
add_filter( 'the_excerpt_rss', 'st_rss_feed_copyright' );
add_filter( 'the_content_feed', 'st_rss_feed_copyright' );

if ( !function_exists( 'st_showads' ) ) {
	function st_showads() {
		ob_start();

		get_template_part( 'st-ad' );

		$ads = ob_get_clean();

		return $ads;
	}

	add_shortcode( 'adsense', 'st_showads' );
}

if ( !function_exists( 'st_shortcode' ) ) {
	function st_shortcode() {
		ob_start();

		get_template_part( 'st-shortcode' );

		$osc = ob_get_clean();

		return $osc;
	}

	add_shortcode( 'originalsc', 'st_shortcode' );
}

if ( !function_exists( 'st_stchildlink' ) ) {
	function st_stchildlink() {
		global $post;
		$args = array(
			'post_parent' => $post->ID,
			'post_type' => 'page',
			'orderby' => 'menu_order',
			'order'   => 'ASC',
		);

		$subpages = new WP_query( $args );

		if ( $subpages->have_posts() ) {
			$output = '<aside class="pagelist-box"><div class="st-childlink">';

			while ( $subpages->have_posts() ) {
				$subpages->the_post();
				$output .= '<p class="kopage-t"><a href="' . esc_url( apply_filters( 'the_permalink', get_permalink() ) ) . '">' .get_the_title() .'</a></p>' .
						 apply_filters( 'the_excerpt', get_the_excerpt() );
			}
			wp_reset_postdata();

			$output .= '</div></aside>';

		} else {
			$output = '';
		}

		return $output;
	}

	add_shortcode( 'stchildlink', 'st_stchildlink' );
}

if ( !function_exists( 'st_shortcode_tp' ) ) {
	function st_shortcode_tp( $atts, $content = '' ) {
		return get_stylesheet_directory_uri() . '/' . ltrim($content, '/\\');
	}

	add_shortcode( 'tp', 'st_shortcode_tp' );
}

if ( !function_exists( 'st_shortcode_commentout' ) ) {
	function st_shortcode_commentout( $atts, $content = null ) {
		return null;
	}
	add_shortcode('st-out', 'st_shortcode_commentout');
}

if ( ! function_exists( 'st_svg_close_class' ) ) {
	function st_svg_close_class( $base_name = null ) {
		$base_name = ( $base_name !== null ) ? $base_name : 'st-svg-menu';

		$st_svg_close_icon = $GLOBALS['stdata247'] ? $GLOBALS['stdata247'] : '';
		$modifier          = '';

		if ( $st_svg_close_icon === 'thin' ) {
			$modifier = '_thin';
		} elseif ( $st_svg_close_icon === 'cut' ) {
			$modifier = '_cut';
		}

		echo esc_attr( $base_name . $modifier );
	}
}

if ( !function_exists( 'st_wrap_class' ) ) {
	function st_wrap_class() {
		global $wp_query;

		if ( is_single() ||  is_page() ) {
			$postID = $wp_query->post->ID;
			$column1 = get_post_meta( $postID, 'columnck', true );
		} elseif ( is_home() && ! is_front_page() ) {
			$postID  = get_option( 'page_for_posts' );
			$column1 = get_post_meta( $postID, 'columnck', true );
		} else {
			$column1 = '';
		}

		$stdata11 = get_option( 'st-data11' );

		if ( st_is_ver_ex() && isset($GLOBALS['stdata375']) && $GLOBALS['stdata375'] === 'yes' ) {
			$st_lp_wide_shadow = ' st-lp-wide-shadow';
		} else {
			$st_lp_wide_shadow = '';
		}

		if( is_category() ) {
			$the_cat_id = get_query_var('cat');
			$term_meta  = st_get_term_meta($the_cat_id);
		} elseif ( is_tag() ) {
			$the_tag_id = get_queried_object_id();
			$term_meta  = st_get_term_meta( $the_tag_id );
		}

		if ( ( ( is_home() && ! is_front_page() ) || is_single() || is_page() ) && ( $column1 === 'lpwide' ) ) {

			$wrapclass = 'colum1 lp st-lp-wide' . $st_lp_wide_shadow;

		} elseif ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'yes' )                           
				  || ( is_front_page() && $stdata11 === 'yes' ) || ( $column1 === 'yes' && ! is_front_page() )              
				  || ( is_category() && ( isset($GLOBALS['stdata233']) && $GLOBALS['stdata233'] === 'yes' ) ) )
		{

			if ( isset($GLOBALS['stdata366']) && $GLOBALS['stdata366'] === 'yes' ) {
				$wrapclass = 'colum1 lp st-lp-wide' . $st_lp_wide_shadow;
			}else{
				$wrapclass = 'colum1';
			}

		} elseif ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'lp' )
				  || ( is_front_page() && $stdata11 === 'lp' )                           
				  || ( $column1 === 'lp' && ! is_front_page() ) )                         
		{

			if ( isset($GLOBALS['stdata366']) && $GLOBALS['stdata366'] === 'yes' ) {
				$wrapclass = 'colum1 lp st-lp-wide' . $st_lp_wide_shadow;
			}else{
				$wrapclass = 'colum1 lp';
			}

		} elseif ( ( is_tag() && trim( $term_meta['colom_check'] ) !== '' ) || ( is_category() && trim( $term_meta['colom_check'] ) !== '' ) ) {

			if ( isset($GLOBALS['stdata366']) && $GLOBALS['stdata366'] === 'yes' ) {
				$wrapclass = 'colum1 lp st-lp-wide' . $st_lp_wide_shadow;
			}else{
				$wrapclass = 'colum1';
			}

		} elseif( is_front_page() && isset( $stdata11 ) && $stdata11 === 'lp-wide' ) {
			$wrapclass = 'colum1 lp st-lp-wide' . $st_lp_wide_shadow;

		} else {

			$wrapclass = '';

		}

		echo esc_attr( $wrapclass );
	}
}

if ( !function_exists( 'st_wrap_class_check' ) ) {
	function st_wrap_class_check() {
	
		if ( in_array( get_option( 'st-data77' ), array( 'yes', 'lp' ), true ) ) {
			return true;
		}

		$queried_object_id = get_queried_object_id();

	
		if ( ( ( is_home() && ! is_front_page() ) || is_single() || is_page() ) && get_post_meta( $queried_object_id, 'columnck', true ) === 'yes' ) {
			return true;
		}

	
		if ( is_front_page() && get_option( 'st-data11' ) === 'yes' ) {
			return true;
		}

	
		if ( is_category() && get_option( 'st-data233' ) === 'yes' ) {
			return true;
		}

		return false;
	}
}

if ( !function_exists( 'st_hidden_class' ) ) {
	function st_hidden_class() {
		if ( (is_single() && isset($GLOBALS['stdata24']) && $GLOBALS['stdata24'] === 'yes') ||
		( is_page() && isset($GLOBALS['stdata104']) && $GLOBALS['stdata104'] === 'yes' ) || 
		( ( isset($GLOBALS['stdata24']) && $GLOBALS['stdata24'] === 'yes') && ( isset($GLOBALS['stdata104']) && $GLOBALS['stdata104'] === 'yes') )){
		$hiedeclass = 'st-hide';
		}else{
		$hiedeclass = '';
		}
	echo esc_attr( $hiedeclass );
	}
}


if ( !function_exists( 'st_head_class' ) ) {
	function st_head_class() {
		if ( isset($GLOBALS['stdata52']) && $GLOBALS['stdata52'] === 'yes' ) {
		$headwide = 'st-headwide';
		}else{
		$headwide = '';
		}
	echo esc_attr( $headwide );
	}
}

if ( !function_exists( 'st_hide_header' ) ) {
	function st_hide_header() {
		$hide_header = false;

		if ( is_single() or is_page() ) {
			global $wp_query;
			$postID = $wp_query->post->ID;
			if ( get_post_meta( $postID, 'headerwidget_set', true ) === 'yes' ){
				$hide_header = true;
			}else{
				$hide_header = false;
			}
		}

		if( ! wp_is_mobile() && isset( $GLOBALS["stdata613"] ) && $GLOBALS["stdata613"] === 'yes' ) {
			if ( is_front_page() && isset( $GLOBALS["stdata625"] ) && $GLOBALS["stdata625"] === 'yes' ) {
				$hide_header = false;
			} else {
				$hide_header = true;
			}
		} elseif ( wp_is_mobile() && isset( $GLOBALS["stdata614"] ) && $GLOBALS["stdata614"] === 'yes' ) {
			if ( is_front_page() && isset( $GLOBALS["stdata626"] ) && $GLOBALS["stdata626"] === 'yes' ) {
				$hide_header = false;
			} else {
				$hide_header = true;
			}			
		}
		return $hide_header;
	}
}

if ( !function_exists( 'st_headerwide_class' ) ) {
	function st_headerwide_class() {
		if ( isset($GLOBALS['stdata29']) && $GLOBALS['stdata29'] === 'yes' ) {
			$headerwide = '-wide';
		}else{
			$headerwide = '';
		}

	echo esc_attr( $headerwide );
	}
}

if ( !function_exists( 'st_get_marugazou_class' ) ) {
	function st_get_marugazou_class() {
		if ( isset($GLOBALS['stdata48']) && $GLOBALS['stdata48'] === 'yes' ) {
			$kadomaru = 'kadomaru';
		}else{
			$kadomaru = '';
		}

		return $kadomaru;
	}
}

if ( !function_exists( 'st_marugazou_class' ) ) {
	function st_marugazou_class() {
		echo esc_attr( st_get_marugazou_class() );
	}
}
if ( !function_exists( 'st_marugazou_r_class' ) ) {
	function st_marugazou_r_class() {
		if ( isset($GLOBALS['stdata48']) && $GLOBALS['stdata48'] === 'yes' ) {
			$kadomaru_r = 'kadomaru';
		}else{
			$kadomaru_r = '';
		}

	return esc_attr( $kadomaru_r );
	}
}

if ( !function_exists( 'st_eyecatch_class' ) ) {
	function st_eyecatch_class() {

		if ( st_is_ver_ex() ) {
			global $wp_query;

			if ( is_single() or is_page() ) {
				$postID = $wp_query->post->ID;
			} else {
				$postID = '';
			}
			$show_youtube_thum  = ( get_post_meta( $postID, 'st_youtube_eyecatch', true ) === 'yes' );          
		} else {
			$show_youtube_thum  = '';
		}

		if ( isset($GLOBALS['stdata241']) && $GLOBALS['stdata241'] === 'yes' ) {
			$st_eyecatch_class = 'st-eyecatch';
		} elseif ( ! $show_youtube_thum && isset($GLOBALS['stdata241']) && $GLOBALS['stdata241'] === 'photo' ) {
			$st_eyecatch_class = 'st-photohu';
		} else {
			$st_eyecatch_class = '';
		}

		echo esc_attr( $st_eyecatch_class );
	}
}

if ( !function_exists( 'st_text_copyck' ) ) {
	function st_text_copyck() {
		global $wp_query;
		if( ! st_is_home_check() && is_single() or is_page() && !is_front_page() ){
			$postID = $wp_query->post->ID;
			$textcopyck1 = get_post_meta( $postID, 'textcopyck', true );
		} elseif ( st_is_home_check() ) {
          $postID = get_option( 'page_for_posts' );
          $textcopyck1 = get_post_meta( $postID, 'textcopyck', true );
		}else{
		$textcopyck1 = '';
		}

	if ( isset( $textcopyck1 ) && $textcopyck1 === 'yes' ){
		$st_textcopyck = '';
	} else {
		if ( ! is_user_logged_in() && ( isset($GLOBALS['stdata19']) && $GLOBALS['stdata19'] === 'yes' ) ) {
			$st_textcopyck = 'oncontextmenu="return false" onMouseDown="return false;" style="-moz-user-select: none; -khtml-user-select: none; user-select: none;-webkit-touch-callout:none; -webkit-user-select:none;"';
		} else {
			$st_textcopyck = '';
		}
	}
		echo $st_textcopyck ;
	}
}

if (!function_exists('st_metadescription_head')) {
	function st_metadescription_head() {
		if ( trim( $GLOBALS["stdata34"] ) !== '' && ( is_front_page()) ) {
		$stdescription_top = esc_attr( $GLOBALS["stdata34"] );
		echo '<meta name="description" content="' . $stdescription_top .'">'. "\n";
		}

	}
}
add_action('wp_head', 'st_metadescription_head');

if (!function_exists('st_metakeywords_head')) {
	function st_metakeywords_head() {
		if ( trim( $GLOBALS["stdata46"] ) !== '' && ( is_front_page()) ) {
		$stmetakeywords_top = esc_attr( $GLOBALS["stdata46"] );
		echo '<meta name="keywords" content="' . $stmetakeywords_top .'">'. "\n";
		}

	}
}
add_action('wp_head', 'st_metakeywords_head');

if (!function_exists('st_satikoadds_head')) {
	function st_satikoadds_head() {
		if ( trim( $GLOBALS["stdata14"] ) !== '' ) {
		$satiko = stripslashes( $GLOBALS["stdata14"] );
		echo '<meta name="google-site-verification" content="'.$satiko.'" />'."\n";
		}
	}
}
add_action('wp_head', 'st_satikoadds_head');

if ( $st_is_ex ) {
	if ( !function_exists( 'st_code_body' ) ) {
		function st_code_body() {
			if ( trim( $GLOBALS["stdata422"] ) !== '' ) {
			$code_body_top = stripslashes ( $GLOBALS["stdata422"] );
			echo $code_body_top ."\n";
			}
		}
	}
}

if ( isset( $GLOBALS["stdata496"] ) && $GLOBALS["stdata496"] === 'yes' ) {
	if ( !function_exists( 'st_pinterest_imgpin_footer ' ) ) {
		function st_pinterest_imgpin_footer() {
			echo '<script async defer data-pin-hover="true" data-pin-tall="true" data-pin-round="true" src="//assets.pinterest.com/js/pinit.js"></script>' ."\n";
		}
	}
	add_action( 'wp_footer', 'st_pinterest_imgpin_footer', 1 );
}

if ( trim( $GLOBALS["stdata496"] ) === '' && trim( $GLOBALS["stdata495"] ) === '' ) {
	if ( !function_exists( 'st_pinterest_footer ' ) ) {
		function st_pinterest_footer() {
			echo '<script async defer src="//assets.pinterest.com/js/pinit.js"></script>' ."\n";
		}
	}
	add_action( 'wp_footer', 'st_pinterest_footer', 1 );
}

if ( !function_exists( 'st_kaiseki_footer ' ) ) {
	function st_kaiseki_footer() {
		if ( trim( $GLOBALS["stdata23"] ) !== '' ) {
		$kaiseki = stripslashes ( $GLOBALS["stdata23"] );
		echo $kaiseki ."\n";
		}
	}
}
add_action( 'wp_footer', 'st_kaiseki_footer', 1 );


if ( !function_exists( 'st_code_header' ) ) {
	function st_code_header() {
		if ( trim( $GLOBALS["stdata130"] ) !== '' ) {
		$st_code_h = stripslashes ( $GLOBALS["stdata130"] );
		echo $st_code_h ."\n";
		}
	}
}
add_action( 'wp_head', 'st_code_header', 10 );

if ( !function_exists( 'st_login_ver' ) ) {
	function st_login_ver() {
		if ( st_is_ver_ex() ) {
			$ex = "EX";
		} else {
			$ex = "";
		}
		$my_theme = wp_get_theme(get_template());
		echo '<!-- '. $my_theme->Name . $ex . ' ver' . $my_theme->Version .' action -->';
	}
}
add_action( 'login_footer', 'st_login_ver', 1 );

if ( ! function_exists( 'st_auto_adsense_code_header' ) ) {
	function st_auto_adsense_code_header() {
		$hide_on_top      = (bool) get_option( 'st-data243', '' );
		$hide_on_post     = (bool) get_option( 'st-data244', '' );
		$hide_on_page     = (bool) get_option( 'st-data245', '' );
		$hide_on_category = (bool) get_option( 'st-data246', '' );

		if (
			is_404() ||
			( is_front_page() && $hide_on_top ) ||
			( is_single() && $hide_on_post ) ||
			( is_page() && $hide_on_page ) ||
			( is_category() && $hide_on_category )
		) {
			return;
		}

		if ( is_single() || is_page() ) {
			$post_id         = get_queried_object_id();
			$no_auto_adsense = (bool) get_post_meta( $post_id, 'auto_adsense_koukoku_set', true );
			$no_ads          = (bool) get_post_meta( $post_id, 'koukoku_set', true );

			if ( $no_auto_adsense || $no_ads ) {
				return;
			}
		}

	
		$auto_adsense_code = trim( get_option( 'st-data242', '' ) );

		if ( $auto_adsense_code !== '' ) {
			echo stripslashes( $auto_adsense_code ) . "\n";
		}
	}
}
add_action( 'wp_head', 'st_auto_adsense_code_header' );

if ( !function_exists( 'st_playnow_footer ' ) ) {
	function st_playnow_footer() {
		if ( ! st_is_background_video_available( 'youtube' ) ) {
			return;
		}

		if( ! wp_is_mobile() ) {
			if ( ((trim( $GLOBALS["stdata110"] ) !== '') && (trim( $GLOBALS["stdata111"] ) !== '')) && (trim( $GLOBALS["stdata117"] ) !== '') && ( ($GLOBALS["stdata117"])  === 'yes') ) {
				$playurl = esc_attr($GLOBALS["stdata110"]) ;
				if( is_front_page() || (trim( $GLOBALS["stdata116"] ) !== '') && ( ($GLOBALS["stdata116"])  === 'yes')) {
					echo '<p id="playnow"><i class="st-fa st-svg-youtube-play" aria-hidden="true"></i><a href="//youtu.be/'.$playurl.'" rel="nofollow" target="_blank">PLAY NOW</a></p>';
				}
			}
		}
	}
}
add_action( 'wp_footer', 'st_playnow_footer', 1 );

if ( !function_exists( 'st_add_author_filter' ) ) {
	function st_add_author_filter() {
		global $post_type;
		if ( $post_type == 'post' ) {
			wp_dropdown_users( array('show_option_all' => 'すべてのユーザー', 'name' => 'author') );
		}
	}
}
add_action( 'restrict_manage_posts', 'st_add_author_filter' );

if ( !function_exists( 'st_tiny_mce_before_init' ) ) {
	function st_tiny_mce_before_init( $init_array ) {

	$init_array['block_formats'] = '段落=p;見出し2=h2;見出し3=h3;見出し4=h4;見出し5=h5;見出し6=h6';
	$init_array['fontsize_formats'] = '70% 80% 90% 120% 130% 150% 200% 250% 300%';


	$is_ver_ex_af = st_is_ver_ex_af();

	$style_formats = array (
		array(
			'title' => 'テキスト',
			'items' => array(
				array( 'title' => '赤字', 'inline' => 'span', 'classes' => 'st-aka' ),
				array( 'title' => '太字', 'inline' => 'span', 'classes' => 'huto' ),
				array( 'title' => '赤字（太字）', 'inline' => 'span', 'classes' => 'hutoaka' ),
				array( 'title' => '大文字', 'inline' => 'span', 'classes' => 'oomozi' ),
				array( 'title' => '小文字', 'block' => 'p', 'classes' => 'komozi' ),
				array( 'title' => 'ドット線', 'inline' => 'span', 'classes' => 'dotline' ),
				array( 'title' => '参照リンク', 'block' => 'p', 'classes' => 'st-share' ),
				array( 'title' => '参考', 'inline' => 'span', 'classes' => 'sankou' ),
				array( 'title' => '必須', 'inline' => 'span', 'classes' => 'st-hisu' ),
				array( 'title' => '打消し', 'inline' => 'del' ),
				array( 'title' => 'code', 'inline' => 'code' ),
				array( 'title' => 'code風', 'inline' => 'span', 'classes' => 'st-code' ),
				array( 'title' => 'NotoSans（フォント）', 'inline' => 'span', 'classes' => 'st-notosans' ),
				array( 'title' => 'RoundedM+1c（フォント）', 'inline' => 'span', 'classes' => 'st-m1c' ),
			),
		),
		array(
			'title' => 'アニメーション',
			'items' => array(
				array( 'title' => '45°揺れ', 'inline' => 'span', 'classes' => 'st-wrench animated st-animate' ),
				array( 'title' => 'ベル揺れ', 'inline' => 'span', 'classes' => 'st-ring animated st-animate' ),
				array( 'title' => '横揺れ', 'inline' => 'span', 'classes' => 'st-horizontal animated st-animate' ),
				array( 'title' => '縦揺れ', 'inline' => 'span', 'classes' => 'st-vertical animated st-animate' ),
				array( 'title' => '点滅', 'inline' => 'span', 'classes' => 'st-flash animated st-animate' ),
				array( 'title' => 'バウンド', 'inline' => 'span', 'classes' => 'st-bounce animated st-animate' ),
				array( 'title' => '回転', 'inline' => 'span', 'classes' => 'st-rotation animated st-animate' ),
				array( 'title' => 'ふわふわ', 'inline' => 'span', 'classes' => 'st-float animated st-animate' ),
				array( 'title' => '大小', 'inline' => 'span', 'classes' => 'st-pulse animated st-animate' ),
				array( 'title' => 'シェイク', 'inline' => 'span', 'classes' => 'st-shake-s animated st-animate' ),
				array( 'title' => 'シェイク（強）', 'inline' => 'span', 'classes' => 'st-shake animated st-animate' ),
				array( 'title' => '拡大（ゆれ）', 'inline' => 'span', 'classes' => 'st-tada animated st-animate' ),
				array( 'title' => '過ぎる', 'inline' => 'span', 'classes' => 'st-passing animated st-animate' ),
				array( 'title' => '戻る', 'inline' => 'span', 'classes' => 'st-passing-reverse animated st-animate' ),
				array( 'title' => 'バースト', 'inline' => 'span', 'classes' => 'st-burst animated st-animate' ),
				array( 'title' => '落ちる', 'inline' => 'span', 'classes' => 'st-falling animated st-animate' ),
			),
		),
		array(
			'title' => 'アイコン',
			'items' => array(
				array( 'title' => 'はてな', 'block' => 'span', 'classes' => 'hatenamark2 on-color' ),
				array( 'title' => '注意', 'block' => 'span', 'classes' => 'attentionmark2 on-color' ),
				array( 'title' => '人物', 'block' => 'span', 'classes' => 'usermark2 on-color' ),
				array( 'title' => 'チェック', 'block' => 'span', 'classes' => 'checkmark2 on-color' ),
				array( 'title' => 'メモ', 'block' => 'span', 'classes' => 'memomark2 on-color' ),
				array( 'title' => '王冠', 'block' => 'span', 'classes' => 'oukanmark on-color' ),
				array( 'title' => '初心者マーク', 'block' => 'span', 'classes' => 'bigginermark on-color' ),
			),
		),
		array(
			'title' => '見出し',
			'items' => array(
				array( 'title' => 'キャッチコピー', 'inline' => 'span', 'classes' => 'st-h-copy' ),
				array( 'title' => 'キャッチコピー（+目次）', 'inline' => 'span', 'classes' => 'st-h-copy-toc' ),
				array( 'title' => '記事タイトル', 'block' => 'p', 'classes' => 'entry-title' ),
				array( 'title' => 'h2風', 'block' => 'p', 'classes' => 'h2modoki' ),
				array( 'title' => 'h3風', 'block' => 'p', 'classes' => 'h3modoki' ),
				array( 'title' => 'h4風', 'block' => 'p', 'classes' => 'h4modoki' ),
				array( 'title' => 'h5風', 'block' => 'p', 'classes' => 'h5modoki' ),
				array( 'title' => 'まとめ', 'block' => 'h4', 'classes' => 'st-matome' ),
				array( 'title' => 'カウント', 'block' => 'span', 'classes' => 'st-count' ),
			),
		),
		array(
			'title' => 'ランキング（管理CSS対応）',
			'items' => array(
				array( 'title' => 'ランキング1位（基本）', 'block' => 'h4', 'classes' => 'rankh4 rankno-1' ),
				array( 'title' => 'ランキング2位', 'block' => 'h4', 'classes' => 'rankh4 rankno-2' ),
				array( 'title' => 'ランキング3位', 'block' => 'h4', 'classes' => 'rankh4 rankno-3' ),
				array( 'title' => 'ランキング4位以下', 'block' => 'h4', 'classes' => 'rankh4 rankno-4' ),
			),
			'_enabled' => $is_ver_ex_af,
		),
		array(
			'title' => 'マーカー',
			'items' => array(
				array( 'title' => '黄マーカー', 'inline' => 'span', 'classes' => 'ymarker' ),
				array( 'title' => '黄マーカー（細）', 'inline' => 'span', 'classes' => 'ymarker-s' ),
				array( 'title' => '赤マーカー', 'inline' => 'span', 'classes' => 'rmarker' ),
				array( 'title' => '赤マーカー（細）', 'inline' => 'span', 'classes' => 'rmarker-s' ),
				array( 'title' => '青マーカー', 'inline' => 'span', 'classes' => 'bmarker' ),
				array( 'title' => '青マーカー（細）', 'inline' => 'span', 'classes' => 'bmarker-s' ),
				array( 'title' => '鼠マーカー', 'inline' => 'span', 'classes' => 'gmarker' ),
				array( 'title' => '鼠マーカー（細）', 'inline' => 'span', 'classes' => 'gmarker-s' ),
			),
		),
		array(
			'title' => '写真',
			'items' => array(
				array( 'title' => '枠線', 'inline' => 'span', 'classes' => 'photoline' ),
				array( 'title' => 'ポラロイド風', 'block' => 'div', 'classes' => 'st-photohu' ),
				array( 'title' => 'ワイド', 'block' => 'div', 'classes' => 'st-eyecatch-width' ),
			),
		),
		array(
			'title' => 'ボックス',
			'items' => array(
				array( 'title' => '黄色', 'block' => 'div', 'classes' => 'yellowbox', 'wrapper' => true ),
				array( 'title' => '薄赤', 'block' => 'div', 'classes' => 'redbox', 'wrapper' => true ),
				array( 'title' => 'グレー', 'block' => 'div', 'classes' => 'graybox', 'wrapper' => true ),
				array( 'title' => '引用風', 'block' => 'div', 'classes' => 'inyoumodoki', 'wrapper' => true ),
				array( 'title' => 'ワイド背景', 'block' => 'div', 'classes' => 'st-wide-background', 'wrapper' => true ),
				array( 'title' => 'ワイド背景（左寄せ）', 'block' => 'div', 'classes' => 'st-wide-background-left', 'wrapper' => true ),
				array( 'title' => 'ワイド背景（右寄せ）', 'block' => 'div', 'classes' => 'st-wide-background-right', 'wrapper' => true ),
			),
		),
		array(
			'title' => 'リスト',
			'items' => array(
				array( 'title' => 'ドット下線（リスト）', 'block' => 'div', 'classes' => 'st-list-border', 'wrapper' => true ),
				array( 'title' => 'マル（リスト）', 'block' => 'div', 'classes' => 'st-list-circle', 'wrapper' => true ),
				array( 'title' => 'マル+ドット下線（リスト）', 'block' => 'div', 'classes' => 'st-list-circle st-list-border', 'wrapper' => true ),
				array( 'title' => '簡易チェック（リスト）', 'block' => 'div', 'classes' => 'st-list-check', 'wrapper' => true ),
				array( 'title' => '簡易チェック+ドット下線（リスト）', 'block' => 'div', 'classes' => 'st-list-check st-list-border', 'wrapper' => true ),
				array( 'title' => 'チェックボックス（番号なしリスト）', 'block' => 'div', 'classes' => 'st-square-checkbox st-square-checkbox-nobox', 'wrapper' => true ),
				array( 'title' => 'チェックリスト（番号なしリスト）', 'block' => 'div', 'classes' => 'maruck', 'wrapper' => true ),
				array( 'title' => 'ナンバリング（番号付きリスト）', 'block' => 'div', 'classes' => 'maruno', 'wrapper' => true ),
				array( 'title' => 'ナンバリング四角（リスト）', 'block' => 'div', 'classes' => 'st-list-no', 'wrapper' => true ),
				array( 'title' => 'ナンバリング四角+ドット下線（リスト）', 'block' => 'div', 'classes' => 'st-list-no st-list-border', 'wrapper' => true ),
			),
		),
		array(
			'title' => 'レイアウト',
			'items' => array(
				array( 'title' => '回り込み解除', 'block' => 'div', 'classes' => 'clearfix', 'wrapper' => true ),
				array( 'title' => 'センター寄せ', 'block' => 'div', 'classes' => 'center', 'wrapper' => true ),
				array( 'title' => 'センター寄せ（スマホのみ）', 'block' => 'div', 'classes' => 'sp-center', 'wrapper' => true ),
				array( 'title' => '下に余白', 'block' => 'div', 'classes' => 'under-space', 'wrapper' => true ),
				array( 'title' => 'カードスタイル', 'block' => 'div', 'classes' => 'st-cardstyle', 'wrapper' => true ),
				array( 'title' => 'カードスタイルB', 'block' => 'div', 'classes' => 'st-cardstyleb' , 'wrapper' => true ),
				array( 'title' => 'ランキングボックス', 'block' => 'div', 'classes' => 'rankst-wrap', 'wrapper' => true ),
				array( 'title' => 'width100%リセット', 'block' => 'span', 'classes' => 'resetwidth', 'wrapper' => true ),
				array( 'title' => 'imgインラインボックス', 'block' => 'span', 'classes' => 'inline-img', 'wrapper' => true ),
			),
		),
		array(
			'title' => 'テーブル',
			'items' => array(
				array( 'title' => '横スクロール', 'block' => 'div', 'classes' => 'scroll-box', 'wrapper' => true ),
				array( 'title' => '中央配置', 'block' => 'div', 'classes' => 'st-centertable', 'wrapper' => true ),
				array( 'title' => '装飾なし', 'block' => 'div', 'classes' => 'notab', 'wrapper' => true ),
			),
		),
	);

	$style_formats = array_reduce(
		$style_formats,
		function ( array $style_formats, array $style_format ) {
		
			$items = isset( $style_format['items'] ) ? $style_format['items'] : array();

			$items = array_reduce(
				$items,
				function ( array $items, array $item ) {
					if ( ! isset( $item['_enabled'] ) || $item['_enabled'] ) {
						unset( $item['_enabled'] );

						$items[] = $item;
					}

					return $items;
				},
				array()
			);

		
			$style_format['items'] = $items;

			if ( ! isset( $style_format['_enabled'] ) || $style_format['_enabled'] ) {
				unset( $style_format['_enabled'] );

				$style_formats[] = $style_format;
			}

			return $style_formats;
		},
		array()
	);

	$init_array['style_formats'] = json_encode( $style_formats );
	$init['style_formats_merge'] = false;
	return $init_array;
	}
}
add_filter( 'tiny_mce_before_init', 'st_tiny_mce_before_init' );

if ( !function_exists( '_st_insert_tiny_mce_button' ) ) {
	function _st_insert_tiny_mce_button( $button, $buttons, $position = 1 ) {
		$button_count = count( $buttons );

	
		if ( $button_count === 0 || $button_count < $position ) {
			$buttons[] = $button;

			return $buttons;
		}

	
		if ( $position === 1 ) {
			array_unshift( $buttons, $button );

			return $buttons;
		}

	
		$index   = $position - 1;
		$before  = array_slice( $buttons, 0, $index, true );
		$after   = array_slice( $buttons, $index, true );
		$buttons = array_merge( $before, array( $button ), $after );

		return $buttons;
	}
}

if ( !function_exists( 'st_tiny_mce_style_select' ) ) {
	function st_tiny_mce_style_select( $buttons ) {
		$position = 2;   

		$button = 'styleselect';

		unset( $buttons[$button] );

		return _st_insert_tiny_mce_button( $button, $buttons, $position );
	}
}
add_filter( 'mce_buttons_2', 'st_tiny_mce_style_select' );

if ( !function_exists( 'st_tiny_mce_visual_buttons' ) ) {
	function st_tiny_mce_visual_buttons( $buttons ) {
		$custom_buttons = array(
			
			'st_listbox_1'           => PHP_INT_MAX,
			'st_button_huto'         => PHP_INT_MAX,
			'st_button_hutoaka'      => PHP_INT_MAX,
			'st_button_mycolor'      => PHP_INT_MAX,
			'st_button_mymarker'     => PHP_INT_MAX,
			'st_button_count'        => PHP_INT_MAX,
			'st_button_br'           => PHP_INT_MAX,
			'st_button_photoline'    => PHP_INT_MAX,
			'st_button_kadomaru_bg'  => PHP_INT_MAX,
			'st_btnlink_custom_main' => PHP_INT_MAX,
			'st_button_blogcard'     => PHP_INT_MAX,
			'st_button_st_toc'       => PHP_INT_MAX,
		);

		foreach ( $custom_buttons as $custom_button => $position ) {
			$buttons = _st_insert_tiny_mce_button( $custom_button, $buttons, $position );
		}

		return $buttons;
	}
}
if ( trim($GLOBALS['stdata137']) === '' ) {
	add_filter( 'mce_buttons_2', 'st_tiny_mce_visual_buttons' );
}

if ( !function_exists( 'st_register_tiny_mce_plugins' ) ) {
	function st_register_tiny_mce_plugins( $plugins ) {
		$plugins['st_plugin'] = get_template_directory_uri() . '/js/tinymce-st-plugin.js';

		return $plugins;
	}
}
add_filter( 'mce_external_plugins', 'st_register_tiny_mce_plugins' );

if ( !function_exists( 'st_editor_option_content_retriever' ) ) {
	function st_editor_option_content_retriever( $name ) {
		return stripslashes( get_option( $name, '' ) );
	}
}

if ( !function_exists( 'st_get_the_editor_content' ) ) {
	function st_get_the_editor_content( $name, $content_retriever = null ) {
		$content_retriever = is_callable( $content_retriever ) ? $content_retriever : 'st_editor_option_content_retriever';

		return call_user_func( $content_retriever, $name );
	}
}

if ( !function_exists( 'st_the_editor_content' ) ) {
	function st_the_editor_content( $name, $content_retriever = null ) {
		$content = st_get_the_editor_content( $name, $content_retriever );

		add_filter( 'the_content', 'st_wrap_iframe_in_div' );

		$content = apply_filters( 'the_content', $content );

		remove_filter( 'the_content', 'st_wrap_iframe_in_div' );

		$content = apply_filters( 'st_the_editor_content', $content );
		$content = str_replace( ']] > ', ']]&gt;', $content );

		echo $content;
	}
}

if ( ! $st_is_ex ) {
	if ( ! function_exists( 'st_pre_term_description' ) ) {
		function st_pre_term_description( $value, $taxonomy ) {
			if ( in_array( $taxonomy, array( 'category' ), true ) ) {
				return $value;
			}

			return wp_filter_kses( $value );
		}
	}
	remove_filter( 'pre_term_description', 'wp_filter_kses' );
	add_filter( 'pre_term_description', 'st_pre_term_description', 10, 2 );

	if ( ! function_exists( 'st_term_description' ) ) {
		function st_term_description( $value, $term_id, $taxonomy, $context ) {
			$allow_html       = false;
			$trim_description = false;

			if ( is_admin() && function_exists( 'get_current_screen' ) ) {
				$screen     = get_current_screen();
				$taxonomies = array( 'category' );

				$allow_html = $screen &&
							  ( $screen->base === 'term' && in_array( $screen->taxonomy, $taxonomies, true ) ) &&
							  ( $context === 'display' && in_array( $taxonomy, $taxonomies, true ) );

				$trim_description = $screen &&
									( $screen->base === 'edit-tags' && in_array( $screen->taxonomy, $taxonomies, true ) ) &&
									( $context === 'display' && in_array( $taxonomy, $taxonomies, true ) );
			}

			if ( $allow_html ) {
				$term = get_term( $term_id );

				if ( ! $term || is_wp_error( $term ) ) {
					return '';
				}

				return $term->description;
			}

			$description = $value;
			$description = wptexturize( $description );
			$description = convert_chars( $description );
			$description = wpautop( $description );
			$description = shortcode_unautop( $description );

			if ( $trim_description ) {
				$description = strip_tags( $description );
				$description = preg_replace( '/[\r\n]+]/', ' ', $description );
				$description = mb_strimwidth( $description, 0, 128 /* 長さ */, '..' );
			}

			return $description;
		}
	}
	remove_filter( 'term_description', 'wptexturize' );
	remove_filter( 'term_description', 'convert_chars' );
	remove_filter( 'term_description', 'wpautop' );
	remove_filter( 'term_description', 'shortcode_unautop' );
	add_filter( 'term_description', 'st_term_description', 10, 4 );
}

add_filter('widget_text', 'do_shortcode' );

if ( trim( $GLOBALS['stdata505'] ) === '' ) {
	remove_action( 'init', 'wp_sitemaps_get_server' );
}

function wp_custom_admin_css() {
	if ( isset( $GLOBALS["stdata400"] ) && $GLOBALS["stdata400"] === 'yes' ) {
		echo "\n" . '<link href="' .get_template_directory_uri(). '/css/fontawesome/css/font-awesome.min.css' . '" rel="stylesheet" type="text/css" />' . "\n";
	}
	echo "\n" . '<link href="' .get_template_directory_uri(). '/st_svg/style.css' . '" rel="stylesheet" type="text/css" />' . "\n";
}
add_action('admin_head', 'wp_custom_admin_css', 100);

function st_admin_script(){
	wp_enqueue_script( 'st-admin-script', get_template_directory_uri() . '/st-admin-script.js', array( 'jquery' ) );
}
add_action( 'admin_enqueue_scripts', 'st_admin_script' );


if ( trim($GLOBALS['stdata47']) === '' ) {
	add_filter( 'auto_update_core', '__return_false' );
}

if ( !function_exists( 'st_body_class' ) ) {
	function st_body_class( $classes ) {
	
		if ( st_is_mobile() ) {
			$classes[] = 'mobile';
		}
	
		if ( wp_is_mobile() ) {
			$classes[] = 'wp-mobile';
		}

	
		$test_queries = array(
		
			'front-page' => is_front_page(),
		);

		foreach ( $test_queries as $class => $is_true ) {
			$classes[] = $is_true ? $class : ('not-' . $class);
		}

		return array_unique( $classes );
	}
}
add_filter( 'body_class', 'st_body_class' );

if ( $st_is_ex_af ) {

	if ( !function_exists( 'st_author' ) ) {
		function st_author() {
			if (
				isset( $GLOBALS['stdata210'] ) && $GLOBALS['stdata210'] === 'yes' && is_single() ||
				isset( $GLOBALS['stdata212'] ) && $GLOBALS['stdata212'] === 'yes' && is_page()
				) {
					if ( (trim($GLOBALS['stdata17']) !== '' ) && ($GLOBALS['stdata17'] === 'yes') ) {
					echo '<p class="author" style="display:none;"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">' . get_the_author() . '</span>' . '</a></p>';
					}else{
					echo '<p class="author" style="display:none;"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">author</span>' . '</a></p>';
					}
			} else {
					if ( (trim($GLOBALS['stdata17']) !== '' ) && ($GLOBALS['stdata17'] === 'yes') ) {
					echo '<p class="author">執筆者: <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">' . get_the_author() . '</span>' . '</a></p>';
					}else{
					echo '<p class="author" style="display:none;"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">author</span>' . '</a></p>';
					}
			}
		}
	}

} else {

	if ( !function_exists( 'st_author' ) ) {
		function st_author() {
			if ( (trim($GLOBALS['stdata17']) !== '' ) && ($GLOBALS['stdata17'] === 'yes') ) {
			echo '<p class="author">執筆者: <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">' . get_the_author() . '</span>' . '</a></p>';
			}else{
			echo '<p class="author" style="display:none;"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">author</span>' . '</a></p>';
			}
		}
	}

}

if ( isset($GLOBALS['stdata58']) && $GLOBALS['stdata58'] === 'yes' ) {
	remove_action('do_feed_rdf', 'do_feed_rdf');
	remove_action('do_feed_rss', 'do_feed_rss');
	remove_action('do_feed_rss2', 'do_feed_rss2');
	remove_action('do_feed_atom', 'do_feed_atom');
}


if ( !function_exists( 'st_add_posts_columns' ) ) {
	function st_add_posts_columns($columns, $post_type) {
		$show_extra_columns = ( get_option( 'st-data129', '' ) === 'yes' );

		if ( $show_extra_columns && post_type_supports( $post_type, 'thumbnail' ) ) {
			$columns['thumbnail'] = 'サムネイル';
		}

		$columns['postid'] = 'ID';

		if ( $show_extra_columns && post_type_supports( $post_type, 'editor' ) ) {
			$columns['count'] = '文字数';
		}

		echo '<style type="text/css">
		.fixed .column-thumbnail {width: 120px;}
		.fixed .column-postid {width: 5%;}
		.fixed .column-count {width: 5%;}
		</style>';

		return $columns;
	}
}
if ( !function_exists( 'st_add_posts_columns_row' ) ) {
	function st_add_posts_columns_row($column_name, $post_id) {
		$show_extra_columns = ( get_option( 'st-data129', '' ) === 'yes' );

		if ( $show_extra_columns && 'thumbnail' === $column_name ) {
			$thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
			echo ( $thumb ) ? $thumb : '−';
		} elseif ( 'postid' === $column_name ) {
			echo esc_html( $post_id );
		} elseif ( $show_extra_columns && 'count' === $column_name ) {
			$count = esc_html( mb_strlen(strip_tags(get_post_field('post_content', $post_id))) );
		echo $count;
		}
	}
}

add_filter( 'manage_posts_columns', 'st_add_posts_columns', 10, 2 );
add_action( 'manage_posts_custom_column', 'st_add_posts_columns_row', 10, 2 );
add_filter( 'manage_pages_columns', function ( $columns ) { return st_add_posts_columns( $columns, 'page' ); } );
add_action( 'manage_pages_custom_column', 'st_add_posts_columns_row', 10, 2 );

if ( isset($GLOBALS['stdata61']) && $GLOBALS['stdata61'] === 'yes' ) {
	if ( ! function_exists( 'st_mytheme_init' ) ) {
		function st_mytheme_init() {
			global $wp_rewrite;
			$wp_rewrite->use_trailing_slashes = false;
			$wp_rewrite->page_structure = $wp_rewrite->root . '%pagename%.html';
		flush_rewrite_rules( false );
		}
	}
	add_action( 'init', 'st_mytheme_init' );
}

if ( ! function_exists( 'st_redirect_to_canonical_paged_url' ) ) {
	function st_redirect_to_canonical_paged_url() {
		$paged = (int) get_query_var( 'paged' );

		if ( $paged !== 1 ) {
			return;
		}

		$home_url_parts = @parse_url( home_url() );

		if ($home_url_parts === false) {
			return;
		}

		$base_url = $home_url_parts['scheme'] . '://' . $home_url_parts['host'] .
		            ( isset( $home_url_parts['port'] ) ? ':' . $home_url_parts['port'] : '' );

		$current_url       = $base_url . add_query_arg( array() );
		$current_url_parts = @parse_url( $current_url );

		if ( $current_url_parts === false ) {
			return;
		}

		$query    = isset( $current_url_parts['query'] ) ? $current_url_parts['query'] : '';
		$fragment = isset( $current_url_parts['fragment'] ) ? '#' . $current_url_parts['fragment'] : '';

	
		$queries = [];

		parse_str( $query, $queries );
		unset( $queries['paged'] );

	
		$front_page_url = home_url() .
		                  ( ( count( $queries ) > 0 ) ? '?' . build_query( $queries ) : '' ) .
		                  $fragment;

		if ( is_front_page() || is_search() ) {
			wp_redirect( $front_page_url, 301 );

			exit;
		}

	
		$show_page_on_front = ( get_option( 'show_on_front' ) === 'page' );
		$page_on_front      = get_option( 'page_on_front', '0' );

		if ( $show_page_on_front && $page_on_front === '0' && is_home() ) {
			wp_redirect( $front_page_url, 301 );

			exit;
		}

	
		$canonical_url = $base_url . remove_query_arg( 'paged' );

		wp_redirect( $canonical_url, 301 );

		exit;
	}
}

add_action( 'template_redirect', 'st_redirect_to_canonical_paged_url' );


if ( ! function_exists( 'st_admin_manage_taxonomy_sortable_columns' ) ) {
	function st_admin_manage_taxonomy_sortable_columns( $sortable_columns ) {
		$sortable_columns['id'] = 'id';

		return $sortable_columns;
	}
}

add_filter( 'manage_edit-category_sortable_columns', 'st_admin_manage_taxonomy_sortable_columns' );
add_filter( 'manage_edit-post_tag_sortable_columns', 'st_admin_manage_taxonomy_sortable_columns' );

if ( ! function_exists( 'st_admin_manage_taxonomy_columns' ) ) {
	function st_admin_manage_taxonomy_columns( $columns ) {
		$index   = array_search( 'description', array_keys( $columns ), true ) ?: 0;
		$columns = array_merge(
			array_slice( $columns, 0, $index ),
			array( 'id' => 'ID' ),
			array_slice( $columns, $index )
		);

		return $columns;
	}
}

add_filter( 'manage_edit-category_columns', 'st_admin_manage_taxonomy_columns' );
add_filter( 'manage_edit-post_tag_columns', 'st_admin_manage_taxonomy_columns' );

if ( ! function_exists( 'st_admin_manage_taxonomy_custom_column' ) ) {
	function st_admin_manage_taxonomy_custom_column( $blank_string, $column_name, $term_id ) {
		if ( $column_name === 'id' ) {
			echo esc_html( $term_id );
		}
	}
}

add_action( 'manage_category_custom_column', 'st_admin_manage_taxonomy_custom_column', 10, 3 );
add_action( 'manage_post_tag_custom_column', 'st_admin_manage_taxonomy_custom_column', 10, 3 );

if ( ! function_exists( 'st_admin_print_edit_tags_styles' ) ) {
	function st_admin_print_edit_tags_styles() {
		?>
		<style>
			.fixed .column-id {
				width: 6%;
			}
		</style>
		<?php
	}
}

add_action( 'admin_print_styles-edit-tags.php', 'st_admin_print_edit_tags_styles' );

add_action('admin_print_styles','st_admin_print_styles');
function st_admin_print_styles(){
	echo '<link href="'.get_template_directory_uri().'/admin.css" type="text/css" rel="stylesheet" madia="all" />'. PHP_EOL;
}

if ( isset( $GLOBALS['stdata450']) && $GLOBALS['stdata450'] === 'yes' ) {
	add_action('admin_print_styles','st_admin_post_status_styles');
	function st_admin_post_status_styles(){
		echo '<style> .post-state {color: #f44336;} </style>'.PHP_EOL;
	}
}

function sanitize_checkbox($input){
	if($input==true){
		return true;
	}else{
		return false;
	}
}
function st_sanitize_choices( $input, $setting ) {
    global $wp_customize;

    $control = $wp_customize->get_control( $setting->id );

    if ( array_key_exists( $input, $control->choices ) ) {
	   return $input;
    } else {
	   return $setting->default;
    }
}
function sanitize_int($input){
	return intval($input);
}

if ( !function_exists( 'st_force_to_hex_color' ) ) {
	function st_force_to_hex_color( $color ) {
		$color = trim( $color );

		if ( $color === '' ) {
			return $color;
		}

		if ( !preg_match( '|\A([A-Fa-f0-9]{3}){1,2}\z|', $color ) ) {
			return $color;
		}

		$color = '#' . $color;

		return $color;
	}
}

if ( !function_exists( 'sanitize_hex_color' ) ) {
	function sanitize_hex_color( $color ) {
		if ( '' === $color ) {
			return '';
		}

		if ( preg_match( '|\A#([A-Fa-f0-9]{3}){1,2}\z|', $color ) ) {
			return $color;
		}

		return null;
	}
}

if ( ! function_exists( 'st_canonical' ) ) {
	function st_canonical() {
		$page_id_on_top    = (int) get_option( 'st-data9' );
		$queried_object_id = get_queried_object_id();
		$is_page_on_top    = ( $page_id_on_top !== 0 && $queried_object_id === $page_id_on_top );

	
		if ( $is_page_on_top ) {
			echo '<link rel="canonical" href="' . esc_url( home_url() ) . '" />' . "\n";

			return;
		}

	
		rel_canonical();
	}
}
remove_action( 'wp_head', 'rel_canonical' );
add_action( 'wp_head', 'st_canonical' );

if ( !function_exists( 'st_noheader_class' ) ) {
	function st_noheader_class(){
		if( !has_header_image() || ( st_is_mobile() && trim($GLOBALS['stdata71']) !== '' ) || ( has_header_image() && ( trim($GLOBALS["stdata76"]) === 'yes' ||  trim($GLOBALS["stdata88"]) === 'yes' ) ) ){
			echo 'noheader';
		}else{
			echo 'onheader';
		}
	}
}

if ( $st_is_st ) {
	function register_stylesheet() {
		wp_register_style( 'single', get_template_directory_uri() . '/st-tagcss.php', array(), null, 'all' );
	}

	function load_stylesheet() {
		register_stylesheet();
		wp_enqueue_style( 'single' );
	}

	add_action( 'wp_enqueue_scripts', 'load_stylesheet' );
}

if ( isset($GLOBALS['stdata126']) && $GLOBALS['stdata126'] === 'yes' ) {

	function remove_dashboard_widgets() {
		global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);       
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);        
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); 
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);  
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);         
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);     
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);       
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);     
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);           
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);         
	}
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
	remove_action( 'welcome_panel', 'wp_welcome_panel' );


	function so_screen_layout_columns( $columns ) {
		$columns['dashboard'] = 2;
		return $columns;
	}
	add_filter( 'screen_layout_columns', 'so_screen_layout_columns' );
	function so_screen_layout_dashboard() {
		return 2;
	}
	add_filter( 'get_user_option_screen_layout_dashboard', 'so_screen_layout_dashboard' );

}

if ( !function_exists( 'st_kaiwasc1_func' ) ) {
	function st_kaiwasc1_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata131"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata131"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata134"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata134"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon1 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon1 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa1', 'st_kaiwasc1_func');

if ( !function_exists( 'st_kaiwasc2_func' ) ) {
	function st_kaiwasc2_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata132"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata132"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata135"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata135"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon2 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon2 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa2', 'st_kaiwasc2_func');


if ( !function_exists( 'st_kaiwasc3_func' ) ) {
	function st_kaiwasc3_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata133"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata133"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata136"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata136"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon3 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon3 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa3', 'st_kaiwasc3_func');

if ( !function_exists( 'st_kaiwasc4_func' ) ) {
	function st_kaiwasc4_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata144"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata144"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata145"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata145"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon4 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon4 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa4', 'st_kaiwasc4_func');

if ( !function_exists( 'st_kaiwasc5_func' ) ) {
	function st_kaiwasc5_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata146"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata146"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata147"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata147"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon5 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon5 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa5', 'st_kaiwasc5_func');


if ( !function_exists( 'st_kaiwasc6_func' ) ) {
	function st_kaiwasc6_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata148"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata148"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata149"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata149"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon6 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon6 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa6', 'st_kaiwasc6_func');

if ( !function_exists( 'st_kaiwasc7_func' ) ) {
	function st_kaiwasc7_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata150"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata150"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata151"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata151"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon7 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon7 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa7', 'st_kaiwasc7_func');


if ( !function_exists( 'st_kaiwasc8_func' ) ) {
	function st_kaiwasc8_func( $arg, $content = null ) {
		if ( trim( $GLOBALS["stdata152"] ) !== '' ) {
			$kaiwaiconurl = esc_url( $GLOBALS["stdata152"] );
		}else{
			$kaiwaiconurl = get_template_directory_uri().'/images/no-img.png';
		}
		if ( trim( $GLOBALS["stdata153"] ) !== '' ) {
			$kaiwaiconname = esc_html( $GLOBALS["stdata153"] );
		}else{
			$kaiwaiconname = '';
		}

		if( isset($arg[0]) && ($arg[0] === 'r') ){
			return '<div class="st-kaiwa-box kaiwaicon8 clearfix"><div class="st-kaiwa-area2"><div class="st-kaiwa-hukidashi2">'.$content.'</div></div><div class="st-kaiwa-face2"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name2">'.$kaiwaiconname.'</div></div></div>';
		} else {
			return '<div class="st-kaiwa-box kaiwaicon8 clearfix"><div class="st-kaiwa-face"><img src="'.$kaiwaiconurl.'" width="60px"><div class="st-kaiwa-face-name">'.$kaiwaiconname.'</div></div><div class="st-kaiwa-area"><div class="st-kaiwa-hukidashi">'.$content.'</div></div></div>';
		}

	}
}
add_shortcode('st-kaiwa8', 'st_kaiwasc8_func');


if ( !function_exists( 'st_star5_func' ) ) {
	function st_star5_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star5', 'st_star5_func');

if ( !function_exists( 'st_star45_func' ) ) {
	function st_star45_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i></span><span class="w-star"><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star45', 'st_star45_func');

if ( !function_exists( 'st_star4_func' ) ) {
	function st_star4_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i></span><span class="w-star"><i class="st-fa st-svg-star-o" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star4', 'st_star4_func');

if ( !function_exists( 'st_star35_func' ) ) {
	function st_star35_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i></span><span class="w-star"><i class="st-fa st-svg-star-half-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star35', 'st_star35_func');

if ( !function_exists( 'st_star3_func' ) ) {
	function st_star3_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i></span><span class="w-star"><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star3', 'st_star3_func');

if ( !function_exists( 'st_star2_func' ) ) {
	function st_star2_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="st-fa st-svg-star" aria-hidden="true"></i><i class="st-fa st-svg-star" aria-hidden="true"></i></span><span class="w-star"><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star2', 'st_star2_func');

if ( !function_exists( 'st_star1_func' ) ) {
	function st_star1_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="st-fa st-svg-star" aria-hidden="true"></i></span><span class="w-star"><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star1', 'st_star1_func');

if ( !function_exists( 'st_star0_func' ) ) {
	function st_star0_func( $arg, $content = null ) {
		return '<span class="w-star"><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i><i class="st-fa st-svg-star-o" aria-hidden="true"></i></span>';
	}
}
add_shortcode('star0', 'st_star0_func');

if ( $st_is_ex ) {
	if ( ( ! function_exists( 'st_countdown_shortcode' ) ) && trim( $GLOBALS['stdata419'] ) === '') {
		function st_countdown_shortcode( $atts, $content = '' ) {
			static $INTERVAL_NONE = 'none';
			static $INTERVAL_DAILY = 'daily';
			static $INTERVAL_MONTHLY = 'monthly';
			static $ERROR_HTML = <<<HTML
	<span class="st-countdown-error">[st-countdown] の属性値が不正です。</span>
HTML;

			$defaults = [
				'year'       => '',
				'month'      => '',
				'day'        => '',
				'time'       => '',
				'interval'   => '',
				'show_timer' => '1',
				'invert'     => '0',
			];

			$atts = shortcode_atts( $defaults, $atts, 'st_countdown' );
			$atts = array_map( 'trim', $atts );

			try {
				$wp_time_zone = new DateTimeZone( get_option( 'timezone_string' ) );
				$now          = new DateTimeImmutable( 'now', $wp_time_zone );

				if ( $atts['time'] !== '' ) {
					$end_time = new DateTimeImmutable( $atts['time'], $wp_time_zone );
				} else {
					$end_time = clone $now;
				}

				$errors = DateTimeImmutable::getLastErrors();

				if ( $errors['warning_count'] > 0 ) {
					throw new RuntimeException( 'Invalid time.' );
				}
			} catch ( Exception $e ) {
				return $ERROR_HTML;
			}

			$end_year   = ( $atts['year'] !== '' ) ? (int) $atts['year'] : (int) $now->format( 'Y' );
			$end_month  = ( $atts['month'] !== '' ) ? (int) $atts['month'] : (int) $now->format( 'm' );
			$end_day    = ( $atts['day'] !== '' ) ? (int) $atts['day'] : (int) $now->format( 'd' );
			$end_hour   = ( $atts['time'] !== '' ) ? (int) $end_time->format( 'H' ) : 0;
			$end_minute = ( $atts['time'] !== '' ) ? (int) $end_time->format( 'i' ) : 0;
			$end_second = ( $atts['time'] !== '' ) ? (int) $end_time->format( 's' ) : 0;
			$interval   = in_array( $atts['interval'], array( $INTERVAL_NONE, $INTERVAL_DAILY, $INTERVAL_MONTHLY ), true )
				? $atts['interval']
				: $INTERVAL_NONE;
			$show_timer = (bool) $atts['show_timer'];
			$invert     = (bool) $atts['invert'];

			try {
				$end_date_time_string = sprintf(
					'%d-%02d-%02d %02d:%02d:%02d',
					$end_year,
					$end_month,
					$end_day,
					$end_hour,
					$end_minute,
					$end_second
				);

				$end_date_time = new DateTimeImmutable( $end_date_time_string, $wp_time_zone );
				$errors        = DateTimeImmutable::getLastErrors();

				if ( $errors['warning_count'] > 0 ) {
					throw new RuntimeException( 'Invalid time.' );
				}

				$end_date_time_utc = $end_date_time->setTimezone( new DateTimezone( 'UTC' ) );
			} catch ( Exception $e ) {
				return $ERROR_HTML;
			}

			ob_start();
			?>

			<span class="st-countdown" data-st-countdown
				 data-st-countdown-expired-at="<?php echo esc_attr( $end_date_time_utc->format( DATE_ATOM ) ); ?>"
				 data-st-countdown-interval="<?php echo esc_attr( $interval ); ?>"
				 data-st-countdown-invert="<?php echo esc_attr( $invert ? 'true' : 'false'); ?>"><!--
				 <?php if ( $show_timer ) { ?>
					--><span class="st-countdown-timer" data-st-countdown-timer><!--
						--><span class="st-countdown-item st-countdown-item-day" data-st-countdown-item-day><!--
							--><span class="st-countdown-count st-countdown-count-day" data-st-countdown-count-day>-</span>日<!--
						--></span><!--
						--><span class="st-countdown-item st-countdown-item-hour"><!--
							--><span class="st-countdown-count st-countdown-count-hour" data-st-countdown-count-hour>-</span>時間<!--
						--></span><!--
						--><span class="st-countdown-item st-countdown-item-minute"><!--
							--><span class="st-countdown-count st-countdown-count-minute" data-st-countdown-count-minute>-</span>分<!--
						--></span><!--
						--><span class="st-countdown-item st-countdown-item-second"><!--
							--><span class="st-countdown-count st-countdown-count-second" data-st-countdown-count-second>-</span>秒<!--
						--></span><!--
						--><span class="st-countdown-item st-countdown-item-ms"><!--
							--><span class="st-countdown-count st-countdown-count-ms" data-st-countdown-count-ms>-</span><!--
						--></span><!--
					--></span><!--
				 <?php } ?>
				--><span class="st-countdown-expired" data-st-countdown-expired><?php echo do_shortcode( $content ); ?></span><!--
			--></span>

			<?php
			return ob_get_clean();
		}
	} else {
		if ( !function_exists( 'st_countdown_shortcode' ) ) {
			function st_countdown_shortcode( $atts, $content = '' ) {
				return null;
			}
		}
	}
	add_shortcode( 'st-countdown', 'st_countdown_shortcode' );
}

if ( isset($GLOBALS['stdata155']) && $GLOBALS['stdata155'] === 'yes' ) {
	if ( !function_exists( 'st_no_pageing' ) ) {
	
		function st_no_pageing( $post ) {
			global $pages, $multipage, $numpages;
			if ( ! wp_is_mobile() ) {
				$multipage = 0;
				$content = str_replace("\n<!--nextpage-->\n", '<!--nextpage-->', $post->post_content);
				$content = str_replace("\n<!--nextpage-->", '<!--nextpage-->', $content);
				$content = str_replace("<!--nextpage-->\n", '<!--nextpage-->', $content);
				$pages = array( str_replace('<!--nextpage-->', '', $content) );
				$numpages = 1;
			}
		}
	}
	add_action( 'the_post', 'st_no_pageing' );
}

if ( ! function_exists( '_st_remove_target_attr' ) ) {
	function _st_remove_target_attr( $content, $allowed_values = array(), $disallowed_values = 'all' ) {
		$pattern = '!(<a\s+[^>]*?)\starget\s*=\s*"([^"]*)"([^>]*>)!i';

		if ( ! preg_match( $pattern, $content ) ) {
			return $content;
		}

		$content = preg_replace_callback(
			$pattern,
			function ( $matches ) use ( $allowed_values, $disallowed_values ) {
				$before       = $matches[1];
				$target_value = $matches[2];
				$after        = $matches[3];

				$new_target_value = $target_value;

				if ( $allowed_values === 'none' ) {
					$new_target_value = '';
				} elseif ( $allowed_values !== 'all' ) {
					$new_target_value = in_array( $new_target_value, $allowed_values, true )
						? $new_target_value
						: '';
				}

				if ( $disallowed_values === 'all' ) {
					$new_target_value = '';
				} elseif ( $disallowed_values !== 'none' ) {
					$new_target_value = in_array( $new_target_value, $disallowed_values, true )
						? ''
						: $new_target_value;
				}

				$target_attr = ( $new_target_value !== '' ) ? ' target="' . $new_target_value . '"' : '';

				return $before . $target_attr . $after;
			},
			$content
		);

		return $content;
	}
}

if ( isset( $GLOBALS['stdata467'] ) && $GLOBALS['stdata467'] === 'yes' ) {
	if ( ! function_exists( 'st_target_blank_remove' ) ) {
		function st_target_blank_remove( $the_content ) {
			$cache_key = 'st_target_blank_remove_' . hash( 'sha256', serialize( func_get_args() ) );
			$cache     = wp_cache_get( $cache_key );

			if ( $cache !== false ) {
				return $cache;
			}

			$the_content = _st_remove_target_attr( $the_content, 'all', array( '_blank' ) );

			wp_cache_set( $cache_key, $the_content );

			return $the_content;
		}

		add_filter( 'the_content', 'st_target_blank_remove', 9999 );
	}
}

if ( isset( $GLOBALS['stdata8'] ) && $GLOBALS['stdata8'] === 'yes' ) {
	if ( ! function_exists( 'st_noopener_noreferrer_remove' ) ) {
		function st_noopener_noreferrer_remove( $the_content ) {
			$cache_key = 'st_noopener_noreferrer_remove_' . hash( 'sha256', serialize( func_get_args() ) );
			$cache     = wp_cache_get( $cache_key );

			if ( $cache !== false ) {
				return $cache;
			}

			$pattern = '!(<a\s+[^>]*?)\srel\s*=\s*"([^"]*?(?:noopener|noreferrer)[^"]*?)"([^>]*>)!i';

			if ( ! preg_match( $pattern, $the_content ) ) {
				return $the_content;
			}

			$the_content = preg_replace_callback(
				$pattern,
				function ( $matches ) {
					$before        = $matches[1];
					$rel_value     = $matches[2];
					$after         = $matches[3];
					$rel_values    = array_reduce(
						preg_split( '/\s+/', $rel_value ),
						function ( $rel_values, $rel_value ) {
							$rel_value = trim( $rel_value );

							if ( ! in_array( $rel_value, array( 'noopener', 'noreferrer' ), true ) ) {
								$rel_values[] = $rel_value;
							}

							return $rel_values;
						},
						array()
					);

					$new_rel_value = implode( ' ', $rel_values );
					$rel_attr      = ( $new_rel_value !== '' ) ? ' rel="' . $new_rel_value . '"' : '';

					return $before . $rel_attr . $after;
				},
				$the_content
			);

			wp_cache_set( $cache_key, $the_content );

			return $the_content;
		}

		add_filter( 'the_content', 'st_noopener_noreferrer_remove', 9999 );
	}
}

if ( ! function_exists( 'st_user_meta' ) ) {
	function st_user_meta($wb)
		{
		$wb['twitter'] = 'twitter（URL）';
		$wb['facebook'] = 'facebook（URL）';
		$wb['instagram'] = 'instagram（URL）';
		$wb['youtube'] = 'youtube（URL）';
		$wb['amazon'] = 'amazon（URL）';
		$wb['feed_url'] = 'feed（URL）';
		$wb['form_url'] = 'form（URL）';
		return $wb;
	}
}
add_filter('user_contactmethods', 'st_user_meta', 10, 1);

if ( $st_is_ex_af ) {
	if ( isset($GLOBALS['stdata404']) && $GLOBALS['stdata404'] === 'yes' ) {
	
		remove_filter('pre_user_description', 'wp_filter_kses');
	}
}

function st_func_js_function() {
echo <<< EOM
<script>

</script>
EOM;
}
add_action( 'wp_footer', 'st_func_js_function' );

if ( ! function_exists( 'st_get_html_class' ) ) {
	function st_get_html_class( $class = '' ) {
		$classes = array();

		$header_nav_enabled = st_is_header_nav_enabled();

	
		$direction = trim( get_option( 'st-data236', '' ) );

		if ( $header_nav_enabled && $direction === 'right' ) {
			$classes[] = 's-navi-right';
		}

	
		$show_search_button = ( trim( get_option( 'st-data479', '' ) ) === 'yes' );
		$has_search_nav     = ( $show_search_button && ! st_has_additional_mobile_menu() );

		if ( $header_nav_enabled && $has_search_nav ) {
			$classes[] = 's-navi-has-search';
		}

	
		$search_nav_type    = trim( get_option( 'st-data483', 'overlay' ) );
		$search_nav_classes = array( 'overlay' => 's-navi-search-overlay', 'slide' => 's-navi-search-slide' );

		if ( $header_nav_enabled && in_array( $search_nav_type, array_keys( $search_nav_classes ), true ) ) {
			$classes[] = $search_nav_classes[ $search_nav_type ];
		}

	
		$st_sticky_menu     = get_theme_mod( 'st_sticky_menu', '' );
		$header_bar_classes = array( '' => '', 'fixed' => 'header-bar-fixable', '1' => 'header-bar-trackable' );

		if ( $header_nav_enabled && in_array( $st_sticky_menu, array_keys( $header_bar_classes ), true ) ) {
			$classes[] = $header_bar_classes[ $st_sticky_menu ];
		}

		if ( ! empty( $class ) ) {
			if ( ! is_array( $class ) ) {
				$_class = preg_split( '#\s+#', $class );
				$class  = ( $_class !== false ) ? $_class : array();
			}

			$classes = array_merge( $classes, $class );
		} else {
			$class = array();
		}

		$classes = array_map( 'esc_attr', $classes );
		$classes = apply_filters( 'theme_html_class', $classes, $class );

		return array_unique( $classes );
	}
}

if ( ! function_exists( 'st_html_class' ) ) {
	function st_html_class( $class = '' ) {
		echo 'class="' . implode( ' ', st_get_html_class( $class ) ) . '"';
	}
}

if ( isset($GLOBALS['stdata393']) && $GLOBALS['stdata393'] === 'yes' ) {
	if ( !function_exists( 'customize_tinymce_settings' ) ) {
		function customize_tinymce_settings($mceInit){

		
		
		

		
			$mceInit['table_resize_bars'] = false;
			$mceInit['object_resizing'] = 'img';

		
			$invalid_styles = array(
				'table' => 'width',
				'tr'    => 'width',
				'th'    => 'width',
				'td'    => 'width',
			);
			$mceInit['invalid_styles'] = wp_json_encode( $invalid_styles );

		return $mceInit;
		}
	add_filter('tiny_mce_before_init', 'customize_tinymce_settings', 0);
	}
}

if ( ! function_exists( 'st_get_kanren_posts_query' ) ) {
	function st_get_kanren_posts_query( $post, $args = array() ) {
		$post = get_post( $post );

		$posts_per_page = trim( get_option( 'st-data56', '' ) );   
		$posts_per_page = ( $posts_per_page !== '' ) ? (int) $posts_per_page : 5;

		$load_more_enabled = ( trim( get_option( 'st-data421', '' ) ) === 'yes' );   
		$orderby           = $load_more_enabled ? 'date' : 'rand';

		$categories   = get_the_category( $post->ID );
		$category_ids = wp_list_pluck( $categories, 'term_id' );

		$args     = wp_parse_args( $args );
		$defaults = array(
			'posts_per_page'      => $posts_per_page,
			'ignore_sticky_posts' => true,
			'post__not_in'        => array( $post->ID ),
			'category__in'        => $category_ids,
			'orderby'             => $orderby,
		);

		$args = array_merge( $defaults, $args );

		return new WP_Query( $args );
	}
}

if ( ! function_exists( 'st_get_the_kanren_posts' ) ) {
	function st_get_the_kanren_posts( $post = null, $query_args = array(), $template_vars = array() ) {
		$post = get_post( $post );

		$card_design       = ( trim( get_option( 'st-data322' ) ) === 'yes' );   
		$disable_thumbnail = ( trim( get_option( 'st-data5', '' ) ) === 'yes' );   

		$related_posts_query = st_get_kanren_posts_query( $post, $query_args );

		$default_vars = [
			'_post' => $post,
			'query' => $related_posts_query,
		];

		$template_vars = array_merge( $default_vars, $template_vars );

		ob_start();

		if ( $card_design && ! amp_is_amp() ) {   
			st_get_template_part( 'kanren-card-list', null, $template_vars );
		} elseif ( $disable_thumbnail ) {   
			st_get_template_part( 'kanren-thumbnail-off', null, $template_vars );
		} else {   
			st_get_template_part( 'kanren-thumbnail-on', null, $template_vars );
		}

		return (string) ob_get_clean();
	}
}

if ( ! function_exists( 'st_the_kanren_posts' ) ) {
	function st_the_kanren_posts( $post = null, $query_args = array(), $template_vars = array() ) {
		echo st_get_the_kanren_posts( $post, $query_args, $template_vars );
	}
}

if ( ! function_exists( '_st_load_more_get_kanren_posts_options' ) ) {
	function _st_load_more_get_kanren_posts_options( $post, WP_Query $query ) {
		$post  = get_post( $post );
		$paged = max( 1, absint( $query->get( 'paged', '1' ) ) );
		$paged = min( $paged + 1, $query->max_num_pages );

		$options = array(
			'action'  => 'st_load_more_get_kanren_posts',
			'payload' => array(
				'post_id' => $post->ID,
				'page'    => $paged,
			),
		);

		return $options;
	}
}

if ( ! function_exists( '_st_load_more_get_kanren_posts' ) ) {
	function _st_load_more_get_kanren_posts() {
		if ( ! isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) || strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) !== 'xmlhttprequest' ) {
			wp_die( - 1, 403 );
		}

		if ( ! wp_doing_ajax() ) {
			wp_die( - 1, 403 );
		}

		$data = array();

		try {
		
			$action  = (string) filter_input( INPUT_GET, 'action' );
			$payload = filter_input( INPUT_GET, 'payload', FILTER_DEFAULT, FILTER_FORCE_ARRAY ) ?: array();

			$payload = filter_var_array(
				$payload,
				array(
					'post_id' => FILTER_DEFAULT,
					'page'    => FILTER_DEFAULT,
				)
			);

		
			$args = array( 'paged' => (int) $payload['page'] );

			if ( is_user_logged_in() ) {
				$args['post_status'] = array( 'publish', 'private' );
			} else {
				$args['post_status'] = array( 'publish' );
			}

			$query     = st_get_kanren_posts_query( $payload['post_id'], $args );
			$next_page = (int) $payload['page'] + 1;
			$has_next  = _st_query_has_next_page( $query );

			$data = array(
				'has_next' => $has_next,
				'html'     => st_get_the_kanren_posts(
					$payload['post_id'],
					$args
				),
				'options'  => array(),
			);

			if ( $has_next ) {
				$data['options'] = array(
					'action'  => $action,
					'payload' => array(
						'post_id' => $payload['post_id'],
						'page'    => $next_page,
					),
				);
			}
		} catch ( Exception $e ) {
			wp_send_json_error( 'error', 500 );
		}

		wp_send_json_success( $data, 200 );
	}
}

if ( trim( get_option( 'st-data36', '' ) ) !== 'yes' && trim( get_option( 'st-data421', '' ) ) === 'yes' ) {
	add_action( 'wp_ajax_st_load_more_get_kanren_posts', '_st_load_more_get_kanren_posts' );
	add_action( 'wp_ajax_nopriv_st_load_more_get_kanren_posts', '_st_load_more_get_kanren_posts' );
}

if ( $st_is_ex ) {
	if ( ! function_exists( 'st_comment_form_default_fields' ) ) {
		function st_comment_form_default_fields( array $fields ) {
			$author_name_type = get_option( 'st-data426', '' );

			if ( $author_name_type === 'hidden' ) {
				$fields['author'] = '';
			} elseif ( $author_name_type === 'nickname' ) {
				$req       = get_option( 'require_name_email' );
				$html_req  = ( $req ? ' required="required"' : '' );
				$req       = ( $req ? ' <span class="required">*</span>' : '' );
				$commenter = wp_get_current_commenter();

				ob_start();
				?>

				<p class="comment-form-author">
					<label for="author">ニックネーム（任意）<?php echo $req; ?></label>
					<input id="author" name="author" type="text"
						   value="<?php echo esc_attr( $commenter['comment_author'] ); ?>" size="30"
						   maxlength="245"<?php echo $html_req; ?> />
				</p>

				<?php
				$fields['author'] = ob_get_clean();
			}

			return $fields;
		}
	}

	add_filter( 'comment_form_default_fields', 'st_comment_form_default_fields' );

	if ( ! function_exists( 'st_comment_form_fields' ) ) {
		function st_comment_form_fields( array $comment_fields ) {
			$add_title_field  = ( get_option( 'st-data424' ) === 'yes' );
			$add_rating_field = ( get_option( 'st-data425' ) === 'yes' );

			$title_html  = '';
			$rating_html = '';

			if ( $add_title_field ) {
				$title_html = <<<HTML
	<p class="comment-form-title">
		<input type="text" name="comment_title" value="" placeholder="タイトル（必須）" required />
	</p>
HTML;
			}

			if ( $add_rating_field ) {
				$rating_html = <<<HTML
	<p class="comment-form-rating">
		<span class="comment-form-rating-label">評価（必須）</span>
		<span class="comment-form-rating-control">
			<label class="comment-form-rating-rate">
				<input class="comment-form-rating-input" type="radio" name="comment_rate" value="5" required />
				<span class="comment-form-rating-text">5</span>
			</label>
			<label class="comment-form-rating-rate">
				<input class="comment-form-rating-input" type="radio" name="comment_rate" value="4" />
				<span class="comment-form-rating-text">4</span>
			</label>
			<label class="comment-form-rating-rate">
				<input class="comment-form-rating-input" type="radio" name="comment_rate" value="3" />
				<span class="comment-form-rating-text">3</span>
			</label>
			<label class="comment-form-rating-rate">
				<input class="comment-form-rating-input" type="radio" name="comment_rate" value="2" />
				<span class="comment-form-rating-text">2</span>
			</label>
			<label class="comment-form-rating-rate">
				<input class="comment-form-rating-input" type="radio" name="comment_rate" value="1" />
				<span class="comment-form-rating-text">1</span>
			</label>
		</span>
	</p>
HTML;
			}

			$comment_fields['comment'] = $title_html . $rating_html . $comment_fields['comment'];

			return $comment_fields;
		}
	}

	add_filter( 'comment_form_fields', 'st_comment_form_fields' );

	if ( ! function_exists( '_st_comment_handle_request' ) ) {
		function _st_comment_handle_request() {
			$title = filter_input( INPUT_POST, 'comment_title' );
			$title = is_string( $title ) ? trim( $title ) : null;

			$rate = filter_input( INPUT_POST, 'comment_rate' );
			$rate = is_string( $rate ) ? trim( $rate ) : null;

			return compact( 'title', 'rate' );
		}
	}

	if ( ! function_exists( 'st_pre_comment_on_post' ) ) {
		function st_pre_comment_on_post( $comment_post_ID ) {
			$add_title_field  = ( get_option( 'st-data424' ) === 'yes' );
			$add_rating_field = ( get_option( 'st-data425' ) === 'yes' );
			$data             = _st_comment_handle_request();

			if ( $add_title_field ) {
				if ( $data['title'] === null || $data['title'] === '' ) {
					return new WP_Error(
						'require_title',
						'<p><strong>エラー</strong>: タイトルを入力してください。',
						200
					);
				}
			}

			if ( $add_rating_field ) {
				if ( $data['rate'] === null || $data['rate'] === '' ) {
					return new WP_Error(
						'require_rate',
						'<p><strong>エラー</strong>: 評価 を入力してください。',
						200
					);
				}

				if ( ! preg_match( '/\A[1-5]\z/', $data['rate'] ) ) {
					return new WP_Error(
						'require_valid_rate',
						'<p><strong>エラー</strong>: 評価 を正しく入力してください。',
						200
					);
				}
			}
		}
	}

	add_action( 'pre_comment_on_post', 'st_pre_comment_on_post' );

	if ( ! function_exists( 'st_preprocess_comment' ) ) {
		function st_preprocess_comment( array $commentdata ) {
			$add_title_field  = ( get_option( 'st-data424' ) === 'yes' );
			$add_rating_field = ( get_option( 'st-data425' ) === 'yes' );
			$data             = _st_comment_handle_request();

			if ( $add_title_field ) {
				$commentdata['comment_meta']['title'] = $data['title'];
			}

			if ( $add_rating_field ) {
				$rate                                = (int) $data['rate'];
				$commentdata['comment_meta']['rate'] = min( max( 1, $rate ), 5 );
			}

			return $commentdata;
		}
	}

	add_filter( 'preprocess_comment', 'st_preprocess_comment' );

	class St_Walker_Comment extends Walker_Comment {
		protected function comment( $comment, $depth, $args ) {
			if ( $args['style'] === 'div' ) {
				$tag       = 'div';
				$add_below = 'comment';
			} else {
				$tag       = 'li';
				$add_below = 'div-comment';
			}

			$commenter = wp_get_current_commenter();

			if ( $commenter['comment_author_email'] ) {
				$moderation_note = __( 'Your comment is awaiting moderation.', 'affinger' );
			} else {
				$moderation_note = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.', 'affinger' );
			}

			$author_name_type = get_option( 'st-data426', '' );
			$show_url         = ( get_option( 'st-data427' ) === 'yes' );

			if ( $show_url ) {
				$author_html = sprintf(
					__( '%s <span class="says">says:</span>', 'affinger' ),
					sprintf( '<cite class="fn">%s</cite>', get_comment_author( $comment ) )
				);
			} else {
				$author_html = sprintf(
					__( '%s <span class="says">says:</span>', 'affinger' ),
					sprintf( '<cite class="fn">%s</cite>', get_comment_author_link( $comment ) )
				);
			}

			$title = (string) get_comment_meta( $comment->comment_ID, 'title', true );
			$title = ( $title !== '' ) ? $title : null;
			$rate  = (int) get_comment_meta( $comment->comment_ID, 'rate', true );
			$rate  = ( $rate >= 1 && $rate <= 5 ) ? $rate : null;

			$rating_html = '<span class="comment-rating st-star">';
			$rating_html .= str_repeat( '<i class="st-fa st-svg-star"></i>', $rate );
			$rating_html .= str_repeat( '<i class="st-fa st-svg-star-o"></i>', 5 - $rate );
			$rating_html .= '</span>';
			?>

			<<?php echo $tag; ?> <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?> id="comment-<?php comment_ID(); ?>">

			<?php if ( $args['style'] !== 'div' ) { ?>
				<div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<?php } ?>

			<div class="comment-author vcard">
				<?php if ( (int) $args['avatar_size'] !== 0 ) { ?>
					<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
				<?php } ?>

				<?php if ($author_name_type !== 'hidden') { ?>
					<?php echo $author_html; ?>
				<?php } ?>
			</div>

			<?php if ( (string) $comment->comment_approved === '0' ) { ?>
				<em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
				<br />
			<?php } ?>

			<?php if ( $title !== null ) { ?>
				<div class="comment-header">
					<p class="comment-title"><?php echo esc_html( $title ); ?></p>
				</div>
			<?php } ?>

			<div class="comment-meta commentmetadata">
				<?php if ( $rate !== null ) { ?>
					<?php echo $rating_html; ?>
				<?php } ?>

				<a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
					<?php printf( __( '%1$s at %2$s', 'affinger' ), get_comment_date( '', $comment ), get_comment_time() ); ?>
				</a>

				<?php edit_comment_link( __( '(Edit)', 'affinger' ), '&nbsp;&nbsp;', '' ); ?>
			</div>

			<?php
			comment_text(
				$comment,
				array_merge(
					$args,
					array(
						'add_below' => $add_below,
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
					)
				)
			);
			?>

			<?php if ( $show_url) { ?>
				<?php $url = get_comment_author_url( $comment ); ?>

				<?php if ( ! empty( $url ) && 'http://' !== $url ) { ?>
					<p class="comment-author-url">
						<a href="<?php echo $url; ?>" rel="external nofollow"><?php echo esc_html( $url ); ?></a>
					</p>
				<?php } ?>
			<?php } ?>

			<?php
			comment_reply_link(
				array_merge(
					$args,
					array(
						'add_below' => $add_below,
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
						'before'    => '<div class="reply">',
						'after'     => '</div>',
					)
				)
			);
			?>

			<?php if ( $args['style'] !== 'div' ) { ?>
				</div>
			<?php } ?>

			<?php
		}
	}
}

if ( ! function_exists( 'st_add_title_header_side_menu' ) ) {
	function st_add_title_header_side_menu($item_output, $item, $depth, $args){
		if ( $args->theme_location === 'primary-menu-side' ) {
			return str_replace('</a>', "<span>{$item->attr_title}</span></a>", $item_output);
		}

		return $item_output;
	}
}
add_filter('walker_nav_menu_start_el', 'st_add_title_header_side_menu', 10, 4);

if ( ! function_exists( '_st_pre_render_block' ) ) {
	function _st_pre_render_block( $pre_render ) {
		global $_st_is_block_rendering;

		if ( $pre_render !== null ) {
			$_st_is_block_rendering = false;

			return $pre_render;
		}

		$_st_is_block_rendering = true;

		return $pre_render;
	}
}

add_filter( 'pre_render_block', '_st_pre_render_block', PHP_INT_MAX );

if ( ! function_exists( '_st_render_block' ) ) {
	function _st_render_block( $block_content ) {
		global $_st_is_block_rendering;

		$_st_is_block_rendering = false;

		return $block_content;
	}
}

add_filter( 'render_block', '_st_render_block' );

if ( ! function_exists( '_st_is_block_rendering' ) ) {
	function _st_is_block_rendering() {
		global $_st_is_block_rendering;

		return $_st_is_block_rendering;
	}
}

if ( trim( $GLOBALS['stdata621'] ) === '' ) {
	add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
	add_filter( 'use_widgets_block_editor', '__return_false' );
} else {
	function st_remove_widgets() {
		unregister_widget("WP_Widget_Block");
	}
	add_action("widgets_init", "st_remove_widgets", 11);
}

function st_newsfeed_add_dashboard_widgets() {

 	wp_add_dashboard_widget( 'st_newsfeed_dashboard_widget', 'STINGER STOREからのお知らせ', 'st_newsfeed_dashboard_widget_function' );
 
 	global $wp_meta_boxes;

 	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

 	$st_newsfeed_widget_backup = array( 'st_newsfeed_dashboard_widget' => $normal_dashboard['st_newsfeed_dashboard_widget'] );
 	unset( $normal_dashboard['st_newsfeed_dashboard_widget'] );

 	$sorted_dashboard = array_merge( $st_newsfeed_widget_backup, $normal_dashboard );

 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}
add_action( 'wp_dashboard_setup', 'st_newsfeed_add_dashboard_widgets' );

function st_newsfeed_dashboard_widget_function() {
	require_once locate_template('st-rss-news.php');
}

$stplus = '';
if ( $st_is_ex_af ) {
	if (locate_template('st-plus.php') !== '') {
	require_once locate_template('st-plus.php');
	}
}
