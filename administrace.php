<?php

if ( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true) {
    echo 'přihlášen';
}else {
    echo 'nepřihlášen' ;
}



//V souboru administrace.php vypište text “přihlášen” nebo ”nepřihlášen” podle existence klíče loggedIn v poli $_SESSION

/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 28.02.2019
 * Time: 19:57
 */