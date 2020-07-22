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
class OrderPage extends \AcceptanceTester
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = '/index.php?option=com_jticketing&view=events';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'paidEvent'   => '//*[@id="jtwrap"]/div[2]/div[1]/div/div[1]/a',
		'freeEvent'   => '//*[@id="jtwrap"]/div[2]/div[2]/div/div[1]/a',
		'bookButton'  => '//*[@id="jtwrap"]/div[1]/div[2]/div[5]/div[1]/div/a',
		'bookButton1' => '//*[@id="jtwrap"]/div[1]/div[2]/div[5]/div[1]/div/div[2]/span/a',

		'bookFreeButton' => 'com_jticketing_button',
		'ticketCount'   => 'type_ticketcounts',

		// Attendee details
		'attendeeFirstName'   => '//*[@id="attendee_field_1_0"]',
		'attendeeLastName'    => '//*[@id="attendee_field_2_0"]',
		'attendeePhoneNumber' => '//*[@id="attendee_field_3_0"]',
		'attendeeEmail'       => '//*[@id="attendee_field_4_0"]',

		// Billing details
		'firstName'    => '//*[@id="fnam"]',
		'lastName'     => '//*[@id="lnam"]',
		'email'        => '//*[@id="email1"]',
		'countryCode'  => '//*[@id="country_mobile_code"]',
		'mobileNumber' => '//*[@id="phon"]',
		'address'      => '//*[@id="addr"]',
		'country'      => '//*[@id="country"]',
		'state'        => '//*[@id="state"]',
		'city'         => '//*[@id="city"]',
		'zipcode'      => '//*[@id="zip"]',

		// Payment details
		'paymentGateway' => '//*[@id="bycheck"]',
		'comfirmOrder'   => '//*[@id="btn_check"]',

		// Next button
		'nextButton'   => '//*[@id="btnWizardNext"]',

		'backButton'   => '//*[@id="printDiv"]/div[1]/div/div[1]/h4/a',
	);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'orderPlacedMsg' => 'Order placed successfully.',
	);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $sampleData = array(
		'mobileCodeValue'   => 'France (+33)',
		'countryValue' => 'France',
		'stateValue'   => 'Centre',
		'cityValue'    => 'Paris',
	);
}
