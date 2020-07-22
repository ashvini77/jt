<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

use Page\Acceptance\Site\Components\Com_Users\SiteLoginPage as SiteLoginPage;
use Page\Acceptance\Site\Components\Com_Jticketing\VenueformPage as VenueformPage;

use Step\Acceptance\Site\Components\Com_Users\SiteLoginStep as SiteLoginStep;
use Step\Acceptance\Site\Components\Com_Jticketing\VenueformStep as VenueformStep;

/**
 * Cest class for content creation form
 *
 * @since  1.6
 */
class VenueformCest
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
	 * @param   Object            $VenueformPage  VenuePage page class
	 * @param   Object            $VenueformStep  Venue step class
	 *
	 * @return void
	 */
	public function createVenueformOfflineSite(AcceptanceTester $I, SiteLoginStep $Login, VenueformPage $VenueformPage, VenueformStep $VenueformStep)
	{
		$I->am('site user - acting as venue creator');
		$I->wantTo('create new offline venue by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(VenueformPage::$URL);

		// Title, alias
		$title = 'TJFT-Site Offline venue ' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;

		// Call steps
		$VenueformStep->fillVenueformOfflineDetails($title, $alias);

		// Final step - save and close, check for urlsuccess message
		// $I->click(VenueformPage::$elements['venueSaveAndClose']);
		$jsCode = 'jQuery("' . VenueformPage::$elements['venueSaveAndClose'] . '").click();';
		$I->executeJS($jsCode);
		$I->wait('2');
		$I->seeInCurrentUrl('view=venues');
	}

	/**
	 * Function to create PAID event by filling in ONLY required fields
	 *
	 * @param   AcceptanceTester  $I              The AcceptanceTester Object
	 * @param   Object            $Login          Login step class
	 * @param   Object            $VenueformPage  VenuePage page class
	 * @param   Object            $VenueformStep  Venue step class
	 *
	 * @return void
	 */
	public function createVenueOnlineSite(AcceptanceTester $I, SiteLoginStep $Login, VenueformPage $VenueformPage, VenueformStep $VenueformStep)
	{
		$I->am('site user - acting as venue creator');
		$I->wantTo('create new online venueSaveAndClose by filling ALL fields - REQUIRED fields ONLY');

		// Jump to form
		$I->amOnPage(VenueformPage::$URL);

		// Title, alias
		$title = 'TJFT-Site online venue' . date('d F y H:i') . ' - ' . $this->faker->randomNumber();
		$alias = $title;

		$venueDetails = Array();
		$venueDetails['username'] = $I->getConfiguration('onlineVenueUserName');
		$venueDetails['password'] = $I->getConfiguration('onlineVenueUserPassword');
		$venueDetails['url']   = $I->getConfiguration('onlineVenueProviderAccURL');
		$venueDetails['folder'] = $I->getConfiguration('onlineVenueProviderFolderID');

		// Call steps
		$VenueformStep->fillVenueformOnlineDetails($title, $alias, $venueDetails);

		// Final step - save and close, check for urlsuccess message
		$I->click(VenueformPage::$elements['venueSaveAndClose']);
		$I->wait('15');
		$I->seeInCurrentUrl('view=venues');

		// Logout steps
		$Login->doSiteLogout();
	}
}
