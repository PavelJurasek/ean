<?php

namespace Ean\Test;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
	protected $generator;

	public function setup() {
		$this->generator = new \Ean\Generator();
	}

	public function test() {
		$goodEans = [
		   '1' => '20000011',
		   '132' => '20001322',
		];

		foreach ($goodEans as $base => $ean) {
			$this->assertEquals($this->generator->generate($base, 8), $ean);
		}
	}
}
