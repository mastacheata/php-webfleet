<?php
/**
 * Interface LINKconnect
 *
 * @filesource   LINKconnect.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\LINKconnect as LINKconnectParams;

/**
 * 4.16 LINK.connect
 */
interface LINKconnect{

	/**
	 * 4.16.2 sendAuxDeviceData
	 *
	 * sendAuxDeviceData sends the given opaque payload data to the specified thrid
	 * party device using the indicated WEBFLEET unit/LINK device.
	 *
	 * Maximum allowed data size is 2560 byte raw opaque payload data. The base64
	 * encoding required for transmission of opaque payload through the web service API
	 * does not count as raw payload data size.
	 *
	 * There can only be one pending aux device data message for a LINK at a time.
	 * Further calls to sendAuxDeviceData for the same LINK will be rejected until the
	 * data is transferred to the LINK.
	 *
	 * To track the status of the opaque payload message once sent, please use the
	 * WEBFLEET.connect Queue Service.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function sendAuxDeviceData(LINKconnectParams $params);

	/**
	 * 4.16.3 getLocalAuxDeviceConfig
	 *
	 * getLocalAuxDeviceConfig returns the stored and applicable configuration of a
	 * WEBFLEET unit regarding Bluetooth connectivity.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function getLocalAuxDeviceConfig(LINKconnectParams $params);

	/**
	 * 4.16.4 configureLocalAuxDevice
	 *
	 * configureLocalAuxDevice allows the integration server backend to change
	 * configuration settings relating to aux devices. Currently the settings are Bluetooth
	 * specific. All configuration parameters are optional. Parameters not specified in the
	 * request will not be changed.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function configureLocalAuxDevice(LINKconnectParams $params);

	/**
	 * 4.16.5 getRemoteAuxDeviceConfig
	 *
	 * getRemoteAuxDeviceConfig returns the stored and applicable configuration of a
	 * WEBFLEET unit regarding Bluetooth remote aux devices.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function getRemoteAuxDeviceConfig(LINKconnectParams $params);

	/**
	 * 4.16.6 configureRemoteAuxDevice
	 *
	 * configureRemoteAuxDevice allows the integration server backend to change
	 * configuration settings relating to a remote aux device. Currently the settings are
	 * Bluetooth specific. All configuration parameters are optional. Parameters not
	 * specified in the request will not be changed. To remove a value specify null or use
	 * an empty parameter value.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function configureRemoteAuxDevice(LINKconnectParams $params);

	/**
	 * 4.16.7 removeRemoteAuxDeviceConfig
	 *
	 * removeRemoteAuxDeviceConfig removes a remote aux device configuration.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function removeRemoteAuxDeviceConfig(LINKconnectParams $params);

	/**
	 * 4.16.8 clearAuxDeviceDataQueue
	 *
	 * clearAuxDeviceDataQueue removes data from the outgoing queue of the LINK.
	 * This can be used to remove stale data for third party devices that do not exist
	 * anymore or that are unlikely to connect anymore. The LINK does not remove
	 * outgoing data by itself because it cannot decide if a third party device will connect sometime.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function clearAuxDeviceDataQueue(LINKconnectParams $params);

	/**
	 * 4.16.9 resetAuxDeviceData
	 *
	 * If the LINK does not respond to outgoing aux device data sent with
	 * sendAuxDeviceData the transfer status is incomplete. In such cases
	 * resetAuxDeviceData must be used to reset the outgoing data transfer and get
	 * back to a consistent state between integration server backend and aux device. This
	 * is important because you cannot send new data until the current transfer is
	 * completed or cancelled/reset. If the opaque payload to be delivered with the original
	 * send is still important from the view of LINK.connect integration solution, the
	 * integration server backend should repeat the sendAuxDeviceData operation after the reset.
	 *
	 * @param \TomTom\Telematics\Parameters\LINKconnect $params
	 */
	public function resetAuxDeviceData(LINKconnectParams $params);

}
