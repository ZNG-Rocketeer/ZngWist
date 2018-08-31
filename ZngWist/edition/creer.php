<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Creation partie</title>
  <link rel="stylesheet" href="/assets/css/master.css">
  <link rel="stylesheet" href="/ZngWist/assets/css/master.css">
  <script src="/ZngWist/assets/js/master.js"></script>
</head>
<body>
    
<?php include $_SERVER['DOCUMENT_ROOT'].'/ZngWist/assets/php/gen_nav.php';

?>
<div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
        <h2>Bienvenue</h2>
    <!-- php if get recap + bouton entrer dans la partie else form noms joueurs -->
    <form action=""></form>
    Nombre de joueurs <input type="number" name="nbj" value="3">
    <table>
        <tr><th>Num</th><td><label>Nom</label></td><td>Pseudo</td></tr>
        <tr id="j1"><td>1</td><td><input type="text" name="nom1"></td><td><input type="text" name="p1"></td></tr>
        <tr id="j2"><td>2</td><td><input type="text" name="nom2"></td><td><input type="text" name="p2"></td></tr>
        <tr id="j3"><td>3</td><td><input type="text" name="nom3"></td><td><input type="text" name="p3"></td></tr>
        <tr id="j4"><td>3</td><td><input type="text" name="nom4"></td><td><input type="text" name="p4"></td></tr>
    </table>
</form>
</div>
    </div>
  </div>
</body>
</html>