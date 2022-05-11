<?php 
include('init.php');

if(isset($_SESSION['membre'])) {
    header('location:home.php');
}

if($_POST){

        $erreur = '';

        if(strlen($_POST['pseudo']) < 2  || strlen($_POST['pseudo']) > 21) {
            $erreur .= '<p>Taille de pseudo invalide.</p>';
        }
        
        if(!preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo'])) {
            $erreur .= '<p>Format de pseudo invalide.</p>';
        }
        
        foreach($_POST as $indice => $valeur) {
            $_POST[$indice] = addslashes($valeur);
        }
        
        $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        if(empty($erreur)) {
            $pdo->exec("INSERT INTO membre (pseudo, mdp) VALUES ('$_POST[pseudo]','$_POST[mdp]') ");
            $content .= '<p> Inscription validée !</p>';
        }
        
        $content .=$erreur;

}

if($content == '<p> Inscription validée !</p>') {
    header('location:connexion.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<body>
    
<main>

    <?php echo $content;?>
    
    <form class="main-form" method="post">
            <input class="main-input" type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required>
            <input class="main-input" type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
            <input class="main-btn" type="submit" value="S'inscrire">

            <a class="connexion-link" href="connexion.php">J'ai déjà un compte</a>
    </form>

</main>

</body>
</html>

