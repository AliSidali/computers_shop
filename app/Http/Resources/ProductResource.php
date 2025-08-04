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
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category->name,
            'brand' => $this->brand->name,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'description' => preg_replace('/<br \s*\/?>/i', "\n", $this->description),
            'inStock' => $this->inStock,
            'published' => $this->published,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            "created_at" => $this->convertTimestampToDate()

        ];
    }
}
