<?php
$conn=mysqli_connect("localhost","root","","bddprojet") or die("Pas de connexion");


$res=mysqli_query($conn,"SELECT * from annoncetrajet");
?>


<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  #remo{
    visibility:hidden;}</style>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Historique de trajets</title>
     
    <link href="historique.css" rel="stylesheet">
   
    </head>
    <body>
      <br>
      <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Historique de trajets</strong></h2>
          
        </a>
        <br><br>
     

<?php
  $i=1;
while ($row=mysqli_fetch_assoc($res)) {
  

$datere =$row['dateretour'];
 
$datetime = date("Y-m-d ");

if(($datetime>$datere)||($row['supprimer']==1))
{
  $trajet="TRAJET ".$i;
              $i++;
              $adrde =$row['lieudepart'];
              $adrarr =$row['lieuarrive'];
              $id=$row ['matriculetrajet'] ;

  $datede=$row['datedepart'];
echo ("

                   <div class='col-md-4' '>
                    
                               <div class='flatt-box'>
                 
                           
                    
                        <p class='title'> $trajet</p>
                         <p class='feature-text'>Date de depart  : <strong> $datede</strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Adresse de depart :  <strong> $adrde</strong> </p>
                         <p class='feature-text'>Dare d'arrivée : <strong>$datere</strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Adresse d'arrivée :  <strong> $adrarr</strong> </p>
                         <form method='POST' action='colistransp.php?id=$id'>
                       <input type='submit' name='colis' id='colis'  value='Colis transportè' /> 
                       </form>
                        
                         </div>  
                          </div>
                    
                      
                          

                          <br>
                   </a>
                  </div>
                       <





                ");

}
}





              ?>

