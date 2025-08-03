<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->with('category')
            ->with('brand')
            ->latest()
            ->paginate(7);

        $categories = Category::all();
        $brands = Brand::all();
        if ($request->wantsJson()) {
            return ProductResource::collection($products);
        }
        return Inertia::render('Admin/Product', [
            'products' => ProductResource::collection($products),
            'categories' => $categories,
            'brands' => $brands,
            'success' => session()->get('success')
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $data['description'] = nl2br($data['description']);
        // Product::create($data);

        return back()->with('success', 'product created successfully');
    }
}
