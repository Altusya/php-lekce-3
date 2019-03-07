<?php /**
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

    ...

</div>
</body>
</html>
<?php
$titulek = 'Uživatelský profil';
$profil = ['jmeno' => 'altynay', 'prijmeni' => 'zhakupova'];
$profil ['vek'] = 27;
$profil ['konicek'] = ['programovani'];
$profil ['konicek'] [] = 'rybareni';
?>

<table class="table">

    <tr>
        Jméno:
        <td><?php echo $profil['jmeno'];?></td>
    </tr>
    <tr>
        <th>Příjmení:</th>
        <td><?php echo $profil['prijmeni'];?></td>
    </tr>
    <tr>
        <th>Věk:</th>
        <td><?php echo $profil['vek'];?></td>
    </tr>
    <tr>
        <th>Koníčky:</th>
        <td><?php print_r($profil['konicek']);?></td>
    </tr>

</table>



<?php


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 03.03.2019
 * Time: 15:17
 */





?>



