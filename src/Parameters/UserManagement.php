<?php
/**
 * Class UserManagement
 *
 * @filesource   UserManagement.php
 * @created      18.12.2015
 * @package      TomTom\Telematics\Parameters
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Parameters;

/**
 * Table 4-272: Parameters specific to showUsers
 * Table 4-275: Parameters specific to changePassword
 * Table 4-277: Parameters specific to insertUser
 * Table 4-279: Parameters specific to updateUser
 * Table 4-281: Parameters specific to deleteUser
 * Table 4-283: Parameters specific to getUserRights
 * Table 4-287: Parameters specific to setUserRight
 * Table 4-289: Parameters specific to resetUserRights
 * Table 4-291: Parameters specific to removeUserRight
 */
class UserManagement extends ParameterBase implements ParameterInterface{

	// showUsers
	public $username_filter;
	public $realname_filter;
	public $company_filter;

	// changePassword
	public $oldpassword;
	public $newpassword;

	// insertUser
	// updateUser
	public $new_username;
	public $new_password; // duplicate! -> changePassword
	public $require_password_change;
	public $realname;
	public $info;
	public $company;
	public $email;
	public $validfrom;
	public $validto;
	public $profile;
	public $interfacestyle;

	// updateUser
	// deleteUser
	// getUserRights
	// setUserRight
	// resetUserRights
	// removeUserRight
	public $target_useruid;
	public $target_username;

	// updateUser
	public $generate_password;

	// setUserRight
	// removeUserRight
	public $rightlevel;
	public $entityuid;

}
