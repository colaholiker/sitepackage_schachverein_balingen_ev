<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Ssch\TYPO3Rector\TYPO313\v1\MigrateGeneralUtilityHmacToHashServiceHmacRector;
use Ssch\TYPO3Rector\TYPO313\v1\RenamePageTreeNavigationComponentIdRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../config.php');
    $rectorConfig->rule(MigrateGeneralUtilityHmacToHashServiceHmacRector::class);
    $rectorConfig->rule(RenamePageTreeNavigationComponentIdRector::class);
};
