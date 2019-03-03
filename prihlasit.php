<?php


session_start();

// identifikátor session - ten má uživatel v prohlížeči
var_dump(session_id());

// všechna data v aktuální session
var_dump($_SESSION);

// nastavení nové hodnoty v session
$_SESSION['loggedIn'] = 'true';
/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 28.02.2019
 * Time: 19:57
 */


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 28.02.2019
 * Time: 19:57
 */