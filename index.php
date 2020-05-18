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

<h1>Risultati prima giornata NBA</h1>
<ul>
<?php for ($i = 0; $i < count($game); $i++) { ?>
<?php $match = $game[$i]; ?>
            <li>
                <?php  echo "$match[home] $match[home_goals] -- $match[guest] $match[guest_goals]"; ?>
            </li>
        <?php  } ?>
</ul>

    
</body>
</html>