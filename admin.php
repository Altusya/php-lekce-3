<?php

session_start();

if (isset($_SESSION['vstup'])) {

    echo 'Vítejte, ' . $_SESSION['vstup'] . '<br>';

    foreach ($_SESSION['data'] as $key => $value) {
        echo "$key: $value<br>";
    }

    echo '<br><a href="logout.php">Odhlásit</a>';
    }

    else    {
        echo 'Přístup zamítnut';
    }



/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 10.03.2019
 * Time: 21:50
 */