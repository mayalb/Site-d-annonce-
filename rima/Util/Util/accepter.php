<?php

$conn=mysqli_connect("localhost","root","","bddprojet") or die("Pas de connexion");
         
    	  $getc = $_GET['idc'];
        $gett = $_GET['idt'];

         
          $res=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet=$gett AND id_colis=$getc");
          //while($var=mysqli_fetch_assoc($res)){
          while($var=mysqli_fetch_assoc($res))
         {
             $sql ="UPDATE trajet_colis SET accepter='1' where id_trajet=$gett AND id_colis=$getc";
              mysqli_query($conn,$sql);
              
            header("Location: trajetinviter.php?id=$getc");
      }

?>