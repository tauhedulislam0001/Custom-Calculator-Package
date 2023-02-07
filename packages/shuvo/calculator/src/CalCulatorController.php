<?php

namespace shuvo\calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalCulatorController extends Controller
{
    public function add($a, $b) {
        $result = $a + $b;
        return view('calculator::add', compact('result'));
    }

    public function substract($a, $b) {
        $result = $a - $b;
        return view('calculator::add', compact('result'));
    }
}
