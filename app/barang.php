<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = ['namaBarang','image','idKategori','hargaModal','berat','stok','hargaCoret'];
}
