<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormNilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nilai_bindo',
        'nilai_binggris',
        'nilai_mtk',
        'nilai_ipa',
        'doc_nilaiujian',
    ];
}
