<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MJurusan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_jurusan',
    ];
    protected $table = 'm_jurusans';

    public function daftarsiswa(){
        return $this->hasMany(daftarsiswa::class);
    }

}
