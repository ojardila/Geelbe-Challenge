<?php
namespace GeelbeChallenge\Calculators;

interface Handler
{
	/**
	 * @param Handler $handler
	 * @return mixed
	 */
	public function setNext(Handler $handler);

	/**
	 * @param $request
	 * @return mixed
	 */
	public function handle($value);

	/**
	 * @param $request
	 * @return mixed
	 */
	public function isMultiple($value);

	public function getLabel($value);

}