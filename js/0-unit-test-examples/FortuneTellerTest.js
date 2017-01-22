import test from 'tape';
import sinon from 'sinon';
import FortuneTeller from './src/FortuneTeller';

test( 'FortuneTeller#answer() ...', ( assert ) => {
	const answer = 'some answer here';

	const oracle = {
		answer: sinon.stub().returns( answer )
	};

	const testee = new FortuneTeller( oracle );

	assert.equal(
		testee.answer( 0 ),
		'',
		'... SHOULD return no answer for invalid or not enough money.'
	);

	assert.equal(
		testee.answer( -5 ),
		'',
		'... SHOULD return no answer for invalid or not enough money.'
	);

	assert.equal(
		testee.answer( null ),
		'',
		'... SHOULD return no answer for invalid or not enough money.'
	);

	assert.equal(
		testee.answer( true ),
		'',
		'... SHOULD return no answer for invalid or not enough money.'
	);

	assert.equal(
		testee.answer( false ),
		'',
		'... SHOULD return no answer for invalid or not enough money.'
	);

	assert.equal(
		testee.answer( '' ),
		'',
		'... SHOULD return no answer for invalid or not enough money.'
	);

	assert.equal(
		testee.answer( [] ),
		'',
		'... SHOULD return no answer for invalid or not enough money.'
	);

	assert.equal(
		testee.answer( 5 ),
		answer,
		'... SHOULD return the expected answer for enough money.'
	);

	assert.equal(
		testee.answer( '5' ),
		answer,
		'... SHOULD return the expected answer for enough money.'
	);

	assert.equal(
		testee.answer( 100 ),
		answer,
		'... SHOULD return the expected answer for enough money.'
	);

	assert.equal(
		testee.answer( '100' ),
		answer,
		'... SHOULD return the expected answer for enough money.'
	);

	assert.end();
} );
