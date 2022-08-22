<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LTin extends Model
{
    protected $table = 'loaitin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ten',
        'idanHien',
    ];
}
