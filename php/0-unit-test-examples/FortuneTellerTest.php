<?php # -*- coding: utf-8 -*-

require_once __DIR__ . '/src/FortuneTeller.php';

/**
 * Test case for the FortuneTeller class.
 */
class FortuneTellerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test for the get_answer() method.
	 *
	 * @covers       FortuneTeller::get_answer()
	 * @dataProvider provide_get_answer_data
	 *
	 * @param string $expected      The expected answer.
	 * @param mixed  $money         The money spent for the fortune teller.
	 * @param string $oracle_answer The answer given by the oracle.
	 *
	 * @return void
	 */
	public function test_get_answer( $expected, $money, $oracle_answer ) {

		$oracle = $this->getMockBuilder( 'Oracle' )
			->getMock();

		$oracle->method( 'get_answer' )
			->willReturn( $oracle_answer );

		/** @var Oracle $oracle */
		$testee = new FortuneTeller( $oracle );

		$this->assertSame( $expected, $testee->get_answer( $money ), 'get_answer() should return the expected answer.' );
	}

	/**
	 * Data provider for the test_get_answer() method.
	 *
	 * @return array[]
	 */
	public function provide_get_answer_data() {

		$answer = 'answer';

		return [
			'no_money'            => [
				'expected'      => '',
				'money'         => 0,
				'oracle_answer' => $answer,
			],
			'negative_money'      => [
				'expected'      => '',
				'money'         => -1,
				'oracle_answer' => $answer,
			],
			'money_null'          => [
				'expected'      => '',
				'money'         => null,
				'oracle_answer' => $answer,
			],
			'money_true'          => [
				'expected'      => '',
				'money'         => true,
				'oracle_answer' => $answer,
			],
			'money_false'         => [
				'expected'      => '',
				'money'         => false,
				'oracle_answer' => $answer,
			],
			'money_empty_string'  => [
				'expected'      => '',
				'money'         => '',
				'oracle_answer' => $answer,
			],
			'money_array'         => [
				'expected'      => '',
				'money'         => [],
				'oracle_answer' => $answer,
			],
			'enough_money'        => [
				'expected'      => $answer,
				'money'         => 5,
				'oracle_answer' => $answer,
			],
			'enough_money_string' => [
				'expected'      => $answer,
				'money'         => '5',
				'oracle_answer' => $answer,
			],
		];
	}
}
