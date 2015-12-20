<?php
/**
 * Interface Orders
 *
 * @filesource   Orders.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\Orders as OrderParams;

/**
 * 4.3 Orders
 */
interface Orders{

	/**
	 * 4.3.1 sendOrderExtern
	 *
	 * The sendOrderExtern operation allows you to send an order message to an object.
	 * The message is sent asynchronously and therefore a positive result of this operation
	 * does not indicate that the message was sent to the object successfully.
	 *
	 * Note: On the TomTom navigation device, the most recent order is shown at the top of the list of orders.
	 * But if you tap the 'new order' button in the Driving View, the oldest order is listed first.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function sendOrderExtern(OrderParams $params);

	/**
	 * 4.3.2 sendDestinationOrderExtern
	 *
	 * The sendDestinationOrderExtern operation allows you to send an order message together with target
	 * coordinates for a navigation system connected to the in-vehicle unit.
	 * The message is sent asynchronously and therefore a positive result of this operation does not
	 * indicate that the message was sent to the object successfully.
	 *
	 * Note: On the TomTom navigation device, the most recent order is shown at the top of the list of orders.
	 * But if you tap the 'new order' button in the Driving View, the oldest order is listed first.
	 *
	 * Use with ISO8601 date and time formats. If used in conjunction with useISO8601=true,
	 * you need to take care of specifying the time zone as otherwise UTC will be assumed by definition.
	 * Therefore you should always provide a time zone definition with orderdate,
	 * e.g. 2009-01-20T+01:00 and provide your local time part to ordertime.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function sendDestinationOrderExtern(OrderParams $params);

	/**
	 * 4.3.3 updateOrderExtern
	 *
	 * Updates an order that was submitted with sendOrderExtern.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function updateOrderExtern(OrderParams $params);

	/**
	 * 4.3.4 updateDestinationOrderExtern
	 *
	 * Updates an order that was submitted with sendDestinationOrderExtern or with insertDestinationOrderExtern.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function updateDestinationOrderExtern(OrderParams $params);

	/**
	 * 4.3.5 insertDestinationOrderExtern
	 *
	 * The insertDestinationOrderExtern operation allows you to transmit an order message to WEBFLEET.
	 * The message is not sent and must be manually dispatched to an object within WEBFLEET.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function insertDestinationOrderExtern(OrderParams $params);

	/**
	 * 4.3.6 cancelOrderExtern
	 *
	 * Cancels orders that were submitted using one of sendDestinationOrderExtern,
	 * insertDestinationOrderExtern or sendOrderExtern.
	 *
	 * @param string $orderid (20)
	 */
	public function cancelOrderExtern($orderid);

	/**
	 * 4.3.7 assignOrderExtern
	 *
	 * Assigns an existing order to an object and can be used to accomplish the following:
	 *
	 * - send an order that was inserted before using insertDestinationOrderExtern
	 * - resend an order that has been rejected or cancelled
	 *
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function assignOrderExtern(OrderParams $params);

	/**
	 * 4.3.8 reassignOrderExtern
	 *
	 * Reassigns an order that was submitted using one of sendDestinationOrderExtern,
	 * insertDestinationOrderExtern or sendOrderExtern to another object.
	 * This is done by cancelling the order on the old object that is currently assigned
	 * to this order and assigning the new object to the order. The order is then sent to the new object.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function reassignOrderExtern(OrderParams $params);

	/**
	 * 4.3.9 deleteOrderExtern
	 *
	 * Deletes an order from a device and optionally marks it as deleted in WEBFLEET.
	 * Supported for the stand-alone TomTom navigation devices connected to
	 * WEBFLEET and the TomTom navigation devices connected to LINK 5xx/4xx/3xx.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function deleteOrderExtern(OrderParams $params);

	/**
	 * 4.3.10 clearOrdersExtern
	 *
	 * Removes all orders from the device and optionally marks them as deleted in WEBFLEET.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function clearOrdersExtern(OrderParams $params);

	/**
	 * 4.3.11 showOrderReportExtern
	 *
	 * Shows a list of orders that match the search parameters.
	 * Each entry shows the order details and current status information.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function showOrderReportExtern(OrderParams $params);

	/**
	 * 4.3.12 showOrderWaypoints
	 *
	 * This action retrieves the waypoints for an itinerary order with additional information on the validity and state.
	 * The waypoints are sorted in the same order which was used when creating the itinerary.
	 * Itinerary orders (predefined routes over the air) are supported on all TomTom PRO devices with
	 * software version 10.537 or higher.
	 *
	 * @param \TomTom\Telematics\Parameters\Orders $params
	 */
	public function showOrderWaypoints(OrderParams $params);

}
