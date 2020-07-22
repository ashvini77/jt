<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

use Page\Acceptance\Site\Components\Com_Users\SiteLoginPage as SiteLoginPage;
use Page\Acceptance\Site\Components\Com_Jticketing\EventformPage as EventformPage;

use Step\Acceptance\Site\Components\Com_Users\SiteLoginStep as SiteLoginStep;
use Step\Acceptance\Site\Components\Com_Jticketing\EventformStep as EventformStep;

/**
 * Cest class for content creation form
 *
 * @since  1.6
 */
class EventformCest
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
		if ($I->loadSessionSnapshot('siteLogin'))
		{
			return;
		}
	}

	/**
	 * Function for site login
	 *
	 * @param   AcceptanceTester  $I      The AcceptanceTester Object
	 * @param   Object            $Login  Login step class
	 *
	 * @return void
	 */
	public function siteLogin(AcceptanceTester $I, SiteLoginStep $Login)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		$Login->doSiteLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));

		$Login->saveSessionSnapshot('siteLogin');
	}

	/**
	 * Function to create FREE event by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I              The AcceptanceTester Object
	 * @param   Object            $Login          Login step class
	 * @param   Object            $EventformPage  EventformPage page class
	 * @param   Object            $EventformStep  Eventform step class
	 *
	 * @return void
	 */
	public function createEventFree(AcceptanceTester $I, SiteLoginStep $Login, EventformPage $EventformPage, EventformStep $EventformStep)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		// $Login->doSiteLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));

		$I->am('Site user - acting as event creator');
		$I->wantTo('create new FREE event by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(EventformPage::$URL);

		// Title, alias
		$title = 'TJFT-Site Free ' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;
		$desc  = $this->faker->sentence($nbWords = 50, $variableNbWords = true);

		// Call steps
		$EventformStep->fillEventBasicDetails($title, $alias);
		$EventformStep->fillEventStartEndVenueDetails($desc);
		$EventformStep->fillEventBookingStartEndDetails();

		$freeTicketTitle = 'Free pass';
		$freeTicketDesc  = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
		$EventformStep->fillEventTicketTypesDetails($freeTicketTitle, $freeTicketDesc);

		// Final step - save and close, check for urlsuccess message
		$I->click(EventformPage::$elements['eventSaveAndClose']);
		$I->wait('10');
		$I->seeInCurrentUrl('events');

		// Logout steps
		// $Login->doSiteLogout();
	}

	/**
	 * Function to create PAID event by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I              The AcceptanceTester Object
	 * @param   Object            $Login          Login step class
	 * @param   Object            $EventformPage  EventformPage page class
	 * @param   Object            $EventformStep  Eventform step class
	 *
	 * @return void
	 */
	public function createEventPaid(AcceptanceTester $I, SiteLoginStep $Login, EventformPage $EventformPage, EventformStep $EventformStep)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		// $Login->doSiteLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));

		$I->am('Site user - acting as event creator');
		$I->wantTo('create new PAID event by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(EventformPage::$URL);

		// Title, alias
		$title = 'TJFT-Site PAID ' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;
		$desc  = $this->faker->sentence($nbWords = 50, $variableNbWords = true);

		// Call steps
		$EventformStep->fillEventBasicDetails($title, $alias);
		$EventformStep->fillEventStartEndVenueDetails($desc);
		$EventformStep->fillEventBookingStartEndDetails();

		$paidTicketTitle = 'Gold pass';
		$paidTicketDesc  = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
		$paidTicketPrice = 5;
		$ticketEndDate   = date("Y-m-d H:i:s", strtotime("+15 days", time()));
		$EventformStep->fillEventTicketTypesDetails($paidTicketTitle, $paidTicketDesc, $ticketEndDate, $paidTicketPrice);

		// Final step - save and close, check for urlsuccess message
		$I->click(EventformPage::$elements['eventSaveAndClose']);
		$I->wait('10');
		$I->seeInCurrentUrl('events');

		// Logout steps
		$Login->doSiteLogout();
	}

	/**
	 * Selects an option in a Chosen Selector based on its id
	 *
	 * @param   string  $selectId  The id of the <select> element
	 * @param   string  $option    The text in the <option> to be selected in the chosen selector
	 *
	 * @return void
	 */
	/*private function _selectOptionInChosenById(AcceptanceTester $I, $selectId, $option)
	{
		$chosenSelectID = $selectId . '_chzn';

		$I->debug("I open the $chosenSelectID chosen selector");
		$I->click(['xpath' => "//div[@id='$chosenSelectID']/a/div/b"]);
		$I->debug("I select $option");
		$I->click(['xpath' => "//*[@id='$chosenSelectID']/div/ul//li[text()='$option']"]);

		$I->wait(1);
	}*/
}
