
<?php

if (isset ($_COOKIE ['accessed']))
echo $_COOKIE ['accessed'];



// uložení cookie
setcookie('user', 'John', time() +3600);

// zobrazení všech cookie
var_dump($_COOKIE);



/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 28.02.2019
 * Time: 20:27
 */