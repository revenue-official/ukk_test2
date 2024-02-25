<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";

    protected $primaryKey = "id_peg";

    protected $gillable = [
        'nip',
        'nama_pegawai',
        'tgl_lahir',
        'golongan',
        'jabatan',
        'jenis_kelamin',
    ];

    public $timestamps = false;
}
