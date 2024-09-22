<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur de code bar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user" maxlength="13" minlength="13">
        <input type="submit" value="Entrer">
    </form>
</body>

</html>



<?php

if(isset($_POST['user']) && !is_null($_POST['user']) && !empty($_POST['user'])){

echo decbin($_POST['user']);
$i = decbin($_POST['user']);
$table = str_split($i);

echo "<br>";

    foreach ($table as $x) {
        if ($x === "1") {
            echo ("|");
        } else {
            echo (" ");
        }
    }
}

?>