<?php

use Elegantwork\numbers;

test('RandomNumberRecursive', function () {
	$Pool = [50, 1, 5, 654, 9847919, 513, 519];
	$Result = numbers::RandomNumberRecursive($Pool);

	expect($Result)
		->not
		->toBeIn($Pool);
});