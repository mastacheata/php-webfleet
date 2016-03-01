<?php
/**
 * Class RequestLimits
 *
 * @filesource   RequestLimits.php
 * @created      13.12.2015
 * @package      TomTom\Telematics
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics;

/**
 * Each timer, named by it's corresponding API method, holds an array with 2 values: request limit and duration in seconds
 */
class RequestLimits{

	// 4.1 Message queues
	const createQueueExtern                   = [   1, 86400];
	const deleteQueueExtern                   = [   1, 86400];
	const popQueueMessagesExtern              = [  10,    60];
	const ackQueueMessagesExtern              = [  10,    60];
	// 4.2 Objects
	const showObjectReportExtern              = [   6,    60];
	const showVehicleReportExtern             = [  10,    60];
	const showNearestVehicles                 = [  10,    60];
	const showContracts                       = [   6,    60];
	const updateVehicle                       = [  10,    60];
	const showObjectGroups                    = [  10,    60];
	const showObjectGroupObjects              = [  10,    60];
	const attachObjectToGroup                 = [1000,  3600];
	const detachObjectFromGroup               = [1000,  3600];
	const insertObjectGroup                   = [ 100,  1800];
	const deleteObjectGroup                   = [ 100,  1800];
	const updateObjectGroup                   = [ 100,  1800];
	const switchOutput                        = [  10,    60];
	const showWakeupTimers                    = [  10,    60];
	const updateWakeupTimers                  = [  10,    60];
	const getObjectFeatures                   = [  10,    60];
	const updateContractInfo                  = [  10,    60];
	// 4.3 Orders
	const sendOrderExtern                     = [ 300,  1800];
	const sendDestinationOrderExtern          = [ 300,  1800];
	const updateOrderExtern                   = [ 300,  1800];
	const updateDestinationOrderExtern        = [ 300,  1800];
	const insertDestinationOrderExtern        = [ 300,  1800];
	const cancelOrderExtern                   = [ 300,  1800];
	const assignOrderExtern                   = [ 300,  1800];
	const reassignOrderExtern                 = [ 300,  1800];
	const deleteOrderExtern                   = [ 300,  1800];
	const clearOrdersExtern                   = [ 300,  1800];
	const showOrderReportExtern               = [   6,    60];
	const showOrderWaypoints                  = [  10,    60];
	// 4.4 Messages
	const sendTextMessageExtern               = [ 300,  1800];
	const clearTextMessagesExtern             = [ 300,  1800];
	const showMessages                        = [  10,    60];
	const sendBinaryMessage                   = [  10,    60];
	const resetBinaryMessages                 = [  10,    60];
	const clearBinaryMessages                 = [  10,    60];
	// 4.5 Drivers
	const showDriverReportExtern              = [  10,    60];
	const insertDriverExtern                  = [  10,    60];
	const updateDriverExtern                  = [  10,    60];
	const deleteDriverExtern                  = [  10,    60];
	const showOptiDriveIndicator              = [  10,    60];
	const showDriverGroups                    = [  10,    60];
	const showDriverGroupDrivers              = [  10,    60];
	const attachDriverToGroup                 = [  10,    60];
	const detachDriverFromGroup               = [  10,    60];
	const insertDriverGroup                   = [  10,    60];
	const deleteDriverGroup                   = [  10,    60];
	const updateDriverGroup                   = [  10,    60];
	const attachDriverToVehicle               = [  10,    60];
	const detachDriverFromVehicle             = [  10,    60];
	// 4.6 Addresses
	const showAddressReportExtern             = [   6,    60];
	const showAddressGroupReportExtern        = [ 900,  3600];
	const showAddressGroupAddressReportExtern = [ 900,  3600];
	const insertAddressExtern                 = [ 900,  3600];
	const updateAddressExtern                 = [ 900,  3600];
	const deleteAddressExtern                 = [ 900,  3600];
	const attachAddressToGroupExtern          = [ 900,  3600];
	const detachAddressFromGroupExtern        = [ 900,  3600];
	const insertAddressGroupExtern            = [ 900,  3600];
	const deleteAddressGroupExtern            = [ 900,  3600];
	// 4.7 Events
	const showEventReportExtern               = [   1,    60];
	const acknowledgeEventExtern              = [ 300,  1800];
	const resolveEventExtern                  = [ 300,  1800];
	const getEventForwardConfigs              = [  10,    60];
	const getEventForwardConfigRecipients     = [  10,    60];
	const insertEventForwardConfig            = [  10,    60];
	const updateEventForwardConfig            = [  10,    60];
	const deleteEventForwardConfig            = [  10,    60];
	// 4.8 Trips and working times
	const showTripReportExtern                = [   1,    60];
	const showTripSummaryReportExtern         = [  10,    60];
	const showTracks                          = [  10,    60];
	const updateLogbook                       = [  10,    60];
	const showLogbook                         = [  10,    60];
	const showLogbookHistory                  = [  10,    60];
	const updateLogbookMode                   = [  10,    60];
	const showWorkingTimes                    = [  10,    60];
	const showStandStills                     = [  10,    60];
	const showIdleExceptions                  = [  10,    60];
	const getObjectKPIs                       = [  10,    60];
	const getDriverKPIs                       = [  10,    60];
	const getRemainingDrivingTimesEU          = [  10,    60];
	// 4.9 Miscellaneous reports
	const showIOReportExtern                  = [  10,    60];
	const showAccelerationEvents              = [  10,    60];
	const showSpeedingEvents                  = [  10,    60];
	const getCrashLog                         = [  10,    60];
	// 4.10 Geocoding and routing
	const geocodeAddress                      = [ 900,  3600];
	const calcRouteSimpleExtern               = [   6,    60];
	// 4.11 Configuration and security
	const showSettings                        = [  10,    60];
	const createSession                       = [  10,  3600];
	const terminateSession                    = [  10,    60];
	const showAccountOrderStates              = [  10,    60];
	const updateAccountOrderState             = [  50,  3600];
	const showAccountOrderAutomations         = [  10,    60];
	const updateAccountOrderAutomation        = [  10,    60];
	const getAccountStatusMessages            = [  10,    60];
	const getStatusMessages                   = [  10,    60];
	const setVehicleConfig                    = [  30,  3600];
	const getVehicleConfig                    = [  10,    60];
	const setStatusMessages                   = [  50, 28800];
	const setAccountStatusMessages            = [   1, 14400];
	// 4.12 User management
	const showUsers                           = [  10,    60];
	const changePassword                      = [  10,  3600];
	const insertUser                          = [  10,    60];
	const updateUser                          = [  10,    60];
	const deleteUser                          = [  10,    60];
	const getUserRights                       = [  10,    60];
	const setUserRight                        = [  10,    60];
	const resetUserRights                     = [  10,    60];
	const removeUserRight                     = [  10,    60];
	// 4.13 Vehicle Maintenance
	const insertMaintenanceSchedule           = [  10,    60];
	const updateMaintenanceSchedule           = [  10,    60];
	const deleteMaintenanceSchedule           = [  10,    60];
	const showMaintenanceSchedules            = [  10,    60];
	const showMaintenanceTasks                = [  10,    60];
	const resolveMaintenanceTask              = [  10,    60];
	// 4.14 Reporting
	const getArchivedReportList               = [  10,    60];
	const getArchivedReport                   = [  10,    60];
	const deleteArchivedReport                = [  10,    60];
	const getReportList                       = [  10,    60];
	const createReport                        = [   5,   600];
	const sendReportViaMail                   = [   5,   600];
	// 4.15 Areas
	const getAreas                            = [  10,    60];
	const insertArea                          = [  10,    60];
	const deleteArea                          = [  10,    60];
	const updateArea                          = [  10,    60];
	const getAreaPoints                       = [  10,    60];
	const getAreaAssignments                  = [  10,    60];
	const insertAreaAssignment                = [  10,    60];
	const deleteAreaAssignment                = [  10,    60];
	const getAreaSchedules                    = [  10,    60];
	const insertAreaSchedule                  = [  10,    60];
	const deleteAreaSchedule                  = [  10,    60];
	// 4.16 LINK.connect
	const sendAuxDeviceData                   = [  10,    60];
	const getLocalAuxDeviceConfig             = [  10,    60];
	const configureLocalAuxDevice             = [  10,    60];
	const getRemoteAuxDeviceConfig            = [  10,    60];
	const configureRemoteAuxDevice            = [  10,    60];
	const removeRemoteAuxDeviceConfig         = [  10,    60];
	const clearAuxDeviceDataQueue             = [  10,    60];
	const resetAuxDeviceData                  = [  10,    60];

}
