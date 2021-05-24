<?php
session_start();

$id = mysqli_connect("127.0.0.1:8889", "root", "root", "m2l");
$id_salle = "";
$nom_salle = "";
$disponible = "";
$heuredebut = "";
$heurefin = "";
$jour = "";
$type = "";
$capacite = "";



if (isset($_POST["valider"])) {
    $id_salle = $_POST["id_salle"];
    $nom_salle = $_POST["nom_salle"];
    $disponible = $_POST["disponible"];
    $heuredebut = $_POST["heuredebut"];
    $heurefin = $_POST["heurefin"];
    $jour = $_POST["jour"];
    $type = $_POST["type"];
    $capacite = $_POST["capacite"];
    



    $req = "SELECT nom_salle FROM salles WHERE `type`='$type' AND `capacite`= '$capacite'";
    $res = mysqli_query($id, $req);

    

    $req3 = "UPDATE salles SET disponible = false, heuredebut = '$heuredebut', heurefin = '$heurefin' , jour = '$jour' WHERE nom_salle = '$nom_salle'";
    

    if ($req == true) {
        $req1 = "SELECT disponible FROM salles WHERE `type`='$type' AND `capacite`= '$capacite'";
        $res1 = mysqli_query($id, $req1);
        if ($req1 == true){
            $req1 = "UPDATE 'disponible' = false";
        }
    } else {
        echo "Cette salle n'existe pas.";
    }


    
}

?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Réservation de salles</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <?php include 'header.php'; ?>

        <!-- Main -->
        <section class="wrapper style1">
            <div class="container">
                <center>
                    <h2>Réservation de salles</h2>
                </center>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label for="salle" class="col-sm-2 control-label" name="salle">Selection de la salle</label>
                    <div class="col-sm-2">
                        <select class="form-control">
                            <option name="nom_salle">Salle Majorelle (Réunion - 25 personnes)</option>
                            <option value="">Amphithéâtre (Amphithéâtre - 30 personnes)</option>
                            <option value="">Salle Longwy (Réunion - 4 personnes)</option>
                            <option value="">Salle Daum (Réunion - 4 personnes)</option>
                            <option value="">Salle Multimédia (Multimedia - 12 personnes)</option>
                            <option value="">Salle Lamour (Réunion - 25 personnes)</option>
                            <option value="">Salle Gallé (Multimédia - 8 personnes)</option>
                            <option value="">Salle Corbin (Multimédia - 8 personnes)</option>
                            <option value="">Salle Baccarat (Réunion - 8 personnes)</option>
                            <option value="">Salle Grüber (Multimédia - 12 personnes)</option>
                        </select>
                    </div>
                </div><br>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label for="appt-time" class="col-sm-2 control-label">Heure de début</label>
                    <div class="col-sm-2">
                        <input class="form-control" id="appt-time" type="time" name="heuredebut">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label for="appt-time" class="col-sm-2 control-label">Heure de fin</label>
                    <div class="col-sm-2">
                        <input class="form-control" id="appt-time" type="time" name="heurefin">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label for="start" class="col-sm-2 control-label">Jour</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="date" id="start" name="jour">
                    </div>
                </div><br>
                <section class="col-lg-6" style="text-align:right">
                    <a class="button" name="valider">Valider</a>
                </section>

                <?php if (isset($nom_salle)) echo "<h3>$nom_salle</h3>"; ?>
            </div>



            <hr><br>
    </div>
    </section>
    <?php include 'footer.php'; ?>