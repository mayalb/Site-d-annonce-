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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Mes Trajets</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style type="text/css">
    .hh{box-shadow:1px 1px 15px 1px black;
      width:400px;
      height:180px;
      border:1px solid gray;
      background-color:#E8EAED;
      z-index: 1;position: absolute;
    }
    .boxdetail {
      background-color: #20c997;
      border:none;
      border-left: 2px  solid #273c75;
      color: #fff;
    }
  .modal-body i {color: #273c75}

.badge-danger{
   background:red;
   position:relative;
   top: -20px;
   left: -35px;
}


  </style>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


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
            <a href="historiquetrajet.php" class="">
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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Mes Trajets</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Accueil (utilisateur)/ </a> <i class="fa fa-road"></i><a>Mes Trajets</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <?php
          $res=mysqli_query($conn,"SELECT * from annoncetrajet where matriculetransporteur='$num' ORDER BY  datedepart DESC");

$i=1;
while($row=mysqli_fetch_assoc($res)){
  if($row['supprimer']==0){

    $trajet="TRAJET ".$i;
    $i++;
    $adrde =$row['lieudepart'];
    $adrarr =$row['lieuarrive'];
    $id= $row['matriculetrajet'] ;
    $datedepart=$row['datedepart'] ;
    $dateretour=$row['dateretour'] ;
    $poids=$row['poids'];
    $taille=$row['taille'] ;
    $kilometre=$row['kilometre'] ;
    $numero=$row['numerotransporteur'];
    $regulier=$row['regulier'];
    $matriculevoiture=$row['matriculevoiture'] ;
      
    $premium=$row['premium'] ;
       $frequence=$row['frequencevoyage'] ;
        $moyentrans=$row['moyentransport'] ;
        $jourdepart=$row['jourdepart'] ;
 $numero = $row['numerotransporteur'];
  if($premium==1)
        {
            $pre="Premium" ;
        }
        else{
          $pre=" " ;
        }

    if($row['differentslieuxarrerts']!=0){
       $res1=mysqli_query($conn,"SELECT * from arret where id_trajet=$id");
       while($row1=mysqli_fetch_assoc($res1)){
       $lieux1=$row1['arret1'];
       $lieux2=$row1['arret2'];
       $lieux3=$row1['arret3'];
       $lieux4=$row1['arret4'];
       }
       if( $lieux1!=''){
        $lieu="Les arrets :".$lieux1 ;
       
        if($lieux2!=''){
            $lieu=$lieux1.",".$lieux2 ;
            if( $lieux3!=''){
            $lieu=$lieux1.",".$lieux2.",".$lieux3 ;
               if( $lieux4!=''){
            $lieu=$lieux1.",".$lieux2.",".$lieux3.",".$lieux4.".";
        }
        }
        }

       }
        if($regulier==1)
                {

                  $lieu="Ce trajet est régulier , les différents lieux  d'arrets  : ".$lieu ;
                  $jourdepart="Le jour de départ est :".$jourdepart ;

                }
    
    }else{
      $lieu="Aucun arret";
      $jourdepart=" ";
    }
    
     //--------------------------------------------------------------------
     $res1=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet=$id");
                 $notif=0;
                while ($row1=mysqli_fetch_assoc($res1)) {
                  $demande=$row1['demande'] ;
                  if($demande=='1')
                  {
                   
                    $notif++;
                   
                  
                  }
                  
                }
               echo "
<!-- debut eco--->
          <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>

            <div class='info-box white-bg'>
                 <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                  </button>

                <div class='profile-userpic'>
                    
                      <form method='POST' action='colis.php?id=$id'>
                              <button class='btn btn-default btn-lg btn-link' style='font-size:36px;'>
                               <span class='glyphicon glyphicon-bell' style=''></span>
                              </button>

                              <span class='badge badge-danger' >$notif</span>
                        </form>
                </div>

                
                <div>
                    <h3>$trajet</h3> 
                    <strong>  <p>Adresse départ :  <span style='color:#78b9eb'>$adrde</span></p></strong> 
                    <strong>  <p> Adresse de retour: <span style='color:#78b9eb'>$adrarr</span></p></strong> 
                    <strong> <span style='color:#78b9eb'>$pre</span></p></strong> 

                </div>
                <div class='row'>

                     <div class='col-md-6 col-xs-6'>
                           <form method='POST' action='colisdisponible.php?id=$id&invit=0'>
                           <input type='submit' name='detail' id='detail' class='boxdetail' value='Colis disponibles' /> 
                           </form>
                      </div>
                       <div class='col-md-6 col-xs-6'>
                         
                         <form method='POST' action='détail-trajet.php?id=$id'>
                       <input   type='submit' name='detail' id='detail' class='boxdetail'  value='Detail du trajet' /> 
                       </form>
                       </div>
                        
                </div>
                      
                 
                  

                  
                  <div  id='remo' class='dv' >
                </div>
                

            </div>
          </div>  

         ";
            }
                    
     }
     

          ?>
           <?php
             $resul=mysqli_query($conn,"SELECT * from annoncetrajet where   matriculetransporteur='$num'");    
        while($ro=mysqli_fetch_assoc($resul)){
          $idtrajet=$ro['matriculetrajet'];
           $res=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet='$idtrajet'");
     while($row=mysqli_fetch_assoc($res))
            {
              $effect=$row['effectue'] ;
              $donneravis=$row['donneravis'] ;
              if(($effect=='1') && ($donneravis=='0'))
              {
                    $id_trajet=$row['id_trajet'] ;
                     $id_colis=$row['id_colis'] ;
                     
                  
                  echo ("
                       <div class='container'>
  
                          <form method='post' action='affichage_trajet.php' enctype='multipart/form-data'>
                          <!-- Modal -->
                          
                            <div class='modal-dialog'>
                            
                              <!-- Modal content-->
                              <div class='modal-content'>
                                <div class='modal-header'>
                               
                                  <h4 class='modal-title'>Veuillez évaluer votre client  </h4>
                                </div>
                                <div class='modal-body'>
                                 <div style='font-size: 16px;font-weight: bold;'> Votre note : </div>
                                  <div class='starrating risingstar d-flex justify-content-center flex-row-reverse '  > <!classes bootstrap>
                                  
                        
                                  <input type='radio' id='star5' name='star5' value='5' /><label for='star5' title='5 étoiles'>5</label>
                                  <input type='radio' id='star4' name='star4' value='4' /><label for='star4' title='4 étoiles'>4</label>
                                  <input type='radio' id='star3' name='star3' value='3' /><label for='star3' title='3 étoiles'>3</label>
                                  <input type='radio' id='star2' name='star2' value='2' /><label for='star2' title='2 étoiles'>2</label>
                                  <input type='radio' id='star1' name='star1' value='1' /><label for='star1' title='1 étoiles'>1</label>
                              </div>
                            </div>
                            <div class='modal-footer'> <p style='font-size: 14px;font-weight: bold;'>Merci 😇 ! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        
                                 <input type='submit' class='btn btn-default' data-dismiss='modal' value='OK' name='OK' id='OK'/>
                            </div>
                          </div>   
                        </div>
                      </form>
                    </div>


                    ");

                  if(isset($_POST['OK']))
                   {     

                      $note='0';
                      if(isset($_POST["star1"])){$note='1';}
                      if(isset($_POST["star2"])){$note='2';}
                      if(isset($_POST["star3"])){$note='3';}
                      if(isset($_POST["star4"])){$note='4';}
                      if(isset($_POST["star5"])){$note='5';}
                      echo "votre note est ".$note ;
                      
                    
                       $sql="UPDATE annoncecolis  SET notefiabilte='$note' where idcolis=$id_colis";
                      mysqli_query($conn,$sql);
                        $sqls="UPDATE trajet_colis  SET donneravis='1' where id_trajet=$id_trajet AND id_colis=$id_colis";
                      mysqli_query($conn,$sqls);
                   }
              }
              
          
            }
          }
          ?>
     <!----   fin eco colis  ---->    
     



 
        </div>
          </section>
     
    </section>
   
  </section>
 
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>



   