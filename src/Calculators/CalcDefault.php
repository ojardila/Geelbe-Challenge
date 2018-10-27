<?php
namespace GeelbeChallenge\Calculators;

class CalcDefault  extends AbstractCalculator {
	/**
	 * @param Handler $handler
	 * @return Handler
	 */

	public function isMultiple($value) {
		return true;
	}

	/**
	 * @param $value
	 */
	public function getLabel($value) {
		return $value;
	}

}
