<?php
          $id=$_GET["id"];
          $id1=$_GET["id1"];

          $con=mysqli_connect("localhost","root","","shopping") or die("erreur");
          $requette = " delete from comment where id=$id ";
            $result = mysqli_query($con,$requette);
            header("Location:detail.php?id=$id1");
            ?> 