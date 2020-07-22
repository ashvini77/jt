<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Ekcontent
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance\Site\Components\Com_Jticketing;

use Page\Acceptance\Site\Components\Com_Jticketing\OrderPage as OrderPage;

/**
 * Class VenueformStep
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.4
 *
 */
class OrderStep extends \AcceptanceTester
{
	/**
	 * Function to fill in offline venue details
	 *
	 * @return void
	 */
	public function fillTicketDetails()
	{
		$I = $this;

		// Number of tickets
		$I->fillField(['class' => OrderPage::$elements['ticketCount']], '1');
		$I->wait(1);

		$I->click(OrderPage::$elements['nextButton']);
		$I->wait(5);
	}

	/**
	 * Function to fill online venue details
	 *
	 * @param   Array  $attendeeInfo  Attendee info
	 *
	 * @return void
	 */
	public function fillAttendeeDetails($attendeeInfo)
	{
		$I = $this;
		$I->wait(2);

		// Attendee details
		$I->fillField(OrderPage::$elements['attendeeFirstName'], $attendeeInfo['attendeeFName']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['attendeeLastName'], $attendeeInfo['attendeeLName']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['attendeePhoneNumber'], $attendeeInfo['attendeePhoneNumber']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['attendeeEmail'], $attendeeInfo['attendeeEmail']);

		$I->click(OrderPage::$elements['nextButton']);
		$I->wait(5);
	}

	/**
	 * Function to fill online venue details
	 *
	 * @param   Array  $billInfo  Bill info
	 *
	 * @return void
	 */
	public function fillBillDetails($billInfo)
	{
		$I = $this;

		// Attendee details
		$I->fillField(OrderPage::$elements['firstName'], $billInfo['FnameValue']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['lastName'], $billInfo['LnameValue']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['email'], $billInfo['emailValue']);
		$I->wait(1);

		$I->selectOption(OrderPage::$elements['countryCode'], OrderPage::$sampleData['mobileCodeValue']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['mobileNumber'], $billInfo['mobileNumberValue']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['address'], $billInfo['addressValue']);
		$I->wait(1);

		$I->selectOption(OrderPage::$elements['country'], OrderPage::$sampleData['countryValue']);
		$I->wait(1);

		$I->selectOption(OrderPage::$elements['state'], OrderPage::$sampleData['stateValue']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['city'], $billInfo['cityValue']);
		$I->wait(1);

		$I->fillField(OrderPage::$elements['zipcode'], $billInfo['zipcodeValue']);
		$I->wait(1);

		$I->click(OrderPage::$elements['nextButton']);
		$I->wait(5);
	}

	/**
	 * Function to fill in offline venue details
	 *
	 * @return void
	 */
	public function fillPaymentDetails()
	{
		$I = $this;

		// Number of tickets
		$I->click(OrderPage::$elements['paymentGateway']);
		$I->wait(1);

		$I->click(OrderPage::$elements['comfirmOrder']);
		$I->wait(8);
	}
}
