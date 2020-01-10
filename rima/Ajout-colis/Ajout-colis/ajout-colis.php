<?php
$posi=1;
include("../../database.php");
include("../../connect.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>Ajouter Colis</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <style type="text/css">

body {
  background-color: #fff;
}

    .input-hidden {
  position: absolute;
  left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #fff;
  box-shadow: 0 0 3px 3px #273c75;
   border-radius: 50%;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px #ccc;
  width: 80px;
  height: 80px;
  transition: 500ms all;
  box-shadow: 0 0 3px 3px #ccc;
   border-radius: 50%;

}

input[type=radio]:checked + label>img {
  transform: 
    rotateZ(-5deg) 
    rotateX(-5deg);
    border-radius: 50%;
}
.div {
  padding-left: 300px;
}
@media only screen and (max-width: 768px) {
 input[type=radio] + label> img {
    width: 60px;
  height: 60px;
  }
  .div{
    padding-left: 0px;
  }
}

img:hover {
  opacity: 1;
  transition: .3s ease;
  background-color:  rgba(231,76,60,0.2);
}

.image-upload>input {
  display: none;
}
  </style>

</head>

<body>
  
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

   <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">logo</a>
      <!--logo end-->
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
           <a data-toggle="dropdown" class="dropdown-toggle" href="../profil">
                  <span class="profile-ava">
                               
                  <img src="<?php 
                          if (empty($res['photo']))
                          echo('../7.png');
                          else
                          echo('../profil/image/'.$res['photo'])


                   ?>" class="img-circle profil" alt="Profil" style="width: 40px;height: 40px;">
                    </span>
                
                           
                            <span class="username">
                                <?php 

                            $nom=$res['nom'].' '.$res['prenom'];

                            echo ("$nom");

                              ?>
                           </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Mon Profile</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
     <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Accueil</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-user"></i>
                          <span>Profile</span>
                      </a>

          </li>
          <li class="sub-menu">
            <a href="mescolis.php" class="">
                          <i class="fa fa-cubes"></i>
                          <span>Mes Colis</span>
                      </a>
           <li class="sub-menu">
            <a href="ajout-colis.php" class="">
                        <i class="fa fa-plus"></i>
                        <span>Ajouter Colis</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="historiquecolis.php" class="">
                        <i class="fa fa-history"></i>
                          <span>Historique</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="../about.html" class="">
                          <i class="icon_document_alt"></i>
                          <span>A Propos</span>
                      </a>
          </li>
          
          <li class="sub-menu">
            <a href="../contact.html" class="">
                          <i class="fa fa-phone"></i>
                          <span>Contact</span>
                      </a>

          </li>
          <li class="sub-menu">
            <a href="./deconnect.php" class="">
                          <i class="fa fa-sign-out"></i>
                          <span>Deconnexion</span>
                      </a>

          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
     <section id="main-content">
      <section class="wrapper">
      	<form name="formulaire" id="formulaire" onsubmit="return valider();"  method="POST" enctype="multipart/form-data" action="">
    <div class="container">
  
        <div class="row">
            <div class="col-md-12"> <h2 style="color:#20c997; "><strong>Ajouter un colis</strong></h2></div>
        </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
          <label class="control-label">Description du colis :  </label><br>
            <div class="col-md-12 col-xs-12 col-sm-6">
                <div class="form-group">         
                  <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
       <div class="col-md-12">
          <label class="control-label">Itineraire</label><br>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="form-group">     
                  <p class="help-block"><small>Adresse de depart :</small></p>
                  <input type="text" class="form-control" id="from" name="adrdepart">
                </div>
            </div>
    
           <div class="col-md-6 col-xs-6 col-sm-6">
              <div class="form-group">
                   <p class="help-block"><small>Adresse d'arrivée :</small></p>     
                   <input type="text" class="form-control" id="to" name="adrarrive" >
              </div>
           </div>   
        </div>
          <div style="margin-left: 45%; margin-bottom: 10px;">
    <button class="btn" type="button" style="width: 120px;" onclick="calcRoute();"> Valider</button>
    </div>
        <input type="text" id="distance" name="distance" value="0" style="display: none;">
    </div>
      <div class="container-fluid" style="width: 80%;">
           <div id="googleMap" style="height: 200px;">
           </div>
           
           <div id="output">
               
           </div>
       </div>
    <hr>

    <div class="row">
         <div class="col-md-12">
              <label class="control-label">Date</label><br>
                <div class="col-md-6 col-xs-6 col-sm-6">
                  <div class="form-group">       
                    <p class="help-block"><small>Date de dépot :</small></p>
                    <input type="date" class="form-control" id="datedepot" name="datedepot">
                  </div>
                </div>    
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="form-group">
                     <p class="help-block"><small>Date d'envoi :</small></p>      
                     <input type="date" class="form-control" id="dateenvoi" name="dateenvoi">
                </div>
            </div>
    
          </div>
    </div>
    <hr>


      <div class="row">
          <div class="col-md-12">
            <label class="control-label">Format </label><br><br>
            <div class="col-md-6  ">
              <label class="control-label">Taille </label><br>
              <p class="help-block"><small>Indiquez la taille limite que vous pouvez acheminer  </small></p>
              <input type="radio" name="taille" id="s" class="input-hidden" value="s" />
              <label for="s"><img src="s.png" alt="s" /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="m" class="input-hidden" value="m"/>
              <label for="m"><img src="m.png" /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="l" class="input-hidden" value="l"/>
              <label for="l"> <img src="l.png"  /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="xl" class="input-hidden" value="xl"/>
              <label for="xl"><img src="xl.png"  /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="xxl" class="input-hidden" value="xxl" />
              <label for="xxl"> <img src="xxl.png"  /></label>
            </div>


 

            <div class="col-md-6">
              <label class="control-label">Poid</label>
              <p class="help-block"><small>Indiquer le poid de votre colis</small></p>
                  <input type="text" class="form-control" id="poid" name="poid">
            </div>
           
         </div>

      </div>
      <hr>

      <div class="col-md-6">
              <label class="control-label">Demande spéciale</label>
                  <input type="text" class="form-control" id="demande" name="demande">
            </div>
     <hr>
      
            
							        <div class="image-upload">
							        	<span style="padding-left: 25px;"> Insérer une photo du colis :</span>  
									  <label for="ima">
									    <img src="add.png"/ style="width: 60px;height: 60px;">
									  </label>

									    <input type="file" name="ima" id="ima" style="color: #fff;" >
									</div>
             
            </div>
    </div>
</div>


    <hr>
    
    
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">
         <input type='submit' name ='submit' id='do_login' value='Enregistrer' title='Enregistrer' class="btn btn-custom btn-lg" style="background-color: #27c997;color: #fff;font-weight: bold"/>
      </h2>
    </div>
  </div>

</div>
</form>
</section>
</section>
 
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
<script type="text/javascript">
function myFunction() {
  var x = document.getElementById("mydiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } 
}

function myFunction2(){
  var y = document.getElementById("mydiv");
  if(y.style.display === "block")
   y.style.display = "none";
}

</script>
</body>
<?php
         error_reporting(-1);
        function generer_numero_colis($connexion)
        {

        $res=mysqli_query($connexion,"SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'bddprojet' AND TABLE_NAME = 'annoncecolis'");
        $res=mysqli_fetch_assoc($res);
        $numerocolis=$res['AUTO_INCREMENT'];
        return ($numerocolis);
        }
        if (isset($_POST["submit"]))
        {
          $numerocolis=generer_numero_colis($conn); 
          $description=$_POST["description"];
          $adrdepart=$_POST["adrdepart"];
          $adrarrive=$_POST["adrarrive"];
          $dateenvoi=$_POST["dateenvoi"];
          
          $datedepot=$_POST["datedepot"];
          $poid=$_POST["poid"];
          $demande=$_POST["demande"];
          $taille=$_POST["taille"] ;
          $poi=$num;
          echo $poi ;
        $dossier="";
          $directionid=$dossier.$_FILES["ima"]["name"];
        $extid=strtolower(pathinfo($directionid,PATHINFO_EXTENSION));
          $directionid=$dossier."PHOTO_Colis/".$numerocolis.".".$extid; 
          if ($extid!="jpg" && $extid!="jpeg")
          {
            ////
            echo "  
              <script type=\"text/javascript\">
          alert('Veuillez vérifier l'extension de fichier pièce identité ');

          </script> ";

          }   
      move_uploaded_file($_FILES["ima"]["tmp_name"], $directionid);
          $sql="INSERT INTO annoncecolis(numeroparticulier,idcolis,description,adressedepart,adressearrive,dateenvoie,datedepot, poids,taille,demandespecial,photocolis) VALUES ('$poi','$numerocolis','$description','$adrdepart','$adrarrive','$dateenvoi','$datedepot','$poid','$taille','$demande','$directionid')";
       
          mysqli_query($conn,$sql);
        }

?> 
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKHMVCsGXT3wzJxO0hCsh_enpT8ZDQZ8c&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="javascript.js" type="text/javascript"></script>
            <script type="text/javascript">
          function valider()
          {
            dis = document.getElementById('distance');

            if(dis.value=="0")
            {
              alert('Veuillez vérifier itineraire');
              return false;
            } 
            else
              return true;
          }



      </script>
</html>
