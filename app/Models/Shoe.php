<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Price',
        'Size',
        'Color',
        'Photo',
        'CategoryId'
    ];
}
