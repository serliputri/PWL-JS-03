<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function satu()
    {
        return view ('program', ['judul' => 'Kerja Industri']);
    }

    public function dua()
    {
        return view ('program', ['judul' => 'Magang']);
    }

    public function tiga()
    {
        return view ('program', ['judul' => 'Karir']);
    }
}
