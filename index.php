<?php
/* Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$text  = 'Lorem ipsum parola dolor sit amet parola consectetur adipisicing parola elit.'; 
$length = strlen($text);
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>
<h3> La stringa è "<?php echo $text ?>" ed è lunga <?php echo $length ?> caratteri</h3>
</body>
</html>