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

$somma = 0;
//SOLUZIONE 1

//CICLO SINGOLO STUDENTE E POI CICLO I SUOI VOTI UNA VOLTA FINITO PASSO AL SECONDO E COSI VIA...
  for ($i=0; $i < count($alunniClasse) ; $i++) { 
    $alunno = $alunniClasse[$i];  // singolo studente
    var_dump($alunno["nome"]);
    var_dump($alunno["cognome"]);
    $somma = 0; //azzero la somma prima di partire col prossimo studente
    for ($j=0; $j <count($alunno["voti"]) ; $j++) { 
        $votoPerStudente = $alunno["voti"][$j];  //ciclo ogni singolo voto nel array "voti di uno studente"
        $somma = $somma + $votoPerStudente;
    }
    var_dump($somma);
}

// SOLUZIONE 2

//CICLO OGNI STUDENTE TRAMITE INDICE ED ENTRO NEI SUOI VOTI
    for ($i=0; $i < count($alunniClasse[$i]["voti"]); $i++) { 
        $voti = $alunniClasse[$i]["voti"];
        $votiToString = implode("-" ,$voti); //implodo i voti per mostrarli distanziati da un trattino
        $alunno = $alunniClasse[$i];
        $somma = (array_sum($alunniClasse[$i]["voti"]));  //tramite la funzione sommo i voti dello studente corrispondente all'indice in cui mi trovo
        $media = $somma / count($voti);
        echo $alunno["nome"]. " " .$alunno["cognome"]." " ."<br>";
        echo "VOTI". " ". $votiToString. " <br>";
        echo "MEDIA". " ". $media. "<br>";
    }
?>