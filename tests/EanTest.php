<?php

namespace Ean\Test;

class EanTest extends \PHPUnit_Framework_TestCase
{
	protected $ean;

	public function setup() {
		$this->ean = new \Ean\Ean();
	}

	/**
	 * @expectedException \Ean\Exception\BadEanLength
	 */
	public function testSettingInvalidEanInCnstr() {
		new \Ean\Ean('123');
	}

	/**
	 * @expectedException \Ean\Exception\BadEanLength
	 */
	public function testSettingInvalidEan1() {
		$this->ean->setEan('123');
	}
}
