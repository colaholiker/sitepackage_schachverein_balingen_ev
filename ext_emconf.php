<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage_schachverein_balingen_ev".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage Schachverein Balingen e.V.',
    'description' => 'Schachverein Balingen e.V.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SchachvereinBalingenEv\\SitepackageSchachvereinBalingenEv\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'author' => 'Sebastian During',
    'author_email' => 'sebastian.during@svbalingen.de',
    'author_company' => 'Schachverein Balingen e.V.',
    'version' => '1.0.0',
];
