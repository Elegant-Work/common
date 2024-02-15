<?php

namespace Elegantwork;

/**
 * A math/numbers class
 */

class numbers
{

	/**
	 * Sum two numbers
	 */
	public static function Sum(int $Input1, int $Input2): int
	{
		return $Input1 + $Input2;
	}

	/**
	 * Recursively attempt to generate a random number that is unique
	 */
	public static function RandomNumberRecursive(array $Pool): int
	{

		$RandomNumber = rand(0, getrandmax());

		if (in_array($RandomNumber, $Pool)) {
			$Pool[] = $RandomNumber;
			return self::RandomNumberRecursive($Pool);
		}

		return $RandomNumber;
	}
}