<?php
require 'FizzBazz.php';
class FizzBazzTest extends PHPUnit_Framework_TestCase {
    private $checkfizzBuzz;
    public function getFizzBuzz()
    {
        if (!$this->checkfizzBuzz instanceof FizzBazz)
        {
            $this->checkfizzBuzz = new FizzBazz();
        }
        return $this->checkfizzBuzz;
    }
    public function testrangeFizzBazz()
    {
        $result = $this->getFizzBuzz()->rangeFizzBazz("q","r");        
        $this->assertEquals($this->getFizzBuzz()->nan, $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(20,10);        
        $this->assertEquals($this->getFizzBuzz()->invalid_range, $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(12,16);        
        $this->assertEquals('Fizz 13 14 FizzBuzz 16', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(1,8);        
        $this->assertEquals('1 2 Fizz 4 Buzz Fizz Bazz 8', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(25,32);        
        $this->assertEquals('Buzz 26 Fizz 28 29 FizzBuzz 31 32', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(25,25);        
        $this->assertEquals('Buzz', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(23,23);        
        $this->assertEquals('23', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(30,30);        
        $this->assertEquals('FizzBuzz', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(0,0);      
        $this->assertEquals('FizzBuzz', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(4,11);        
        $this->assertEquals('4 Buzz Fizz Bazz 8 Fizz Buzz Bazz', $result);
        $result = $this->getFizzBuzz()->rangeFizzBazz(4,12);        
        $this->assertEquals('4 Buzz Fizz Bazz 8 Fizz Buzz Bazz Fizz', $result);
    }
}
?>
