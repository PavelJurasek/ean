<?php

namespace Ean\Test;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
	protected $validator;

	public function setup() {
		$this->validator = new \Ean\Validator();
	}

	public function test() {
		$goodEans = [
		   '00000000',
		   '40123455',
		];
		$badEans = [
		   '00000001',
		   '40123451',
		];

		foreach ($goodEans as $ean) {
			$this->assertTrue($this->validator->isValid($ean));
		}

		foreach ($badEans as $ean) {
			$this->assertFalse($this->validator->isValid($ean));
		}
	}
}
