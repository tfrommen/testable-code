<?php # -*- coding: utf-8 -*-

class Processor {

	public function process( $data ) {

		if ( ! $this->checker->check( $data ) ) {
			return false;
		}

		$data = $this->prepare( $data );

		// 42 lines full of data processing...

		$this->post_processor->process( $data );

		return true;
	}
}
