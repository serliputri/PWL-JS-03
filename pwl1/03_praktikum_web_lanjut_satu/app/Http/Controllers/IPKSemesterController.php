<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IPKSemester;

class IPKSemesterController extends Controller
{
    public function index(){
        return view('nilaiIpk',[
            'ipkSemester' => IPKSemester::all()
        ]);
    }
}
