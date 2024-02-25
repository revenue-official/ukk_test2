<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";

    protected $primaryKey = "id_jab";

    protected $fillable = [
        'nm_jabatan'
    ];
}
