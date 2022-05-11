<?php include('init.php');?>

<?php 
if(isset($_SESSION['membre'])) {
    header('location:home.php');
}


if($_POST) {
        
    $r = $pdo->query("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]'");
    
    if($r->rowCount() >=1) {
            $membre = $r->fetch(PDO::FETCH_ASSOC);
                
                if(password_verify($_POST['mdp'], $membre['mdp'])){

                    $content .='<p> MDP : OK</p>';
                    
                    $_SESSION['membre']['pseudo']= $membre['pseudo'];
                    $_SESSION['membre']['id_membre']= $membre['id_membre'];
                    
                    header('location:home.php');
                    
                }else {
                    $content .= '<p>Mot de passe incorrect.</p>';
                }

            } else {
                $content.='<p>Compte inexistant</p>';
        }
        
}
 
?>

<?php include('headers.php');?>

    <main>

        <?php 
            echo $content;
        ?>

<form class="main-form" method="post">
    <input class="main-input" type="pseudo"name="pseudo" id="pseudo" placeholder="pseudo" required>
    <input class="main-input" type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
    <input class="main-btn" type="submit" value="Se connecter">
    
    <a href="inscription.php">créer un compte</a>
</form>

</main>
</html>
