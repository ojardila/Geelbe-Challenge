<?php
namespace GeelbeChallenge\Calculators;

class CalcThreeAndFiveMultiple  extends AbstractCalculator {

	/**
	 * @param Handler $handler
	 * @return Handler
	 */

	public function isMultiple($value) {
		return $value % 3 === 0 && $value % 5 === 0;
	}

	/**
	 * @param $value
	 * @return string
	 */
	public function getLabel($value)
	{
		return "Geelbianos";
	}

}
