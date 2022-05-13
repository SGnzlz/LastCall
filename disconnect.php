<?php
if(isset($_SESSION['membre'])) {
 ?>   
    <a href="?action=deconnexion">Déconnexion</a>
    <br>

    <h1>Bonjour <?php echo $_SESSION ['membre']['pseudo']?> !</h1>

<?php
 }   
?>
