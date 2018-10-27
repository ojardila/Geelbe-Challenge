<?php
namespace GeelbeChallenge\Calculators;

class CalcThreeMultiple  extends AbstractCalculator {

	/**
	 * @param Handler $handler
	 * @return Handler
	 */

	public function isMultiple($value) {
		return $value % 3 === 0;
	}

	/**
	 * @param $value
	 * @return string
	 */
	public function getLabel($value)
	{
		return "Geelbe";
	}


}
