import test from 'tape';
import sinon from 'sinon';
import ThankfulOracle from './src/ThankfulOracle';

test( 'ThankfulOracle#answer() ...', ( assert ) => {
	global.showNotice = {
		note: sinon.spy()
	};

	const money = 42;

	assert.equal(
		typeof ( new ThankfulOracle() ).answer( money ),
		'number',
		'... SHOULD return a number.'
	);

	assert.equal(
		global.showNotice.note.callCount,
		1,
		'... SHOULD say thanks once.'
	);

	assert.equal(
		global.showNotice.note.calledWithMatch( new RegExp( `"${Number( money )}"` ) ),
		true,
		'... SHOULD say thanks for the amount of money spent.'
	);

	delete global.showNotice;

	assert.end();
} );
