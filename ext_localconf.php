<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage_schachverein_balingen_ev'] = 'EXT:sitepackage_schachverein_balingen_ev/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage_schachverein_balingen_ev/Configuration/TsConfig/Page/All.tsconfig">');
