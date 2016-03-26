<?php # -*- coding: utf-8 -*-

class Renderer {

	public function render_formatted_data( $data ) {

		$formatter = new Formatter();
		echo $formatter->format( $data );
	}
}
