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
        $fields = parent::toArray($request);
        $fields['categoryName'] = $this->categoryName;
        $fields['image'] = $this->getImageUrl();
        return $fields;
    }
}
