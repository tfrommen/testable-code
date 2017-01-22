<?php # -*- coding: utf-8 -*-

/**
 * Oracle answering with a random number, in the current language.
 */
class TranslatingOracle {

	/**
	 * Returns a random number, in the current language.
	 *
	 * @return string An answer.
	 */
	public function answer() {

		return sprintf(
			__( 'The answer is: %d.', 'some-textdomain-here' ),
			mt_rand()
		);
	}
}
