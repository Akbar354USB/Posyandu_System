<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'height',
        'weight',
        'lk',
        'll',
        'toddler_id'
    ];

    public function toddler(){
        return $this->belongsTo(Toddler::class);
    }
}
