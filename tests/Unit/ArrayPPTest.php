<?php

use Elegantwork\arrays;

test('pp', function () {
	$ReturnPP = arrays::pp([1, 2, 3], true);

	expect($ReturnPP)
		->toBeString()
		->toContain('<pre>', '1', '2', '3', '</pre>');
});