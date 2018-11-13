<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon tchatche</title>
    <link type="text/css" rel="stylesheet" href="lib/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="src/css/minitchatbootstrap.css">
    <script type="text/javascript" src="lib/js/jquery.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.js"></script>
</head>
<body>
    <div id="wrapper">
        <div class="form-group"> <br />
            <h3>Bienvenue <?php echo " " . $msgConnect; ?> </h3>
            <button type="button" class="monbouton" data-toggle="modal" data-target="#exampleModal1"> Connexion</button>
        </div>
        <form action="index.php" method="post">
            <input type="submit" value="Se déconnecter" class="monbouton" name="logout" />
        </form>
        <br />
        <?php
            if($showChat) {
        ?>
            <div id="chatbox" >
                <?php
                    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                    while ($donnees = $reponse->fetch()) {
                        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
                    }
                ?>
            </div>
            <form method="post" action="index.php">
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
                <input type="submit" value="Envoyer" class="monbouton" /> 
            </form>
        <?php
            }
        ?>
        <br />
        <button type="button" class="monbouton" data-toggle="modal" data-target="#exampleModal">
        Inscription
        </button>
    </div>


<!-- MODAL INSCRIPTION -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">S'inscrire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mamodal">
                    <form method="post" action="index.php">  
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 text-center">
                                    <div class="form-group">
                                        <label for="validationDefault01">Prénom</label> 
                                        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" />
                                    </div>
                                    <div class="form-group">
                                        <label for="validationDefault02">Nom</label>
                                        <input type="text" name="nom" class="form-control" placeholder="Votre nom" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pseudo">Pseudo</label>
                                        <input type="text" name="pseudo" class="form-control" placeholder="Votre pseudo" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Votre adresse email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mot de Passe</label>
                                        <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="Votre Mot de Passe" />
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="monbouton" data-dismiss="modal">Fermer</button>
                <button type="button" class="monbouton">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>

<!--  MODAL CONNEXION ----> 
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">Se connecter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="login" id="login" method="post" action="index.php">
                <div class="modal-body">
                    <div class="mamodal1">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 text-center">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <input type="email" name="emailConnection" class="form-control" placeholder="Votre email" /> <br />
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <input type="password" class="form-control" name="mdp" placeholder="Votre mot de passe" /> <br />
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="monbouton" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="monbouton">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>