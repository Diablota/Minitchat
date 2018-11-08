<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Chat - Customer Module</title>
            <link type="text/css" rel="stylesheet" href="lib/css/bootstrap.css" />
            <link type="text/css" rel="stylesheet" href="lib/css/bootstrap-grid.css" />
            <link type="text/css" rel="stylesheet" href="lib/css/bootstrap-reboot.css" />

            <script type="text/javascript" src="lib/js/bootstrap.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap.bundle.js"></script>

            <link rel="stylesheet" type="text/css" href="minitchatbootstrap.css">
        </head>
        <body>

<?php 
    include('initialisation.php');
?>

            <div id="wrapper">
                <form method="POST" action="minitchatbootstrap.php"> 
                    <div class="form-group"> 
                        <h3>Bienvenue 
                            <?php 

                            

                            //print_r($_SESSION);
                            if(isset($_SESSION['pseudo'])) {
                                echo $_SESSION['pseudo'];
                            } 
                            ?>
                        </h3>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 text-center">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <input type="email" name="emailConnection" class="form-control" id="exampleInputEmail1" placeholder="Votre adresse email" />

                                    <label for="exampleInputPassword1">Mot de Passe</label>
                                    <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="Votre Mot de Passe" />
                                    <br />
                                    <input type="submit" value="Se Connecter" class="monbouton" />
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </form> 



                <form action="minitchatbootstrap.php" method="post">
                    <input type="hidden" name="deconnection" value="1" />
                    <input type="submit" value="Quitter" class="monbouton" name="logout">
                </form> <br /> <br />
                
                <div id="chatbox" >
                
              
               
<?php
// Connexion à la base de données
if (isset($_POST["deconnection"])) {
    session_unset();
}

if (isset($_POST["emailConnection"])) {
    $reponse = $bdd->prepare('
        SELECT * 
        FROM utilisateur 
        WHERE email = "' . $_POST["emailConnection"] . '"
    ');
    $reponse->execute();

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch())
    {
        if ($donnees['mdp'] == $_POST["mdp"]) {
            echo 'Vous êtes connecté';
            $_SESSION['userid'] = $donnees['id'];
            $_SESSION['pseudo'] = $donnees['pseudo'];
        } else {
            echo 'Vérifiez vos identifiants';
        }
    }

    $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, pseudo, email, mdp) VALUES (:nom, :prenom, :pseudo, :email, :mdp)');
    $req->bindParam(':prenom', $_POST["prenom"], PDO::PARAM_STR);
    $req->bindParam(':nom', $_POST["nom"], PDO::PARAM_STR);
    $req->bindParam(':pseudo', $_POST["pseudo"], PDO::PARAM_STR);
    $req->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
    $req->bindParam(':mdp', $_POST["mdp"], PDO::PARAM_STR);
    $req->execute();
}

if (isset($_POST["message"])) {
    $req = $bdd->prepare('INSERT INTO minichat (message, utilisateurId) VALUES (:message, :userId)');
    $req->bindParam(':message', $_POST["message"]);
    $req->bindParam(':userId', $_SESSION['userid']);
    $req->execute();
}

// Jointure pseudo à utilisateur Id
$reponse = $bdd->query('
    SELECT utilisateur.pseudo , minichat.message 
    FROM minichat 
    LEFT JOIN utilisateur 
        ON minichat.utilisateurId = utilisateur.id 
    ORDER BY minichat.id DESC
');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

if(isset($_SESSION['userid'])) {

}

if(isset($_POST['logout'])) {

}

?>
                </div>
            <form method="post" action="minitchatbootstrap.php">
                <label for="message">Message</label>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 text-center">
                            <input type="text" name="message" id="message" size="63" class="form-control"  />
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <input type="submit" value="Envoyer" class="monbouton">
            </form>
</body>
</html>

<?php

if (isset($_POST["email"])) {
    $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, pseudo, email, mdp) VALUES (:nom, :prenom, :pseudo, :email, :mdp)');
    $req->bindParam(':prenom', $_POST["prenom"], PDO::PARAM_STR);
    $req->bindParam(':nom', $_POST["nom"], PDO::PARAM_STR);
    $req->bindParam(':pseudo', $_POST["pseudo"], PDO::PARAM_STR);
    $req->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
    $req->bindParam(':mdp', $_POST["mdp"], PDO::PARAM_STR);
    $req->execute();
}

?>

                <form method="post" action="minitchatbootstrap.php">  
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 text-center">

                            <label for="validationDefault01">Prénom</label> 
                            <input type="text" name="prenom" class="form-control" placeholder="Votre Prénom">

                            <label for="validationDefault02">Nom de Famille</label>
                            <input type="text" name="nom" class="form-control" placeholder="Votre Nom de Famille">

                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" class="form-control" placeholder="Votre Pseudo">

                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Votre adresse email">

                            <label for="exampleInputPassword1">Mot de Passe</label>
                            <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="Votre Mot de Passe"> </br>

                            <input type="submit" value="S'inscrire" class="monbouton">

                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    </div>
                </form>
