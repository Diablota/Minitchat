<?php

session_start();

function showMessage(){
	$bdd = coBdd();
	$reponse = $bdd->query('
	    SELECT utilisateur.pseudo , minichat.message 
	    FROM minichat 
	    LEFT JOIN utilisateur 
	        ON minichat.utilisateurId = utilisateur.id 
	    ORDER BY minichat.id DESC
	');
	return $reponse;
}

function insererMessage($msg, $userId) {
	$bdd = coBdd();
	$req = $bdd->prepare('
		INSERT INTO minichat (message, utilisateurId) 
		VALUES (:message, :userId)');
    $req->bindParam(':message', $msg);
    $req->bindParam(':userId', $userId);
    $req->execute();
}

// insert un utilisateur dans la base de donnée (INSCRIPTION)
function insertUser() {
	$bdd = coBdd();
	$req = $bdd->prepare('
		INSERT INTO utilisateur (nom, prenom, pseudo, email, mdp) 
		VALUES (:nom, :prenom, :pseudo, :email, :mdp)
	');
    $req->bindParam(':prenom', $_POST["prenom"], PDO::PARAM_STR);
    $req->bindParam(':nom', $_POST["nom"], PDO::PARAM_STR);
    $req->bindParam(':pseudo', $_POST["pseudo"], PDO::PARAM_STR);
    $req->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
    $req->bindParam(':mdp', $_POST["mdp"], PDO::PARAM_STR);
    $req->execute();
}

// Vérifie les données utilisateur (CONNEXION)
function userConnection() {
	$bdd = coBdd();
    $reponse = $bdd->prepare('
        SELECT * 
        FROM utilisateur 
        WHERE email = "' . $_POST["emailConnection"] . '"
    ');
    $reponse->execute();
    return $reponse;
}


function coBdd(){
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=exercicetchat;charset=utf8', 'root', '');
	    return $bdd;
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
}