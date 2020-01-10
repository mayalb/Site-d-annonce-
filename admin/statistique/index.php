<?php 

include("../../database.php");

$query ="SELECT COUNT(bloque)  FROM `compte` WHERE bloque=1";
$resultat1=mysqli_query($conn,$query);
$res1=mysqli_fetch_assoc($resultat1);
$nbr1=$res1["COUNT(bloque)"];


$query ="SELECT COUNT(bloque)  FROM `compte` WHERE bloque=0";
$resultat2=mysqli_query($conn,$query);
$res2=mysqli_fetch_assoc($resultat2);
$nbr2=$res2["COUNT(bloque)"];


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-01-01'<= dateenvoie AND dateenvoie<='2019-01-31'";
$resultat01=mysqli_query($conn,$query);
$res01=mysqli_fetch_assoc($resultat01);
$nbr01=$res01["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-02-01'<= dateenvoie AND dateenvoie<='2019-02-31'";
$resultat02=mysqli_query($conn,$query);
$res02=mysqli_fetch_assoc($resultat02);
$nbr02=$res02["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-03-01'<= dateenvoie AND dateenvoie<='2019-03-31'";
$resultat03=mysqli_query($conn,$query);
$res03=mysqli_fetch_assoc($resultat03);
$nbr03=$res03["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-04-01'<= dateenvoie AND dateenvoie<='2019-04-31'";
$resultat04=mysqli_query($conn,$query);
$res04=mysqli_fetch_assoc($resultat04);
$nbr04=$res04["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-05-01'<= dateenvoie AND dateenvoie<='2019-05-31'";
$resultat05=mysqli_query($conn,$query);
$res05=mysqli_fetch_assoc($resultat05);
$nbr05=$res05["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-06-01'<= dateenvoie AND dateenvoie<='2019-06-31'";
$resultat06=mysqli_query($conn,$query);
$res06=mysqli_fetch_assoc($resultat06);
$nbr06=$res06["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-07-01'<= dateenvoie AND dateenvoie<='2019-07-31'";
$resultat07=mysqli_query($conn,$query);
$res07=mysqli_fetch_assoc($resultat07);
$nbr07=$res07["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-08-01'<= dateenvoie AND dateenvoie<='2019-08-31'";
$resultat08=mysqli_query($conn,$query);
$res08=mysqli_fetch_assoc($resultat08);
$nbr08=$res08["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-09-01'<= dateenvoie AND dateenvoie<='2019-09-31'";
$resultat09=mysqli_query($conn,$query);
$res09=mysqli_fetch_assoc($resultat09);
$nbr09=$res09["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-10-01'<= dateenvoie AND dateenvoie<='2019-10-31'";
$resultat10=mysqli_query($conn,$query);
$res10=mysqli_fetch_assoc($resultat10);
$nbr10=$res10["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-11-01'<= dateenvoie AND dateenvoie<='2019-11-31'";
$resultat11=mysqli_query($conn,$query);
$res11=mysqli_fetch_assoc($resultat11);
$nbr11=$res11["COUNT(dateenvoie)"];

$query ="SELECT COUNT(dateenvoie) FROM `annoncecolis` WHERE '2019-12-01'<= dateenvoie AND dateenvoie<='2019-12-31'";
$resultat12=mysqli_query($conn,$query);
$res12=mysqli_fetch_assoc($resultat12);
$nbr12=$res12["COUNT(dateenvoie)"];


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-01-01'<= datedepart AND datedepart<='2019-01-31'";
$resultat001=mysqli_query($conn,$query);
$res001=mysqli_fetch_assoc($resultat001);
$nbr001=$res001["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-02-01'<= datedepart AND datedepart<='2019-02-31'";
$resultat002=mysqli_query($conn,$query);
$res002=mysqli_fetch_assoc($resultat002);
$nbr002=$res002["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-03-01'<= datedepart AND datedepart<='2019-03-31'";
$resultat003=mysqli_query($conn,$query);
$res003=mysqli_fetch_assoc($resultat003);
$nbr003=$res003["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-04-01'<= datedepart AND datedepart<='2019-04-31'";
$resultat004=mysqli_query($conn,$query);
$res004=mysqli_fetch_assoc($resultat004);
$nbr004=$res004["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-05-01'<= datedepart AND datedepart<='2019-05-31'";
$resultat005=mysqli_query($conn,$query);
$res005=mysqli_fetch_assoc($resultat005);
$nbr005=$res005["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-06-01'<= datedepart AND datedepart<='2019-06-31'";
$resultat006=mysqli_query($conn,$query);
$res006=mysqli_fetch_assoc($resultat006);
$nbr006=$res006["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-07-01'<= datedepart AND datedepart<='2019-07-31'";
$resultat007=mysqli_query($conn,$query);
$res007=mysqli_fetch_assoc($resultat007);
$nbr007=$res007["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-08-01'<= datedepart AND datedepart<='2019-08-31'";
$resultat008=mysqli_query($conn,$query);
$res008=mysqli_fetch_assoc($resultat008);
$nbr008=$res008["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-09-01'<= datedepart AND datedepart<='2019-09-31'";
$resultat009=mysqli_query($conn,$query);
$res009=mysqli_fetch_assoc($resultat009);
$nbr009=$res009["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-10-01'<= datedepart AND datedepart<='2019-10-31'";
$resultat010=mysqli_query($conn,$query);
$res010=mysqli_fetch_assoc($resultat010);
$nbr010=$res010["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-11-01'<= datedepart AND datedepart<='2019-11-31'";
$resultat011=mysqli_query($conn,$query);
$res011=mysqli_fetch_assoc($resultat011);
$nbr011=$res011["COUNT(datedepart)"];

$query ="SELECT COUNT(datedepart) FROM `annoncetrajet` WHERE '2019-12-01'<= datedepart AND datedepart<='2019-12-31'";
$resultat012=mysqli_query($conn,$query);
$res012=mysqli_fetch_assoc($resultat012);
$nbr012=$res012["COUNT(datedepart)"];

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-01-01'<= dateouver AND dateouver<='2019-01-31' ";
$resultat00001=mysqli_query($conn,$query);
$res00001=mysqli_fetch_assoc($resultat00001);
$nb0001=$res00001["COUNT(premium)"];


$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-02-01'<= dateouver AND dateouver<='2019-02-31'";
$resultat00002=mysqli_query($conn,$query);
$res00002=mysqli_fetch_assoc($resultat00002);
$nb0002=$res00002["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-03-01'<= dateouver AND dateouver<='2019-03-31'";
$resultat00003=mysqli_query($conn,$query);
$res00003=mysqli_fetch_assoc($resultat00003);
$nb0003=$res00003["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-04-01'<= dateouver AND dateouver<='2019-04-31'";
$resultat00004=mysqli_query($conn,$query);
$res00004=mysqli_fetch_assoc($resultat00004);
$nb0004=$res00004["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-05-01'<= dateouver AND dateouver<='2019-05-31'";
$resultat00005=mysqli_query($conn,$query);
$res00005=mysqli_fetch_assoc($resultat00005);
$nb0005=$res00005["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-06-01'<= dateouver AND dateouver<='2019-06-31'";
$resultat00006=mysqli_query($conn,$query);
$res00006=mysqli_fetch_assoc($resultat00006);
$nb0006=$res00006["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-07-01'<= dateouver AND dateouver<='2019-07-31'";
$resultat00007=mysqli_query($conn,$query);
$res00007=mysqli_fetch_assoc($resultat00007);
$nb0007=$res00007["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-08-01'<= dateouver AND dateouver<='2019-08-31'";
$resultat00008=mysqli_query($conn,$query);
$res00008=mysqli_fetch_assoc($resultat00008);
$nb0008=$res00008["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-09-01'<= dateouver AND dateouver<='2019-09-31'";
$resultat00009=mysqli_query($conn,$query);
$res00009=mysqli_fetch_assoc($resultat00009);
$nb0009=$res00009["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-10-01'<= dateouver AND dateouver<='2019-10-31'";
$resultat00010=mysqli_query($conn,$query);
$res00010=mysqli_fetch_assoc($resultat00010);
$nb0010=$res00010["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-11-01'<= dateouver AND dateouver<='2019-11-31'";
$resultat00011=mysqli_query($conn,$query);
$res00011=mysqli_fetch_assoc($resultat00011);
$nb0011=$res00011["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0 AND '2019-12-01'<= dateouver AND dateouver<='2019-12-31'";
$resultat00012=mysqli_query($conn,$query);
$res00012=mysqli_fetch_assoc($resultat00012);
$nb0012=$res00012["COUNT(premium)"];

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-01-01'<= dateouver AND dateouver<='2019-01-31' ";
$resultat0001=mysqli_query($conn,$query);
$res0001=mysqli_fetch_assoc($resultat0001);
$nbr0001=$res0001["COUNT(premium)"];


$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-02-01'<= dateouver AND dateouver<='2019-02-31'";
$resultat0002=mysqli_query($conn,$query);
$res0002=mysqli_fetch_assoc($resultat0002);
$nbr0002=$res0002["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-03-01'<= dateouver AND dateouver<='2019-03-31'";
$resultat0003=mysqli_query($conn,$query);
$res0003=mysqli_fetch_assoc($resultat0003);
$nbr0003=$res0003["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-04-01'<= dateouver AND dateouver<='2019-04-31'";
$resultat0004=mysqli_query($conn,$query);
$res0004=mysqli_fetch_assoc($resultat0004);
$nbr0004=$res0004["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-05-01'<= dateouver AND dateouver<='2019-05-31'";
$resultat0005=mysqli_query($conn,$query);
$res0005=mysqli_fetch_assoc($resultat0005);
$nbr0005=$res0005["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-06-01'<= dateouver AND dateouver<='2019-06-31'";
$resultat0006=mysqli_query($conn,$query);
$res0006=mysqli_fetch_assoc($resultat0006);
$nbr0006=$res0006["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-07-01'<= dateouver AND dateouver<='2019-07-31'";
$resultat0007=mysqli_query($conn,$query);
$res0007=mysqli_fetch_assoc($resultat0007);
$nbr0007=$res0007["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-08-01'<= dateouver AND dateouver<='2019-08-31'";
$resultat0008=mysqli_query($conn,$query);
$res0008=mysqli_fetch_assoc($resultat0008);
$nbr0008=$res0008["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-09-01'<= dateouver AND dateouver<='2019-09-31'";
$resultat0009=mysqli_query($conn,$query);
$res0009=mysqli_fetch_assoc($resultat0009);
$nbr0009=$res0009["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-10-01'<= dateouver AND dateouver<='2019-10-31'";
$resultat00010=mysqli_query($conn,$query);
$res00010=mysqli_fetch_assoc($resultat00010);
$nbr0010=$res00010["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-11-01'<= dateouver AND dateouver<='2019-11-31'";
$resultat0011=mysqli_query($conn,$query);
$res0011=mysqli_fetch_assoc($resultat0011);
$nbr0011=$res0011["COUNT(premium)"];

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1 AND '2019-12-01'<= dateouver AND dateouver<='2019-12-31'";
$resultat0012=mysqli_query($conn,$query);
$res0012=mysqli_fetch_assoc($resultat0012);
$nbr0012=$res0012["COUNT(premium)"];


?>
<!DOCTYPE html>
<html>
<head>
   
   
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src ="js/jquery.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/app.js"></script>
	<title></title>
</head>
<body>
    <br><br><br><br><br><br>
   <div class="container" style=" border-color: rgb(226, 225, 225); border-width:2px;
 border-style:outset;">
    <div  style="background-color: rgb(226, 225, 225)"><h1 style="position: relative;text-align: center ">Distributions des colis et trajets</h1></div>
   
<canvas id="myChart" width="400" height="100"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext("2d");

var data = {
    labels: ["janvier", "fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre" ],
    datasets: [
        {
            label: "nombre de colis",
            backgroundColor:  'rgba(75, 192, 192, 0.2)',
             borderColor: 'rgba(255, 99, 132, 1)', 
               borderWidth: 2 , 
                fill:false ,
            data: [<?php echo $nbr01  ?>,<?php echo $nbr02  ?>,<?php echo $nbr03  ?>,<?php echo $nbr04  ?>,<?php echo $nbr05  ?>,<?php echo $nbr06  ?>,<?php echo $nbr07  ?>,<?php echo $nbr08  ?>,<?php echo $nbr09  ?>,<?php echo $nbr10  ?>,<?php echo $nbr11  ?>,<?php echo $nbr12  ?>]
        },
        {
            label:"nombre de trajet",
            backgroundColor: 
                'rgba(255, 99, 132, 0.2)',
               borderColor:'rgba(75, 192, 192, 1)',  
                 borderWidth: 2 ,
                 fill:false ,
                
            data: [<?php echo $nbr001  ?>,<?php echo $nbr002  ?>,<?php echo $nbr003  ?>,<?php echo $nbr004  ?>,<?php echo $nbr005  ?>,<?php echo $nbr006  ?>,<?php echo $nbr007  ?>,<?php echo $nbr008  ?>,<?php echo $nbr009  ?>,<?php echo $nbr010  ?>,<?php echo $nbr011  ?>,<?php echo $nbr012  ?>]
        },
       
    ]
};

var myBarChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
     
        scales: {
            yAxes: [{
                ticks: {
                     beginAtZero: true
                }
            }]
        }
    }
});

</script>

</div> 

<br><br>
<div>
 <div class="container2" style="width:700px;  border-color: rgb(226, 225, 225); border-width:2px;
 border-style:inset;position: absolute;left: 70px">
    <div style="background-color: rgb(226, 225, 225)"><h1 style=" position: relative;text-align: center "> Developpement d utilisateur par mois</h1></div>

<canvas id="myChart2" width="100" height="50"></canvas>
<script>
var ctx = document.getElementById("myChart2").getContext("2d");

var data = {
    labels: ["janvier", "fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre" ],
    datasets: [
        {
            label: "utilisateur normal",
            backgroundColor:  'rgba(75, 192, 192, 0.2)',
             borderColor: 'rgba(255, 99, 132, 1)', 
               borderWidth: 2, 
                 
            data: [<?php echo $nb0001  ?>,<?php echo $nb0002  ?>,<?php echo $nb0003  ?>,<?php echo $nb0004  ?>,<?php echo $nb0005  ?>,<?php echo $nb0006  ?>,<?php echo $nb0007  ?>,<?php echo $nb0008  ?>,<?php echo $nb0009  ?>,<?php echo $nb0010  ?>,<?php echo $nb0011  ?>,<?php echo $nb0012  ?>]
        },
        {
            label:"premium",
            backgroundColor: 
                'rgba(255, 99, 132, 0.2)',
               borderColor:'rgba(75, 192, 192, 1)',  
                 borderWidth: 2 ,
                
            data: [<?php echo $nbr0001  ?>,<?php echo $nbr0002  ?>,<?php echo $nbr0003  ?>,<?php echo $nbr0004  ?>,<?php echo $nbr0005  ?>,<?php echo $nbr0006  ?>,<?php echo $nbr0007  ?>,<?php echo $nbr0008  ?>,<?php echo $nbr0009  ?>,<?php echo $nbr0010  ?>,<?php echo $nbr0011  ?>,<?php echo $nbr0012  ?>]
        },
       
    ]
};

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
     
        scales: {
            yAxes: [{
                ticks: {
                     beginAtZero: true
                }
            }]
        }
    }
});

</script>

</div> 
<br><br>
<div class="container1" style="width: 500px; border-color: rgb(226, 225, 225); border-width:2px;
 border-style:outset;position: absolute;left: 800px;top: 530px">
    <div style="background-color: rgb(226, 225, 225);"><h1  style="position: relative;text-align: center; ">Distribution des utilisateurs</h1></div>
    
<canvas id="myChart1" width="400" height="240"></canvas>
  <script>
var ctx = document.getElementById("myChart1").getContext("2d");

data = {
    datasets: [{
         backgroundColor: [ 'rgba(75, 192, 192, 0.2)',
                          'rgba(255, 99, 132, 1)', ],
               borderColor: ['rgba(255, 99, 132, 1)',
                            'rgba(75, 192, 192, 0.2)' ],
               borderWidth: 2 ,
        data: [<?php echo $nbr1 ?> ,<?php  echo $nbr2 ?> ]

    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Utilisateur bloqué',
        
        'Utilisateur actif' ,
    ]

};

var myBarChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
  
});

</script> 

</div>
</div>
</body>
</html>