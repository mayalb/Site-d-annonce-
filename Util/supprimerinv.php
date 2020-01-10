<?php

$posi=1;
include("../database.php");
include("../connect.php");
         
    	  $getc = $_GET['idc'];
        $gett = $_GET['idt'];

         $var=1;
          $res=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet=$gett AND id_colis=$getc");
          //while($var=mysqli_fetch_assoc($res)){
          $var=mysqli_fetch_assoc($res);
          if($var){
             $sql ="UPDATE trajet_colis SET supprimer='1' where id_trajet=$gett AND id_colis=$getc";
              mysqli_query($conn,$sql);
              
            header("Location: colis.php?id=$getc");
      }

?>
         