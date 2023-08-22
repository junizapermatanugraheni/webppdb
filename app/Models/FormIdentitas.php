<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormIdentitas extends Model
{
    use HasFactory;
    protected $fillable= [
        'nmlengkap',
        'nik',
        'nisn',
        'alamat',
        'notelp_siswa',
        'tmplahir',
        'tgllahir',
        'jnskelamin',
        'agama',
        'asal_sekolah',
        'alamat_sekolah',
        'nmortu',
        'alamat_ortu',
        'pekerjaan_ortu',
        'notlp_ortu',
    ];
}
