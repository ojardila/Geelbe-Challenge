<?php
namespace GeelbeChallenge\Calculators;

abstract class AbstractCalculator implements Handler
{
	/**
	 * @var Handler
	 */
	private $nextHandler;
	private $label;

	/**
	 * @param Handler $handler
	 * @return Handler
	 */
	public function setNext(Handler $handler)
	{
		$this->nextHandler = $handler;
		return $handler;
	}

	/**
	 * @return Handler
	 */
	public function getNext()
	{
		return $this->nextHandler;
	}

	/**
	 * @param $request
	 * @return mixed
	 */
	public function handle($value)
	{
		if ($this->isMultiple($value)) {
			return $this->getLabel($value);
		}
		return $this->nextHandler->handle($value);
	}


}