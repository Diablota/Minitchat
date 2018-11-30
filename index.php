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

if(empty($msgConnect) && isset($_SESSION['pseudo'])) {
	$msgConnect = $_SESSION['pseudo'];
}

if (isset($_POST["message"]) && isset($_SESSION['userid'])) {
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

$chatmessage = '';
while ($donnees = $reponse->fetch())
	$chatmessage .= '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader);

$twig->addGlobal('session', $_SESSION);

$template= $twig->loadTemplate('index.twig.html');

echo $twig->render('index.twig.html', array(
	'msgConnect' => $msgConnect,
	'chatmessage' => $chatmessage,
	'showChat' => $showChat
));

// require("view/vueminitchat.php");