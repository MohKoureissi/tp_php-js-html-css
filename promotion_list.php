<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>N°</th>
                <th>IDPromo</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
<?php
        $req =$bd->query('SELECT * FROM promotion');
        $i = 1;
        while ($ligne = $req->fetch()) {
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $ligne['idpromo'] . '</td>';
            echo '<td>' . $ligne['nom'] . '</td>';
            $i++;
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</body>
</html>