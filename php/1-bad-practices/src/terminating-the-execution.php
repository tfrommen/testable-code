<?php # -*- coding: utf-8 -*-

class Checker {

	public function check_data( $data ) {

		if ( ! $data ) {
			$this->call_exit();
		}

		// ...
	}

	protected function call_exit() {

		exit();
	}
}
