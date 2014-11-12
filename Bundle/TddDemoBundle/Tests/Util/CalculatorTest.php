<?php
namespace Cvtic\Bundle\TddDemoBundle\Test\Util;

use Cvtic\Bundle\TddDemoBundle\Util\Calculator;

/**
 * Tests unitaires de la bibliothèque Calculator.
 *
 * @author Sylvain Floury <sylvain@floury.name>
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase {
    /**
     * Test unitaire de la méthode sum.
     */
    public function testSum() {
        $calculator = new Calculator();
        $result = $calculator->sum(2, 3);
        // Controle à effectuer.
        $this->assertEquals(5, $result);
    }
    
}
