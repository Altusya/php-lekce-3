
<?php
// nastartování session
session_start();

// identifikátor session - ten má uživatel v prohlížeči
var_dump(session_id());

// všechna data v aktuální session
var_dump($_SESSION);

// nastavení nové hodnoty v session
$_SESSION['registrationDate'] = '2018-18-02';

// session je uložena na serveru
var_dump($_SESSION);

if isset(($_SESSION ['registrationDate']) {
    echo $_SESSION ['registrationDate'];
    }

    unset ($_SESSION ['registrationDate']);


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 28.02.2019
 * Time: 19:48
 */