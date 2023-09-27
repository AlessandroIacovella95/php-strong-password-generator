<?php
    // Recupero il file functions.php
    include './functions.php';
    // Controllo se il form è stato inviato
    if(isset($_GET["length"]) && $_GET["length"] !== ""){
        // Ottiengo la lunghezza desiderata della password
        $length = $_GET["length"];
        session_start();
        $_SESSION ['psw'] = generatePassword($length);
       if ($_SESSION ['psw']) {
        header('Location: ./success.php');
       }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Generate Password</title>
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center text-center">
        <form action="index.php" method="GET">
            <label class="form-label" for="length">Inserisci la lunghezza desiderata della password:</label>
            <input class="form-control" type="number" name="length" id="length" required>
            <button type="submit" class="btn btn-success mt-3">Genera Password</button>
        </form>
    </div>
</body>

</html>