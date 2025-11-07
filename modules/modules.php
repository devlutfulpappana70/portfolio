<?php
namespace AestheticaSpace\Modules;

use AestheticaSpace\Modules\CSS_Vars;
use AestheticaSpace\Modules\Gutenberg;
use AestheticaSpace\Modules\Swiper;
use AestheticaSpace\Modules\Page_Preloader;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme modules.
 *
 * Main class for theme modules.
 */
class Modules {

	/**
	 * Theme modules constructor.
	 *
	 * Run modules for theme.
	 */
	public function __construct() {
		new CSS_Vars();

		new Swiper();

		new Gutenberg();

		new Page_Preloader();
	}

}
