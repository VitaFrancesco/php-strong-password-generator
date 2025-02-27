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
            <h2 class="text-light text-center">Genera una password sicura</h2>
            <div></div>
            <div class="bg-white p-3">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-9">
                            <label for="length">Lunghezza password:</label>
                            <!-- <label for=""></label> -->
                        </div>
                        <div class="col-3">
                            <input id="length" name="length" type="number">
                            <input name="letters" type="checkbox">
                            <input name="numbers" type="checkbox">
                            <input name="caracters" type="checkbox">
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Invia</button>
                            <button class="btn btn-secondary" type="reset">Annulla</button>
                        </div>
                    </div>
                </form>
                <?php 
                        function random_password ($length) : string {
                            if ($length < 6) {
                                return "Errore: la password deve essere almeno di 6 caratteri.";
                            };

                            $lower='abcdefghijklmnopqrstuvwxyz';
                            $upper='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            $numbers='0123456789';
                            $caracters='@#%!&$£^';

                            $lower = str_shuffle($lower);
                            $upper .= str_shuffle($upper);
                            $numbers .= str_shuffle($numbers);
                            $caracters .= str_shuffle($caracters);

                            $random_password = '';

                            $all_caracters ='';

                            if (!array_key_exists('letters', $_GET) && !array_key_exists('numbers', $_GET) && !array_key_exists('caracters', $_GET)) {
                                $all_caracters .= $lower . $upper . $numbers . $caracters;
                                $random_password .= substr($lower, 0, 1) . substr($upper, 0, 1) . substr($numbers, 0, 1) . substr($caracters, 0, 1);
                            } else {
                                if (array_key_exists('letters', $_GET)) {
                                    $all_caracters .= $lower . $upper;
                                    $random_password .= substr($lower, 0, 1) . substr($upper, 0, 1);
                                }
                                if (array_key_exists('numbers', $_GET)) {
                                    $all_caracters .= $numbers;
                                    $random_password .= substr($numbers, 0, 1);
                                }
                                if (array_key_exists('caracters', $_GET)) {
                                    $all_caracters .= $caracters;
                                    $random_password .= substr($caracters, 0, 1);
                                }
                            };


                            $all_caracters = str_shuffle($all_caracters);

                            $random_password .= substr($all_caracters, 0, $length - strlen($random_password));


                            return str_shuffle($random_password);
                        };

                        if (isset($_GET['length']) && is_numeric($_GET['length'])) {
                            $length = intval($_GET['length']);
                            if ($length < 6) {
                                echo "<p><strong>Errore: la password deve essere almeno di 6 caratteri.</strong></p>";
                            } else {
                            echo "<p>La tua password casuale: <strong>" . random_password($length) . "</strong></p>";
                            };
                        } else {
                            echo "<p><strong>Lunghezza della password richiesta!</strong></p>";
                        };
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>