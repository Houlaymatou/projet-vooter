<?php require('../includes/head.html.php'); ?>
<div class="container">

	       <?php require('header.html.php'); ?>

<div class="jumbotron">
 <form id="formsubmit" name="formsubmit">
  <div class="form-group">
    <label for="nom" class="label-control">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="prenom" class="label-control">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
  </div>
  
  <input type="submit" class="btn btn-default" value="Envoyez" name="submit">
</form>
</div>
</div>
<script type="text/javascript" src="../assets/js/script.js"></script>