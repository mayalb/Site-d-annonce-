<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    
  
/*Fade Hover Effect*/
     
      
    .hover-fade a {
      width: 70%;
      display: block;
      position: relative;
      overflow: hidden;
      background-color: #ccc;

    }
    .hover-fade img {
      padding: 10px;
      width: 100%;
      height: auto;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .hover-fade:hover img {
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -o-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0.5)";
      filter: alpha(opacity=0.5);
      opacity: 0.5;
    }
section{
  width: 100%;
height: 650px;

  /* #273c75 20%, #009999 100%,*/
}
.wave{
  position: relative;
  background: linear-gradient(#273c75 15% , rgba(231,76,60,0.2)), url("r.jpg"); 
  background-size: cover;
  background-repeat: no-repeat;
  padding: 0;
  margin: 0;


}
.wave:before {
    content: '';
    bottom: 0;
    left: 0;
    width: 100%;
    height: 220px;
    background: url("wave.png");
    background-size: cover;
     position: absolute;

 } 
 .nav1
{

  background-color: #273c75;
  width: 100%;
  border:#273c75; 
}



h1{
  color: #ccc;
  padding-top: 0px;
}
.blurred-bg-container .content {
  background:inherrit;
  width: 100%;
  height: 15%;
  border-radius: 8px;
  box-shadow: 0 0 32px rgba(0,0,0,0.5);
  position: absolute;
  top: 20%;
 }

.div-decorator {
  
  margin-top: 16%;
  text-align: center;

}

.btn {
  width: 130px;
  height: 130px;
  border-radius: 50%;
  box-shadow: 0 0 32px rgba(0,0,0,0.5);
  background-color: rgba(100,120,100,0.7);
  border: none;

}

@media only screen and (max-width: 600px) 
{
 
 .btn{
  width: 110px;
  height: 110px;
  margin-top: 10%;
 }

 .blurred-bg-container .content{height: 27%}
              } 
 </style>




</head>

<body>
<section class="container-fluid wave col-xs-12">
 <nav class="navbar navbar-inverse nav1" > 

  <div class="container-fluid ">
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">QuickColis</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="inscription/"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
        <li><a href="connexion/"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="blurred-bg-container">
  <div class="content text-center ">
    
      <h1 class="text-center" >Rentabilisez vos trajets en rendant service</h1><br><br>
      <div style="margin-top: 4%;">
     <a href="#"><button type="button" class="btn  btn-circle btn-xl"><i class="fa fa-gear fa-spin" style="font-size:50px"></i></i></button></a>
     <a href="statistique"><button type="button" class="btn  btn-circle btn-xl"><i class="fa fa-circle-o-notch fa-spin" style="font-size:50px"></i></button></a>
     <a href="liste"><button type="button" class="btn btn-circle btn-xl"><i class="fa fa-refresh fa-spin" style="font-size:50px"></i></button></a>
    </div>
</div>
</div>

</section>


</body>
</html>