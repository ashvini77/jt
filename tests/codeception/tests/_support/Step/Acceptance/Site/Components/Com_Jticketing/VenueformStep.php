<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Ekcontent
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance\Site\Components\Com_Jticketing;

use Page\Acceptance\Site\Components\Com_Jticketing\VenueformPage as VenueformPage;

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
class VenueformStep extends \AcceptanceTester
{
	/**
	 * Function to fill in offline venue details
	 *
	 * @param   string  $title  title
	 * @param   string  $alias  alias
	 *
	 * @return void
	 */
	public function fillVenueformOfflineDetails($title, $alias)
	{
		$I = $this;

		// Title, alias
		$I->fillField(VenueformPage::$elements['venueTitle'], $title);
		$I->fillField(VenueformPage::$elements['venueAlias'], $alias);

		// Select category, access
		$I->selectOption(VenueformPage::$elements['venueCategory'], 'General');
		$I->wait(1);

		$I->fillField(VenueformPage::$elements['venueAddress'], 'Paris');
		$I->wait(2);

		$I->pressKey(VenueformPage::$elements['venueAddress'], \Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
		$I->pressKey(VenueformPage::$elements['venueAddress'], \Facebook\WebDriver\WebDriverKeys::ENTER);

		// $I->wait(1);
		// $I->click(VenueformPage::$elements['venuePrivacy']);

		$I->wait(5);
	}

	/**
	 * Function to fill online venue details
	 *
	 * @param   string  $title         title
	 * @param   string  $alias         alias
	 * @param   string  $venueDetails  venueDetails
	 *
	 * @return void
	 */
	public function fillVenueformOnlineDetails($title, $alias, $venueDetails)
	{
		$I = $this;

		// Title, alias
		$I->fillField(VenueformPage::$elements['venueTitle'], $title);
		$I->fillField(VenueformPage::$elements['venueAlias'], $alias);

		// Select category, access
		$I->selectOption(VenueformPage::$elements['venueCategory'], 'General');
		$I->wait(1);

		$I->click(VenueformPage::$elements['onlineVenueYes']);
		$I->wait(1);

		$I->click(VenueformPage::$elements['onlineProvider']);
		$I->wait(1);
		$I->click(VenueformPage::$elements['onlineProviderOption']);
		$I->wait(1);

		$I->fillField(VenueformPage::$elements['onlineUserName'], $venueDetails['username']);
		$I->fillField(VenueformPage::$elements['onlineUserPassword'], $venueDetails['password']);
		$I->fillField(VenueformPage::$elements['onlineProviderAccURL'], $venueDetails['url']);
		$I->fillField(VenueformPage::$elements['onlineProviderFolderID'], $venueDetails['folder']);
		$I->wait(1);
	}
}
