<?php # -*- coding: utf-8 -*-

use Brain\Monkey;

require_once __DIR__ . '/src/HookOracle.php';

/**
 * Test case for the HookOracle class, using Brain Monkey.
 */
class HookOracleBrainMonkeyTest extends PHPUnit_Framework_TestCase {

	/**
	 * Sets up Brain Monkey beforr testing WordPress-related code.
	 *
	 * @return void
	 */
	public function setUp() {

		Monkey::setUpWP();
	}

	/**
	 * Tears down Brain Monkey after having tested WordPress-related code.
	 *
	 * @return void
	 */
	public function tearDown() {

		Monkey::tearDownWP();
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

		$this->assertSame( '42', $testee->get_answer(), 'get_answer() should return the expected answer.' );
		$this->assertSame( 1, did_action( 'give_answer' ) );
		$this->assertTrue( Monkey::filters()->applied( 'the_answer' ) > 0 );
	}
}
