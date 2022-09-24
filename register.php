<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$user=$_POST["user"];
$pass=$_POST["pass"];
$con=mysqli_connect("localhost","root","","shopping") or die("erreur");
$requette = " insert into utilisateur  values(null,'$nom','$prenom','$user','$pass','azer') ";
  mysqli_query($con,$requette);
  header("Location:index1.php");



?>