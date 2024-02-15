<?php

use Elegantwork\html;

test('SearchableInput', function () {
	$HTML = new html();
	$Result = $HTML->SearchableInput('test', 'test', ['on_change' => 'test', 'pushed_opt' => 'test']);

	expect($Result)
		->toBeString()
		->toContain('test', 'onchange', 'datalist', '<input', '/>');
});