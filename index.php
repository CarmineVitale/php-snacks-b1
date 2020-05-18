<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSnack 18 Maggio 2020</title>
</head>
<body>
<!-- Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60 -->
<h1>Primo Jsnack</h1>
<p><strong>Istruzioni:</strong>Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60</p>
<?php 
$game = [
    [
        'home' => 'Avellino',
        'guest' => 'Napoli',
        'home_goals' => rand(50,130),
        'guest_goals' => rand(50,130),
    ],
    [
        'home' => 'Milano',
        'guest' => 'Bologna',
        'home_goals' => rand(50,130),
        'guest_goals' => rand(50,130),
    ],
    [
        'home' => 'Venezia',
        'guest' => 'Caserta',
        'home_goals' => rand(50,130),
        'guest_goals' => rand(50,130),
    ],
    [
        'home' => 'Roma',
        'guest' => 'Ferrara',
        'home_goals' => rand(50,130),
        'guest_goals' => rand(50,130),
    ],
    [
        'home' => 'Genova',
        'guest' => 'Bari',
        'home_goals' => rand(50,130),
        'guest_goals' => rand(50,130),
    ],
];

?>

<h2>Risultati prima giornata NBA</h2>
<ul>
<?php for ($i = 0; $i < count($game); $i++) { ?>
<?php $match = $game[$i]; ?>
            <li>
                <?php  echo "$match[home] $match[home_goals] -- $match[guest] $match[guest_goals]"; ?>
            </li>
        <?php  } ?>
</ul>
<br>
<br>
<br>
<br>
<br>
<h1>Secondo Jsnack</h1>
<p><strong>Istruzioni:</strong>
Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”</p>
<?php 
$data = $_GET;
?>

<h1>Accesso
<?php 
if ( empty($data) ) {
    echo " negato";
} elseif ( strlen($data['name']) < 4 ) {
    echo " negato nome troppo corto";
} elseif ( strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false ) {
    echo " negato: La mail non è scritta nel modo corretto";

} elseif ( is_numeric($data['age']) === false ) {
    echo " negato. Il campo age non è un valore numerico";
} else {
    echo " consentito";
}
?>

</h1>


    
</body>
</html>