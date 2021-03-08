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
                        <input type="text" placeholder="ID du club" name="id_club" required>

                        <label>Nom du club</label>
                        <input type="text" placeholder="Nom du club" name="nom_club" required><br>

                        <label>Ville</label>

                        <div class="form-group">
                            <label for="gender1" class="control-label"></label>
                            <div class="col-sm-2">
                                <select class="form-control" id="gender1">
                                    <option>Metz (57)</option>
                                    <option>Nancy (54)</option>
                                    <option>Thionville (57)</option>
                                    <option>Épinal (88)</option>
                                    <option>Vandœuvre-lès-Nancy (54)</option>
                                </select>

                            </div>
                        </div><br>

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