<?php # -*- coding: utf-8 -*-

class Renderer {

	public function render_if_okay( $data ) {

		if ( ThirdPartyChecker::is_okay( $data ) ) {
			echo $data;
		}
	}
}
