<?php
$posi=1;
include("../database.php");
include("../connect.php");



  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>QuickColis Principale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="style_profil.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>


  
    
    
 

 <nav class="navbar navbar-inverse nav1" > 

  <div class="container-fluid ">
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php">QuickColis</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
   <form method="POST" action="">
          <?php if(isset($_POST['dcnt'])) {include('../deconnect.php') ;   echo('../index.php') ;}  ?>
        <li><button type="dcnt" name="dcnt" id="dcnt"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</button></li>
        </form>
      </ul>
    </div>
  </div>
</nav>

<div class="page-header haut1 text-center">
  <!----
    <h1 class="badge nom1">Maddi Mohamed Reda</h1>
    <br>
    <h2 class="badge type1"> Transporteur</h2>
     <div id="stars1">
     <span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span>
     </div> -->
    <img src="<?php 

            


            if (isset($_POST['tele']))

            {
                $dossier="";

          $directionid=$dossier.$_FILES["load"]["name"];
          
          

        $extid=strtolower(pathinfo($directionid,PATHINFO_EXTENSION));
        


          $directionid=$dossier."photoprofil/".$res['matricule'].".".$extid;  
          

              move_uploaded_file($_FILES["load"]["tmp_name"], $directionid);

            $sql="UPDATE compte set photo='$directionid' where matricule='$num'";

                   mysqli_query($conn,$sql);

              echo($directionid);



            } else
            {

               if (empty($res['photo']))
            echo('image\7.png');
            else
            echo($res['photo']);
            }   ?>" class="img-circle profil1" alt="Cinque Terre">
</div>

<div class="row text-center" style="width: 100%;margin-left: 0px;">


  <div class="col-sm-2 contenu ">
    <div class="change">
      <form enctype="multipart/form-data"  method="POST" action="">
    <input type="file" name="load" id="load" class="form-control  inp1" style="margin:  auto; font-size: 20px;" required="">
    <br>
    
    <button type="tele" name="tele" id="tele" class="btn btn-success but1" style="width: 70%;">Changer la photo</button>
    </form>
  </div>
      <div id="stars1">
     <span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span>
     </div>
       <h1 class="badge nom1"><?php
                  $nom=$res['nom']." ".$res['prenom'];
                  $tipe=$res['nature'];
                  echo ("$nom");

         ?></h1>
    <br>
    <h2 class="badge type1"> <?php 
              if ($tipe==0)
                echo("Utilisateur / Client");
              else
                echo ("Transporteur");
     ?></h2>

     <h4 class="lab">Numéro de téléphone</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class=""></i></span>
    <input id="numerodetelephone" type="number" class="form-control  inp1" name="numerodetelephone" value="<?php echo($res['numerodetelephone'])  ?>" placeholder="Numero de téléphone" required="">
  </div>
  <h4 class="lab">Email</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class=""></i></span>
    <input id="email" type="email" class="form-control  inp1" name="email" value="<?php echo($res['email'])  ?>" placeholder="Email" required="">
  </div>
  <br>
  <h5>La pièce d'indentité vérifié</h5>
  <h5>Attestation sur l'honneur vérifié</h5>
  <br>
  <div>
    <button type="submit" name="submit" id="submit" class="btn btn-primary but1" >Modifier les informations</button>
  </div>


</div>


  </div>
  





</body>
</html>
