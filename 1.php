<?php 

$arr = [
    [
        'a'=>1,
        'b' => 3,
    ],
    [
        'a' =>2,
        'b' => 4,
    ],
    
    
    
    [
        'a' => 3,
        'b' =>4,
    ]
];

$arr2 = array_column($arr, null,'a');
$arr2 = array_column($arr, null,'c');
$arr2 = array_column($arr, null,'d');

var_dump('<pre>',$arr2);exit;
