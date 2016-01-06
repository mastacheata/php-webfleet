<?php
/**
 * Class General
 *
 * @filesource   General.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 3-2: General parameters
 *
 * This class does *not* implement the ParameterInterface!
 */
class General extends ParameterBase{

	/**
	 * Specifies the operation to be executed.
	 * See chapter Reference for a list of available operations and more information.
	 *
	 * @var string
	 * @internal
	 */
	public $action;

	/**
	 * Language to be used for output formatting. Expressed as a two-letter language code.
	 * The list of available languages is subject to change.
	 *
	 * @var string [de, en, nl]
	 */
	public $lang = 'en';

	/**
	 * If set to true, all date/time-relevant parameters are expected to be IS8601-formatted
	 * and all date/time result fields will be IS8601-formatted.
	 *
	 * The preferred ISO 8601 compliant notation for strings that represent dates which are to be passed
	 * to WEBFLEET.connect is the compact full notation with dashes and colons, optional milliseconds and time zone.
	 *
	 * If set to true the result will return date time values in UTC.
	 * If set to false the result returns the time zone configured in the specific WEBFLEET account.
	 *
	 * @var bool
	 * @internal ?
	 */
	public $useISO8601 = true;

	/**
	 * This parameter reduces the result of a request to the specified columns. The possible values for this parameter
	 * are column names that can be returned by the function. If columnfilter is not specified, is empty or contains
	 * only invalid column names, then the full data set requested by the function is returned. The requested column
	 * names are case-sensitive and must be indicated correctly. Multiple column names must be separated with commas.
	 * Misspelled column names are disregarded in the resulting data set with no error notification.
	 *
	 * @var string (comma separated values)
	 * @internal
	 */
	public $columnfilter;

	/**
	 * Controls how WF.connect interprets the character encoding of URL request parameters.
	 * If set to true all parameters are expected to be UTF-8 encoded.
	 * If set to false all parameters are interpreted as ISO-8859-1.
	 *
	 * Default is false.
	 *
	 * @var bool
	 * @internal
	 */
	public $useUTF8 = true;

	/**
	 * Defines the response format to be used by WEBFLEET.connect. Possible values are:
	 *
	 * csv (default)
	 * json
	 *
	 * @var string
	 * @internal
	 */
	public $outputformat = 'json';

}
