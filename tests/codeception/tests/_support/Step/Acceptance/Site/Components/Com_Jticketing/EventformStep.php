<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Ekcontent
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance\Site\Components\Com_Jticketing;

use Page\Acceptance\Site\Components\Com_Jticketing\EventformPage as EventformPage;

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
class EventformStep extends \AcceptanceTester
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
		$I->click(EventformPage::$elements['eventEventDetailsTab']);
		$I->wait(5);

		// Title, alias
		$I->fillField(EventformPage::$elements['eventTitle'], $title);
		$I->fillField(EventformPage::$elements['eventAlias'], $alias);

		// Set vars for date
		$startDate = date("Y-m-d H:i:s", strtotime("+1 days", time()));
		$endDate   = date("Y-m-d H:i:s", strtotime("+30 days", time()));

		// Start date and time
		$I->fillField(EventformPage::$elements['eventStartDate'], $startDate);

		// End date and time
		$I->fillField(EventformPage::$elements['eventEndDate'], $endDate);

		// Select category
		$I->click(EventformPage::$elements['eventCategory']);
		$I->wait(1);
		$I->click(EventformPage::$elements['eventCategoryOption']);
		$I->wait(1);

		/*	Tricky, since sometimes tooltips block other elements, we need to focus into nearby element
		$jsCode = 'jQuery("' . EventformPage::$elements['eventAlias'] . '").focus();';
		$I->executeJS($jsCode);*/

		$I->click(EventformPage::$elements['eventPublishYes']);
		$I->wait(1);

		// Radio fields
		$I->click(EventformPage::$elements['eventAllowViewAttendeeYes']);
		$I->wait(1);

		/*Select access
		$I->click(EventformPage::$elements['eventAccess']);
		$I->wait(1);
		$I->click(EventformPage::$elements['eventAccessOption']);
		$I->wait(1);*/

		$I->selectOption(EventformPage::$elements['eventAccess'], 'Public');
		$I->wait(1);

		// Select tags
		$I->click(EventformPage::$elements['eventTags']);
		$I->wait(1);
		$I->click(EventformPage::$elements['eventTagOption']);
		$I->wait(1);

		/*Venue
		Focus into element
		$jsCode = 'jQuery("' . EventformPage::$elements['eventVenueLocation'] . '").focus();';
		$I->executeJS($jsCode);
		$I->wait(5);

		$I->click(EventformPage::$elements['eventVenue']);
		$I->wait(5);*/

		$I->click(EventformPage::$elements['eventVenueCustom']);
		$I->wait(1);

		$I->click(EventformPage::$elements['eventVenueOption']);
		$I->wait(1);

		// $I->fillField(EventformPage::$elements['eventVenueLocation'], 'Pune');
		// $I->wait(3);

		/*Click not working, so using pressKey
		$I->click(EventformPage::$elements['eventVenueLocationAutosuggestOption']);
		$I->pressKey(EventformPage::$elements['eventVenueLocation'], \Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
		$I->pressKey(EventformPage::$elements['eventVenueLocation'], \Facebook\WebDriver\WebDriverKeys::ENTER);*/

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
		$jsCode = 'jQuery("' . EventformPage::$elements['eventFormAccordian2'] . '").click();';
		$I->executeJS($jsCode);

		// Select image, file is stored in 'tests/_data/images/event.jpeg'
		$I->attachFile(EventformPage::$elements['eventImage'], 'images/event.jpeg');

		// Fill metadata
		$I->fillField(EventformPage::$elements['metaKeyword'], 'codeceptionMetaKeyword');
		$I->wait(1);

		// Fill metadata
		$I->fillField(EventformPage::$elements['metaDesc'], 'codeceptionMetaKeywordDesc');
		$I->wait(1);

		// Tricky, since element is not visible by default , execute js to focus into it, so it gets visible
		$jsCode = 'jQuery("' . EventformPage::$elements['eventToggleEditorSelector'] . '").focus();';
		$I->executeJS($jsCode);

		// Another trick for editor - toogle, fill, toggle again
		$I->click(EventformPage::$elements['eventToggleEditor']);
		$I->fillField(EventformPage::$elements['eventLongDescription'], $desc);
		$I->click(EventformPage::$elements['eventToggleEditor']);
		$I->wait(5);
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
		$jsCode = 'jQuery("' . EventformPage::$elements['eventFormAccordian3'] . '").click();';
		$I->executeJS($jsCode);

		// Set vars for booking date
		$bookingStartDate = date("Y-m-d H:i:s", strtotime("-1 days", time()));
		$bookingEndDate   = date("Y-m-d H:i:s", strtotime("+29 days", time()));

		// Booking Start date and time
		$I->fillField(EventformPage::$elements['eventBookingStartDate'], $bookingStartDate);

		// Tricky, since element is not visible by default , execute js to focus into it, so it gets visible
		$jsCode = 'jQuery("#jform_booking_end_date").focus();';
		$I->executeJS($jsCode);

		// Booking End date and time
		$I->fillField(EventformPage::$elements['eventBookingEndDate'], $bookingEndDate);

		// Fill metadata
		$I->fillField(EventformPage::$elements['idealTime'], '5');
		$I->wait(1);

		// Close accordian 3,2,1
		$jsCode = 'jQuery("' . EventformPage::$elements['eventFormAccordian3'] . '").click();';
		$I->executeJS($jsCode);
		$I->wait(5);

		/*$jsCode = 'jQuery("' . EventformPage::$elements['eventFormAccordian2'] . '").click();';
		$I->executeJS($jsCode);
		$I->wait(1);
		$jsCode = 'jQuery("' . EventformPage::$elements['eventFormAccordian1'] . '").click();';
		$I->executeJS($jsCode);
		$I->wait(1);*/
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

		// Open tab 2
		$I->click(EventformPage::$elements['eventTicketTypesTab']);
		$I->wait(2);

		// Fill in ticket type details
		$I->fillField(EventformPage::$elements['eventTicketTypeTicketTitle1'], $ticketTitle);
		$I->fillField(EventformPage::$elements['eventTicketTypeTicketDesc1'], $ticketDesc);
		$I->fillField(EventformPage::$elements['eventTicketTypeTicketPrice1'], $ticketPrice);

		if (!empty($ticketEndDate))
		{
			$I->fillField(EventformPage::$elements['eventTicketTypeTicketEndDate'], $ticketEndDate);
		}

		$I->click(EventformPage::$elements['eventTicketTypeTicketSeats']);
		$I->wait('1');
		$I->click(EventformPage::$elements['eventTicketTypeTicketSeatsOption']);
	}
}
