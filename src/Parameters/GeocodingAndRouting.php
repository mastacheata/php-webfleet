<?php
/**
 * Class GeocodingAndRouting
 *
 * @filesource   GeocodingAndRouting.php
 * @created      14.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

use TomTom\Telematics\Parameters\ParameterInterface;

/**
 * Table 4-238: Parameters specific to geocodeAddress
 * Table 4-241: Parameters specific to calcRouteSimpleExtern
 */
class GeocodingAndRouting extends ParameterBase implements ParameterInterface{

	/**
	 * Defines type of route type for calculation of estimated time of arrival. Possible values are:
	 *
	 * 0 - Quickest
	 * 1 - Shortest
	 * 2 - Avoid motorway
	 * 3 - Walk
	 * 4 - Bicycle
	 * 5 - Speed limited
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var int
	 */
	public $route_type = 0;

	/**
	 *Defines if traffic information needs to be taken into account for calculating the route and estimated time of arrival.
	 *
	 * Possible values are:
	 *
	 * 0 - don’t use traffic
	 * 1 - use traffic
	 *
	 * If use_traffic is set to 1, the current traffic situation is used to calculate the best route and the
	 * estimated time of arrival. This works only if the departure time is less than 30 minutes in the future.
	 *
	 * Default:
	 *
	 * if start_datetime is used - 0
	 * if start_datetime is not used - 1
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var int
	 */
	public $use_traffic;

	/**
	 * Defines the departure date and time. If specified, over rules start_day and start_time.
	 *
	 * Defaults to the current day and time.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var string (dateTime)
	 */
	public $start_datetime;

	/**
	 *Defines the weekday of departure. If start_day is specified it is used together with start_time,
	 * overruling the default of start_datetime. Case-sensitive.
	 *
	 * Possible values are:
	 *
	 * mon
	 * tue
	 * wed
	 * thu
	 * fri
	 * sat
	 * sun
	 * today
	 *
	 * Defaults to the current day.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var string
	 */
	public $start_day;

	/**
	 * Defines the departure time. If start_time is specified, it is used together with start_day
	 * overruling the default of start_datetime.
	 *
	 * Defaults to the current time.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var string
	 */
	public $start_time;

	/**
	 * Defines if toll roads should be avoided for and the route calculation.
	 *
	 * Possible values are:
	 *
	 * 0 - Avoid toll roads
	 * 1 - Include toll roads
	 *
	 * Defaults to 1.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var int
	 */
	public $use_tollroads;

	/**
	 * Geographic latitude in the WGS84 coordinate system.
	 *
	 * Unit of measurement is micro degrees (10-6 grd). Transformation from degree,
	 * minutes and seconds can be done with the following calculation:
	 *
	 * (degrees + minutes/60 + seconds/3600) * 106 and rounding to an integer.
	 *
	 * @link https://en.wikipedia.org/wiki/Geographic_coordinate_conversion
	 *
	 * This parameter is required.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var int
	 */
	public $start_latitude;

	/**
	 * Geographic latitude in the WGS84 coordinate system.
	 *
	 * This parameter is required.
	 *
	 * @see $start_latitude
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var int
	 */
	public $start_longitude;

	/**
	 * Geographic latitude in the WGS84 coordinate system.
	 *
	 * This parameter is required.
	 *
	 * @see $start_latitude
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var int
	 */
	public $end_latitude;

	/**
	 * Geographic latitude in the WGS84 coordinate system.
	 *
	 * This parameter is required.
	 *
	 * @see $start_latitude
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::calcRouteSimpleExtern
	 *
	 * @var int
	 */
	public $end_longitude;


	/**
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::geocodeAddress
	 *
	 * @var string (50)
	 */
	public $addrstreet;

	/**
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::geocodeAddress
	 *
	 * @var string (10)
	 */
	public $addrstreetnumber;

	/**
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::geocodeAddress
	 *
	 * @var string (10)
	 */
	public $addrzip;

	/**
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::geocodeAddress
	 *
	 * @var string (50)
	 */
	public $addrcity;

	/**
	 * ISO 3166-1 alpha-2 code for the country (capital letters)
	 *
	 * This parameter is required.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::geocodeAddress
	 *
	 * @var string (2)
	 */
	public $addrcountry = 'DE';

	/**
	 * 0 = TomTom Geo Coder Version 1
	 * 2 = TomTom Geo Coder Version 2 (new TomTom Geo Coder)
	 *
	 * The new TomTom Geo Coder provides the best results and always the latest maps.
	 * It is preferable to use it. The new TomTom Geo Coder has relatively strict requirements
	 * regarding the exact naming of locations searched for.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::geocodeAddress
	 *
	 * @var int
	 */
	public $provider = 2;

	/**
	 * Address to geocode in unstructured format. This string can contain all parts of the address separated using
	 * spaces. Example:
	 *
	 * Oosterdoksstraat 114 Amsterdam NL
	 *
	 * Note: When you use freetext search we recommend to not use the structured parameters.
	 * The closer a freetext query is to a structured formatted address the better results you will achieve.
	 * Using freetext search you can also search for POIs. This depends on the country and the availablility of POI
	 * information.
	 *
	 * @see \TomTom\Telematics\Endpoint\Interfaces\GeocodingAndRouting::geocodeAddress
	 *
	 * @var string (512)
	 */
	public $freetext;

}
