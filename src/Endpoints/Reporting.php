<?php
/**
 * Interface Reporting
 *
 * @filesource   Reporting.php
 * @created      13.12.2015
 * @package      TomTom\Telematics\EndpointHandler\Interfaces
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace TomTom\Telematics\Endpoints;

use TomTom\Telematics\Parameters\DateRangeFilter;
use TomTom\Telematics\Parameters\Reporting as ReportingParams;

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
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilter
	 */
	public function getArchivedReportList(DateRangeFilter $dateRangeFilter);

	/**
	 * 4.14.2 getArchivedReport
	 *
	 * Using getArchivedReport you can retrieve a PDF or CSV report that is stored in
	 * the WEBFLEET Reports Archive of a specific user.
	 *
	 * @param int $reportid
	 */
	public function getArchivedReport($reportid);

	/**
	 * 4.14.3 deleteArchivedReport
	 *
	 * Using deleteArchivedReport you can delete an archived report file from the
	 * WEBFLEET Reports Archive of a specific user.
	 *
	 * @param int $reportid
	 */
	public function deleteArchivedReport($reportid);

	/**
	 * 4.14.4 getReportList
	 *
	 * getReportList returns a list of reports, that can be created on demand and that
	 * are assigned to the current WEBFLEET user. Reports can be created on demand
	 * using sendReportViaMail or createReport.
	 *
	 * @param string $reporttype (100)
	 */
	public function getReportList($reporttype);

	/**
	 * 4.14.5 createReport
	 *
	 * Using createReport you can create a new PDF or CSV report on demand.
	 *
	 * @param \TomTom\Telematics\Parameters\Reporting       $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilter
	 */
	public function createReport(ReportingParams $params, DateRangeFilter $dateRangeFilter);

	/**
	 * 4.14.6 sendReportViaMail
	 *
	 * Using sendReportViaMail you can create a new PDF or CSV report on demand
	 * and send it to an indicated email address.
	 *
	 * @param \TomTom\Telematics\Parameters\Reporting       $params
	 * @param \TomTom\Telematics\Parameters\DateRangeFilter $dateRangeFilter
	 */
	public function sendReportViaMail(ReportingParams $params, DateRangeFilter $dateRangeFilter);

}
