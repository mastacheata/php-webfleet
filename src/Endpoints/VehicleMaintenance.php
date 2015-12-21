<?php
/**
 * Interface VehicleMaintenance
 *
 * @filesource   VehicleMaintenance.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Endpoints
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

/**
 * 4.13 Vehicle Maintenance
 */
interface VehicleMaintenance{

	/**
	 * 4.13.1 insertMaintenanceSchedule
	 *
	 * This action creates a new maintenance schedule and task for a specific object. When
	 * you have created a new maintenance schedule an ID for it will be returned.
	 *
	 * @param array|\TomTom\Telematics\Parameters\VehicleMaintenance $params
	 */
	public function insertMaintenanceSchedule($params);

	/**
	 * 4.13.2 updateMaintenanceSchedule
	 *
	 * When using updateMaintenanceSchedule, you only need to include the
	 * parameters for which you want to change or delete the values. If you include a
	 * parameter and do not indicate a value, the existing value will be deleted.
	 *
	 * @param array|\TomTom\Telematics\Parameters\VehicleMaintenance $params
	 */
	public function updateMaintenanceSchedule($params);

	/**
	 * 4.13.3 deleteMaintenanceSchedule
	 *
	 * This action deletes an existing maintenance schedule and all related tasks. Tasks
	 * that have already been read or completed are not being deleted.
	 *
	 * @param array|\TomTom\Telematics\Parameters\VehicleMaintenance $params
	 */
	public function deleteMaintenanceSchedule($params);

	/**
	 * 4.13.4 showMaintenanceSchedules
	 *
	 * This action retrieves a list of maintenance schedules.
	 *
	 * @param array|\TomTom\Telematics\Parameters\VehicleMaintenance $params
	 */
	public function showMaintenanceSchedules($params = null);

	/**
	 * 4.13.5 showMaintenanceTasks
	 *
	 * This action retrieves a list of maintenance tasks.
	 *
	 * @param array|\TomTom\Telematics\Parameters\VehicleMaintenance $params
	 */
	public function showMaintenanceTasks($params = null);

	/**
	 * 4.13.6 resolveMaintenanceTask
	 *
	 * This action resolves a maintenance task depending on the specified status.
	 *
	 * @param array|\TomTom\Telematics\Parameters\VehicleMaintenance $params
	 */
	public function resolveMaintenanceTask($params);

}
