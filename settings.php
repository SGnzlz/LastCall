<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style_test.css" rel="stylesheet">
        <title>options</title>
    </head>
<?php
    include "init.php";
// si la session membre existe, alors je redirige vers l'accueil 
    // if(isset($_SESSION['user'])){
    // header('location:index.php');
    // }
?>
    <body>
        <main>
            <section>
                <h2 class="title-header">Options</h2>
            <?php
                $keyRight;
                $keyLeft;
                $keyUp;

                if($_POST){

                    //PARTIE NON FINIE: récupérer un membre par l'ID dans la BDD pour modifier ses paramètres 

                                //on part du principe qu'on a créé un utilisateur avec $_SESSION[idMembre]
                                //$r = $pdo->query("SELECT * FROM membre WHERE idMembre = '$_SESSION[idMembre]'");
                                //$membre = $r->fetch(PDO::FETCH_ASSOC);
                            
                                //html en php après en js

                                //$idMembre = $_SESSION['idMembre'];
                                //$recupMembre = $pdo->prepare("SELECT * FROM user WHERE idMembre=?");
                                // // dans user, recup le membre qui a l'id correspondant dans la bdd 
                                //$recupMembre->execute(array($idMembre));


                    $keyRight = $_POST['optionR'];
                    $keyLeft = $_POST['optionL'];
                    $keyUp = $_POST['optionJ'];
                     
                    //$pdo->exec("INSERT INTO membre (droite) VALUES ('$_POST[optionR]')");
                    //$pdo->exec("INSERT INTO membre (optionL) VALUES ('$_POST[optionL]')");
                    //$pdo->exec("INSERT INTO membre (optionJ) VALUES ('$_POST[optionJ]')");

                    //TEST pour passer des variables de php à JS        
                    ?>
                    <script>
                        let jsvar = '<?=$keyRight?>';
                        console.log(jsvar); 
                    </script>
            <?php } ?>

                <form class="contForm" method ="post" name="optionForm"> 
                    
                        <div class="option">
                            <label for="optionRight"> Touche pour se déplacemer à droite </label>
                            <input type="text" name="optionR" required minlength="1" maxlength="1" size="3">
                        </div>

                        <div class="option">
                            <label for="optionLeft">touche pour se déplacer à gauche </label>
                            <input type="text" name="optionL" required minlength="1" maxlength="1" size="3">
                        </div>

                        <div class="option">
                            <label for="optionJump">Touche pour sauter </label>
                            <input type="text" name="optionJ" required minlength="1" maxlength="1" size="3">
                        </div>

                        <div class="option">
                                <input class= "btnSubmit" type="submit" value="valider">
                        </div>
                </form>  
            </section>
        </main>
    </body>
</html>