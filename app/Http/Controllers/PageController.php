<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about() {
        return 'NIM : 2241720258
                <br>
                Nama : Haidar Aly';
    }

    public function articles($id)
    {
        return 'Ini adalah halaman artikel dengan id: '. $id;
    }

    public function index() {
        return 'Selamat Datang';
    }   
}
