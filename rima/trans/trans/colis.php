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
$conn=mysqli_connect("localhost","root","","bddprojet") or die("Pas de connexion");
$i=0;
$get= $_GET['id'];
$res=mysqli_query($conn,"SELECT * from trajet_colis where id_trajet=$get AND refuser=0 ");

while($row=mysqli_fetch_assoc($res)){
     $i=$i+1;
     $colis='Invitation'.$i;

     $idcolis=$row['id_colis'];
     $res1=mysqli_query($conn,"SELECT * from annoncecolis where idcolis=$idcolis");
     $row1=mysqli_fetch_assoc($res1);
     
     $adrde=$row1['adressedepart'];
     $adrarr=$row1['adressearrive'];
     $taille=$row1['taille'];
     $desc=  $row1['description'];
     if($desc==''){$desc='Rien na ete montionné';}
     $poi=$row1['poids'];

     if($row1['demandespecial']!=''){$dem=$row1['demandespecial'];}
     else{$dem='Un demande normal';}

     if($row['accepter']==1){$ps='(Cette invitation est déja accepter)';}
     else{$ps='';}




echo ("

              
                  
                     
        <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>

            <div class='info-box white-bg'>
                 <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                  </button>
                <div>
                    <h3>$colis</h3> 
                    <strong>  <p>Adresse départ :  <span style='color:#78b9eb'>$adrde</span></p></strong> 
                    <strong>  <p> Adresse de retour: <span style='color:#78b9eb'>$adrarr</span></p></strong> 
                     
                    <strong>  <p> Taille :<span style='color:#78b9eb'>$taille</span></p></strong> 
                    <strong>  <p> poid : <span style='color:#78b9eb'>$poi</span></p></strong> 

                   
                    <strong> <span style='color:#78b9eb'>$dem</span></p></strong> 

                </div>
               

                      <form method='POST' action=''>
                       <input type='submit' name='profil' id='profil'  value='Voir le profil' class='boxdetail'/> 
                       </form>
                       <br>
                      <div class='row' >
                      <div class='col-xs-6'>
                      <span> <A href='accepter.php?idc=$idcolis&idt=$get' style='color:#27c995;font-weight:bold'>accepter</A></span>
                      </div>
                      <div class='col-xs-6'>
                      <A href='refuserinv.php?idc=$idcolis&idt=$get' style='color:red;font-weight:bold'>refuser</A>
                      </div>
                      </div>

              </div>


        </div>  

         








                ");
}
if(isset($_GET['sup'])){

  echo '<script type="text/javascript">' . 'alert("Invitation refuser  ");' . '</script>'; 
 header("Location: colis.php?id=$get");

     }  
if(isset($_GET['acc'])){

  echo '<script type="text/javascript">' . 'alert("Invitation accepter  ");' . '</script>'; 
 header("Location: colis.php?id=$get");

     }             








?>


        </div>

        
          </section>
     
    </section>
   
  </section>
 
</script>
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
<script>
function myFunction() {
  var element = document.getElementById("accept");
  element.classList.toggle("cbn");
}
</script>
</body>

</html>



   