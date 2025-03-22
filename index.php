<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIXO ZERO</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <style>
       .batatinha{
          background-color:#000080!important;
       }
       .mudaletra{
          font-size: 18px;
          font-family:"Verdana";
          color:white !important;
          font-weight: bold;
       }.sobrenos{
          font-size: 18px;
          font-family:"Verdana";
          color:#ADD8E6 !important;
          font-weight: bold;
       }.intro{
          font-size: 18px;
          font-family:"Verdana";
          color:#ADD8E6 !important;
          font-weight: bold;
       }

    </style>
    
</head>
<body>
   
   <nav class="navbar navbar-expand-lg navbar-dark batatinha fixed-top">
    <a class="navbar-brand" href="#"><img src="img/simbolo_ONU.PNG" alt="" class="d-block w-80 mx-auto img-fluid"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ConteudoMenu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="ConteudoMenu">
     <ul class="navbar-nav">
        <li class="nav-item mr-4 ml-3">
            <a class="nav-link mudaletra" href="home">INÍCIO</a>
        </li>
        <li class="nav-item mr-4">
            <a class="nav-link mudaletra" href="trabalho">OBJETIVO DO TRABALHO</a>
        </li>
      
        <li class="nav-item dropdown mr-5 &nbsp">
        <a class= "nav-link dropdown-toggle intro" href="#" id = "NavBarDrop" role="button" data-toggle="dropdown" aria- 
          haspopup="true"  aria-expanded ="false">ODS 17</a>
      <div class= "dropdown-menu navbar-ligth batatinha"   aria-labelledby="NavBarDrop">
        <a class= "dropdown-item intro " href="ods17">Introdução</A>
	    <a class= "dropdown-item intro" href="objetivos">Metas e Sugestoes</A>
       <li class="nav-item mr-4">
            <a class="nav-link sobrenos" href="sobrenos">UM POUCO SOBRE NÓS</a>
        </li>
	   <div>
   </li>
    </ul>
    </div>
   </nav>
  <br><br><br><br>
  <?php
    if(isset($_GET['url'])){
    switch($_GET['url']){
      case"home":
         include_once('./pages/home.php');
         break;
         case "objetivos":
         include_once('./pages/objetivos.php');
         break;
         case "ods17":
         include_once('./pages/ods17.php');
         break;
         case "trabalho":
         include_once('./pages/trabalho.php');
         break;
         case "sobrenos":
            include_once('./pages/sobrenós.php');
            break;
         default:
         include_once('./pages/erro.php');
    }
      }else {
         include_once('./pages/home.php');
      }

  ?>
</body>
<script src="./bootstrap/js/jquery.js"></script>
<script src="./bootstrap/js/popper.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
</html>