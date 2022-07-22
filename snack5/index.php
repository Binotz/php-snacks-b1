<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

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

        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
    ];
    ?>
    <h2>Insegnanti: </h2>
    <?php for($i = 0; $i < count($db['teachers']); $i++){ ?>
        <?php $currentTeacher = $db['teachers'][$i]; ?>
        <div class="gray"> <?php echo $currentTeacher['name'] ?> <?php echo $currentTeacher['lastname'] ?></div>
    <?php } ?>
    
    <h2>PM: </h2>
    <?php for($i = 0; $i < count($db['pm']); $i++){ ?>
        <?php $currentPM = $db['pm'][$i]; ?>
        <div class="gray"> <?php echo $currentPM['name'] ?> <?php echo $currentPM['lastname'] ?></div>
    <?php } ?>
</body>
</html>
