<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Welcome Site Package',
    'description' => 'Site package for the Welcome Firose website',
    'category' => 'templates',
    'author' => 'Firose Munna',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
