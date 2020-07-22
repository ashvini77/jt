<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Ekcontent
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance\Admin\Components\Com_Jticketing;

use Page\Acceptance\Admin\Components\Com_Jticketing\EventPage as EventPage;

/**
 * Class EventStep
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.4
 *
 */
class EventStep extends \AcceptanceTester
{
	/**
	 * Function to fill in basic event details
	 *
	 * @param   string  $title  title
	 * @param   string  $alias  alias
	 *
	 * @return void
	 */
	public function fillEventBasicDetails($title, $alias)
	{
		$I = $this;

		// Click on tab 1
		$I->click(EventPage::$elements['eventEventDetailsTab']);
		$I->wait(1);

		// Title, alias
		$I->fillField(EventPage::$elements['eventTitle'], $title);
		$I->fillField(EventPage::$elements['eventAlias'], $alias);

		// Select category, access
		$I->selectOption(EventPage::$elements['eventCategory'], 'General');

		// Select tags
		$I->click(EventPage::$elements['eventTags']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventTagOption']);
		$I->wait(1);

		/* Set select fields
			$I->click(EventPage::$elements['eventPublishYes']);
			$I->wait(1);
			$I->click(EventPage::$elements['eventAllowViewAttendeeYes']);
			$I->wait(1);
		*/
		$I->selectOption(EventPage::$elements['eventAccess'], 'Public');

		// Set vars for date
		$startDate = date("Y-m-d H:i:s", strtotime("+1 days", time()));
		$endDate   = date("Y-m-d H:i:s", strtotime("+30 days", time()));

		// Start date and time
		$I->fillField(EventPage::$elements['eventStartDate'], $startDate);

		// End date and time
		$I->fillField(EventPage::$elements['eventEndDate'], $endDate);

		/*Venue
		Focus into element
		$jsCode = 'jQuery("' . EventPage::$elements['eventVenueLocation'] . '").focus();';
		$I->executeJS($jsCode);
		$I->wait(1);*/

		$I->click(EventPage::$elements['eventVenue']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventVenueOption']);
		$I->wait(1);

		/*$I->fillField(EventPage::$elements['eventVenueLocation'], 'Pune');
		$I->wait(2);
		$I->click(EventPage::$elements['eventVenueLocationAutosuggestOption']);
		 $I->wait(1);

		$I->pressKey(EventPage::$elements['eventVenueLocation'], \Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
		$I->pressKey(EventPage::$elements['eventVenueLocation'], \Facebook\WebDriver\WebDriverKeys::ENTER);*/

		$I->wait(5);
	}

	/**
	 * Function to fill event start, end, venue details
	 *
	 * @param   string  $desc  desc
	 *
	 * @return void
	 */
	public function fillEventStartEndVenueDetails($desc)
	{
		$I = $this;

		// Open accordian 2
		$jsCode = 'jQuery("' . EventPage::$elements['eventFormAccordian2'] . '").click();';
		$I->executeJS($jsCode);

		// Select image, file is stored in 'tests/_data/images/event.jpeg'
		$I->attachFile(EventPage::$elements['eventImage'], 'images/event.jpeg');

				// Fill metadata
		$I->fillField(EventPage::$elements['metaKeyword'], 'codeceptionMetaKeyword');
		$I->wait(1);

		// Fill metadata
		$I->fillField(EventPage::$elements['metaDesc'], 'codeceptionMetaKeywordDesc');
		$I->wait(1);

		// Tricky, since element is not visible by default , execute js to focus into it, so it gets visible
		$jsCode = 'jQuery("' . EventPage::$elements['eventToggleEditorSelector'] . '").focus();';
		$I->executeJS($jsCode);

		// Another trick for editor - toogle, fill, toggle again
		$I->click(EventPage::$elements['eventToggleEditor']);
		$I->fillField(EventPage::$elements['eventLongDescription'], $desc);
		$I->click(EventPage::$elements['eventToggleEditor']);
		$I->wait(1);

		/*$I->click(EventPage::$elements['eventStartTimeHour']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventStartTimeHourOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventStartTimeMinute']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventStartTimeMinuteOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventStartTimeAmPm']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventStartTimeAmPmOption']);
		$I->wait(1);*/

		/*$I->click(EventPage::$elements['eventEndTimeHour']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventEndTimeHourOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventEndTimeMinute']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventEndTimeMinuteOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventEndTimeAmPm']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventEndTimeAmPmOption']);
		$I->wait(1);*/

		// $I->click(EventPage::$elements['eventTypeOptionOffline']);
		// $I->wait(1);
	}

	/**
	 * Function to fill event booking details
	 *
	 * @return void
	 */
	public function fillEventBookingStartEndDetails()
	{
		$I = $this;

		// Open accordian 3
		$jsCode = 'jQuery("' . EventPage::$elements['eventFormAccordian3'] . '").click();';
		$I->executeJS($jsCode);

		// Set vars for booking date
		$bookingStartDate = date("Y-m-d H:i:s", strtotime("-1 days", time()));
		$bookingEndDate   = date("Y-m-d H:i:s", strtotime("+29 days", time()));

		// Booking Start date and time
		$I->fillField(EventPage::$elements['eventBookingStartDate'], $bookingStartDate);

		// Tricky, since element is not visible by default , execute js to focus into it, so it gets visible
		$jsCode = 'jQuery("' . EventPage::$elements['eventBookingEndDate'] . '").focus();';
		$I->executeJS($jsCode);

		/*$I->click(EventPage::$elements['eventBookingStartTimeHour']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingStartTimeHourOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingStartTimeMinute']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingStartTimeMinuteOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingStartTimeAmPm']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingStartTimeAmPmOption']);
		$I->wait(1);*/

		// Booking End date and time
		$I->fillField(EventPage::$elements['eventBookingEndDate'], $bookingEndDate);

		/*$I->click(EventPage::$elements['eventBookingEndTimeHour']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingEndTimeHourOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingEndTimeMinute']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingEndTimeMinuteOption']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingEndTimeAmPm']);
		$I->wait(1);
		$I->click(EventPage::$elements['eventBookingEndTimeAmPmOption']);
		$I->wait(1);*/

		// Fill metadata
		$I->fillField(EventPage::$elements['idealTime'], '5');
		$I->wait(1);

		// Close accordian 3
		$jsCode = 'jQuery("' . EventPage::$elements['eventFormAccordian3'] . '").click();';
		$I->executeJS($jsCode);
		$I->wait(1);
		$jsCode = 'jQuery("' . EventPage::$elements['eventFormAccordian2'] . '").click();';
		$I->executeJS($jsCode);
		$I->wait(1);
		$jsCode = 'jQuery("' . EventPage::$elements['eventFormAccordian1'] . '").click();';
		$I->executeJS($jsCode);
		$I->wait(1);
	}

	/**
	 * Function to fill in ticket type details
	 *
	 * @param   string  $ticketTitle    ticketTitle
	 * @param   string  $ticketDesc     ticketDesc
	 * @param   string  $ticketEndDate  ticketEndDate
	 * @param   string  $ticketPrice    ticketPrice
	 *
	 * @return void
	 */
	public function fillEventTicketTypesDetails($ticketTitle, $ticketDesc, $ticketEndDate = 0, $ticketPrice = 0)
	{
		$I = $this;

		// Open tab
		$I->click(EventPage::$elements['eventTicketTypesTab']);
		$I->wait(2);

		// Fill in ticket type details
		$I->fillField(EventPage::$elements['eventTicketTypeTicketTitle1'], $ticketTitle);
		$I->fillField(EventPage::$elements['eventTicketTypeTicketDesc1'], $ticketDesc);
		$I->fillField(EventPage::$elements['eventTicketTypeTicketPrice1'], $ticketPrice);

		if (!empty($ticketEndDate))
		{
			$I->fillField(EventPage::$elements['eventTicketTypeTicketEndDate'], $ticketEndDate);
		}

		$I->click(EventPage::$elements['eventTicketTypeTicketSeats']);
		$I->wait('1');
		$I->click(EventPage::$elements['eventTicketTypeTicketSeatsOption']);
	}
}
