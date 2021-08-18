<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\StockBarang;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $kategori   =   Kategori::all();
        $barang     =   StockBarang::all();
        
        return view('user.index', compact('kategori', 'barang'));
    }
}
