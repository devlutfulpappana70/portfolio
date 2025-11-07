<?php
namespace AestheticaSpace\Admin\Options\Pages;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * Image_Sizes handler class is responsible for different methods on image-sizes theme options page.
 */
class Image_Sizes extends Base\Base_Page {

	/**
	 * Get page title.
	 */
	public static function get_page_title() {
		return esc_attr__( 'Image Sizes', 'aesthetica' );
	}

	/**
	 * Get menu title.
	 */
	public static function get_menu_title() {
		return esc_attr__( 'Image Sizes', 'aesthetica' );
	}

	/**
	 * Get sections.
	 */
	public function get_sections() {
		return array(
			'main' => array(
				'label' => '',
				'title' => '',
			),
		);
	}

	/**
	 * Get fields.
	 *
	 * @param string $section Current section.
	 *
	 * @return array Fields.
	 */
	public function get_fields( $section = '' ) {
		$fields = array();

		switch ( $section ) {
			case 'main':
				$image_sizes_items = array(
					'width' => array(
						'label' => esc_html__( 'Width', 'aesthetica' ),
						'type' => 'number',
						'subtype' => 'email',
						'not_empty' => true,
						'min' => '1',
						'max' => '9999',
						'step' => '1',
						'postfix' => 'px',
					),
					'height' => array(
						'label' => esc_html__( 'Height', 'aesthetica' ),
						'type' => 'number',
						'not_empty' => true,
						'min' => '1',
						'max' => '9999',
						'step' => '1',
						'postfix' => 'px',
					),
					'crop' => array(
						'label' => esc_html__( 'Crop', 'aesthetica' ),
						'type' => 'checkbox',
					),
				);

				$fields['image_sizes|archive'] = array(
					'title' => esc_html__( 'Archive Image Size', 'aesthetica' ),
					'desc' => esc_html__( 'Used for the featured image in blog/archive template.', 'aesthetica' ),
					'type' => 'constructor',
					'items' => $image_sizes_items,
				);

				$fields['image_sizes|search'] = array(
					'title' => esc_html__( 'Search Image Size', 'aesthetica' ),
					'desc' => esc_html__( 'Used for the featured image in search template.', 'aesthetica' ),
					'type' => 'constructor',
					'items' => $image_sizes_items,
				);

				$fields['image_sizes|single'] = array(
					'title' => esc_html__( 'Single Image Size', 'aesthetica' ),
					'desc' => esc_html__( 'Used for the featured image in single post template.', 'aesthetica' ),
					'type' => 'constructor',
					'items' => $image_sizes_items,
				);

				$fields['image_sizes|more-posts'] = array(
					'title' => esc_html__( 'More Posts Image Size', 'aesthetica' ),
					'desc' => esc_html__( 'Used for the featured image in more posts block.', 'aesthetica' ),
					'type' => 'constructor',
					'items' => $image_sizes_items,
				);

				break;
		}

		return $fields;
	}

}
