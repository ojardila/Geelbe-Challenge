<?php
namespace GeelbeChallenge\Calculators;

class CalcFiveMultiple  extends AbstractCalculator {

	/**
	 * @param Handler $handler
	 * @return Handler
	 */

	public function isMultiple($value) {
		return $value % 5 === 0;
	}
	/**
	 * @param $value
	 * @return string
	 */
	public function getLabel($value)
	{
		return "IT";
	}

}
