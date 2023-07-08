<?php
/* 
    PROJET # 1
    Dans ce projet, nous allons créer un tableau qui affichera:
    - les nombres de 1 à 10 dans la première colonne, 
    - le carré de ces nombres dans la deuxième colonne et 
    - la racine de ces nombres dans la troisème colonne

    Le but de ce projet c'est d'assimiler les fondamentaux du langage PHP
    => Variables, Boucles, ...
*/

// Initialisation du tableau:
echo '<table border>
        <tr>
            <th>Nombres</th>
            <th>Carré</th>
            <th>Racine</th>
        </tr>';

// Les lignes du nombre afficher de façon dynamique:
for ($i = 0; $i <= 10; $i++) { 
    echo '<tr>
            <td>'. $i. '</td>
            <td>'. $i * $i. '</td>
            <td>'. sqrt($i). '</td>
        </tr>';
}

echo '</table>';
?>