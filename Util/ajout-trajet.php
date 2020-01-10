<?php
$posi=1;
include("../database.php");
include("../connect.php");

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
  <title>Ajouter trajet</title>

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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <a href="mestrajets.php" class="">
                          <i class="fa fa-road"></i>
                          <span>Mes Trajets</span>
                      </a>
           <li class="sub-menu">
            <a href="ajout-trajet.php" class="">
                        <i class="material-icons">&#xe567;</i>
                        <span>Ajouter Trajet</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                        <i class="fa fa-history"></i>
                          <span>Historique</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>A Propos</span>
                      </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
<form name="formulaire" id="formulaire"  method="POST" enctype="multipart/form-data" action="ajout-trajet.php">
    <div class="container">
  
        <div class="row">
            <div class="col-md-12"> <h2 style="color: #27c997;font-weight: bold;">Ajouter un trajet</h2>  </div>
        </div>
    <hr>

    <div class="row">
        <div class="col-md-12  col-xs-12">
          <label class="control-label">Choisissez votre moyen de transport :  </label>
          <br><br>
          <div class="col-md-12 col-xs-12 div">
              <input type="radio" name="transport" id="moto" class="input-hidden" value="moto" />
              <label for="moto"> <img src="img/moto.png" alt="moto" /> </label>
                              &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="transport" id="voiture" class="input-hidden" value="voiture"  />
              <label for="voiture"> <img src="img/voiture.png" alt="moto" /></label>
                              &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="transport" id="bus" class="input-hidden" value="bus" />
              <label for="bus"> <img src="img/bus.png"  /> </label>
                              &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="transport" id="camion" class="input-hidden" value="camion"  />
              <label for="camion"> <img src="img/camion.png"  /></label>
          </div>

        </div>

    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
          <label class="control-label">La matricule  </label><br>
            <div class="col-md-12 col-xs-12 col-sm-6">
                <div class="form-group">         
                  <p class="help-block"><small>matricule de votre véhicule </small></p>
                  <input type="text" class="form-control" id="matricule" name="matricule">
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
                  <p class="help-block"><small>Lieu de départ</small></p>
                  <input type="text" class="form-control" id="lieudepart" name="lieudepart">
                </div>
            </div>
    
           <div class="col-md-6 col-xs-6 col-sm-6">
              <div class="form-group">
                   <p class="help-block"><small>Lieu d'arrivée</small></p>     
                   <input type="text" class="form-control" id="lieuarrive" name="lieuarrive">
              </div>
           </div>   
        </div>
    </div>
    <hr>

    <div class="row">
         <div class="col-md-12">
              <label class="control-label">Date</label><br>
                <div class="col-md-6 col-xs-6 col-sm-6">
                  <div class="form-group">       
                    <p class="help-block"><small>Date de départ</small></p>
                    <input type="date" class="form-control" id="datedepart" name="datedepart">
                  </div>
                </div>    
            <div class="col-md-6 col-xs-6 col-sm-6">
                <div class="form-group">
                     <p class="help-block"><small>Date de retour</small></p>      
                     <input type="date" class="form-control" id="dateretour" name="dateretour">
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
              <label for="s"><img src="img/s.png" alt="s" /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="m" class="input-hidden" value="m"/>
              <label for="m"><img src="img/m.png" /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="l" class="input-hidden" value="l"/>
              <label for="l"> <img src="img/l.png"  /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="xl" class="input-hidden" value="xl"/>
              <label for="xl"><img src="img/xl.png"  /></label>
                                      &nbsp&nbsp&nbsp&nbsp
              <input type="radio" name="taille" id="xxl" class="input-hidden" value="xxl" />
              <label for="xxl"> <img src="img/xxl.png"  /></label>
            </div>


 

            <div class="col-md-6">
              <label class="control-label">Poid</label>
              <p class="help-block"><small>Indiquer le poid limite que vous pouvez acheminer</small></p>
                  <input type="text" class="form-control" id="poid" name="poid">
            </div>
         </div>

      </div>
      <hr>


      <div class="row">
           <div class="col-md-12">
                <label class="control-label"> Nombre de kilométres </label><br>
                <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="form-group">    
                      <label class="control-label"></label>      
                      <input type="text" class="form-control" id="kilometre" name="kilometre">
                </div>
                </div>
           </div>
     </div>

     <hr>
     <div class="row">
        <div class="col-md-12">
            <label class="control-label">Les différents lieux d'arrét </label><br>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <div class="form-group">
                    <p class="help-block"><small>Arret-1</small></p>
                    <input type="text" class="form-control" id="arret1" name="arret1">
                </div>
            </div>
    
        <div class="col-md-3 col-xs-6 col-sm-6">
            <div class="form-group">
                 <p class="help-block"><small>Arrét-2</small></p>        
                 <input type="text" class="form-control" id="arret2" name="arret2">
            </div>
        </div>
        <div class="col-md-3 col-xs-6 col-sm-6">
              <div class="form-group">
                <p class="help-block"><small>Arrét-3</small></p>      
                <input type="text" class="form-control" id="arret3" name="arret3">
              </div>
        </div>
        <div class="col-md-3 col-xs-6 col-sm-6">
              <div class="form-group">
               <p class="help-block"><small>Arrét-4</small></p>             
               <input type="text" class="form-control" id="arret4" name="arret4">
              </div>
        </div>  
    </div>
</div>


    <hr>
    <div class="row" style="background-color:  #E6FAF7">
        <div class="col-md-12">
          <label class="control-label">Ce trajet est régulier</label><br>
           <span> <input type="radio" name="choix" id="choix" value="oui" onclick="myFunction()"> Oui</span><br>
           <span><input type="radio" name="choix" id="choix" value="non"checked onclick="myFunction2()"> Non</span>  
        </div>
    </div>


    <hr>
    <div id="mydiv" style="display: none;">
          <div class="row" style="background-color:  #E6FAF7">
              <div class="col-md-12">
                  <label class="control-label">jour</label><br>
                    <div class="col-md-6 col-xs-6 col-sm-6">
                      <div class="form-group">
                         <p class="help-block"><small>Jour de départ</small></p>
                         <input type="date" class="form-control" id="jourdepart" name="jourdepart">
                      </div>
                    </div>   
                             
              </div>
          </div>
    <hr>
    <div class="row" style="background-color:  #E6FAF7">
            <div class="col-md-12">
                <label class="control-label">Fréquence de ce voyage </label>      
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="form-group">
                        <select class="form-control" name="frequence" id="frequence">
                            <option selected="" value="1"> une fois</option>
                            <option selected="" value="2">2 fois</option>
                            <option selected="" value="3">3 fois</option>
                        </select>
                    </div>
                  </div>
            </div>
    </div>
  </div>  

  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">
         <input type='submit' name ='submit' id='do_login' value='Enregistrer' title='Enregistrer' class="btn btn-lg" style="background-color: #27c997;color: #fff;font-weight: bold;" />
      </h2>
    </div>
  </div>

</div>
</form>

      </section>
    </section>
    <!--main content end-->
    
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
///**************************************PHP***************************************************///
 	        $s = "select * from annoncetrajet";
$qs = mysqli_query($conn,$s);

         error_reporting(-1);
        function generer_matricule($connexion){

      $res=mysqli_query($connexion,"SELECT 'AUTO_INCREMENT' FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'bddprojet' AND TABLE_NAME = 'annoncetrajet'");
      $res=mysqli_fetch_assoc($res);
      $id=$res['AUTO_INCREMENT'];
      return ($id);
    }
        if (isset($_POST["submit"]))
        {
          $numerotrajet=generer_matricule($conn); 
           $s = "select * from annoncetrajet";
          $qs = mysqli_query($conn,$s);
          $id = mysqli_num_rows($qs) + 1;
        
          $matricule=$_POST["matricule"];
          $lieudepart=$_POST["lieudepart"];
          $lieuarrive=$_POST["lieuarrive"];     
          $datedepart=$_POST["datedepart"];
          $dateretour=$_POST["dateretour"];
          $poid = $_POST["poid"];
          $kilometre=$_POST["kilometre"];
          $arret1=$_POST["arret1"];
          $arret2=$_POST["arret2"];
          $arret3=$_POST["arret3"];
          $arret4=$_POST["arret4"];
          $choix=$_POST["choix"];
          $taille=$_POST["taille"];
        
          $moyen=$_POST["transport"] ;
        
          $jourdepart=$_POST["jourdepart"];
          if(($arret1!='')||($arret2!='')||($arret3!='')||($arret4!='')){$différentslieudarret=1;}
    
          $frequence = mysqli_real_escape_string($conn,htmlspecialchars($_POST['frequence']));
          if($datedepart>$dateretour){
                echo '<script type="text/javascript">' . 'alert("Modifier les dates ! ");' . '</script>';
                exit();
             }
          if($choix=="oui"){
            $regulier=1;

          }else{$regulier=0;}

           $sqll = "INSERT INTO annoncetrajet(matriculetrajet,matriculetransporteur,lieudepart,lieuarrive,matriculevoiture,taille,datedepart,dateretour,kilometre,regulier,frequencevoyage,jourdepart,moyentransport,poids, differentslieuxarrerts)
                      VALUES ('".$numerotrajet."','".$num."','". $lieudepart."','".$lieuarrive."','".$matricule."','".$taille."','".$datedepart."','".$dateretour."','".$kilometre."','".$regulier."','".$frequence."','".$jourdepart."','".$moyen."','".$poid."','".$différentslieudarret."')";
           mysqli_query($conn,$sqll); 
         
        
        $sql ="INSERT INTO arret (id_trajet,arret1,arret2,arret3,arret4) VALUES ('".$id."','".$arret1."','". $arret2."','".$arret3."','".$arret4."')";
           mysqli_query($conn,$sql);
        
     
         
        }

?> 

</html>
