function maybeDoSomething() {
	if ( ! checkSomething() ) {
		return false;
	}

	doSomething();

	return true;
}
