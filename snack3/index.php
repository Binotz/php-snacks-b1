<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 
        $randomNumbersArray = [];
        //ciclo finché ho 15 numeri diversi nell'array
        while(count($randomNumbersArray) < 15){
            //genero un numero random
            $randomNumber = rand(1,100);
            //se non è già nell'array, lo pusho
            if(!(in_array($randomNumber, $randomNumbersArray) ) ){
                $randomNumbersArray[] = $randomNumber;
            }
        } 
        //stampo a pagina l'array
        for($i = 0; $i < count($randomNumbersArray); $i++){
            echo $randomNumbersArray[$i] . '<br>';
        }
    ?>

</body>
</html>
