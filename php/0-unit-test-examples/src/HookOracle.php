<?php # -*- coding: utf-8 -*-

/**
 * Oracle knowing the answer to life, universe and everything, and knows how to use action and filter hooks.
 */
class HookOracle {

	/**
	 * Returns the answer to life, universe and everything.
	 *
	 * @return string
	 */
	public function get_answer() {

		/**
		 * Fires right before giving the answer to life, universe and everything.
		 */
		do_action( 'give_answer' );

		/**
		 * Filters the answer to life, universe and everything.
		 *
		 * @param string $answer The answer to life, universe and everything.
		 */
		return (string) apply_filters( 'the_answer', '42' );
	}
}
