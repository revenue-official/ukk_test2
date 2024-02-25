<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = "golongan";

    protected $primaryKey = "id_gol";

    protected $fillable = [
        'nm_golongan',
        'gaji'
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'golongan', 'id_gol');
    }
}
