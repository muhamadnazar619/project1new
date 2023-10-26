<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelajaran;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = "jadwal";
    
    // protected $fillable = ['hari'];
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'pelajaran_id','id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id','id');
    }
}
