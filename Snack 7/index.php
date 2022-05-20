<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti
scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$alunniClasse = [
    [
        "nome" => "Marcello",
        "cognome" => "Del Vecchio",
        "voti" => [7, 5, 8, 4, 6, 9 ]
    ],
    [
        "nome" => "Francesco",
        "cognome" => "Rossi",
        "voti" => [10, 7, 8, 8, 6, 9 ]
    ],
    [
        "nome" => "Valeria",
        "cognome" => "Chianti",
        "voti" => [4, 5, 3, 4, 6, 6 ]
    ],
    [
        "nome" => "Romeo",
        "cognome" => "D'amato",
        "voti" => [10, 9, 8, 10, 6, 9 ]
    ],
    [
        "nome" => "Filippo",
        "cognome" => "Barbato",
        "voti" => [5, 5, 8, 4, 6, 3 ]
    ],
    [
        "nome" => "Marina",
        "cognome" => "Monfrini",
        "voti" => [2, 5, 8, 4, 6, 7 ]
    ],
];

  for ($i=0; $i < count($alunniClasse[$i]["voti"]) ; $i++) { 
    $voti = $alunniClasse[$i]["voti"];
    $votiToString = implode("-" ,$voti);
    $alunno = $alunniClasse[$i];
    $somma = (array_sum($alunniClasse[$i]["voti"]));
    $media = $somma / count($alunniClasse[$i]["voti"]);
    echo $alunno["nome"]. " " .$alunno["cognome"]." " ."<br>";
    echo "VOTI". " ". $votiToString. " <br>";
    echo "MEDIA". " ". $media. "<br>";
    }
?>