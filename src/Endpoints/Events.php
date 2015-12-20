<?php
/**
 * Interface Events
 *
 * @filesource   Events.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\DateRangeFilter;
use TomTom\Telematics\Parameters\Events as EventParams;

/**
 * 4.7 Events
 */
interface Events{

	/**
	 * 4.7.1 showEventReportExtern
	 *
	 * Provides a list of event notifications.
	 *
	 * @param \TomTom\Telematics\Parameters\Events          $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilterParams
	 */
	public function showEventReportExtern(EventParams $params = null, DateRangeFilter $dateRangeFilterParams = null);

	/**
	 * 4.7.2 acknowledgeEventExtern
	 *
	 * Flags an event at an alarmed level as acknowledged.
	 * The event level will be set to the next lower level.
	 *
	 * @param int $eventid
	 */
	public function acknowledgeEventExtern($eventid);

	/**
	 * 4.7.3 resolveEventExtern
	 *
	 * Flags an event below an alarmed level as resolved.
	 *
	 * @param int $eventid
	 */
	public function resolveEventExtern($eventid);

	/**
	 * 4.7.4 getEventForwardConfigs
	 *
	 * This action returns event forwarding configurations.
	 *
	 * @param \TomTom\Telematics\Parameters\Events $params
	 */
	public function getEventForwardConfigs(EventParams $params = null);

	/**
	 * 4.7.5 getEventForwardConfigRecipients
	 *
	 * @param string $eventforwardconfiguid
	 */
	public function getEventForwardConfigRecipients($eventforwardconfiguid);

	/**
	 * 4.7.6 insertEventForwardConfig
	 *
	 * Using insertEventForwardConfig you can create a new event forwarding configuration.
	 *
	 * @param \TomTom\Telematics\Parameters\Events $params
	 */
	public function insertEventForwardConfig(EventParams $params);

	/**
	 * 4.7.7 updateEventForwardConfig
	 *
	 * Using updateEventForwardConfig you can update an existing event forwarding configuration.
	 *
	 * @param \TomTom\Telematics\Parameters\Events $params
	 */
	public function updateEventForwardConfig(EventParams $params);

	/**
	 * 4.7.8 deleteEventForwardConfig
	 *
	 * Using deleteEventForwardConfig you can delete an existing event forwarding configuration.
	 *
	 * @param string $eventforwardconfiguid
	 */
	public function deleteEventForwardConfig($eventforwardconfiguid);

}
