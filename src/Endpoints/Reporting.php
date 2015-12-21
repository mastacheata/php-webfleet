<?php
/**
 * Interface Reporting
 *
 * @filesource   Reporting.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\Endpoints
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

/**
 * 4.14 Reporting
 */
interface Reporting{

	/**
	 * 4.14.1 getArchivedReportList
	 *
	 * getArchivedReportList lists information about the reports stored in the
	 * WEBFLEET Reports Archive of a specific user. It returns meta information of the
	 * reports such as ID, name, file size, creation time, etc.
	 *
	 * It does not fetch the report data (PDF or CSV). Use getArchivedReport to retrieve
	 * the actual PDF or CSV files.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Reporting       $params
	 * @param array|\TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilter
	 */
	public function getArchivedReportList($params = null, $dateRangeFilter = null);

	/**
	 * 4.14.2 getArchivedReport
	 *
	 * Using getArchivedReport you can retrieve a PDF or CSV report that is stored in
	 * the WEBFLEET Reports Archive of a specific user.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Reporting       $params
	 */
	public function getArchivedReport($params);

	/**
	 * 4.14.3 deleteArchivedReport
	 *
	 * Using deleteArchivedReport you can delete an archived report file from the
	 * WEBFLEET Reports Archive of a specific user.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Reporting       $params
	 */
	public function deleteArchivedReport($params);

	/**
	 * 4.14.4 getReportList
	 *
	 * getReportList returns a list of reports, that can be created on demand and that
	 * are assigned to the current WEBFLEET user. Reports can be created on demand
	 * using sendReportViaMail or createReport.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Reporting       $params
	 */
	public function getReportList($params);

	/**
	 * 4.14.5 createReport
	 *
	 * Using createReport you can create a new PDF or CSV report on demand.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Reporting       $params
	 * @param array|\TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilter
	 */
	public function createReport($params, $dateRangeFilter);

	/**
	 * 4.14.6 sendReportViaMail
	 *
	 * Using sendReportViaMail you can create a new PDF or CSV report on demand
	 * and send it to an indicated email address.
	 *
	 * @param array|\TomTom\Telematics\Parameters\Reporting       $params
	 * @param array|\TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilter
	 */
	public function sendReportViaMail($params, $dateRangeFilter);

}
