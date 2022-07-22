<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

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

        $originalParagraph = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc";

        //divido il paragrafo per il carattere .
        $paragraphsArray = explode('.', $originalParagraph);

    ?>

    <h3>Testo Originale: </h3>
    <p><?php echo $originalParagraph?></p>
    <h3>Testo Splittato: </h3>
    <ul>
        <?php for($i = 0; $i < count($paragraphsArray); $i++){ ?>
            <?php $currentParagraph = $paragraphsArray[$i] ?>
                <li> <?php echo $currentParagraph ?></li>
            <?php } ?>
    </ul>

</body>
</html>
