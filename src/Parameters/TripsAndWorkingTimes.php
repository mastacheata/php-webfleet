<?php
/**
 * Class TripsAndWorkingTimes
 *
 * @filesource   TripsAndWorkingTimes.php
 * @created      18.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-188: Parameters specific to showTripReportExtern
 * Table 4-191: Parameters specific to showTripSummaryReportExtern
 * Table 4-194: Parameters specific to showTracks
 * Table 4-197: Parameters specific to updateLogbook
 * Table 4-199: Parameters specific to showLogbook
 * Table 4-202: Parameters specific to showLogbookHistory
 * Table 4-205: Parameters specific to updateLogbookMode
 * Table 4-207: Parameters specific to showWorkingTimes
 * Table 4-210: Parameters specific to showStandStills
 * Table 4-213: Parameters specific to showIdleExceptions
 * Table 4-216: Parameters specific to getObjectKPIs
 * Table 4-220: Parameters specific to getDriverKPIs
 * Table 4-223: Parameters specific to getRemainingDrivingTimesEU
 */
class TripsAndWorkingTimes extends ParameterBase implements ParameterInterface{

	// showTripReportExtern
	// showTripSummaryReportExtern
	// showTracks
	// showLogbook
	// showLogbookHistory
	// updateLogbookMode
	// showWorkingTimes
	// showStandStills
	// showIdleExceptions
	// getObjectKPIs
	public $objectno;
	public $objectuid;

	// showTripReportExtern
	// updateLogbook
	// showLogbook
	// showLogbookHistory:
	public $tripid;

	// showTripReportExtern
	// showWorkingTimes
	// showIdleExceptions
	// getDriverKPIs
	// getRemainingDrivingTimesEU
	public $driverno;
	public $driveruid;

	// showTripReportExtern
	// showWorkingTimes
	// showIdleExceptions
	// getRemainingDrivingTimesEU
	public $drivergroupname;
	public $objectgroupname;

	// showTripReportExtern
	// showTracks
	// showStandStills
	public $externalid;

	// updateLogbook
	public $logflag;
	public $logpurpose;
	public $logcontact;
	public $logcomment;
	public $reason;

	// showLogbook
	public $modified_since;

	// updateLogbookMode
	public $logbook_mode;

	// getObjectKPIs
	public $kpinames;

	// getDriverKPIs
	public $level;

}
