<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTier extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'pcs',
        'discount',
    ];
}
