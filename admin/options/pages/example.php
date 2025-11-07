<?php
namespace AestheticaSpace\Admin\Options\Pages;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * Example handler class is responsible for different methods on example theme options page.
 */
class Example extends Base\Base_Page {

	/**
	 * Get page title.
	 */
	public static function get_page_title() {
		return esc_attr__( 'Theme Example Options', 'aesthetica' );
	}

	/**
	 * Get menu title.
	 */
	public static function get_menu_title() {
		return esc_attr__( 'Example', 'aesthetica' );
	}

	/**
	 * Default section.
	 */
	public $default_section = 'main';

	/**
	 * Get sections.
	 */
	public function get_sections() {
		return array(
			'main' => array(
				'label' => esc_attr__( 'Main', 'aesthetica' ),
				'title' => esc_attr__( 'Main Options', 'aesthetica' ),
			),
			'second' => array(
				'label' => esc_attr__( 'Second', 'aesthetica' ),
				'title' => esc_html__( 'Second Options', 'aesthetica' ),
			),
			'third' => array(
				'label' => esc_attr__( 'Third', 'aesthetica' ),
				'title' => esc_html__( 'Third Options', 'aesthetica' ),
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
				$fields['test_arr_field|first'] = array(
					'title' => esc_html__( 'Arr Text Field First', 'aesthetica' ),
					'desc' => 'descriptions',
					'type' => 'text',
					'subtype' => 'email',
					'std' => '',
				);

				$fields['test_arr_field|second'] = array(
					'title' => esc_html__( 'Arr Text Field Second', 'aesthetica' ),
					'desc' => 'descriptions',
					'type' => 'text',
					'std' => '',
				);

				$fields['test_text_field'] = array(
					'title' => esc_html__( 'Test Text Field', 'aesthetica' ),
					'desc' => 'descriptions',
					'type' => 'text',
					'std' => '',
					'class' => 'nohtml',
				);

				$fields['test_second_field'] = array(
					'title' => esc_html__( 'Test Second Field', 'aesthetica' ),
					'desc' => 'descriptions',
					'type' => 'text',
					'subtype' => 'email',
					'std' => '',
					'class' => 'nohtml',
				);

				break;
			case 'second':
				$fields['test_third_field'] = array(
					'title' => esc_html__( 'Test third Field', 'aesthetica' ),
					'desc' => 'descriptions',
					'type' => 'text',
					'std' => '',
					'class' => 'nohtml',
				);

				break;
		}

		return $fields;
	}

}
