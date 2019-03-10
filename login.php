 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

        <form method="post">
            <div class="form-group">
                <label for="loginvstup">Login:</label>
                <input type="text" class="form-control" id="loginvstup" name="login">
            </div>
            <div class="form-group">
                <label for="heslovstup">Heslo:</label>
                <input type="password" class="form-control" id="heslovstup" name="heslo">
            </div>
            <button type="submit" class="btn btn-primary">Přihlásit</button>

        </form>

    <?php
    /*if (isset($_POST['login'])){
        echo 'Zadany login: ' . $_POST['login'];
    }*/
    session_start ();

    if (isset($_POST['login'], $_POST['heslo'])){

        if ($_POST['login'] === 'admin' && $_POST['heslo'] === 'top-secret'){

            $_SESSION['vstup'] = $_POST['login'];
            $_SESSION['data'] = [
                    'Datum registrace:' => '2.4.2018',
                    'Souhlas s podmínkami' => 'ANO',
                    'Počet objednávek' => 23
            ];
            echo '<a href="admin.php">Pokračovat do administrace</a>';
        }
        else {
            echo'Chybné jméno nebo heslo';
        }
    }


    ?>




</div>
</body>
</html>








<?php


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 03.03.2019
 * Time: 15:17
 */





?>



