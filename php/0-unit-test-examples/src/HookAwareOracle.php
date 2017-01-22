<?php # -*- coding: utf-8 -*-

/**
 * Oracle knowing the answer to life, universe and everything, and knowing WordPress action and filter hooks.
 */
class HookAwareOracle {

	/**
	 * Action name.
	 *
	 * @var string
	 */
	const ACTION = 'give_answer';

	/**
	 * Filter name.
	 *
	 * @var string
	 */
	const FILTER = 'the_answer';

	/**
	 * Returns the answer to life, universe and everything.
	 *
	 * @return string The answer to life, universe and everything.
	 */
	public function answer() {

		/**
		 * Fires right before giving the answer.
		 */
		do_action( self::ACTION );

		/**
		 * Filters the answer.
		 *
		 * @param string $answer The answer.
		 */
		return (string) apply_filters( self::FILTER, '42' );
	}
}
