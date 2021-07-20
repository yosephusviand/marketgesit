<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //

    public function index()
    {
        $data   =   Kategori::all();
        return view('admin.kategori', compact('data'));
        
    }

    public function store(Request $request)
    {
        $data       =   new Kategori;
        $data->nama =   $request->nama;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }

    public function edit(Request $request)
    {
       return Kategori::find($request->id);
       
    }

    public function destroy($id)
    {
        $data   =   Kategori::find($id);
        $data->delete();

        return back()->with('status', 1)->with('message', 'Berhasil Hapus Data');
    }
}
