<?php
/**
 *
 * @filesource   WebfleetOptions.php
 * @created      13.12.2015
 * @package      TomTom\Telematics
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics;

/**
 * Class WebfleetOptions
 */
class WebfleetOptions{

	/**
	 * @var string
	 */
	public $configDir = '';

	/**
	 * @var string
	 */
	public $configFilename = '.env';

	/**
	 * @var string
	 */
	public $storageDir = '';

	/**
	 * @var string
	 */
	public $cacert = 'cert'.DIRECTORY_SEPARATOR.'cacert.pem';


	/**
	 * @todo
	 * @var bool
	 */
#	public $returnArray = false;

	/**
	 * @var int
	 */
#	public $sleep = 5;

	/**
	 * dump output to disk?
	 * @var bool
	 */
#	public $dumpToDisk = false;

	/**
	 * Log to console?
	 * @var bool
	 */
#	public $logToCli = true;

	/**
	 * Write a logfile?
	 * @var bool
	 */
#	public $log_enabled = true;

	/**
	 * Logfile name
	 * @var string
	 */
#	public $log_file = '';

	/**
	 * Time format for console output
	 * @see date()
	 * @var string
	 */
#	public $log_date_format = '[Y-m-d H:i:s \U\T\C]';

}
