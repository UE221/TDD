<?php
namespace Cvtic\Bundle\TddDemoBundle\Util;

/**
 * Bibliothèque qui gère les fonctions de calcul de base.
 *
 * @author Sylvain Floury <sylvain@floury.name>
 */
class Calculator {
    /**
     * Effectue la somme de 2 valeurs numériques
     * 
     * @param numeric $a
     * @param numeric $b
     */
    public function sum($a, $b) {
        return $a + $b;
    }
}
