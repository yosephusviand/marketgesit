<?php

namespace App\Http\Controllers;

use App\Models\FotoStockBarang;
use App\Models\Kategori;
use App\Models\StockBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class BarangController extends Controller
{
    //

    public function index()
    {
        $kategori   =   Kategori::all();
        $data       =   StockBarang::all();
        return view('admin.barang', compact('kategori', 'data'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        if ($request->hasFile('foto') && $request->hasFile('fotoutama')) {
            $file               =   $request->file('fotoutama');
            $id                 =   date('Ymd');
            $filefile           =   $id . '' .  str_replace(" ", "_", $file->getClientOriginalName());

            if ($request->idedit == '') {
                $data                   =   new StockBarang;
                $data->idkategori       =   $request->kategori;
                $data->idsubkategori    =   $request->subkategori;
                $data->nama             =   $request->nama;
                $data->qty              =   $request->qty;
                $data->stock_qty        =   $request->qty;
                $data->harga            =   $request->harga;
                $data->deskripsi        =   $request->deskripsi;
                $data->foto             =   $filefile;
                $data->save();

                if ($data) {
                    $tujuan_upload = storage_path('stockbarang');
                    $file->move($tujuan_upload, $filefile);
                }

                $cek                  =   StockBarang::max('id');

                $image = $request->file('foto');
                foreach ($image as $j => $files) {
                    $id                 =   date('Ymd');
                    $file             =   $id . '' . str_replace(" ", "_", $files->getClientOriginalName());

                    $fotoedit           =  new FotoStockBarang;
                    $fotoedit->idbarang =  $cek;
                    $fotoedit->foto     =  $file;
                    $fotoedit->save();

                    if ($fotoedit) {
                        $tujuan_upload = storage_path('fotodetail');
                        $files->move($tujuan_upload, $file);
                    }
                }
            } else {

                $data                   =   StockBarang::find($request->idedit);
                $data->idkategori       =   $request->kategori;
                $data->idsubkategori    =   $request->subkategori;
                $data->nama             =   $request->nama;
                $data->qty              =   $request->qty;
                $data->stock_qty        =   $request->qty;
                $data->harga            =   $request->harga;
                $data->deskripsi        =   $request->deskripsi;
                $data->foto             =   $filefile;
                $data->save();

                if ($data) {
                    $tujuan_upload = storage_path('stockbarang');
                    $file->move($tujuan_upload, $filefile);
                }

                $cek                  =   FotoStockBarang::where('idbarang', $request->idedit)->first();

                if (is_null($cek)) {
                    if ($request->hasFile('foto')) {
                        $image = $request->file('foto');
                        foreach ($image as $files) {
                            $id                 =   date('Ymd');
                            $file               =   $id . '' . str_replace(" ", "_", $files->getClientOriginalName());

                            $fotoinput               =   new FotoStockBarang;
                            $fotoinput->foto         =   $file;
                            $fotoinput->save();

                            if ($fotoinput) {
                                $tujuan_upload = storage_path('fotodetail');
                                $files->move($tujuan_upload, $file);
                            }
                        }
                    }
                } else {

                    if ($request->hasFile('foto')) {
                        $image = $request->file('foto');
                        $data    =  FotoStockBarang::where('idbarang', $request->idedit)->get();
                        foreach ($image as $j => $files) {
                            $id                 =   date('Ymd');
                            $file[]             =   $id . '' . str_replace(" ", "_", $files->getClientOriginalName());

                            $tujuan_upload = storage_path('fotodetail');
                            $files->move($tujuan_upload, $file[$j]);
                        }
                        foreach ($data as $i => $dat) {
                            $fotoedit          =   FotoStockBarang::find($dat->id);
                            $fotoedit->foto    =   $file[$i];
                            $fotoedit->save();
                        }
                    }
                }
            }
        } else {
            if ($request->idedit == '') {
                $data                   =   new StockBarang;
                $data->idkategori       =   $request->kategori;
                $data->idsubkategori    =   $request->subkategori;
                $data->nama             =   $request->nama;
                $data->qty              =   $request->qty;
                $data->stock_qty        =   $request->qty;
                $data->harga            =   $request->harga;
                $data->deskripsi        =   $request->deskripsi;
                $data->save();
            } else {
                $data                   =   StockBarang::find($request->idedit);
                $data->idkategori       =   $request->kategori;
                $data->idsubkategori    =   $request->subkategori;
                $data->nama             =   $request->nama;
                $data->qty              =   $request->qty;
                $data->stock_qty        =   $request->qty;
                $data->harga            =   $request->harga;
                $data->deskripsi        =   $request->deskripsi;
                $data->save();
            }
        }

        DB::commit();

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }

    public function liatfoto($id)
    {
        $data   =   StockBarang::find($id);
        
        $path = storage_path('stockbarang/'.$data->foto);

        $file = File::get($path);

        $type = File::mimeType($path);
    
        $response = Response::make($file, 200);
    
        $response->header("Content-Type", $type);
    
        return $response;
    }
    public function liatfotodetail($id)
    {
        $data   =   FotoStockBarang::find($id);
        
        $path = storage_path('fotodetail/'.$data->foto);

        $file = File::get($path);

        $type = File::mimeType($path);
    
        $response = Response::make($file, 200);
    
        $response->header("Content-Type", $type);
    
        return $response;
    }
}
