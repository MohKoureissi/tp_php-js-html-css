<?php
require "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Apprenant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="nv">
        <img src="images.jpg" class="mgg" alt="">
        <h1>Apprenants certifiés ODK  <br>  <img src="11.png" alt="">  <br>  BIENVENUE </h1>  
       <img src="téléchargement.jpg" class="mg" alt="">
    </nav>
<table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>DateNaissance</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Photo</th>
                <th>Promotion</th>
                <th>AnnéeCertification</th>
                
            </tr>
        </thead>
        <tbody>
<?php
// join promotion on apprenant.matricule=promotion.idpromo
        $req = $bd->query('SELECT * FROM apprenant ');
        $i = 1;
        while ($ligne = $req->fetch()) {
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $ligne['matricule'] . '</td>';
            echo '<td>' . $ligne['nom'] . '</td>';
            echo '<td>' . $ligne['prenom'] . '</td>';
            echo '<td>' . $ligne['age'] . '</td>';
            echo '<td>' . $ligne['datenaiss'] . '</td>';
            echo '<td>' . $ligne['email'] . '</td>';
            echo '<td>' . $ligne['telephone'] . '</td>';
            echo '<td>' . $ligne['photo'] . '</td>';
            echo '<td>' . $ligne['idpromo'] . '</td>';
            echo '<td>' . $ligne['annee'] . '</td>';
           
           /* echo '<td>
                    <a href="formulaire.php?idm=' . $ligne['ide'] . '">Editer</a>
                    <a href="list.php?ids=' . $ligne['ide'] . '">Supprimer</a>
                </td>';   */
            $i++;
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
    <button><a href="formulaire1.php"> Ajouter</a></button>
</body>
</html>
