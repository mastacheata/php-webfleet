<?php
/**
 * Interface Addresses
 *
 * @filesource   Addresses.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\Addresses as AddressParams;

/**
 * 4.6 Addresses
 */
interface Addresses{

	/**
	 * 4.6.1 showAddressReportExtern
	 *
	 * This action returns a list of addresses matching the parameters and filters.
	 *
	 * @param \TomTom\Telematics\Parameters\Addresses $params
	 */
	public function showAddressReportExtern(AddressParams $params = null);

	/**
	 * 4.6.2 showAddressGroupReportExtern
	 *
	 * @param string $filterstring
	 */
	public function showAddressGroupReportExtern($filterstring = null);

	/**
	 * 4.6.3 showAddressGroupAddressReportExtern
	 *
	 * Shows a list with all associations between addresses and address groups.
	 * Each address can be in more than one address group, but must not necessarily belong to a group.
	 * The relationship between addresses and address groups is of m:n cardinality.
	 *
	 * @param string $filterstring
	 */
	public function showAddressGroupAddressReportExtern($filterstring = null);

	/**
	 * 4.6.4 insertAddressExtern
	 *
	 * Inserts an address record.
	 *
	 * @param \TomTom\Telematics\Parameters\Addresses $params
	 */
	public function insertAddressExtern(AddressParams $params);

	/**
	 * 4.6.5 updateAddressExtern
	 *
	 * Updates an existing address record.
	 *
	 * @param \TomTom\Telematics\Parameters\Addresses $params
	 */
	public function updateAddressExtern(AddressParams $params);

	/**
	 * 4.6.6 deleteAddressExtern
	 *
	 * @param \TomTom\Telematics\Parameters\Addresses $params
	 */
	public function deleteAddressExtern(AddressParams $params);

	/**
	 * 4.6.7 attachAddressToGroupExtern
	 *
	 * @param \TomTom\Telematics\Parameters\Addresses $params
	 */
	public function attachAddressToGroupExtern(AddressParams $params);

	/**
	 * 4.6.8 detachAddressFromGroupExtern
	 *
	 * Deletes the assignment of an address to an address group.
	 *
	 * @param \TomTom\Telematics\Parameters\Addresses $params
	 */
	public function detachAddressFromGroupExtern(AddressParams $params);

	/**
	 * 4.6.9 insertAddressGroupExtern
	 *
	 * This action creates an address group in an account.
	 *
	 * @param string $addrgrpname
	 */
	public function insertAddressGroupExtern($addrgrpname);

	/**
	 * 4.6.10 deleteAddressGroupExtern
	 *
	 * This action deletes an address group and the assignments of all addresses assigned to that group.
	 * With this action you can also delete all addresses that are assigned to the address group.
	 *
	 * @param \TomTom\Telematics\Parameters\Addresses $params
	 */
	public function deleteAddressGroupExtern(AddressParams $params);

}
