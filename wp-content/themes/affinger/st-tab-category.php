<?php
/**
 * タブ カテゴリ一覧
 *
 */
if ( ! is_front_page() ):
	return;
endif;

$category_a_id = get_option( 'st-data569', '' ) !== '' ? intval( get_option( 'st-data569' ) ) : '';
$category_b_id = get_option( 'st-data570', '' ) !== '' ? intval( get_option( 'st-data570' ) ) : '';
$category_c_id = get_option( 'st-data571', '' ) !== '' ? intval( get_option( 'st-data571' ) ) : '';
$category_d_id = get_option( 'st-data572', '' ) !== '' ? intval( get_option( 'st-data572' ) ) : '';

$cat_meta_a_bgcolor = get_option( 'st-data577', '' ) !== '' ? get_option( 'st-data577' ) : '';
$cat_meta_b_bgcolor = get_option( 'st-data578', '' ) !== '' ? get_option( 'st-data578' ) : '';
$cat_meta_c_bgcolor = get_option( 'st-data579', '' ) !== '' ? get_option( 'st-data579' ) : '';
$cat_meta_d_bgcolor = get_option( 'st-data580', '' ) !== '' ? get_option( 'st-data580' ) : '';

$cat_meta_text_color  = get_option( 'st-data581', '' ) !== '' ? get_option( 'st-data581' ) : '';
$tab_radius           = get_option( 'st-data610', '' ) === 'radius' ? 'st-radius' : 'st-noradius';

$post_number   = get_option( 'st-data573', '' ) !== '' ? get_option( 'st-data573' ) : '5';
$post_order    = get_option( 'st-data575', '' ) !== '' ? get_option( 'st-data575' ) : 'desc';
$post_orderby  = get_option( 'st-data576', '' ) !== '' ? get_option( 'st-data576' ) : 'id';
$cat_child     = get_option( 'st-data583', '' ) !== '' ? 'off' : 'on';

$category_a_url = '';
$category_b_url = '';
$category_c_url = '';
$category_d_url = '';

if ( st_is_ver_ex() ):
	$loop      = get_option( 'st-data574', '' ) !== '' ? 'on' : '';
	$card      = get_option( 'st-data320', '' ) !== '' ? 'card' : '';
else:
	$loop      = '';
	$card      = '';
endif;

$category_new_tab_name = get_option( 'st-data624', '' ) !== '' ? get_option( 'st-data624' ) : '最新記事';

$category_9 = get_category('999999');

if ( $category_a_id && ( $category_9 || $category_a_id !== 999999 ) ):
	$category_a     = get_category( $category_a_id );
	$category_a_url = get_category_link( $category_a_id );

	if( $category_a ):
		$cat_meta_a = st_get_term_meta( $category_a_id );
	else:
		$cat_meta_a = '';
	endif;
else:
	$category_a     = get_category( 0 );
	$cat_meta_a = '';
endif;

if ( $category_b_id && ( $category_9 || $category_b_id !== 999999 ) ):
	$category_b     = get_category( $category_b_id );
	$category_b_url = get_category_link( $category_b_id );

	if( $category_b ):
		$cat_meta_b = st_get_term_meta( $category_b_id );
	else:
		$cat_meta_b = '';
	endif;
elseif ( $category_b_id && $category_b_id === 999999 ):
	$category_b     = get_category( 0 );
	$cat_meta_b     = '';
else:
	$category_b = '';
	$cat_meta_b = '';
endif;

if ( $category_c_id && ( $category_9 || $category_c_id !== 999999 ) ):
	$category_c     = get_category( $category_c_id );
	$category_c_url = get_category_link( $category_c_id );

	if( $category_c ):
		$cat_meta_c = st_get_term_meta( $category_c_id );
	else:
		$cat_meta_c = '';
	endif;
elseif ( $category_c_id && $category_c_id === 999999 ):
	$category_c     = get_category( 0 );
	$cat_meta_c     = '';
else:
	$category_c = '';
	$cat_meta_c = '';
endif;

if ( $category_d_id && ( $category_9 || $category_d_id !== 999999 ) ):
	$category_d     = get_category( $category_d_id );
	$category_d_url = get_category_link( $category_d_id );

	if( $category_d ):
		$cat_meta_d = st_get_term_meta( $category_d_id );
	else:
		$cat_meta_d = '';
	endif;
elseif ( $category_d_id && $category_d_id === 999999 ):
	$category_d     = get_category( 0 );
	$cat_meta_d     = '';
else:
	$category_d = '';
	$cat_meta_d = '';
endif;

if ( ! $loop && $category_a_url ):
	$category_a_url_btn = '<a class="st-tab-category-more" href="' . esc_url( $category_a_url ) . '"><p>もっと見る</p></a>';
else:
	$category_a_url_btn = '';
endif;

if ( ! $loop && $category_b_url ):
	$category_b_url_btn = '<a class="st-tab-category-more" href="' . esc_url( $category_b_url ) . '"><p>もっと見る</p></a>';
else:
	$category_b_url_btn = '';
endif;

if ( ! $loop && $category_c_url ):
	$category_c_url_btn = '<a class="st-tab-category-more" href="' . esc_url( $category_c_url ) . '"><p>もっと見る</p></a>';
else:
	$category_c_url_btn = '';
endif;

if ( ! $loop && $category_d_url ):
	$category_d_url_btn = '<a class="st-tab-category-more" href="' . esc_url( $category_d_url ) . '"><p>もっと見る</p></a>';
else:
	$category_d_url_btn = '';
endif;

if ( ! $cat_meta_a_bgcolor ):
	if ( isset( $cat_meta_a['bgcolor'] ) && trim( $cat_meta_a['bgcolor'] ) !== '' ):
		$cat_meta_a_bgcolor = $cat_meta_a['bgcolor'];
	else:
		$cat_meta_a_bgcolor = '';
	endif;
endif;

if ( ! $cat_meta_b_bgcolor ):
	if ( isset( $cat_meta_b['bgcolor'] ) && trim( $cat_meta_b['bgcolor'] ) !== '' ):
		$cat_meta_b_bgcolor = $cat_meta_b['bgcolor'];
	else:
		$cat_meta_b_bgcolor = '';
	endif;
endif;

if ( ! $cat_meta_c_bgcolor ):
	if ( isset( $cat_meta_c['bgcolor'] ) && trim( $cat_meta_c['bgcolor'] ) !== '' ):
		$cat_meta_c_bgcolor = $cat_meta_c['bgcolor'];
	else:
		$cat_meta_c_bgcolor = '';
	endif;
endif;

if ( ! $cat_meta_d_bgcolor ):
	if ( isset( $cat_meta_d['bgcolor'] ) && trim( $cat_meta_d['bgcolor'] ) !== '' ):
		$cat_meta_d_bgcolor = $cat_meta_d['bgcolor'];
	else:
		$cat_meta_d_bgcolor = '';
	endif;
endif;

if ( ! $cat_meta_text_color ):
	$st_cattext_color = get_theme_mod( 'st_cattext_color' );
	if( $st_cattext_color ):
		$cat_meta_text_color = $st_cattext_color;
	else:
		$cat_meta_text_color = '';
	endif;
endif;

if ( trim( $GLOBALS['stdata582']) === '' || ( ! $category_b && ! $category_c && ! $category_d ) ):
else:

	$category_a_name = '';
	$category_b_name = '';
	$category_c_name = '';
	$category_d_name = '';

	if ( $category_a ):
		if ( ! $category_9 && ( $category_a_id === 999999 || ! $category_a_id ) ):
			$category_a_name = $category_new_tab_name;
		else:
			$category_a_name = $category_a->cat_name;
		endif;
	endif;

	if ( $category_b ):
		if ( ! $category_9 && $category_b_id === 999999 ):
			$category_b_name = $category_new_tab_name;
		else:
			$category_b_name = $category_b->cat_name;
		endif;
	endif;

	if ( $category_c ):
		if ( ! $category_9 && $category_c_id === 999999 ):
			$category_c_name = $category_new_tab_name;
		else:
			$category_c_name = $category_c->cat_name;
		endif;
	endif;
	if ( $category_d ):
		if ( ! $category_9 && $category_d_id === 999999 ):
			$category_d_name = $category_new_tab_name;
		else:
			$category_d_name = $category_d->cat_name;
		endif;
	endif;


	if ( ! $category_a_id ||  ( ! $category_9 && $category_a_id === 999999 ) ):
		$category_a_name = $category_new_tab_name;
	endif;
	?>

	<?php // タブ表示ここから ?>

	<div class="post st-tab-category">
	<?php

	$tag = '[st-tab-content memo="全体を包むボックスです" type="button" myclass="'. $tab_radius . '"]';

	if ( $category_a ): $tag .= '[st-input-tab myclass="tab-a" webicon="" text="' . $category_a_name . '" bgcolor="' . $cat_meta_a_bgcolor . '" bordercolor="' . $cat_meta_a_bgcolor . '" color="' . $cat_meta_text_color . '" fontweight="bold" checked="checked"]'; endif;
	if ( $category_b ): $tag .= '[st-input-tab myclass="tab-b" webicon="" text="' . $category_b_name . '" bgcolor="' . $cat_meta_b_bgcolor . '" bordercolor="' . $cat_meta_b_bgcolor . '" color="' . $cat_meta_text_color . '" fontweight="bold" checked=""]'; endif;
	if ( $category_c ): $tag .= '[st-input-tab myclass="tab-c" webicon="" text="' . $category_c_name . '" bgcolor="' . $cat_meta_c_bgcolor . '" bordercolor="' . $cat_meta_c_bgcolor . '" color="' . $cat_meta_text_color . '" fontweight="bold" checked=""]'; endif;
	if ( $category_d ): $tag .= '[st-input-tab myclass="tab-d" webicon="" text="' . $category_d_name . '" bgcolor="' . $cat_meta_d_bgcolor . '" bordercolor="' . $cat_meta_d_bgcolor . '" color="' . $cat_meta_text_color . '" fontweight="bold" checked=""]'; endif;


	$category_a_id = ! $category_9 && ( $category_a_id === 999999 ) ? 0 : $category_a_id;
	$category_b_id = ! $category_9 && ( $category_b_id === 999999 ) ? 0 : $category_b_id;
	$category_c_id = ! $category_9 && ( $category_c_id === 999999 ) ? 0 : $category_c_id;
	$category_d_id = ! $category_9 && ( $category_d_id === 999999 ) ? 0 : $category_d_id;

	if ( $category_a ):
		$tag .= '[st-tab-main bgcolor="" bordercolor=""][st-catgroup cat="' . $category_a_id . '" page="' . $post_number . '" order="' . $post_order . '" orderby="' . $post_orderby . '" child="' . $cat_child . '" load_more="' . $loop . '" slide_center="off" type="' . $card . '"]'. $category_a_url_btn .'[/st-tab-main]';
	endif;

	if ( $category_b ):
		$tag .= '[st-tab-main bgcolor="" bordercolor=""][st-catgroup cat="' . $category_b_id . '" page="' . $post_number . '" order="' . $post_order . '" orderby="' . $post_orderby . '" child="' . $cat_child . '" load_more="' . $loop . '" slide_center="off" type="' . $card . '"]'. $category_b_url_btn .'[/st-tab-main]';
	endif;

	if ( $category_c ):
		$tag .= '[st-tab-main bgcolor="" bordercolor=""][st-catgroup cat="' . $category_c_id . '" page="' . $post_number . '" order="' . $post_order . '" orderby="' . $post_orderby . '" child="' . $cat_child . '" load_more="' . $loop . '" slide_center="off" type="' . $card . '"]'. $category_c_url_btn .'[/st-tab-main]';
	endif;

	if ( $category_d ):
		$tag .= '[st-tab-main bgcolor="" bordercolor=""][st-catgroup cat="' . $category_d_id . '" page="' . $post_number . '" order="' . $post_order . '" orderby="' . $post_orderby . '" child="' . $cat_child . '" load_more="' . $loop . '" slide_center="off" type="' . $card . '"]'. $category_d_url_btn .'[/st-tab-main]';
	endif;

	$tag .= '[/st-tab-content]';

	echo do_shortcode( $tag );
	?>
	</div>
<?php endif;
