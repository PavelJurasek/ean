<?php

namespace Ean;

class Validator
{
	/**
	 * @param misc ean to test
	 * @return bool is ean valid
	 */
	public function isValid($ean) {
		// @todo: do poprawy
		if (is_object($ean) && $ean instanceof \Ean\Ean) {
			return true;
		}
		
		$ean = trim($ean);
		$eanLength = strlen($ean);

		if (8 !== $eanLength && 13 !== $eanLength) {
			return false;
		}
		
		$weights = [
			1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3,
		];
		
		if (8 === $eanLength) {
			array_shift($weights);
		}
		
		$sum = 0;
		for ($i=0; $i<$eanLength-1; ++$i) {
			$sum += $weights[$i] * intval(substr($ean, $i, 1));
		}

		$rest = $sum % 10;
		$controlDigit = 0;
		if ($rest) {
			$controlDigit = 10 - ($sum % 10);
		}
		
		return intval(substr($ean, -1, 1)) == $controlDigit;
	}
}
