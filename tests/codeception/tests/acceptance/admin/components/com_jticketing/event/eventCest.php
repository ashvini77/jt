<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

use Page\Acceptance\Admin\Components\Com_Login\AdminLoginPage as AdminLoginPage;
use Page\Acceptance\Admin\Components\Com_Jticketing\EventPage as EventPage;

use Step\Acceptance\Admin\Components\Com_Login\AdminLoginStep as AdminLoginStep;
use Step\Acceptance\Admin\Components\Com_Jticketing\EventStep as EventStep;

/**
 * Cest class for content creation form
 *
 * @since  1.6
 */
class EventCest
{
	/**
	 * Constructor
	 *
	 */
	public function __construct()
	{
		$this->faker = Faker\Factory::create();
	}

	/**
	 * Function that runs before every test case
	 *
	 * @param   AcceptanceTester  $I  The AcceptanceTester Object
	 *
	 * @return void
	 */
	public function _before(AcceptanceTester $I)
	{
		if ($I->loadSessionSnapshot('adminLogin'))
		{
			return;
		}
	}

	/**
	 * Function for admin login
	 *
	 * @param   AcceptanceTester  $I      The AcceptanceTester Object
	 * @param   Object            $Login  Login step class
	 *
	 * @return void
	 */
	public function adminLogin(AcceptanceTester $I, AdminLoginStep $Login)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		$Login->doAdminLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));

		$Login->saveSessionSnapshot('adminLogin');
	}

	/**
	 * Function to create FREE event by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I          The AcceptanceTester Object
	 * @param   Object            $Login      Login step class
	 * @param   Object            $EventPage  EventPage page class
	 * @param   Object            $EventStep  Event step class
	 *
	 * @return void
	 */
	public function createEventFreeAdmin(AcceptanceTester $I, AdminLoginStep $Login, EventPage $EventPage, EventStep $EventStep)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		// $Login->doAdminLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));

		$I->am('admin user - acting as event creator');
		$I->wantTo('create new free event by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(EventPage::$URL);

		// Title, alias
		$title = 'TJFT-Admin Free ' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;
		$desc  = $this->faker->sentence($nbWords = 50, $variableNbWords = true);

		// Call steps
		$EventStep->fillEventBasicDetails($title, $alias);
		$EventStep->fillEventStartEndVenueDetails($desc);
		$EventStep->fillEventBookingStartEndDetails();

		$freeTicketTitle = 'Free pass';
		$freeTicketDesc  = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
		$EventStep->fillEventTicketTypesDetails($freeTicketTitle, $freeTicketDesc);

		// Final step - save and close, check for urlsuccess message
		$I->click(EventPage::$elements['eventSaveAndClose']);
		$I->wait('10');
		$I->seeInCurrentUrl('view=events');

		// Logout steps
		// $Login->doAdminLogout();
	}

	/**
	 * Function to create PAID event by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I          The AcceptanceTester Object
	 * @param   Object            $Login      Login step class
	 * @param   Object            $EventPage  EventPage page class
	 * @param   Object            $EventStep  Event step class
	 *
	 * @return void
	 */
	public function createEventPaidAdmin(AcceptanceTester $I, AdminLoginStep $Login, EventPage $EventPage, EventStep $EventStep)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		// $Login->doAdminLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));

		$I->am('admin user - acting as event creator');
		$I->wantTo('create new PAID event by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(EventPage::$URL);

		// Title, alias
		$title = 'TJFT-Admin Paid ' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;
		$desc  = $this->faker->sentence($nbWords = 50, $variableNbWords = true);

		// Call steps
		$EventStep->fillEventBasicDetails($title, $alias);
		$EventStep->fillEventStartEndVenueDetails($desc);
		$EventStep->fillEventBookingStartEndDetails();

		$paidTicketTitle = 'Gold pass';
		$paidTicketDesc  = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
		$paidTicketPrice = 5;
		$ticketEndDate   = date("Y-m-d H:i:s", strtotime("+15 days", time()));
		$EventStep->fillEventTicketTypesDetails($paidTicketTitle, $paidTicketDesc, $ticketEndDate, $paidTicketPrice);

		// Final step - save and close, check for urlsuccess message
		$I->click(EventPage::$elements['eventSaveAndClose']);
		$I->wait('10');
		$I->seeInCurrentUrl('view=events');

		// // Logout steps
		// $Login->doAdminLogout();
	}
}
