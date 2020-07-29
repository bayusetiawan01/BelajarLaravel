<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = "materi";
    protected $fillable = ['judul', 'video', 'deskripsi', 'youtube', 'kuis'];
}
