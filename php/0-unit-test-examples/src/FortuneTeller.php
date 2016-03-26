<?php # -*- coding: utf-8 -*-

/**
 * Fortune teller answering what an oracle friend of hers answers, or nothing.
 */
class FortuneTeller {

	/**
	 * @var Oracle
	 */
	private $oracle;

	/**
	 * Constructor. Sets up the properties.
	 *
	 * @param Oracle $oracle An oracle friend.
	 */
	public function __construct( Oracle $oracle ) {

		$this->oracle = $oracle;
	}

	/**
	 * Returns the answer to life, universe and everything - in case you spend enough money, that is.
	 *
	 * @param int $money Optional. Money spent for an answer. Defaults to 0.
	 *
	 * @return string
	 */
	public function get_answer( $money = 0 ) {

		if ( (int) $money < 5 ) {
			return '';
		}

		return $this->oracle->get_answer();
	}
}
