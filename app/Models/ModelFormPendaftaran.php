<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormPendaftaran extends Model
{
    use HasFactory;
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
        'jurusan1',
        'jurusan2',
        'doc_ketlulus',
        'doc_foto',
        'doc_lainnya',
    ];
    protected $table = 'model_form_pendaftarans';

}
