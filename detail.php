<?php
require "connexion.php";

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Apprenant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="Detailpage">
    <div class="igg">
      <img src="<?php if (isset($_POST['photo'])) echo $_POST['photo'] ?> " class="igg" alt="">
      <div class="form">
   

</div>
    </div>
    <fieldset>
<div class="form">
       
       <div class="c1">
           <i class="fa-solid fa-user" style="color: white;  "></i>
       </div>
    <div class="c2">
      <input type="text" id="nomm" name="nom" placeholder="Nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom'] ?>">
    </div>
</div>
<div class="form">
   <div class="c1">
       <i class="fa-regular fa-user" style="color: white;"></i>
   </div>
<div class="c2">
  <input type="text" id="prenomm" name="prenom" placeholder="Prenom" value="<?php if (isset($_POST['prenom'])) echo $_POST['prenom'] ?>">
</div>
</div>
<div class="form">
   <div class="c1">
      
       <i class="fa-regular fa-shield-heart" style="color: white;"></i>
   </div>
<div class="c2">
  <input type="number" id="agee" name="age" placeholder="Age" value="<?php if (isset($_POST['age'])) echo $_POST['age'] ?>">
</div>
</div>
<div class="form">
   <div class="c1">
       <i class="fa-solid fa-calendar-days" style="color: white;"></i>
      
   </div>
<div class="c2">
  <input type="date" id="datee" name="datenaiss" placeholder="DateNaissance" value="<?php if (isset($_POST['datenaiss'])) echo $_POST['datenaiss'] ?>">
</div>
</div>
<div class="form">
   <div class="c1">
       <i class="fa-solid fa-envelope" style="color: white;"></i>
   </div>
<div class="c2">
  <input type="text" id="emaill" name="email"  placeholder="Email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">
</div>
</div>
<div class="form">
   <div class="c1">
       <i class="fa-solid fa-phone" style="color: white;"></i>
   </div>
<div class="c2">
  <input type="number" id="phone" name="telephone"  placeholder="Téléphone" value="<?php if (isset($_POST['telephone'])) echo $_POST['telephone'] ?>">
</div>
</div>

<div class="form">
   <div class="c1">
       <i class="fa-sharp fa-solid fa-p" style="color: white;"></i>
   </div>
   <!-- Promotion -->
<div class="c2">
  <select name="id" id="id">
     <option value=""></option>
     <?php
     // Recupération des données de la table promotion
                    $req = $bd->query('SELECT * FROM promotion');
                    
                    while($ligne=$req->fetch()){
                       //Recupération de l'identifiant de la table promotion avec (id)
                   if(isset($_POST['id'])&& $ligne['id']==$_POST['id']){
                       //Affichage des donées de la table promotion avec le nom (nomP) 
                       echo '<option value="'.$ligne['id'].'" selected>'.$ligne['nomP'].
                       '</option>';
                   }
                   else{
                       echo '<option value="'.$ligne['id'].'">'.$ligne['nomP'].
                   '</option>';
                   }
                   
               }
                   ?>
  </select>
</div>
</div>
<div class="form">
   <div class="c1">
       <i class="fa-regular fa-calendar-week" style="color: white;"></i>
   </div>
<div class="c2">
  <input type="number" name="annee" placeholder="AnnéeCertification"  value="<?php if (isset($_POST['annee'])) echo $_POST['annee'] ?>">
</div>
</div>
</fieldset>
</div>
</body>
</html>