<?php
session_start();

$id = mysqli_connect("127.0.0.1:8889", "root", "root", "m2l");
$id_reservation = "";
$id_salle = "";
$nom_salle = "";
$date = "";
$nom = "";
$prenom = "";
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Administrateur</title>
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
                    <h2>Administrateur</h2>
                </center>
                <br>
                <br>
                <!-- Dropdown qui selectionne les salles -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="salle" class="col-sm-2 control-label" name="id_salle">Selection de la salle</label>
                        <div>
                            <SELECT class="form-control" name="id_salle" value=<?=$id_salle?>>
                                <?php
                                $req = "SELECT * FROM salles";
                                $res = mysqli_query($id, $req);
                                while ($ligne = mysqli_fetch_assoc($res)) {
                                ?>
                                    <OPTION value="<?= $ligne["id_salle"]; ?>"> <?php echo $ligne["nom_salle"] . " ( " . $ligne["type"] . " - " . $ligne["capacite"] . " personnes ) "; ?> </OPTION>
                                <?php
                                }
                                ?>
                            </SELECT>
                            <br>
                            <br>
                            <input type="submit" name="submit" value="Rechercher">
                        </div>
                    </div>

                    <table class="table table-striped">
                        <tr>
                            <th>Id reservation</th>
                            <th>Id salle</th>
                            <th>Nom salle</th>
                            <th>Date</th>
                            <th>Nom utilisateur</th>
                            <th>Prenom utilisateur</th>
                        </tr>

                        <?php
                        $req = "SELECT * FROM reservation";
                        if (isset($_POST["submit"])) {
                            $id_salle = $_POST["id_salle"];

                            /*Jointure dans la table reservation de la table utilisateurs et la table salles */
                    
                            $req = "SELECT * FROM reservation 
                            INNER JOIN salles ON reservation.id_salle= salles.id_salle 
                            INNER JOIN utilisateurs ON reservation.id_utilisateur = utilisateurs.id_utilisateur 
                            WHERE reservation.id_salle=$id_salle";     
                            
            
                        }
                        $res = mysqli_query($id, $req);

                         /* "@" Sert à cacher les warning/error sur la page */
                        if (@$res->num_rows > 0) {
                            while ($row = $res->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id_reservation"]    . "</td>";
                                echo "<td>" . $row["id_salle"]    . "</td>";
                                echo "<td>" . @$row["nom_salle"]    . "</td>";
                                echo "<td>" . $row["date"]    . "</td>";
                                echo "<td>" . @$row["nom"]    . "</td>";
                                echo "<td>" . @$row["prenom"]    . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>

                    </table>
                    <?php include 'footer.php'; ?>