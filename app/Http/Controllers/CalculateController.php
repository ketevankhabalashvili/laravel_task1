<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calculator() {



        return view('calculate');
    }


    public function calculate (Request $request) {


        $request->validate([
            'numberOne' => 'required',
            'numberTwo' => 'required',
            'action' => 'max:255|required'
        ]);

        $first_num = $request->numberOne;
        $second_num = $request->numberTwo;
        $action = $request->action;

        if ($action == 'add') {
            $result = $first_num + $second_num;
        }
        elseif ($action == 'subtraction') {
            $result = $first_num - $second_num;
        }
        elseif ($action == 'multiplication') {
            $result = $first_num * $second_num;
        }
        elseif ($action == 'division') {
            $result = $first_num / $second_num;
        }
        else {
            $result = '';
        }


        return view('result')->with('result', $result);
    }

}
