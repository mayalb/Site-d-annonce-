<?php

$posi=1;
include("../database.php");
include("../connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        

       .nav1
            {
              background-color: #273c75;
              width: 100%;
              border:#273c75; 
            }
       .text-center {font-weight: bold;}
       
.wave{
  position: relative;
  background: linear-gradient(#273c75 30% , rgba(231,76,60,0.1)),url("a.png"); 
  background-size: cover;
  background-repeat: no-repeat;
  padding: 0;
  margin: 0;
border-radius: 60%/20%;

}
.wave:before {
    content: '';
    bottom: 0;
    left: 0;
    width: 100%;
    height: 200px;
    background-size: cover;
     position: absolute;
     border-radius: 5%/50%;

 } 
 .blurred-bg-container {
    height: 200px; }
p .details{
    
    margin-top: 20px;
    font-size: 14px;
   } 
   .card {

       box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
   }
  .lib-panel {
    margin-bottom: 20Px;
}
.lib-panel img {
    width: 100%;
    background-color: transparent;
}

.lib-panel .row,
.lib-panel .col-md-6 {
    padding: 0;
    background-color: #FFFFFF;
}


.lib-panel .lib-row {
    padding: 0 20px 0 20px;
}

.lib-panel .lib-row.lib-header {
    background-color: #FFFFFF;
    font-size: 20px;
    padding: 10px 20px 0 20px;
}

.lib-panel .lib-row.lib-header .lib-header-seperator {
    height: 2px;
    width: 26px;
    background-color: #d9d9d9;
    margin: 7px 0 7px 0;
}

.lib-panel .lib-row.lib-desc {
    position: relative;
    height: 100%;
    display: block;
    font-size: 13px;
}
.lib-panel .lib-row.lib-desc a{
    position: absolute;
    width: 100%;
    bottom: 10px;
    left: 20px;
}

.row-margin-bottom {
    margin-bottom: 20px;
}

.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.20);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}

.no-padding {
    padding: 0;
}



    </style>


</head>


<body>
<?php
         $get= $_GET['id'];
          $res=mysqli_query($conn,"SELECT * from annoncecolis where idcolis=$get");
          while($var=mysqli_fetch_assoc($res)){
                 $ladressedepart= $var['adressedepart'] ;
                 $adressearrive = $var['adressearrive'] ;
                 $description=$var['description'] ;
                  $dateenvoie=$var['dateenvoie'] ;
                 $datedepot=$var['datedepot'] ;
                  $demandespecial=$var['demandespecial'] ;
                  $taille=$var['taille'] ;
                $poids=$var['poids'] ;
echo ("

<header>

<section class='container-fluid wave col-xs-12'>
<nav class='navbar navbar-inverse nav1'>
  <div class='container-fluid '>
 
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>                        
      </button>
      <a class='navbar-brand' href='../index.php'>QuickColis</a>
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='#'>Home</a></li>
        <li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Page 1 <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='#'>Page 1-1</a></li>
            <li><a href='#'>Page 1-2</a></li>
            <li><a href='#'>Page 1-3</a></li>
          </ul>
        </li>
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='../Inscription'><span class='glyphicon glyphicon-user'></span> Inscription</a></li>
      </ul>
    </div>
  </div>
</nav>




<div class='blurred-bg-container container text-center'>
    <div>
        
    </div>
       
    </div>


</section>    


<div class='container details' >
    <div  class='text-center' style='padding-top: 10px;'>
            <h1  >Détails du Colis</h1>
            </div>
            <hr>
                    <div class='col-lg-6 col-md-6 col-xs-12'>
                     <p> 
                <i class='fas fa-bullseye'></i>&nbsp &nbspLe colis est : <strong>  $description</strong>  
            </p>
            <p>
                <i class='fas fa-map-marked-alt'></i>&nbsp &nbspAdresse de depart : <strong>  $ladressedepart</strong> 
            </p>
            <p>
                <i class='fas fa-map-marked-alt'></i>&nbsp &nbspAdresse d'arrivée <strong>  $adressearrive </strong> 
            </p>
           
            <p>
                <i class='fa fa-calendar' aria-hidden='true'></i>&nbsp &nbspLa date de dépot : <strong>$datedepot</strong>
            </p>
        </div>
        <div class='col-lg-6 col-md-6 col-xs-12'>
            <p>
             <i class='fa fa-calendar' aria-hidden='true'></i>&nbsp &nbspLa date d'envoi : <strong>$dateenvoie</strong> 
            </p>
            <p>
                <i class='fas fa-bullseye'></i> &nbsp &nbsp La demande spéciale : <strong>   $demandespecial</strong>  
            </p>
            
            <p>
                <i class='fas fa-text-height'></i>&nbsp &nbspLa taille du colis  : <strong>$taille</strong>  
            </p>
            <p>
                <i class='fas fa-bullseye'></i>&nbsp &nbspLe poid du colis :<strong> $poids</strong> 
            </p>
        </div>
        
            
        
 
</div>

<div class='container'>
    <hr>
</div>

</header>
    ") ;
      }
        ?>

</body>

</html>