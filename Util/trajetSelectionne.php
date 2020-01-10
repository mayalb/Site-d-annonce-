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
  <title>Mes Colis</title>

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
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style type="text/css">
    .boxdetail {
      background-color: #20c997;
      border:none;
      border-left: 2px  solid #273c75;
      color: #fff;
    }
  .modal-body i {color: #273c75}
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
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Amirat Rima</span>
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
            <a href="ajoutercolis.php" class="">
                        <i class="fa fa-road"></i>
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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Mes Colis</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Accueil (utilisateur)/ </a> <i class="fa fa-cubes"></i><a>Mes Colis</a></li>
            </ol>
          </div>
        </div>

        <div class="row">



<?php

$conn=mysqli_connect("localhost","root","","bddprojet") or die("Pas de connexion");
 $get= $_GET['id'];
$getcolis=$_GET['colis'];

$res=mysqli_query($conn,"SELECT * from annoncetrajet where matriculetrajet=$get");
while($row1=mysqli_fetch_assoc($res))
   	 {	
   	 	$lieuDepTrajet= $row1['lieudepart'] ;
        $lieuArrTrajet = $row1['lieuarrive'] ;
        $DatedepTrajet=$row1['datedepart'] ;
        $DateAretTrajet=$row1['dateretour'] ;
        $num = $row1['numerotransporteur'];
        $premium=$row1['premium'] ;
        if($premium==1)
        {
            $pre="Le transporteur est premium";
        }else{$pre=" ";}

        echo ("
             
      		  <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>

            <div class='info-box white-bg'>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                  </button>
                <div class='profile-userpic'>
                    <img src='img/avatar1.jpg' class='img-responsive' alt=''>

                </div>

                <div>
                    <h3>Trajet</h3> 
                </div>
               
                
                  <strong><p> Adresse de depart : <span style='color:#78b9eb'> $lieuDepTrajet </span></p></strong> 
                  <strong><p> Adresse d'arrivèe : <span style='color:#78b9eb'> $lieuArrTrajet </span></p></strong> 
                  <strong><p> Date départ du trajet  : <span style='color:#78b9eb'> $DatedepTrajet </span></p></strong> 
                  <strong><p> Date de retour du trajet  : <span style='color:#78b9eb'>$DateAretTrajet </span></p></strong>
                   <strong><p> N°téléphone  : <span style='color:#78b9eb'> $num </span></p></strong>  
            
                 <p style='color: #273c75;margin-right: 10px;font-weight: bold;font-size:18px;'>$pre</p>
                
                <div class='row'>
                  <div class='col-xs-6'>
                   <form method='POST' action='trajetSelectionne.php?id=$get&colis=$getcolis'> 
                   <input type='submit'  value='Annuler invitation' name='annulinvit' id='annulinvit' class='boxdetail'/>
                   </form>     
                   </div>
                   <div class='col-xs-6'>    
                   <form method='POST' action='details-colis.php?id=$getcolis'> 
                   <input type='submit'  value='Details du trajet' name='detail' id='detail' class='boxdetail' />
                   </form>
                   </div>
              </div>

            <br>
                   </a>
                  </div><br><br><br>
               
            </div>
          </div>
          </div>
               <script>
                        function go(){
                            window.location='detail.php?d=".$get."';
                        }

                  </script>






      					");
    }
    if(isset($_POST["annulinvit"]))
    {
    	
    	 $sqls="UPDATE annoncecolis  SET trouvtrajet='0' where idcolis=$getcolis";
          mysqli_query($conn,$sqls);

          $sql="UPDATE trajet_colis  SET demande='0' where id_colis=$getcolis";
          mysqli_query($conn,$sql);

    }
?>
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
