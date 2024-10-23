<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory , HasTranslations;

    protected $fillable = [
        'name'
    ];

    public $translatable = [
        'name'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable'); // Polimorfik bog'lanish
    }
}
