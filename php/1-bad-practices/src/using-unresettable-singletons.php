<?php # -*- coding: utf-8 -*-

class Singleton {

	private static $instance;

	// protected/private __construct() and __clone(), and other code...

	public static function get_instance() {

		if ( ! self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public static function reset() {

		self::$instance = null;
	}
}
