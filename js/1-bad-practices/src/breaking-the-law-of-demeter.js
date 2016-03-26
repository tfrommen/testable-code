function isIdEven( someObject ) {
	var id = someObject.getOtherObject().getId();

	return ! ( id % 2 );
}

function filterByEvenId( someObject ) {
	if ( isIdEven( someObject ) ) {
		return someObject;
	}

	return undefined;
}
