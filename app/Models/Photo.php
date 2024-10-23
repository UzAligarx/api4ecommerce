<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'imageable_id',
        'imageable_type',
        'path', // Rasmning saqlangan yo'li
    ];

    public function imageable()
    {
        return $this->morphTo(); // Polimorfik bog'lanish
    }
}
