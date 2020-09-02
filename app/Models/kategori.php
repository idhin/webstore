<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['namaKategori', 'jmlPost', 'parent_id', 'jmlPost'];
    protected $table = 'kategoris';
    // protected $fillable = ['name'];

    // public function childs() {
    //     return $this->hasMany('App\Models\Kategori', 'parent_id');
    // }

    // public function parent() {
    //     return $this->belongsTo('App\Models\Kategori', 'parent_id');
    // }
}
