<?php 
include('link-bdd.php');
include('headers.php');

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
            $pdo->exec("INSERT INTO membre (nom, prenom, pseudo, email, mdp) VALUES ('$_POST[pseudo]','$_POST[mdp]') ");
            $content .= '<p> Inscription validée !</p>';
        }
        
        $content .=$erreur;

}

if($content == '<p> Inscription validée !</p>') {
    header('location:connexion.php');
}

?>


<body>
    
<main>

    <?php echo $content;?>
    
    <form class="main-form" method="post">
        <div>
            <input class="main-input" type="text" name="nom" id="nom" placeholder="Nom" required>
            <input class="main-input" type="text" name="prenom" id="prenom" placeholder="Prénom" required>
        </div>
            <input class="main-input" type="email" name="email" id="email" placeholder="email" required>
            <input class="main-input" type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required>
            <input class="main-input" type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
        <div class="checkbox-container" >
            <input class="form-checkbox" type="checkbox" name="condition" id="condition" value="condition" required>
            <label for="condition">J'accepte les <a class="general-condition" href="#">conditions générales d'utilisation</a> </label>
        </div>
        <input class="main-btn" type="submit" value="S'inscrire">
        <a class="connexion-link" href="connexion.php">J'ai déjà un compte</a>
    </form>

</main>

</html>
