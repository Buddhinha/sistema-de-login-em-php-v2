<?php
session_start();


session_unset();


session_destroy();


setcookie("tema", "",-1);

//redireciona
header("Location: index.php");
exit;

