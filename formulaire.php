<?php
require "connexion.php";

function generateMatricule() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
                                      
    $matricule = 'P1';
    for ($i = 0; $i < 2; $i++) {
        $matricule .= $letters[rand(0, strlen($letters) - 1)];
    }
    for ($i = 0; $i < 2; $i++) {
        $matricule .= $digits[rand(0, strlen($digits) - 1)];
    }

    return $matricule;
}


  

// Enregistrement
if (isset($_POST['inscrire'])){
    if(isset($_POST['matricule'], $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['datenaiss'], $_POST['email'],
    $_POST['telephone'], $_POST['photo'], $_POST['promotion'], $_POST['annee'],));
    
    $matricule= generateMatricule();

    $req= $bd->prepare('insert into apprenant (matricule, nom, prenom, age, datenaiss, email, telephone, photo, promotion, annee) values (?,?,?,?,?,?,?,?,?,?)');
    $req->bindvalue(1, $matricule);
    $req->bindvalue(2, $_POST['nom']);
    $req->bindvalue(3, $_POST['prenom']);
    $req->bindvalue(4, $_POST['age']);
    $req->bindvalue(5, $_POST['datenaiss']);
    $req->bindvalue(6, $_POST['email']);
    $req->bindvalue(7, $_POST['telephone']);
    $req->bindvalue(8, $_POST['photo']);
    $req->bindvalue(9, $_POST['promotion']);
    $req->bindvalue(10, $_POST['annee']);
    $req->execute();
    header('Location:list.php');
}
?>