<form method="post">

<?php echo 'Jmeno: '?> <input type="text" name="firstName">
    <?php echo 'Heslo: '?><input type="password" name="secret">
    <input type="checkbox" name="optIn" about="Souhlasim">
    <input type="submit">

    </form>

<?php

if(isset($_POST['firstName']))

var_dump ($_POST);


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 28.02.2019
 * Time: 20:44
 */