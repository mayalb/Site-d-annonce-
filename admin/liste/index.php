<?php
include("../../database.php");
  ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" conntent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.css">


</head>
<style type="text/css">
  
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<body>
	<br><br><br>
	<div class="container" >
		<h1>Liste des utilisateurs</h1>
<table class="table table-striped table-bordered table-hover" id="mydata">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
       <th scope="col"> Email</td>
      <th scope="col">Numero de telephone</td>
       <th scope="col">Nature</th>
         <th scope="col">Statut</th>

    </tr>
  </thead>
  <tfoot>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
       <th scope="col"> Email</td>
      <th scope="col">Numero de telephone</td>
       <th scope="col">Nature</th>
       <th scope="col">Statut</th>

    </tr>
  </tfoot>
<tbody>
  <?php 
    $resultat=mysqli_query($conn,"SELECT * FROM `compte`");

      $i=0;


    while ($res=mysqli_fetch_assoc($resultat)) {
      $i++;
      if($res['nature'] == 0)
        $nature="Utilisateur";
      else
        $nature="Transporteur";


      $color=($res['bloque']=='0')? "#55efc4" : "#ff7675";
      $statut=($res['bloque']=='0')? "Actif" : "Bloquer";
      $att =($res['bloque']=='0')? "bloquer" : "debloquer";

      $ph=($res['photo']=="")? "images/7.png" : "../../profil/".$res['photo'];
        echo "<div id='modal$i' class='modal'>

  <!-- Modal content -->
  <div class='modal-content'>
    <span id='close$i'>&times;</span>
    <form method='POST' onsubmit='return yes;'>

    <input type='text' value='".$res['matricule']."' name='matricule' style='display : none;' >
<div style='margin-left: 200px;top: 100px ;width: 500 px'>
<div class='card mb-3' style='max-width: 650px;position: relative;text-align: center'>
  <div class='row no-gutters'>
    <div class='col-md-4'>
      <img src='$ph' class='card-img' alt='...'>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <br><br>
        <h2 class='card-title'>".$res['nom']." ".$res['prenom']."</h2>
        <h3 class='card-text'>$nature</h3>
        <br><br>
      
    <button  style='
  background-color: lightgrey;
    
  border:1px solid black ;
  padding: 5px;                                                                       
  color:black;
  border-radius:2px;
  transition: all 0.5 ease ;
  background-position: top right ;
  text-align: center;
  width: 72px;
  height: 50px;
  background-color: #fff ;
  border-radius:150px;
  margin-left: 20px;


' type='bloquer' name='$att' id='$att' onclick='confirmation(\"$att\" );'>$att</button>
    <button  style='
  background-color: lightgrey;
    
  border:1px solid black ;
  padding: 5px;                                                                       
  color:black;
  border-radius:2px;
  transition: all 0.5 ease ;
  background-position: top right ;
  text-align: center;
  width: 90px;
  height: 50px;
  background-color: #fff ;
  border-radius:150px;
  margin-left: 20px;
' type='supprimer' name='supprimer' id='supprimer' onclick='confirmation(\"supprimer\" );'>Supprimer</button> 
      </div>
    </div>
  </div>
</div>
</div>
  </div>
</form>
</div>";

      echo " 
    
    <tr id='btn$i' onclick='openit(\"modal$i\",\"btn$i\",\"close$i\");'>

      <th scope='row'>".$i."  </th>
      <td>  ".$res['matricule']."</a> </td>
      <td>".$res['nom']."</td>
      <td>".$res['prenom']."</td>    
     <td>".$res['email']."</td>
      <td>".$res['numerodetelephone']."</td>
      <td>".$nature."</td>
      <td style='background-color : $color'>".$statut."</td>
    </tr>

    
  ";


      # code...
    }

   ?>

 </tbody>
</table>
</div>
<br><br>
<script src ="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script >
  $('#mydata').dataTable();
</script>

<!-- The Modal -->

</body>
<script>
// Get the modal

var yes;

function openit(modal,btn,close)
{
var modal = document.getElementById(modal);

// Get the button that opens the modal
var btn = document.getElementById(btn);

// Get the <span> element that closes the modal
var span = document.getElementById(close);

// When the user clicks the button, open the modal 

  modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function confirmation (btn)
{
  but = document.getElementById(btn);

  conf = confirm("Voulez vous "+btn+" ?");


  yes=conf;

  return conf;

}
</script>

<?php
    $lien="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(isset($_POST['supprimer']))
    {

        mysqli_query($conn,"DELETE FROM `compte` WHERE matricule='".$_POST['matricule']."'");

    }

        if(isset($_POST['bloquer']))
        {
          mysqli_query($conn,"UPDATE `compte` SET bloque='1' WHERE matricule='".$_POST['matricule']."'");
        }

         if(isset($_POST['debloquer']))
        {
          mysqli_query($conn,"UPDATE `compte` SET bloque='0' WHERE matricule='".$_POST['matricule']."'");
        }



        
  ?>


</html>