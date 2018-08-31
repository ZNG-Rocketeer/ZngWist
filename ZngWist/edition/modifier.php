<?php 
session_start();
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
    
    <?php include $_SERVER['DOCUMENT_ROOT'].'/ZngWist/assets/php/gen_nav.php';
    
    if (isset($_GET[gametag])) {
        $gametag = $_GET[gametag];
    }
    else{
        echo "<script>document.location.href='../liste/non_term.php'</script>";
    }
    ?>
    
</body>
</html>
