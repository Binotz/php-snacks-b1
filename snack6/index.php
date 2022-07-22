<!-- ## Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $students=[
            [
                "name" => "Lorenzo",
                "lastname" => "Veropalumbo",
                "voti" => [
                    1,2,4,5,6,7,8,9,10
                ],
            ],
            [
                "name" => "Davide",
                "lastname" => "Pisani",
                "voti" => [
                    7,9,8,7,10,10,5,6,2,10
                ],
            ],
            [
                "name" => "Loris",
                "lastname" => "Palazzo",
                "voti" => [
                    10,9,8,7,6,5,4,3,2,1
                ],
            ],
            [
                "name" => "Giuseppe",
                "lastname" => "Lo Re",
                "voti" => [
                    10,10,10,10,10,10,10,10,10,10
                ],
            ],
            [
                "name" => "Riccardo",
                "lastname" => "Binotto",
                "voti" => [
                    9,9,9,9,9,9,9,9,9,9
                ],
            ],
        ];

        function votesAverage($votes){
            $votesTot = 0;
            for($i = 0; $i < count($votes); $i++){
                $votesTot += $votes[$i];
            }
            return $votesTot / count($votes);
        }
    ?>

    <?php for($i = 0; $i < count($students); $i++){?>
        <div class="student">
            <?php $currentStudent = $students[$i]; ?>
            <h3>Nome: </h3> <span><?php echo $currentStudent['name']?> </span>
            <h3>Cognome: </h3> <span><?php echo $currentStudent['lastname']?> </span> 
            <h3>Media Voti: </h3> <span><?php echo votesAverage($currentStudent['voti']);?> </span> 
        </div>
    <?php }?>
</body>
</html>
