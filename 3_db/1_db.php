<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Uzytkownicy z bazy</h4>
    <?php 
    require_once "../skrypty/connect.php";
    $result = $conn->query("SELECT * FROM `users`");
    //$user = $result->fetch_assoc();
    //echo $user["firstName"];
    while($user = $result->fetch_assoc()){
        echo <<< USER
        Imie i Nazwsiko: $user[firstName] $user[lastName]<br>
        USER;
    }$conn->close();
    ?>
</body>
</html>