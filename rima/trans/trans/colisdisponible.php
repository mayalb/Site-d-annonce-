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
            <a href="ajout-colis.php" class="">
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
<!-- debut eco--->

<?php

$i=0;
$get= $_GET['id'];

$res=mysqli_query($conn,"SELECT * from annoncetrajet where matriculetrajet=$get ");
   $trouv=0;

while($row=mysqli_fetch_assoc($res)){
    
     $depart=$row['lieudepart'];
     $arrive=$row['lieuarrive'];
     $DatedepTrajet=$row['datedepart'] ;

     
     $res1=mysqli_query($conn,"SELECT * from arret where id_trajet=$get");
     while($row1=mysqli_fetch_assoc($res1)){
     
     $arret1=$row1['arret1'];
     $arret2=$row1['arret2'];
     $arret3=$row1['arret3'];
     $arret4=$row1['arret4'];
   }
}
$res2=mysqli_query($conn,"SELECT * from annoncecolis");
  $i=0;
 while($row2=mysqli_fetch_assoc($res2)){

    $DateEnvoiColis=$row2['dateenvoie'] ;
   if($DateEnvoiColis < $DatedepTrajet){
    if(($row2['adressedepart']==$depart)||($row2['adressedepart']== $arret1)||($row2['adressedepart']==$arret2)||($row2['adressedepart']==$arret3)||($row2['adressedepart']==$arret4)){
        if(($row2['adressearrive']==$arrive)||($row2['adressearrive']==$arret1)||($row2['adressearrive']==$arret2)||($row2['adressearrive']==$arret3)||($row2['adressearrive']==$arret4)){
          $trouv=1;
        
            
            $des = $row2['description'];
            $ad1 =$row2['adressedepart'];
            $date1 =$row2['datedepot'];
            $ad2 =$row2['adressearrive'];
            $trajet ="Colis".$i;
            $i++;
           // $inv ="BALIIIIZ";
            $id=$row2['idcolis'];
            $res3=mysqli_query($conn,"SELECT * from trajet_colis where id_colis=$id");
  
            while($row3=mysqli_fetch_assoc($res3)){
               if(($row3['accepter']!=1)){
                if(($row3['demande']==1)&&($row3['id_trajet']==$get))
                {$inv ="Déja-invité";
                 $aller=0;}
                else{$inv="Envoyer_invitation";
                 $aller=1;}
               
            


echo ("
  <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>

            <div class='info-box white-bg'>
                    
                        <h3 style='color:#27c997;font-weight:bold'> $trajet</h3>
                    <strong>  <p>Description   :  <span style='color:#78b9eb'>$des</span></p></strong> 
                    <strong>  <p>Date d'envoie :  <span style='color:#78b9eb'>$DateEnvoiColis</span></p></strong> 
                    <strong>  <p>Adresse de depart :  <span style='color:#78b9eb'>$ad1</span></p></strong> 
                    <strong>  <p> Date de depot :  <span style='color:#78b9eb'>$date1</span></p></strong> 
                    <strong>  <p> Adresse d'arrivée :  <span style='color:#78b9eb'>$ad2</span></p></strong> 
                         <form method='POST' action='invitationtrajet.php?idc=$id&idt=$get'>
                       <input type='submit' name='aller' id='aller'  value=$inv class='boxdetail'> 
                       </form>

                         
                        
                        
                         </div>  
                          </div>
                    
                      
                          

                         
                
                 
                       ");

                
                if($_GET['invit']==1){

                    if($inv =="Dèja_invité"){
                         echo '<script type="text/javascript">' . 'alert("Dèja invité  ");' . '</script>';
                    
                }
                else
                    echo '<script type="text/javascript">' . 'alert("Invitation envoyer  ");' . '</script>';

                }



        }else{echo"Vous avez déja trouvé un trajet";}
    }
   }
}}
 }
 if($trouv==0){echo"Aucune annonce de colis n'est disponible pour le moment";}
 ?>



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

     
