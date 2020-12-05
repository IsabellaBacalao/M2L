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

<!-- Main -->
<section class="wrapper style1">
    <div class="container">
        <div id="content">

            <!-- Content -->

            <div class="container__child ">


                <div class="container__child ">

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

                            <br>
                            <input type="submit" class="btn btn-dark btn-block" style="float: right;" name="valid" value="S'inscrire" title="Cliquer pour s'inscrire">
                            <br>
                            <br>
                            <br>

                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include 'footer.php'; ?>