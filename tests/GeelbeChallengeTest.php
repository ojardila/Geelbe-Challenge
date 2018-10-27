<?php

use GeelbeChallenge\Calculators\CalcDefault;
use GeelbeChallenge\Calculators\CalcThreeMultiple;
use GeelbeChallenge\Calculators\CalcFiveMultiple;
use GeelbeChallenge\Calculators\CalcThreeAndFiveMultiple;

use GeelbeChallenge\GeelbeChallenge;
use PHPUnit\Framework\TestCase;

class GeelbeChallengeTest extends TestCase {
	protected $threeMultiple;
	protected $fiveMultiple;
	protected $fiveAndThreeMultiple;
	protected $default;
	protected $geelbeChallenge;

	protected $results = [
		1,
		2,
		"Geelbe",
		4,
		"IT",
		"Geelbe",
		7,
		8,
		"Geelbe",
		"IT",
		11,
		"Geelbe",
		13,
		14,
		"Geelbianos"
	];

	private const THREE_LABEL = "Geelbe";
	private const FIVE_LABEL = "IT";
	private const THREE_AND_FIVE_LABEL = "Geelbianos";

	/**
	 *
	 */
	protected function setUp()
	{
		$this->threeMultiple = new CalcThreeMultiple();
		$this->fiveMultiple = new CalcFiveMultiple();
		$this->fiveAndThreeMultiple = new CalcThreeAndFiveMultiple();
		$this->default = new CalcDefault();
		$this->geelbeChallenge = new GeelbeChallenge();
		$this->geelbeChallenge->setLimitNumber(15);

	}

	public function testThreeMultiple() {
		$isMultiple = $this->threeMultiple->isMultiple(3);
		$this->assertInternalType('bool', $isMultiple);
		$this->assertEquals(true, $isMultiple);
	}

	public function testFiveMultiple() {
		$isMultiple = $this->fiveMultiple->isMultiple(5);
		$this->assertInternalType('bool', $isMultiple);
		$this->assertEquals(true, $isMultiple);
	}

	public function testfiveAndThreeMultiple() {
		$isMultiple = $this->fiveAndThreeMultiple->isMultiple(15);
		$this->assertInternalType('bool', $isMultiple);
		$this->assertEquals(true, $isMultiple);
	}
	public function testDefault() {
		$isDefault = $this->default->isMultiple(15);
		$this->assertInternalType('bool', $isDefault);
		$this->assertEquals(true, $isDefault);
	}

	public function testThreeMultipleLabel() {
		$isMultiple = $this->threeMultiple->getLabel(3);
		$this->assertInternalType('string', $isMultiple);
		$this->assertEquals($this::THREE_LABEL, $isMultiple);
	}

	public function testFiveLabel() {
		$isMultiple = $this->fiveMultiple->getLabel(5);
		$this->assertInternalType('string', $isMultiple);
		$this->assertEquals($this::FIVE_LABEL, $isMultiple);
	}

	public function testfiveAndThreeMultipleLabel() {
		$isMultiple = $this->fiveAndThreeMultiple->getLabel(15);
		$this->assertInternalType('string', $isMultiple);
		$this->assertEquals($this::THREE_AND_FIVE_LABEL, $isMultiple);
	}

	public function testDefaultLabel() {
		$param = 2;
		$isDefault = $this->default->getLabel($param);
		$this->assertInternalType('int', $isDefault);
		$this->assertEquals($param, $isDefault);
	}
	public function testLimitNumber() {
		$param = 15;
		$this->geelbeChallenge->setLimitNumber($param);
		$limitNumber = $this->geelbeChallenge->getLimitNumber();
		$this->assertInternalType('int', $limitNumber);
		$this->assertEquals($param, $limitNumber);
	}

	/**
	 *
	 */
	public function testRun() {
		$expectedResult = "";
		foreach ($this->results as $result) {
			$expectedResult .= sprintf('%s%s',$result,PHP_EOL);
		}
		ob_start();
		$this->geelbeChallenge->run();
		$list = ob_get_contents();
		ob_end_clean();
		$this->assertEquals($expectedResult, $list);

	}

	public function testHandler() {
		$value = 7;
		$this->fiveAndThreeMultiple->setNext($this->threeMultiple)->setNext($this->fiveMultiple)->setNext($this->default);
		$handledValue =$this->fiveAndThreeMultiple->handle($value);
		$this->assertInternalType('int', $handledValue);
		$this->assertEquals($value, $handledValue);
		$this->assertEquals($this->threeMultiple->getNext(), $this->fiveMultiple);

	}


}