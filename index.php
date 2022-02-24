<?php
/* Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$censored_word = strtolower($_GET['censored_word']);
var_dump($censored_word);
$text  = 'Lorem ipsum parola dolor sit amet parola consectetur adipisicing parola elit.'; 
$length = strlen($text);

$censored_text  = str_replace($censored_word,'(***)',strtolower($text));
$length_censored = strlen($censored_text);
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
<h3> La stringa è : ---> <?php echo $text ?> <--- ed è lunga <?php echo $length ?> caratteri</h3>
<h3> La stringa censurata è : ---> <?php echo $censored_text?> <--- ed è lunga <?php  echo $length_censored ?></h3>
</body>
</html>