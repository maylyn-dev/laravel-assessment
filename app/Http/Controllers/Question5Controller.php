<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question5Controller extends Controller
{
    public function solution($arr = [100, 80, 50, 145, 500, 400, 450, 300, 10, 55, 40, 15, 80, 90])
    {
        $price = $arr;
        $n = count($price);
        $count = 0;
        $solution = array();
        
        if ($n == 1) {
            return;
        }

        $count = 0;

        $i = 0;
        while ($i < $n - 1) {
            while(($i < $n - 1) && $price[$i + 1] <= $price[$i])
                $i++;

            if ($i == $n - 1)
                break;

            $interval = array(
                'Buy on day' => null,
                'Sell on day' => null
            );

            $interval['Buy on day'] = $i++;

            while(($i < $n) && ($price[$i] >= $price[$i - 1])) 
                $i++; 
  
            $interval['Sell on day'] = $i - 1;
            array_push($solution, $interval);
  
            $count++; 
        }

        return array(
            'Stock Market Data' => $arr,
            'Solution' => $solution
        );
    }
}
