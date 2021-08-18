<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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

        if ($request->hasFile('foto')) {
            $file               =   $request->file('foto');
            $id                 =   date('Ymd');
            $filefile           =   $id . '' .  str_replace(" ", "_", $file->getClientOriginalName());
            if ($request->idkategori == '') {

                $data       =   new Kategori;
                $data->nama =   $request->nama;
                $data->foto =   $filefile;
                $data->save();

                if ($data) {
                    $tujuan_upload = storage_path('kategori');
                    $file->move($tujuan_upload, $filefile);
                }
            } else {
                $data       =   Kategori::find($request->idkategori);
                $data->nama =   $request->nama;
                $data->foto =   $filefile;
                $data->save();

                if ($data) {
                    $tujuan_upload = storage_path('kategori');
                    $file->move($tujuan_upload, $filefile);
                }
            }
        } else {

            if ($request->idkategori == '') {

                $data       =   new Kategori;
                $data->nama =   $request->nama;
                $data->save();
            } else {
                $data       =   Kategori::find($request->idkategori);
                $data->nama =   $request->nama;
                $data->save();
            }
        }

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

    public function liatfoto($id)
    {
        $data   =   Kategori::find($id);

        $path = storage_path('kategori/' . $data->foto);

        $file = File::get($path);

        $type = File::mimeType($path);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }
}
