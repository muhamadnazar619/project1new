<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Jadwal;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "kelas";

    protected $fillable = ['nama_kelas'];   

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id', 'id');
    }
    
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'kelas_id', 'id');
    }
}
