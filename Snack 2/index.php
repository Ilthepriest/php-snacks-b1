<?php
/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella
documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e
che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
var_dump($name);
var_dump($mail);
var_dump($age);
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
    <form action="index.php" method="get">
        <label for="">Inserisci nome</label>
        <input type="text" id="name" name="name">
        <label for="">Inserisci email</label>
        <input type="text" id="mail" name="mail">
        <label for="">Inserisci età</label>
        <input type="text" id="age" name="age">
        <input type="submit" value="Submit">
    </form>

    <?php
    if(strlen($name) > 3 && str_contains($mail, ".") && str_contains($mail, "@") && is_numeric($age)){
        echo "Acesso riuscito";
    }else{
        echo "Accesso negato...";
    }
    ?>
</body>
</html>