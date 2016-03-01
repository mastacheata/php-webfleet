<?php
/**
 * Class Events
 *
 * @filesource   Events.php
 * @created      17.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-168: Parameters specific to showEventReportExtern
 * Table 4-171: Parameters specific to acknowledgeEventExtern
 * Table 4-173: Parameters specific to resolveEventExtern
 * Table 4-175: Parameters specific to getEventForwardConfigs
 * Table 4-178: Parameters specific to getEventForwardConfigRecipients
 * Table 4-181: Parameters specific to insertEventForwardConfig
 * Table 4-184: Parameters specific to updateEventForwardConfig
 * Table 4-186: Parameters specific to deleteEventForwardConfig
 */
class Events extends ParameterBase implements ParameterInterface{

	// showEventReportExtern
	// getEventForwardConfigs
	// insertEventForwardConfig
	// updateEventForwardConfig
	public $objectno;
	public $objectuid;

	// showEventReportExtern
	public $eventlevel_cur;
	public $resolved;
	public $acknowledged;

	// acknowledgeEventExtern
	// resolveEventExtern
	public $eventid;

	// getEventForwardConfigs
	// insertEventForwardConfig
	// updateEventForwardConfig
	// updateEventForwardConfig
	public $objectgroupname;
	public $eventlevel;

	// getEventForwardConfigRecipients
	// updateEventForwardConfig
	// deleteEventForwardConfig
	public $eventforwardconfiguid;

	// insertEventForwardConfig
	// updateEventForwardConfig
	public $recipient;

}
