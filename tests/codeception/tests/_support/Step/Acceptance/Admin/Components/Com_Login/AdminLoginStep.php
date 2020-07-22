<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Ekcontent
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance\Admin\Components\Com_Login;

use Page\Acceptance\Admin\Components\Com_Login\AdminLoginPage as AdminLoginPage;

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
class AdminLoginStep extends \AcceptanceTester
{
	/**
	 * Function to execute site login for Joomla 3
	 *
	 * @param   string  $user      Username
	 * @param   string  $password  Password
	 *
	 * @return void
	 */
	public function doAdminLogin($user, $password)
	{
		$I = $this;
		$I->am('Site Admin');
		$I->amOnPage(AdminLoginPage::$URL);

		// Wait for login text to appear
		$I->waitForText(AdminLoginPage::$texts['loginMsgText'], 30);

		$I->fillField(AdminLoginPage::$elements['username'], $user);
		$I->fillField(AdminLoginPage::$elements['password'], $password);

		$I->click(AdminLoginPage::$texts['loginMsgText']);
	}

	/**
	 * Function to execute site logout
	 *
	 * @return void
	 */
	public function doAdminLogout()
	{
		$I = $this;

		$I->click(AdminLoginPage::$elements['adminUserMenu']);
		$I->click(AdminLoginPage::$elements['adminUserMenuLogout']);
	}
}
