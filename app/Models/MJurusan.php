<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MJurusan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jurusan',
    ];
    protected $table = 'm_jurusans';

}
