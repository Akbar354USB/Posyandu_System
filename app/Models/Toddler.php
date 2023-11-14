<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toddler extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nik',
        'adress',
        'date_birth',
        'name_mom',
        'gender',
        'posyandu_id'
    ];

    public function posyandu(){
        return $this->belongsTo(Posyandu::class);
    }
}
