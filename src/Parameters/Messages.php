<?php
/**
 *
 * @filesource   Messages.php
 * @created      17.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Class Messages
 */
class Messages extends ParameterBase implements ParameterInterface{

	// sendTextMessageExtern
	// clearTextMessagesExtern
	// showMessages
	// sendBinaryMessage
	// resetBinaryMessages
	// clearBinaryMessages
	public $objectno;
	public $objectuid;

	// sendTextMessageExtern
	public $messagetext;

	// showMessages
	public $category;

	// sendBinaryMessage
	public $correlationid;
	public $data;

	// sendBinaryMessage
	// clearBinaryMessages
	public $appid;

}
