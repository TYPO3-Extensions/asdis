<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

define('PATH_tx_asdis', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY));

// Register post rendernig hook
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['asdis']);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php'][$extConf['hook']][]  = 'EXT:asdis/Classes/Typo3/Hook/ContentPostProcAll.php:&Tx_Asdis_Typo3_Hook_ContentPostProcAll->process';
unset($extConf);

// Register scrapers
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'cssUrl',
	'class' => 'Tx_Asdis_Content_Scraper_Css_Url',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Css/Url.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlCssFile',
	'class' => 'Tx_Asdis_Content_Scraper_Html_CssFile',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/CssFile.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlAppleTouchIcon',
	'class' => 'Tx_Asdis_Content_Scraper_Html_AppleTouchIcon',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/AppleTouchIcon.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlCssAttribute',
	'class' => 'Tx_Asdis_Content_Scraper_Html_CssAttribute',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/CssAttribute.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlCssInline',
	'class' => 'Tx_Asdis_Content_Scraper_Html_CssInline',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/CssInline.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlEmbed',
	'class' => 'Tx_Asdis_Content_Scraper_Html_Embed',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/Embed.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlFavicon',
	'class' => 'Tx_Asdis_Content_Scraper_Html_Favicon',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/Favicon.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlImage',
	'class' => 'Tx_Asdis_Content_Scraper_Html_Image',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/Image.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlInputImage',
	'class' => 'Tx_Asdis_Content_Scraper_Html_InputImage',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/InputImage.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlOpenGraphImage',
	'class' => 'Tx_Asdis_Content_Scraper_Html_OpenGraphImage',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/OpenGraphImage.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlScript',
	'class' => 'Tx_Asdis_Content_Scraper_Html_Script',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/Script.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlCss3Image',
	'class' => 'Tx_Asdis_Content_Scraper_Html_Css3Image',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/Css3Image.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['scrapers'][] = array(
	'key'   => 'htmlMetaMsApplication',
	'class' => 'Tx_Asdis_Content_Scraper_Html_MetaMsApplication',
	'file'  => PATH_tx_asdis . 'Classes/Content/Scraper/Html/MetaMsApplication.php'
);

// Register filters
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['filters'][] = array(
	'key'   => 'bubblingPath',
	'class' => 'Tx_Asdis_System_Uri_Filter_BubblingPath',
	'file'  => PATH_tx_asdis . 'Classes/System/Uri/Filter/BubblingPath.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['filters'][] = array(
	'key'   => 'containsInlineData',
	'class' => 'Tx_Asdis_System_Uri_Filter_ContainsInlineData',
	'file'  => PATH_tx_asdis . 'Classes/System/Uri/Filter/ContainsInlineData.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['filters'][] = array(
	'key'   => 'containsProtocol',
	'class' => 'Tx_Asdis_System_Uri_Filter_ContainsProtocol',
	'file'  => PATH_tx_asdis . 'Classes/System/Uri/Filter/ContainsProtocol.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['filters'][] = array(
	'key'   => 'tooShort',
	'class' => 'Tx_Asdis_System_Uri_Filter_TooShort',
	'file'  => PATH_tx_asdis . 'Classes/System/Uri/Filter/TooShort.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['filters'][] = array(
	'key'   => 'wildcardProtocol',
	'class' => 'Tx_Asdis_System_Uri_Filter_WildcardProtocol',
	'file'  => PATH_tx_asdis . 'Classes/System/Uri/Filter/WildcardProtocol.php'
);

// Register distribution algorithms
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['distributionAlgorithms'][] = array(
	'key'   => 'hashBasedGroups',
	'class' => 'Tx_Asdis_Domain_Model_DistributionAlgorithm_HashBasedGroups',
	'file'  => PATH_tx_asdis . 'Classes/Domain/Model/DistributionAlgorithm/HashBasedGroups.php'
);
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['asdis']['distributionAlgorithms'][] = array(
	'key'   => 'roundRobin',
	'class' => 'Tx_Asdis_Domain_Model_DistributionAlgorithm_RoundRobin',
	'file'  => PATH_tx_asdis . 'Classes/Domain/Model/DistributionAlgorithm/RoundRobin.php'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
	file_get_contents(PATH_tx_asdis . 'Configuration/TypoScript/setup.txt')
);