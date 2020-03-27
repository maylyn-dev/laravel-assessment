<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question1Controller extends Controller
{
    public function solution($number)
    {
        $binaryArr = $this->convertDecimalToBinary($number);
        $maxGap = $this->getMaxGap($binaryArr);

        return array(
            'Maximum Binary Gap' => $maxGap
        );
    }

    public function convertDecimalToBinary($number)
    {
        $base = 2;
        $quotient = $number;
        $remainders = array();

        do {
            $remainders[] = $quotient % $base;
            $quotient = floor($quotient / $base);
        } while ($quotient > 0);

        return $remainders;
    }

    public function getMaxGap($binaryArr)
    {
        $binaryStr = implode($binaryArr);
        $trimmed = trim($binaryStr, 0);
        $binaryGap =  explode('1',$trimmed);
        $binaryCount = array_map('strlen', $binaryGap);
        
        return max($binaryCount);
    }
}