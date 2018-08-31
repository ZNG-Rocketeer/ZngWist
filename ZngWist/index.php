<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Accueil Wist</title>
  <link rel="stylesheet" href="/assets/css/master.css">
  <link rel="stylesheet" href="/ZngWist/assets/css/master.css">
  <script src="/ZngWist/assets/js/master.js"></script>
</head>
<body>

  <header class="zng-container zng-theme zng-padding" id="header">
    <?php
    if(isset($_SESSION['znglogged'])){
    if ($_SESSION['znglogged']=="yes") {
      echo "
      <figure class=\"profil\" onclick=\"document.location.href = 'profile';\">
      <button type=\"button\" name=\"button\" class=\"profil\" ></button>
      <figcaption>"."".$_SESSION['zngpseudo']."</figcaption>
      </figure>
      ";
      echo "
      <figure style=\"visibility:hidden;float:left;\" class=\"profil\" onclick=\"document.location.href = 'profile';\">
      <button type=\"button\" name=\"button\" class=\"profil\" ></button>
      <figcaption>"."".$_SESSION['zngpseudo']."</figcaption>
      </figure>
      ";
    }
  }

    ?>
    <div class="zng-center">
      <h1 class="zng-title">ZnGwist</h1>
      <div class="zng-header">
        <button id="btn" class="zng-btn zng-xlarge zng-theme-dark zng-hover-teal" onclick="start()" style= "font-weight:900"><?php
           if(isset($_SESSION['znglogged'])){
        if ($_SESSION['znglogged']=="yes") {
          echo "Démarrer une partie";
        }
      }
      else{
          echo "Se connecter";
        }
        ?></button>
      </div>
    </div>
  </header>

  <noscript>
    <span class="important">Javascript est désactivé, vous avez besoin d\'activer javascript pour poursuivre sur notre site sans quoi votre expérience sera gachée</span>
  </noscript>
  <div class="zng-center zng-margin-top">
    <div class="zng-half">
      <div class="zng-card" >
        <h2>Editer une partie</h2>
        <p>
            <a href="edition/creer.php"><button class="zng-btn-form">Créer</button></a>
            <a href="edition/modifier.php"><button class="zng-btn-form">Continuer</button></a>
            <a href="admin/"><button class="zng-btn-form">Admin</button></a>
            <a href="liste/non_term.php"><button class="zng-btn-form">Liste des parties non terminées</button></a>
        </p>
      </div>
    </div>
    <div class="zng-half zng-sec-half">
      <div class="zng-card" >
        <h2>Voir les résultats</h2>
        <p>
        <a href="liste/term.php"><button class="zng-btn-form">Liste des parties terminées</button></a>
        <a href="classement/joueurs.php"><button class="zng-btn-form">Classement Joueurs</button></a>
        <a href="classement/plis.php"><button class="zng-btn-form">Classment Plis</button></a>
        <a href="classement/partie.php"><button class="zng-btn-form">Classment Partie</button></a>
        </p>
      </div>
    </div>
  </div>

</body>
</html>