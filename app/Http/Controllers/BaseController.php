<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $result;
    public function __construct()
    {
        $this->result = 0;
    }

    public function plus($num)
    {
       
        return $num + 5;
    }

}
