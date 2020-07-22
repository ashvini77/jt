<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

use Page\Acceptance\Admin\Components\Com_Login\AdminLoginPage as AdminLoginPage;
use Page\Acceptance\Admin\Components\Com_Jticketing\VenuePage as VenuePage;

use Step\Acceptance\Admin\Components\Com_Login\AdminLoginStep as AdminLoginStep;
use Step\Acceptance\Admin\Components\Com_Jticketing\VenueStep as VenueStep;

/**
 * Cest class for content creation form
 *
 * @since  1.6
 */
class VenueCest
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
	public function _adminLogin(AcceptanceTester $I, AdminLoginStep $Login)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		$Login->doAdminLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));

		$Login->saveSessionSnapshot('adminLogin');
	}

	/**
	 * Function to create offline venue by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I          The AcceptanceTester Object
	 * @param   Object            $Login      Login step class
	 * @param   Object            $VenuePage  VenuePage page class
	 * @param   Object            $VenueStep  Venue step class
	 *
	 * @return void
	 */
	public function createVenueOfflineAdmin(AcceptanceTester $I, AdminLoginStep $Login, VenuePage $VenuePage, VenueStep $VenueStep)
	{
		$I->am('admin user - acting as venue creator');
		$I->wantTo('create new offline venue by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(VenuePage::$URL);

		// Title, alias
		$title = 'TJFT-Admin Offline venue ' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;

		// Call steps
		$VenueStep->fillVenueOfflineDetails($title, $alias);

		// Final step - save and close, check for urlsuccess message
		$I->click(VenuePage::$elements['venueSaveAndClose']);
		$I->wait('10');
		$I->seeInCurrentUrl('view=venues');

		// Logout steps
		// $Login->doAdminLogout();
	}

	/**
	 * Function to create online venue by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I          The AcceptanceTester Object
	 * @param   Object            $Login      Login step class
	 * @param   Object            $VenuePage  VenuePage page class
	 * @param   Object            $VenueStep  Venue step class
	 *
	 * @return void
	 */
	public function createVenueOnlineAdmin(AcceptanceTester $I, AdminLoginStep $Login, VenuePage $VenuePage, VenueStep $VenueStep)
	{
		$I->am('admin user - acting as venue creator');
		$I->wantTo('create new online venueSaveAndClose by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(VenuePage::$URL);

		// Title, alias
		$title = 'TJFT-Admin online venue' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;

		$venueDetails = Array();
		$venueDetails['username'] = $I->getConfiguration('onlineVenueUserName');
		$venueDetails['password'] = $I->getConfiguration('onlineVenueUserPassword');
		$venueDetails['url'] = $I->getConfiguration('onlineVenueProviderAccURL');
		$venueDetails['folder'] = $I->getConfiguration('onlineVenueProviderFolderID');

		// Call steps
		$VenueStep->fillVenueOnlineDetails($title, $alias, $venueDetails);

		// Final step - save and close, check for urlsuccess message
		$I->click(VenuePage::$elements['venueSaveAndClose']);
		$I->wait('10');
		$I->seeInCurrentUrl('view=venues');

		// Logout steps
		$Login->doAdminLogout();
	}
}
