<?php
session_start();

$id = mysqli_connect("127.0.0.1:8889", "root", "root", "M2L");
$id_utilisateur = "";
$nom = "";
$prenom = "";
$date_naissance = "";
$telephone = "";
$mail = "";
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
    $mdp = $_POST["mdp"];
    $cfrm_mdp = $_POST["cfrm_mdp"];


    if ($id_utilisateur == "") {
        $req = "INSERT INTO inscription VALUES (NULL, '$nom', '$prenom', '$date_naissance', '$telephone', '$mail', '$mdp', '$cfrm_mdp')";
        $res = mysqli_query($id, $req);
        header("location:index.php");
    }
}
?>
<?php include 'header.php'; ?>

<div class="container__child ">
    <div class="container__child ">
        <div style="margin-top: 2%;">
            <h3 style="text-align: center; color: black;">INSCRIPTION</h3><br>

            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nom</label>
                        <input type="text" class="form-control " placeholder="Nom" name="nom" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Prenom</label>
                        <input type="text" class="form-control " placeholder="Prénom" name="prenom" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Date de naissance</label>
                        <input type="date" class="form-control " placeholder="identifiant@nomdedomaine.fr" name="date_naissance" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Telephone</label>
                        <input type="text" name="telephone" class="form-control" placeholder="Telephone" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mail</label>
                        <input type="email" name="mail" class="form-control" placeholder="Mail" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mots de passe</label>
                        <input type="password" name="mdp" class="form-control" placeholder="Saisir le mot de passe" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Confirmez le mots de passe</label>
                        <input type="password" name="cfrm_mdp" class="form-control" placeholder="Comfirmez le mot de passe" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-dark btn-block" name="inscription" value="inscription">
                <br>
                <br>
                <br>
                <br>
          </form>
      </div>
  </div>
</div>
</section>

<?php include 'footer'; ?>

