<?php
session_start();

$id = mysqli_connect("127.0.0.1:8889", "root", "root", "m2l");
$id_utilisateur = "";
$nom = "";
$prenom = "";
$date_naissance = "";
$telephone = "";
$mail = "";
$login = "";
$mdp = "";
$cfrm_mdp = "";

//Nouveau enregistrement

if (isset($_POST["inscription"])) {
    $id_utilisateur = $_POST["id_utilisateur"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $telephone = $_POST["telephone"];
    $mail = $_POST["mail"];
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $cfrm_mdp = $_POST["cfrm_mdp"];


    if ($id_utilisateur == "") {
        $req = "INSERT INTO utilisateurs VALUES (NULL, '$nom', '$prenom', '$date_naissance', '$telephone', '$mail', '$login', '$mdp', '$cfrm_mdp')";
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
                        <h1>INSCRIPTION PARTICULIER</h1><br>
                    </center>
                    <hr>
                    <form method="POST">

                        <label>Nom</label>
                        <input type="text" placeholder="Nom" name="nom" required>

                        <label>Prenom</label>
                        <input type="text" placeholder="Prénom" name="prenom" required><br>

                        <label>Date de naissance</label>
                        <div class="form-group">
                            <label for="start"></label>
                            <div class="col-sm-2">
                                <input class="form-control" type="date" id="start" name="date_naissance" required>
                            </div>
                        </div><br>

                        <label>Telephone</label>
                        <input type="text" name="telephone" placeholder="Telephone" required>

                        <label>Mail</label>
                        <input type="email" name="mail" placeholder="Mail" required>

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