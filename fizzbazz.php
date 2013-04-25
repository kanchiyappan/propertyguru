<?php
class FizzBazz
{
    public $invalid_range = "invalid range";
    public $nan = "invalid parameter(s)";
    public function rangeFizzBazz($start, $end)
    {
        if (!is_int($start) || !is_int($end)) return $this->nan;
        if ($end < $start) return $this->invalid_range;
        $return = "";
        for ($i = $start; $i <= $end; $i++)
        {
            if ($this->checkBazz($start, $i-1, $i-2))
            {
                $return .= " Bazz";            
            } else if ($i%3 == 0 && $i%5 == 0)
            {
                $return .= " FizzBuzz";
            } else if ($i%3 == 0)
            {
                $return .= " Fizz";
            } else if ($i%5 == 0)
            {
                $return .= " Buzz";
            } else {
                $return .= " ".(string)$i;
            }            
        }
        return trim($return);
    }
    private function checkBazz($first, $a, $b)
    {
        if ($a < $first || $b < $first) return false;
        if (($a%3 == 0 || $a%5 == 0) && ($b%3 == 0 || $b%5 == 0))
        {
            return true;
        }
        return false;
    }
}
?>
