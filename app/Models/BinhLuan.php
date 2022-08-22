<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = 'binhluan';
    protected $primaryKey = 'id';
    protected $dates = ['ngayDang'];
    protected $fillable = [
        'idTin',
        'ngayDang',
        'noiDung',
        'email',
        'userID',
        'hinh',
        'idLT',
        'anHien',
    ];
    // use HasFactory;
}
