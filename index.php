<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>

    <?php

       
        

        $mia_stringa = "Ciao Ernesto, benvenuto sul nostro sito";

        $lunghezza_mia_stringa = strlen($mia_stringa);
        
        $badwords = $_GET['badwords'];
        
        $sostituzione = str_replace('Ernesto', $badwords, $mia_stringa);


    ?>

    <p><?php echo $mia_stringa; ?></p>
    <p><?php echo $lunghezza_mia_stringa; ?></p>
    

</body>
</html>