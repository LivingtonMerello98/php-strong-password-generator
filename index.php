<?php
// file function importato
include __DIR__ . '/functions.php';

// intercettiamo l'arrivo della variabile isset()
// '?' op. ternario, se arriva il parametro applichiamo intval() else lasciamo vuoto
$password_length = isset($_GET['length-password']) ? intval($_GET['length-password']) : 0;
$password_generated = '';

if ($password_length > 0) {
    $password_generated = password_gen($password_length);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">
                        <h3>Imposta la lunghezza della password</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="GET">
                            <div class="form-group">
                                <label for="length-password">Lunghezza Password</label>
                                <input type="number" class="form-control" id="length-password" name="length-password" value="<?php echo $password_length; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Genera Password</button>
                        </form>
                        <?php if (!empty($password_generated)) : ?>
                            <div class="alert alert-danger text-center mt-4" role="alert">
                                <h4 class="alert-heading">La password generata è:</h4>
                                <p><?php echo htmlspecialchars($password_generated); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>