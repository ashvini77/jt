<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Page\Acceptance\Admin\Components\Com_Jticketing;

/**
 * Class SiteLoginPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.0
 *
 */
class EventPage extends \AcceptanceTester
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = '/administrator/index.php?option=com_jticketing&view=event&layout=edit';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'eventTitle'            => '#jform_title',
		'eventAlias'            => '#jform_alias',

		'eventCategory'         => '#jform_catid',

		'eventPublishYes'       => '//*[@id="jform_state"]/label[1]',
		'eventPublishNo'        => '//*[@id="jform_state"]/label[2]',

		'eventAllowViewAttendeeYes' => '//*[@id="jform_allow_view_attendee"]/label[1]',
		'eventAllowViewAttendeeNo'  => '//*[@id="jform_allow_view_attendee"]/label[2]',

		'eventAccess'           => '#jform_access',
		// 'eventAccessOption'     => '//*[@id="jform_access_chzn"]/div/ul/li[1]',

		'eventImage'            => '#jform_image',

		// Event tags
		'eventTags'      => '//*[@id="jform_tags_chzn"]/ul/li/input',
		'eventTagOption' => '//*[@id="jform_tags_chzn"]/div/ul/li[1]',
		'metaKeyword'    => '//*[@id="jform_meta_data"]',
		'metaDesc'       => '//*[@id="jform_meta_desc"]',
		'idealTime'      => '//*[@id="jform_ideal_time"]',

		'eventToggleEditor' => '//*[@id="collapse2"]/div/div/div[2]/div/div[2]/div/div[2]/div/a',
		'eventToggleEditorSelector' => '#collapse2 > div > div > div.span7 > div > div.controls > div > div.toggle-editor.btn-toolbar.pull-right.clearfix > div > a',

		'eventLongDescription'      => '#jform_long_description',

		// Accordians
		'eventFormAccordian1' => '#myAccordian > div:nth-child(1) > div.accordion-heading > strong > a',
		'eventFormAccordian2' => '#myAccordian > div:nth-child(2) > div.accordion-heading > strong > a',
		'eventFormAccordian3' => '#myAccordian > div:nth-child(3) > div.accordion-heading > strong > a',

		// Event start time, end time
		'eventStartDate'    => '#jform_startdate',
		'eventEndDate'      => '#jform_enddate',

		/*'eventStartTimeHour'         => '//*[@id="jformevent_start_time_hour_chzn"]/a/div/b',
		'eventStartTimeHourOption'   => '//*[@id="jformevent_start_time_hour_chzn"]/div/ul/li[9]',
		'eventStartTimeMinute'       => '//*[@id="jformevent_start_time_min_chzn"]/a/div/b',
		'eventStartTimeMinuteOption' => '//*[@id="jformevent_start_time_min_chzn"]/div/ul/li[1]',
		'eventStartTimeAmPm'         => '//*[@id="jformevent_start_time_ampm_chzn"]/a/div/b',
		'eventStartTimeAmPmOption'   => '//*[@id="jformevent_start_time_ampm_chzn"]/div/ul/li[1]',*/

		/*'eventEndTimeHour'         => '//*[@id="jformevent_end_time_hour_chzn"]/a/div/b',
		'eventEndTimeHourOption'   => '//*[@id="jformevent_end_time_hour_chzn"]/div/ul/li[9]',
		'eventEndTimeMinute'       => '//*[@id="jformevent_end_time_min_chzn"]/a/div/b',
		'eventEndTimeMinuteOption' => '//*[@id="jformevent_end_time_min_chzn"]/div/ul/li[1]',
		'eventEndTimeAmPm'         => '//*[@id="jformevent_end_time_ampm_chzn"]/a/div/b',
		'eventEndTimeAmPmOption'   => '//*[@id="jformevent_end_time_ampm_chzn"]/div/ul/li[1]',*/

		// Online / offline event
		'eventTypeOptionOffline' => 'jform_online_events1',

		// Venue
		'eventVenue'         => '//*[@id="jform_venue_chzn"]/a/div/b',
		'eventVenueOption'   => '//*[@id="jform_venue_chzn"]/div/ul/li',
		'eventVenueLocation' => '#jform_location',
		'eventVenueLocationAutosuggestOption' => 'body > div.pac-container.pac-logo > div:nth-child(1)',

		// Booking start time, end time
		'eventBookingStartDate'    => '#jform_booking_start_date',
		'eventBookingEndDate'      => '#jform_booking_end_date',

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

		// 'eventcreator'          => '#jform_created_by',
		// 'selectCreator'         => '//*[@id="collapse1"]/div/div[2]/div[2]/div/div/a/span',

		// Tabs:
		'eventEventDetailsTab' => '//*[@id="myTabTabs"]/li[1]/a',
		'eventTicketTypesTab'  => '//*[@id="myTabTabs"]/li[2]/a',

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

		'eventSaveAndClose' => '//*[@id="toolbar-save"]/button'
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
