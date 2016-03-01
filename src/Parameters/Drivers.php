<?php
/**
 * Class Drivers
 *
 * @filesource   Drivers.php
 * @created      17.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-113: Parameters specific to showDriverReportExtern
 * Table 4-116: Parameters specific to insertDriverExtern
 * Table 4-118: Parameters specific to updateDriverExtern
 * Table 4-120: Parameters specific to deleteDriverExtern
 * Table 4-122: Parameters specific to showOptiDriveIndicator
 * Table 4-125: Parameters specific to showDriverGroups
 * Table 4-128: Parameters specific to showDriverGroupDrivers
 * Table 4-131: Parameters specific to attachDriverToGroup
 * Table 4-133: Parameters specific to detachDriverFromGroup
 * Table 4-135: Parameters specific to insertDriverGroup
 * Table 4-137: Parameters specific to deleteDriverGroup
 * Table 4-139: Parameters specific to updateDriverGroup
 * Table 4-141: Parameters specific to attachDriverToVehicle
 * Table 4-143: Parameters specific to detachDriverFromVehicle
 */
class Drivers extends ParameterBase implements ParameterInterface{

	// showDriverReportExtern
	// insertDriverExtern
	// updateDriverExtern
	// deleteDriverExtern
	// showOptiDriveIndicator
	// showDriverGroupDrivers
	// attachDriverToGroup
	// detachDriverFromGroup
	// attachDriverToVehicle
	// detachDriverFromVehicle
	public $driverno;
	public $driveruid;

	// showDriverReportExtern
	public $filterstring;
	public $ungroupedonly;

	// updateDriverExtern
	// insertDriverExtern
	public $name;
	public $name2;
	public $name3;
	public $company;
	public $code;
	public $description;
	public $addrno;
	public $country;
	public $zip;
	public $city;
	public $street;
	public $telmobile;
	public $telprivate;
	public $pin;
	public $email;
	public $dt_cardid;
	public $dt_cardcountry;
	public $rll_buttonid;

	// updateDriverExtern
	public $driverno_old;

	// showOptiDriveIndicator
	// showDriverGroups
	// showDriverGroupDrivers
	// attachDriverToGroup
	// detachDriverFromGroup
	// insertDriverGroup
	// deleteDriverGroup
	// updateDriverGroup
	public $drivergroupname;

	// updateDriverGroup
	public $drivergroupname_old;

	// attachDriverToVehicle
	// detachDriverFromVehicle
	public $objectno;
	public $objectuid;

}
