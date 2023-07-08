<?php
    /*
        EXERCICE SUR LES FONCTIONS AVEC PHP

        Cet Exercice a pour but de réviser tout ce que j'ai appris jusque là avec PHP. Et bien évidemment surtout les fonctions
        Dans cet Exercice, nous allons créer une fonction qui va nous permettre de calculer les racines d'une équation de second degré        
    */
    function calculateSecondDegreeFunction($a, $b, $c) {
        // Si la variable a est 0:
        if ($a == 0) {
            echo "Cette équation est invalide";
            exit;
        }

        // Calcul du discriminant delta
        $delta = $b * $b - (4 * $a * $c);

        // Ecriture des différentes conditions de delta
        if ($delta < 0) {
            echo "Il n'y a pas de solution";
        } else if ($delta == 0) {
            $solution = -$b / (2 * $a);
            echo $solution;
        } else if ($delta > 0) {
            $firstSolution = (-$b + sqrt($delta)) / (2 * $a);
            $secondSolution = (-$b - sqrt($delta)) / (2 * $a);
            echo "Les solutions sont :". $firstSolution. " et ". $secondSolution;
        }
    }

    calculateSecondDegreeFunction(-3, 1, 7)
?>