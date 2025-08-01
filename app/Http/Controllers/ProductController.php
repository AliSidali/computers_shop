<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
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
            ->paginate(7);

        if ($request->wantsJson()) {
            return ProductResource::collection($products);
        }
        return Inertia::render('Admin/Product', [
            'products' => ProductResource::collection($products)
        ]);
    }
}
