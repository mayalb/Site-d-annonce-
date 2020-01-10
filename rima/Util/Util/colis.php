<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Invitation colis</title>
     
    <link href="affichageannonce.css" rel="stylesheet">
   
    </head>
    <body>

<?php
$posi=1;
include("../database.php");
include("../connect.php");
$i=0;
$get= $_GET['id'];
$res=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet=$get AND refuser=0 ");

while($row=mysqli_fetch_assoc($res)){
     $i=$i+1;
     $colis='Invitation'.$i;

     $idcolis=$row['id_colis'];
     $res1=mysqli_query($conn,"SELECT * from annoncecolis where idcolis=$idcolis");
     $row1=mysqli_fetch_assoc($res1);
     
     $adrde=$row1['adressedepart'];
     $adrarr=$row1['adressearrive'];
     $taille=$row1['taille'];
     $desc=  $row1['description'];
     if($desc==''){$desc='Rien na ete montionné';}
     $poi=$row1['poids'];

     if($row1['demandespecial']!=''){$dem=$row1['demandespecial'];}
     else{$dem='Un demande normal';}

     if($row['accepter']==1){$ps='(Cette invitation est déja accepter)';}
     else{$ps='';}




echo ("

              
                  
                     
                   <div class='col-md-4'  >
                    
                               <div class='flat-box'>
                           
                    
                        <p class='title'> $colis &nbsp &nbsp &nbsp &nbsp &nbsp $ps</p>
                         <p class='feature-text'>Adresse de depart : <strong> $adrde</strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp adresse d'arrivèe : <strong> $adrarr </strong> <A href='accepter.php?idc=$idcolis&idt=$get'><IMG src=acc.jpg alt='Submit' style='width: 50px;margin-left: 625px;margin-top: -5000px;'></A></p>
                         <p class='feature-text'>Description :<strong>$desc</strong> &nbsp &nbsp &nbsp &nbsp &nbspLa taille : <strong>$taille</strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    Le poids :<strong> $poi </strong> <A href='refuserinv.php?idc=$idcolis&idt=$get'><IMG src=ref.jpg alt='Submit' style='width: 50px;margin-left: 625px;margin-top: -5000px;'></A></p>
                         <p class='feature-text'> &nbsp &nbsp &nbsp &nbsp &nbsp <strong>$dem</strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   </p>

                      <form method='POST' action=''>
                       <input type='submit' name='profil' id='profil'  value='Voir le profil' /> 
                       </form>

                        
                   </a>
                  </div><br><br><br><br>
                 

               



                ");
}
if(isset($_GET['sup'])){

  echo '<script type="text/javascript">' . 'alert("Invitation refuser  ");' . '</script>'; 
 header("Location: colis.php?id=$get");

     }  
if(isset($_GET['acc'])){

  echo '<script type="text/javascript">' . 'alert("Invitation accepter  ");' . '</script>'; 
 header("Location: colis.php?id=$get");

     }             
