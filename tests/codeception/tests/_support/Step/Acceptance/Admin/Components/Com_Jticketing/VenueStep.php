<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Com_Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance\Admin\Components\Com_Jticketing;

use Page\Acceptance\Admin\Components\Com_Jticketing\VenuePage as VenuePage;

/**
 * Class VenueStep
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.4
 *
 */
class VenueStep extends \AcceptanceTester
{
	/**
	 * Function to fill in offline venue details
	 *
	 * @param   string  $title  title
	 * @param   string  $alias  alias
	 *
	 * @return void
	 */
	public function fillVenueOfflineDetails($title, $alias)
	{
		$I = $this;

		// Title, alias
		$I->fillField(VenuePage::$elements['venueTitle'], $title);
		$I->fillField(VenuePage::$elements['venueAlias'], $alias);

		// Select category, access
		$I->selectOption(VenuePage::$elements['venueCategory'], 'General');
		$I->wait(1);

		$I->fillField(VenuePage::$elements['venueAddress'], 'Paris');
		$I->wait(2);

		$I->pressKey(VenuePage::$elements['venueAddress'], \Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
		$I->pressKey(VenuePage::$elements['venueAddress'], \Facebook\WebDriver\WebDriverKeys::ENTER);
		$I->wait(2);
	}

	/**
	 * Function to fill online venue details
	 *
	 * @param   string  $title         title
	 * @param   string  $alias         alias
	 * @param   array   $venueDetails  venueDetails
	 *
	 * @return void
	 */
	public function fillVenueOnlineDetails($title, $alias, $venueDetails)
	{
		$I = $this;

		// Title, alias
		$I->fillField(VenuePage::$elements['venueTitle'], $title);
		$I->fillField(VenuePage::$elements['venueAlias'], $alias);

		// Select category, access
		$I->selectOption(VenuePage::$elements['venueCategory'], 'General');
		$I->wait(1);

		$I->click(VenuePage::$elements['onlineVenueYes']);
		$I->wait(1);

		$I->click(VenuePage::$elements['onlineProvider']);
		$I->wait(1);
		$I->click(VenuePage::$elements['onlineProviderOption']);
		$I->wait(1);

		$I->fillField(VenuePage::$elements['onlineUserName'], $venueDetails['username']);
		$I->fillField(VenuePage::$elements['onlineUserPassword'], $venueDetails['password']);
		$I->fillField(VenuePage::$elements['onlineProviderAccURL'], $venueDetails['url']);
		$I->fillField(VenuePage::$elements['onlineProviderFolderID'], $venueDetails['folder']);
		$I->wait(1);
	}
}
