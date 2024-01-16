<?php

// app/Http/Controllers/MultiplicationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function index()
    {
        return view('mypage');
    }

    public function calculate(Request $request)
    {
        $number = $request->input('number');
        return redirect()->route('multiplication.show', ['number' => $number]);
    }

    public function show($number)
    {
        return view('myroute', compact('number'));
    }
}
