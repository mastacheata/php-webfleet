<?php
/**
 * Interface Events
 *
 * @filesource   Events.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Endpoints
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

/**
 * 4.7 Events
 */
interface Events{

	/**
	 * 4.7.1 showEventReportExtern
	 *
	 * Provides a list of event notifications.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events          $params
	 * @param array|\TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilterParams
	 */
	public function showEventReportExtern($params = null, $dateRangeFilterParams = null);

	/**
	 * 4.7.2 acknowledgeEventExtern
	 *
	 * Flags an event at an alarmed level as acknowledged.
	 * The event level will be set to the next lower level.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events $params
	 */
	public function acknowledgeEventExtern($params);

	/**
	 * 4.7.3 resolveEventExtern
	 *
	 * Flags an event below an alarmed level as resolved.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events $params
	 */
	public function resolveEventExtern($params);

	/**
	 * 4.7.4 getEventForwardConfigs
	 *
	 * This action returns event forwarding configurations.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events $params
	 */
	public function getEventForwardConfigs($params = null);

	/**
	 * 4.7.5 getEventForwardConfigRecipients
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events $params
	 */
	public function getEventForwardConfigRecipients($params);

	/**
	 * 4.7.6 insertEventForwardConfig
	 *
	 * Using insertEventForwardConfig you can create a new event forwarding configuration.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events $params
	 */
	public function insertEventForwardConfig($params);

	/**
	 * 4.7.7 updateEventForwardConfig
	 *
	 * Using updateEventForwardConfig you can update an existing event forwarding configuration.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events $params
	 */
	public function updateEventForwardConfig($params);

	/**
	 * 4.7.8 deleteEventForwardConfig
	 *
	 * Using deleteEventForwardConfig you can delete an existing event forwarding configuration.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Events $params
	 */
	public function deleteEventForwardConfig($params);

}
