<?php

require 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    
    private $_fizzBuzz;
    
    public function getFizzBuzz() {
        
        if (!$this->_fizzBuzz instanceof FizzBuzz) {
            $this->_fizzBuzz = new FizzBuzz();
        }
        
        return $this->_fizzBuzz;
    }

    public function testRangeFizzBuzz() {
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz("q","r");        
        $this->assertEquals($this->getFizzBuzz()->nan, $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(20,10);        
        $this->assertEquals($this->getFizzBuzz()->invalid_range, $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(12,16);        
        $this->assertEquals('Fizz 13 14 FizzBuzz 16', $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(1,8);        
        $this->assertEquals('1 2 Fizz 4 Buzz Fizz 7 8', $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(25,32);        
        $this->assertEquals('Buzz 26 Fizz 28 29 FizzBuzz 31 32', $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(25,25);        
        $this->assertEquals('Buzz', $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(23,23);        
        $this->assertEquals('23', $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(30,30);        
        $this->assertEquals('FizzBuzz', $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(0,0); //Because 3*0 = 0, and 5*0 = 0       
        $this->assertEquals('FizzBuzz', $result);
        
        $result = $this->getFizzBuzz()->rangeFizzBuzz(4,11);        
        $this->assertEquals('4 Buzz Fizz 7 8 Fizz Buzz 11', $result);
    }
}
?>
