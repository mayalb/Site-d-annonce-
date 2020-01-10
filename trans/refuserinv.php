<?php

$conn=mysqli_connect("localhost","root","","bddprojet") or die("Pas de connexion");
         
    	  $getc = $_GET['idc'];
        $gett = $_GET['idt'];

         
          $res=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet=$gett AND id_colis=$getc");
          //while($var=mysqli_fetch_assoc($res)){
          $var=mysqli_fetch_assoc($res);
          if($var){
             $sql ="UPDATE trajet_colis SET refuser='1' where id_trajet=$gett AND id_colis=$getc";
              mysqli_query($conn,$sql);
              
            header("Location: colis.php?id=$gett&sup=1");
      }

?>
         