<?php 
require '../controllers/liste.php'
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
           <h2>Liste des projets</h2>

           <table class="table" style="font-size:20px; width:200vh; margin-left:100px">
  <thead>
    <tr>
      <th scope="col">code</th>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      <th scope="col">Duree</th>
      <th scope="col">Localite</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($listes as $liste): ?>
    <tr>
      <th scope="row"><?= $liste['codeProjet']?></th>
      <td><?= $liste['nomprojet']?></td>
      <td><?= $liste['dateLancement']?></td>
      <td><?= $liste['duree']?></td>
      <td><?= $liste['codelocalite']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>











    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
      
</body>
</html>