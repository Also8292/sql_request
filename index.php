<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Découverte SQL</title>
</head>
<body>
    
</body>
</html>
<?php

require_once 'database.php';

?>

<h1>Projet découverte SQL : </h1>
<br>
<br>

<!-- Les Palmer -->
<h2>1) Afficher tous les gens dont le nom est Palmer : </h2>
<br>
<?php

$query1 = 'SELECT first_name, last_name, NOW() AS date_now FROM table_1 WHERE last_name="Palmer"';
$request1 = select_request($query1);
while($resultat = $request1->fetch()) {
    echo $resultat['first_name'] . ' ' . $resultat['last_name'] . '<br>';
    
}
$request1->closeCursor();

?>
<br>



<!-- Toutes les femmes -->
<h2>2) Afficher toutes les femmes : </h2>
<br>
<?php

$query1 = 'SELECT first_name, last_name FROM table_1 WHERE gender="Female"';
$request1 = select_request($query1);
while($resultat = $request1->fetch()) {
    echo $resultat['first_name'] . ' ' . $resultat['last_name'] . '<br>';
}
$request1->closeCursor();

?>
<br>


<!-- Tous les Etat dont la lettre commence par N -->
<h2>3) Tous les Etat dont le nom commence par N : </h2>
<br>
<?php

$query1 = 'SELECT country_code FROM table_1 WHERE country_code LIKE "N%"';
$request1 = select_request($query1);
while($resultat = $request1->fetch()) {
    echo $resultat['country_code'] . '<br>';
}
$request1->closeCursor();

?>
<br>


<!-- Tous les emails qui contiennent google -->
<h2>4) Tous les emails qui contiennent google : </h2>
<br>
<?php

$query1 = 'SELECT email FROM table_1 WHERE email like "%google%"';
$request1 = select_request($query1);
while($resultat = $request1->fetch()) {
    echo $resultat['email'] . '<br>';
}
$request1->closeCursor();

?>
<br>




<!-- Repartition par Etat -->
<h2>5) Repartition par Etat : </h2>
<br>
<?php


$query1 = 'SELECT country_code, COUNT(country_code) AS nbre FROM table_1 GROUP BY country_code ORDER BY nbre';
$request1 = select_request($query1);
while($resultat = $request1->fetch()) {
    echo $resultat['country_code'] . ' => ' . $resultat['nbre'] . '<br>';
}
$request1->closeCursor();

?>
<br>



<!-- Nombre de femmes et d'homme -->
<h2>6) Nombre de femmes et d'homme : </h2>
<br>
<?php

$query1 = 'SELECT COUNT("gender") AS nbr FROM table_1 WHERE gender="Male"';
$request1 = select_request($query1);
while($resultat = $request1->fetch()) {
    echo 'Nombre d\'hommes : ' . $resultat['nbr'] . '<br>';
}
$request1->closeCursor();

$query2 = 'SELECT COUNT("gender") AS nbr FROM table_1 WHERE gender="Female"';
$request2 = select_request($query2);
while($resultat = $request2->fetch()) {
    echo 'Nombre de femmes : ' . $resultat['nbr'] . '<br>';
}
$request2->closeCursor();

?>
<br>



<!-- Afficher l'age de chaque personne puis la moyenne d'age -->
<h2>7) Afficher l'age de chaque personne puis la moyenne d'age : </h2>
<br>
<?php



?>
<br>


