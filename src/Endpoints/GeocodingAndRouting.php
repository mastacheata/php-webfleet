<?php
/**
 * Interface GeocodingAndRouting
 *
 * @filesource   GeocodingAndRouting.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\GeocodingAndRouting as GeocodingAndRoutingParams;

/**
 * 4.10 Geocoding and routing
 */
interface GeocodingAndRouting{

	/**
	 * 4.10.1 geocodeAddress
	 *
	 * Geocodes the address provided as request parameters and returns all possible matches, one per line.
	 *
	 * @param \TomTom\Telematics\Parameters\GeocodingAndRouting $params
	 */
	public function geocodeAddress(GeocodingAndRoutingParams $params);

	/**
	 * 4.10.2 calcRouteSimpleExtern
	 *
	 * Determines the route from a start location to an end location and calculates the
	 * resulting estimated time of arrival for a specific route-type.
	 * Optionally IQ Routes and/or HD Traffic information can be included.
	 *
	 * @param \TomTom\Telematics\Parameters\GeocodingAndRouting $params
	 */
	public function calcRouteSimpleExtern(GeocodingAndRoutingParams $params);

}
