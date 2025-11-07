<?php
namespace AestheticaSpace\Kits\Settings\Main;

use AestheticaSpace\Kits\Controls\Controls_Manager as CmsmastersControls;
use AestheticaSpace\Kits\Settings\Base\Settings_Tab_Base;

use Elementor\Controls_Manager;


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * Main settings.
 */
class Main extends Settings_Tab_Base {

	/**
	 * Get toggle name.
	 *
	 * Retrieve the toggle name.
	 *
	 * @return string Toggle name.
	 */
	public static function get_toggle_name() {
		return 'main';
	}

	/**
	 * Get title.
	 *
	 * Retrieve the toggle title.
	 */
	public function get_title() {
		return esc_html__( 'Main', 'aesthetica' );
	}

	/**
	 * Get control ID prefix.
	 *
	 * Retrieve the control ID prefix.
	 *
	 * @return string Control ID prefix.
	 */
	protected static function get_control_id_prefix() {
		$toggle_name = self::get_toggle_name();

		return parent::get_control_id_prefix() . "_{$toggle_name}";
	}

	/**
	 * Register toggle controls.
	 *
	 * Registers the controls of the kit settings tab toggle.
	 */
	protected function register_toggle_controls() {
		$this->add_control(
			'layout',
			array(
				'label' => esc_html__( 'Layout', 'aesthetica' ),
				'label_block' => false,
				'description' => esc_html__( 'This setting will be applied after save and reload.', 'aesthetica' ),
				'type' => CmsmastersControls::CHOOSE_TEXT,
				'options' => array(
					'l-sidebar' => array(
						'title' => esc_html__( 'Left', 'aesthetica' ),
						'description' => esc_html__( 'Left Sidebar', 'aesthetica' ),
					),
					'fullwidth' => array(
						'title' => esc_html__( 'Full', 'aesthetica' ),
						'description' => esc_html__( 'Full Width', 'aesthetica' ),
					),
					'r-sidebar' => array(
						'title' => esc_html__( 'Right', 'aesthetica' ),
						'description' => esc_html__( 'Right Sidebar', 'aesthetica' ),
					),
				),
				'default' => $this->get_default_setting(
					$this->get_control_name_parameter( '', 'layout' ),
					'r-sidebar'
				),
				'toggle' => false,
			)
		);

		$this->add_control(
			'content_sidebar_heading_control',
			array(
				'label' => esc_html__( 'Content', 'aesthetica' ),
				'type' => Controls_Manager::HEADING,
			)
		);

		$this->add_responsive_control(
			'content_sidebar_width',
			array(
				'label' => esc_html__( 'Width', 'aesthetica' ),
				'description' => esc_html__( 'This value will be used for page layouts with sidebar.', 'aesthetica' ) . '<br />' . esc_html__( 'The width of the sidebar will be equal "100% - this value".', 'aesthetica' ) . '<br />' . esc_html__( 'For example: 74% - content width, then sidebar width will be 26%.', 'aesthetica' ) . '<br />' . esc_html__( 'Default value is 74%.', 'aesthetica' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => array( '%' ),
				'range' => array(
					'%' => array(
						'min' => 10,
						'max' => 100,
					),
				),
				'selectors' => array(
					':root' => '--' . $this->get_control_prefix_parameter( '', 'content_sidebar_width' ) . ': {{SIZE}}%;',
				),
			)
		);

		$this->add_control(
			'sidebar_heading_control',
			array(
				'label' => esc_html__( 'Sidebar', 'aesthetica' ),
				'type' => Controls_Manager::HEADING,
			)
		);

		$this->add_responsive_control(
			'sidebar_gap',
			array(
				'label' => esc_html__( 'Gap', 'aesthetica' ),
				'description' => esc_html__( 'Gap between content and sidebar.', 'aesthetica' ) . '<br />' . esc_html__( 'Default value is 40px.', 'aesthetica' ) . '<br />' . esc_html__( 'Note: This gap reduces the width of the sidebar.', 'aesthetica' ),
				'type' => Controls_Manager::SLIDER,
				'range' => array(
					'px' => array(
						'min' => 0,
						'max' => 100,
					),
					'%' => array(
						'min' => 0,
						'max' => 10,
					),
					'vw' => array(
						'min' => 0,
						'max' => 10,
					),
				),
				'size_units' => array(
					'px',
					'%',
					'vw',
				),
				'selectors' => array(
					':root' => '--' . $this->get_control_prefix_parameter( '', 'sidebar_gap' ) . ': {{SIZE}}{{UNIT}};',
				),
			)
		);

		$this->add_control(
			'sidebar_divider_type',
			array(
				'label' => _x( 'Divider Type', 'Divider Control', 'aesthetica' ),
				'type' => Controls_Manager::SELECT,
				'options' => array(
					'' => _x( 'Default', 'Divider Control', 'aesthetica' ),
					'none' => _x( 'None', 'Divider Control', 'aesthetica' ),
					'solid' => _x( 'Solid', 'Divider Control', 'aesthetica' ),
					'double' => _x( 'Double', 'Divider Control', 'aesthetica' ),
					'dotted' => _x( 'Dotted', 'Divider Control', 'aesthetica' ),
					'dashed' => _x( 'Dashed', 'Divider Control', 'aesthetica' ),
					'groove' => _x( 'Groove', 'Divider Control', 'aesthetica' ),
				),
				'selectors' => array(
					':root' => '--' . $this->get_control_prefix_parameter( '', 'sidebar_divider_type' ) . ': {{VALUE}};',
				),
			)
		);

		$this->add_responsive_control(
			'sidebar_divider_width',
			array(
				'label' => _x( 'Width', 'Divider Control', 'aesthetica' ),
				'type' => Controls_Manager::SLIDER,
				'range' => array(
					'px' => array(
						'min' => 0,
						'max' => 50,
					),
				),
				'size_units' => array(
					'px',
				),
				'selectors' => array(
					':root' => '--' . $this->get_control_prefix_parameter( '', 'sidebar_divider_width' ) . ': {{SIZE}}{{UNIT}};',
				),
				'condition' => array(
					$this->get_control_id_parameter( '', 'sidebar_divider_type!' ) => array(
						'',
						'none',
					),
				),
			)
		);

		$this->add_control(
			'sidebar_divider_color',
			array(
				'label' => _x( 'Color', 'Divider Control', 'aesthetica' ),
				'type' => Controls_Manager::COLOR,
				'dynamic' => array(),
				'selectors' => array(
					':root' => '--' . $this->get_control_prefix_parameter( '', 'sidebar_divider_color' ) . ': {{VALUE}};',
				),
				'condition' => array(
					$this->get_control_id_parameter( '', 'sidebar_divider_type!' ) => 'none',
				),
			)
		);

		$this->add_controls_group( 'container', self::CONTROLS_CONTAINER );

		$this->add_controls_group( 'content', self::CONTROLS_CONTENT, array(
			'elementor_padding' => true,
		) );

		$this->add_control(
			'apply_settings',
			array(
				'label_block' => true,
				'show_label' => false,
				'type' => Controls_Manager::BUTTON,
				'text' => esc_html__( 'Save & Reload', 'aesthetica' ),
				'event' => 'cmsmasters:theme_settings:apply_settings',
				'separator' => 'before',
			)
		);
	}

}
