<?php

    // this is indexed array type
    $laptop_brand = array("HP","Lenovo","Asus","Dell");  
    echo var_dump($laptop_brand);   // var_dump is a metod of show the array values  ex:-      array(4) { [0]=> string(2) "HP" [1]=> string(6) "Lenovo" [2]=> string(4) "Asus" [3]=> string(4) "Dell" }
    echo "\n";
    echo var_dump($laptop_brand[0]);  

     // define are use for constats  we can use constatnt array for it
         // cant re defined , cannot change they are fixe values
    define("Laptops","hp , dell and apple");
    echo Laptops;
    define("laptops",["hp","dell","apple"]);  // constatnt arrray
    echo laptops[0];


     // this is indexed array type
    $fruits = ["Apple", "Banana", "Orange", "Mango"]; 
    echo $fruits[0];

    //this is associative arrays
    $student = [
        "name" => "John Doe",
        "age" => 25,
        "email" => "john@example.com"
    ];
    echo $student["name"];


    // this is mul ti dimantional arrays
    $employees = array(
        array("John Doe", "Manager", 5000),
        array("Jane Smith", "Developer", 4000),
        array("Mike Johnson", "Designer", 3500)
    );
 
    //modern version
    // $employees = [
    //     ["John Doe", "Manager", 5000],
    //     ["Jane Smith", "Developer", 4000],
    //     ["Mike Johnson", "Designer", 3500]
    // ];
    echo $employees[0][0]; 

    print_r($employees);

?>