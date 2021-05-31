<?php
    // Numerical Array
    // Method 1
    $a[0] = 10; 
    $a[1] = 20; 
    $a[2] = 20.50; 
    $a[3] = "c"; 
    $a[4] = "4"; 
    
    // Method 2
    // Index Dynamic Array
    
    $a[] = 10; 
    $a[] = 20; 
    $a[] = 20.50; 
    $a[] = "c"; 
    $a[] = "4"; 

    // Method 3
    // Always use this method to create an array.
    $a = array(10,20,30,"C","C++",10.50,"PHP");
    // Print Array Value
    echo $a[3];

    // Print Whole Array
    for($i=0;$i<count($a);$i++){
        echo"</br>".$a[$i];
    }

    foreach ($a as $value) {
        echo"</br> Value is $value</br>";
    }
    foreach ($a as $key => $value) {
        echo"</br> Key is $key</br> Value is $value</br>";
    }
    // 3 Inbuilt Functions to Debug An Array
    echo"<pre>";
    print_r($a);
    echo"<pre>";

    echo"<pre>";
    var_dump($a);
    echo"<pre>";
