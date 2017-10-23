<?php
include_once("banco_login.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso!";
header("Location: index.php");
die();
