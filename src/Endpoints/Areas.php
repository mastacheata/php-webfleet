<?php
/**
 * Interface Areas
 *
 * @filesource   Areas.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Endpoints
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

/**
 * 4.15 Areas
 */
interface Areas{

	/**
	 * 4.15.1 getAreas
	 *
	 * This actions returns a list of all areas that are currently configured within the account.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreas($params = null);

	/**
	 * 4.15.2 insertArea
	 *
	 * insertArea creates a new geographic area.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function insertArea($params);

	/**
	 * 4.15.3 deleteArea
	 *
	 * deleteArea deletes an area. All possibly existing vehicle assignments and
	 * schedules for this area will be deleted too.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function deleteArea($params);

	/**
	 * 4.15.4 updateArea
	 *
	 * updateArea updates the details of an existing geographic area.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function updateArea($params);

	/**
	 * 4.15.5 getAreaPoints
	 *
	 * This action returns a list of coordinates describing the geometric form and location
	 * of an area. getAreasPoints is only useful for areas in the shape of polygons or corridors.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreaPoints($params);

	/**
	 * 4.15.6 getAreaAssignments
	 *
	 * getAreaAssignments returns a list of vehicles and object groups, that are
	 * assigned to an area. Assignments can be used to limit the validity of the area to
	 * specific vehicles or object groups.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreaAssignments($params);

	/**
	 * 4.15.7 insertAreaAssignment
	 *
	 * insertAreaAssignment adds a new assignment of a vehicle or object group to a
	 * specified area. Assignments can be used to limit the validity of the area to individual
	 * vehicles or object groups.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function insertAreaAssignment($params);

	/**
	 * 4.15.8 deleteAreaAssignment
	 *
	 * deleteAreaAssignment deletes one or more vehicle or objectgroup assignments of an area.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function deleteAreaAssignment($params);

	/**
	 * 4.15.9 getAreaSchedules
	 *
	 * getAreaSchedules returns a list of days and times for which the area shall be
	 * effective. Schedules can be used to limit the validity of areas to specific days or time periods.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function getAreaSchedules($params);

	/**
	 * 4.15.10 insertAreaSchedule
	 *
	 * insertAdreaSchedule adds a list of weekdays and times for which the area shall
	 * be effective. Schedules can be used to limit the validity of areas in a temporal way.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function insertAreaSchedule($params);

	/**
	 * 4.15.11 deleteAreaSchedule
	 *
	 * deteleAreaSchedule deletes one or more schedules of an area.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Areas $params
	 */
	public function deleteAreaSchedule($params);

}
