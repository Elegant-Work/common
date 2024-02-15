<?php

namespace Elegantwork;

use Elegantwork\numbers;

/**
 * Collection of reusable HTML elements
 */

class html
{
	public array $DataListIDs;

	/**
	 * Create a new instance of the class
	 */
	public function __construct()
	{
		$this->DataListIDs = [];//Init so that it can be used in the SearchableInput method even if never called before
	}

	/**
	 * Create an input element with a datalist
	 */
	public function SearchableInput(string $ElementID, string $Datalist, array $Opts = []): string
	{
		$ReturnHTML = "";

		/**
		 * Opts handling
		 */
		$OnChangeHtml = (isset($Opts['on_change'])) ? "onchange='{$Opts['on_change']}'" : "";

		/**
		 * Generate unique ID, each element in the DOM needs a unique ID or else it will not work
		 */
		$DatalistID = numbers::RandomNumberRecursive($this->DataListIDs);
		$ReturnHTML .= "
		<input $OnChangeHtml list='$DatalistID' type='text' id='$ElementID' class='inputs button_press' name='$ElementID'/>
		<datalist id='$DatalistID'>
 			$Datalist";

		$ReturnHTML .= (isset($Opts['pushed_opt'])) ? $Opts['pushed_opt'] : "";


		$ReturnHTML .= "</datalist>";

		/**
		 * Added so that further calls to this method will not create an ID conflict
		 */
		$this->DataListIDs[] = $DatalistID;

		return $ReturnHTML;
	}


}