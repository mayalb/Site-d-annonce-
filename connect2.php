<?php
session_start();
if (isset($_SESSION['us']))
{
	$num=$_SESSION['us'];
	$res=mysqli_query($conn,"SELECT * from compte where matricule='".trim($num)."' ");
$res=mysqli_fetch_assoc($res);

if($res['nature']==0)
{
	if($posi==0)	
	header('Location: util');
	if($posi==1)
		header('Location: ../util');
}
else
{
	if($posi==0)	
	header('Location: trans');

if($posi==1)	
	header('Location: ../trans');
}


}

  ?>