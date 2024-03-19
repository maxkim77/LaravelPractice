<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{

    public function index(){
        $data = Sample::all();
        return view('sample', ['data' => $data]);
    }
}