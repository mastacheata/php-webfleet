<?php
/**
 * Class Authentication
 *
 * @filesource   Authentication.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 3-1: Authentication parameters
 *
 * This class does *not* implement the ParameterInterface!
 */
class Authentication extends ParameterBase{

	/**
	 * A valid account name
	 *
	 * @var string
	 */
	public $account;

	/**
	 * User name within the account that is allowed to access the service
	 *
	 * @var string
	 */
	public $username;

	/**
	 * Password for the user name
	 *
	 * @var string
	 */
	public $password;

	/**
	 * A session identifier, that has been fetched from the server using createSession.
	 * sessiontoken can be used as an alternative to account, username or password
	 * to authorise further requests for a limited time (see session lifetime).
	 *
	 * @var string (32)
	 */
	public $sessiontoken;

	/**
	 * This value is optional
	 *
	 * @var string
	 */
	public $apikey;

}
