<?php
session_start();
include('head.php');
if ($_SESSION['garage'] == true ) {

?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Création d'horaires | Administrateurs</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@40,500,0,-25" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
<?php if(isset($_POST['name']))
{

      include_once('function_set_schedule.php');

      echo setSchedule();
} ?>
    <!-- NAVIGATION -->
    <?php  include('header.php') ?>
    <!-- END NAVIGATION -->
    <!-- MAIN -->
    <main>

        <!-- MIDDLE -->
<section>

    <div class="container card-user-modif">
    <div class="header header-management mb-5">
                <h1 class="add-user-title main-title-page"><span style="font-size: 27px;" class=" material-symbols-sharp">more_time</span> <a>Ajout d'horaires</a></h1><br>
<form class="form-custom" action="" name="create" method="POST">
    <div class="div-input-create-user"><button class="btn-primary btn input-create-user" type="submit" id='create_user' value=''><span class="mr-2 material-symbols-outlined">save</span>Sauvegarder</button></div>
            </div>
<div id="name-schedule">
  <br><label for="name">Nom</label><br><a href=""></a><input class="form-control" type="text" placeholder="Entrer le nom" name="name" required><br>
  </div><br><br>
  <h2>Lundi</h2> <br>
  <div class="input-schedule">
<label >Ouverture matin</label>
<label >Fermeture matin</label>
<label >Ouverture après-midi</label>
<label >Fermeture Soir</label>
<input class="form-control" type="text" placeholder="08:30" name="monday_mor_start" required>
<input class="form-control" type="text" placeholder="12:00" name="monday_mor_end" required>
<input class="form-control" type="text" placeholder="13:30" name="monday_eve_start" required>
<input class="form-control" type="text" placeholder="18:30" name="monday_eve_end" required>
</div><br><br>
<h2>Mardi</h2> <br>
  <div class="input-schedule">
<label >Ouverture matin</label>
<label >Fermeture matin</label>
<label >Ouverture après-midi</label>
<label >Fermeture Soir</label>
<input class="form-control" type="text" placeholder="08:30" name="tuesday_mor_start" required>
<input class="form-control" type="text" placeholder="12:00" name="tuesday_mor_end" required>
<input class="form-control" type="text" placeholder="13:30" name="tuesday_eve_start" required>
<input class="form-control" type="text" placeholder="18:30" name="tuesday_eve_end" required>
</div><br><br>
<h2>Mercredi</h2> <br>
  <div class="input-schedule">
<label >Ouverture matin</label>
<label >Fermeture matin</label>
<label >Ouverture après-midi</label>
<label >Fermeture Soir</label>
<input class="form-control" type="text" placeholder="08:30" name="wednesday_mor_start" required>
<input class="form-control" type="text" placeholder="12:00" name="wednesday_mor_end" required>
<input class="form-control" type="text" placeholder="13:30" name="wednesday_eve_start" required>
<input class="form-control" type="text" placeholder="18:30" name="wednesday_eve_end" required>
</div><br><br>
<h2>Jeudi</h2> <br>
  <div class="input-schedule">
<label >Ouverture matin</label>
<label >Fermeture matin</label>
<label >Ouverture après-midi</label>
<label >Fermeture Soir</label>
<input class="form-control" type="text" placeholder="08:30" name="thursday_mor_start" required>
<input class="form-control" type="text" placeholder="12:00" name="thursday_mor_end" required>
<input class="form-control" type="text" placeholder="13:30" name="thursday_eve_start" required>
<input class="form-control" type="text" placeholder="18:30" name="thursday_eve_end" required>
</div><br><br>
<h2>Vendredi</h2> <br>
  <div class="input-schedule">
<label >Ouverture matin</label>
<label >Fermeture matin</label>
<label >Ouverture après-midi</label>
<label >Fermeture Soir</label>
<input class="form-control" type="text" placeholder="08:30" name="friday_mor_start" required>
<input class="form-control" type="text" placeholder="12:00" name="friday_mor_end" required>
<input class="form-control" type="text" placeholder="13:30" name="friday_eve_start" required>
<input class="form-control" type="text" placeholder="18:30" name="friday_eve_end" required>
</div><br><br>
<h2>Samedi</h2> <br>
  <div class="input-schedule">
<label >Ouverture matin</label>
<label >Fermeture matin</label>
<label >Ouverture après-midi</label>
<label >Fermeture Soir</label>
<input class="form-control" type="text" placeholder="08:30" name="saturday_mor_start" required>
<input class="form-control" type="text" placeholder="12:00" name="saturday_mor_end" required>
<input class="form-control" type="text" placeholder="13:30" name="saturday_eve_start" required>
<input class="form-control" type="text" placeholder="18:30" name="saturday_eve_end" required>
</div><br><br>
<h2>Dimanche</h2> <br>
  <div class="input-schedule">
<label >Ouverture matin</label>
<label >Fermeture matin</label>
<label >Ouverture après-midi</label>
<label >Fermeture Soir</label>
<input class="form-control" type="text" placeholder="08:30" name="sunday_mor_start" required>
<input class="form-control" type="text" placeholder="12:00" name="sunday_mor_end" required>
<input class="form-control" type="text" placeholder="13:30" name="sunday_eve_start" required>
<input class="form-control" type="text" placeholder="18:30" name="sunday_eve_end" required>
</div><br><br>

        
</div>
    <br>
</section>
        <!-- END MIDDLE -->

    </main>
    <!-- END OF MAIN -->

   
</body>

</html>
<?php

} else
    header('Location: login.php');