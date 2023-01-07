<?php

if ( ! function_exists( 'st_is_affiliate_manager_enabled' ) ) {
	function st_is_affiliate_manager_enabled() {
		return ( isset( $GLOBALS['st_affiliate_manager'] ) && function_exists( 'st_am_get_template_tag_version' ) );
	}
}

if ( ! function_exists( 'st_affiliate_manager_render_beacon' ) ) {
	function st_affiliate_manager_render_beacon( $html, WP_Post $tag, $type, array $vars ) {
		if ( ! amp_is_amp() ) {
			return $html;
		}

		$allow_st_af_shortcode_on_amp = ( get_option( 'st-data481' ) === 'yes' );

		if ( ! $allow_st_af_shortcode_on_amp ) {
			return '';
		}

		ob_start();

		?>
		<amp-pixel class="st-am-impression-tracker" src="<?php echo $vars['url'] ?>" data-ogp-ignore></amp-pixel>
		<?php

		return ob_get_clean();
	}
}

if ( st_is_affiliate_manager_enabled() ) {
	add_filter( 'st_am_render_beacon', 'st_affiliate_manager_render_beacon', 10, 4 );
}

if ( ! function_exists( 'st_is_af_cpt_enabled' ) ) {
	function st_is_af_cpt_enabled() {
		return defined( 'ST_AF_CPT' );
	}
}

if ( ! function_exists( 'st_is_tag_plugin_enabled' ) ) {
	function st_is_tag_plugin_enabled() {
		return ( st_is_affiliate_manager_enabled() || st_is_af_cpt_enabled() );
	}
}

if ( ! function_exists( '_st_tag_plugin_call' ) ) {
	function _st_tag_plugin_call( $function, array $args = array(), $default = null ) {
		if ( st_is_affiliate_manager_enabled() && function_exists( 'st_am_' . $function ) ) {
			return call_user_func_array( 'st_am_' . $function, $args );
		} elseif ( st_is_af_cpt_enabled() && function_exists( 'st_af_cpt_' . $function ) ) {
			return call_user_func_array( 'st_af_cpt_' . $function, $args );
		}

		return $default;
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_heading' ) ) {
	function st_tag_plugin_get_the_heading( $post = null ) {
		return _st_tag_plugin_call( 'get_the_heading', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_star_html' ) ) {
	function st_tag_plugin_get_the_star_html( $post = null ) {
		return _st_tag_plugin_call( 'get_the_star_html', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_star_rating' ) ) {
	function st_tag_plugin_get_the_star_rating( $post = null ) {
		return _st_tag_plugin_call( 'get_the_star_rating', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_description' ) ) {
	function st_tag_plugin_get_the_description( $post = null ) {
		return _st_tag_plugin_call( 'get_the_description', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_description_2' ) ) {
	function st_tag_plugin_get_the_description_2( $post = null ) {
		return _st_tag_plugin_call( 'get_the_description_2', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_raw_banner_html' ) ) {
	function st_tag_plugin_get_the_raw_banner_html( $post = null ) {
		return _st_tag_plugin_call( 'get_the_raw_banner_html', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_raw_text_link_html' ) ) {
	function st_tag_plugin_get_the_raw_text_link_html( $post = null ) {
		return _st_tag_plugin_call( 'get_the_raw_text_link_html', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_detail_link_uri' ) ) {
	function st_tag_plugin_get_the_detail_link_uri( $post = null ) {
		return _st_tag_plugin_call( 'get_the_detail_link_uri', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_detail_link_label' ) ) {
	function st_tag_plugin_get_the_detail_link_label( $post = null ) {
		return _st_tag_plugin_call( 'get_the_detail_link_label', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_nofollow' ) ) {
	function st_tag_plugin_get_the_nofollow( $post = null ) {
		return _st_tag_plugin_call( 'get_the_nofollow', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_raw_detail_link_html' ) ) {
	function st_tag_plugin_get_the_raw_detail_link_html( $post = null ) {
		return _st_tag_plugin_call( 'get_the_raw_detail_link_html', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_raw_raw_html' ) ) {
	function st_tag_plugin_get_the_raw_raw_html( $post = null ) {
		return _st_tag_plugin_call( 'get_the_raw_raw_html', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_is_wysiwyg_editor_disabled' ) ) {
	function st_tag_plugin_is_wysiwyg_editor_disabled( $post = null ) {
		return _st_tag_plugin_call( 'is_wysiwyg_editor_disabled', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_source' ) ) {
	function st_tag_plugin_get_the_source( $post = null ) {
		if ( st_is_affiliate_manager_enabled() && function_exists( 'st_am_get_the_source' ) ) {
			return st_am_get_the_source( $post );
		}

		return null;
	}
}

if ( ! function_exists( 'st_tag_plugin_has_raw_html' ) ) {
	function st_tag_plugin_has_raw_html( $post = null ) {
		return _st_tag_plugin_call( 'has_raw_html', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_has_nothing' ) ) {
	function st_tag_plugin_has_nothing( $post = null ) {
		return _st_tag_plugin_call( 'has_nothing', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_has_banner' ) ) {
	function st_tag_plugin_has_banner( $post = null ) {
		return _st_tag_plugin_call( 'has_banner', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_has_text_link' ) ) {
	function st_tag_plugin_has_text_link( $post = null ) {
		return _st_tag_plugin_call( 'has_text_link', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_has_detail_link' ) ) {
	function st_tag_plugin_has_detail_link( $post = null ) {
		return _st_tag_plugin_call( 'has_detail_link', array( $post ), '' );
	}
}

if ( ! function_exists( 'st_tag_plugin_get_tag_type_slug' ) ) {
	function st_tag_plugin_get_tag_type_slug( $type ) {
		if ( st_is_affiliate_manager_enabled() && function_exists( 'st_am_get_tag_type_slug' ) ) {
			return st_am_get_tag_type_slug( $type );
		}

		return '';
	}
}

if ( ! function_exists( 'st_tag_plugin_get_the_tag_type' ) ) {
	function st_tag_plugin_get_the_tag_type( $post = null ) {
		if ( st_is_affiliate_manager_enabled() && function_exists( 'st_am_get_the_tag_type' ) ) {
			return st_am_get_the_tag_type( $post );
		}

		return '';
	}
}

if ( ! function_exists( 'st_tag_plugin_the_beacon' ) ) {
	function st_tag_plugin_the_beacon( $post = null, $type = null ) {
		if ( st_is_affiliate_manager_enabled() && function_exists( 'st_am_the_beacon' ) ) {
			st_am_the_beacon( $post, $type );
		}
	}
}

if ( ! function_exists( 'st_tag_plugin_the_tag' ) ) {
	function st_tag_plugin_the_tag( $html, $post = null, $type = null, $source = null ) {
		if ( st_is_affiliate_manager_enabled() && function_exists( 'st_am_the_tag' ) ) {
			st_am_the_tag( $html, $post, $type, $source );
		} else {
			echo $html;
		}
	}
}

if ( ! function_exists( 'st_rankgroup_shortcode' ) ) {
	function st_rankgroup_shortcode( $atts, $content = '' ) {
		{
			if ( ! st_is_tag_plugin_enabled() ) {
				return '';
			}

			$defaults = array(
				'id'    => '',
				'label' => 'ランキング',
				'name'  => '',
			);

			$atts = shortcode_atts( $defaults, $atts, 'st_rankgroup' );
			$atts = array_map( 'trim', $atts );

			ob_start();

			call_user_func(
				function () use ( $atts, $content ) {
					include locate_template( 'st-rankgroup.php' );
				}
			);

			return ob_get_clean();
		}
	}
}

add_shortcode( 'st-rankgroup', 'st_rankgroup_shortcode' );

if ( ! function_exists( 'st_is_pvm_enabled' ) ) {
	function st_is_pvm_enabled() {
		return (
			st_is_affiliate_manager_enabled() &&
			function_exists( 'st_am_get' ) &&
			( st_am_get( 'pv_monitor.plugin' ) !== null )
		);
	}
}

if ( ! function_exists( 'st_get_pvm_service' ) ) {
	function st_get_pvm_service() {
		if ( ! st_is_pvm_enabled() ) {
			return null;
		}

		return st_am_get( 'pv_monitor.tracker.tracker_service' );
	}
}

if ( ! function_exists( 'st_redirect_meta_box_html_after_pvm' ) ) {
	function st_redirect_meta_box_html_after_pvm( $post ) {
		if ( ! st_is_pvm_enabled() ) {
			return;
		}

		$do_not_track = (string) get_post_meta( $post->ID, 'st_redirect_pvm_do_not_track', true );
		$do_not_track = ( $do_not_track === '' || $do_not_track !== '0' );
		?>

		<br>
		<input type="checkbox" name="st_redirect_pvm_do_not_track" value="1"<?php checked( $do_not_track ); ?>>
		リダイレクト元を計測から除外

		<?php
	}
}

add_action( 'st_redirect_meta_box_html_after', 'st_redirect_meta_box_html_after_pvm' );

if ( ! function_exists( 'st_post_save_redirect_meta_box_pvm' ) ) {
	function st_post_save_redirect_meta_box_pvm( $post ) {
		if ( ! st_is_pvm_enabled() ) {
			return;
		}

		$do_not_track = (bool) filter_input( INPUT_POST, 'st_redirect_pvm_do_not_track' );

		if ( $do_not_track ) {
			delete_post_meta( $post->ID, 'st_redirect_pvm_do_not_track', '0' );
		} else {
			update_post_meta( $post->ID, 'st_redirect_pvm_do_not_track', '0' );
		}
	}
}

add_action( 'st_post_save_redirect_meta_box', 'st_post_save_redirect_meta_box_pvm' );

if ( ! function_exists( 'st_pre_redirect_to_specified_url_pvm' ) ) {
	function st_pre_redirect_to_specified_url_pvm( $post ) {
		if ( ! st_is_pvm_enabled() ) {
			return;
		}

		$do_not_track = (string) get_post_meta( $post->ID, 'st_redirect_pvm_do_not_track', true );
		$do_not_track = ( $do_not_track === '' || $do_not_track !== '0' );

		if ( $do_not_track ) {
			return;
		}

		$tracker_service = st_get_pvm_service();

		if ( $tracker_service === null ) {
			return;
		}

		$tracker_service->trackCurrentPage();
	}
}

add_action( 'st_pre_redirect_to_specified_url', 'st_pre_redirect_to_specified_url_pvm' );
