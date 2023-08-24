<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarsiswa extends Model
{
    use HasFactory;
    protected $table = "model_form_pendaftarans";

    public function jurusan(){
        return $this->belongsTo(MJurusan::class);
    }
}
