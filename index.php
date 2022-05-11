<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>RingRingRun</title>
    <style>
      body {
        margin: 0;
        overflow: hidden;
        background-color: aqua;
      }
    </style>
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


    <script src="https://kaboomjs.com/lib/0.5.0/kaboom.js"></script>
    <script src="game.js"></script>
  </body>
</html>