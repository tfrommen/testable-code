/**
 * Oracle knowing the answer to life, universe and everything.
 */
var Oracle = (function() {
	/**
	 * Constructor. Sets up the members.
	 * @constructor
	 */
	function Oracle() {
	}

	/**
	 * Returns the answer to life, universe and everything.
	 *
	 * @returns {string}
	 */
	Oracle.prototype.getAnswer = function getAnswer() {
		return '42';
	};

	return Oracle;
})();

module.exports = Oracle;
