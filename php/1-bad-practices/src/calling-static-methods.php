<?php # -*- coding: utf-8 -*-

class Checker {

	public function is_okay( $data ) {

		return ThirdPartyChecker::is_okay( $data );
	}
}

class Renderer {

	private $checker;

	public function __construct( Checker $checker ) {

		$this->checker = $checker;
	}

	public function render_if_okay( $data ) {

		if ( $this->checker->is_okay( $data ) ) {
			echo $data;
		}
	}
}
