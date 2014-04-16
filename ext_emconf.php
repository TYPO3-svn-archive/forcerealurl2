<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "forcerealurls2".
 *
 * Auto generated 16-04-2014 14:17
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Force RealURLs (avoid infinite redirect in Workspaces)',
	'description' => 'Working with Workspaces and Versioning!! Checks if a page is trying to be accessed by an old style URL, and does a 301 redirect to the appropriate URL if so. This extension is based in FORCEREALURLS from Christian Jul Jensen.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.3.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stabil',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Marcos Fadul',
	'author_email' => 'info@edirect24.com',
	'author_company' => 'eDIRECT24 UG',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:13:"ChangeLog.txt";s:4:"7856";s:26:"class.tx_forcerealurls.php";s:4:"e6e8";s:12:"ext_icon.gif";s:4:"e53b";s:17:"ext_localconf.php";s:4:"d3b8";s:14:"doc/manual.sxw";s:4:"4a03";}',
	'suggests' => array(
	),
);

?>