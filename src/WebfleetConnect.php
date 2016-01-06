<?php
/**
 * Class WebfleetConnect
 *
 * @version      1.0.0
 *               API v.1.25.0
 *
 * @filesource   WebfleetConnect.php
 * @created      13.12.2015
 * @package      TomTom\Telematics
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics;

use Dotenv\Dotenv;
use GuzzleHttp\Client as Guzzle;
use ReflectionClass;
use TomTom\Telematics\Parameters\Authentication;
use TomTom\Telematics\Parameters\DateRangeFilter;
use TomTom\Telematics\Parameters\General;
use TomTom\Telematics\Parameters\ParameterInterface;

/**
 * main entry
 */
class WebfleetConnect{

	/**
	 * @var array
	 */
	private $methodMap = [];

	/**
	 * @var \GuzzleHttp\Client
	 */
	private $http;

	/**
	 * @var \TomTom\Telematics\WebfleetOptions
	 */
	private $webfleetOptions;

	/**
	 * @var \TomTom\Telematics\Parameters\Authentication
	 */
	private $authenticationParams;

	/**
	 * @var \TomTom\Telematics\Parameters\General
	 */
	private $generalParams;

	/**
	 * WebfleetConnect constructor.
	 *
	 * @param \TomTom\Telematics\WebfleetOptions           $webfleetOptions
	 * @param \TomTom\Telematics\Parameters\Authentication $authentication
	 * @param \TomTom\Telematics\Parameters\General        $generalParams
	 *
	 * @throws \TomTom\Telematics\WebfleetException
	 */
	public function __construct(WebfleetOptions $webfleetOptions, Authentication $authentication = null, General $generalParams = null){
		$this->mapApiMethods();
		$this->http = new Guzzle;

		$this->setOptions($webfleetOptions);
		$this->setGeneralParams($generalParams);
		$this->setAuthenticationParams($authentication);
	}

	/**
	 * @todo
	 * @return array
	 */
	public function __debugInfo(){
		return [
			'webfleetOptions'      => $this->webfleetOptions,
			'authenticationParams' => $this->authenticationParams,
			'generalParams'        => $this->generalParams,
			'methodMap'            => $this->methodMap,
		];
	}

	/**
	 * Maps the WebfleetConnectInterface methods -> Interface name
	 */
	private function mapApiMethods(){

		foreach((new ReflectionClass(WebfleetConnectInterface::class))->getMethods() as $method){
			$method->group = substr($method->class, strrpos($method->class, '\\') + 1);
			$this->methodMap[$method->name] = $method;
		}

	}


	/**
	 * @param \TomTom\Telematics\Parameters\Authentication $authenticationParams
	 *
	 * @return $this
	 * @throws \TomTom\Telematics\WebfleetException
	 */
	public function setAuthenticationParams(Authentication $authenticationParams = null){

		if(!$authenticationParams){
			$authenticationParams           = new Authentication;
			$authenticationParams->account  = getenv('WEBFLEET_ACCOUNT');
			$authenticationParams->username = getenv('WEBFLEET_USERNAME');
			$authenticationParams->password = getenv('WEBFLEET_PASSWORD');
			$authenticationParams->apikey   = getenv('WEBFLEET_APIKEY');
		}

		$this->authenticationParams = $authenticationParams;

		return $this;
	}

	/**
	 * @param \TomTom\Telematics\Parameters\General $generalParams
	 *
	 * @return $this
	 */
	public function setGeneralParams(General $generalParams = null){

		if(!$generalParams){
			$generalParams = new General;
		}

		$this->generalParams = $generalParams;

		return $this;
	}

	/**
	 * @param \TomTom\Telematics\WebfleetOptions $webfleetOptions
	 *
	 * @throws \TomTom\Telematics\WebfleetException
	 */
	private function setOptions(WebfleetOptions $webfleetOptions){

		// check directories
		if(empty($webfleetOptions->storageDir) || !is_dir($webfleetOptions->storageDir)){
			throw new WebfleetException('storageDir does not exist');
		}

		// todo: check path end separator
		if(empty($webfleetOptions->configDir) || !is_dir($webfleetOptions->configDir)){
			throw new WebfleetException('configDir does not exist');
		}

		if(empty($webfleetOptions->configFilename)){
			throw new WebfleetException('configFilename cannot be empty');
		}

		// check the config file
		$cfgfile = $webfleetOptions->configDir.$webfleetOptions->configFilename;

		if(!file_exists($cfgfile)){
			throw new WebfleetException($cfgfile.' does not exist');
		}

		// load the base credentials into the environment
		$dotenv = new Dotenv($webfleetOptions->configDir, $webfleetOptions->configFilename);
		$dotenv->load();

		// check the environment values
		foreach(['ACCOUNT', 'USERNAME', 'PASSWORD', 'APIKEY',] as $key){

			if(!getenv('WEBFLEET_'.$key)){
				throw new WebfleetException('WEBFLEET_'.$key.' does not exist in '.$cfgfile);
			}

		}

		$this->webfleetOptions = $webfleetOptions;
	}


	/*****************
	 * API Endpoints *
	 *****************/

	/**
	 * It's magic!
	 *
	 * @param string $name
	 * @param array  $arguments
	 *
	 * @return \TomTom\Telematics\EndpointHandler
	 */
	public function __call($name, $arguments){
		return $this->loadEndpoint($name, ...$arguments);
	}

	/**
	 * @param string                                                 $method
	 * @param array|\TomTom\Telematics\Parameters\ParameterInterface $params
	 * @param array|\TomTom\Telematics\Parameters\DateRangeFilter    $rangeFilter
	 *
	 * @return \TomTom\Telematics\EndpointHandler
	 * @throws \TomTom\Telematics\EndpointException
	 */
	private function loadEndpoint($method, $params = null, $rangeFilter = null){

		if($params !== null && !is_a($params, ParameterInterface::class) && !is_array($params)){
			throw new EndpointException('invalid parameter type');
		}

		if($rangeFilter !== null && !is_a($rangeFilter, DateRangeFilter::class) && !is_array($rangeFilter)){
			throw new EndpointException('invalid date range parameter type');
		}

		if($params === null || is_array($params)){
			$paramClass = __NAMESPACE__.'\\Parameters\\'.$this->methodMap[$method]->group;
			$params     = new $paramClass($params);
		}

		if($rangeFilter === null || is_array($rangeFilter)){
			$rangeFilter = new DateRangeFilter($rangeFilter);
		}

		// overwrite the internal parameters.
		$this->generalParams->action = $method;
		$this->generalParams->outputformat = 'json';
		$this->generalParams->useISO8601 = true;
		$this->generalParams->useUTF8 = true;

		return new EndpointHandler($this->http, $this->webfleetOptions, $this->authenticationParams, $this->generalParams, $params, $rangeFilter);
	}

}
