<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product_param extends Model
{
    use HasFactory , HasTranslations;

    protected $fillable = [
        'product_id',
        'size_id',
        'color_id',
        'video',
        'description',
        'coctav',
        'amount',
        'price',
        'created_at',
        'updated_at'
    ];

    public $translatable = [
        'description' , 'coctav'
    ];
}
