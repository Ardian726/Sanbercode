<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function utama()
    {
        return view('welcome');
    }

    public function bio()
    {
        return view('halaman.register');
    }

    public function kirim(Request $request)
    {
        $nama1 = $request['name1'];
        $nama2 = $request['name2'];

        return view('halaman.home', ['nama1' => $nama1, 'nama2' => $nama2]);
    }
}
