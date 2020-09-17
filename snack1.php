<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->

<?php

$match = [
    [
       'home' => 'a',
       'visitors' => 'b',
       'score1' => '1',
       'score2' => '2'
    ],
    [
        'home' => 'c',
       'visitors' => 'd',
       'score1' => '3',
       'score2' => '4'
    ],
    [
        'home' => 'j',
       'visitors' => 'f',
       'score1' => '8',
       'score2' => '8'
    ],
    [
        'home' => 'k',
       'visitors' => 'm',
       'score1' => '4',
       'score2' => '4'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match</title>
</head>
<body>
    <h2>Risultati partite</h2>
    <ul>
      <?php for($i = 0; $i < count($match); $i++){ ?>
        <li>
            <span><?php echo $match[$i]['home']?> </span>
			- <span><?php echo $match[$i]['visitors']?></span>
			| <span><?php echo $match[$i]['score1']?></span>
			- <span><?php echo $match[$i]['score2']?></span>
        </li>
     <?php } ?>
    </ul>
</body>
</html>