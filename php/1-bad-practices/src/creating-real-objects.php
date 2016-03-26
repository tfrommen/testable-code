<?php # -*- coding: utf-8 -*-

class Renderer {

	private $formatter;

	public function __construct( Formatter $formatter ) {

		$this->formatter = $formatter;
	}

	public function render_formatted_data( $data ) {

		echo $this->formatter->format( $data );
	}
}
