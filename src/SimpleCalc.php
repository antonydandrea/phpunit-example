<?php
namespace SimpleCalc;

class SimpleCalc
{
    public function add10Percent($value)
    {
        $result = $value + (abs($value) * 0.1);
        if ((int)$result == $result) {
            $result = (int)$result;
        }
        return $result;        
    }
}