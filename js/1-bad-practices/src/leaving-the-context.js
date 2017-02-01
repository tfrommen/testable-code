function setLocation( url ) {
	window.location.href = url;
}

function processData( data ) {
	data = prepareData( data );
	sendData( data );

	setLocation( 'http://example.com' );
}
