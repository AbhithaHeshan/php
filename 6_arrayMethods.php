<?php 
   //count()
   $fruits = ["Apple","Banana","Orange"];
   echo count($fruits);

   //array_push()
   array_push($fruits,"Mango");
   array_push($fruits,"Mango","Cherry");  // we can add more
   print_r($fruits);

   //array_search()

   //array_shift()

   //array_unshift()

   //array_mearge()

   //array_map
    $numbers = [1, 2, 3, 4, 5];

    $result = array_map(function($num) {
        return $num * 2; // Perform the transformation (multiplication by 2)
    }, $numbers);

    print_r($result);

?>

