<?php
require "connexion.php";
// Enregistrement
if(isset($_POST['valider'])){
    if(isset( $_POST['nomP']));
    $req= $bd->prepare('insert into promotion (nomP) values(?)');
    // $req->bindvalue(1, $_POST['idpromo']);
    $req->bindvalue(1, $_POST['nomP']);
    $req->execute();
    header('Location:promotion_list.php');
}
?>