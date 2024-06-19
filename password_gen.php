<?php
// Inizializza la sessione per poter accedere a $_SESSION
session_start();


//intercetta la password generata nell array globale $session[]
$password_generated = isset($_SESSION['password_generated']) ? $_SESSION['password_generated'] : '';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>password gen</title>
</head>

<body class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (!empty($password_generated)) : ?>
                    <div class="alert alert-danger text-center mt-4" role="alert">
                        <h4 class="alert-heading">La password generata è:</h4>
                        <p><?php echo htmlspecialchars($password_generated); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>