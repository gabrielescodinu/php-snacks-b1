<?php

// PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
// Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60

$matches = [
    "inter-roma" => [
        "casa" => "inter",
        "ospite" => "roma",
        "punti casa" => 1,
        "punti ospite" => 2,
    ],
    "cagliari-brescia" => [
        "casa" => "cagliari",
        "ospite" => "brescia",
        "punti casa" => 3,
        "punti ospite" => 2,
    ],
];

var_dump($matches);
$partita = array_keys($matches);
$puntiCasa = array_keys($matches);


// PHP Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Olimpia Milano - Cantù | 55 - 60 -->
    <p><?php echo $matches ?></p>
    
</body>
</html>