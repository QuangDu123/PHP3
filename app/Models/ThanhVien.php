<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    protected $table = 'thanhvien';
    protected $primaryKey = 'id';
    protected $fillable = [
        'hoTen',
        'password',
        'email',
        'vai_tro',
    ];
}
