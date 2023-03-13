<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurhatController extends Controller
{
    public function index(){
        return view('curhat');
    }
}