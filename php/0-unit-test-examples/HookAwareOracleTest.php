<?php # -*- coding: utf-8 -*-

use Brain\Monkey;
use Brain\Monkey\WP\Filters;

/**
 * Test case for the HookAwareOracle class.
 */
class HookAwareOracleTest extends PHPUnit_Framework_TestCase {

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
	 * Tests if the unfiltered answer is returned.
	 *
	 * @covers HookAwareOracle::answer()
	 *
	 * @return void
	 */
	public function test_return_unfiltered_answer() {

		$this->assertSame(
			'42',
			( new HookAwareOracle() )->answer(),
			'answer() should return the unfiltered answer.'
		);

		$this->assertSame( 1, did_action( HookAwareOracle::ACTION ) );

		$this->assertSame( 1, Monkey::filters()->applied( HookAwareOracle::FILTER ) );
	}

	/**
	 * Tests if the filtered answer is returned.
	 *
	 * @covers HookAwareOracle::answer()
	 *
	 * @return void
	 */
	public function test_return_filtered_answer() {

		$answer = 'some answer here';

		Filters::expectApplied( HookAwareOracle::FILTER )
			->once()
			->andReturn( $answer );

		$this->assertSame(
			$answer,
			( new HookAwareOracle() )->answer(),
			'answer() should return the filtered answer.'
		);

		$this->assertSame( 1, did_action( HookAwareOracle::ACTION ) );
	}
}
