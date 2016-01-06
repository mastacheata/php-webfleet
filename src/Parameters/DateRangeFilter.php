<?php
/**
 * Class DateRangeFilter
 *
 * @filesource   DateRangeFilter.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 3-3: Date range filter parameters
 *
 * This class does *not* implement the ParameterInterface!
 */
class DateRangeFilter extends ParameterBase{

	/**
	 * Specifies a relative date range for the data to be returned.
	 * Use of this parameter rules out the usage of rangefrom_string and rangeto_string and vice versa
	 * except for range_pattern=ud requires rangefrom_string and rangeto_string to be present.
	 * Valid values are:
	 *
	 * d0   - Today
	 * d-1  - Yesterday
	 * d-2  - Two days ago
	 * d-3  - Three days ago
	 * d-4  - Four days ago
	 * d-5  - Five days ago
	 * d-6  - Six days ago
	 * w0   - Current week
	 * w-1  - Last week
	 * w-2  - Two weeks ago
	 * w-3  - Three weeks ago
	 * wf0  - Floating week, current day and previous seven days
	 * wf-1 - Floating week, the seven calendar days before wf0
	 * wf-2 - Floating week, the seven calendar days before wf-1
	 * wf-3 - Floating week, the seven calendar days before wf-2
	 * m0   - Current month
	 * m-1  - Last month
	 * m-2  - Two months ago
	 * m-3  - Three months ago
	 * ud   - User-defined range
	 *
	 * @var string
	 */
	public $range_pattern;

	/**
	 * Lower bound for a date range (start date). The required format depends on the value for the lang parameter.
	 *
	 * de: dd.MM.yyyy HH:mm:ss
	 * en: dd/MM/yyyy HH:mm:ss
	 * nl: d-M-yyyy H:mm:ss
	 *
	 * @var string
	 */
	protected $rangefrom_string;

	/**
	 * Upper bound for a date range (end date).
	 *
	 * @var string
	 */
	protected $rangeto_string;

	/**
	 * Can be used as an alternative to range_pattern, rangefrom_string, rangeto_string.
	 *
	 * @var int (4)
	 */
	public $year;

	/**
	 * This parameter has to be used together with with year.
	 *
	 * @var int (2)
	 */
	public $month;

	/**
	 * This parameter has to be used together with year and month.
	 *
	 * @var int (2)
	 */
	public $day;

}
