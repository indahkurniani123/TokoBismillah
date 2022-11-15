<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $data = array('tittle' => 'Kategori Produk');
        return view('kategori.index', $data);
    }
    public function create()
    {
        $data = array('tittle' => 'Form Kategori');
        return view('kategori.create', $data);
    }
    public function edit()
    {
        $data = array('tittle' => 'Form Edit Kategori');
        return view('kategori.edit', $data);
    }
}
