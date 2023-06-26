<?php
require "connexion.php";
// Enregistrement
if(isset($_POST['valider'])){
    if(isset($_POST['idpromo'], $_POST['nom']));
    $req= $bd->prepare('insert into promotion (idpromo,nom) values(?,?)');
    $req->bindvalue(1, $_POST['idpromo']);
    $req->bindvalue(2, $_POST['nom']);
    $req->execute();
    header('Location:promotion_list.php');
}
?>