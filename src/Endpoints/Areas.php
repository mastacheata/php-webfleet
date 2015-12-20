<?php
/**
 * Interface Areas
 *
 * @filesource   Areas.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\Areas as AreaParams;

/**
 * 4.15 Areas
 */
interface Areas{

	/**
	 * 4.15.1 getAreas
	 *
	 * This actions returns a list of all areas that are currently configured within the account.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreas(AreaParams $params = null);

	/**
	 * 4.15.2 insertArea
	 *
	 * insertArea creates a new geographic area.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function insertArea(AreaParams $params);

	/**
	 * 4.15.3 deleteArea
	 *
	 * deleteArea deletes an area. All possibly existing vehicle assignments and
	 * schedules for this area will be deleted too.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function deleteArea(AreaParams $params);

	/**
	 * 4.15.4 updateArea
	 *
	 * updateArea updates the details of an existing geographic area.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function updateArea(AreaParams $params);

	/**
	 * 4.15.5 getAreaPoints
	 *
	 * This action returns a list of coordinates describing the geometric form and location
	 * of an area. getAreasPoints is only useful for areas in the shape of polygons or corridors.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreaPoints(AreaParams $params);

	/**
	 * 4.15.6 getAreaAssignments
	 *
	 * getAreaAssignments returns a list of vehicles and object groups, that are
	 * assigned to an area. Assignments can be used to limit the validity of the area to
	 * specific vehicles or object groups.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreaAssignments(AreaParams $params);

	/**
	 * 4.15.7 insertAreaAssignment
	 *
	 * insertAreaAssignment adds a new assignment of a vehicle or object group to a
	 * specified area. Assignments can be used to limit the validity of the area to individual
	 * vehicles or object groups.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function insertAreaAssignment(AreaParams $params);

	/**
	 * 4.15.8 deleteAreaAssignment
	 *
	 * deleteAreaAssignment deletes one or more vehicle or objectgroup assignments of an area.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function deleteAreaAssignment(AreaParams $params);

	/**
	 * 4.15.9 getAreaSchedules
	 *
	 * getAreaSchedules returns a list of days and times for which the area shall be
	 * effective. Schedules can be used to limit the validity of areas to specific days or time periods.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreaSchedules(AreaParams $params);

	/**
	 * 4.15.10 insertAreaSchedule
	 *
	 * insertAdreaSchedule adds a list of weekdays and times for which the area shall
	 * be effective. Schedules can be used to limit the validity of areas in a temporal way.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function insertAreaSchedule(AreaParams $params);

	/**
	 * 4.15.11 deleteAreaSchedule
	 *
	 * deteleAreaSchedule deletes one or more schedules of an area.
	 *
	 * @param \TomTom\Telematics\Parameters\Areas $params
	 */
	public function deleteAreaSchedule(AreaParams $params);

}
