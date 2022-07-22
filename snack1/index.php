<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches =[
        [
            "homeTeam" => 'Roma',
            "guestTeam" => 'Milano',
            "score" => [
                "homeScore" => 96,
                "guestScore" => 120
            ],
        ],[
            "homeTeam" => 'Venezia',
            "guestTeam" => 'Torino',
            "score" => [
                "homeScore" => 130,
                "guestScore" => 90
            ],
        ],[
            "homeTeam" => 'Napoli',
            "guestTeam" => 'Trento',
            "score" => [
                "homeScore" => 100,
                "guestScore" => 100
            ],
        ]
    ];
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
    <h1>Tebellone Partite</h1>
    <ul>
        <?php for($i = 0; $i < count($matches); $i++){?>
            <?php $currentMatch = $matches[$i]; ?>
            <li> <?php echo $currentMatch['homeTeam']?> - <?php echo $currentMatch['guestTeam']?> | <?php echo $currentMatch['score']['homeScore']?> - <?php echo $currentMatch['score']['guestScore']?> </li>
        <?php } ?>
    </ul>
</body>
</html>
