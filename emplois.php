<?php
session_start();

$con = mysqli_connect("127.0.0.1:8889", "root", "root", "m2l");

$id = "";
$libelle = "";
$date_creation = "";
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Offres mplois </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="is-preload">
    <div id="page-wrapper">
    <?php include 'header.php';?>

    <br>
    <br>
<center>
    <form action = "" method = "POST">
   <input type = "date" name = "date_debut">
   <br>
   <br>
   <input type = "date" name = "date_fin">
   <br>
   <br>
   <input type = "submit" name = "submit" value = "Rechercher">
   <br>
   <br>
  </form>
</center>



    <table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Libelle</th>
        <th>Date creation </th>
    </tr>
        
        <?php 
        $req = "SELECT * FROM emplois order by date_creation";
        if(isset($_POST["submit"])){
     
            $date_debut = $_POST["date_debut"];
            $date_fin = $_POST["date_fin"];
        
              $req = "SELECT * FROM emplois WHERE date_creation BETWEEN '$date_debut' AND '$date_fin' order by date_creation";
            }
        $res = mysqli_query($con, $req);
        
        if($res->num_rows > 0){
             while($row = $res->fetch_assoc()) {
                echo "<tr>";
            echo "<td>" . $row["id"]    ."</td>";
            echo "<td>" . $row["libelle"]    ."</td>";
            echo "<td>" . $row["date_creation"]    ."</td>";
            echo "</tr>";
             }
        }else{
        echo "0 results";
    }
    ?>

    </table>
        <?php include 'footer.php'; ?>