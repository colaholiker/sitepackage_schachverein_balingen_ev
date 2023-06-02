<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'sitepackage_schachverein_balingen_ev';

    /**
     * Default PageTS for SitepackageSchachvereinBalingenEv
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Sitepackage Schachverein Balingen e.V.'
    );
});
