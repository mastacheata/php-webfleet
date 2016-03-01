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
use ReflectionClass;
use TomTom\Telematics\Parameters\Authentication;
use TomTom\Telematics\Parameters\DateRangeFilter;
use TomTom\Telematics\Parameters\General;
use TomTom\Telematics\Parameters\ParameterInterface;

/**
 * main entry
 *
 * @method EndpointHandler ackQueueMessagesExtern($params)
 * @method EndpointHandler acknowledgeEventExtern($params)
 * @method EndpointHandler assignOrderExtern($params)
 * @method EndpointHandler attachAddressToGroupExtern($params)
 * @method EndpointHandler attachDriverToGroup($params)
 * @method EndpointHandler attachDriverToVehicle($params)
 * @method EndpointHandler attachObjectToGroup($params)
 * @method EndpointHandler calcRouteSimpleExtern($params)
 * @method EndpointHandler cancelOrderExtern($params)
 * @method EndpointHandler changePassword($params)
 * @method EndpointHandler clearAuxDeviceDataQueue($params)
 * @method EndpointHandler clearBinaryMessages($params)
 * @method EndpointHandler clearOrdersExtern($params)
 * @method EndpointHandler clearTextMessagesExtern($params)
 * @method EndpointHandler configureLocalAuxDevice($params)
 * @method EndpointHandler configureRemoteAuxDevice($params)
 * @method EndpointHandler createQueueExtern($params)
 * @method EndpointHandler createReport($params, $dateRangeFilter)
 * @method EndpointHandler createSession()
 * @method EndpointHandler deleteAddressExtern($params)
 * @method EndpointHandler deleteAddressGroupExtern($params)
 * @method EndpointHandler deleteArchivedReport($params)
 * @method EndpointHandler deleteArea($params)
 * @method EndpointHandler deleteAreaAssignment($params)
 * @method EndpointHandler deleteAreaSchedule($params)
 * @method EndpointHandler deleteDriverExtern($params)
 * @method EndpointHandler deleteDriverGroup($params)
 * @method EndpointHandler deleteEventForwardConfig($params)
 * @method EndpointHandler deleteMaintenanceSchedule($params)
 * @method EndpointHandler deleteObjectGroup($params)
 * @method EndpointHandler deleteOrderExtern($params)
 * @method EndpointHandler deleteQueueExtern($params)
 * @method EndpointHandler deleteUser($params)
 * @method EndpointHandler detachAddressFromGroupExtern($params)
 * @method EndpointHandler detachDriverFromGroup($params)
 * @method EndpointHandler detachDriverFromVehicle($params)
 * @method EndpointHandler detachObjectFromGroup($params)
 * @method EndpointHandler geocodeAddress($params)
 * @method EndpointHandler getAccountStatusMessages()
 * @method EndpointHandler getArchivedReport($params)
 * @method EndpointHandler getArchivedReportList($params, $dateRangeFilter)
 * @method EndpointHandler getAreaAssignments($params)
 * @method EndpointHandler getAreaPoints($params)
 * @method EndpointHandler getAreaSchedules($params)
 * @method EndpointHandler getAreas($params)
 * @method EndpointHandler getCrashLog($params, $dateRangeFilterParams)
 * @method EndpointHandler getDriverKPIs($params, $dateRangeFilterParams)
 * @method EndpointHandler getEventForwardConfigRecipients($params)
 * @method EndpointHandler getEventForwardConfigs($params)
 * @method EndpointHandler getLocalAuxDeviceConfig($params)
 * @method EndpointHandler getObjectFeatures($params)
 * @method EndpointHandler getObjectKPIs($params, $dateRangeFilterParams)
 * @method EndpointHandler getRemainingDrivingTimesEU($params)
 * @method EndpointHandler getRemoteAuxDeviceConfig($params)
 * @method EndpointHandler getReportList($params)
 * @method EndpointHandler getStatusMessages($params)
 * @method EndpointHandler getUserRights($params)
 * @method EndpointHandler getVehicleConfig($params)
 * @method EndpointHandler insertAddressExtern($params)
 * @method EndpointHandler insertAddressGroupExtern($params)
 * @method EndpointHandler insertArea($params)
 * @method EndpointHandler insertAreaAssignment($params)
 * @method EndpointHandler insertAreaSchedule($params)
 * @method EndpointHandler insertDestinationOrderExtern($params)
 * @method EndpointHandler insertDriverExtern($params)
 * @method EndpointHandler insertDriverGroup($params)
 * @method EndpointHandler insertEventForwardConfig($params)
 * @method EndpointHandler insertMaintenanceSchedule($params)
 * @method EndpointHandler insertObjectGroup($params)
 * @method EndpointHandler insertUser($params)
 * @method EndpointHandler popQueueMessagesExtern($params)
 * @method EndpointHandler reassignOrderExtern($params)
 * @method EndpointHandler removeRemoteAuxDeviceConfig($params)
 * @method EndpointHandler removeUserRight($params)
 * @method EndpointHandler resetAuxDeviceData($params)
 * @method EndpointHandler resetBinaryMessages($params)
 * @method EndpointHandler resetUserRights($params)
 * @method EndpointHandler resolveEventExtern($params)
 * @method EndpointHandler resolveMaintenanceTask($params)
 * @method EndpointHandler sendAuxDeviceData($params)
 * @method EndpointHandler sendBinaryMessage($params)
 * @method EndpointHandler sendDestinationOrderExtern($params)
 * @method EndpointHandler sendOrderExtern($params)
 * @method EndpointHandler sendReportViaMail($params, $dateRangeFilter)
 * @method EndpointHandler sendTextMessageExtern($params)
 * @method EndpointHandler setAccountStatusMessages($params)
 * @method EndpointHandler setStatusMessages($params)
 * @method EndpointHandler setUserRight($params)
 * @method EndpointHandler setVehicleConfig($params)
 * @method EndpointHandler showAccelerationEvents($params, $dateRangeFilterParams)
 * @method EndpointHandler showAccountOrderAutomations()
 * @method EndpointHandler showAccountOrderStates()
 * @method EndpointHandler showAddressGroupAddressReportExtern($params)
 * @method EndpointHandler showAddressGroupReportExtern($params)
 * @method EndpointHandler showAddressReportExtern($params)
 * @method EndpointHandler showContracts($params)
 * @method EndpointHandler showDriverGroupDrivers($params)
 * @method EndpointHandler showDriverGroups($params)
 * @method EndpointHandler showDriverReportExtern($params)
 * @method EndpointHandler showEventReportExtern($params, $dateRangeFilterParams)
 * @method EndpointHandler showIOReportExtern($params, $dateRangeFilterParams)
 * @method EndpointHandler showIdleExceptions($params, $dateRangeFilterParams)
 * @method EndpointHandler showLogbook($params, $dateRangeFilterParams)
 * @method EndpointHandler showLogbookHistory($params, $dateRangeFilterParams)
 * @method EndpointHandler showMaintenanceSchedules($params)
 * @method EndpointHandler showMaintenanceTasks($params)
 * @method EndpointHandler showMessages($params, $dateRangeParams)
 * @method EndpointHandler showNearestVehicles($params)
 * @method EndpointHandler showObjectGroupObjects($params)
 * @method EndpointHandler showObjectGroups($params)
 * @method EndpointHandler showObjectReportExtern($params)
 * @method EndpointHandler showOptiDriveIndicator($params)
 * @method EndpointHandler showOrderReportExtern($params)
 * @method EndpointHandler showOrderWaypoints($params)
 * @method EndpointHandler showSettings($params)
 * @method EndpointHandler showSpeedingEvents($params, $dateRangeFilterParams)
 * @method EndpointHandler showStandStills($params, $dateRangeFilterParams)
 * @method EndpointHandler showTracks($params, $dateRangeFilterParams)
 * @method EndpointHandler showTripReportExtern($params, $dateRangeFilterParams)
 * @method EndpointHandler showTripSummaryReportExtern($params, $dateRangeFilterParams)
 * @method EndpointHandler showUsers($params)
 * @method EndpointHandler showVehicleReportExtern($params)
 * @method EndpointHandler showWakeupTimers($params)
 * @method EndpointHandler showWorkingTimes($params, $dateRangeFilterParams)
 * @method EndpointHandler switchOutput($params)
 * @method EndpointHandler terminateSession()
 * @method EndpointHandler updateAccountOrderAutomation($params)
 * @method EndpointHandler updateAccountOrderState($params)
 * @method EndpointHandler updateAddressExtern($params)
 * @method EndpointHandler updateArea($params)
 * @method EndpointHandler updateContractInfo($params)
 * @method EndpointHandler updateDestinationOrderExtern($params)
 * @method EndpointHandler updateDriverExtern($params)
 * @method EndpointHandler updateDriverGroup($params)
 * @method EndpointHandler updateEventForwardConfig($params)
 * @method EndpointHandler updateLogbook($params)
 * @method EndpointHandler updateLogbookMode($params)
 * @method EndpointHandler updateMaintenanceSchedule($params)
 * @method EndpointHandler updateObjectGroup($params)
 * @method EndpointHandler updateOrderExtern($params)
 * @method EndpointHandler updateUser($params)
 * @method EndpointHandler updateVehicle($params)
 * @method EndpointHandler updateWakeupTimers($params)
 */
class WebfleetConnect{

	/**
	 * @var array
	 */
	private $methodMap = [];

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
	 * @param string $method
	 * @param array  $arguments
	 *
	 * @return \TomTom\Telematics\EndpointHandler
	 * @throws \TomTom\Telematics\EndpointException
	 */
	public function __call($method, $arguments){
		if(isset($this->methodMap[$method])){
			return $this->loadEndpoint($method, ...$arguments);
		}

		throw new EndpointException('Endpoint "'.$method.'" does not exist');
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

		if($params && !is_a($params, ParameterInterface::class) && !is_array($params)){
			throw new EndpointException('invalid parameter type');
		}

		if($rangeFilter && !is_a($rangeFilter, DateRangeFilter::class) && !is_array($rangeFilter)){
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

		return (new EndpointHandler($this->webfleetOptions, $this->authenticationParams, $this->generalParams, $params, $rangeFilter))->get();
	}

}
