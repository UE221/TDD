<?php
namespace Cvtic\Bundle\TddDemoBundle\Util;

use \InvalidArgumentException;

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
     * @return numeric
     */
    public function sum($a, $b) {
        if(!is_numeric($a)) {
            throw new InvalidArgumentException('Le premier argument doit être numérique.');
        }
        
        if(!is_numeric($b)) {
            throw new InvalidArgumentException('Le second argument doit être numérique.');
        }
        
        return $a + $b;
    }
}
