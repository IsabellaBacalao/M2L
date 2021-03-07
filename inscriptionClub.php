<?php
session_start();

$id = mysqli_connect("127.0.0.1:8889", "root", "root", "m2l");
$id_club = "";
$nom_club = "";
$ville = "";
$departement = "";
$telephone = "";
$mail = "";
$login = "";
$mdp = "";
$cfrm_mdp = "";

//Nouveau enregistrement

if (isset($_POST["inscription"])) {
    $id_club = $_POST["id_club"];
    $nom_club = $_POST["nom_club"];
    $ville = $_POST["ville"];
    $departement = $_POST["departement"];
    $telephone = $_POST["telephone"];
    $mail = $_POST["mail"];
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $cfrm_mdp = $_POST["cfrm_mdp"];


    if ($id_club == "") {
        $req = "INSERT INTO clubs VALUES ('$id_club', '$nom_club', '$ville', '$departement', '$telephone', '$mail', '$login', '$mdp', '$cfrm_mdp')";
        $res = mysqli_query($id, $req);
        header("location:index.php");
    }
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="is-preload">
    <div id="page-wrapper">


        <?php include 'header.php'; ?>

        <section class="wrapper style1">
            <div class="container">

                <body>
                    <center>
                        <h1>INSCRIPTION</h1><br>
                    </center>
                    <hr>
                    <form method="POST">
                    <!-- TO DO: Finir le formulaire avec les bons types etc et 
                créer la table dans la BDD hebergé sur internet -->
                        <label>ID du club</label>
                        <input type="text" placeholder="Nom" name="nom" required>

                        <label>Nom du club</label>
                        <input type="text" placeholder="Prénom" name="prenom" required><br>

                        <label>Ville</label>
                        <input type="date" placeholder="identifiant@nomdedomaine.fr" name="date_naissance" required><br>

                        <label>departement</label>
                        <input type="date" placeholder="identifiant@nomdedomaine.fr" name="date_naissance" required><br>

                        <label>Telephone</label>
                        <input type="text" name="telephone" placeholder="Telephone" required>

                        <label>Mail</label>
                        <input type="email" name="mail" placeholder="Mail" required>

                        <label>Login</label>
                        <input type="text" name="login" placeoholder="Entrez votre login" required>

                        <label>Mots de passe</label>
                        <input type="password" name="mdp" placeholder="Saisir le mot de passe" required>

                        <label>Confirmez le mots de passe</label>
                        <input type="password" name="cfrm_mdp" placeholder="Confirmez le mot de passe" required>

                        <br>
                        <center><input type="submit" name="inscription" value="inscription"></center>
                    </form>
                </body>
            </div>
        </section>

        <?php include 'footer.php'; ?>