<?php

// On appelle le fichier qui contient la configuration de la base de données
require_once './PDO/config.php';
//On appelle le fichier qui contient les requêtes PHP PDO
require_once './PDO/fonctions.php';
require 'back/language.php';
$language='fr';
loadLanguage ($language);

// crée une variable qui va contenir le résultat des fonctions qu'on va appeler
$result = '';
if (isset($_GET['requete'])) {
    $requete = $_GET['requete'];
    switch ($requete) {
		// Si c'est la fonction 1 qui est appelée
        case 'requete1':
            $result = requete1($conn);
            break;
	// Si c'est la fonction 2 qui est appelée
  case 'requete2':
    $result = requete2($conn);
    break;
		// Si la requête n'existe pas
        default:
            $result = 'Requête inconnue';
            break;
    }
}
?>


<html>
  <head>
    <meta charset="utf-8" >
     <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Vente de articles</title>
   <link rel="stylesheet"  href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <style>
    
  
  
    h1 {
      font-style: italic;
      background: lightslategray;
     text-align: center;
      margin-top:-24%;
     
    } 

     p{
    margin:7px;
    
  }

    .transporteur{     
       height:30%;
       width: 20%;
       border-radius: 50px;
      margin-top:5%;
      margin-left:850px;
    }

    .block{     
       height:30%;
       width: 20%;
       border-radius: 50px;
      margin-top:-17%;
      margin-left:175px;
    }

 nav li {
    float:left;
      width:150px;
      border: 1px solid blue;
      margin-top:1px;
        margin-left:160px;
    
    }
    
      form {
       text-align:center; 
      font-size:25px;
      margin-left:20px;
      margin-top:200px;
        
 }
 
   html {
     background:lightgrey;
   }

  footer{
    margin-left:1100px;
    
  }

  #connexion {

      background: green;

      color: white;

    }

/* indique le style de l'élément au passage de la souris */
  
     #connexion:hover {

    background: red;

    color: white;
}

      .shopping {

        width: auto;
        
        align-items: center;

        justify-content: center;

        text-align: left;

        margin-right: -10px;

      }

      .shop {

        width: auto;

        text-align: left;

        font-size: 30px;

        margin-left: 10px;

        padding-top: 10px;
         

      }


      #shop {

        display: none;

      }


      #shop:hover {

        cursor: pointer;

      }

#add {

        background: green;

      }


      #delete {

        background: red;

      }
  
  
 
</style>
  
   <body>
   <?php renderMenu(); ?>

<div class="container">
    <h1 class="mt-5">Bienvenue sur mon site</h1>
   

   
<button id="requete1" class="btn btn-primary">Voir les données de la table 1</button>
<button id="requete2" class="btn btn-primary">Voir les données de la table 2</button>

    <?php if ($result): ?>
        <h2 class="mt-5">Résultats de la requête</h2>
        <?php echo $result; ?>
    <?php endif; ?>
</div>

<!--  inclure tous les scripts  utiliser,  JQuery, Bootstrap etc -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
document.getElementById('requete1').addEventListener('click', function() {
  window.location.href = '?requete=requete';
});

document.getElementById('requete2').addEventListener('click', function() {
			window.location.href = '?requete=requete2';
});
</script>



    
    <div id="transporteur">
     <img class="Transporteur"
       src="https://png.pngtree.com/png-vector/20200113/ourlarge/pngtree-flat-transport-van-vector-free-png-icon-download-png-image_2128590.jpg" alt="Van De Transporte Plana Vector Png Grátis Baixar ícone PNG , Clipart De  Carro De Brinquedo, Van De Transporte Plana Vector Png Grátis Baixar ícone  PNG , Carro Imagem PNG e Vetor">

       <div id="block">
     <img class="block"
       src="https://png.pngtree.com/png-vector/20200113/ourlarge/pngtree-flat-transport-van-vector-free-png-icon-download-png-image_2128590.jpg" alt="Van De Transporte Plana Vector Png Grátis Baixar ícone PNG , Clipart De  Carro De Brinquedo, Van De Transporte Plana Vector Png Grátis Baixar ícone  PNG , Carro Imagem PNG e Vetor">

          <form method='GET' action='valide.html'>
      login:<input type='text'name='login' 
      value='name'>
        <br>
        email:<input tupe='text' name='email'>
        <br>
 <button id="connexion" 
          type="button">Connexion</button>
      <nav>
          
         </nav>
      </form>
      <?php 
    $HeaderTitle = 'Petit Prix';
   
  ?>
 <h1>Petit Prix</h1>
      <nav role="navigation">

   <a href="./front/panier.php" class="nav-items">Panier</a>
   
 </nav>
          
<script src="1script.js"></script>
    
   <footer>Droits D'auteur</footer>
</body>


</html>