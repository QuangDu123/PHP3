<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'gmail',
        'noiDung',
    ];
}
