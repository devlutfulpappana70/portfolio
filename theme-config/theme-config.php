<?php
namespace AestheticaSpace\ThemeConfig;

use AestheticaSpace\Core\Utils\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme Config.
 *
 * Main class for theme config.
 */
class Theme_Config {

	/**
	 * Product key.
	 */
	const PRODUCT_KEY = '61657374686574696361';

	/**
	 * Import type.
	 *
	 * demos - import content and all data from demo; apply all data from demo;
	 * kit - import content and all data from demo; apply only kit from demo;
	 * only_kit - import content and all data from main demo, and kit from current demo; apply only kit from demo;
	 */
	const IMPORT_TYPE = 'kit';

	/**
	 * Marketplace.
	 *
	 * themeforest - theme for themeforest
	 * envato-elements - theme for envato-elements
	 * templatemonster - theme for templatemonster
	 */
	const MARKETPLACE = 'envato-elements';

	/**
	 * Major versions.
	 */
	const MAJOR_VERSIONS = array();

	/**
	 * Default Colors.
	 */
	const PRIMARY_COLOR_DEFAULT = '#1F385F';
	const SECONDARY_COLOR_DEFAULT = '#121B24';
	const TEXT_COLOR_DEFAULT = '#6B6668';
	const ACCENT_COLOR_DEFAULT = '#F3D6BE';
	const TERTIARY_COLOR_DEFAULT = '#B3ACA6';
	const BACKGROUND_COLOR_DEFAULT = '#FFFFFF';
	const ALTERNATE_COLOR_DEFAULT = '#F6F2E9';
	const BORDER_COLOR_DEFAULT = '#EAE6E7';

	/**
	 * Default Typography.
	 */
	const PRIMARY_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const PRIMARY_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '300';

	const SECONDARY_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const SECONDARY_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = 'normal';

	const TEXT_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const TEXT_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '17', 'unit' => 'px' );
	const TEXT_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = 'normal';
	const TEXT_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'none';
	const TEXT_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const TEXT_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const TEXT_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.65', 'unit' => 'em' );
	const TEXT_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const TEXT_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const ACCENT_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const ACCENT_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '14', 'unit' => 'px' );
	const ACCENT_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '500';
	const ACCENT_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'uppercase';
	const ACCENT_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const ACCENT_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const ACCENT_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.55', 'unit' => 'em' );
	const ACCENT_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '2', 'unit' => 'px' );
	const ACCENT_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const TERTIARY_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const TERTIARY_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '15', 'unit' => 'px' );
	const TERTIARY_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = 'normal';
	const TERTIARY_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'none';
	const TERTIARY_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const TERTIARY_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const TERTIARY_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.6', 'unit' => 'em' );
	const TERTIARY_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const TERTIARY_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const META_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const META_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '15', 'unit' => 'px' );
	const META_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '500';
	const META_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'none';
	const META_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const META_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const META_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.6', 'unit' => 'em' );
	const META_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const META_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const TAXONOMY_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const TAXONOMY_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '13', 'unit' => 'px' );
	const TAXONOMY_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '500';
	const TAXONOMY_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'uppercase';
	const TAXONOMY_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const TAXONOMY_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const TAXONOMY_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.55', 'unit' => 'em' );
	const TAXONOMY_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '2', 'unit' => 'px' );
	const TAXONOMY_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const SMALL_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const SMALL_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '16', 'unit' => 'px' );
	const SMALL_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = 'normal';
	const SMALL_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'none';
	const SMALL_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const SMALL_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const SMALL_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.65', 'unit' => 'em' );
	const SMALL_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const SMALL_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const H1_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const H1_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '66', 'unit' => 'px' );
	const H1_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '300';
	const H1_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'uppercase';
	const H1_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const H1_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const H1_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.1', 'unit' => 'em' );
	const H1_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const H1_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const H2_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const H2_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '54', 'unit' => 'px' );
	const H2_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '300';
	const H2_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'uppercase';
	const H2_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const H2_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const H2_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.15', 'unit' => 'em' );
	const H2_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const H2_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const H3_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const H3_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '42', 'unit' => 'px' );
	const H3_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '300';
	const H3_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'uppercase';
	const H3_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const H3_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const H3_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.2', 'unit' => 'em' );
	const H3_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const H3_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const H4_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const H4_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '28', 'unit' => 'px' );
	const H4_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = 'normal';
	const H4_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'none';
	const H4_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const H4_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const H4_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.3', 'unit' => 'em' );
	const H4_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const H4_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const H5_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const H5_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '21', 'unit' => 'px' );
	const H5_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = 'normal';
	const H5_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'none';
	const H5_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const H5_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const H5_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.35', 'unit' => 'em' );
	const H5_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const H5_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const H6_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const H6_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '14', 'unit' => 'px' );
	const H6_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = 'normal';
	const H6_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'uppercase';
	const H6_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const H6_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const H6_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.55', 'unit' => 'em' );
	const H6_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '2', 'unit' => 'px' );
	const H6_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const BUTTON_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const BUTTON_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '13', 'unit' => 'px' );
	const BUTTON_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '600';
	const BUTTON_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'uppercase';
	const BUTTON_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'normal';
	const BUTTON_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const BUTTON_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.55', 'unit' => 'em' );
	const BUTTON_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '2', 'unit' => 'px' );
	const BUTTON_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_FONT_FAMILY = 'Figtree';
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_FONT_SIZE = array( 'size' => '24', 'unit' => 'px' );
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_FONT_WEIGHT = '300';
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_TEXT_TRANSFORM = 'none';
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_FONT_STYLE = 'italic';
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_TEXT_DECORATION = 'none';
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_LINE_HEIGHT = array( 'size' => '1.6', 'unit' => 'em' );
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_LETTER_SPACING = array( 'size' => '0', 'unit' => 'px' );
	const BLOCKQUOTE_TYPOGRAPHY_DEFAULT_WORD_SPACING = array( 'size' => '0', 'unit' => 'px' );

	protected $fonts = array(
		'Figtree' => array(
			'300',
			'300italic',
			'400',
			'400italic',
			'500',
			'500italic',
			'600',
			'600italic',
		),
	);

	/**
	 * Theme_Config constructor.
	 */
	public function __construct() {
		add_action( 'cmsmasters_first_setup', array( $this, 'first_setup_actions' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_default_assets' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_default_assets' ) );

		add_filter( 'cmsmasters_theme_get_post_meta_author_prefix', array( $this, 'modify_author_prefix' ) );
	}

	/**
	 * Actions on first setup.
	 */
	public function first_setup_actions() {
		$cpt_support = get_option( 'elementor_cpt_support', array( 'post', 'page', 'e-landing-page' ) );

		if ( is_array( $cpt_support ) ) {
			if ( ! in_array( 'product', $cpt_support ) ) {
				$cpt_support[] = 'product';
			}

			if ( ! in_array( 'cmsms_doctor', $cpt_support ) ) {
				$cpt_support[] = 'cmsms_doctor';
			}

			if ( ! in_array( 'services', $cpt_support ) ) {
				$cpt_support[] = 'services';
			}
		}

		update_option( 'elementor_cpt_support', $cpt_support );
	}

	/**
	 * Enqueue default assets.
	 */
	public function enqueue_default_assets() {
		if ( ! did_action( 'elementor/loaded' ) ) {
			wp_enqueue_style(
				'aesthetica-default-fonts',
				$this->get_default_fonts(),
				array(),
				'1.0.0',
				'screen'
			);
		}
		
		if ( did_action( 'elementor/loaded' ) && ! class_exists( 'Cmsmasters_Elementor_Addon' ) ) {
			foreach ( $this->fonts as $font => $weights ) {
				$font = str_replace( ' ', '-', strtolower( $font ) ) . '-local';

				wp_enqueue_style(
					'aesthetica-font-' . $font,
					get_template_directory_uri() . '/theme-config/assets/fonts/' . $font . '/stylesheet.css',
					array(),
					'1.0.0',
					'screen'
				);
			}
		}

		if ( ! did_action( 'elementor/loaded' ) || ! class_exists( 'Cmsmasters_Elementor_Addon' ) ) {
			$default_styles = '.wp-block-widget-area h2.wp-block-heading,
			.widget h2 {
				font-family: var(--cmsmasters-h5-font-family);
				font-weight: var(--cmsmasters-h5-font-weight);
				font-style: var(--cmsmasters-h5-font-style);
				text-transform: var(--cmsmasters-h5-text-transform);
				text-decoration: var(--cmsmasters-h5-text-decoration);
				font-size: var(--cmsmasters-h5-font-size);
				line-height: var(--cmsmasters-h5-line-height);
				letter-spacing: var(--cmsmasters-h5-letter-spacing);
				word-spacing: var(--cmsmasters-h5-word-spacing);
			}

			.wp-block-button .wp-block-button__link {
				border-radius: 50px;
			}
 
			@media only screen and (max-width: 1024px) {
				:root {
					--e-global-typography-h1-font-size: 56px;
					--e-global-typography-h2-font-size: 48px;
					--e-global-typography-h3-font-size: 36px;
					--e-global-typography-h4-font-size: 26px;
					--e-global-typography-h5-font-size: 19px;
					--e-global-typography-h6-font-size: 13px;
					--e-global-typography-text-font-size: 16px;
					--e-global-typography-small-font-size: 15px;
					--e-global-typography-meta-font-size: 14px;
					--e-global-typography-taxonomy-font-size: 12px;
					--e-global-typography-button-font-size: 12px;
					--e-global-typography-accent-font-size: 13px;
					--e-global-typography-tertiary-font-size: 14px;
					--e-global-typography-blockquote-font-size: 22px;
				}

				body {
					--cmsmasters-archive-media-box-margin-right: 40px !important;
					--cmsmasters-archive-pagination-box-margin-top: 50px !important;
					--cmsmasters-archive-post-gap: 50px !important;
					--cmsmasters-heading-height: 320px !important;
					--cmsmasters-heading-content-padding-top: 80px !important;
					--cmsmasters-heading-content-padding-bottom: 100px !important;
					--cmsmasters-main-content-padding-top: 80px !important;
					--cmsmasters-main-content-padding-bottom: 80px !important;
					--cmsmasters-search-media-box-margin-right: 40px !important;
					--cmsmasters-search-pagination-box-margin-top: 50px !important;
					--cmsmasters-search-post-gap: 50px !important;
					--cmsmasters-single-author-box-padding-top: 50px !important;
					--cmsmasters-single-author-box-padding-right: 50px !important;
					--cmsmasters-single-author-box-padding-bottom: 50px !important;
					--cmsmasters-single-author-box-padding-left: 50px !important;
					--cmsmasters-single-author-box-margin-top: 50px !important;
					--cmsmasters-single-comments-box-margin-top: 80px !important;
					--cmsmasters-single-comments-items-hor-gap: 30px !important;
					--cmsmasters-single-media-box-margin-top: 50px !important;
					--cmsmasters-single-media-box-margin-bottom: 80px !important;
					--cmsmasters-single-meta-second-box-margin-bottom: 50px !important;
					--cmsmasters-single-nav-box-margin-top: 80px !important;
				}
			}

			@media only screen and (max-width: 767px) {
				:root {
					--e-global-typography-h1-font-size: 40px;
					--e-global-typography-h2-font-size: 32px;
					--e-global-typography-h3-font-size: 26px;
					--e-global-typography-h4-font-size: 22px;
					--e-global-typography-h5-font-size: 18px;
					--e-global-typography-h6-font-size: 12px;
					--e-global-typography-text-font-size: 15px;
					--e-global-typography-small-font-size: 14px;
					--e-global-typography-meta-font-size: 13px;
					--e-global-typography-taxonomy-font-size: 11px;
					--e-global-typography-button-font-size: 11px;
					--e-global-typography-accent-font-size: 12px;
					--e-global-typography-tertiary-font-size: 13px;
					--e-global-typography-blockquote-font-size: 20px;
				}

				body {
					--cmsmasters-archive-compact-media-width: 100%;
					--cmsmasters-archive-media-box-margin-right: 0 !important;
					--cmsmasters-archive-media-box-margin-bottom: 40px;
					--cmsmasters-search-compact-media-width: 100%;
					--cmsmasters-search-media-box-margin-right: 0 !important;
					--cmsmasters-search-media-box-margin-bottom: 40px;
					--cmsmasters-archive-pagination-box-margin-top: 40px !important;
					--cmsmasters-archive-post-gap: 40px !important;
					--cmsmasters-footer-content-padding-top: 30px !important;
					--cmsmasters-footer-content-padding-bottom: 30px !important;
					--cmsmasters-heading-height: 320px !important;
					--cmsmasters-heading-content-padding-top: 60px !important;
					--cmsmasters-heading-content-padding-bottom: 80px !important;
					--cmsmasters-main-content-padding-top: 40px !important;
					--cmsmasters-main-content-padding-bottom: 60px !important;
					--cmsmasters-search-pagination-box-margin-top: 40px !important;
					--cmsmasters-search-post-gap: 40px !important;
					--cmsmasters-sidebar-widgets-box-margin-bottom: 40px !important;
					--cmsmasters-single-author-box-padding-top: 40px !important;
					--cmsmasters-single-author-box-padding-right: 40px !important;
					--cmsmasters-single-author-box-padding-bottom: 40px !important;
					--cmsmasters-single-author-box-padding-left: 40px !important;
					--cmsmasters-single-author-box-margin-top: 40px !important;
					--cmsmasters-single-comments-box-margin-top: 60px !important;
					--cmsmasters-single-comments-items-hor-gap: 20px !important;
					--cmsmasters-single-media-box-margin-top: 30px !important;
					--cmsmasters-single-media-box-margin-bottom: 40px !important;
					--cmsmasters-single-meta-second-box-margin-bottom: 30px !important;
					--cmsmasters-single-nav-box-margin-top: 60px !important;
					--cmsmasters-single-title-box-margin-bottom: 20px !important;
				}
			}';

			wp_add_inline_style( 'aesthetica-root-style', $default_styles );
		}
	}

	/**
	 * Get default fonts.
	 */
	public function get_default_fonts() {
		$families = array();

		foreach ( $this->fonts as $font => $weights ) {
			$families[] = str_replace( ' ', '+', $font ) . '%3A' . implode( '%2C', $weights );
		}

		return 'https://fonts.googleapis.com/css?family=' . implode( '%7C', $families );
	}

	public function modify_author_prefix( $prefix ) {
		$prefix = 'by ';
	
		return $prefix;
	}

}
