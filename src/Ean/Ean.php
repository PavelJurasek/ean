<?php

namespace Ean;

class Ean
{
	const EAN_8 = 'ean8';
	const EAN_13 = 'ean13';

	/**
	 * Ean type
	 * @var string
	 */
	protected $type = self::EAN_13;

	/**
	 * ean code
	 * @var string
	 */
	protected $ean = null;
	

	/**
	 * 
	 * @param type $ean
	 */
	public function __construct($ean = null) {
		if (null !== $ean) {
			$this->setEan($ean);
		}
	}
	

	/**
	 * 
	 * @param type $ean
	 */
	public function setEan($ean) {
		$ean = trim($ean);
		$eanLength = strlen($ean);
		
		if (8 !== $eanLength || 13 !== $eanLength) {
			throw new \Ean\Exception\BadEanLength;
		}
		
		$validator = new Validator();
		$isValid = $validator->isValid($ean);
		
		if (!$isValid) {
			throw new \Ean\Exception\BadEanCode;
		}
		
		switch ($eanLength) {
			case 8:
				$this->type = self::EAN_8;
				break;
			case 13:
				$this->type = self::EAN_13;
				break;
		}

		$this->ean = (string) $ean;
	}
}
