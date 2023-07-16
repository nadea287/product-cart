<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
//            'features' => 'required',
//            'documentation' => 'required',
            'price' => 'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
