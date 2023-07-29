<?php
   // if elase
   
   $x = 10 ;
   $y = 20 ;

   if($x > 2){
       $y = 30;
   }elseif ($x > 50){
       $x =  100;
   }else{
       $y = 12;
   }

   print_r($x ." " . $y);



   // switch case 
   $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "It's Monday!";
            break;
        case "Tuesday":
            echo "It's Tuesday!";
            break;
        default:
            echo "It's some other day!";
    }


    // tunary operator 
    $age = 20;

    $message = $age >= 18 ? "You are an adult." : "You are a minor.";
    echo $message; 

?>