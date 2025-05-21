<?php
    function random_password ($length) : string {
        if ($length < 6) {
            return "Errore: la password deve essere almeno di 6 caratteri.";
        };

        $lower='abcdefghijklmnopqrstuvwxyz';
        $upper='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers='0123456789';
        $caracters='@#%!&$^?';

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
?>