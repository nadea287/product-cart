<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'features',
        'documentation',
        'price',
    ];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function mainImage(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => $value * 100
        );
    }

    protected function decimalPrice(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->price / 100
        );
    }
}
