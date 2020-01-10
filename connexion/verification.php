
<?php

if(isset($_POST['user']) && isset($_POST['pass']))
{
    // connexion à la base de données
 
   include("../database.php");
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['user'])); 
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['pass']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM compte where 
              email = '".$username."' and motdepasse = '".$password."' ";

        $requete1= "SELECT * FROM compte where 
              email = '".$username."' and motdepasse = '".$password."' ";     

        $exec_requete = mysqli_query($conn,$requete);
        $reponse1=mysqli_query($conn,$requete1);

        $reponse1 = mysqli_fetch_assoc($reponse1);
        $reponse      = mysqli_fetch_array($exec_requete);
        
        $num = $reponse1['matricule'];
        $type=$reponse1['nature'];
        
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            session_start();
           $_SESSION['us'] = $num;
           if ($type==0)
           header("Location: ../util");
            else
            header("Location: ../trans ");  

        }
        else
        {
           header('Location: ?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: Connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}

?>