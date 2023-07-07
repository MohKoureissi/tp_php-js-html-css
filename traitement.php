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
// On récupère toutes les données saisies dans le formulaire sauf le champs id qui est référencer par la clé étrangère de la table promotion
if (isset($_POST['inscrire'])){
    if(isset( $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['datenaiss'], $_POST['email'],
    $_POST['telephone'], $_POST['photo'], $_POST['annee']));
    
    $matricule= generateMatricule();
   
    $img_loc = $_FILES['photo']['tmp_name'];
    $img_name = $matricule.'_'.$_FILES['photo'] ['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc, $img_des);

    // On insère toutes les données dans la base de données et même l'id qui est la clé étrangère
    $req= $bd->prepare('insert into apprenant (matricule, nom, prenom, age, datenaiss, email, telephone, photo,id, annee) values (?,?,?,?,?,?,?,?,?,?)');
    $req->bindvalue(1, $matricule);
    $req->bindvalue(2, $_POST['nom']);
    $req->bindvalue(3, $_POST['prenom']);
    $req->bindvalue(4, $_POST['age']);
    $req->bindvalue(5, $_POST['datenaiss']);
    $req->bindvalue(6, $_POST['email']);
    $req->bindvalue(7, $_POST['telephone']);
    $req->bindvalue(8, $img_des);
    $req->bindvalue(9, $_POST['id']);
    $req->bindvalue(10, $_POST['annee']);
    $req->execute();
    header('Location:list.php');
}



//Modification
if(isset($_POST['modifier'])){
  if(isset( $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['datenaiss'], $_POST['email'],
  $_POST['telephone'], $_POST['photo'],$_POST['id'], $_POST['annee']));

  $img_loc = $_FILES['photo']['tmp_name'];
    $img_name = $matricule.'_'.$_FILES['photo'] ['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc, $img_des);
 
  $req= $bd->prepare('update apprenant set  nom=?, prenom=?, age=?, datenaiss=?, email=?, telephone=?, photo=?, id=?, annee=? where idA=?');
 
  $req->bindvalue(1, $_POST['nom']);
  $req->bindvalue(2, $_POST['prenom']);
  $req->bindvalue(3, $_POST['age']);
  $req->bindvalue(4, $_POST['datenaiss']);
  $req->bindvalue(5, $_POST['email']);
  $req->bindvalue(6, $_POST['telephone']);
  $req->bindvalue(7, $img_des);
  $req->bindvalue(8, $_POST['id']);
  $req->bindvalue(9, $_POST['annee']);
  $req->bindvalue(10, $_POST['idA']);
  $req->execute();
 header('Location:list.php');
}
?>