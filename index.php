<?php
require  'core'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'terminal.php';

$pricelist = [
    'ZA' => [
        'ppi' => '2',
        'bulk' => [
            'min_qtty' => '4',
            'price' => '7'
        ]
    ],
    'YB' => [
        'ppi' => '12'
    ],
    'FC' => [
        'ppi' => '1.25',
        'bulk' => [
            'min_qtty' => '6',
            'price' => '6'
        ]
    ],
    'GD' => [
        'ppi' => '0.15'
    ]
];

$terminal = new Lane\Core\Classes\Terminal($pricelist);

//scenario 1 = 32.40
//$terminal->scanItem("ZA");
//$terminal->scanItem("YB");
//$terminal->scanItem("FC");
//$terminal->scanItem("GD");
//$terminal->scanItem("ZA");
//$terminal->scanItem("YB");
//$terminal->scanItem("ZA");
//$terminal->scanItem("ZA");

//scenario 2 = 7.25
//$terminal->scanItem("FC");
//$terminal->scanItem("FC");
//$terminal->scanItem("FC");
//$terminal->scanItem("FC");
//$terminal->scanItem("FC");
//$terminal->scanItem("FC");
//$terminal->scanItem("FC");

//scenario 3 = 15.4
$terminal->scanItem("ZA");
$terminal->scanItem("YB");
$terminal->scanItem("FC");
$terminal->scanItem("GD");

$terminal->getTotal();