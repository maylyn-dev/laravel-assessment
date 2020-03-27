<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question3Controller extends Controller
{
    public function solution($arr = [9, 3, 9, 3, 9, 7, 9])
    {
        $unpairedElement = $this->getUnpairedElement($arr);

        return array(
            'Unpaired Element' => $unpairedElement
        );
    }

    public function getUnpairedElement($arr) {
        foreach($arr as $num) {
            $count = count(array_keys($arr, $num));
            if ($count == 1) {
                return $num;
            }
        }
    }
}
