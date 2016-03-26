var test = require( 'tape' );

var Oracle = require( './src/oracle' );

/**
 * Test for the getAnswer() method.
 */
test( 'getAnswer() should return the expected answer.', function( assert ) {
	var testee = new Oracle();

	assert.equal( testee.getAnswer(), '42', 'getAnswer() should return the expected answer.' );

	assert.end();
} );
