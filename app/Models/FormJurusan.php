<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormJurusan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jurusan1',
        'jurusan2',
    ];
}
