<?php
namespace GeelbeChallenge;

use GeelbeChallenge\Calculators\CalcDefault;
use GeelbeChallenge\Calculators\CalcThreeMultiple;
use GeelbeChallenge\Calculators\CalcFiveMultiple;
use GeelbeChallenge\Calculators\CalcThreeAndFiveMultiple;

class GeelbeChallenge
{
  private const START_NUMBER = 1;
	/**
	 * @var int
	 */
	private $limitNumber;

	/**
	 * @param mixed $limitNumber
	 */
	public function setLimitNumber($limitNumber)
	{
		$this->limitNumber = $limitNumber;
	}

	/**
	 * @return int
	 */
	public function getLimitNumber() {
		return $this->limitNumber;
	}

	/**
	 *
	 */
	public function run()
	{
		$three = new CalcThreeMultiple();
		$five = new CalcFiveMultiple();
		$threeandfive = new CalcThreeAndFiveMultiple();
		$default = new CalcDefault();
		$threeandfive->setNext($three)->setNext($five)->setNext($default);

		foreach (range(GeelbeChallenge::START_NUMBER, $this->limitNumber) as $number) {
			print sprintf('%s%s',$threeandfive->handle($number),PHP_EOL);
		}
	}

}