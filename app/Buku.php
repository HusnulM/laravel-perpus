<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'table_buku';
    protected $fillable = ['judul_buku','deksripsi','kategori','cover_img'];
}
