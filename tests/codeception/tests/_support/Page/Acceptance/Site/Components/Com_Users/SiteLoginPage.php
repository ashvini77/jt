<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Page\Acceptance\Site\Components\Com_Users;

/**
 * Class SiteLoginPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.0
 *
 */
class SiteLoginPage extends \AcceptanceTester
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = 'index.php?option=com_users';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'username' => '#username',
		'password' => '#password',
		'loginBtn' => '#t3-content > div.login-wrap > div > form > fieldset > div:nth-child(3) > div > button',

		// 'SiteUserMenu'       => '/html/body/nav/div/div/div/ul[3]/li/a/span[1]',
		// 'SiteUserMenuLogout' => '/html/body/nav/div/div/div/ul[3]/li/ul/li[5]/a',
	);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'loginMsgText' => 'LOG IN'
	);
}
