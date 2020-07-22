<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Page\Acceptance\Admin\Components\Com_Login;

/**
 * Class SiteLoginPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.0
 *
 */
class AdminLoginPage extends \AcceptanceTester
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = '/administrator';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'username' => '#mod-login-username',
		'password' => '#mod-login-password',

		'adminUserMenu'       => '/html/body/nav/div/div/div/ul[3]/li/a/span[1]',
		'adminUserMenuLogout' => '/html/body/nav/div/div/div/ul[3]/li/ul/li[5]/a',
	);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'loginMsgText' => 'Log in'
	);
}
