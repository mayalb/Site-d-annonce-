<?php 
session_start();
unset ($_SESSION["us"]);

 session_destroy();
 echo"<script> location.href='../connexion/index.php';</script>" ;



 ?>