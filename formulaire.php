<?php
require "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-user?f=classic&s=regular">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="N1">
        <!-- Formulaire -->
        <fieldset>
            <div>
                <H2>Formulaire d'Inscription</H2>
                <hr>
                <!-- Entête Light Dark -->
                <div class="Ent">
                <div class="entete">
                    <div class="light"><p></p></div> 
                    <div class="light2"><p>Light</p></div>  <hr>
                </div>
                <div class="entete">
                    <div class="dark"><p></p></div> 
                    <div class="light2"><p>Dark</p></div>
                </div>
                
            </div>
            <hr>
            </div>
    <form action="traitement.php" enctype="multipart/form-data" method="post">
        <!-- Envoie du formulaire -->
        <div class="form">
           
            <!-- <div class="c1">
                <i class="fa-solid fa-circle-user" style="color: white;"></i>
            </div>
         <div class="c2">
           <input type="text" name="matricule" placeholder="Matricule">
         </div> -->
     </div>
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
        <i class="fa-regular fa-circle-camera" style="color: white;"></i>
    </div>
 <div class="c2">
   <input type="file" id="photo" name="photo" placeholder="Photo"  value="<?php if (isset($_POST['photo'])) echo $_POST['photo'] ?>">
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

<?php if (isset($_GET['idm'])) { ?>
                <div>
                    <label for="">&nbsp;</label>
                    <input type="hidden" name="idA" value="<?php if (isset($_POST['idA'])) echo $_POST['idA'] ?>">
                    <input type="submit" value="Modifier" name="modifier">
                </div>
            <?php } else { ?>

<div class="envoie">
    <label for="">&nbsp;</label>
    <input type="submit" value="Inscription" id="inscription" name="inscrire">
</div>
<?php } ?>
    </form>
</fieldset>
</div>

<div class="image">
    <div class="mage">
  <img src="orange.jpeg" class="marge2" alt="">
  </div>
</div>

</div>
 
<script src="app.js"></script>
<script src="./fontawesome/js/all.min.js" type="text/javascript"></script>
</body>
</html>