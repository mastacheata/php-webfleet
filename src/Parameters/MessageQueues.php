<?php
/**
 * Class MessageQueues
 *
 * @filesource   MessageQueues.php
 * @created      14.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

use TomTom\Telematics\Parameters\ParameterInterface;

/**
 * Common dummy class for the message queue method params
 *
 * @internal
 *
 * 4.1.1 Overview of queues
 */
class MessageQueues extends ParameterBase implements ParameterInterface{

	/**
	 * Valid values are:
	 *
	 * 0  – All messages (includes tracking-only messages and 4,5,7,8)
	 * 2  – All except position messages (includes 4,5,7,8, does not include tracking-only messages)
	 * 4  – Order related messages
	 * 5  – Driver related messages
	 * 7  – Status messages
	 * 8  – Text messages
	 * 15 – Third party messages (LINK.connect, ...)
	 *
	 * @var int
	 */
	public $msgclass = 0;

}
