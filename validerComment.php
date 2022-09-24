<?php
$id=$_POST["ident"];
$user=$_POST["user"];
$nom=$_POST["nom"];
$message=$_POST["message"];
$con=mysqli_connect("localhost","root","","shopping") or die("erreur");
$requette = " insert into comment values( null,'$message',(select idUtil from utilisateur where userName='$user' ),$id,CURRENT_TIMESTAMP() ) ";
mysqli_query($con,$requette);
header("Location:detail.php?id=$id#rev")
?>