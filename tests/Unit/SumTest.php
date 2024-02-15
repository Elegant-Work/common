<?php

use Elegantwork\numbers;

test('Sum', function () {
	$Result = numbers::Sum(1, 2);

	expect($Result)->toBe(3);
});