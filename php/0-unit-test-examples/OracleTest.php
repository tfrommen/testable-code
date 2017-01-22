<?php # -*- coding: utf-8 -*-

/**
 * Test case for the Oracle class.
 */
class OracleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests if the expected answer is returned.
	 *
	 * @covers Oracle::answer()
	 *
	 * @return void
	 */
	public function test_return_expected_answer() {

		$this->assertSame(
			'42',
			( new Oracle() )->answer(),
			'answer() should return the expected answer.'
		);
	}
}
