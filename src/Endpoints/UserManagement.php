<?php
/**
 * Interface UserManagement
 *
 * @filesource   UserManagement.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Endpoints
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

/**
 * 4.12 User management
 */
interface UserManagement{

	/**
	 * 4.12.1 showUsers
	 *
	 * This actions returns a list of all existing users within the account along with the last recorded login time.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function showUsers($params = null);

	/**
	 * 4.12.2 changePassword
	 *
	 * Using changePassword you can change the password of your own user account.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function changePassword($params);

	/**
	 * 4.12.3 insertUser
	 *
	 * Using insertUser you can create a new WEBFLEET user within the current account.
	 *
	 * Note: This action can only be executed by users, that have the "Administrator" profile.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function insertUser($params);

	/**
	 * 4.12.4 updateUser
	 *
	 * Using updateUser you can update the details of a WEBFLEET user within the current account.
	 *
	 * Note: This action can only be executed by users, that have the "Administrator" profile.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function updateUser($params);

	/**
	 * 4.12.5 deleteUser
	 *
	 * Using deleteUser you can delete a WEBFLEET user within the current account.
	 *
	 * Note: This action can only be executed by users, that have the "Administrator" profile.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function deleteUser($params);

	/**
	 * 4.12.6 getUserRights
	 *
	 * This action returns the currently configured access right levels for a specified user.
	 * The result contains profile default rights and individually configured rights.
	 *
	 * Note: This action can only be executed by users, that have the "Administrator" profile.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function getUserRights($params);

	/**
	 * 4.12.7 setUserRight
	 *
	 * This action adds a right level to an individual user. Right levels can only be changed
	 * for users with the standard or bigmap interface style (interfacestyle). For
	 * users with the bigmap interface style only the right levels address_read_access
	 * and object_tracking can be set/removed in combination with an entityuid.
	 *
	 * Note: This action can only be executed by users, that have the "Administrator" profile.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function setUserRight($params);

	/**
	 * 4.12.8 resetUserRights
	 *
	 * Using resetUserRights you can reset the user access right levels to the profile
	 * defaults. All individual configured rights will be lost after executing this function.
	 *
	 * Note: This action can only be executed by users, that have the "Administrator" profile.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function resetUserRights($params);

	/**
	 * 4.12.9 removeUserRight
	 *
	 * This action removes a right level from an individual user. Right levels can only be
	 * removed from users with the standard or bigmap interface style
	 * (interfacestyle). For users with the bigmap interface style only the right levels
	 * address_read_access and object_tracking can be removed in combination with an entityuid.
	 *
	 * Note: This action can only be executed by users, that have the "Administrator" profile.
	 *
	 * @param array|\TomTom\Telematics\Parameters\UserManagement $params
	 */
	public function removeUserRight($params);

}
