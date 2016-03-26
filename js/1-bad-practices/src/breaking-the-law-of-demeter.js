function isIdEven( otherObject ) {
	var id = otherObject().getId();

	return ! ( id % 2 );
}

function filterByEvenId( someObject ) {
	if ( isIdEven( someObject.getOtherObject() ) ) {
		return someObject;
	}

	return undefined;
}
