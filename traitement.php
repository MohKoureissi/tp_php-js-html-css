<?php
require "connexion.php";

function generateMatricule() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
                                      
    $matricule = 'P1';
    $matricule= 'P2';
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
    if(isset( $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['datenaiss'], $_POST['email'],
    $_POST['telephone'], $_POST['photo'], $_POST['annee']));
    
    $matricule= generateMatricule();

    $req= $bd->prepare('insert into apprenant (matricule, nom, prenom, age, datenaiss, email, telephone, photo,id, annee) values (?,?,?,?,?,?,?,?,?,?)');
    $req->bindvalue(1, $matricule);
    $req->bindvalue(2, $_POST['nom']);
    $req->bindvalue(3, $_POST['prenom']);
    $req->bindvalue(4, $_POST['age']);
    $req->bindvalue(5, $_POST['datenaiss']);
    $req->bindvalue(6, $_POST['email']);
    $req->bindvalue(7, $_POST['telephone']);
    $req->bindvalue(8, $_POST['photo']);
    $req->bindvalue(9, $_POST['id']);
    $req->bindvalue(10, $_POST['annee']);
    $req->execute();
    header('Location:list.php');
}

//Editer
if (isset($_GET['idm'])) {
    $req = $bd->query('select * from apprenant where idA=' . $_GET['idm']);
    if ($ligne = $req->fetch()) {
        $_POST['idA'] = $ligne['idA'];
        $_POST['nom'] = $ligne['nom'];
        $_POST['prenom'] = $ligne['prenom'];
        $_POST['age'] = $ligne['age'];
        $_POST['datenaiss'] = $ligne['datenaiss'];
        $_POST['email'] = $ligne['email'];
        $_POST['telephone'] = $ligne['telephone'];
        $_POST['photo'] = $ligne['photo'];
        $_POST['id'] = $ligne['id'];
        $_POST['annee'] = $ligne['annee'];
    }
}

//Modification
if(isset($_POST['modifier'])){
  if(isset( $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['datenaiss'], $_POST['email'],
  $_POST['telephone'], $_POST['photo'], $_POST['annee']));
  $req= $bd->prepare('update apprenant set nom=?, prenom=?, age=?, datenaiss=?, email=?, telephone=?, photo=?, id=?, annee=? where idA=?');
  $req->bindvalue(1, $_POST['nom']);
  $req->bindvalue(2, $_POST['prenom']);
  $req->bindvalue(3, $_POST['age']);
  $req->bindvalue(4, $_POST['datenaiss']);
  $req->bindvalue(5, $_POST['email']);
  $req->bindvalue(6, $_POST['telephone']);
  $req->bindvalue(7, $_POST['photo']);
  $req->bindvalue(8, $_POST['id']);
  $req->bindvalue(9, $_POST['annee']);
  $req->bindvalue(10, $_POST['idA']);
  $req->execute();
  header('Location:list.php');
}
?>