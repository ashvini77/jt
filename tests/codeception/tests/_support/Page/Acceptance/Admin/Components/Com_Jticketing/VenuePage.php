<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    JTicketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2018 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Page\Acceptance\Admin\Components\Com_Jticketing;

/**
 * Class SiteLoginPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.0
 *
 */
class VenuePage extends \AcceptanceTester
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = '/administrator/index.php?option=com_jticketing&view=venue&layout=edit';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'venueTitle'        => '//*[@id="jform_name"]',
		'venueAlias'        => '//*[@id="jform_alias"]',

		'venueCategory'     => '#jform_venue_category',

		'venuePublishYes'   => '//*[@id="jform_state"]/label[1]',
		'venuePublishNo'    => '//*[@id="jform_state"]/label[2]',

		'onlineVenueYes'    => '//*[@id="jform_online"]/label[1]',
		'onlineVenueNo'     => '//*[@id="jform_online"]/label[2]',

		'venueAddress'      => '//*[@id="jform_address"]',

		// Online venue
		'onlineProvider'       => '//*[@id="jformonline_provider_chzn"]/a/div/b',
		'onlineProviderOption' => '//*[@id="jformonline_provider_chzn"]/div/ul/li[2]',

		// Event start time, end time
		'onlineUserName'         => '//*[@id="jform_plugin__api_username"]',
		'onlineUserPassword'     => '//*[@id="jform_plugin__api_password"]',
		'onlineProviderAccURL'   => '//*[@id="jform_plugin__host_url"]',
		'onlineProviderFolderID' => '//*[@id="jform_plugin__source_sco_id"]',
		'venueAccess'            => '#jform_privacy',

		'venueSaveAndClose' => '//*[@id="toolbar-save"]/button'
	);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'venueSavedMsg' => 'Venue saved successfully.',
	);
}
