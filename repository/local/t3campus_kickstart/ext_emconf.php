<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 Campus Kickstart Extension',
    'description' => 'Base sceletton for TYPO3 extensions',
    'category' => 'plugin',
    'author' => 'Kenvin',
    'author_email' => 'john.doe@example.org',
    'author_company' => 'Slavlee',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
