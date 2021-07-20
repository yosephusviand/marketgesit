<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockBarang extends Model
{
    //

    protected $table = 'stockbarang';

    public function tokategori()
    {
        return $this->belongsTo(Kategori::class, 'idkategori', 'id');
    }

    public function tosubkategori()
    {
        return $this->belongsTo(SubKategori::class, 'idsubkategori', 'id');
    }

    public function tofotodetail()
    {
        return $this->hasMany(FotoStockBarang::class, 'idbarang', 'id');
    }
}
