<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'sitepackage_schachverein_balingen_ev';

    /**
     * Default TypoScript for SitepackageSchachvereinBalingenEv
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Sitepackage Schachverein Balingen e.V.'
    );
});
