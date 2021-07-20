<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    //

    protected $table = 'subkategori';

    public function tokategori()
    {
        return $this->hasMany(Kategori::class, 'id', 'idkategori');
    }
}
