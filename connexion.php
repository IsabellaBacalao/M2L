<?php
session_start();
if (isset($_POST["bouton"])) {
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $id = mysqli_connect("127.0.0.1:8889", "root", "root", "M2L");
    $req = "select * from user where login='$login' and mdp='$mdp'";
    $res = mysqli_query($id, $req);
    if (mysqli_num_rows($res) != 0) {
        $_SESSION["login"] = $login;
        header("location:index.html");
    } else {
        $erreur = "Erreur de login ou de mdp";
    }
}
?>

<?php include 'header.php'; ?>

<body>
    <center>
        <br>
        <h1>Formulaire de connexion</h1><br>
        <hr>
        <form action="" method="post">
            <input type="text" name="login" placeoholder="Entrez votre login :"><br><br>
            <input type="password" name="mdp" placeoholder="Entrez votre mdp :"><br><br>
            <?php if (isset($erreur)) echo "<h3>$erreur</h3>"; ?>
            <input type="submit" name="bouton" value="Connexion">
        </form><br>
        <hr><br>
    </center>
    <br>
</body>

</html>


<div class="container__child ">


    <div class="container-fluid">

        <div style="margin-top: 2%;">
            <h3 style="text-align: center; color: black;">INSCRIPTION</h3><br>

            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" style="font-size:14px; color: black;">Nom <span style="color: red;">*</span></label>
                        <input type="text" class="form-control " autocomplete="off" onchange="maj()" id="inputEmail4" placeholder="Nom" required="require_once" title="Veuillez renseigner votre Nom" name="nom">

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" style="font-size:14px; color: black;">Prénom <span style="color: red;">*</span></label>
                        <input type="text" class="form-control " autocomplete="off" id="inputPassword4" placeholder="Prénom" required="require_once" title="Veuillez renseigner votre Prénom" name="prenom">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputAddress" style="font-size:14px; color: black;">Email <span style="color: red;">*</span></label>
                        <input type="email" class="form-control " autocomplete="off" placeholder="identifiant@nomdedomaine.fr" required="require_once" name="email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label style="font-size:14px; color: black;">Mot de passe <span style="color: red;">*</span></label>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir 8 characteres minimum, dont une lettre majuscule et miniscule, un chiffre" name="mdp" class="form-control" placeholder="Mot de passe" require="">
                    </div>
                    <div class="form-group col-md-6">
                        <label style="font-size:14px; color: black;">Confirmer le mot de passe <span style="color: red;">*</span></label>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir 8 characteres minimum, dont une lettre majuscule et miniscule, un chiffre" name="cfr_mdp" class="form-control" placeholder="Confirmer le mot de passe" require="">
                    </div>

                </div>


                <input type="submit" class="btn btn-dark btn-block" style="float: right;" name="valid" value="S'inscrire" title="Clique dessus pour t'inscrire">


            </form>


        </div>
    </div>
</div>

<?php include 'footer.php'; ?>