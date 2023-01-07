<?php if ( ! defined( 'ST_LAZY_LOAD' ) && trim( $GLOBALS["stdata78"] ) !== '' ): ?>
	<?php
	$selector = '';

	if ( $GLOBALS["stdata78"] === 'allopacity' ) {
		$selector = 'img';
	} elseif ( $GLOBALS["stdata78"] === 'postopacity' ) {
		$selector = '.post img';
	}
	?>

	<?php if ( ! empty( $selector ) ): ?>
		<script>
			(function (window, document, $, undefined) {
				'use strict';

				function transparentize(selector) {
					var scrollTop = $(window).scrollTop();
					var windowHeight = $(window).height();

					$(selector).each(function () {
						var $img = $(this);
						var imgTop = $img.offset().top;

						if (imgTop >= scrollTop + windowHeight) {
							$img.css("opacity", "0");
						}
					});
				}

				function fadeIn(selector) {
					var scrollTop = $(window).scrollTop();
					var windowHeight = $(window).height();

					$(selector).each(function () {
						var $img = $(this);
						var imgTop = $img.offset().top;

						if (scrollTop > imgTop - windowHeight + 100) {
							$img.animate({
								"opacity": "1"
							}, 1000);
						}
					});
				}

				$(function () {
					var timer;
					var selector = '<?php echo esc_js( $selector ); ?>';
					var onEvent = fadeIn.bind(null, selector);

					transparentize(selector);

					$(window).on('orientationchange resize', function () {
						if (timer) {
							clearTimeout(timer);
						}

						timer = setTimeout(onEvent, 100);
					});

					$(window).scroll(onEvent);
				});
			}(window, window.document, jQuery));
		</script>
	<?php endif; ?>
<?php endif; ?>

<?php
if ( trim( $GLOBALS["stdata79"] ) !== '' && $GLOBALS["stdata79"] === 'yes' ) { ?>
	<script>
		jQuery(function(){
		jQuery(".post .entry-title").css("opacity",".0").animate({
				"opacity": "1"
				}, 2500);;
		});


	</script>
<?php
}
?>

<?php
if ( ( trim( $GLOBALS["stdata467"] ) === '' ) && ( isset( $GLOBALS["stdata108"] ) && $GLOBALS["stdata108"] === 'yes' ) ) { ?>
	<script>
		jQuery(function(){
		jQuery('.entry-content a[href^=http]')
			.not('[href*="'+location.hostname+'"]')
			.attr({target:"_blank"})
		;})
	</script>
<?php
}
?>

<script>
	(function (window, document, $, undefined) {
		'use strict';

		var SlideBox = (function () {
			/**
			 * @param $element
			 *
			 * @constructor
			 */
			function SlideBox($element) {
				this._$element = $element;
			}

			SlideBox.prototype.$content = function () {
				return this._$element.find('[data-st-slidebox-content]');
			};

			SlideBox.prototype.$toggle = function () {
				return this._$element.find('[data-st-slidebox-toggle]');
			};

			SlideBox.prototype.$icon = function () {
				return this._$element.find('[data-st-slidebox-icon]');
			};

			SlideBox.prototype.$text = function () {
				return this._$element.find('[data-st-slidebox-text]');
			};

			SlideBox.prototype.is_expanded = function () {
				return !!(this._$element.filter('[data-st-slidebox-expanded="true"]').length);
			};

			SlideBox.prototype.expand = function () {
				var self = this;

				this.$content().slideDown()
					.promise()
					.then(function () {
						var $icon = self.$icon();
						var $text = self.$text();

						$icon.removeClass($icon.attr('data-st-slidebox-icon-collapsed'))
							.addClass($icon.attr('data-st-slidebox-icon-expanded'))

						$text.text($text.attr('data-st-slidebox-text-expanded'))

						self._$element.removeClass('is-collapsed')
							.addClass('is-expanded');

						self._$element.attr('data-st-slidebox-expanded', 'true');
					});
			};

			SlideBox.prototype.collapse = function () {
				var self = this;

				this.$content().slideUp()
					.promise()
					.then(function () {
						var $icon = self.$icon();
						var $text = self.$text();

						$icon.removeClass($icon.attr('data-st-slidebox-icon-expanded'))
							.addClass($icon.attr('data-st-slidebox-icon-collapsed'))

						$text.text($text.attr('data-st-slidebox-text-collapsed'))

						self._$element.removeClass('is-expanded')
							.addClass('is-collapsed');

						self._$element.attr('data-st-slidebox-expanded', 'false');
					});
			};

			SlideBox.prototype.toggle = function () {
				if (this.is_expanded()) {
					this.collapse();
				} else {
					this.expand();
				}
			};

			SlideBox.prototype.add_event_listeners = function () {
				var self = this;

				this.$toggle().on('click', function (event) {
					self.toggle();
				});
			};

			SlideBox.prototype.initialize = function () {
				this.add_event_listeners();
			};

			return SlideBox;
		}());

		function on_ready() {
			var slideBoxes = [];

			$('[data-st-slidebox]').each(function () {
				var $element = $(this);
				var slideBox = new SlideBox($element);

				slideBoxes.push(slideBox);

				slideBox.initialize();
			});

			return slideBoxes;
		}

		$(on_ready);
	}(window, window.document, jQuery));
</script>

<?php
$st_entrytitle_setdesign = st_get_entrytitle_designsetting();
if( (trim( $st_entrytitle_setdesign ) !== '') && (($st_entrytitle_setdesign === 'dotdesign')||($st_entrytitle_setdesign === 'centerlinedesign')||($st_entrytitle_setdesign === 'gradient_underlinedesign')) ): ?>
	<script>
		jQuery(function(){
		jQuery('.entry-title').wrapInner('<span class="st-dash-design"></span>');
		})
	</script>
<?php endif;

$st_h2_setdesign = st_get_h2_designsetting();
if( (trim( $st_h2_setdesign ) !== '') && (($st_h2_setdesign === 'dotdesign')||($st_h2_setdesign === 'centerlinedesign')||($st_entrytitle_setdesign === 'gradient_underlinedesign')) ): ?>
	<script>
		jQuery(function(){
		jQuery('.post h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) , .h2modoki').wrapInner('<span class="st-dash-design"></span>');
		})
	</script>
<?php endif;

$st_h3_setdesign = st_get_h3_designsetting();
if( (trim( $st_h3_setdesign ) !== '') && (($st_h3_setdesign === 'dotdesign')||($st_h3_setdesign === 'centerlinedesign')||($st_entrytitle_setdesign === 'gradient_underlinedesign')) ): ?>
	<script>
		jQuery(function(){
		jQuery('.post h3:not(.rankh3):not(#reply-title):not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) , .h3modoki').wrapInner('<span class="st-dash-design"></span>');
		})
	</script>
<?php endif;

if ( isset($GLOBALS['stdata210']) && $GLOBALS['stdata210'] === 'yes' ) : ?>
<script>
jQuery(function(){
  jQuery('#st-tab-menu li').on('click', function(){
    if(jQuery(this).not('active')){
      jQuery(this).addClass('active').siblings('li').removeClass('active');
      var index = jQuery('#st-tab-menu li').index(this);
      jQuery('#st-tab-menu + #st-tab-box div').eq(index).addClass('active').siblings('div').removeClass('active');
    }
  });
});
</script>
<?php endif; ?>

<script>
	jQuery(function(){
		jQuery("#toc_container:not(:has(ul ul))").addClass("only-toc");
		jQuery(".st-ac-box ul:has(.cat-item)").each(function(){
			jQuery(this).addClass("st-ac-cat");
		});
	});
</script>

<?php
$st_h4_husen_shadow = get_theme_mod( 'st_h4_husen_shadow', '' );
$st_h5_husen_shadow = get_theme_mod( 'st_h5_husen_shadow', '' );
?>
<script>
	jQuery(function(){
		<?php if( $st_h4_husen_shadow ): ?>
			jQuery( '.post h4:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-matome):not(.rankh4):not(#reply-title):not(.point)' ).wrap( '<div class="st-h4husen-shadow"></div>' );
			jQuery( '.h4modoki' ).wrap( '<div class="st-h4husen-shadow"></div>' );
		<?php endif; ?>
		<?php if( $st_h5_husen_shadow ): ?>
			jQuery( '.post h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-matome):not(.rankh5):not(.point):not(.st-cardbox-t):not(.popular-t):not(.kanren-t):not(.popular-t):not(.post-card-title)' ).wrap( '<div class="st-h5husen-shadow"></div>' );
			jQuery( '.h5modoki' ).wrap( '<div class="st-h5husen-shadow"></div>' );
		<?php endif; ?>
		jQuery('.st-star').parent('.rankh4').css('padding-bottom','5px'); // スターがある場合のランキング見出し調整
	});
</script>

<?php if ( get_theme_mod( 'st_sticky_menu', '') === 'fixed' ): ?>
	<script>
		(function (window, document, $, undefined) {
			'use strict';

			var largeScreen = window.matchMedia('screen and (min-width: 960px)');

			function resetStickyPosition() {
				$('.st-sticky, thead th, thead td').css('top', '');
			}

			function updateStickyPosition() {
				var $headerBar      = $('#s-navi dl.acordion');
				var headerBarHeight = $headerBar.height();
				var scrollTop       = $(window).scrollTop();

				$('.st-sticky, thead th, thead td').each(function (index, element) {
					var $element = $(element);
					var tagName  = $element.prop('nodeName');
					var elementTop;

					if (tagName === 'TH' || tagName === 'TD') {
						if ($element.closest('.scroll-box').length) {
							return;
						}

						elementTop = $element.parent('tr').offset().top;
					} else {
						elementTop = $element.offset().top;
					}

					if (scrollTop + headerBarHeight > elementTop) {
						if (parseInt($element.css('top'), 10) !== headerBarHeight) {
							$element.css('top', headerBarHeight);
						}
					} else {
						$element.css('top', '');
					}
				});
			}

			function resetContentPosition() {
				$('header').css('padding-top', '');
				$('#headbox-bg').css('margin-top', '');
			}

			function fixContentPosition() {
				var $headerBar = $('#s-navi dl.acordion');
				var height     = $headerBar.height();

				$headerBar.css('padding-top', height);
				$headerBar.css('margin-top', -height);
			}

			function onScroll() {
				updateStickyPosition();
			}

			function onLargeScreen() {
				$(window).off('scroll', onScroll);

				resetContentPosition();
				resetStickyPosition();
			}

			function onSmallScreen() {
				$(window).on('scroll', onScroll);

				fixContentPosition();
				updateStickyPosition();
			}

			function initialize() {
				largeScreen.addListener(function (mql) {
					if (mql.matches) {
						onLargeScreen();
					} else {
						onSmallScreen();
					}
				});

				if (largeScreen.matches) {
					onLargeScreen();
				} else {
					onSmallScreen();
				}
			}

			$(function () {
				initialize();
			});
		}(window, window.document, jQuery));

		$(function() {
			$( window ).scroll( function () {
				if ( jQuery(this).scrollTop() > 100 ) {
					$('#s-navi dl.acordion').addClass('ac-shadow');
				} else {
					$('#s-navi dl.acordion').removeClass('ac-shadow');
				}
			});
		});
	</script>
<?php endif; ?>

<?php
$header_full_area = get_theme_mod('st_headerbg_image_area');
if ( ! $header_full_area && is_front_page() && ! is_paged() && get_theme_mod( 'st_header_height_vh' ) ): ?>
	<script>
		$(function() {
			$('.front-page:not(.paged) #header-full').append('<div id="st-header-link"><i class="st-fa st-svg-angle-down" aria-hidden="true"></i></div>').after('<div id="st-header-bottom-anchor"></div>');

			$("#st-header-link").click(function () {
			  var position = $('#st-header-bottom-anchor').offset().top;
			  var speed = 600;
			  $("html,body").animate({scrollTop:position},speed);
			});

			$(window).scroll(function () {
			  if($(window).scrollTop() > 50) {
				$('#st-header-link').fadeOut();
			  }
			  if($(window).scrollTop() < 49) {
				$('#st-header-link').fadeIn();
			  }
			});

		});
	</script>
<?php endif; ?>

<?php if ( trim( $GLOBALS["stdata567"] ) === '' ): // 簡易会話ふきだし ?>
	<script>
		$(function() {
			$('.is-style-st-paragraph-kaiwa').wrapInner('<span class="st-paragraph-kaiwa-text">');
		});
	</script>
<?php endif; ?>

<?php if ( trim( $GLOBALS["stdata568"] ) === '' ): // 簡易会話ふきだしB ?>
	<script>
		$(function() {
			$('.is-style-st-paragraph-kaiwa-b').wrapInner('<span class="st-paragraph-kaiwa-text">');
		});
	</script>
<?php endif; ?>

<script>
	/* 段落スタイルを調整 */
	$(function() {
		$( '[class^="is-style-st-paragraph-"],[class*=" is-style-st-paragraph-"]' ).wrapInner( '<span class="st-noflex"></span>' );
	});
</script>

