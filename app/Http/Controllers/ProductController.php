<?php

namespace App\Http\Controllers;

use App\Fileable;
use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Image;
use App\Models\Product;
use App\Services\FileService;
use Illuminate\Http\Request;
use League\CommonMark\Node\Block\Document;

class ProductController extends Controller
{

    public function __construct(private FileService $fileService)
    {
    }

    public function index()
    {
        $products = Product::query()->with('mainImage')->paginate(9);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        $validatedRequest = $request->validated();
        $images = $validatedRequest['images'];
        unset($validatedRequest['images']);

        $product = Product::create($validatedRequest);
        $this->fileService->saveMultipleFiles($images, $product);
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
