<?php
include("../database.php");
$posi=1;
include("../connect2.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>QuickColis Principale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="../connexion/style_conn.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script
  src="https://code.jquery.com/jquery-1.9.0.min.js"
  integrity="sha256-f6DVw/U4x2+HjgEqw5BZf67Kq/5vudRZuRkljnbF344="
  crossorigin="anonymous"></script>
  <style type="text/css">
  	
  	@media (max-width: 767px) {
  .navbar-text {
    margin-top: 15px;
    margin-bottom: 15px;
    padding-right: 15px;
    padding-left: 15px;
  }
}

.navbar-fixed-left {
    padding-top: 10px;
    width: 160px;
    position: fixed;
    border-radius: 0;
    height: 100%;
    z-index: 1029;
    /*
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    */
}

.navbar-fixed-left .navbar-nav {
    float: left;
    margin: 0;
}

.navbar-fixed-left .navbar-nav > li {
    float: none;  /* Cancel default li float: left */
    width: 159px;
}

.navbar-fixed-left .navbar-nav > li > a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
} 

.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
    margin-top: -30px;
    margin-left: 150px;
}

.navbar-fixed-left .navbar-nav .open .dropdown-menu {
    position: absolute;
    float: left;
    background-color: #fff;
    min-width: 160px;
    /*
    padding: 5px 0;
    margin: 2px 0 0;
    */

    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-width: 0 1px 1px;
    border-radius: 0 0 4px 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}



/* set default padding container */
.navbar-fixed-left + .container,
.navbar-fixed-left + .container-fluid {
    padding-left: 180px;
}


.app-main-content {
    padding-top: 0px;
}



@media (max-width: 767px) {
    .navbar-fixed-left {
        width: 60px;

    }

    .navbar-fixed-left + .container,
    .navbar-fixed-left + .container-fluid {
        padding-left: 80px;
    }

    .navbar-fixed-left .navbar-nav > li {
        width: 59px;
    }
    .navbar-fixed-left .navbar-nav > li > .dropdown-menu {
        margin-top: -30px;
        margin-left: 50px;
    }
}



/* navbar-fixed dropdown */

@media (max-width: 767px) {
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > li > a {
    color: #333;
  }
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #262626;
    background-color: #f5f5f5;
  }
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #337ab7;
  }
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-fixed-left .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #777;
  }

}


  </style>
</head>

<body role="document">


 <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">logo</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>   
            </div>

            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">Accueil</a></li>
                    <li><a href="../about.html">A propos</a></li>
                    <li><a href="../contact.html">Contact</a></li>            
                </ul>

            </div>
        </div>
        </nav>



        <!-- left navbar start -->
        
<div class="container" style="margin-top: 40px;">
<!----formulaire -->
  <form form enctype="multipart/form-data"  id="regform" method="POST" action="">

<div class="row" style="width: 100%;margin-left: 0px; display: flex;">

<div class="col-sm-8" style="padding: 2%;">
  </div>

<div class="col-sm-8 coll text-center">
  <div  id="page1">
<label class="titre_conn" style="font-size: 30px;color:#20C997;">Je suis un ...   </label>
<br>
<label class="radio-inline lab" style="font-size: 25px;"><input type="radio" name="tipe" value="0"  required="">Utilisateur</label>
<label class="radio-inline lab" style="font-size: 25px;"><input type="radio" name="tipe" value="1" required="">Transporteur</label>
<br>
<br>
  <h4 class="lab">Nom</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class=""></i></span>
    <input id="nom" type="text" class="form-control  inp" name="nom" placeholder="Nom" required="">
  </div>

  <h4 class="lab">Prénom</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class=""></i></span>
    <input id="prenom" type="text" class="form-control  inp" name="prenom" placeholder="Prénom" required="">
  </div>
    <h4 class="lab">Numéro de téléphone</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class=""></i></span>
    <input id="numerodetelephone" type="number" class="form-control  inp" name="numerodetelephone" placeholder="Numero de téléphone" required="">
  </div>
 <h4 class="lab">Email</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class=""></i></span>
    <input id="email" type="email" class="form-control  inp" name="email" placeholder="Email" required="">
  </div>

    <h4 class="lab">Mot de passe</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="motdepasse" type="password" class="form-control  inp" name="motdepasse" placeholder="Mot de passe" required="">
  </div>
    <h4 class="lab">Confirmez votre mot de passe</h4>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="motdepasse2" type="password" class="form-control  inp" name="motdepasse2" placeholder="Mot de passe" required="">
  </div>
  <div class="checkbox">
  <label class="titre_conn" style="font-size: 22px;font-weight : bold;color: #20C997"><input type="checkbox"  name="Premium" id="Premium" >S'inscrire en premium</label>
</div>
  <br>

  <button type="submit" name="submit"  id="submit" class="btn but" style="background-color: #20C997;color: #fff" onclick="hideandseek()">S'inscrire</button>

</div>
  <div   id="page2">
           <h1 class="titre_conn" style="color: #20C997">Inscrire Premium </h1>

          <h4>  Veuillez entrer les fichier sous format ".jpg" ou ".jpeg"</h4> 
    <label style="font-size: 20px;">Insérer votre pièce d'identité :</label>
 <br>
     <label for="im1">
      <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
    <input type="file" name="im1" id="im1" class="form-control  inp" style="margin:  auto; font-size: 20px;display: none;">
  </label>
  <br>
  <br>
  <label style="font-size: 20px;">Insérer votre attestation sur l'honneur</label>
   <br>
   <label for="image2">
      <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
    <input type="file" name="image2" id="image2" class="form-control  inp" style="margin:  auto; font-size: 20px;display: none;">
  </label>
    <br>
    <br>
         <button type="submit" class="btn btn-success but2" name="submit" style="background-color: #20C997" >S'inscrire</button>  &nbsp &nbsp &nbsp &nbsp &nbsp
        <button type="button" class="btn btn-primary but2" onclick="seekandhide()" style="background-color: #273c75">Précédent</button>                   
         

  </div>
 

</div>
<div class="col-sm-8" style="padding: 2%;">
  </div>

  </div>


  </form>
</div>

</body>
<script type="text/javascript">
  
window.onload = function()
{
  var id2 = document.getElementById("page2");
  id2.style.display="none";
};

function hideandseek()
{ 
  var id1=document.getElementById("page1");
  var id2=document.getElementById("page2");
  var id3=document.getElementById("Premium");
  
  if(id3.checked)
  {

    id1.style.display="none";
    id2.style.display="block";
    var im1=document.getElementById("im1");
    var im2=document.getElementById("image2");
    im1.required=true;
    im2.required=true;
  }
  else
  {
    inscrire.setAttribute('type','submit');
    inscrire.setAttribute('name','submit'); 
  }

}

function seekandhide()
{ 
  var id1=document.getElementById("page1");
  var id2=document.getElementById("page2");
  id2.style.display="none";
  id1.style.display="block";
}

</script>


</html>
  <?php
 //k^kpopk



function generer_matricule($connexion)
{

$res=mysqli_query($connexion,"SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'bddprojet' AND TABLE_NAME = 'compte'");
$res=mysqli_fetch_assoc($res);
$id=$res['AUTO_INCREMENT'];


if($_POST["tipe"]==0)
{
  $matricule="P".$id;
} else
{
  $matricule="T".$id;

}


return ($matricule);



}


        if (isset($_POST["submit"]))
        {
          $mat=generer_matricule($conn);    
          $nom=$_POST["nom"];
          $prenom=$_POST["prenom"];
          $numerodetelephone=$_POST["numerodetelephone"];
          $email=$_POST["email"];
          $motdepasse=$_POST["motdepasse"];
          $motdepasse2=$_POST["motdepasse2"];
          $tipe=$_POST["tipe"];

          if(isset($_POST["Premium"]))
          $prem=1;
        else
        $prem=0;      

         $directionid="";
          $directionattes=""; 





          if($prem)
          {
            $premium='1';
          } else
          {
            $premium='0';

          }
          if ($motdepasse!=$motdepasse2)
          {
            echo "
          <script type=\"text/javascript\">
          alert('Veuillez vérifier mot de passe et sa confirmation ! ');

          </script>


            ";

          }
          else
        {
          if ($premium=='1')
          {
        //  print_r($_FILES["im1"]); die();
          $dossier="../profil/";

          $directionid=$dossier.$_FILES["im1"]["name"];
          $directionattes=$dossier.$_FILES["image2"]["name"]; 
          

        $extid=strtolower(pathinfo($directionid,PATHINFO_EXTENSION));
        $extattes=strtolower(pathinfo($directionattes,PATHINFO_EXTENSION));


          $directionid=$dossier."ID/".$mat.".".$extid;  
          $directionattes=$dossier."ATTES/".$mat.".".$extattes; 
          

          if ($extid!="jpg" && $extid!="jpeg")
          {
            ////
            echo "  
              <script type=\"text/javascript\">
          alert('Veuillez vérifier l'extension de fichier pièce identité ');

          </script> ";

          }
          if ($extattes!="jpg" && $extattes!="jpeg")
          {
            ////
            echo "  
              <script type=\"text/javascript\">
          alert('Veuillez vérifier l'extension de fichier attestation sur l honneur ');

          </script> ";

          }

          
        
      move_uploaded_file($_FILES["im1"]["tmp_name"], $directionid);
      move_uploaded_file($_FILES["image2"]["tmp_name"], $directionattes);
        }
          $sql="INSERT INTO compte(matricule,nom,prenom,numerodetelephone,email,motdepasse,nature,premium,pieceidentite,declarationhonneur) VALUES ('$mat','$nom','$prenom','$numerodetelephone','$email','$motdepasse','$tipe','$premium','$directionid','$directionattes')";
        
          mysqli_query($conn,$sql);

           $_SESSION['us'] = $mat;

        

           }
          


        }

?>