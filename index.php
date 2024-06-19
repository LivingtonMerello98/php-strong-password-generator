<?php

//intercettiamo l'arrivo della variabile isset()
//'?' op. ternario, se arriva il parametro applichiamo intval() else lasciamo  vuoto

$password_length = isset($_GET['length-password']) ? intval($_GET['length-password']) : 0;

var_dump($password_length);
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

    <?php  ?>



</body>

</html>