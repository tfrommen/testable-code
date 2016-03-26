var test = require( 'tape' );
var sinon = require( 'sinon' );

var FortuneTeller = require( './src/fortune-teller' );

/**
 * Test for the getAnswer() method.
 */
test( 'getAnswer() should return the expected answer.', function( assert ) {
	var answer = 'answer';

	var testee = new FortuneTeller( {
		getAnswer: sinon.stub().returns( answer )
	} );

	assert.equal( testee.getAnswer( 0 ), '', 'getAnswer() should return no answer.' );
	assert.equal( testee.getAnswer( -1 ), '', 'getAnswer() should return no answer.' );
	assert.equal( testee.getAnswer( null ), '', 'getAnswer() should return no answer.' );
	assert.equal( testee.getAnswer( true ), '', 'getAnswer() should return no answer.' );
	assert.equal( testee.getAnswer( false ), '', 'getAnswer() should return no answer.' );
	assert.equal( testee.getAnswer( '' ), '', 'getAnswer() should return no answer.' );
	assert.equal( testee.getAnswer( [] ), '', 'getAnswer() should return no answer.' );
	assert.equal( testee.getAnswer( 5 ), answer, 'getAnswer() should return the mocked answer.' );
	assert.equal( testee.getAnswer( '5' ), answer, 'getAnswer() should return the mocked answer.' );

	assert.end();
} );
