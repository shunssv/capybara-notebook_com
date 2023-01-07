<?php
$st_is_ex    = st_is_ver_ex();
$st_is_af    = st_is_ver_af();
$st_is_st    = st_is_ver_st();
$st_is_ex_af = st_is_ver_ex_af();

add_action( 'init', function() {

	register_block_style(
		'core/group',
		array(
			'name'         => 'st-group-bg-diagonal',
			'label'        => '斜線',
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'st-group-bg-grid',
			'label'        => 'グリッド',
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'st-group-bg-dot',
			'label'        => 'ドット',
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'st-group-line',
			'label'        => 'ライン',
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'st-group-line-bold',
			'label'        => 'ライン（太）',
		)
	);


	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-naked',
			'label'        => 'カスタム',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-line',
			'label'        => 'ライン',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-bubble',
			'label'        => 'ふきだし',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-diagonal',
			'label'        => '斜線',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-count',
			'label'        => 'カウント',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-attention',
			'label'        => '注意',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-check',
			'label'        => 'チェック',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-question',
			'label'        => '質問',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-answer',
			'label'        => '答え',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'st-heading-custom-step',
			'label'        => 'ステップ',
		)
	);

	if ( st_is_ver_ex_af() ):
		register_block_style(
			'core/heading',
			array(
				'name'         => 'st-heading-custom-ranking',
				'label'        => 'ランキング',
			)
		);
	endif;
} );

if  ( isset( $GLOBALS['wp_version'] ) && version_compare( $GLOBALS['wp_version'], '5.8-alpha', '>=' )
   || isset( $GLOBALS["stdata622"] ) && ( $GLOBALS["stdata622"] ) === 'yes' ){

add_action( 'init', function() {

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-pen',
			'label'        => 'カスタム',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-memo-txt',
			'label'        => 'メモ',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-link',
			'label'        => 'リンク',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-check',
			'label'        => 'チェック',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-point',
			'label'        => 'ポイント',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-info-circle',
			'label'        => 'インフォ',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-bigginer',
			'label'        => '初心者',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-attention',
			'label'        => '注意',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-attention-gray',
			'label'        => '注意（グレー）',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-circle-o',
			'label'        => 'マル',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-times',
			'label'        => 'バツ',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-thumbs-o-up',
			'label'        => 'Like',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-thumbs-o-down',
			'label'        => 'Bad',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-code',
			'label'        => 'Code',
		)
	);


	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-memo',
			'label'        => '付箋',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-dotline',
			'label'        => '囲みドット',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-bubble',
			'label'        => 'ふきだし',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-marumozi',
			'label'        => 'まるもじ',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-button',
			'label'        => '簡易ボタン',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-kaiwa',
			'label'        => '簡易会話A',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'st-paragraph-kaiwa-b',
			'label'        => '簡易会話B',
		)
	);
} );

if( isset( $GLOBALS["stdata543"] ) && ( $GLOBALS["stdata543"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-pen' );
	});
endif;

if( isset( $GLOBALS["stdata544"] ) && ( $GLOBALS["stdata544"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-memo-txt' );
	});
endif;

if( isset( $GLOBALS["stdata545"] ) && ( $GLOBALS["stdata545"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-link' );
	});
endif;

if( isset( $GLOBALS["stdata546"] ) && ( $GLOBALS["stdata546"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-check' );
	});
endif;

if( isset( $GLOBALS["stdata547"] ) && ( $GLOBALS["stdata547"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-point' );
	});
endif;

if( isset( $GLOBALS["stdata548"] ) && ( $GLOBALS["stdata548"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-info-circle' );
	});
endif;

if( isset( $GLOBALS["stdata549"] ) && ( $GLOBALS["stdata549"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-bigginer' );
	});
endif;

if( isset( $GLOBALS["stdata550"] ) && ( $GLOBALS["stdata550"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-attention' );
	});
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-attention-gray' );
	});
endif;

if( isset( $GLOBALS["stdata551"] ) && ( $GLOBALS["stdata551"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-circle-o' );
	});
endif;

if( isset( $GLOBALS["stdata552"] ) && ( $GLOBALS["stdata552"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-times' );
	});
endif;

if( isset( $GLOBALS["stdata553"] ) && ( $GLOBALS["stdata553"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-thumbs-o-up' );
	});
endif;

if( isset( $GLOBALS["stdata554"] ) && ( $GLOBALS["stdata554"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-thumbs-o-down' );
	});
endif;

if( isset( $GLOBALS["stdata555"] ) && ( $GLOBALS["stdata555"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-code' );
	});
endif;

if( isset( $GLOBALS["stdata558"] ) && ( $GLOBALS["stdata558"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-memo' );
	});
endif;

if( isset( $GLOBALS["stdata559"] ) && ( $GLOBALS["stdata559"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-dotline' );
	});
endif;

if( isset( $GLOBALS["stdata560"] ) && ( $GLOBALS["stdata560"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-bubble' );
	});
endif;

if( isset( $GLOBALS["stdata561"] ) && ( $GLOBALS["stdata561"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-marumozi' );
	});
endif;

if( isset( $GLOBALS["stdata556"] ) && ( $GLOBALS["stdata556"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-button' );
	});
endif;

if( isset( $GLOBALS["stdata567"] ) && ( $GLOBALS["stdata567"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-kaiwa' );
	});
endif;

if( isset( $GLOBALS["stdata568"] ) && ( $GLOBALS["stdata568"] ) === 'yes' ):
	add_action( 'init', function() {
		unregister_block_style( 'core/paragraph', 'st-paragraph-kaiwa-b' );
	});
endif;

}

add_action( 'init', function() {

	register_block_style(
		'core/image',
		array(
			'name'         => 'st-photo-shadow',
			'label'        => 'シャドウ',
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'         => 'st-eyecatch-width',
			'label'        => 'ワイド',
		)
	);
} );

add_action( 'init', function() {

	register_block_style(
		'core/list',
		array(
			'name'         => 'st-check',
			'label'        => '簡易チェック',
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'         => 'st-check-border',
			'label'        => '簡易チェック+ドット下線',
		)
	);
} );

add_action( 'init', function() {
	unregister_block_style( 'core/list', 'st-check' );
});

add_action( 'init', function() {
	unregister_block_style( 'core/list', 'st-check-border' );
});

add_action( 'init', function() {

	register_block_style(
		'core/code',
		array(
			'name'         => 'st-wide-background',
			'label'        => 'ワイド（黒）',
		)
	);


	register_block_style(
		'core/quote',
		array(
			'name'        => 'st-quote-line',
			'label'       => 'ライン',
		)
	);


	register_block_style(
		'core/table',
		array(
			'name'         => 'scroll-box',
			'label'        => 'スクロール（SP）',
		)
	);

	register_block_style(
		'core/table',
		array(
			'name'         => 'st-centertable',
			'label'        => '中央寄せ',
		)
	);

	register_block_style(
		'core/table',
		array(
			'name'         => 'st-table-line',
			'label'        => 'ラインのみ',
		)
	);

	register_block_style(
		'core/table',
		array(
			'name'         => 'st-table-line-2',
			'label'        => 'ラインのみ2',
		)
	);
} );

if ( ! function_exists( 'st_get_default_block_pattern_category' ) ) {
	function st_get_default_block_pattern_category() {
		return get_term_by( 'slug', 'default', 'st_block_pattern_category' );
	}
}

if ( ! function_exists( 'st_create_default_block_pattern_category' ) ) {
	function st_create_default_block_pattern_category() {
		$taxonomy_key          = 'st_block_pattern_category';
		$default_category_slug = 'default';
		$ids                   = term_exists( $default_category_slug, $taxonomy_key );

		if ( $ids === null ) {
			$ids = wp_insert_term( __( 'Uncategorized' ), $taxonomy_key, array( 'slug' => $default_category_slug ) );
		}

		if ( ! is_array( $ids ) ) {
			return false;
		}

		return array_map( 'intval', $ids );
	}
}

function st_register_block_patterns() {

	$post_type_labels = array(
		'name'                     => 'マイブロック',
		'singular_name'            => 'マイブロック',
		'add_new'                  => '新規追加',
		'add_new_item'             => '新規マイブロックを追加',
		'edit_item'                => 'マイブロックの編集',
		'new_item'                 => '新規マイブロック',
		'view_item'                => 'マイブロックを表示',
		'view_items'               => 'マイブロックの表示',
		'search_items'             => 'マイブロックを検索',
		'not_found'                => 'マイブロックが見つかりませんでした。',
		'not_found_in_trash'       => 'ゴミ箱内にマイブロックが見つかりませんでした。',
		'all_items'                => 'マイブロック一覧',
		'attributes'               => 'マイブロックの属性',
		'filter_items_list'        => 'マイブロックの絞り込み',
		'items_list_navigation'    => 'マイブロックリストナビゲーション',
		'items_list'               => 'マイブロックリスト',
		'item_published'           => 'マイブロックを公開しました。',
		'item_published_privately' => 'マイブロックを限定公開しました。',
		'item_reverted_to_draft'   => 'マイブロックを下書きに戻しました。',
		'item_scheduled'           => 'マイブロックを予約しました。',
		'item_updated'             => 'マイブロックを更新しました。',
	);

	$post_type_args = array(
		'labels'          => $post_type_labels,
		'description'     => 'ブロックパターンメンテナンス用',
		'public'          => false,
		'hierarchical'    => false,
		'show_ui'         => true,
		'menu_position'   => 5,
		'capability_type' => 'post',
		'supports'        => array(
			'title',
			'editor',
			'author',
		),
		'query_var'       => false,
		'show_in_rest'    => true,
		'menu_icon'       => 'dashicons-screenoptions',
	);

	register_post_type( 'st_block_pattern', $post_type_args );


	$taxonomy_labels = [
		'name'                       => _x( 'Categories', 'taxonomy general name' ),
		'singular_name'              => _x( 'Category', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Categories', 'testtheme' ),
		'popular_items'              => '人気のカテゴリー',
		'all_items'                  => __( 'All Categories', 'testtheme' ),
		'edit_item'                  => __( 'Edit Category', 'testtheme' ),
		'view_item'                  => __( 'View Category', 'testtheme' ),
		'update_item'                => __( 'Update Category', 'testtheme' ),
		'add_new_item'               => __( 'Add New Category', 'testtheme' ),
		'new_item_name'              => __( 'New Category Name', 'testtheme' ),
		'separate_items_with_commas' => 'カテゴリーが複数ある場合はコンマで区切ってください',
		'add_or_remove_items'        => 'カテゴリーの追加もしくは削除',
		'choose_from_most_used'      => 'よく使われているカテゴリーから選択',
		'not_found'                  => __( 'No categories found.', 'testtheme' ),
		'no_terms'                   => __( 'No categories', 'testtheme' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'testtheme' ),
		'items_list'                 => __( 'Categories list', 'testtheme' ),
		'most_used'                  => _x( 'Most Used', 'categories' ),
		'back_to_items'              => __( '&larr; Back to Ctegories', 'testtheme' ),
	];

	$taxonomy_args = [
		'labels'                => $taxonomy_labels,
		'public'                => false,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'show_in_rest'          => true,
	];;

	register_taxonomy( 'st_block_pattern_category', 'st_block_pattern', $taxonomy_args );


	st_create_default_block_pattern_category();

	$built_in_category_slugs = array( 'header', 'text', 'columns', 'buttons', 'gallery' );
	$categories              = get_terms( array( 'taxonomy' => 'st_block_pattern_category', 'get' => 'all' ) );

	if ( ! is_wp_error( $categories ) && $categories ) {
	
		$categories = array_filter(
			$categories,
			function ( $category ) use ( $built_in_category_slugs ) {
				return ! in_array( $category->slug, $built_in_category_slugs, true );
			}
		);

	
		foreach ( $categories as $category ) {
			register_block_pattern_category( $category->slug, array( 'label' => $category->name ) );
		}
	}


	$query_args = array(
		'post_type'     => array( 'st_block_pattern' ),
		'post_status'   => array( 'publish' ),
		'nopaging'      => true,
		'no_found_rows' => true,
	
	
	);

	$pattern_query = new WP_Query( $query_args );


	if ( ! $pattern_query->have_posts() ) {
		return;
	}

	$default_category = st_get_default_block_pattern_category();

	while ( $pattern_query->have_posts() ) {
		$pattern_query->the_post();

		$the_id               = get_the_ID();
		$exclude_from_pattern = (bool) get_post_meta( $the_id, 'exclude_from_pattern', true );

		if ( $exclude_from_pattern ) {
			continue;
		}

	
		$the_content = get_the_content();

		if ( $the_content === '' ) {
			continue;
		}

	
		$the_title = get_the_title();
		$the_title = ( $the_title !== '' ) ? $the_title : '無題ブロックパターン';

	
		$the_category_slugs = array();
		$the_categories     = get_the_terms( $the_id, 'st_block_pattern_category' );

	
		if ( is_wp_error( $the_categories ) || ! $the_categories ) {
			$the_categories = [ $default_category ];
		}

		foreach ( $the_categories as $category ) {
			$the_category_slugs[] = $category->slug;
		}

	
		register_block_pattern(
			'st/block-pattern-' . $the_id,
			array(
				'title'      => $the_title,
				'content'    => $the_content,
				'categories' => $the_category_slugs,
			)
		);
	}

	wp_reset_postdata();
}

add_action( 'init', 'st_register_block_patterns' );

if ( ! function_exists( 'st_save_post_st_block_pattern' ) ) {
	function st_save_post_st_block_pattern( $post_id ) {
		$post_status = get_post_status( $post_id );

		if ( $post_status === false || $post_status === 'auto-draft' ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

	
		$exclude_from_pattern = (string) (int) (bool) filter_input( INPUT_POST, 'exclude_from_pattern' );

		update_post_meta( $post_id, 'exclude_from_pattern', $exclude_from_pattern );

	
		//
	
	
		$taxonomy_key = 'st_block_pattern_category';
		$terms        = get_the_terms( $post_id, $taxonomy_key );

		if ( $terms !== false ) {
			return;
		}

		$ids = st_create_default_block_pattern_category();

		if ( $ids === false ) {
			return;
		}

		$default_category_id = (int) $ids['term_id'];

		wp_set_post_terms( $post_id, array( $default_category_id ), $taxonomy_key );
	}
}

add_action( 'save_post_st_block_pattern', 'st_save_post_st_block_pattern' );

if ( ! function_exists( 'st_reuseblock_menu_add' ) ) {
	function st_reuseblock_menu_add() {
		add_menu_page(
			'再利用ブロック',
			'再利用ブロック',
			'manage_options',
			'edit.php?post_type=wp_block',
			'',
			'dashicons-screenoptions',
			6
		);
	}
}

add_action( 'admin_menu', 'st_reuseblock_menu_add' );

if ( ! function_exists( 'st_is_st_block_pattern_list_screen' ) ) {
	function st_is_st_block_pattern_list_screen() {
		if ( ! is_admin() ) {
			return false;
		}

		if ( ! function_exists( 'get_current_screen' ) ) {
			return false;
		}

		$screen = get_current_screen();

		if ( ! $screen || $screen->id === null ) {
			return false;
		}

		return ( $screen->id === 'edit-st_block_pattern' );
	}
}

if ( ! function_exists( 'st_manage_st_block_pattern_posts_columns' ) ) {
	function st_manage_st_block_pattern_posts_columns( $posts_columns ) {
		$rest_columns = [];

		foreach ( array( 'date', 'postid' ) as $column ) {
			if ( ! array_key_exists( $column, $posts_columns ) ) {
				continue;
			}

			$rest_columns[ $column ] = $posts_columns[ $column ];

			unset( $posts_columns[ $column ] );
		}

		$posts_columns['shortcode'] = 'ショートコード';

		$posts_columns = array_merge( $posts_columns, $rest_columns );

		return $posts_columns;
	}
}

add_filter( 'manage_st_block_pattern_posts_columns', 'st_manage_st_block_pattern_posts_columns' );

if ( ! function_exists( 'st_manage_st_block_pattern_posts_custom_column' ) ) {
	function st_manage_st_block_pattern_posts_custom_column( $column_name, $post_id ) {
		switch ( $column_name ) {
			case 'shortcode':
				echo sprintf( '<code>[st-myblock id="%s"]</code>', $post_id );

				break;

			default:
				break;
		}
	}
}

add_action( 'manage_st_block_pattern_posts_custom_column', 'st_manage_st_block_pattern_posts_custom_column', 10, 2 );

if ( ! function_exists( 'st_display_st_block_pattern_term_filter' ) ) {
	function st_display_st_block_pattern_term_filter( $post_type ) {
		global $wp_query;

		if ( ! st_is_st_block_pattern_list_screen() || ! $wp_query->is_main_query() ) {
			return;
		}

		$list_cats = function ( $element ) {
			return mb_strimwidth( $element, 0, 40, '...', 'UTF-8' );
		};

		add_filter( 'list_cats', $list_cats );

		$taxonomy_name = 'st_block_pattern_category';
		$taxonomy      = get_taxonomy( $taxonomy_name );

		$taxonomy_dropdown = wp_dropdown_categories(
			array(
				'show_option_all' => $taxonomy->labels->all_items,
				'taxonomy'        => $taxonomy_name,
				'name'            => $taxonomy_name,
				'orderby'         => 'name',
				'selected'        => $wp_query->query[ $taxonomy_name ] ?? 0,
				'hierarchical'    => true,
				'depth'           => 0,
				'show_count'      => false,
				'hide_empty'      => false,
				'echo'            => false,
				'value_field'     => 'slug',
			)
		);

		if ( preg_match( '!</option>!', $taxonomy_dropdown ) ) {
			echo $taxonomy_dropdown;
		}

		remove_filter( 'list_cats', $list_cats );
	}
}

add_action( 'restrict_manage_posts', 'st_display_st_block_pattern_term_filter' );

if ( ! function_exists( 'st_handle_st_block_pattern_term_filter' ) ) {
	function st_handle_st_block_pattern_term_filter( WP_Query $query ) {
		if ( ! st_is_st_block_pattern_list_screen() || ! $query->is_main_query() ) {
			return $query;
		}

		$taxonomy_name = 'st_block_pattern_category';

		if ( ! isset( $query->query_vars[ $taxonomy_name ] ) ) {
			return;
		}

		$term = get_term_by( 'slug', $query->get( $taxonomy_name ), $taxonomy_name );

		if ( $term === false ) {
			unset( $query->query_vars[ $taxonomy_name ] );
		}

		return $query;
	}
}

add_action( 'parse_query', 'st_handle_st_block_pattern_term_filter' );

if ( ! function_exists( 'st_pre_get_st_block_pattern' ) ) {
	function st_pre_get_st_block_pattern( WP_QUery $query ) {
		if ( ! st_is_st_block_pattern_list_screen() || ! $query->is_main_query() ) {
			return;
		}

		$s = trim( $query->get( 's', '' ) );

		if ( $s !== '' && ctype_digit( $s ) ) {
			$query->set( 'p', (int) $s );

			$query->set( 's', '' );
		}
	}
}

add_action( 'pre_get_posts', 'st_pre_get_st_block_pattern' );

if ( ! function_exists( 'st_myblock_shortcode' ) ) {
	function st_myblock_shortcode( $atts, $content = null, $tag = '' ) {
		$defaults = array(
			'id' => '',
		);

		$atts = shortcode_atts( $defaults, $atts, 'st-myblock' );
		$atts = array_map( 'trim', $atts );

		$id = (int) $atts['id'];

		$block_pattern_query = new WP_Query( array(
			'post_type'           => 'st_block_pattern',
			'p'                   => $id,
			'posts_per_page'      => 1,
			'nopaging'            => true,
			'ignore_sticky_posts' => true,
			'no_found_rows'       => true,
		) );

		if ( ! $block_pattern_query->have_posts() ) {
			return '';
		}

		$show_edit_link = false;

		if ( is_user_logged_in() ) {
		
			$edit_link_roles = array(
				'administrator',
				'editor',
			);

			$current_user   = wp_get_current_user();
			$show_edit_link = ( get_option( 'st-data591', 'yes' ) === 'yes' );
			$show_edit_link = $show_edit_link && ( _st_any_in_array( $edit_link_roles, $current_user->roles ) );
			$show_edit_link = $show_edit_link && current_user_can( 'edit_post', $id );
		}

		ob_start();
		?>

		<?php while ( $block_pattern_query->have_posts() ): $block_pattern_query->the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php if ( $show_edit_link ): ?>
			<div class="st-edit-link">
				<button class="st-edit-link-button"
				        type="button"
				        onclick="window.open('<?= get_edit_post_link( $id ); ?>'); return false;"
				        title="<?= esc_attr( get_the_title( $id ) ); ?>">
					[パターン編集]
				</button>
			</div>
		<?php endif; ?>

		<?php
		return ob_get_clean();
	}
}

add_shortcode( 'st-myblock', 'st_myblock_shortcode' );

if ( ! function_exists( 'st_display_st_block_pattern_shortcode_meta_box' ) ) {
	function st_display_st_block_pattern_shortcode_meta_box( WP_Post $post, array $args ) {
		?>

		<p>
			以下のショートコードを表示したい箇所に記入してください。<br><br>
			<code>[st-myblock id="<?php echo esc_html( get_the_ID( $post ) ); ?>"]</code>
		</p>

		<?php
	}
}

if ( ! function_exists( 'st_display_st_block_pattern_settings_meta_box' ) ) {
	function st_display_st_block_pattern_settings_meta_box( WP_Post $post, array $args ) {
		$exclude_from_pattern = (bool) get_post_meta($post->ID, 'exclude_from_pattern', true);
		?>

		<label>
			<input name="exclude_from_pattern" type="checkbox" value="1" <?php checked( $exclude_from_pattern ); ?>>
			パターンに追加しない
		</label>

		<?php
	}
}

if ( ! function_exists( 'st_add_block_pattern_meta_boxes' ) ) {
	function st_add_st_block_pattern_meta_boxes() {
		add_meta_box(
			'st-block-pattern-shortcode',
			'ショートコード',
			'st_display_st_block_pattern_shortcode_meta_box',
			'st_block_pattern',
			'side'
		);

		add_meta_box(
			'st-block-pattern-settings',
			'設定',
			'st_display_st_block_pattern_settings_meta_box',
			'st_block_pattern',
			'side'
		);
	}
}

add_action( 'add_meta_boxes_st_block_pattern', 'st_add_st_block_pattern_meta_boxes' );
