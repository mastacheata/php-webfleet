<?php
/**
 * Class VehicleMaintenance
 *
 * @filesource   VehicleMaintenance.php
 * @created      18.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-293: Parameters specific to insertMaintenanceSchedule
 * Table 4-296: Parameters specific to updateMaintenanceSchedule
 * Table 4-298: Parameters specific to deleteMaintenanceSchedule
 * Table 4-300: Parameters specific to showMaintenanceSchedules
 * Table 4-303: Parameters specific to showMaintenanceTasks
 * Table 4-306: Parameters specific to resolveMaintenanceTask
 */
class VehicleMaintenance extends ParameterBase implements ParameterInterface{

	// insertMaintenanceSchedule
	// updateMaintenanceSchedule
	// showMaintenanceSchedules
	// showMaintenanceTasks
	public $objectno;
	public $objectuid;

	// insertMaintenanceSchedule
	// updateMaintenanceSchedule
	public $schedulename;
	public $scheduledescription;
	public $scheduletype;
	public $ruletype;
	public $intervaltime;
	public $intervalodometer;
	public $remindingtime;
	public $remindingodometer;
	public $plannedexectime;
	public $plannedexecodometer;

	// updateMaintenanceSchedule
	// deleteMaintenanceSchedule
	// showMaintenanceSchedules
	// showMaintenanceTasks
	public $scheduleid;

	// showMaintenanceSchedules
	// showMaintenanceTasks
	public $objectgroupname;

	// showMaintenanceTasks
	// resolveMaintenanceTask:
	public $taskid;
	public $status;

	// showMaintenanceTasks
	public $duetype;

}
