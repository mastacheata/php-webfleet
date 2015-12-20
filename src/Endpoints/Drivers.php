<?php
/**
 * Interface Drivers
 *
 * @filesource   Drivers.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\Drivers as DriverParams;

/**
 * 4.5 Drivers
 */
interface Drivers{

	/**
	 * 4.5.2 showDriverReportExtern
	 *
	 * Lists all drivers matching the indicated parameters and filters.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function showDriverReportExtern(DriverParams $params = null);

	/**
	 * 4.5.3 insertDriverExtern
	 *
	 * This action creates a driver.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function insertDriverExtern(DriverParams $params);

	/**
	 * 4.5.4 updateDriverExtern
	 *
	 * This action updates driver details.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function updateDriverExtern(DriverParams $params);

	/**
	 * 4.5.5 deleteDriverExtern
	 *
	 * This action deletes the indicated driver.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function deleteDriverExtern(DriverParams $params);

	/**
	 * 4.5.6 showOptiDriveIndicator
	 *
	 * showOptiDriveIndicator shows the OptiDrive indicator per driver, the values of all its
	 * influencing variables and the factors each of them is calculated from for a defined period.
	 * The start and end of this period can be adjusted up to a maximum time frame of seven days within the last three months.
	 * The OptiDrive indicator for the defined period delivered by showOptiDriveIndicator
	 * is calculated from pre-aggregated values per calendar day.
	 * The aggregated results produced by showOptiDriveIndicator are based on information
	 * for each driver across multiple vehicles.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function showOptiDriveIndicator(DriverParams $params = null);

	/**
	 * 4.5.7 showDriverGroups
	 *
	 * This action retrieves a list of all driver groups.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function showDriverGroups(DriverParams $params = null);

	/**
	 * 4.5.8 showDriverGroupDrivers
	 *
	 * This action lists the assignment of drivers to driver groups. Each driver can be in no,
	 * one or more than one group.
	 *
	 * Using either or both parameters driverno and drivergroupname only according matches are returned.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function showDriverGroupDrivers(DriverParams $params);

	/**
	 * 4.5.9 attachDriverToGroup
	 *
	 * This action assigns a driver to a specific group.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function attachDriverToGroup(DriverParams $params);

	/**
	 * 4.5.10 detachDriverFromGroup
	 *
	 * This action detaches a driver from a specific driver group.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function detachDriverFromGroup(DriverParams $params);

	/**
	 * 4.5.11 insertDriverGroup
	 *
	 * This action creates a driver group.
	 *
	 * The group name must not start with "sys$".
	 *
	 * @param string $drivergroupname
	 */
	public function insertDriverGroup($drivergroupname);

	/**
	 * 4.5.12 deleteDriverGroup
	 *
	 * This action deletes a driver group and the assignments of all drivers to that group.
	 * The drivers detached through this action are not being deleted.
	 *
	 * @param string $drivergroupname
	 */
	public function deleteDriverGroup($drivergroupname);

	/**
	 * 4.5.13 updateDriverGroup
	 *
	 * This action allows to update the name of a driver group while retaining the
	 * assignment of drivers to that group.
	 *
	 * The group name must not start with "sys$".
	 *
	 * @param $drivergroupname
	 * @param $drivergroupname_old
	 */
	public function updateDriverGroup($drivergroupname, $drivergroupname_old);

	/**
	 * 4.5.14 attachDriverToVehicle
	 *
	 * Using attachDriverToVehicle you can manually assign a driver to a specific vehicle.
	 * If the driver was previously assigned to another vehicle, they will be automatically detached from that vehicle
	 * .
	 * This action cannot be executed when the driver is not manually assigned to another vehicle -
	 * that means by not using attachDriverToVehicle.
	 * Additionally, this action cannot be executed when a different driver is not manually assigned to
	 * the respective vehicle. This can be the case if the driver for example logs on to a vehicle
	 * by using a TomTom navigation device or a digital tachograph.
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function attachDriverToVehicle(DriverParams $params);

	/**
	 * 4.5.15 detachDriverFromVehicle
	 *
	 * Using detachDriverFromVehicle you can remove the manual assignment of a driver from a vehicle.
	 * This action cannot be executed if the driver was not manually assigned by using attachDriverToVehicle.
	 * This can be the case when the driver for example logged on to the vehicle using a TomTom navigation
	 * device or the digital tachograph.
	 *
	 *
	 * @param \TomTom\Telematics\Parameters\Drivers $params
	 */
	public function detachDriverFromVehicle(DriverParams $params);

}
