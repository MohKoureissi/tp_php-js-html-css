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
    <form action="formulaire.php" method="post">
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
       <input type="text" name="nom" placeholder="Nom">
     </div>
 </div>
 <div class="form">
    <div class="c1">
        <i class="fa-regular fa-user" style="color: white;"></i>
    </div>
 <div class="c2">
   <input type="text" name="prenom" placeholder="Prenom">
 </div>
</div>
<div class="form">
    <div class="c1">
       
        <i class="fa-regular fa-shield-heart" style="color: white;"></i>
    </div>
 <div class="c2">
   <input type="number" name="age" placeholder="Age">
 </div>
</div>
<div class="form">
    <div class="c1">
        <i class="fa-solid fa-calendar-days" style="color: white;"></i>
       
    </div>
 <div class="c2">
   <input type="date" name="datenaiss" placeholder="DateNaissance">
 </div>
</div>
<div class="form">
    <div class="c1">
        <i class="fa-solid fa-envelope" style="color: white;"></i>
    </div>
 <div class="c2">
   <input type="text" name="email" placeholder="Email">
 </div>
</div>
<div class="form">
    <div class="c1">
        <i class="fa-solid fa-phone" style="color: white;"></i>
    </div>
 <div class="c2">
   <input type="text" name="telephone" placeholder="Téléphone">
 </div>
</div>
<div class="form">
    <div class="c1">
        <i class="fa-regular fa-circle-camera" style="color: white;"></i>
    </div>
 <div class="c2">
   <input type="text" name="photo" placeholder="Photo">
 </div>
</div>
<div class="form">
    <div class="c1">
        <i class="fa-sharp fa-solid fa-p" style="color: white;"></i>
    </div>
 <div class="c2">
   <!-- <input type="text" name="promotion" placeholder="Promotion"> -->
   <select name="promotion" id="idpromo">
      <option value=""></option>
      <?php
                     $req = $bd->query('SELECT * FROM promotion');
                     
                     while($ligne=$req->fetch()){
                    if(isset($_POST['idpromo'])&& $ligne['idpromo']==$_POST['idpromo']){
                        echo '<option value="'.$ligne['idpromo'].'" selected>'.$ligne['nom'].
                        '</option>';
                    }
                    else{
                        echo '<option value="'.$ligne['idpromo'].'">'.$ligne['nom'].
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
   <input type="number" name="annee" placeholder="AnnéeCertification">
 </div>
</div>
<!-- <div class="envoie">
    <input type="submit" value="Inscrire" name="inscrire">
</div> -->
<div class="envoie">
    <label for="">&nbsp;</label>
    <input type="submit" value="Inscription" name="inscrire">
</div>
    </form>
</fieldset>
</div>
 
<script src="./fontawesome/js/all.min.js" type="text/javascript"></script>
</body>
</html>