/**
 * Fortune teller answering what an oracle friend of hers answers, or nothing.
 */
class FortuneTeller {
	/**
	 * Constructor. Sets up the members.
	 * @param {Oracle} oracle - The oracle object.
	 */
	constructor( oracle ) {
		this.oracle = oracle;
	}

	/**
	 * Returns the answer to life, universe and everything—in case you spend enough money, that is.
	 * @param {number} [money=0] - Money spent for getting an answer.
	 * @returns {string} An answer.
	 */
	answer( money = 0 ) {
		if ( Number( money ) < 5 ) {
			return '';
		}

		return this.oracle.answer();
	}
}

export default FortuneTeller;
