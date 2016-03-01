<?php
/**
 *
 * @filesource   ParameterBase.php
 * @created      19.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

use TomTom\Telematics\EndpointException;

/**
 * Class ParameterBase
 */
class ParameterBase{

	public function __construct(array $params = null){

		if(is_array($params) && !empty($params)){

			foreach($params as $key => $value){
				if(property_exists($this, $key)){
					$this->{$key} = $value;
				}
			}

		}

	}

	/*
		public function __set($name, $value){

			$name = strtolower($name);

			// todo
			switch($name){
				case 'rangefrom_string':
				case 'rangeto_string':
					$this->{$name} = $this->fromTimestamp($value);
					break;
				default:
					$this->{$name} =  $value;
					break;
			}

		}

		public function __get($name){
			return $this->{$name};
		}

		// todo
		private function fromTimestamp($timestamp){

			if(is_int($timestamp)){
				return $timestamp;
			}

			$timestamp = strtotime($timestamp);

			if(!$timestamp){
				throw new EndpointException('invalid bound!');
			}

			return $timestamp;
		}
	*/
}
