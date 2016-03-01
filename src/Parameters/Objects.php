<?php
/**
 *
 * @filesource   Objects.php
 * @created      16.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Objects
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Class Objects
 */
class Objects extends ParameterBase implements ParameterInterface{

	public $objectno;
	public $objectuid;
	public $objectgroupname;
	public $objectgroupuid;

	/**
	 * @see \TomTom\Telematics\Endpoint\Interfaces\Objects::getObjectFeatures
	 */
	public $feature;


	/**
	 * getObjectFeatures
	 * updateVehicle
	 * showObjectReport
	 * showVehicleReportExtern
	 */
	public $externalid;

	/**
	 * showNearestVehicles
	 */
	public $addrno;
	public $latitude;
	public $longitude;
	public $priority;
	public $maxdistance;

	/**
	 * updateContractInfo
	 */
	public $referenceno;

	/**
	 * updateObjectGroup
	 */
	public $objectgroupname_old;

	/**
	 * updateVehicle
	 */
	public $vehicletype;
	public $vehiclecolor;
	public $identnumber;
	public $registrationdate;
	public $denotation;
	public $licenseplatenumber;
	public $speedlimit;
	public $fuelconsumption;
	public $fueltype;
	public $netweight;
	public $maxweight;
	public $netload;
	public $maxload;
	public $numaxles;
	public $length;
	public $width;
	public $height;
	public $description;
	public $power;
	public $enginesize;
	public $reset_fuelavg;
	public $odometer;
	public $rpmlimit;
	public $ep_btaddress;
	public $rll_btaddress;
	public $fueltanksize;

	/**
	 * updateVehicle
	 * showVehicleReportExtern
	 */
	public $ep_type;

	/**
	 * showObjectReport
	 */
	public $ungroupedonly;

	/**
	 * showObjectReport
	 * showVehicleReportExtern
	 */
	public $filterstring;

	/**
	 * switchOutput
	 */
	public $status;

}
