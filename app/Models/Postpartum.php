<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postpartum extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nik',
        'birth',
        'telpon',
        'born',
        'status',
    ];
}
