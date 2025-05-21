<?php
    session_start();
    $password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main class="d-flex flex-column  align-items-center justify-content-center bg-dark">
        <div class="container-md">
            <a class="text-secondary" href="./index.php"><p><-torna in dietro.</p></a>
            <h1 class="text-center text-white m-0">La tua password casuale</h1>
            <h2 class="text-white text-center"><?php echo $password; ?></h2>
        </div>
    </main>
</body>
</html>