<?php
/**
 *
 * @filesource   EndpointHandler.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics;

use chillerlan\TinyCurl\URL;
use chillerlan\TinyCurl\Request;
use chillerlan\TinyCurl\RequestOptions;
use TomTom\Telematics\Parameters\Authentication;
use TomTom\Telematics\Parameters\DateRangeFilter;
use TomTom\Telematics\Parameters\General;
use TomTom\Telematics\Parameters\ParameterInterface;
use TomTom\Telematics\WebfleetOptions;

/**
 * Class EndpointHandler
 */
class EndpointHandler{

	/**
	 * https://connect.webfleet.tomtomwork.com/extern/
	 * https://csv.business.tomtom.com/extern/
	 */
	const API_BASE = 'https://connect.webfleet.tomtomwork.com/extern/';

	/**
	 * @todo EndpointInterface::getParameterInterfaceParams()
	 *       self::getParameterInterfaceParams()
	 *       self::checkRequiredParams()
	 *       ...
	 *
	 * @var array
	 */
	protected $queryParams = [];

	/**
	 * @var array
	 */
	protected $requiredParams = [];

	/**
	 * @var array
	 */
	protected $possibleParams = [];

	/**
	 * [requests, seconds]
	 *
	 * @var array
	 */
	protected $requestLimits = [10, 60];

	/**
	 * @var \TomTom\Telematics\WebfleetOptions
	 */
	protected $webfleetOptions;

	/**
	 * @var \TomTom\Telematics\Parameters\Authentication
	 */
	private $authenticationParams;

	/**
	 * @var \TomTom\Telematics\Parameters\General
	 */
	private $generalParams;

	/**
	 * @var \TomTom\Telematics\Parameters\ParameterInterface
	 */
	private $parameterInterface;

	/**
	 * @var \TomTom\Telematics\Parameters\DateRangeFilter
	 */
	private $dateRangeFilterParams;

	/**
	 * EndpointHandler constructor.
	 *
	 * @param \TomTom\Telematics\WebfleetOptions               $webfleetOptions
	 * @param \TomTom\Telematics\Parameters\Authentication     $authenticationParams
	 * @param \TomTom\Telematics\Parameters\General            $generalParams
	 * @param \TomTom\Telematics\Parameters\ParameterInterface $parameterInterface
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter    $dateRangeFilterParams
	 */
	public function __construct(
		WebfleetOptions $webfleetOptions,
		Authentication $authenticationParams,
		General $generalParams,
		ParameterInterface $parameterInterface = null,
		DateRangeFilter $dateRangeFilterParams = null
	){
		$this->webfleetOptions       = $webfleetOptions;
		$this->authenticationParams  = $authenticationParams;
		$this->generalParams         = $generalParams;
		$this->parameterInterface    = $parameterInterface;
		$this->dateRangeFilterParams = $dateRangeFilterParams;

		// @todo all we don't need straight to the handler
		// new Request($http, $webfleetOptions, $authenticationParams, $generalParams, $parameterInterface, $dateRangeFilterParams)
	}

	/**
	 * nothing happens until this is called
	 * @todo
	 */
	public function get(){

		$params = [];

		foreach(['generalParams','authenticationParams','dateRangeFilterParams','parameterInterface',] as $group){

			foreach($this->{$group} as $k => $v){
				if($v !== null){
					$params[$k] = $v;
				}
			}

		}

		$requestOptions = new RequestOptions;
		$requestOptions->ca_info = $this->webfleetOptions->cacert;

		$request = new Request($requestOptions);

		$response = $request->fetch(new URL(self::API_BASE, $params))->json;
		var_dump($response);
		return $response;
	}
}
