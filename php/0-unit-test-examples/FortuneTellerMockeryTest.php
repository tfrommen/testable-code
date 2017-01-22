<?php # -*- coding: utf-8 -*-

/**
 * Test case for the FortuneTeller class, using Mockery.
 */
class FortuneTellerMockeryTest extends PHPUnit_Framework_TestCase {

	use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

	/**
	 * Tests if the expected answer is returned.
	 *
	 * @covers       FortuneTeller::answer()
	 * @dataProvider provide_answer_data
	 *
	 * @param string $expected The expected answer.
	 * @param mixed  $money    The money spent for the fortune teller.
	 * @param string $answer   The answer given by the oracle.
	 *
	 * @return void
	 */
	public function test_return_expected_answer( $expected, $money, $answer ) {

		$oracle = Mockery::mock( 'Oracle', [
			'answer' => $answer,
		] );

		$this->assertSame(
			$expected,
			( new FortuneTeller( $oracle ) )->answer( $money ),
			'answer() should return the expected answer.'
		);
	}

	/**
	 * @return array[]
	 */
	public function provide_answer_data() {

		$answer = 'answer';

		return [
			'no_money'                      => [
				'expected' => '',
				'money'    => 0,
				'answer'   => $answer,
			],
			'negative_money'                => [
				'expected' => '',
				'money'    => -5,
				'answer'   => $answer,
			],
			'money_null'                    => [
				'expected' => '',
				'money'    => null,
				'answer'   => $answer,
			],
			'money_true'                    => [
				'expected' => '',
				'money'    => true,
				'answer'   => $answer,
			],
			'money_false'                   => [
				'expected' => '',
				'money'    => false,
				'answer'   => $answer,
			],
			'money_empty_string'            => [
				'expected' => '',
				'money'    => '',
				'answer'   => $answer,
			],
			'money_array'                   => [
				'expected' => '',
				'money'    => [],
				'answer'   => $answer,
			],
			'enough_money'                  => [
				'expected' => $answer,
				'money'    => 5,
				'answer'   => $answer,
			],
			'enough_money_string'           => [
				'expected' => $answer,
				'money'    => '5',
				'answer'   => $answer,
			],
			'more_than_enough_money'        => [
				'expected' => $answer,
				'money'    => 100,
				'answer'   => $answer,
			],
			'more_than_enough_money_string' => [
				'expected' => $answer,
				'money'    => '100',
				'answer'   => $answer,
			],
		];
	}
}
