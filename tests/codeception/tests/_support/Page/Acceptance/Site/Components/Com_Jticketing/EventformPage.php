<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Page\Acceptance\Site\Components\Com_Jticketing;

/**
 * Class SiteLoginPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.0
 *
 */
class EventformPage extends \AcceptanceTester
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = 'index.php?option=com_jticketing&view=eventform';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'eventTitle' => '#jform_title',
		'eventAlias' => '#jform_alias',

		// Event start time, end time
		'eventStartDate' => '#jform_startdate',
		'eventEndDate'   => '#jform_enddate',

		// 'eventCategory'    => '#jform_catid',
		'eventCategory'       => '//*[@id="jform_catid_chzn"]/a/div/b',
		'eventCategoryOption' => '//*[@id="jform_catid_chzn"]/a/span',

		// 'eventPublishYes' => '//*[@id="jform_state"]/label[1]',
		'eventPublishYes'    => '#jform_state1',

		// 'eventAllowViewAttendeeYes' => '//*[@id="jform_allow_view_attendee"]/label[1]',
		'eventAllowViewAttendeeYes'    => '//*[@id="collapseBasicDetails"]/div/div/div[1]/div[4]/div[1]/div/label[1]',

		'eventAccess'           => '#jform_access',
		// 'eventAccess'       => '//*[@id="jform_access_chzn"]/a/div/b',
		// 'eventAccessOption' => '//*[@id="jform_access_chzn"]/div/ul/li[1]',

		// Image
		'eventImage' => '#jform_image',

		'eventToggleEditor'         => '//*[@id="collapseEventLocation"]/div/div/div[2]/div/div/div/div[2]/div/a',
		'eventToggleEditorSelector' => '#collapseEventLocation > div > div > div:nth-child(2) > div > div > div > div.toggle-editor.btn-toolbar.pull-right.clearfix > div > a',
		'eventLongDescription'      => '#jform_long_description',

		// Event tags
		'eventTags'      => '//*[@id="jform_tags_chzn"]/ul/li/input',
		'eventTagOption' => '//*[@id="jform_tags_chzn"]/div/ul/li[1]',
		'metaKeyword'    => '//*[@id="jform_meta_data"]',
		'metaDesc'       => '//*[@id="jform_meta_desc"]',
		'idealTime'      => '//*[@id="jform_ideal_time"]',

		// Acoordians
		'eventFormAccordian1' => '#accordion > div:nth-child(1) > div.panel-heading > h4 > a',
		'eventFormAccordian2' => '#accordion > div:nth-child(2) > div.panel-heading > h4 > a',
		'eventFormAccordian3' => '#accordion > div:nth-child(3) > div.panel-heading > h4 > a',

		/*'eventStartTimeHour'       => '//*[@id="jformevent_start_time_hour_chzn"]/a/div/b',
		'eventStartTimeHourOption'   => '//*[@id="jformevent_start_time_hour_chzn"]/div/ul/li[9]',
		'eventStartTimeMinute'       => '//*[@id="jformevent_start_time_min_chzn"]/a/div/b',
		'eventStartTimeMinuteOption' => '//*[@id="jformevent_start_time_min_chzn"]/div/ul/li[1]',
		'eventStartTimeAmPm'         => '//*[@id="jformevent_start_time_ampm_chzn"]/a/div/b',
		'eventStartTimeAmPmOption'   => '//*[@id="jformevent_start_time_ampm_chzn"]/div/ul/li[1]',*/

		/*'eventEndTimeHour'       => '//*[@id="jformevent_end_time_hour_chzn"]/a/div/b',
		'eventEndTimeHourOption'   => '//*[@id="jformevent_end_time_hour_chzn"]/div/ul/li[9]',
		'eventEndTimeMinute'       => '//*[@id="jformevent_end_time_min_chzn"]/a/div/b',
		'eventEndTimeMinuteOption' => '//*[@id="jformevent_end_time_min_chzn"]/div/ul/li[1]',
		'eventEndTimeAmPm'         => '//*[@id="jformevent_end_time_ampm_chzn"]/a/div/b',
		'eventEndTimeAmPmOption'   => '//*[@id="jformevent_end_time_ampm_chzn"]/div/ul/li[1]',*/

		// Venue
		'eventVenue'         => 'body',
		'eventVenueCustom'   => '//*[@id="jform_venue_chzn"]/a/div/b',

		'eventVenueOption'   => '//*[@id="jform_venue_chzn"]/div/ul/li',
		'eventVenueLocation' => '#jform_location',
		'eventVenueLocationAutosuggestOption' => 'body > div.pac-container.pac-logo > div:nth-child(1)',

		// Booking start time, end time
		'eventBookingStartDate' => '#jform_booking_start_date',
		'eventBookingEndDate'   => '#jform_booking_end_date',

		// Booking start date

		/*'eventBookingStartTimeHour'         => '//*[@id="jformbooking_start_time_hour_chzn"]/a/div/b',
		'eventBookingStartTimeHourOption'   => '//*[@id="jformbooking_start_time_hour_chzn"]/div/ul/li[9]',
		'eventBookingStartTimeMinute'       => '//*[@id="jformbooking_start_time_min_chzn"]/a/div/b',
		'eventBookingStartTimeMinuteOption' => '//*[@id="jformbooking_start_time_min_chzn"]/div/ul/li[1]',
		'eventBookingStartTimeAmPm'         => '//*[@id="jformbooking_start_time_ampm_chzn"]/a/div/b',
		'eventBookingStartTimeAmPmOption'   => '//*[@id="jformbooking_start_time_ampm_chzn"]/div/ul/li[1]',*/

		// Booking end date

		/*'eventBookingEndTimeHour'         => '//*[@id="jformbooking_end_time_hour_chzn"]/a/div/b',
		'eventBookingEndTimeHourOption'   => '//*[@id="jformbooking_end_time_hour_chzn"]/div/ul/li[9]',
		'eventBookingEndTimeMinute'       => '//*[@id="jformbooking_end_time_min_chzn"]/a/div/b',
		'eventBookingEndTimeMinuteOption' => '//*[@id="jformbooking_end_time_min_chzn"]/div/ul/li[1]',
		'eventBookingEndTimeAmPm'         => '//*[@id="jformbooking_end_time_ampm_chzn"]/a/div/b',
		'eventBookingEndTimeAmPmOption'   => '//*[@id="jformbooking_end_time_ampm_chzn"]/div/ul/li[1]',*/

		// Ticket types:
		'eventEventDetailsTab' => '//*[@id="eventform1"]/div/ul/li[1]/a/h4',
		'eventTicketTypesTab'  => '//*[@id="eventform1"]/div/ul/li[2]/a/h4',

		// Title, desc
		'eventTicketTypeTicketTitle1' => '#jform_tickettypes__tickettypes0__title',
		'eventTicketTypeTicketDesc1'  => '#jform_tickettypes__tickettypes0__desc',

		// State
		'eventTicketTypeTicketState'       => '//*[@id="jform_tickettypes__tickettypes0__state_chzn"]/a/div/b',
		'eventTicketTypeTicketStateOption' => '//*[@id="jform_tickettypes__tickettypes0__state_chzn"]/div/ul/li[1]',

		// Price
		'eventTicketTypeTicketPrice1' => '#jform_tickettypes__tickettypes0__price',

		// Ticket end date
		'eventTicketTypeTicketEndDate' => '#jform_tickettypes__tickettypes0__ticket_enddate',

		// Seats
		'eventTicketTypeTicketSeats'       => '//*[@id="jform_tickettypes__tickettypes0__unlimited_seats_chzn"]/a/div/b',
		'eventTicketTypeTicketSeatsOption' => '//*[@id="jform_tickettypes__tickettypes0__unlimited_seats_chzn"]/div/ul/li[1]',

		'eventSaveAndClose' => '//*[@id="adminForm"]/div[2]/button/span'
	);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'eventSavedMsg' => 'Event saved successfully.',
	);
}
