<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return " NIM : 20417230 </br> 
        Nama : Moch Yudha Erian Saputra";
    }
    public function articles($id)
    {
        return "Halaman Artikel ".$id;
    }
   
}
