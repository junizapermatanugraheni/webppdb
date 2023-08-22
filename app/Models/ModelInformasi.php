<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelInformasi extends Model
{
    use HasFactory;
    protected $fillable = ['nama_jurusan','kuota','akreditasi','jmlkelas'];
    protected $table = 'model_informasis';
}
