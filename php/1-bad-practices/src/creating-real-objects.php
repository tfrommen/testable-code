<?php # -*- coding: utf-8 -*-

class Renderer {

	private $formatter_factory;

	public function __construct( FormatterFactory $formatter_factory ) {

		$this->formatter_factory = $formatter_factory;
	}

	public function render_formatted_data( $data, $options ) {

		$formatter = $this->formatter_factory->create( $options );
		echo $formatter->format( $data );
	}
}
