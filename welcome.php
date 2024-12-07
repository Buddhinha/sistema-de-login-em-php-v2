<?php 
session_start();

if($_COOKIE['tema'] == "escuro"){
$style = "
body{
    background-color:black;
    color:white;
    
}";
} else{
    $style = "
    body{
        background-color:white;
        color:black;
    }";   
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bem vindo</title>
    <style>
        <?= $style; ?>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    welocome! <br>
    <?php 
    echo $_SESSION['usuario'];
    ?> 
    <br>
    <button><a href="logout.php">deslogar</a></button>
</body>
</html>

