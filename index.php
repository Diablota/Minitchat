<?php

require("modele/modeleminitchat.php");

if(isset($_SESSION['userid'])) {
	$showChat = true;
}else {
	$showChat = false;
}

// connexion
$msgConnect = "";
if (isset($_POST["emailConnection"])) {
	$reponse = userConnection();
	while ($donnees = $reponse->fetch()) {
        if ($donnees['mdp'] == $_POST["mdp"]) {
        	$showChat = true;
            $msgConnect = $donnees['pseudo'];
            $_SESSION['userid'] = $donnees['id'];
            $_SESSION['pseudo'] = $donnees['pseudo'];
        } else {
            $msgConnect = 'Vérifiez vos identifiants';
        }
    }
}

if (isset($_POST["message"])) {
    insererMessage($_POST["message"], $_SESSION['userid']);
}



// inscription
if (isset($_POST["email"])) {
    insertUser();
}

// Deconnexion
if (isset($_POST["logout"])) {
    session_destroy();
    header('Location: index.php');
}


$reponse = showMessage();

require("view/vueminitchat.php");