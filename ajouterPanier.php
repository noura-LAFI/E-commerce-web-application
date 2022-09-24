<?php
$id = $_GET["id"];
session_start();
$_SESSION["panier"]["$id"]=$id;
header("Location:shop.php");
?>