<!DOCTYPE HTML>

<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">
            <nav id="nav">
                <ul>
                    <img src="assets/css/images/logo.png" alt="LOGO" style="width:80px;height:80px;">
                    <li class="current"><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">M2L</a>
                        <ul>
                            <li><a href="#">Lorem dolor</a></li>
                            <li><a href="#">Magna phasellus</a></li>
                            <li><a href="#">Etiam sed tempus</a></li>
                            <li>
                                <a href="#">Submenu</a>
                                <ul>
                                    <li><a href="#">Lorem dolor</a></li>
                                    <li><a href="#">Phasellus magna</a></li>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li><a href="#">Etiam nisl</a></li>
                                    <li><a href="#">Veroeros feugiat</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <li><a href="ligues.html">Ligues</a></li>
                    <li><a href="emploi.php">Emploi</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            </nav>

        </div>

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




        <footer class="page-footer font-small bg-dark" style="color: #232b33; margin-bottom: -20%;">
            <center>

                <div style="background-color: #737373;">

                    <div class="container text-align: center">

                        <!-- Grid row-->
                        <div class="row py-4 d-flex">

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                                <h6 class="mb-0">Suivez-nous sur nos réseaux sociaux !</h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-7 text-center text-md-right">

                                <!-- Facebook -->
                                <a class="fb-ic">
                                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                                </a>

                                <!-- Twitter -->
                                <a class="tw-ic">
                                    <i class="fab fa-twitter white-text mr-4"> </i>
                                </a>

                                <!-- Google +-->
                                <a class="gplus-ic">
                                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                                </a>

                                <!--Linkedin -->
                                <a class="li-ic">
                                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                                </a>

                                <!--Instagram-->
                                <a class="ins-ic">
                                    <i class="fab fa-instagram white-text"> </i>
                                </a>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row-->

                    </div>

                

                    <!-- Footer Links -->
                    <div class="container text-center text-md-left mt-5">

                        <!-- Grid row -->
                        <div class="row mt-3">

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                                <!-- Content -->
                                <h6 class="text-uppercase font-weight-bold">M2L</h6>
                                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                <p>Bienvenue sur le site de la maison des ligues de Lorraine</p>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                                <!-- Links -->
                                <h6 class="text-uppercase font-weight-bold">Services</h6>
                                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                <p>
                                    <a href="http://m2l.nathandfk.fr?m2l=faq">FAQ</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                                <!-- Links -->
                                <h6 class="text-uppercase font-weight-bold"> LIENS UTILS</h6>
                                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                                <p>
                                    <a href="http://m2l.nathandfk.fr?m2l=register">Inscription/Connexion</a>
                                </p>

                                <p>
                                    <a href="#!">Aide</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                                <!-- Links -->
                                <h6 class="text-uppercase font-weight-bold">Contacts</h6>
                                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                <p>
                                    <i class="fas fa-home mr-3"></i>Villejuif, FRANCE</p>
                                <p>
                                    <i class="fas fa-envelope mr-3"></i>contact@m2l.fr</p>
                                <p>
                                    <i class="fas fa-phone mr-3"></i> +33 122334455</p>
                                <!--<p>
            <i class="fas fa-print mr-3"></i> +242 06 690 00 17</p>-->

                            </div>


                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                </div>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3" style="background: #737373">© 2020 Copyright:
                    <a href="https://nathanjo.fr/m2lpresent/?m2l=index"> Mentions légales</a>
                </div>
                <!-- Copyright -->
            </center>
        </footer>




    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>