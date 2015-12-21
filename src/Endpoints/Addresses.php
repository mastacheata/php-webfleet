<?php
/**
 * Interface Addresses
 *
 * @filesource   Addresses.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Endpoints
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

/**
 * 4.6 Addresses
 */
interface Addresses{

	/**
	 * 4.6.1 showAddressReportExtern
	 *
	 * This action returns a list of addresses matching the parameters and filters.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function showAddressReportExtern($params = null);

	/**
	 * 4.6.2 showAddressGroupReportExtern
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function showAddressGroupReportExtern($params = null);

	/**
	 * 4.6.3 showAddressGroupAddressReportExtern
	 *
	 * Shows a list with all associations between addresses and address groups.
	 * Each address can be in more than one address group, but must not necessarily belong to a group.
	 * The relationship between addresses and address groups is of m:n cardinality.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function showAddressGroupAddressReportExtern($params = null);

	/**
	 * 4.6.4 insertAddressExtern
	 *
	 * Inserts an address record.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function insertAddressExtern($params);

	/**
	 * 4.6.5 updateAddressExtern
	 *
	 * Updates an existing address record.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function updateAddressExtern($params);

	/**
	 * 4.6.6 deleteAddressExtern
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function deleteAddressExtern($params);

	/**
	 * 4.6.7 attachAddressToGroupExtern
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function attachAddressToGroupExtern($params);

	/**
	 * 4.6.8 detachAddressFromGroupExtern
	 *
	 * Deletes the assignment of an address to an address group.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function detachAddressFromGroupExtern($params);

	/**
	 * 4.6.9 insertAddressGroupExtern
	 *
	 * This action creates an address group in an account.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function insertAddressGroupExtern($params);

	/**
	 * 4.6.10 deleteAddressGroupExtern
	 *
	 * This action deletes an address group and the assignments of all addresses assigned to that group.
	 * With this action you can also delete all addresses that are assigned to the address group.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Addresses $params
	 */
	public function deleteAddressGroupExtern($params);

}
