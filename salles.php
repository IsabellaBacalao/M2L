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

                <div class="form-group">
                    <label for="capacité" class="col-sm-2 control-label">Selection de la capacité</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gender1">
                            <option>4 personnes</option>
                            <option>8 personnes</option>
                            <option>12 personnes</option>
                            <option>25 personnes</option>
                            <option>+30 personnes</option>
                        </select>

                    </div>
                </div><br>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label for="typeSalles" class="col-sm-2 control-label">Selection du type de salle</label>
                    <div class="col-sm-2">
                        <select class="form-control">
                            <option>réunion</option>
                            <option>Multimédia</option>
                            <option>Amphithéâtre</option>
                        </select>
                    </div>
                </div><br>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label for="appt-time" class="col-sm-2 control-label">Heure</label>
                    <div class="col-sm-2">
                        <input class="form-control" id="appt-time" type="time" name="appt-time">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label for="start" class="col-sm-2 control-label">Jour</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="date" id="start" name="trip-start">
                    </div>
                </div><br>
                <section class="col-lg-6" style="text-align:right">
                    <a class="button">Valider</a>
                </section>
            </div>



            <hr><br>
    </div>
    </section>
    <?php include 'footer.php'; ?>