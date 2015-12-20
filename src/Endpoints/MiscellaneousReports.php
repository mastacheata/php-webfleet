<?php
/**
 * Interface MiscellaneousReports
 *
 * @filesource   MiscellaneousReports.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\DateRangeFilter;
use TomTom\Telematics\Parameters\MiscellaneousReports as MiscellaneousReportsParams;

/**
 * 4.9 Miscellaneous reports
 */
interface MiscellaneousReports{

	/**
	 * 4.9.1 showIOReportExtern
	 *
	 * This action returns a list of events recorded with the inputs and outputs of the LINK device.
	 *
	 * @param \TomTom\Telematics\Parameters\MiscellaneousReports $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showIOReportExtern(MiscellaneousReportsParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.9.2 showAccelerationEvents
	 *
	 * This action shows unwanted driver behaviour. It shows a list of events with
	 * information on excessive acceleration, breaking or cornering, based on a threshold
	 * defined by the user. These events only cover short time periods, e.g. two to four
	 * seconds for a sharp turn.
	 *
	 * @param \TomTom\Telematics\Parameters\MiscellaneousReports $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showAccelerationEvents(MiscellaneousReportsParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.9.3 showSpeedingEvents
	 *
	 * This action shows unwanted driver behaviour.
	 * It shows a list of trips or part of trips with information on excessive speeding.
	 *
	 * @param \TomTom\Telematics\Parameters\MiscellaneousReports $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showSpeedingEvents(MiscellaneousReportsParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.9.4 getCrashLog
	 *
	 * Using getCrashLog you can retrieve all crash log data reported by a LINK 100 device.
	 *
	 * @param \TomTom\Telematics\Parameters\MiscellaneousReports $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function getCrashLog(MiscellaneousReportsParams $params, DateRangeFilter $dateRangeFilterParams);

}
