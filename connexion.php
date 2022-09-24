<?php
session_start();
$user=$_POST["Username"];
$_SESSION["user"]=$user;
$pass=$_POST["pass"];
$con=mysqli_connect("localhost","root","","shopping") or die("erreur");
$requette = " select * from utilisateur where userName='$user' and password='$pass' ";
$result = mysqli_query($con,$requette);
$comp=0;
while($ligne=mysqli_fetch_array($result, MYSQLI_NUM)){
$comp ++;
$nom= $ligne[1];
$prenom= $ligne[2];

}

$_SESSION["nom"]=$nom;
$_SESSION["prenom"]=$prenom;

if($comp==0)
 header("Location:index1.php");
else
header("Location:index.php");
?>
