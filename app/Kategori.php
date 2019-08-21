<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'table_kategori';
    protected $fillable = ['deskripsi'];
}
