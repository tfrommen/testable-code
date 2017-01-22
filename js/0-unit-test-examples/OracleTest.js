import test from 'tape';
import Oracle from './src/Oracle';

test( 'Oracle#answer() ...', ( assert ) => {
	assert.equal(
		( new Oracle() ).answer(),
		'42',
		'... SHOULD return the expected answer.'
	);

	assert.end();
} );
