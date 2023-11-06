<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kb extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_husband',
        'name_wife',
        'adress',
        'contraception',
        'installed',
        'uninstal'
    ];
}
