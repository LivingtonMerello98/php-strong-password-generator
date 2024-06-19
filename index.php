<?php

//file function importato
include __DIR__ . '/functions.php';

//intercettiamo l'arrivo della variabile isset()
//'?' op. ternario, se arriva il parametro applichiamo intval() else lasciamo  vuoto

$password_length = isset($_GET['length-password']) ? intval($_GET['length-password']) : 0;
$password_generated = '';

if ($password_length > 0) {
    $password_generated = password_gen($password_length);
}




var_dump($password_length);
var_dump($password_generated);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <form action="index.php" method="GET">
        <h1>imposta la lunghezza della password</h1>
        <label for="length-pasword"></label>
        <input type="text" id="length-pasword" name="length-password" value="">
        <button type="submit">invia</button>
    </form>
    <!--stampiamo il valore-->
    <?php if (!empty($password_generated)) :  ?>

        <h2>La password generata è:</h2>

        <p> <?php echo $password_generated  ?> </p>

    <?php endif ?>


</body>

</html>