<?php
/* ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di
casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo
tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 */

$arrayPartite = [
   [
    "Olimpia Milano",
    "squadraOspite" => "Cantù",
    "puntiCasa" => "55",
    "puntiTrasferta" => "60"
   ],
   [
    "Roma",
    "squadraOspite" => "Genova",
    "puntiCasa" => "30",
    "puntiTrasferta" => "40"
   ],
   [
    "Firenze",
    "squadraOspite" => "Parma",
    "puntiCasa" => "80",
    "puntiTrasferta" => "56"
   ],
   [
    "Napoli",
    "squadraOspite" => "Torino",
    "puntiCasa" => "44",
    "puntiTrasferta" => "78"
   ]
];

for ($i=0; $i < count($arrayPartite); $i++) { 
    $partita = $arrayPartite[$i][0]. "-" .$arrayPartite[$i]["squadraOspite"] . " | ";
    $risultato = $arrayPartite[$i]["puntiCasa"]. "-" . $arrayPartite[$i]["puntiTrasferta"]. "<br>";
    echo $partita;
    echo $risultato;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>