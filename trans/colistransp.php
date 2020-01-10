<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Colis Transportès</title>
     
    <link href="affichageannonce1.css" rel="stylesheet">
   
    </head>
    <body>

<?php
$conn=mysqli_connect("localhost","root","","bddprojet") or die("Pas de connexion");

$get= $_GET['id'];
$res=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet=$get");
echo (" <div class='flatt-box'>
         <div class='col-md-4'>
	<h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Colis transportès</h2>
                     <br>");
$i=0;
while ($row=mysqli_fetch_assoc($res)) {

   if($row['effectue']==1)
   { $colis=$row['id_colis'];
     $res1=mysqli_query($conn,"SELECT * from annoncecolis where idcolis=$colis");
     $row1=mysqli_fetch_assoc($res1);
      $i=$i+1;
      $des=$row1['description'];
      if($des==''){$des='Aucune descripotion est montionnè';}
      //Tkhoss hna condition bach nroho lel compte ta3 hadi la persson 
       $res2=mysqli_query($conn,"SELECT * from compte ");
     $row2=mysqli_fetch_assoc($res2);
     if($row2['genre']=='homme'){
     $sex='monsieur';}
     else{$sex='madame';}
     $nom=$row2['nom'];
     $prenom=$row2['prenom'];
   	echo("
        
           
                     <p class='feature-text'>Colis $i : <strong> $des</strong> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp De $sex : $nom $prenom  <br><br></p>
          
   		");
   }
}
if($i==0){echo" <strong>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspAucun colis n'etaient transportè</strong>";}
else
echo (" <p class='feature-text'>Le nombre total de colis est  : <strong> $i</strong> &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </p>
          ");
?> 