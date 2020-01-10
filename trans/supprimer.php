<?php

$posi=1;
include('../database.php');
include('../connect.php');
         
    	  $get= $_GET['id'];
         $var=1;
          $res=mysqli_query($conn,"SELECT * from annoncetrajet where matriculetrajet=$get");
          //while($var=mysqli_fetch_assoc($res)){
          $var=mysqli_fetch_assoc($res);
          if($var){             $sql ="UPDATE annoncetrajet SET supprimer='1' where matriculetrajet=$get ";
              mysqli_query($conn,$sql);
              header('Location: mestrajets.php');
      }

?>
         