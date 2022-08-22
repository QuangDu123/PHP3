<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idTin',
        'noiDung',
        'anHien',
    ];
}
