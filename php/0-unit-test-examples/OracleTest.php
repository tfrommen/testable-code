<?php # -*- coding: utf-8 -*-

require_once __DIR__ . '/src/Oracle.php';

/**
 * Test case for the Oracle class.
 */
class OracleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test for the get_answer() method.
	 *
	 * @covers Oracle::get_answer()
	 *
	 * @return void
	 */
	public function test_get_answer() {

		$testee = new Oracle();

		$this->assertSame( '42', $testee->get_answer(), 'get_answer() should return the expected answer.' );
	}
}
