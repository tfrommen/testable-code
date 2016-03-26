/**
 * Fortune teller answering what an oracle friend of hers answers, or nothing.
 */
var FortuneTeller = (function() {
	/**
	 * Constructor. Sets up the members.
	 * @param {Oracle} oracle - The oracle object.
	 * @constructor
	 */
	function FortuneTeller( oracle ) {
		this.oracle = oracle;
	}

	/**
	 * Returns the answer to life, universe and everything - in case you spend enough money, that is.
	 * @param {number} [money=0] - The money spent for an answer.
	 * @returns {string} The answer.
	 */
	FortuneTeller.prototype.getAnswer = function getAnswer( money ) {
		money = money || 0;

		if ( Number( money ) < 5 ) {
			return '';
		}

		return this.oracle.getAnswer();
	};

	return FortuneTeller;
})();

module.exports = FortuneTeller;
