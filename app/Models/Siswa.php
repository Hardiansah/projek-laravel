<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Jurusan;
class Siswa extends Model
{
   protected $table='Siswas';
    protected $primaryKey = 'id_siswa';
    protected $fillable=[
    'nis',
    'nama',
    'id_kelas'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas','id_kelas');
    }
}
