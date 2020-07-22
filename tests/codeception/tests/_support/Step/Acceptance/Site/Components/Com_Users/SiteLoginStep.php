<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Ekcontent
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance\Site\Components\Com_Users;

use Page\Acceptance\Site\Components\Com_Users\SiteLoginPage as SiteLoginPage;

/**
 * Class LoginSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.4
 *
 */
class SiteLoginStep extends \AcceptanceTester
{
	/**
	 * Function to execute site login for Joomla 3
	 *
	 * @param   string  $user      Username
	 * @param   string  $password  Password
	 *
	 * @return void
	 */
	public function doSiteLogin($user, $password)
	{
		$I = $this;
		$I->am('Site Site');
		$I->amOnPage(SiteLoginPage::$URL);

		// Wait for login text to appear
		$I->waitForText(SiteLoginPage::$texts['loginMsgText'], 30);

		$I->fillField(SiteLoginPage::$elements['username'], $user);
		$I->fillField(SiteLoginPage::$elements['password'], $password);

		// Click not working, so using pressKey
		$I->click('Log in');

		// $I->pressKey(SiteLoginPage::$elements['loginBtn'], \Facebook\WebDriver\WebDriverKeys::ENTER);
		// $I->click(SiteLoginPage::$elements['loginBtn']);

		// //*[@id="t3-content"]/div[2]/div/form/fieldset/div[3]/div/button
		// #t3-content > div.login-wrap > div > form > fieldset > div:nth-child(3) > div > button

		$I->wait(1);
	}

	/**
	 * Function to execute site logout
	 *
	 * @return void
	 */
	public function doSiteLogout()
	{
		$I = $this;

		// $I->click(SiteLoginPage::$elements['SiteUserMenu']);
		// $I->click(SiteLoginPage::$elements['SiteUserMenuLogout']);

		$I->amOnPage('user-menu/logout');
	}
}
