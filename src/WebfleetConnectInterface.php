<?php
/**
 * Interface WebfleetConnectInterface
 *
 * @filesource   WebfleetConnectInterface.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Endpoints
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics;

use TomTom\Telematics\Endpoints\Addresses;
use TomTom\Telematics\Endpoints\Areas;
use TomTom\Telematics\Endpoints\ConfigurationAndSecurity;
use TomTom\Telematics\Endpoints\Drivers;
use TomTom\Telematics\Endpoints\Events;
use TomTom\Telematics\Endpoints\GeocodingAndRouting;
use TomTom\Telematics\Endpoints\LINKconnect;
use TomTom\Telematics\Endpoints\MessageQueues;
use TomTom\Telematics\Endpoints\Messages;
use TomTom\Telematics\Endpoints\MiscellaneousReports;
use TomTom\Telematics\Endpoints\Objects;
use TomTom\Telematics\Endpoints\Orders;
use TomTom\Telematics\Endpoints\Reporting;
use TomTom\Telematics\Endpoints\TripsAndWorkingTimes;
use TomTom\Telematics\Endpoints\UserManagement;
use TomTom\Telematics\Endpoints\VehicleMaintenance;

/**
 * This interface isn't actually implemented but instead internally dissected by the ReflectionClass since we use
 * __call(). It's main purpose is documentation.
 */
interface WebfleetConnectInterface extends
	MessageQueues,            // 4.1
	Objects,                  // 4.2
	Orders,                   // 4.3
	Messages,                 // 4.4
	Drivers,                  // 4.5
	Addresses,                // 4.6
	Events,                   // 4.7
	TripsAndWorkingTimes,     // 4.8
	MiscellaneousReports,     // 4.9
	GeocodingAndRouting,      // 4.10
	ConfigurationAndSecurity, // 4.11
	UserManagement,           // 4.12
	VehicleMaintenance,       // 4.13
	Reporting,                // 4.14
	Areas,                    // 4.15
	LINKconnect               // 4.16{

}
