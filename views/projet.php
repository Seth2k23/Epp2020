
<?php
require '../controllers/local.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Récherche</title>
</head>
<body>
<div class="form-group row my-2 mt-4">
  <div class="col-sm-10">
    <?php include 'msg_error_success.php' ?>
  </div>
</div>

<div class="container">
<form class="form" action="../controllers/enregistrement.php" method="post">
  <h2>SAISIE DES PROJETS</h2>
  <div class="form-group row my-2 mt-4">
    <label class="col-sm-2 col-form-label col-form-label-lg">Code  projet</label>
    <div class="col-sm-6">
      <input type="text" class="form-control form-control-lg" name="code">
    </div>
  </div>
  <div class="form-group row my-2">
      <label class="col-sm-2 col-form-label col-form-label-lg">Nom du projet</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" name="nom">
      </div>
  </div>
  <div class="form-group row my-2">
    <label class="col-sm-2 col-form-label col-form-label-lg">Date de lancement</label>
    <div class="col-sm-6">
      <input type="date" class="form-control form-control-lg" name="date">
    </div>
  </div>
  <div class="form-group row my-2">
    <label class="col-sm-2 col-form-label col-form-label-lg"> Durée</label>
    <div class="col-sm-6">
      <input type="text" class="form-control form-control-lg" name="duree">
    </div>
  </div>
  
  <div class="form-group row my-2">
    <label class="col-sm-2 col-form-label col-form-label-lg" >Localité</label>
    <div class="col-sm-6 ml-4">
    <select class="form-control form-control-lg" name="localite">
            <option value="">choisir localité</option>
          <?php foreach($localites as $localite): ?>
            <option value="<?= $localite['codelocalite'] ?>"><?= $localite['nomlocalite'] ?></option>
          <?php endforeach; ?> 
        </select>
    </div>
  </div>
  <div class="form-group row my-4">
    <input type="submit" name="valider" class="col-sm-2 col-form-label col-form-label btn btn-outline-dark fw-bold" value="soummettre">
    <div class="col-sm-3">
      <input type="reset" id="submit" class="form-control form-control-lg btn btn-outline-dark fw-bold" value="Annuler">
    </div>
  </div>
</form>
</div>


<div class="" style="margin-top:100px">
    <?php include 'modifier.php' ?>
  </div>
   

  <div class="" style="margin-top:100px">
    <?php include 'liste.php' ?>
  </div>

  
      
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
      
</body>
</html>