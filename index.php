<?php

// PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
// Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60

$matches = [
    [
        "casa" => "inter",
        "ospite" => "roma",
        "punti casa" => 1,
        "punti ospite" => 2,
    ],
    [
        "casa" => "cagliari",
        "ospite" => "brescia",
        "punti casa" => 3,
        "punti ospite" => 2,
    ],
    [
        "casa" => "frosinone",
        "ospite" => "benevento",
        "punti casa" => 5,
        "punti ospite" => 4,
    ],
    [
        "casa" => "milan",
        "ospite" => "juventus",
        "punti casa" => 1,
        "punti ospite" => 3,
    ],
];

// PHP Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET["name"];

if ($name > 3){
    echo " Accesso riuscito";
} else {
    echo " Accesso negato";
};

$email = $_GET["email"];

if (strpos($email, '@') && strpos($email, '.')) {
    echo " Accesso riuscito";
} else {
    echo " Accesso negato";
};

$age = $_GET["30"];

if ($age == intval) {
    echo " Accesso riuscito";
} else {
    echo " Accesso negato";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse:collapse
    }
    td, th {
        border:1px solid #ddd;
        padding: 10px;
        width: 100px;
    }
    *{
        font-family: "Lato";
    }
</style>
<body>
    <!-- Olimpia Milano - Cantù | 55 - 60 -->
    <?php
        for ($i=0; $i<count($matches); $i++) {
            $match = $matches[$i];
    ?>
        <table>
            <tr><td><?php echo $match["casa"]; ?></td><td><?php echo $match["ospite"]; ?></td><td><?php echo $match["punti casa"]; ?></td><td><?php echo $match["punti ospite"]; ?></td></tr>
        </table>
        <?php } ?>
    
</body>
</html>