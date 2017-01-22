/**
 * Oracle answering with a random number, thanking for your money.
 */
class ThankfulOracle {
	/**
	 * Returns a random number.
	 * @param {number} money - Money spent for getting an answer.
	 * @returns {number} An answer.
	 */
	answer( money ) {
		showNotice.note( `Thanks for "${Number( money )}", buddy.` );

		return Math.random();
	}
}

export default ThankfulOracle;
