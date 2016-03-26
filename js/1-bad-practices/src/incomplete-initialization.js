function Renderer( formatter ) {
	this.getFormattedData = function( data ) {
		return formatter.format( data );
	};
}
