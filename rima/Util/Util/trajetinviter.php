<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Invitation colis</title>
     
    <link href="affichageannonceinv.css" rel="stylesheet">
   
    </head>
    <body>

<?php
$posi=1;
include("../database.php");
include("../connect.php");
$i=0;
$get= $_GET['id'];
$res=mysqli_query($conn,"SELECT * from trajet_colis where id_colis=$get AND refuser=0 ");

while($row=mysqli_fetch_assoc($res)){
     $i=$i+1;
     $colis='Invitation'.$i;

     $idtrajet=$row['id_trajet'];
     $res1=mysqli_query($conn,"SELECT * from annoncetrajet where matriculetrajet=$idtrajet");
     while($row1=mysqli_fetch_assoc($res1)){
     
     $adrde=$row1['lieudepart'];
     $adrarr=$row1['lieuarrive'];
     $num=$row1['numerotransporteur'];
     
    

     if($row['accepter']==1){$ps='(Cette invitation est déja accepter)';}
     else{$ps='';}




echo ("

              
                  
                     
                   <div class='col-md-4'  >
                    
                               <div class='flat-box'>
                           
                    
                        <p class='title'> $colis &nbsp &nbsp &nbsp &nbsp &nbsp $ps</p>
                         <p class='feature-text'>Adresse de depart : <strong> $adrde</strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp adresse d'arrivèe : <strong> $adrarr </strong> <A href='accepter.php?idt=$idtrajet&idc=$get'><IMG src=acc.jpg alt='Submit' style='width: 50px;margin-left: 625px;margin-top: -5000px;'></A></p>
                         <p class='feature-text'>Numero de telephone :<strong>$num</strong> &nbsp &nbsp &nbsp &nbsp  <A href='refuserinv.php?idt=$idtrajet&idc=$get'><IMG src=ref.jpg alt='Submit' style='width: 50px;margin-left: 625px;margin-top: -5000px;'></A></p>
                        
                      <form method='POST' action=''>
                       <input type='submit' name='profil' id='profil'  value='Voir le profil' /> 
                       </form>

                        
                   </a>
                  </div><br><br><br><br>
                 

               



                ");
}
if(isset($_GET['sup'])){

  echo '<script type="text/javascript">' . 'alert("Invitation refuser  ");' . '</script>'; 
 header("Location: trajetinviter.php?id=$get");

     }  
if(isset($_GET['acc'])){

  echo '<script type="text/javascript">' . 'alert("Invitation accepter  ");' . '</script>'; 
 header("Location: trajetinviter.php?id=$get");

     }             
}