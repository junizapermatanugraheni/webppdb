<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ModelFormPendaftaran extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'calonsiswa';
    protected $fillable = [
        'nopendaftaran',
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
        'nilai_bindo',
        'nilai_binggris',
        'nilai_mtk',
        'nilai_ipa',
        'doc_nilaiujian',
        'idjurusan',
        'doc_ketlulus',
        'doc_foto',
        'doc_lainnya',
        'password',
        'total',
    ];
    protected $table = 'model_form_pendaftarans';
    
}
