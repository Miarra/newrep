<?php 

namespace Miarra\Calculator;

use Miarra\Calculator\Sumator;

/**
 * Description of Calculator
 *
 * @author Michaela
 */
class Calculator {
    
    /** @var Sumator */
    private $sumator;
    
    /** @var bool Description */
    private $countAsInt;

    public function __construct(Sumator $s) {
        $this->sumator = $s;
    }
    
    public function setCountAsInt($countAsInt) {
        $this->countAsInt = $countAsInt;
    }
}
