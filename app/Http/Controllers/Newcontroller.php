<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newcontroller extends Controller
{
    public function index()
    {
        return view('routing');
    }

    public function post(Request $request)
    {
        $data = $request->input('name');
        return view("routing", ['id' => "empty", "data" => $data]);
    }
}
