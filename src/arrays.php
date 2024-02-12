<?php

namespace Elegantwork;

/**
 * Used to manipulate arrays
 */
class arrays
{

	//Debugging output
	public static function pp(array $Array, bool $Return = false): ?string
	{
		if ($Return) {
			return "<pre>" . print_r($Array, true) . "</pre>";
		}

		echo "<pre>";
		echo print_r($Array, false);
		echo "</pre>";
	}

}