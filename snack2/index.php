<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
    $msg = 'Accesso Eseguito';
    //controllo che tutti i parametri siano passati tramite GET
    if(!isset($_GET['name']) || !isset($_GET['mail']) || !isset($_GET['age'])){
        $msg = 'Parametri non inseriti completamente';
        $name = '';
        $mail = '';
        $age = 0;
    } else {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
    }

    //controllo la lunghezza di name, se minore o uguale a 3, Accesso negato
    if(strlen($name) <= 3){
        $msg = "Accesso negato (nome troppo corto)";
    }

    //controllo che mail contrenga . e @
    if(strpos($mail, '.') === false || strpos($mail, '@') === false){
        $msg = "Accesso negato (manco . o @)";
    }

    //controllo che l'età sia un numero e non string
    if(!is_numeric($age)){
        $msg = "Accesso negato (età non numerica";
    }
?>

<h2>
    Dati inseriti:
</h2>
<h3>Nome: <?php echo $name ?> </h3>
<h3>Mail: <?php echo $mail ?> </h3>
<h3>Età: <?php echo $age ?> </h3>


<h1><?php echo $msg; ?></h1>
