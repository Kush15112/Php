<?php
// Associative Array
// Key = Value
// Method 1
$a[0] = 10;
$a['c'] = "Computer";
$a['php'] = "Web Developement";
$a[10] = "Ten";
$a[50] = 50.50;

// Method 2
// Always Use This Method To Create An Array
$a = array(
    0=>10,
    "c"=>"Web Development",
    "php"=>"Ten",
    10=>"Ten",
    50=>50.50
);

// Print Value
echo "C for ".$a['c'];

foreach ($a as $value) {
    echo"</br> Value is $value</br>";
}
foreach ($a as $key => $value) {
    echo"</br> Key is $key</br> Value is $value</br>";
}