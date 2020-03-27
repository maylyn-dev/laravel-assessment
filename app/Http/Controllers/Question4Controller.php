<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question4Controller extends Controller
{
    public function solution($string = 'embezzlement')
    {
        $arr = str_split($string);
        $mostFrequent = null;
        $leastFrequent = null;
        
        $count1 = array_count_values($arr);
        $max = max($count1);
        $min = min($count1);
        $maxChars = array_keys($count1, $max);
        $minChars = array_keys($count1, $min);

        if (count($maxChars) > 1) {
            $mostFrequent = max($maxChars);
        } else {
            $mostFrequent = $maxChars[0];
        }

        if (count($minChars) > 1) {
            $leastFrequent = max($minChars);
        } else {
            $leastFrequent = $minChars[0]; 
        }

        return array(
            'Most Frequent Character' => $mostFrequent,
            'Least Frequent Character' => $leastFrequent
        );
    }
}
