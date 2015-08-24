<?php
namespace Marnell;

class Theme {
	static $instance;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}
		return static::$instance;
	}

	protected function __construct() {
		add_action( 'template_redirect', [ $this, 'template_redirect' ] );
		add_filter( 'body_class', [ $this, 'body_class' ] );
	}

	public function body_class( $classes ) {
		return $classes;
	}
}