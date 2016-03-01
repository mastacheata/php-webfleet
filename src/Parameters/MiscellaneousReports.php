<?php
/**
 * Class MiscellaneousReports
 *
 * @filesource   MiscellaneousReports.php
 * @created      18.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-226: Parameters specific to showIOReportExtern
 * Table 4-229: Parameters specific to showAccelerationEvents
 * Table 4-232: Parameters specific to showSpeedingEvents
 * Table 4-235: Parameters specific to getCrashLog
 */
class MiscellaneousReports extends ParameterBase implements ParameterInterface{

	// showIOReportExtern
	// showAccelerationEvents
	// showSpeedingEvents
	// getCrashLog
	public $objectno;
	public $objectuid;

	// showAccelerationEvents
	// showSpeedingEvents
	public $driverno;
	public $driveruid;
	public $drivergroupname;
	public $externalid;

	// showAccelerationEvents
	public $avg_accel;
	public $accelerationtypes;

	// showIOReportExtern
	public $iofilter;

}
