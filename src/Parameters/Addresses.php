<?php
/**
 * Class Addresses
 *
 * @filesource   Addresses.php
 * @created      17.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-145: Parameters specific to showAddressReportExtern
 * Table 4-148: Parameters specific to showAddressGroupReportExtern
 * Table 4-151: Parameters specific to showAddressGroupAddressReportExtern
 * Table 4-154: Parameters specific to insertAddressExtern
 * Table 4-156: Parameters specific to updateAddressExtern
 * Table 4-158: Parameters specific to deleteAddressExtern
 * Table 4-160: Parameters specific to attachAddressToGroupExtern
 */
class Addresses extends ParameterBase implements ParameterInterface{

	// showAddressReportExtern
	// showAddressGroupReportExtern
	// showAddressGroupAddressReportExtern
	public $filterstring;

	// showAddressReportExtern
	// insertAddressExtern
	// updateAddressExtern
	// deleteAddressExtern
	// attachAddressToGroupExtern
	// detachAddressFromGroupExtern
	public $addrnr;

	// showAddressReportExtern
	// updateAddressExtern
	// deleteAddressExtern
	// attachAddressToGroupExtern
	// detachAddressFromGroupExtern
	public $addruid;

	// insertAddressExtern
	// updateAddressExtern
	// attachAddressToGroupExtern
	// detachAddressFromGroupExtern
	// deleteAddressGroupExtern
	public $addrgrpuid;

	// insertAddressExtern
	// updateAddressExtern
	// attachAddressToGroupExtern
	// detachAddressFromGroupExtern
	// insertAddressGroupExtern
	public $addrgrpname;

	// showAddressReportExtern
	public $addressgroupname; // duplicate! -> attachAddressToGroupExtern::$addrgrpname
	public $ungroupedonly;

	// insertAddressExtern
	// updateAddressExtern
	public $addrname1;
	public $addrname2;
	public $addrname3;
	public $addrstreet;
	public $addrzip;
	public $addrcity;
	public $addrcountry;
	public $addrregion;
	public $contact;
	public $teloffice;
	public $telmobile;
	public $telprivate;
	public $fax;
	public $mailaddr;
	public $radius;
	public $addrinfo;
	public $location;
	public $positiony;
	public $positionx;
	public $visible;
	public $color;
	public $mapcode;

	// deleteAddressGroupExtern
	public $deleteaddresses;

}
