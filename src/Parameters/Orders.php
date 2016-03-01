<?php
/**
 *
 * @filesource   Orders.php
 * @created      17.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Class Orders
 */
class Orders extends ParameterBase implements ParameterInterface{

	// sendOrderExtern
	// sendDestinationOrderExtern
	// updateOrderExtern
	// updateDestinationOrderExtern
	// insertDestinationOrderExtern
	// cancelOrderExtern
	// assignOrderExtern
	// reassignOrderExtern
	// deleteOrderExtern
	// showOrderReportExtern
	public $orderid;

	// sendOrderExtern
	// sendDestinationOrderExtern
	// updateOrderExtern
	// updateDestinationOrderExtern
	// insertDestinationOrderExtern
	public $ordertext;

	// sendOrderExtern
	// sendDestinationOrderExtern
	// updateOrderExtern
	// assignOrderExtern
	// reassignOrderExtern
	public $orderautomations;

	// sendOrderExtern
	// sendDestinationOrderExtern
	// assignOrderExtern
	// reassignOrderExtern
	// clearOrdersExtern
	// showOrderReportExtern
	public $objectno;
	public $objectuid;

	// sendOrderExtern
	// sendDestinationOrderExtern
	public $useorderstates;

	// sendDestinationOrderExtern
	// updateDestinationOrderExtern
	// insertDestinationOrderExtern
	public $orderdate;
	public $ordertime;
	public $arrivaltolerance;
	public $contact;
	public $contacttel;
	public $addrnr;
	public $longitude;
	public $latitude;
	public $country;
	public $zip;
	public $city;
	public $street;

	// sendDestinationOrderExtern
	// insertDestinationOrderExtern
	public $notify_enabled;
	public $notify_leadtime;
	public $wp;
	public $mapcode;

	// sendDestinationOrderExtern
	// insertDestinationOrderExtern
	// showOrderReportExtern
	public $ordertype;

	// deleteOrderExtern
	// clearOrdersExtern
	public $mark_deleted;

	// showOrderReportExtern
	public $objectgroupname;

}
