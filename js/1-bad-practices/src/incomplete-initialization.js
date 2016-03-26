function Renderer() {
	var formatter;

	this.setFormatter = function( f ) {
		formatter = f;
	};

	this.getFormattedData = function( data ) { // <-- SUT
		return formatter.format( data );
	};
}
