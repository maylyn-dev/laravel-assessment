<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question2Controller extends Controller
{
    public function solution($arr = [1, 2, 3, 4, 5, 7, 8])
    {
        $desiredArrLen = count($arr) + 1;
        $completeList = $this->generateNumList($desiredArrLen);
        $missingNum = array_values(array_diff($completeList, $arr));

        return array(
            'Array' => $arr,
            'Missing Number' => $missingNum[1]
        );
    }

    public function generateNumList($length)
    {
        $numList = array();
        $val = 0;
        do {
            array_push($numList, $val);
            $val = $val + 1;
        } while($val <= $length);

        return $numList;
    }
}
