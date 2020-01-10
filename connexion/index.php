<?php 
$posi=1;
include("../connect2.php");
include("verification.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>QuickColis Principale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="style_conn.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>


  <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">logo</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>   
            </div>

            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Accueil</a></li>
                    <li><a href="#">Inscription</a></li>     
                    <li><a href="#">Connexion</a></li>  
                    <li><a href="javascript:void(0);">A propos</a></li>
                    <li><a href="contact.html">Contact</a></li>            
                </ul>

            </div>
        </div>
        </nav>
<form method="POST" action="" class="row text-center" style="width: 100%;margin-left: 0px; display: flex;">

<div class="col-sm-8" style="padding: 2%;">
  </div>

<div class="col-sm-8 coll" style="margin-top: 30px;">
 
   <label style="float: right;">S'incrire <a href="../Inscription" style="color: #273c75">ici</a></label>
   <br>
  <h2 class="titre_conn" style="color: #27c997">Connectez-vous</h2>

  <h4 class="lab">Email</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="user" type="text" class="form-control  inp" name="user" placeholder="Email" required="">
  </div>
  <br>
    <h4 class="lab">Mot de passe</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="pass required=""" type="password" class="form-control  inp" name="pass" placeholder="Mot de passe" required="">
  </div>
  <br>
  <button type="submit" name="submit" id="submit" class="btn  but" style="background-color:#27c997;color: #fff ">Se connecter</button>
  <br>
  <br>
  <a href="" style="font-weight : bold;color: #273c75">Mot de passe oublié ?</a>


</div>

<div class="col-sm-8" style="padding: 2%;">
  </div>

  </form>





</body>


</html>
   <?php
                if(isset($_GET['err'])){
                    $err = $_GET['err'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
