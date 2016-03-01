<?php
/**
 * Class ConfigurationAndSecurity
 *
 * @filesource   ConfigurationAndSecurity.php
 * @created      18.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-244: Parameters specific to showSettings
 * Table 4-252: Parameters specific to updateAccountOrderState
 * Table 4-256: Parameters specific to updateAccountOrderAutomation
 * Table 4-260: Parameters specific to getStatusMessages
 * Table 4-263: Parameters specific to setVehicleConfig
 * Table 4-265: Parameters specific to getVehicleConfig
 * Table 4-268: Parameters specific to setStatusMessages
 * Table 4-270: Parameters specific to setAccountStatusMessages
 */
class ConfigurationAndSecurity extends ParameterBase implements ParameterInterface{

	// showSettings
	public $target_username;

	// updateAccountOrderState
	// updateAccountOrderAutomation
	public $enabled;

	// updateAccountOrderState
	public $orderstate;
	public $eventlevel;

	// updateAccountOrderAutomation
	public $orderautomation;

	// getStatusMessages
	// setVehicleConfig
	// getVehicleConfig
	// setStatusMessages
	public $objectno;
	public $objectuid;

	// setVehicleConfig
	public $ign_tripstart_timeout;
	public $ign_tripstop_timeout;
	public $standstill_timeout;

	// setStatusMessages
	public $reset;

	// setStatusMessages
	// setAccountStatusMessages
	public $ts_txt_1;
	public $ts_txt_2;
	public $ts_txt_3;
	public $ts_txt_4;
	public $ts_txt_5;
	public $ts_txt_6;
	public $ts_txt_7;
	public $ts_txt_8;
	public $ts_txt_9;
	public $ts_txt_10;
	public $ts_txt_11;
	public $ts_txt_12;
	public $ts_txt_13;
	public $ts_txt_14;
	public $ts_txt_15;

	public $ts_el_1;
	public $ts_el_2;
	public $ts_el_3;
	public $ts_el_4;
	public $ts_el_5;
	public $ts_el_6;
	public $ts_el_7;
	public $ts_el_8;
	public $ts_el_9;
	public $ts_el_10;
	public $ts_el_11;
	public $ts_el_12;
	public $ts_el_13;
	public $ts_el_14;
	public $ts_el_15;

	public $os_txt_1;
	public $os_txt_2;
	public $os_txt_3;
	public $os_txt_4;
	public $os_txt_5;
	public $os_txt_6;
	public $os_txt_7;
	public $os_txt_8;
	public $os_txt_9;
	public $os_txt_10;
	public $os_txt_11;
	public $os_txt_12;
	public $os_txt_13;
	public $os_txt_14;
	public $os_txt_15;

	public $os_el_1;
	public $os_el_2;
	public $os_el_3;
	public $os_el_4;
	public $os_el_5;
	public $os_el_6;
	public $os_el_7;
	public $os_el_8;
	public $os_el_9;
	public $os_el_10;
	public $os_el_11;
	public $os_el_12;
	public $os_el_13;
	public $os_el_14;
	public $os_el_15;

}
