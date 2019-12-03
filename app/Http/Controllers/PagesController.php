<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //membuat controller home
    public function home()
    {
    	return view('home');
    }
    // membuat controller about
    public function about()
    {
    	return view('about',['nama' => 'Ega novianingsih']);
    }

    // public function mahasiswa()
    // {
    // 	return view('mahasiswa');
    // }
}
