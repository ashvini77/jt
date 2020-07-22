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
class VenueformPage extends \AcceptanceTester
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = '/index.php?option=com_jticketing&view=venueform';

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

		'venuePrivacy'      => '//*[@id="form-venue"]/div[1]/div[1]/div[8]/div[2]/label[1]/input',

		'onlineVenueYes'    => '//*[@id="form-venue"]/div[1]/div[1]/div[5]/div[2]/label[1]/input',
		'onlineVenueNo'     => '//*[@id="form-venue"]/div[1]/div[1]/div[5]/div[2]/label[2]/input',

		'venueAddress'      => '//*[@id="jform_address"]',

		// Online venue
		'onlineProvider'       => '//*[@id="jformonline_provider_chzn"]/a/div/b',
		'onlineProviderOption' => '//*[@id="jformonline_provider_chzn"]/div/ul/li[2]',

		// Event start time, end time
		'onlineUserName'         => '//*[@id="jform_plugin__api_username"]',
		'onlineUserPassword'     => '//*[@id="jform_plugin__api_password"]',
		'onlineProviderAccURL'   => '//*[@id="jform_plugin__host_url"]',
		'onlineProviderFolderID' => '//*[@id="jform_plugin__source_sco_id"]',
		'venueSaveAndClose'      => '#form-venue > div.form-group > div > button'
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
