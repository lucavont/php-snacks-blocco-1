<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $check_name = null;
    $check_mail = null;
    $check_age = null;

    if(strlen($name) < 3) {
        echo 'Inserisci un nome di almeno 3 caratteri <br>';
        $check_name = false;
    } else {
        echo '';
        $check_name = true;
    }

    if (strpos($mail, '@') && strpos($mail, '.')){
        echo '';
        $check_mail = true;
    } else {
        echo 'Controlla di aver inserito sia una @ che un . <br>';
        $check_mail = false;
    }

    if (is_numeric($age)){
        echo '';
        $check_age = true;
    } else {
        echo "Inserisci un numero nell'età <br>";
        $check_age = false;
    }

    if ($check_name && $check_mail && $check_age == true) {
        echo 'Accesso riuscito!';
    } else {
        echo 'Accesso NON riuscito!';
    }

?>