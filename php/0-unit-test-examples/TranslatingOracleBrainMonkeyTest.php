<?php # -*- coding: utf-8 -*-

use Brain\Monkey;

/**
 * Test case for the TranslatingOracle class, using Patchwork.
 */
class TranslatingOracleBrainMonkeyTest extends PHPUnit_Framework_TestCase {

	/**
	 * Sets up Brain Monkey.
	 *
	 * @return void
	 */
	public function setUp() {

		Monkey::setUpWP();
	}

	/**
	 * Tears down Brain Monkey.
	 *
	 * @return void
	 */
	public function tearDown() {

		Monkey::tearDownWP();
	}

	/**
	 * Tests if the expected answer is returned.
	 *
	 * @covers TranslatingOracle::answer()
	 *
	 * @return void
	 */
	public function test_return_expected_answer() {

		Monkey\Functions::expect( '__' )
			->once()
			->andReturn( '%d' );

		$this->assertRegExp(
			'/^\d+$/',
			( new TranslatingOracle() )->answer(),
			'answer() should return the expected answer.'
		);
	}
}
