<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

use Page\Acceptance\Site\Components\Com_Users\SiteLoginPage as SiteLoginPage;
use Page\Acceptance\Site\Components\Com_Jticketing\OrderPage as OrderPage;

use Step\Acceptance\Site\Components\Com_Users\SiteLoginStep as SiteLoginStep;
use Step\Acceptance\Site\Components\Com_Jticketing\OrderStep as OrderStep;

/**
 * Cest class for content creation form
 *
 * @since  1.6
 */
class OrderCest
{
	/**
	 * Constructor
	 *
	 */
	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->fakerPhone = Faker\Provider\en_HK\PhoneNumber::mobileNumber();
		$this->fakerCountry = Faker\Provider\en_IN\Address::country();
		$this->fakerState = Faker\Provider\en_IN\Address::state();
		$this->fakerCity = Faker\Provider\en_IN\Address::city();
		$this->fakerPostcode = Faker\Provider\ms_MY\Address::postcode();
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
		$Login->doSiteLogin($I->getConfiguration('SiteUsername'), $I->getConfiguration('SiteUserPassword'));

		$Login->saveSessionSnapshot('siteLogin');
	}

	/**
	 * Function to create FREE event by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I          The AcceptanceTester Object
	 * @param   Object            $Login      Login step class
	 * @param   Object            $OrderPage  VenuePage page class
	 * @param   Object            $OrderStep  Venue step class
	 *
	 * @return void
	 */
	public function buyPaidTicketLoginUser(AcceptanceTester $I, SiteLoginStep $Login, OrderPage $OrderPage, OrderStep $OrderStep)
	{
		$I->am('site user - acting as ticket Buyer');
		$I->wantTo('buy paid ticket by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(OrderPage::$URL);

		$I->click(OrderPage::$elements['paidEvent']);
		$I->click(OrderPage::$elements['bookButton']);

		$attendeeInfo = Array();
		$attendeeInfo['attendeeFName'] = $this->faker->firstName;
		$attendeeInfo['attendeeLName'] = $this->faker->lastName;
		$attendeeInfo['attendeePhoneNumber'] = $this->faker->phoneNumber;
		$attendeeInfo['attendeeEmail'] = $this->faker->email;

		$billInfo = Array();
		$billInfo['FnameValue'] = $this->faker->firstName;
		$billInfo['LnameValue'] = $this->faker->lastName;
		$billInfo['emailValue'] = $this->faker->email;
		$billInfo['mobileCodeValue'] = $this->faker->countryCode;
		$billInfo['mobileNumberValue'] = $this->fakerPhone;
		$billInfo['addressValue'] = $this->faker->address;
		$billInfo['countryValue'] = $this->fakerCountry;
		$billInfo['stateValue'] = $this->fakerState;
		$billInfo['cityValue'] = $this->fakerCity;
		$billInfo['zipcodeValue'] = $this->fakerPostcode;

		// Call steps
		$OrderStep->fillTicketDetails();
		$OrderStep->fillAttendeeDetails($attendeeInfo);
		$OrderStep->fillBillDetails($billInfo);
		$OrderStep->fillPaymentDetails();

		// Final step - save and close, check for urlsuccess message
		$I->click(OrderPage::$elements['backButton']);
		$I->wait('2');

		// Logout steps
		// $Login->doSiteLogout();
	}

	/**
	 * Function to create FREE event by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I          The AcceptanceTester Object
	 * @param   Object            $Login      Login step class
	 * @param   Object            $OrderPage  VenuePage page class
	 * @param   Object            $OrderStep  Venue step class
	 *
	 * @return void
	 */
	public function buyFreeTicketLoginUser(AcceptanceTester $I, SiteLoginStep $Login, OrderPage $OrderPage, OrderStep $OrderStep)
	{
		$I->am('site user - acting as ticket Buyer');
		$I->wantTo('buy free ticket by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(OrderPage::$URL);
		$I->wait(2);
		$I->click(OrderPage::$elements['freeEvent']);

		$I->see(OrderPage::$elements['bookButton']);
		$I->click(OrderPage::$elements['bookButton']);

		// Call steps
		$OrderStep->fillTicketDetails();

		$attendeeInfo = Array();
		$attendeeInfo['attendeeFName'] = $this->faker->firstName;
		$attendeeInfo['attendeeLName'] = $this->faker->lastName;
		$attendeeInfo['attendeePhoneNumber'] = $this->faker->phoneNumber;
		$attendeeInfo['attendeeEmail'] = $this->faker->email;

		$OrderStep->fillAttendeeDetails($attendeeInfo);

		$I->wait('5');
		$I->waitForElementVisible(OrderPage::$elements['backButton']);

		// Final step - save and close, check for urlsuccess message
		$I->click(OrderPage::$elements['backButton']);
		$I->wait('2');

		// Logout steps
		$Login->doSiteLogout();
	}
}
