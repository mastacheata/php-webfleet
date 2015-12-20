<?php
/**
 * Interface TripsAndWorkingTimes
 *
 * @filesource   TripsAndWorkingTimes.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\DateRangeFilter;
use TomTom\Telematics\Parameters\TripsAndWorkingTimes as TripsAndWorkingTimesParams;

/**
 * 4.8 Trips and working times
 */
interface TripsAndWorkingTimes{

	/**
	 * 4.8.1 showTripReportExtern
	 *
	 * Provides a list of trips of an object. Trips of deleted objects cannot be shown.
	 *  In order to prevent your system from being flooded with oversized responses, the
	 * result is limited to 10000 entries, if the continuous replication is used.
	 * The limit can be adjusted per account on request.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showTripReportExtern(TripsAndWorkingTimesParams $params = null, DateRangeFilter $dateRangeFilterParams = null);

	/**
	 * 4.8.2 showTripSummaryReportExtern
	 *
	 * This action provides general information about a trip.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showTripSummaryReportExtern(TripsAndWorkingTimesParams $params = null, DateRangeFilter $dateRangeFilterParams = null);

	/**
	 * 4.8.3 showTracks
	 *
	 * This action retrieves a list of positions of a vehicle for a defined period.
	 * If certain information was not available the corresponding results can be empty.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showTracks(TripsAndWorkingTimesParams $params = null, DateRangeFilter $dateRangeFilterParams = null);

	/**
	 * 4.8.4 updateLogbook
	 *
	 * This action updates some parameters of an existing logbook entry.
	 * When using updateLogbook, you only need to include the parameters for which you want to change or delete
	 * the values. If you include a parameter and do not indicate a value, the existing value will be deleted.
	 * In addition to the specific parameters listed below the parameters
	 * modifiedby and modifiedon are being automatically stored.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 */
	public function updateLogbook(TripsAndWorkingTimesParams $params);

	/**
	 * 4.8.5 showLogbook
	 *
	 * This action returns the most recent state of logbook information for an indicated object or trip.
	 *
	 * Date range filter behaviour:
	 *
	 * The date range filter applies to the trip end date/time, not the date/time when the trip record was created.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showLogbook(TripsAndWorkingTimesParams $params = null, DateRangeFilter $dateRangeFilterParams = null);

	/**
	 * 4.8.6 showLogbookHistory
	 *
	 * This action returns a logbook history showing logbook edits including the old and new values.
	 * Change history records are available as of 1st of January 2011.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showLogbookHistory(TripsAndWorkingTimesParams $params = null, DateRangeFilter $dateRangeFilterParams = null);

	/**
	 * 4.8.7 updateLogbookMode
	 *
	 * This action changes the driver’s logbook mode on the TomTom LINK 5xx/4xx/3xx.
	 * The change of the logbook mode will become effective with the next trip. If
	 * updateLogbookMode is executed during a trip, this trip will be ended and a new
	 * trip using the new logbook mode will be created.
	 *
	 * Limitations:
	 *
	 * - For LINK 3xx - firmware version 1.92 or higher
	 * - For LINK 5xx/4xx - firmware version 2.0 or higher
	 * - The Function for the LINK device must be set to Logbook.
	 *   You can set the Function for your object (LINK device) in WEBFLEET as follows:
	 *    1. Select your object.
	 *    2. Under Contract / Device click Configure in the details panel on the right.
	 *    3. Go to the Basic settings tab and select Logbook under Function.
	 * - You cannot change the logbook mode when a digital tachograph is connected to the LINK device.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 */
	public function updateLogbookMode(TripsAndWorkingTimesParams $params);

	/**
	 * 4.8.8 showWorkingTimes
	 *
	 * This report shows work time states changes of the (co)driver, the locations and vehicle.
	 *
	 * Parameter restrictions:
	 *
	 * Before processing a request, all parameters are checked for invalid combinations and an error message
	 * is returned if an unacceptable parameter combination is detected.
	 *
	 * - At least one of the filter parameters objectno or driverno must be provided.
	 * - The time period covered by date range filter (Date range filter parameters) may not be greater than 1 month.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showWorkingTimes(TripsAndWorkingTimesParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.8.9 showStandStills
	 *
	 * This actions shows a list of all stops for a certain vehicle for a specified period.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showStandStills(TripsAndWorkingTimesParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.8.10 showIdleExceptions
	 *
	 * This report shows a list of idle exceptions detected by the LINK or ecoPLUS of an
	 * object or of all objects of a object group. An idle event occurs when an object is still
	 * for more than five minutes with engine running.
	 * The report shows all idle exceptions that have ended within the period defined with
	 * the start_time and end_time.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function showIdleExceptions(TripsAndWorkingTimesParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.8.11 getObjectKPIs
	 *
	 * Using getObjectKPIs you can retrieve one or more KPIs (Key Performance
	 * Indicators) specific to an individual object.
	 *
	 * Note: getObjectKPIs is the successor action of getKPIs. All calls to getKPIs will be redirected to getObjectKPIs.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function getObjectKPIs(TripsAndWorkingTimesParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.8.12 getDriverKPIs
	 *
	 * Using getDriverKPIs you can retrieve one or more KPIs (Key Performance Indicators) specific to an individual
	 * driver.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter      $dateRangeFilterParams
	 */
	public function getDriverKPIs(TripsAndWorkingTimesParams $params, DateRangeFilter $dateRangeFilterParams);

	/**
	 * 4.8.13 getRemainingDrivingTimesEU
	 *
	 * getRemainingDrivingTimesEU returns several remaining driving times for one
	 * or multiple drivers according to the rules of the EU. The respective driver must be
	 * assigned to a vehicle for which the additional service Remote Download for
	 * WEBFLEET Tachograph Manager or Remaining Driving Times is booked.
	 *
	 * Disclaimer:
	 *
	 * The remaining driving times supplied by TomTom are indicative and
	 * are reliant upon the information being obtained from the tachograph and sent to
	 * WEBFLEET via the onboard device installed in a vehicle. The algorithms used to
	 * calculate the indicative remaining driving times are based on European driving time
	 * legislation and it is you responsibility to verify remaining driving times and any
	 * applicable national legislation.
	 *
	 * @param \TomTom\Telematics\Parameters\TripsAndWorkingTimes $params
	 */
	public function getRemainingDrivingTimesEU(TripsAndWorkingTimesParams $params = null);

}
