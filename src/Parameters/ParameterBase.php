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
				$this->{$key} = $value;
			}

		}

	}

}
