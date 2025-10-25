<?php
declare (strict_types=1);
class operacion{
    public function factorial(int $nVlr):int{
         $nFact = 1;
        for ($nInd = 1; $nInd <= $nVlr; $nInd++) 
        {
         $nFact =$nFact*$nInd;
        }
        return $nFact;
    }
}
