<?php

class RomanNumeralsConverter
{
	// large roman numerals (greater than 5000), are represented by an overline
	// _           _
	// V for 5000, X for 10000, etc. As overlines cannot be added in php,
	// they are sorrounded by a pair of hyphens in this script, e.g.: -V- for 5000
	 
		protected static $lookup = [
			10000 => '-X-',
			9000 => '-IX-',
			5000 => '-V-',
			1000 => 'M',
			900 => 'CM',
			500 => 'D',
			400 => 'CD',
			100 => 'C',
			90 => 'XC',
			50 => 'L',
			40 => 'XL',
			10 => 'X',
			9 => 'IX',
			5 => 'V',
			4 => 'IV',
			1 => 'I'
		];


	public function convert($number){

		
		$solution = '';

		foreach (static::$lookup as $limit => $glyph) {

			while($number >= $limit){
				$solution .= $glyph;
				$number -= $limit;
			}

		}


		
		var_dump($solution);
		echo "\n";

		return $solution;		


	}
}
