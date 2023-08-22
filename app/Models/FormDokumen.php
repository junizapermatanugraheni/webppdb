<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormDokumen extends Model
{
    use HasFactory;
    protected $fillable= [
        'doc_ketlulus',
        'doc_foto',
        'doc_lainnya',
    ];
}
