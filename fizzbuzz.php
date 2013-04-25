<?php
class FizzBuzz {
    public $invalid_range_int = "invalid integer range";
    public $nan = "invalid parameter(s)";
    public function rangeFizzBuzz($start, $end) {
        if (!is_int($start) || !is_int($end)) return $this->nan;
        if ($end < $start) return $this->invalid_range_int;
        $return = "";
        for ($i = $start; $i <= $end; $i++)
        {
            if ($i%3 == 0 && $i%5 == 0)
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
}
?>
