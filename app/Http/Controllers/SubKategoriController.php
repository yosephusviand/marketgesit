<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{
    //

    public function index()
    {
        $kategori   =   Kategori::all();
        $data       =   SubKategori::all();
        return view('admin.subkategori', compact('kategori', 'data'));
    }

    public function store(Request $request)
    {
        if ($request->idedit == '') {
            
            $data               =   new SubKategori;
            $data->nama         =   $request->nama;
            $data->idkategori   =   $request->kategori;
            $data->save();
        } else {
            $data               =   SubKategori::find($request->idedit);
            $data->nama         =   $request->nama;
            $data->idkategori   =   $request->kategori;
            $data->save();   
        }

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }

    public function edit(Request $request)
    {
        return SubKategori::find($request->id);
    }

    public function fromkategori(Request $request)
    {
        return SubKategori::where('idkategori',$request->id)->get();
    }

    public function destroy($id)
    {
        $data   =   SubKategori::find($id);
        $data->delete();

        return back()->with('status', 1)->with('message', 'Berhasil Hapus Data');
    }
}
