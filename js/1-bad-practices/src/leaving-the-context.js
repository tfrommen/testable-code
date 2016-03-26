function processData( data ) {
	data = prepareData( data );
	sendData( data );

	window.location.href = 'http://example.com';
}
