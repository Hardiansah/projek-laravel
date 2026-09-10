<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusans;
use App\Models\Siswas;
class Kelas extends Model
{
    protected $table='kelas';
    protected $primaryKey = 'id';
    protected $fillable=[
    'nama_kelas',
    'id_jurusan',
    'tingkat'
    ];
   public function jurusan()
    {
       return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
    public function siswas(){
        return $this->hasMany(Siswa::class);
    }
}
