<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Poznań</li>
        <li>Gniezno</li>
        <li>Jarocin</li>
    </ul>
    <?php
    $city = "Września";
    echo <<< LIST
    <ul>
        <li>Poznań</li>
        <li>Gniezno</li>
        <li>Jarocin</li>
        <li>$city</li>
    </ul>
    LIST;
    ?>
    <h3>Zawartość skryptu:</h3>
    <?php
    include "./skrypty/skrypt.php";
    include_once "./skrypty/skrypt.php";
    require "./skrypty/skrypt.php";
    echo "Zawartosc po skrypcie";

    ?>
</body>
</html>