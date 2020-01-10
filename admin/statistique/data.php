<?php
include("../../database.php");

$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=1";
$resultat1=mysqli_query($conn,$query);
$res1=mysqli_fetch_assoc($resultat1);
$nbr1=$res1["COUNT(premium)"];
echo $nbr1;
$data1=array();
$data1[0]=$nbr1;
$query ="SELECT COUNT(premium)  FROM `compte` WHERE premium=0";
$resultat2=mysqli_query($conn,$query);
$res2=mysqli_fetch_assoc($resultat2);
$nbr2=$res2["COUNT(premium)"];
echo $nbr2;
$data1[1]=$nbr2;










?>