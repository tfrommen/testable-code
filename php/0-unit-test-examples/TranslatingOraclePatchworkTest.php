<?php # -*- coding: utf-8 -*-

/**
 * Test case for the TranslatingOracle class, using Patchwork.
 */
class TranslatingOraclePatchworkTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tears down Patchwork.
	 *
	 * @return void
	 */
	public function tearDown() {

		Patchwork\undoAll();
	}

	/**
	 * Tests if the expected answer is returned.
	 *
	 * @covers TranslatingOracle::answer()
	 *
	 * @return void
	 */
	public function test_return_expected_answer() {

		Patchwork\replace( '__', function () {

			return '%d';
		} );

		$this->assertRegExp(
			'/^\d+$/',
			( new TranslatingOracle() )->answer(),
			'answer() should return the expected answer.'
		);
	}
}
