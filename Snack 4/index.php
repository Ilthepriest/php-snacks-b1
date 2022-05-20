<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere
lo stesso numero più di una volta */

$listRandomNumber = [];

while (count($listRandomNumber) < 15){
    $number = rand(1, 100);
    
    if(!in_array($number, $listRandomNumber)){
        // $listRandomNumber[] = $number;
        array_push($listRandomNumber, $number);
    }

}
var_dump($listRandomNumber);
    
?>