<?php
require_once('../models/connexion.php');

if (isset($_POST['valider'])) {
    if (!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['date']) && !empty($_POST['duree']) && !empty($_POST['localite'])){
        $code = htmlspecialchars($_POST['code']);
        $nom = htmlspecialchars($_POST['nom']);
        $date = htmlspecialchars($_POST['date']);
        $duree= htmlspecialchars($_POST['duree']);
        $localite = htmlspecialchars($_POST['localite']);
        

    
             $stmt = addprojet($code, $nom, $date, $duree, $localite);
            ($stmt) ? $_SESSION['success'] = 'Enregistrment effectué avec succès' : $_SESSION['error'] = 'Erreur d\'enregistrement';
            //($stmt) ? header('Location: ../?s=' .base64_encode('Enregistrment effectué avec succès')) : header('Location: ../?e=' .base64_encode('Erreur d\'enregistrement'));
            header('Location: ../views/projet.php');
        
    } else {
        $_SESSION['error'] = 'Remplissez obligatoirement tout les champs';
        header('Location: ../views/projet.php');
    }
    
    // Fermer l'écriture de la session
    
    //header('Location: ../?s=' . base64_encode($suc) . '&e=' . base64_encode($err));
    //header('Location: ../?e=' . base64_encode($err));

}