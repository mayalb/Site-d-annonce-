<?php 
unset ($_SESSION["us"]);

     header("Location: ../ ");
 session_destroy();
 echo"<script> location.href='../connexion.php';</script>" ;


 ?>