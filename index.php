<!-- Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->


<?php 

$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sequi deserunt vero voluptates. Qui, exercitationem suscipit omnis totam error ducimus quibusdam repellat maxime saepe reprehenderit id doloremque corrupti iusto? Consectetur.';
$length = strlen($paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    
    <p> <?php echo $paragraph ?> </p>
    <p>La lunghezza del testo è <?php echo $length?> </p>

</body>
</html>