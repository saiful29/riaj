<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'publisher_name',
        'writer_name',
        'stock',
        'price',
        'category_id',
        'image',
        'description'
    ];
}
