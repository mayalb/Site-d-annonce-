<?php 
session_start();
if (isset($_SESSION['us']))
$num=$_SESSION['us'];
else
{
	if($posi==1)
header('Location: ../connexion');

	if($posi==2)
header('Location: ../../connexion');
}

$res=mysqli_query($conn,"SELECT * from compte where matricule='".trim($num)."' ");
$res=mysqli_fetch_assoc($res);

 ?>