<?php

/**
 * Assumptions
 * ------------
 * FizzBuzz (if a number is both a multiple of 3 and 5) status of previous numbers was considered as Fizz or Buzz when it comes to Bazz.
 */

class FizzBazz {
    
    public $invalid_range = "invalid range";
    public $nan = "invalid parameter(s)";

    public function rangeFizzBazz($start, $end) {
        
        if (!is_int($start) || !is_int($end)) return $this->nan;
        if ($end < $start) return $this->invalid_range;
        
        $return = "";
        
        for ($i = $start; $i <= $end; $i++) {
            
            if ($this->_isBazz($start, $i-1, $i-2)) {
                $return .= " Bazz";            
            } else if ($i%3 == 0 && $i%5 == 0) {
                $return .= " FizzBuzz";
            } else if ($i%3 == 0) {
                $return .= " Fizz";
            } else if ($i%5 == 0) {
                $return .= " Buzz";
            } else /*if ($i%3 != 0 && $i%5 != 0)*/ {
                $return .= " ".(string)$i;
            }            
        }
        
        return trim($return);
    }
    
    private function _isBazz($start, $oneless, $twoless) {
        
        if ($oneless < $start || $twoless < $start) return false;
        
        if (($oneless%3 == 0 || $oneless%5 == 0) && ($twoless%3 == 0 || $twoless%5 == 0)) {
            return true;
        }
        
        return false;
    }
}
?>
