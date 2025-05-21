<?php
    $password = "";

    include "./function.php";

    if (isset($_GET['length']) && is_numeric($_GET['length'])) {
        $length = intval($_GET['length']);
        if ($length < 6) {
            $error = "<p class='m-0'><strong>Errore: la password deve essere almeno di 6 caratteri.</strong></p>";
        } else {
            $password = random_password($length);
        }
    } else {
        $error = "<p class='m-0'><strong>Lunghezza della password richiesta!</strong></p>";
    };

    if ($password != "") {
        session_start();
        $_SESSION['password'] = $password;
        header("Location: ./result.php");
    }
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
            <h1 class="text-secondary text-center">Strong Password Generator</h1>
            <h2 class="text-light text-center mb-3">Genera una password sicura</h2>
            <?php
                if (array_key_exists('length', $_GET)) {
            ?>
            <div class="bg-info-subtle p-2 my-3">
            <?php 
                if ($error) {
                    echo $error;
                }
            ?>
            </div>
            <?php
                };
            ?>
            <div class="bg-white p-3">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-9">
                            <label for="length">Lunghezza password:</label>
                            <!-- <label for=""></label> -->
                        </div>
                        <div class="col-3 d-flex flex-column align-items-start">
                            <div class="pb-1" >
                                <input id="length" name="length" type="number" value="6" min="6">
                            </div>
                            <div class="py-1">
                                <input id="letters" name="letters" type="checkbox">
                                <label for="letters">Lettere</label>
                            </div>
                            <div class="py-1">
                                <input name="numbers" id="numbers" type="checkbox">
                                <label for="numbers">Numeri</label>
                            </div>
                            <div class="pt-1">
                                <input id="caracters" name="caracters" type="checkbox">
                                <label for="caracters">Caratteri Speciali</label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Invia</button>
                            <button class="btn btn-secondary" type="reset">Annulla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>