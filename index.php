<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>RingRingRun</title>
  </head>
  <body>

  <?php
if(isset($_SESSION['membre'])) {
 ?>   
    <a href="?action=deconnexion">Déconnexion</a>
    <br>
    <a href="home.php"></a>

<?php
 }   else {
?>
    <div class="index-link" >
        <a class="main-btn" href="inscription.php">Inscription</a>
        <a class="main-btn" href="connexion.php">Connexion</a>
    </div>
<?php
         }
?>


  </body>
</html>