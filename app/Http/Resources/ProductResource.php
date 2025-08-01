<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'category' => $this->category->name,
            'brand' => $this->brand->name,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'inStock' => $this->inStock,
            'published' => $this->published
        ];
    }
}
