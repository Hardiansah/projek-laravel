<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Jurusan extends Model
{
    protected $table='jurusans';
    protected $primaryKey = 'id_jurusan';
    protected $fillable=[
    'nama_jurusan',
    'deskripsi_jurusan',
    ];
    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
    
}
