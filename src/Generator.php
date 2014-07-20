<?php

namespace Ean;

class Generator
{
	/**
	 * format: 2xxxxxxc
	 * @param int base
	 * @param string type
	 * @return \Ean\Ean
	 */
	public function generate($base, $eanLength) {
		if (8 !== $eanLength && 13 !== $eanLength) {
			return false;
		}
		
		$weights = [
			1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3,
		];
		
		if (8 === $eanLength) {
			array_shift($weights);
		}
		
		$ean = '2' . str_pad($base, 6, '0', STR_PAD_LEFT);
		
		$sum = 0;
		for ($i=0; $i<$eanLength-1; ++$i) {
			$sum += $weights[$i] * intval(substr($ean, $i, 1));
		}

		$rest = $sum % 10;
		$controlDigit = 0;
		if ($rest) {
			$controlDigit = 10 - ($sum % 10);
		}
		
		return $ean . $controlDigit;
	}
}

