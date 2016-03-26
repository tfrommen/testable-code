<?php # -*- coding: utf-8 -*-

require_once __DIR__ . '/src/HookOracle.php';

/**
 * Test case for the HookOracle class, using WP_Mock.
 */
class HookOracleWP_MockTest extends PHPUnit_Framework_TestCase {

	/**
	 * Sets up WP_Mock.
	 *
	 * @return void
	 */
	public function setUp() {

		WP_Mock::setUp();
	}

	/**
	 * Tears down WP_Mock.
	 *
	 * @return void
	 */
	public function tearDown() {

		WP_Mock::tearDown();
	}

	/**
	 * Test for the get_answer() method.
	 *
	 * @covers HookOracle::get_answer()
	 *
	 * @return void
	 */
	public function test_get_answer() {

		$testee = new HookOracle();

		WP_Mock::expectAction( 'give_answer' );
		WP_Mock::onFilter( 'the_answer' )
			->with( '42' )
			->reply( '4815162342' );
		$this->assertSame( '4815162342', $testee->get_answer(), 'get_answer() should return the expected answer.' );
	}
}
