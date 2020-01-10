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
    $resultat=mysqli_query($conn,"SELECT * from annoncecolis where numeroparticulier='$num' ORDER BY dateenvoie DESC");

     $p=0;
    while($row=mysqli_fetch_assoc($resultat))
    {
     $p++;
        $photo="Ajout_colis/".$row['photocolis'];
        $desciption=$row['description'];
        $ladressedepart=$row['adressedepart'];
        $demande=0;
        $adressearrive =$row['adressearrive'];
        $dateenvoie=$row['dateenvoie'];
        $datedepot=$row['datedepot'] ;
        $i=$row['idcolis']; 
        $id=$row['idcolis'];
       $actdet='details-colis.php?id='.$id;
        $taille=$row['taille'];
        $poids=$row['poids'];
        $demandespecial=$row['demandespecial'];
         $res1=mysqli_query($conn,"SELECT * from trajet_colis where id_colis=$id");                 
               while($row1=mysqli_fetch_assoc($res1))
                 {
                      $idtrajet= $row1['id_trajet'] ;
                      $accepter= $row1['accepter'];
                      $demande= $row1['demande'];
                      $refuser= $row1['refuser'];
                     
                 }
                 if($demande==1)
                 {
                
                     if( $accepter==1){
                         $valeur='Invitation Acceptée' ;
                         $action='colisaccepte.php?id='.$idtrajet;

                     }
                     else{
                       if($refuser==1){
                          $valeur='Trajets disponibles' ;
                          $action='selectionnerTrajet.php?id='.$id;

                       }
                       else{
                        $valeur='Invitation Envoyée' ;
                      $action='trajetSelectionne.php?id='.$idtrajet.'&colis='.$id;
                       }
                       
                     }
                 }
                 else{
                   $valeur='Trajets disponibles' ;
                   $action='selectionnerTrajet.php?id='.$id;
                 
                 }
                  $res0=mysqli_query($conn,"SELECT * from trajet_colis where id_colis=$id");
                 $notif=0;
                while ($row0=mysqli_fetch_assoc($res0)) {
                  $demande=$row0['demande_colis'] ;
                  if($demande=='1')
                  {
                   
                    $notif++;
                   
                  
                  }
                  
                }

        

        echo "
 <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>

            <div class='info-box white-bg'>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                  </button>
                <div class='profile-userpic'>
                    <form method='POST' action='trajetinviter.php?id=$id'>
                              <button class='btn btn-default btn-lg btn-link' style='font-size:36px;'>
                               <span class='glyphicon glyphicon-bell' style=''></span>
                              </button>

                              <span class='badge badge-danger' >$notif</span>
                        </form>

                </div>

                <div>
                    <h3>Colis $p</h3> 
                </div>
                <div>
                  <h5>Description :</h5>
                  <p>$desciption </p>
                  <p></p>
                </div>    
                



                <div class='row'>

                     <div class='col-md-6 col-xs-6'>
                        <form action='$actdet' method='post'>
                          <input type='submit' name='details' value='detail du colis' class='boxdetail'>
                         </form>
                      </div>
                 <div onclick='aller()' lass='boxdetail'>
                        <form action='$action' method='post'>
                          <input type='submit' name='aller' value='$valeur' class='boxdetail'>
                         </form>
                          

                  </div>
               </div>
          </div>

</div>








         ";
                
    }
if(isset($_POST['aller'])){
            if($demande==1)
                 { 
                     if( $accepter==1){
                         $valeur='Invitation Acceptée' ;
                         header("Location:colisaccepte.phpid=".$idtrajet);
                     }
                     else{
                       if($refuser==1){
                       header("Location: selectionnerTrajet.php?id=".$id);
                       }
                       else{
                      header("Location: trajetSelectionne.php?id=".$idtrajet."&colis=".$id);
                       }                      
                     }
                 }
                 else{
                  header("Location: selectionnerTrajet.php?id=".$id);   
                 }
            }              


  ?>
   <?php
      //-------------------------note de fiabilité-----------------------------//    
        $resul=mysqli_query($conn,"SELECT * from annoncecolis where numeroparticulier='$num' ORDER BY dateenvoie DESC");    
        while($ro=mysqli_fetch_assoc($resul)){
          $idcolis=$ro['idcolis'];
           $res=mysqli_query($conn,"SELECT * from trajet_colis where id_colis='$idcolis'");
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
                        <form method='post' action='mescolis.php' enctype='multipart/form-data'>
                          <!-- Modal -->                         
                            <div class='modal-dialog'>                          
                           <!-- Modal content-->
                              <div class='modal-content'>
                                <div class='modal-header'>                               
                                 <h4 class='modal-title'>Veuillez évaluer le tranporteur pour ce service </h4>
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
                                 <input type='submit' class='btn btn-default' data-dismiss='modal' value='OK' name='OK' id='OK'/>     
                            </div>
                          </div>   
                        </div>
                      </form>
                    </div>
                    ");
                  if(isset($_POST['OK']))
                   {     
                
                     $res1=mysqli_query($conn,"SELECT * from annoncetrajet where matriculetrajet=$id_trajet"); 
                         while($row1=mysqli_fetch_assoc($res1))
                         {
                               $notefiabilite=$row1['note'] ;
                              $nbcolisAvis=$row1['nbcolisAvis'] ;
                         }
                      $note='0';
                        $nbcolisAvis++;
                      if(isset($_POST["star1"])){$note='1';}
                      if(isset($_POST["star2"])){$note='2';}
                      if(isset($_POST["star3"])){$note='3';}
                      if(isset($_POST["star4"])){$note='4';}
                      if(isset($_POST["star5"])){$note='5';}
                      $note=$notefiabilite+$note;
                      if($nbcolisAvis=='0')
                      {
                        $notefinale=$note;
                      }else{$notefinale=$note/ $nbcolisAvis ;}                   
                       $sql="UPDATE annoncetrajet  SET note='$note' where matriculetrajet=$id_trajet";
                      mysqli_query($conn,$sql);
                        $sqlss="UPDATE annoncetrajet  SET notefinale='$notefinale' where matriculetrajet=$id_trajet";
                      mysqli_query($conn,$sqlss);
                        $sqlsss="UPDATE annoncetrajet  SET nbcolisAvis='$nbcolisAvis' where matriculetrajet=$id_trajet";
                      mysqli_query($conn,$sqlsss);
                        $sqls="UPDATE trajet_colis  SET donneravis='1' where id_trajet=$id_trajet AND id_colis=$id_colis";
                      mysqli_query($conn,$sqls);
                 //  header('Location:afficher.php');
                   }
              }      
            }
      
        }
    
              ?>
          

         
     <!----   fin eco colis  ---->    
          
        
<!----- fin eco------>
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
